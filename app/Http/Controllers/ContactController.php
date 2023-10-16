<?php

namespace App\Http\Controllers;

use App\Notifications\{ClientContact, ClientThanks};
use App\Models\{Client};
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Notification;
use Symfony\Component\HttpFoundation\IpUtils;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{

    public function index(Request $request)
    {
        $email = $request->input('email');

        return view('home.contact', compact('email'));
    }

    public function store(Request $request)
    {
        $recaptcha_response = $request->input('g-recaptcha-response');

        if (is_null($recaptcha_response)) {
            return redirect()->back()->with('status', 'Please Complete the Recaptcha to proceed');
        }

        $url = "https://www.google.com/recaptcha/api/siteverify";

        $body = [
            'secret' => config('services.recaptcha.secret'),
            'response' => $recaptcha_response,
            'remoteip' => IpUtils::anonymize($request->ip()) //anonymize the ip to be GDPR compliant. Otherwise just pass the default ip address
        ];

        $response = Http::asForm()->post($url, $body);

        $result = json_decode($response);

        if ($response->successful() && $result->success == true) {

            try {
                $data = $request->validate([
                    'name' => 'required|min:3',
                    'phone' => 'nullable',
                    'email' => 'required|email',
                    'description' => 'required|min:10'
                ], [
                    'name.required' => 'Você precisa informar seu nome.',
                    'name.min' => 'Nome precisa ter no mínimo :min caracteres.',
                    'email.required' => 'É obrigatório informar um email.',
                    'email.email' => 'Você precisa informar um endereço de email válido.',
                    'description.required' => 'Você precisa descrever o serviço desejado.',
                    'description.min' => 'A descrição precisa ter no mínimo :min caracteres.',
                ]);

                $client = Client::create($data);

                Notification::route('mail', 'noc@atelietec.com.br')->notify(new ClientContact($client));
                $client->notify(new ClientThanks($client));

                return redirect()->route('thank-you');
            } catch (ValidationException $e) {
                $errors = $e->errors();
                return redirect()->back();
            } catch (\Exception $e) {
                $errors = new MessageBag(['error' => 'Ocorreu um erro ao criar o cliente: ' . $e->getMessage()]);
                return redirect()->back();
            }

        } else {
            return redirect()->back()->with('status', 'Please Complete the Recaptcha to proceed');
        }
    }

}

<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class TicketCreated extends Notification
{
    use Queueable;

    protected $user;
    protected $ticketFacility;

    /**
     * Create a new notification instance.
     */
    public function __construct(
        $user,
        $ticketFacility
    )
    {
        $this->user = $user;
        $this->ticketFacility = $ticketFacility;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('AtelieTec - Novo chamado #' . $this->ticketFacility->id)
            ->markdown('mail.ticket.created', ['user' => $this->user, 'ticketFacility' => $this->ticketFacility]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}

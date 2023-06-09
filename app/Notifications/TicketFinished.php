<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class TicketFinished extends Notification
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
            ->subject('AtelieTec - Chamado #' . $this->ticketFacility->id . ' finalizado')
            ->markdown('mail.ticket.finished', ['user' => $this->user, 'ticketFacility' => $this->ticketFacility]);
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

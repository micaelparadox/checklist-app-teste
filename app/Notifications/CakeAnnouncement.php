<?php

namespace App\Notifications;

use App\Models\Cake;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CakeAnnouncement extends Notification
{
    use Queueable;

    private Cake $cake;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Cake $cake)
    {
        $this->cake = $cake;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Novo anúncio de bolo :cake:')
            ->line('Novo anúncio de bolo')
            ->line('Nome: ' . $this->cake->name)
            ->line('Peso: ' . $this->cake->weight)
            ->line('Preço: ' . $this->cake->price)
            ->line('Quantidade: ' . $this->cake->quantity);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}

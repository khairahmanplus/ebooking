<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PendaftaranBerjaya extends Notification
{
    use Queueable;

    public $emel;

    public $kata_laluan;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($emel, $kata_laluan)
    {
        $this->emel = $emel;
        $this->kata_laluan = $kata_laluan;
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
                    ->line('Terima kasih kerana mendaftar.')
                    ->line('Berikut merupakan emel dan kata laluan yang telah didaftarkan.')
                    ->line('Emel: ' . $this->emel)
                    ->line('Kata Laluan: ' . $this->kata_laluan)
                    ->line('Anda boleh log masuk dengan menggunakan emel dan kata laluan yang dipaparkan.')
                    ->action('Log Masuk', url('/log-masuk'))
                    ->line('Terima kasih kerana menggunakan ebooking!');
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

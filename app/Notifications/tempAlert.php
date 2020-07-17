<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\NexmoMessage;

class tempAlert extends Notification implements ShouldQueue
{
    use Queueable;

    public $temp;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($temp)
    {
        $this->temp = $temp;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'nexmo'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $temp = $this->temp;
        
        return (new MailMessage)
                    ->subject('SYSTEM OVER HEATING')
                    ->line("System overheating, above set threshold, ". $temp ." degrees")
                    ->line('Thank you!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toNexmo($notifiable)
    {
        $temp = $this->temp;
        return (new NexmoMessage())
                        ->content(" SYSTEM Temperature above set threshold, ". $temp ." degrees");
    }
}

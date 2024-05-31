<?php

namespace App\Notifications\Public\Newsletter;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserSubscribedNotification extends Notification
{
    use Queueable;

    protected $subscriber;

    /**
     * Create a new notification instance.
     */
    public function __construct($subscriber)
    {
        $this->subscriber = $subscriber;
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
        ->subject('¡Gracias por seguir confiando en nosotros!')
        ->greeting('¡Hola!')
        ->line('Queremos agradecerte por suscribirte a nuestro boletín. Como cliente valioso, recibirás acceso anticipado a ofertas exclusivas y noticias sobre nuestros mejores destinos turísticos.')
        ->line('Nos alegra mucho poder seguir acompañándote en tus aventuras. Queremos recompensar tu lealtad ofreciéndote contenido especial y personalizado, con las mejores recomendaciones para tus próximas vacaciones.')
        ->action('Explora nuestras ofertas', url('/'))
        ->line('---')
        ->line('Si en algún momento decides que ya no deseas recibir nuestras comunicaciones, puedes darte de baja haciendo clic en el siguiente enlace:')
        ->action('Darse de baja', url('/unsubscribe'))
        ->line('---')
        ->line('Para cualquier consulta o asistencia, no dudes en contactarnos. Estamos aquí para ayudarte.')
        ->line('¡Gracias por ser parte de nuestra comunidad!')
        ->salutation('Atentamente,')
        ->salutation('El equipo de Soporte de Nuestra Empresa');
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

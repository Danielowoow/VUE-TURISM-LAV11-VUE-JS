<?php

namespace App\Notifications\Public\Newsletter;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NonUserSubscribedNotification extends Notification
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
        ->subject('¡Bienvenido a nuestro Newsletter de Turismo!')
        ->greeting('¡Hola!')
        ->line('Gracias por suscribirte a nuestro boletín. A partir de ahora, recibirás las mejores ofertas y novedades de destinos turísticos increíbles directamente en tu bandeja de entrada.')
        ->line('Nos comprometemos a ofrecerte contenido de calidad, con recomendaciones exclusivas y consejos para que planifiques tus próximas vacaciones de la mejor manera.')
        ->action('Visítanos', url('/'))
        ->line('---')
        ->line('Si en algún momento decides que ya no deseas recibir nuestras comunicaciones, puedes darte de baja haciendo clic en el siguiente enlace:')
        ->action('Darse de baja', url('/unsubscribe'))
        ->line('---')
        ->line('Si tienes alguna pregunta o necesitas asistencia, no dudes en contactarnos.')
        ->line('¡Esperamos que disfrutes de nuestras noticias y ofertas!')
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

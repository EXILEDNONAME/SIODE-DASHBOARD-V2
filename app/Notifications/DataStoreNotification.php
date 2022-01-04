<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class DataStoreNotification extends Notification {
  use Queueable;
  private $DataStore;

  public function __construct($DataStore) {
    $this->DataStore = $DataStore;
  }

  public function via($notifiable) {
    return ['database'];
  }

  public function toMail($notifiable) {
    return (new MailMessage)
    ->line('The introduction to the notification.')
    ->action('Notification Action', url('/'))
    ->line('Thank you for using our application!');
  }

  public function toArray($notifiable) {
    return [
      $this->DataStore
    ];
  }
}

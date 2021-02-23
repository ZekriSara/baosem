<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AlertMail extends Mailable
{
    use Queueable, SerializesModels;
 public $user;
 public $jourrestant;
    /**
     * Create a new message instance.
     *
     * @param $user
     */
    public function __construct($user,$jourrestant)
    {
        $this->user=$user;
        $this->jourrestant=$jourrestant;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.alert');
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResetMail extends Mailable
{
    use Queueable, SerializesModels;
    public $token;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('pengirim@malasngoding.com')
                   ->view('emailku')
                   ->with(
                    [
                        // 'logo' => '/images/logo.jpeg',
                        // 'nama' => 'Diki Alfarabi Hadi',
                        // 'website' => 'www.malasngoding.com',
                    ]);
    }
}

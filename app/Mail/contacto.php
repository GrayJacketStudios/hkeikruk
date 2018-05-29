<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
 
class contacto extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $message;
 
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {

        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->message = $data['msg'];
    }
 
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email)
                    ->text('emails.contact')
                    
                    ->with(
                      [
                            'nombre' => $this->name,
                            'email' => $this->email,
                            'mensaje' => $this->message
                      ])
                      ;
    }
}
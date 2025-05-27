<?php
namespace App\Mail;

use App\Models\GameMatch;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MatchAssigned extends Mailable
{
    use Queueable, SerializesModels;

    public $match;
    public $recipient;

    public function __construct(GameMatch $match, $recipient)
    {
        $this->match = $match;
        $this->recipient = $recipient;
    }

    public function build()
    {
        return $this->subject('¡Se te ha asignado un nuevo match!')
                    ->view('emails.match_assigned');
    }
}

<?php

namespace App\Mail;

use App\Models\Attendance;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CoordinatorReport extends Mailable
{
    use Queueable, SerializesModels;

    public $attendances;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($attendances)
    {
        $this->attendances = $attendances;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.attendance')
                        ->with(['attendances'=> $this->attendances]);
    }
}
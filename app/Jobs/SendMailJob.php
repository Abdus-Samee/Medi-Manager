<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Medicine;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyMail;
use App\Models\User;
use Carbon\Carbon;

class SendMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $medicine;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Medicine $medicine)
    {
        $this->medicine = $medicine;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $receiver = User::find($this->medicine->user_id);

        $details = [
            'name' => $this->medicine->name,
            'description' => $this->medicine->description
        ];

        Mail::to($receiver)->send(new NotifyMail($details));
    }
}

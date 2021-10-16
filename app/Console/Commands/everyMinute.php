<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Medicine;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyMail;
use App\Models\User;

class everyMinute extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'minute:sendEmail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send scheduled emails';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Mail::to('abdussamee16@gmail.com')->send(new NotifyMail([
            'name' => 'gg',
            'description' => 'dd'
        ]));
        // $currentDate = Carbon::now()->toDateString();
        // $medicines = Medicine::select("*")->where("date", "=", $current)->get();

        // foreach($medicines as $medicine){
        //     $receiver = User::find($medicine->user_id);
        //     $details = [
        //         'name' => $medicine->name,
        //         'description' => $medicine->description,
        //     ];

        //     $now = Carbon\Carbon::now()->formate('H:i:s');
        //     $schedule = $medicine->time;

        //     if($now == $schedule) Mail::to($receiver)->send(new NotifyMail($details));
        // }
    }
}

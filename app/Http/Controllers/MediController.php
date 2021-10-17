<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;
use App\Models\User;
use App\Jobs\SendMailJob;
use Carbon\Carbon;
Use Alert;

class MediController extends Controller
{
    public function index(){
        return view('medi');
    }

    public function create(){
        $medicine = new Medicine();

        $medicine->name = request('name');
        $medicine->description = request('description');
        $medicine->user_id = auth()->user()->id;
        $medicine->date = request('date');
        $medicine->time = request('time');

        $medicine->save();

        $now = Carbon::now();
        $schedule = Carbon::parse($medicine->date.' '.$medicine->time)->subHours(6);
        $diff = $schedule->diffInMinutes($now);
        $when = $now->addMinutes($diff);

        error_log($diff);

        $job = (new SendMailJob($medicine))->delay(Carbon::now()->addMinutes($diff));

        dispatch($job);

        Alert::success('Scheduled!', $medicine->name.' has been scheduled for '.$medicine->date.' at '.$medicine->time);

        return redirect('home');
    }
}

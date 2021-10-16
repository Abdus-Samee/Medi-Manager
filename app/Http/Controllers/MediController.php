<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;

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

        return redirect('medi');
    }
}

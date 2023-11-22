<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Jobs\SendMailJob;
use Illuminate\Http\Request;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function main(){
        return view('auth.main');
    }
    
    public function index(){
        return view('emails.kirim-email');
    }
    
    // public function store(Request $request){
    //     $data = $request->all();
    //     dispatch(new SendMailJob($data));
    //     return redirect()->route('kirim-email')
    //     ->with('success','Email berhasil dikirim');
    // }

    public function store(Request $request) {
        $data = $request->all();
        dispatch (new SendMailJob($data));
        return redirect()->route('main')
            ->with('success', 'Email berhasil dikirim');
    }
}

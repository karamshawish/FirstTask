<?php

namespace App\Http\Controllers;
use App\Message;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

        public function dashboard()
    {
        if(Auth::user()->type=="admin"){
        return view('dashboard');
}
        return redirect("/") ;
    }

        public function send()
    {
        if(Auth::user()->type=="admin"){
        return view('send');
}
        return redirect("/") ;
    }


    public function createMessage(Request $req)
    {
        if(Auth::user()->type=="admin"){
        
        $message = $req->input('message');
        $user_email = $req->input('user_email');
          Message::create([
            'message' => $message,
            'user_email' => $user_email,
            'admin_id'=>Auth::user()->id,
            // 'address' => $address,
            // 'birth_date' => $birth_date,
        ]);
          return redirect("/send");
}


        return redirect("/") ;
    }
    
        public function user()
    {
        if(Auth::user()->type=="user"){
            $messages = Auth::user()->messages();
            
        return view('user',compact('messages'));
}
        return redirect("/") ;
    }
    


}

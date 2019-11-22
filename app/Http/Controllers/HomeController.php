<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;



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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function mail(Request $request)
    {
        // dd($request->all());
    $destino = $request->email;
    $nome = $request->nome;
    $assunto = $request->assunto;
    $corpo = $request->corpo;

    $meu_email = new SendEmail($nome, $assunto, $corpo);
       Mail::to($destino)->send($meu_email);
       // dd($meu_email);
       
       return 'Email was sent';
    }
}

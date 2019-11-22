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
    $destino = $request->destino;
    $nome = $request->nome;
    $assunto = $request->assunto;
    $descricao = $request->descricao;

    $meu_email = new SendEmail($nome,$assunto,$descricao);
       Mail::to($destino)->send($meu_email);
       
       return 'Email was sent';
    }
}

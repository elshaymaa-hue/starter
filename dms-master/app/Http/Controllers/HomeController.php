<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Endereco;
use App\Cliente;
use App\DocumentoTipo;
use App\Processo;
use App\Anexo;


use Validator;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;
use DB; 

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
}

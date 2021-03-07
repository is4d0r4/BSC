<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BaseController extends Controller
{
    public function index()
    {
   
      return view('index');
    }

    public function cronograma()
    {
        return view('cronograma.cronograma_desen');
    }
    //   faltando as condições para as outras views
    // 

    public function documentacao()
    {
      return view('documentacao.documentacao_desen');
    }

    public function link()
    {
      return view('link.link_desen');
    }
}

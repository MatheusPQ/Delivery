<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function salvar(Request $req) {
        $pedido = $req->all();
    }
}

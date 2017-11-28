<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Item;
use App\Pedido;

class PedidoController extends Controller
{
    public function salvar(Request $req) {
        $pedido = $req->all();

        // dd($pedido['numeroAssento']);
        $pedido['user_id'] = Auth::id();
        $item = Item::where('id', $pedido['item_id'])->get()->first();
        // dd($item);
        $pedido['precoPedido'] = $item['precoItem'];
        $pedido['statusPedido'] = "PENDENTE";
        // $pedido['numeroAssento'] = $pedido['numeroAssento'];
        Pedido::create($pedido);

        return redirect('/');
    }
}

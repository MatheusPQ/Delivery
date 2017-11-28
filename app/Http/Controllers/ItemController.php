<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
    public function listar() {
        $itens = Item::all();

        return view('cardapio')->with('itens', $itens);
    }

    public function mostrarItem($id_item) {
        $item = Item::findOrFail($id_item);

        return view('conferirPedido')->with('item', $item);
    }
    
    public function listarAdmin() {
        // $itens = Item::all();

        return view('atualizar');
    }
}

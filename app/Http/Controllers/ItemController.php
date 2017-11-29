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

    public function novoProduto(){
        return view('adicionarItem');
    }
    
    public function salvarProduto(Request $req){
        $item = $req->all();
        
        $num = Item::orderBy('id', 'desc')->first();
        $num = $num->id + 1;

        if($req->hasFile('imagemItem')){
            $imagem = $req->file('imagemItem');
            $dir = "img";
            $ext = $imagem->guessClientExtension();
            $nomeImagem = "icon-0".$num.".".$ext;
            $imagem->move($dir, $nomeImagem);
            $item['imagemItem'] = $dir."/".$nomeImagem;
        }

        Item::create($item);
        return redirect('/produto');
    }
    
    public function listarAdmin() {
        $itens = Item::all();

        return view('atualizar')->with('itens', $itens);
    }
    
    public function removerProduto($id){
        Item::find($id)->delete(); 
        return redirect('/produto');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'nomeItem', 'descItem', 'precoItem', 'imagemItem'
    ];
    
    public function pedidos(){
        return $this->hasMany('App\Pedido');
    }
}

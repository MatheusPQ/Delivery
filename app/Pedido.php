<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'user_id', 'item_id', 'precoPedido', 'statusPedido'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_usuario',
        'id_produto',
        'status'
    ];

    public function rules() {
        return [
            'id_usuario' => 'required',
            'id_produto' => 'required',
            'status' => 'required'
        ];
    }

    public function feedback() {
        return [
            'required' => 'O campo ::attribute deve ser preenchido.'
        ];
    }
}

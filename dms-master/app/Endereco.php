<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    //


 protected $table = 'enderecos';
    protected $fillable = [
	'logradouro',
	'numero',
	'complemento',
	'cep',
	'bairro',
	'municipio',
	'uf'
    ];


     public function clientes()
   {
       return $this->belongsTo(Cliente::class);
   }  


}

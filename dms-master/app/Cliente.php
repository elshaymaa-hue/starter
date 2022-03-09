<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
 	protected $table = 'clientes';
        protected $fillable = [
		'nome',
		'data_nascimento',
		'rg',
		'nome_empresarial',
		'ie',
		'im',
		'personalidade',
		'cpf_cnpj',
		'telefone_1',
		'telefone_2',
		'telefone_3',
		'telefone_4',
		'telefone_4',
		'email',
		'site',
		'endereco_id'
    ];
    //

    public function enderecos()
    {
        return $this->hasMany(Endereco::class);
    }
}

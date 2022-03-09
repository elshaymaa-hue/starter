<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anexo extends Model
{
 protected $table = 'anexos';
        protected $fillable = [
		'path',
		'mimeType',
		'name',
		'extension',
		'size',
		'processo_id',
		'documentotipo_id'
    ];


    public function processos()
    {
        return $this->hasMany(Processo::class);
    }

     public function documentostipos()
    {
        return $this->hasMany(DocumentoTipo::class);
    }

}

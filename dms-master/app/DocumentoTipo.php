<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentoTipo extends Model
{


 protected $table = 'documentos_tipo';
    protected $fillable = [
		'num',
		'cliente_id',
		'usuario_id'
    ];

    
  // Relacionando com Anexo
  public function anexos()
   {
       return $this->belongsTo(Anexo::class);
   }  


}

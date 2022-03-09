<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Processo extends Model
{
 
 protected $table = 'processos';
        protected $fillable = [
		'nome',
		'cliente_id',
		'usuario_id'
        ];

  // Relacionando com Anexo
  public function anexos()
   {
       return $this->belongsTo(Anexo::class);
   }  
   // Relacionamento com Cliente
  public function clientes()
   {
       return $this->belongsTo(Cliente::class);
   } 


   public function usuarios()
   {
       return $this->belongsTo(User::class);
   } 

}

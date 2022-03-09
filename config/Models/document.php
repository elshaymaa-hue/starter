<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    //
    protected $table = "documents";
    protected $fillable=['name','contents','photo'];
    protected $hidden=['created_at','updated_at'];
}

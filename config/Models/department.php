<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table="departments";
    protected $fillable=['name','task','manager'];
    protected $hidden=['photo','created_at', 'updated_at'];
    public $timestamps=false;
}

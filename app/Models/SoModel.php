<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoModel extends Model
{
    use HasFactory;


    protected $table = "api_transporters";
    protected $fillable = [
      'typetrans',
      'typepayment',
      'customer',
      'route',
      'ref',
      'note',
     'sodate',
     'untuk',
      'dari' ,
      'barang',
      'suhureq',
      'pic' 
    ];
}

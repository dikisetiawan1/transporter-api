<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiTransporter extends Model
{
    use HasFactory;


    protected $table = "api_transporters";
    protected $fillable = [
            'nospe',
            'indekspe', 
            'noso', 
              'sodate' ,
              'flagspe',
              'indeks' ,
              'typetrans',
              'typepayment',
              'transactiondate' ,
              'transporter',
              'vehicle',
              'supir',
              'supirdua',
              'customer',
              'route',
              'ref',
              'note',
              'pembuat',
              'startdate' ,
              'starttime' ,
              'finishdate' ,
              'finishtime' ,
              'typetruck',
              'dari',
              'untuk',
              'status',
              'harga' ,
              'uangjalan' ,
              'ujisisebilah' ,
              'ujkosongsebilah' ,
              'uangsewakendaraanthirdpe' ,
              'uangclaim' ,
              'pic',
              'totaluangdiberikan' ,
              'totaldeklarasi' ,
              'sisauang' ,
              'noer',
              'erdate' ,
              'departmentcharged',
              'declaredby',
              'flager' ,
              'counter' ,
              'indeker' ,
              'typeer',
              'docdatecomplete' ,
              'statusercom',
              'erdatecom' ,
              'maxtimedelivery' ,
              'maxtimechecking' ,
              'geoidasal' ,
              'geofenceasal',
              'geoidtujuan' ,
              'geofencetujuan',
              'km' ,
              'barang',
              'suhureq' ,
              'sj_no',
              'geocodeasal',
              'geocodetujuan'
    ];
}

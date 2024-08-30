<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ApiTransporter;
use Illuminate\Http\Request;


class TransporterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ApiTransporter::orderBy('nospe','asc')->get();
        return response()->json([
            'status' => true,
            'message'=> 'Data ditemukan',
            'data'=> $data
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
           'nospe' => 'required|max:255',
            'indekspe' => 'required',
            'noso' => 'required|max:255',
            'sodate' => 'required',
            'flagspe' => 'required|max:255',
            'indeks' => 'required',
            'typetrans' => 'required|max:255',
            'typepayment' => 'required|max:255',
            'transactiondate' => 'required',
            'transporter' => 'required|max:255',
            'vehicle' => 'required|max:255',
            'supir' => 'required|max:255',
            'supirdua' => 'required|max:255',
            'customer' => 'required|max:255',
            'route' => 'required|max:255',
            'ref' => 'required|max:255',
            'note' => 'required|max:255',
            'pembuat' => 'required|max:255',
            'startdate' => 'required',
            'starttime' => 'required',
            'finishdate' => 'required',
            'finishtime' => 'required',
            'typetruck' => 'required|max:255',
            'dari' => 'required|max:255',
            'untuk' => 'required|max:255',
            'status' => 'required|max:255',
            'harga' => 'required',
            'uangjalan' => 'required',
            'ujisisebilah' => 'required',
            'ujkosongsebilah' => 'required',
            'uangsewakendaraanthirdpe' => 'required',
            'uangclaim' => 'required',
            'pic' => 'required|max:255',
            'totaluangdiberikan' => 'required',
            'totaldeklarasi' => 'required',
            'sisauang' => 'required',
            'noer' => 'required|max:255',
            'erdate' => 'required',
            'departmentcharged' => 'required|max:255',
            'declaredby' => 'required|max:255',
            'flager' => 'required',
            'counter' => 'required',
            'indeker' => 'required',
            'typeer' => 'required|max:255',
            'docdatecomplete' => 'required',
            'statusercom' => 'required|max:255',
            'erdatecom' => 'required',
            'maxtimedelivery' => 'required',
            'maxtimechecking' => 'required',
            'geoidasal' => 'required',
            'geofenceasal' => 'required|max:255',
            'geoidtujuan' => 'required',
            'geofencetujuan' => 'required|max:255',
            'km' => 'required',
            'barang' => 'required|max:255',
            'suhureq' => 'required',
            'sj_no' => 'required|max:255',
            'geocodeasal' => 'required|max:255',
            'geocodetujuan' => 'required|max:255'
        ]);

        $post = ApiTransporter::create($request->all());

        return response()->json([
            'status' => true,
            'message'=> 'Sukses memasukkan data'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = ApiTransporter::find($id);
        if($data){
            return response()->json([
                'status'=> true,
                'message'=> 'Data ditemukan',
                'data'=> $data
            ],200);
        }else{
            return response()->json([
                'status'=>false,
                'message'=> 'Data tidak ditemukan'
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

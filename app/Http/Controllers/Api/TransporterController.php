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
          
            'typetrans' => 'required|max:255',
            'typepayment' => 'required|max:255',
            'customer' => 'required|max:255',
            'route' => 'required|max:255',
            'ref' => 'required|max:255',
            'note' => 'required|max:255',
           'sodate' => 'required',
           'untuk' => 'required|max:255',
            'dari' => 'required|max:255',
            'barang' => 'required|max:255',
            'suhureq' => 'required',
            'pic' => 'required|max:255'
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
                $data = ApiTransporter::find($id);

                if (!$data) {
                    return response()->json(['message' => 'Data not found'], 404);
                }

                $validatedData = $request->validate([
                        'typetrans' => 'required|max:255',
                        'typepayment' => 'required|max:255',
                        'customer' => 'required|max:255',
                        'route' => 'required|max:255',
                        'ref' => 'required|max:255',
                        'note' => 'required|max:255',
                        'sodate' => 'required',
                        'untuk' => 'required|max:255',
                        'dari' => 'required|max:255',
                        'barang' => 'required|max:255',
                        'suhureq' => 'required',
                        'pic' => 'required|max:255'
                ]);

            
                $data->update($validatedData);

                return response()->json([
                    'message' => 'Data updated successfully',
                    'data' => $data
                ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

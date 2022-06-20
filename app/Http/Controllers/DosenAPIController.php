<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dosen; //menghubungkan controller dengan model

class DosenAPIController extends Controller
{
    public function all()
    {
        $dosen = Dosen::all();   
        return response()-> json(['data'  => $dosen ]);
        //return $dosen;
        /*return response()-> json([
            'success' => true,
            'message' => 'Berhasil Ditampilkan',
            'data'    => $dosen 
        ], 200);*/
    }
    public function create(Request $request)
    {
        $dosen = Dosen::create([
            'nidn' => $request->nidn,
            'nama' => $request->nama,
            'status' => $request->status,
            'jafung' => $request->jafung,
            'pakar' => $request->pakar,
        ]);

        if($dosen)
        {
            return response()->json([
                'success' => true,
                'message' => 'Berhasil Disimpan',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Gagal Disimpan',
            ], 401);
        }
    }

    public function update($id, Request $request)
    {
        $dosen = Dosen::whereId($id)->update([
            'nidn' => $request->nidn,
            'nama' => $request->nama,
            'status' => $request->status,
            'jafung' => $request->jafung,
            'pakar' => $request->pakar,
        ]);

        if($dosen)
        {
            return response()->json([
                'success' => true,
                'message' => 'Berhasil Diubah',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Gagal Diubah',
            ], 400);
        }
    }

    public function delete($id)
    {
        $dosen = Dosen::find($id);
        $dosen->delete();

        if($dosen)
        {
            return response()->json([
                'success' => true,
                'message' => 'Berhasil Dihapus',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Gagal Dihapus',
            ], 400);
        }
    }
}

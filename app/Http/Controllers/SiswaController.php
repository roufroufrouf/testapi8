<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index() {
        return DB::table('siswas')->get();
    }

    public function create(request $request) {
        DB::table('siswas')->insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
        ]);
        return "Data berhasil masuk";
    }


    public function update(request $request, $id) {
        DB::table('siswas')
            ->where('id', '=', $id)
            ->update([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
            ]);

        return "Data berhasil di update";
    }

    public function delete($id) {
        DB::table('siswas')->where('id', '=', $id)->delete();

        return "Data berhasil di hapus";
    }
}

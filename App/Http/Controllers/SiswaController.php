<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Http\Resources\SiswaResources;

class SiswaController extends Controller
{
    public function index()
{
    try{
        $siswa =
        Siswa::select('nisn','id_user','nama','jenis_kelamin','asal_sekolah','tanggal_lahir','alamat',
        'no_hp','nama_ayah','no_hp_ayah','nama_ibu','no_hp_ibu','nama_wali','no_hp_wali',
        'foto_calonsiswa','kk','ijazah','akta',
        'bahasa','mtk','ipa','nilai_akhir','status')->get();
        return $this->responseOk($siswa, 200);
        }catch(\Throwable $th){
        
        }
        }
public function store(Request $request)
{

}
public function update(Request $request, $id)
{

}
public function destroy($id)
{

}
}



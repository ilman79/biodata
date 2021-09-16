<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MahasiswaModel;
use Illuminate\Support\Facades\Storage;

class MahasiswaController extends Controller
{
   public function __construct()
   {
      $this->middleware('auth');
      $this->MahasiswaModel = new MahasiswaModel();
   }

    public function insert()
    {
       Request()->validate([
          'nama' =>'required',
          'uang' => 'required',
          'gender' => 'required',
          'umur' => 'required',
          'minat'=>'required',
       ],[
       'nama.required' => 'Wajib diisi !!',
       'uang.required' => 'Wajib diisi !!',
       'gender.required' => 'Wajib diisi !!',
       'umur.required'=>'Wajib diisi !!',
       'minat.required' => 'Wajib diisi'
    ]);

    /* jika validasi tidak ada maka dilakukan simpan data */

    $data = [
       'nama' => Request()->nama,
       'uang' =>Request()->uang,
       'gender'=>Request()->gender,
       'umur'=>Request()->umur,
       'minat'=>Request()->minat,
    ];

    $this->MahasiswaModel->addData($data);
    return redirect()->route('biodata')->with('pesan','Data Berhasil Ditamabahkan !!');
      
    }
      

}
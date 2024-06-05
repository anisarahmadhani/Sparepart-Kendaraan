<?php

namespace App\Http\Controllers;

use App\Http\Requests\InputSuplierRequest;
use App\Http\Requests\UpdateSuplierRequest;
use App\Models\Suplier;
use Illuminate\Http\Request;

class SuplierController extends Controller
{
    public function index(){
        $data ['suplier'] = Suplier::get();
        return view('suplier.index', $data);
    }

    public function tambah(){
        return view('suplier.tambah');
    }
    public function input(InputSuplierRequest $r){
        if($r->validated()){
            Suplier::create([
                'nama_suplier' => $r->nama_suplier,
                'alamat' => $r->alamat,
                'telpon' => $r->telpon,
                'email' => $r->email,
            ]);

            return redirect('suplier');
        }
    }

    public function edit($id){
        $data ['suplier'] = Suplier::where('id', $id)->first();
        return view('suplier.update', $data);
    }

    public function update(UpdateSuplierRequest $r, $id){
        if($r->validated()){
            $data['nama_suplier'] = $r->nama_suplier;
            $data['alamat'] = $r->alamat;
            $data['telpon'] = $r->telpon;
            $data['email'] = $r->email;

            Suplier::where('id', $id)->update($data);
        }
        return redirect('suplier');
    }

    public function delete($id){
        Suplier::where('id', $id)->delete();
        return redirect('suplier');
    }
}

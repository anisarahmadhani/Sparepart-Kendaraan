<?php

namespace App\Http\Controllers\Pelanggan;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditPelangganRequest;
use App\Http\Requests\InputPelangganRequest;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PelangganController extends Controller
{
    public function index(){
        $data ['pelanggan'] = Pelanggan::get();
        return view('pelanggan.index', $data);
    }

    public function tambah(){
        return view('pelanggan.tambah');
    }

    public function input(InputPelangganRequest $r){
        if($r->validated()){
            //upload foto
            $foto = $r->foto->getClientOriginalName();
            //memindahkan foro
            $r->foto->move('foto_pelanggan/', $foto);

            Pelanggan::create([
                'nama_pelanggan' => $r->nama_pelanggan,
                'jenis_kelamin' => $r->jenis_kelamin,
                'alamat' => $r->alamat,
                'telpon' => $r->telpon,
                'email' => $r->email,
                'foto' => $foto,
            ]);
    
        }
        
        return redirect('pelanggan');
    }

    public function edit($id){
        $data ['pelanggan'] = Pelanggan::where('id', $id)->first();
        return view('pelanggan.update', $data);
    }

    public function update(EditPelangganRequest $r, $id){
        if($r->validated()){
            //cek foto
            if($r->foto){
                $cek = Pelanggan::where('id', $id)->first();
                //menghapus foto lama 
                if(File::exists('foto_pelanggan/'.$r->foto)){
                    File::delete('foto_pelanggan/'.$r->foto);
                }
                //mengupload foto baru
                $foto = $r->foto->getClientOriginalName();
                $r->foto->move('foto_pelanggan/', $foto);

                $data['foto'] = $foto;
            }

            $data['nama_pelanggan'] = $r->nama_pelanggan;
            $data['jenis_kelamin'] = $r->jenis_kelamin;
            $data['alamat'] = $r->alamat;
            $data['telpon'] = $r->telpon;
            $data['email'] = $r->email;

            Pelanggan::where('id', $id)->update($data); 
        }

        return redirect('pelanggan');
    }

    public function delete($id){
        Pelanggan::where('id', $id)->delete();
        return redirect('pelanggan');
    }
}

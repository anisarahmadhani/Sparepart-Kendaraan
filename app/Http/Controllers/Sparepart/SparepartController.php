<?php

namespace App\Http\Controllers\Sparepart;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditSparepartRequest;
use App\Http\Requests\InputSparepartRequest;
use App\Models\Sparepart as Sprt;
use App\Models\Suplier;
use Illuminate\Http\Request;

class SparepartController extends Controller
{
    public function index()
    {
        $data['sparepart'] = Sprt::leftJoin('suplier', 'suplier.id', 'sparepart.id_suplier')
            ->select('sparepart.*', 'suplier.nama_suplier')
            ->get();
        return view('sparepart.index', $data);
    }

    public function tambah()
    {
        $data['suplier'] = Suplier::get();
        return view('sparepart.tambah', $data);
    }

    public function input(InputSparepartRequest $r)
    {
        if ($r->validated()) {
            Sprt::create([
                'kode_sparepart' => $r->kode_sparepart,
                'nama_sparepart' => $r->nama_sparepart,
                'deskripsi' => $r->deskripsi,
                'harga' => $r->harga,
                'stok' => $r->stok,
                'id_suplier' => $r->id_suplier,
            ]);

            return redirect('sparepart');
        }
    }

    public function edit($id){
        $data = [
            'sparepart' => Sprt::where('id', $id)->first(),
            'suplier' => Suplier::get()
        ];

        return view('sparepart.update', $data);
    }

    public function update(EditSparepartRequest $r, $id){
        if($r->validated()){
            $data ['kode_sparepart'] = $r -> kode_sparepart;
            $data ['nama_sparepart'] = $r -> nama_sparepart;
            $data ['deskripsi'] = $r -> deskripsi;
            $data ['harga'] = $r -> harga;
            $data ['stok'] = $r -> stok;
            $data ['id_suplier'] = $r -> id_suplier;

            Sprt::where('id', $id)->update($data);
        }
        
        return redirect('sparepart');
    }

    public function delete($id){
        Sprt::where('id', $id)->delete();
        return redirect('sparepart');
    }
}

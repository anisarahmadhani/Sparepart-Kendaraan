<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditOrderRequest;
use App\Http\Requests\InputOrderRequest;
use App\Models\Pelanggan;
use App\Models\Sparepart;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $data ['order'] = Order::leftjoin('pelanggan', 'pelanggan.id', '=', 'order.id_pelanggan')
                        ->leftjoin('sparepart', 'sparepart.id', '=', 'order.id_sparepart')
                        ->select('order.*', 'pelanggan.nama_pelanggan', 'sparepart.nama_sparepart', 'sparepart.harga')
                        ->get();

        return view('order.index', $data);
    }

    public function tambah(){
        $data = [
            'pelanggan' => Pelanggan::get(),
            'sparepart' => Sparepart::get()
        ];
        
        return view('order.tambah', $data);
    }

    public function input(InputOrderRequest $r){
        if($r->validated()){
            Order::create([
                'id_pelanggan' => $r->id_pelanggan,
                'id_sparepart' => $r->id_sparepart,
                'tgl_order' => $r->tgl_order,
                'jumlah' => $r->jumlah,
                'total_harga' => $r->total_harga,
            ]);
        }

        return redirect('order');
    }

    public function edit($id){
        $data = [
            'order' => Order::where('id', $id)->get()->first(),
            'pelanggan' => Pelanggan::get(),
            'sparepart' => Sparepart::get()
        ];

        return view('order.update', $data);
    }

    public function update(EditOrderRequest $r, $id){
        if($r->validated()){
            $data['id_pelanggan'] = $r->id_pelanggan;
            $data['id_sparepart'] = $r->id_sparepart;
            $data['tgl_order'] = $r->tgl_order;
            $data['jumlah'] = $r->jumlah;
            $data['total_harga'] = $r->total_harga;
            $data['status'] = $r->status;

            Order::where('id', $id)->update($data);
        }

        return redirect('order');
    }

    public function delete($id){
        Order::destroy($id);

        return back();
    }
}

@extends('layout.main')

@section('title')
Order
@endsection

@section('content')

    <h2 class="flex justify-center font-black text-2xl">Data Order</h2>
    <div class="flex justify-end">
        <a href="{{route('tambah.order')}}" class="bg-blue-600 hover:bg-blue-400 rounded-md p-2 mx-3 mb-3 mt-5 text-white text-sm"><i class="fa-regular fa-square-plus p-2"></i>Tambah Data</a>
    </div>
    <div class=" mx-10 mb-8">
        <table class="border-collapse border border-gray-200">
            <thead class="bg-sky-300 p-6">
                <tr>
                    <th class="border border-gray-200 px-4 py-2 ">No</th>
                    <th class="border border-gray-200 px-4 py-2 ">Nama Pelanggan</th>
                    <th class="border border-gray-200 px-4 py-2 ">Sparepart</th>
                    <th class="border border-gray-200 px-4 py-2 ">Tanggal</th>
                    <th class="border border-gray-200 px-4 py-2 ">Jumlah</th>
                    <th class="border border-gray-200 px-4 py-2 ">Total Harga</th>
                    <th class="border border-gray-200 px-4 py-2 ">Status</th>
                    <th class="border border-gray-200 px-4 py-2 ">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order as $i => $a)
                <tr>
                    <td class="border border-gray-200 px-4  text-sm">{{$i + 1}}</td>
                    <td class="border border-gray-200 px-4  text-sm">{{$a->nama_pelanggan}}</td>
                    <td class="border border-gray-200 px-4  text-sm">{{$a->nama_sparepart}} ({{ $a->harga }})</td>
                    <td class="border border-gray-200 px-4  text-sm">{{$a->tgl_order}}</td>
                    <td class="border border-gray-200 px-4  text-sm">{{$a->jumlah}}</td>
                    <td class="border border-gray-200 px-4  text-sm">{{$a->total_harga}}</td>
                    <td class="border border-gray-200 px-4  text-sm">{{$a->status}}</td>
                    <td class="border border-gray-200 px-4  text-sm flex justify-center">
                        <a href="{{route('edit.order', $a->id)}}" class="bg-yellow-500 hover:bg-yellow-300 text-white p-2 mx-4 rounded-md text-sm"><i class="fa-regular fa-pen-to-square p-2 size-min"></i></a>
                        <a href="{{route('delete.order', $a->id)}}" class="bg-red-500 hover:bg-red-300 text-white p-2 rounded-md text-sm" onclick="return confirm('Apakah kamu yakin ingin menghapus data?');"><i class="fa-solid fa-trash p-2 size-min"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection


@extends('layout.main')

@section('title')
Sparepart
@endsection

@section('content')

    <h2 class="flex justify-center font-black text-2xl">Data Sparepart</h2>
    <div class="flex justify-end">
        <a href="{{route('tambah.sparepart')}}" class="bg-blue-600 hover:bg-blue-400 rounded-md p-2 mx-3 mb-3 mt-5 text-white text-sm"><i class="fa-regular fa-square-plus p-2"></i>Tambah Data</a>
    </div>
    <div class=" mx-10 mb-8">
        <table class="border-collapse border border-gray-200">
            <thead class="bg-sky-300 p-6">
                <tr>
                    <th class="border border-gray-200 px-4 py-2 ">No</th>
                    <th class="border border-gray-200 px-4 py-2 ">Kode Sparepart</th>
                    <th class="border border-gray-200 px-4 py-2 ">Nama Sparepart</th>
                    <th class="border border-gray-200 px-4 py-2 ">Deskripsi</th>
                    <th class="border border-gray-200 px-4 py-2 ">Harga</th>
                    <th class="border border-gray-200 px-4 py-2 ">Stok</th>
                    <th class="border border-gray-200 px-4 py-2 ">Nama Suplier</th>
                    <th class="border border-gray-200 px-4 py-2 ">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sparepart as $i => $a)
                <tr>
                    <td class="border border-gray-200 px-4  text-sm">{{$i + 1}}</td>
                    <td class="border border-gray-200 px-4  text-sm">{{$a->kode_sparepart}}</td>
                    <td class="border border-gray-200 px-4  text-sm">{{$a->nama_sparepart}}</td>
                    <td class="border border-gray-200 px-4  text-sm">{{$a->deskripsi}}</td>
                    <td class="border border-gray-200 px-4  text-sm">{{$a->harga}}</td>
                    <td class="border border-gray-200 px-4  text-sm">{{$a->stok}}</td>
                    <td class="border border-gray-200 px-4  text-sm">{{$a->nama_suplier}}</td>
                    <td class="border border-gray-200 px-4  text-sm flex justify-center">
                        <a href="{{route('edit.sparepart', $a->id)}}" class="bg-yellow-500 hover:bg-yellow-300 text-white p-2 mx-4 rounded-md text-sm"><i class="fa-regular fa-pen-to-square p-2 size-min"></i></a>
                        <a href="{{route('delete.sparepart', $a->id)}}" class="bg-red-500 hover:bg-red-300 text-white p-2 rounded-md text-sm" onclick="return confirm('Apakah kamu yakin ingin menghapus data?');"><i class="fa-solid fa-trash p-2 size-min"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection

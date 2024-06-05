@extends('layout.main')

@section('title')
Tambah Order 
@endsection

@section('content')
    <h2 class="flex justify-center font-black text-2xl mb-5">Tambah Order</h2>
    <div class="mb-4">
    <form class="container mx-10 w-auto" action="{{route('input.order')}}" method="POST">
        @csrf
        <div class="mb-5">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pelanggan</label>
        <select name="id_pelanggan" id="id_pelanggan" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
            <option value="">Pilih Nama Pelanggan</option>
            @foreach($pelanggan as $item)
                <option value="{{$item->id}}">{{$item->nama_pelanggan}}</option>
            @endforeach
        </select>
        <span>{{$errors->first('id_pelanggan')}}</span>
        </div>
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pelanggan</label>
            <select name="id_sparepart" id="id_sparepart" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                <option value="">Pilih Sparepart</option>
                @foreach($sparepart as $item)
                    <option value="{{$item->id}}">{{$item->nama_sparepart}} ( {{$item->harga}} )</option>
                @endforeach
            </select>
            <span>{{$errors->first('id_sparepart')}}</span>
            </div>
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Order</label>
            <input type="date" id="tgl_order" name="tgl_order" value="{{old('tgl_order')}}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
        </div>
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah</label>
            <input type="number" id="jumlah" name="jumlah" value="{{old('jumlah')}}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
        </div>
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total Harga</label>
            <input type="number" id="total_harga" value="{{old('total_harga')}}" name="total_harga" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-5">Simpan</button>
    </form>
    </div>   


@endsection
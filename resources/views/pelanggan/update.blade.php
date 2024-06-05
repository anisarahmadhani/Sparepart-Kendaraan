@extends('layout.main')

@section('title')
Edit Pelanggan
@endsection

@section('content')
    <h2 class="flex justify-center font-black text-2xl mb-5">Edit Pelanggan</h2>
    <div class="mb-4">
    <form class="container mx-10 w-auto" action="{{route('update.pelanggan', $pelanggan->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-5">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pelanggan</label>
        <input type="text" id="nama_pelanggan" name="nama_pelanggan" value="{{$pelanggan->nama_pelanggan}}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
        <span>{{$errors->first('nama_pelanggan')}}</span></div>
        <div class="mb-5">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
        <select name="jenis_kelamin" id="jenis_kelamin" value="{{$pelanggan->jenis_kelamin}}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
            <option value="">Pilih Jenis Kelamin</option>
            <option <?= $pelanggan->jenis_kelamin == 'L' ? 'selected' : '' ?> value="L">Laki-laki</option>
            <option <?= $pelanggan->jenis_kelamin == 'P' ? 'selected' : '' ?> value="P">Perempuan</option>
        </select>
        <span>{{$errors->first('jenis_kelamin')}}</span>
        </div>
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
            <textarea id="alamat" name="alamat" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{$pelanggan->alamat}}</textarea>
            <span>{{$errors->first('alamat')}}</span>
        </div>
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telpon</label>
            <input type="text" id="telpon" name="telpon" value="{{$pelanggan->telpon}}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
            <span>{{$errors->first('telpon')}}</span>
        </div>
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input type="email" id="email" name="email" value="{{$pelanggan->email}}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
            <span>{{$errors->first('email')}}</span>
        </div>
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto</label>
            <input type="file" id="foto" name="foto" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"/>
            <span>{{$errors->first('foto')}}</span>
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-5">Simpan</button>
    </form>
    </div>   


@endsection
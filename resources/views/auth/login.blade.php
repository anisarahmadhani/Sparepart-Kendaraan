@extends('auth.template')

@section('title')
Halaman Login
@endsection

@section('content')
<div class="bg-white min-h-screen items-center flex justify-between">
    <div class="md:w-1/2 p-8 md:px-16 w-full h-full">
      <h2 class="font-bold text-2xl text-blue-700 text-center p-4 mb-4">Login
      </h2>
        @if(session('pesan'))
          @if(session('pesan') == 'Periksa kembali Email dan Password anda!')
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 text-sm" role="alert">
              <p>{{session('pesan')}}</p>
            </div>  
            @else
            <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4 text-sm" role="alert">
              <p>{{session('pesan')}}</p>
            </div>
            @endif
          @endif
      <form class="space-y-6" action="{{route('proses_login')}}" method="POST">
      @csrf
      <div>
        <label for="email" class="block font-medium leading-6 text-gray-900 text-sm">Email address</label>
        <div class="mt-2">
          <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 p-2 text-sm">
        </div>
      </div>
      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block font-medium leading-6 text-gray-900 text-sm">Password</label>
        </div>
        <div class="mt-2">
          <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 p-2 text-sm">
        </div>
      </div>

      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 text-sm mt-4">Sign in</button>
      </div>
    </form>

      <div class="mt-3 text-xs flex justify-between items-center text-[#002D74]">
        <p class="text-sm">Belum punya akun ?</p>
        <a href="{{route('proses_regis')}}" class="hover:scale-110 duration-300 text-sm">Register</a>
      </div>
    </div>
    <!-- image -->
    <div class="md:block hidden w-1/2 p-8">
      <img class="hover:scale-110 duration-300" src="foto/partpro.png" alt="foto login">
    </div>
  </div>
@endsection
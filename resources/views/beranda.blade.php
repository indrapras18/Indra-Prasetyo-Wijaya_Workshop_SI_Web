@extends('layouts.apps')
{{-- 
pada beranda.blade.php disini kita menggunkan keyword extends untuk mewarisi
komponen dari parent nya yaitu apps.blade.php    
--}}

@section('content')
    <div class="container">
        <h1>Home Page</h1>
        <p>Halalamn ini merupakan halaman home</p>
    </div>
    <p>Nama : {{ $nama }}</p> 
    <p>Mata Pelajaran : </p>
    {{-- mengambil data nama dari ManagementUserController --}}
    <ul>
        @foreach ($pelajaran as $p)
            <li>{{ $p }}</li>
        @endforeach
    </ul>
    {{-- melakukan perulangan untuk mengambil data mata pelajaran dari array pada ManagementUserController --}}
@endsection
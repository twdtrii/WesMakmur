@extends('template')

@section('main')
        @for ($i=1; $i <= 10; $i++)
            @if ($i % 2)
                    <h1>Ini Perulangan Menggunakan Blade</h1>
            @endif
        @endfor

        @php
            $no = 5;
            echo $no;   
        @endphp

        <img src="{{ asset('img/gambar1.jpeg') }}" width="35%" alt="">

@endsection
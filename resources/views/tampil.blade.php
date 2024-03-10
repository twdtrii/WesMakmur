@extends('template')

@section('main')
<h2>Jamu Tradisional Wes Makmur</h2>
<a href="{{ route('produk.create') }}" class="btn btn-primary">Tambah Data</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Produk</th>
        <th scope="col">Harga</th>
        <th scope="col">Foto</th>
        <th scope="col">Deskription Produk</th>
        <th scope="col">Action</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $item ->namaProduk }}</td>
                <td>{{ $item ->harga }}</td>
                <td><img src="{{ asset('img/'.$item->image) }}" alt="Product Image" width="100">
                </td>
                <td>{{ $item ->descProduk}}</td>
                <td><a class="btn btn-warning" href="{{url('produk/'. $item->id . '/edit')}}">Edit</a></td>
                <td>
                    <form action="{{ route('produk.destroy', $item->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection

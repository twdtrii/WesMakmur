@extends('template')

@section('main')
    <form action="{{ route('produk.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
            <input type="text" class="form-control @error('namaProduk') is-invalid @enderror" name="namaProduk" value="{{ old('namaProduk')}}">
        </div>

        <div class="mb-3">
           <label for="exampleInputEmail1" class="form-label">Harga</label>
           <input type="number" class="form-control @error('Harga') is-invalid @enderror" name="harga" value="{{ old('harga') }}">
        </div>

        <div class="mb-3">
           <label for="exampleInputEmail1" class="form-label">Foto</label>
           <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}">
           </tr>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Deskription Produk</label>
            <input type="text" class="form-control @error('descProduk') is-invalid @enderror" name="descProduk" value="{{ old('descProduk') }}">
        </div>

                <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

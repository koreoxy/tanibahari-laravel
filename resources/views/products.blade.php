@extends('layouts.main')

@section('main')

    @foreach ($products as $product )

        <div class="rounded overflow-hidden shadow-lg m-10">
            <div class="px-6 py-4">
                <a href="/product/{{ $product->slug }}">
                    <div class="font-bold text-xl mb-2">{{ $product->name }}</div>
                </a>
                <h5>Harga : {{ $product->harga }}</h5>
              <h5>Kategori : {{ $product->category->name }}</h5>
              <p>Deskripsi : {{ $product->excerpt }}</p>
            </div>
            
          </div>
    @endforeach

@endsection
@extends('layouts.main')

@section('main')

<h1>Halama home</h1>

    <div class="container">
        <div class="flex justify-center w-full">
            <img src="/img/swiper1.png" alt="">
        </div>

        <div class="pt-10">
            <h1 class="font-bold">Produk Terlaris</h1>
            

        <div class="flex -mx-5 overflow-x-scroll snap-x bg-gray-100 py-5 pb-16 rounded-md drop-shadow-xl">
        @foreach ($products as $product )
            <div class="rounded overflow-hidden shadow-lg m-10">
                <div class="px-6 py-4">
                    <img src="{{ $product->image }}" alt="">
                    <a href="/product/{{ $product->slug }}">
                        <div class="font-bold text-xl mb-2">{{ $product->name }}</div>
                    </a>
                    <h5>Harga : {{ $product->harga }}</h5>
                    <h5>Kategori : {{ $product->category->name }}</h5>
                    <p>Deskripsi : {{ $product->excerpt }}</p>
                </div>
            </div>
        @endforeach
        </div>
 
        </div>
       
    </div>

    

@endsection
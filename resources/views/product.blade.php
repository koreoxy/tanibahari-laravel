@extends('layouts.main')

@section('main')
    <div class="container m-10">
        <h2 class="text-lg font-bold">{{ $product->name }}</h2>
        <h5>Harga : {{ $product->harga }}</h5>
        <h5 class="pb-2">
            <a href="/categories/{{ $product->category->slug }}">
                Category : {{ $product->category->name}}
            </a>
        </h5>
            

        <h3 class="font-bold">Deskripsi :</h3>
        {!! $product->description  !!}

        <div class="pt-5">
            <a href="/product" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Back to products page</a>
        </div>
    </div>
@endsection
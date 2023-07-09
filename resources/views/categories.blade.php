@extends('layouts.main')

@section('main')
    <h1>ALL KATEGORI</h1>
    @foreach ($categories as $category )
    
        <div class="rounded overflow-hidden shadow-lg m-10">
            <div class="px-6 py-4">
                <a href="/categories/{{ $category->slug }}">
                    <div class="font-bold text-xl mb-2">{{ $category->name }}</div>
                </a>
            </div>
            
          </div>
    @endforeach

@endsection
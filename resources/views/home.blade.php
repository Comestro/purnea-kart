@extends('layout')


@section('content')
    <div class="mt-[70px] px-[2%] bg-slate-100 pb-5">
        <div class="flex w-full flex-1 py-3">
            @include('desktop.components.category')
        </div>
        <div class="flex">
            {{-- <img src="{{ asset('banner.webp') }}" alt=""> --}}
            @include('desktop.components.hero-image')
        </div>
        @include('desktop.components.products')
        <div class="mt-4">
            @include('desktop.components.brands')
        </div>
    </div>
@endsection

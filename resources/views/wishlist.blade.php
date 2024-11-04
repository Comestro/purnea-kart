@extends('layout')

@section('title')
    My wishlist
@endsection

@section('content')
    <br>
    <br>
    <br>
    <div class="flex">

        {{-- wishlist contents here --}}
        <div class="w-full">
            <div class="flex-1 sm:px-4">
                <livewire:user.wishlist/>
            </div>
        </div>
    </div>
@endsection

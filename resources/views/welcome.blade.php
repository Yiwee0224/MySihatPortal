@extends('layout.layout')

@section('content')
    <main>
        <!-- Background image -->
        <div>
            <img class="rounded-lg m-auto" src="{{ asset('images/homepagebg.png') }}">
            <div style="background-image: url('../public/images/hero.jpg');"></div>
            <!-- Background image -->
            <div class="absolute text-7xl text-white top-1/2 left-1/3 -translate-x-1/2 -translate-y-1/2 ">
                <h1>
                    We provide </h1>
                <h1>
                    Healthcare solution</h1>
                <h1 class="text-orange-500">
                    For the nation</h1>
            </div>


        </div>


    </main>
@endsection

@extends('layouts.cus')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">


                <div class="card">
                    {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}

                    {{-- put ur content here --}}
                    <h1 class="flex justify-center text-3xl mt-72 font-bold">Welcome to MySihat Portal,
                        {{ Auth::user()->userName }}
                    </h1>
                    {{-- <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection

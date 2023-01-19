@extends('layouts.cus')

@section('content')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <section style="font-family:  Montserrat" class=" bg-slate-900 flex font-medium items-center justify-center h-screen">

        <section class="w-80 mx-auto bg-slate-600 rounded-2xl px-8 py-6 shadow-lg">
            <div class="flex items-center justify-center">

                <span class="md:font-bold  text-emerald-400">
                    USER PROFILE
                </span>
            </div>
            <div class="mt-6 w-fit mx-auto">
                <img src="https://api.lorem.space/image/face?w=120&h=120&hash=bart89fe" class="rounded-full w-28 "
                    alt="profile picture" srcset="">
            </div>

            <div class="mt-8 ">
                <h2 class="text-blue-900 font-bold text-2xl tracking-wide">{{ Auth::user()->userName }} <br /> </h2>
            </div>
            <p class="text-emerald-400 font-semibold mt-2.5">

                <input type="text" email="email" value="{{ Auth::user()->email }}" class="form-control" />
                <input type="text" contactNumber="contactNumber" value="{{ Auth::user()->contactNumber }}"
                    class="form-control" />
            </p>

            <div class="h-1 w-full bg-black mt-8 rounded-full">
                <div class="h-1 rounded-full w-2/5 bg-yellow-500 "></div>
            </div>


        </section>


    </section>
@endsection

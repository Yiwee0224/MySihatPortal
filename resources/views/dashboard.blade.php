@extends('layout.admin')

@section('content')
    <main>
        <div class="w-auto mx-24" style=" border:1px ;">
            <div class=" justify-center h-70 py-28 grid grid-cols-3 gap-10 ...">
                <div><a href="#"
                        class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold text-center tracking-tight text-gray-900 dark:text-white">Total
                            Number of
                            Customer
                        </h5>
                        <p class="font-bold text-2xl text-gray-700 text-center dark:text-gray-400">
                            {{ App\Models\User::where('userType', 'customer')->count() }}</p>
                    </a></div>
                <div><a href="#"
                        class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center dark:text-white">Total
                            Number of
                            Admin
                        </h5>
                        <p class="font-bold text-2xl text-gray-700 text-center dark:text-gray-400">
                            {{ App\Models\User::where('userType', 'admin')->count() }}</p>
                    </a></div>
                <div><a href="#"
                        class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center dark:text-white">Total
                            Number of
                            Appointment
                        </h5>
                        <p class="font-bold text-2xl text-gray-700 text-center dark:text-gray-400">
                            {{ App\Models\Apt::count() }}</p>
                    </a></div>
                <div><a href="#"
                        class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center dark:text-white">Total
                            Number of
                            Payment
                        </h5>
                        <p class="font-bold text-2xl text-gray-700 text-center dark:text-gray-400">
                            {{ App\Models\Payment::count() }}</p>
                    </a></div>
                <div><a href="#"
                        class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center dark:text-white">Total
                            Number of
                            Lab Report
                        </h5>
                        <p class="font-bold text-2xl text-gray-700 text-center dark:text-gray-400">
                            {{ App\Models\LabReport::count() }}</p>
                    </a></div>
                <div><a href="#"
                        class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center dark:text-white">Total
                            Number of
                            Contact Us
                        </h5>
                        <p class="font-bold text-2xl text-gray-700 text-center dark:text-gray-400">
                            {{ App\Models\Cs::count() }}</p>
                    </a></div>
            </div>
        </div>
        </div>
    </main>
@endsection

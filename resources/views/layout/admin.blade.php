<!doctype html>
<html lang="EN">


<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script src="https://use.fontawesome.com/8134766fa6.js"></script>
    <link href="/dist/output.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css">
    <link href="/css/app.css" rel="stylesheet">
    <script src="/path/to/tw-elements/dist/js/index.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>
</head>

<body class="bg-gray-50">
    <div class="flex h-auto">
        <aside class="w-1/6" aria-label="Sidebar">
            <div class="flex flex-col overflow-y-auto py-4 px-2 bg-gray-800 text-center h-full">
                {{-- system title --}}
                <div class="text-white text-3xl font-bold mt-10">MySihat Portal</div>

                {{-- SIDEBAR content/hyperlinks --}}

                <a type="button" href="/"
                    class="mt-10 w-full text-slate-500 hover:text-white text-left hover:bg-sky-700 rounded-md py-2 font-bold px-5 ">
                    Home
                </a>

                <a type="button" href="/dashboard"
                    class="mt-3 w-full text-slate-500 hover:text-white text-left hover:bg-sky-700 rounded-md py-2 font-bold px-5 ">
                    Dashboard
                </a>

                <a type="button" href="/ManageCustomerInfo/CusList"
                    class="mt-3 w-full text-slate-500 hover:text-white text-left hover:bg-sky-700 rounded-md py-2 font-bold px-5 ">
                    Manage User
                </a>

                {{-- <a type="button"
                    class="mt-3 w-full text-slate-500 hover:text-white text-left hover:bg-sky-700 rounded-md  py-2 font-bold px-5 "
                    href="/managePSMEvaluation/managepsmevaluation">
                    Manage Hospita Info
                </a> --}}



                <a href="/ManageLabReport/LabReport" type="button"
                    class="mt-3 w-full text-slate-500 hover:text-white text-left hover:bg-sky-700 rounded-md  py-2 font-bold px-5 "
                    href="/managePSMRubric/index">
                    Manage Lab Report
                </a>



                <a href="/ManagePayment/PaymentList" type="button"
                    class="mt-3 w-full text-slate-500 hover:text-white text-left hover:bg-sky-700 rounded-md py-2 font-bold px-5 ">
                    Manage Payment
                </a>

                <a href="/ManageAppointment/AptList" type="button"
                    class="mt-3 w-full text-slate-500 hover:text-white text-left hover:bg-sky-700 rounded-md  py-2 font-bold px-5">
                    Manage Appointment
                    {{-- @use Carbon\Carbon;
                    <span>
                        {{ App\Models\Apt::where('apDate', '>=', Carbon::now()->format('Y-m-d'))->count() }}</span> --}}
                </a>

                <a href="/ManageCs/Cslist" type="button"
                    class="mt-3 w-full text-slate-500 hover:text-white text-left hover:bg-sky-700 rounded-md  py-2 font-bold px-5">
                    Manage Contact Us
                </a>

            </div>
        </aside>

        {{-- Main Container --}}
        <div class="w-5/6 h-screen overflow-y-auto">
            {{-- System Navigation Bar --}}
            <nav class="bg-white border-gray-800 px-2 sm:px-4 py-2.5 dark:bg-gray-800 shadow-md">
                <div class="flex flex-row justify-end items-center">


                    {{-- Logout button --}}
                    <form id="logout-form" action="/logout" method="POST" class="d-none">
                        @csrf

                        <button type="submit"
                            class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mx-3 rounded">
                            Logout
                        </button>

                    </form>
                </div>
            </nav>

            <div class="container mx-auto">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>

</html>

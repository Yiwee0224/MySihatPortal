<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<header>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
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
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css">
    <link href="/css/app.css" rel="stylesheet">
    <script src="/path/to/tw-elements/dist/js/index.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @stack('resources/css/app.css')
    <!-- Navbar -->

    <nav class="px-2 bg-gray-300 border-gray-200 dark:bg-gray-900 dark:border-gray-700">
        <div class="container bg-gray-300 flex flex-wrap justify-between items-center mx-auto">

            <a href="/" class="pl-32 flex items-center">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">MySihat Portal</span>
            </a>
            <button data-collapse-toggle="mobile-menu" type="button"
                class="inline-flex justify-center items-center ml-3 text-gray-400 rounded-lg md:hidden hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300 dark:text-gray-400 dark:hover:text-white dark:focus:ring-gray-500"
                aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto " id="mobile-menu">
                <?php
                if (Auth::check()) {
                    echo '<div>
                                                                                 <ul class="flex flex-col p-4 mt-4 bg-slate-200 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-2xl md:font-medium md:border-0 md:bg-slate-200 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                                                                                  <li>
                                                                                 <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                                                                 class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Appointment
                                                                                 <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                  <path fill-rule="evenodd"
                                                                                 d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                                                clip-rule="evenodd"></path>
                                                                                 </svg></button>
                                                                                   <!-- Dropdown menu -->
                                                                                 <div id="dropdownNavbar"
                                                                                 class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                                                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-400"
                                                                                aria-labelledby="dropdownLargeButton">
                                                                                                                                                                                                                                      <li>                                                                                                                                                    <a href="/ManageAppointment/Appointment"
                                                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Book
                                                                                  Appointment</a>
                                                                                </li>
                                                                                                                                                                                                                                      <li>
                                                                                <a href="/User/AptHis"
                                                                                                                                                                                                                                      class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Appointment
                                                                                 History</a>
                                                                                </li>
                                                                                  </ul>
                                                                                                                          </div>
                                                                                 </li>                                                                                                                                                      <li>
                                                                                <a href="/ManageHealthContent/HealthContent"
                                                                                 class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Health Content</a>
                                                                                                                                                                                                                                      </li>
                                                                                 <li>
                                                                                  <a href="/User/LabReport"
                                                                                  class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                                                                                Lab Report</a>
                                                                                 </li>
                                                                                 <li>
                                                                                <a href="/User/Payment"
                                                                                 class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                                                                                 Payment</a>
                                                                                  </li><li> <button id="dropdownNavbarLink2" data-dropdown-toggle="dropdownNavbar2"class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Contact
                                                                                 <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                                                  clip-rule="evenodd"></path>
                                                                                 </svg></button>
                                                                                 <!-- Dropdown menu -->
                                                                                  <div id="dropdownNavbar2"
                                                                                 class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                                                                 <ul class="py-1 text-sm text-gray-700 dark:text-gray-400"
                                                                                 aria-labelledby="dropdownLargeButton">
                                                                                 <li>
                                                                                <a href="/ManageCs/Cs"
                                                                                 class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Contact Us </a>
                                                                                                                                                                                                                                  </li>
                                                                                 <li>
                                                                                                                                                                                                                                     <a href="/User/Cslist"
                                                                                 class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Reply
                                                                                </a>
                                                                                </li>
                                                                                 </ul>
                                                                                </div>
                                                                                </li>
                                                                                 <li>
                                                                                <button id="dropdownNavbarLink1" data-dropdown-toggle="dropdownNavbar1"class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Profile <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"  xmlns="http://www.w3.org/2000/svg">
                                                                                      <path fill-rule="evenodd"
                                                                                 d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                                                clip-rule="evenodd"></path>
                                                                                  </svg></button>
                                                                                <!-- Dropdown menu -->
                                                                                <div id="dropdownNavbar1"
                                                                                 class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                                                                 <ul class="py-1 text-sm text-gray-700 dark:text-gray-400"
                                                                                  aria-labelledby="dropdownLargeButton1">
                                                                                  <li> <a href="/profile/" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile
                                                                                </a>
                                                                                   </li>  <li>
                                                                                    <form id="logout-form" action="/logout" method="POST" class="d-none">';?>
                @csrf
                <?php echo '<button type="submit"
                                                 class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"> Log Out </button>
                                                 </form>

                                                                 </li>
                                                                                 </ul>
                                                                                   </div>
                                                                                                                            </li>
                                                                                                                          </ul>
                                                                                                                        </div> ';
                } else {
                    echo '<ul class="flex flex-col p-4 mt-4 bg-slate-200 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-2xl md:font-medium md:border-0 md:bg-slate-200 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700"> <li> <a href="/"  class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-white dark:bg-blue-600 md:dark:bg-transparent" aria-current="page">Home</a>
                                                                                                            </li>
                                                                                <li>
                                                                                <a href="/ManageHosInfo/HospitalInfo"
                                                                                 class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
                                                                                 </li>
                                                                                 <li> <a href="/ManageAppointment/Appointment"
                                                                                  class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Appointment</a>
                                                                                 </li>
                                                                                 <li>
                                                                                 <a href="/ManageHealthContent/HealthContent"
                                                                                class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Health Content</a> </li>
                                                                                 <li> <a href="/ManageCs/Cs"   class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact Us</a>
                                                                                </li>
                                                                                 <li>
                                                                                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Account
                                                                                <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"clip-rule="evenodd"></path></svg></button> <!-- Dropdown menu --><div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">

                                                                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-400"aria-labelledby="dropdownLargeButton">  <li><a href="/login" class="text-center block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign In</a> </li> <li><a href="/register"class="text-center block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                                                                                                                                                                                                                                       Up</a>
                                                                                                                                                                                                                                           </li>
                                                                                                                                                                                                                                     </ul>                                                                                                                                                  </div>
                                                                                                                                                                                                                                      </li>

                                                                                 </ul> ';
                }

                ?>
            </div>
        </div>
    </nav>

</header>


<body>
    <div>

        @yield('content')
    </div>
    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
</body>
<footer class="p-4 bg-white rounded-lg shadow md:px-6 md:py-8 dark:bg-gray-900">

    <div class="sm:flex sm:items-center sm:justify-between">
    </div>
    <hr class="my-6  border-gray-200 sm:mx-auto dark:border-gray-900 lg:my-8">
    <span class="block text-xl text-gray-500 sm:text-center dark:text-gray-600">© 2022 <a href="https://flowbite.com/"
            class="hover:underline">MySihat Portal</a>. All Rights Reserved.
    </span>
</footer>





</html>

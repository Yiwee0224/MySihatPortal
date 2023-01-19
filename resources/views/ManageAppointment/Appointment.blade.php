@extends('layout.layout')

@section('content')
    <main>

        <body>

            <div class="bg-blue-700">
                <br>
                <div class=" text-5xl text-center text-white">
                    <h1>Appointment</h1>
                </div>
                <div class=" text-2xl text-center my-2 text-white">
                    <h1>Book online now</h1>
                </div>

                <br>
            </div>

            <div class="bg-slate-50 rounded-xl">
                <br>
                <div class="w-auto mx-24" style=" border:1px ;">
                    <div class="h-70 grid grid-cols-3 gap-12 content-center  ">
                        <article>
                            <div
                                class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                <div>
                                    <h5 class="text-2xl font-bold text-teal-900 dark:text-white text-center">Health Screening
                                    </h5> <br>

                                    <p class="text-center">Basic health screening </p>
                                    <p class="text-center"> for the customer</p>
                                    <br>
                                    <div class="flex flex-col justify-center items-center">
                                        <button
                                            class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5   mr-2 mb-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                            type="button" data-modal-toggle="popup-modal1">
                                            Read More
                                        </button>

                                        <div id="popup-modal1" tabindex="-1"
                                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4  md:inset-0 h-modal md:h-full">
                                            <div class="relative w-full max-w-md h-full md:h-auto">
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <button type="button"
                                                        class="absolute top-3 right-2.5  text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900  rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                        data-modal-toggle="popup-modal1">
                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                    <div class="p-6 text-center">

                                                        <div
                                                            class="mb-5 text-lg list-disc list-inside font-normal text-gray-500 dark:text-gray-400">
                                                            <h4 class="font-bold">
                                                                All Service </h4>
                                                            <ol
                                                                class="pl-5 mt-2 space-y-1 list-decimal list-inside text-left">
                                                                <li>Full Bolld Picture</li>
                                                                <li>Live Function Test</li>
                                                                <li>Urine Analysis</li>
                                                                <li>Renal Function</li>
                                                                <li>Lipid Profile</li>
                                                                <li>Urine Microscopy</li>
                                                                <li>Hepatitis B Screening</li>
                                                                <li>Rheumatoid Factor</li>

                                                            </ol>
                                                            <p class="font-bold text-Center"> RM388</P>
                                                        </div>
                                                        <a type="button" href="/ManageAppointment/CreateApt"
                                                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                            Book now
                                                        </a>
                                                        <button data-modal-toggle="popup-modal1" type="button"
                                                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5  hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                                            cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article>
                            <div
                                class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                <div>
                                    <h5 class="text-2xl font-bold text-teal-900 dark:text-white text-center">Pre
                                        Maritial
                                        Screening</h5> <br>

                                    <p class="text-center">common genetic blood </p>
                                    <p class="text-center">disorders test for the couple</p>
                                    <br>
                                    <div class="flex flex-col justify-center items-center">
                                        <button
                                            class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5   mr-2 mb-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                            type="button" data-modal-toggle="popup-modal2">
                                            Read More
                                        </button>

                                        <div id="popup-modal2" tabindex="-1"
                                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4  md:inset-0 h-modal md:h-full">
                                            <div class="relative w-full max-w-md h-full md:h-auto">
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <button type="button"
                                                        class="absolute top-3 right-2.5  text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900  rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                        data-modal-toggle="popup-modal2">
                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                    <div class="p-6 text-center">

                                                        <div
                                                            class="mb-5 text-lg list-disc list-inside font-normal text-gray-500 dark:text-gray-400">
                                                            <h4 class="font-bold">
                                                                All Service </h4>
                                                            <ol
                                                                class="pl-5 mt-2 space-y-1 list-decimal list-inside text-left">
                                                                <li>Full Blood Picture</li>
                                                                <li>Hepatitis B Screening</li>
                                                                <li>Lipids Profile</li>
                                                                <li>Urine Analysis</li>
                                                                <li>Urine Microscopy</li>
                                                                <li>Infectious Deseases</li>
                                                                <li>Thyroid Hormones Test</li>
                                                                <li>Diabetes Screening</li>
                                                                <li>Ultrasound Procedures</li>


                                                            </ol>
                                                            <p class="font-bold text-Center"> RM700</P>
                                                        </div>
                                                        <a type="button" href="/ManageAppointment/CreateApt"
                                                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                            Book now
                                                        </a>
                                                        <button data-modal-toggle="popup-modal2" type="button"
                                                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5  hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                                            cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article>
                            <div
                                class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                <div>
                                    <h5 class="text-2xl font-bold text-teal-900 dark:text-white text-center">Allergy Test
                                    </h5> <br>

                                    <p class="font-normal text-center">Accurate diagnosis of food allergy </p>
                                    <p class="font-normal text-center">may help improve your quality of life </p>
                                    <br>
                                    <div class="flex flex-col justify-center items-center">
                                        <button
                                            class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5   mr-2 mb-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                            type="button" data-modal-toggle="popup-modal3">
                                            Read More
                                        </button>

                                        <div id="popup-modal3" tabindex="-1"
                                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4  md:inset-0 h-modal md:h-full">
                                            <div class="relative w-full max-w-md h-full md:h-auto">
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <button type="button"
                                                        class="absolute top-3 right-2.5  text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900  rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                        data-modal-toggle="popup-modal3">
                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                    <div class="p-6 text-center">

                                                        <div
                                                            class="mb-5 text-lg list-disc list-inside font-normal text-gray-500 dark:text-gray-400">
                                                            <h4 class="font-bold">
                                                                Allergens </h4>
                                                            <ol
                                                                class="pl-5 mt-2 space-y-1 list-decimal list-inside text-left">
                                                                <li>Total lgE</li>
                                                                <li>Egg white</li>
                                                                <li>Milk Cow </li>
                                                                <li>Wheat </li>
                                                                <li>Peanut </li>
                                                                <li>SoyaBean </li>
                                                                <li> Anchovies </li>


                                                            </ol>

                                                            <p class="font-bold text-Center"> RM557</P>
                                                        </div>
                                                        <a type="button" href="/ManageAppointment/CreateApt"
                                                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                            Book now
                                                        </a>
                                                        <button data-modal-toggle="popup-modal3" type="button"
                                                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5  hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                                            cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article>
                            <div
                                class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                <div>
                                    <h5 class="text-2xl font-bold text-teal-900 dark:text-white text-center">Cardiac Test
                                    </h5> <br>

                                    <p class="text-center">Love your heart,</p>
                                    <p class="text-center">Not to be missed cardiac check</p>
                                    <br>
                                    <div class="flex flex-col justify-center items-center">
                                        <button
                                            class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5   mr-2 mb-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                            type="button" data-modal-toggle="popup-modal4">
                                            Read More
                                        </button>

                                        <div id="popup-modal4" tabindex="-1"
                                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4  md:inset-0 h-modal md:h-full">
                                            <div class="relative w-full max-w-md h-full md:h-auto">
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <button type="button"
                                                        class="absolute top-3 right-2.5  text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900  rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                        data-modal-toggle="popup-modal4">
                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                    <div class="p-6 text-center">

                                                        <div
                                                            class="mb-5 text-lg list-disc list-inside font-normal text-gray-500 dark:text-gray-400">
                                                            <h4 class="font-bold">
                                                                All Service </h4>
                                                            <ol
                                                                class="pl-5 mt-2 space-y-1 list-decimal list-inside text-left">

                                                                <li>Blood Test</li>
                                                                <li>CT calcium scoring</li>
                                                                <li>Echocardiogram</li>
                                                                <li>Stress Test</li>
                                                                <li>Consulation by Cardiologist</li>


                                                            </ol>

                                                            <p class="font-bold text-Center"> RM1000</P>
                                                        </div>
                                                        <a type="button" href="/ManageAppointment/CreateApt"
                                                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                            Book now
                                                        </a>
                                                        <button data-modal-toggle="popup-modal4" type="button"
                                                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5  hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                                            cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article>
                            <div
                                class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                <div>
                                    <h5 class="text-2xl font-bold text-teal-900 dark:text-white text-center">DNA Test
                                    </h5> <br>

                                    <p class="text-center">To identify the mutation </p>
                                    <p class="text-center"> in your gene</p>
                                    <br>
                                    <div class="flex flex-col justify-center items-center">
                                        <button
                                            class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5   mr-2 mb-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                            type="button" data-modal-toggle="popup-modal5">
                                            Read More
                                        </button>

                                        <div id="popup-modal5" tabindex="-1"
                                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4  md:inset-0 h-modal md:h-full">
                                            <div class="relative w-full max-w-md h-full md:h-auto">
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <button type="button"
                                                        class="absolute top-3 right-2.5  text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900  rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                        data-modal-toggle="popup-modal5">
                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                    <div class="p-6 text-center">

                                                        <div
                                                            class="mb-5 text-lg list-disc list-inside font-normal text-gray-500 dark:text-gray-400">
                                                            <h4 class="font-bold">
                                                                All Service </h4>
                                                            <ol
                                                                class="pl-5 mt-2 space-y-1 list-decimal list-inside text-left">
                                                                <li>Personal genome map</li>
                                                                <li>Pharmacogenetics </li>
                                                                <li>Nutrigenetics </li>
                                                                <li>Weight management </li>
                                                                <li>Allergies </li>
                                                                <li>Personality </li>
                                                                <li> Sport genomics </li>
                                                                <li>Ancestry</li>


                                                            </ol>

                                                            <p class="font-bold text-Center"> RM2300</P>
                                                        </div>
                                                        <a type="button" href="/ManageAppointment/CreateApt"
                                                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                            Book now
                                                        </a>
                                                        <button data-modal-toggle="popup-modal5" type="button"
                                                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5  hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                                            cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>



                        <article>
                            <div
                                class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                <div>
                                    <h5 class="text-2xl font-bold text-teal-900 dark:text-white text-center">
                                        Pre-U Screening
                                    </h5> <br>

                                    <p class="text-center">Medical check for </p>
                                    <p class="text-center">Pre-U student </p>
                                    <br>
                                    <div class="flex flex-col justify-center items-center">
                                        <button
                                            class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5   mr-2 mb-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                            type="button" data-modal-toggle="popup-modal6">
                                            Read More
                                        </button>

                                        <div id="popup-modal6" tabindex="-1"
                                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4  md:inset-0 h-modal md:h-full">
                                            <div class="relative w-full max-w-md h-full md:h-auto">
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <button type="button"
                                                        class="absolute top-3 right-2.5  text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900  rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                        data-modal-toggle="popup-modal6">
                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                    <div class="p-6 text-center">

                                                        <div
                                                            class="mb-5 text-lg list-disc list-inside font-normal text-gray-500 dark:text-gray-400">
                                                            <h4 class="font-bold">
                                                                All Service </h4>
                                                            <ol
                                                                class="pl-5 mt-2 space-y-1 list-decimal list-inside text-left">

                                                                <li>Urine Analysis</li>

                                                                <li>Morphine & Cannabinoids Screening</li>

                                                                <li> Diagnostic Tests</li>

                                                                <li>Medical Examination</li>


                                                            </ol>

                                                            <p class="font-bold text-Center"> RM130</P>
                                                        </div>
                                                        <a type="button" href="/ManageAppointment/CreateApt"
                                                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                            Book now
                                                        </a>
                                                        <button data-modal-toggle="popup-modal6" type="button"
                                                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5  hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                                            cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>

                    </div>

                </div>
                <br>
            </div>
            </div>

        </body>
    </main>
@endsection

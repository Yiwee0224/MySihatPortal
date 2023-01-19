@extends('layout.layout')

@section('content')

    <body>
        <br>
        <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
        <script src="https://unpkg.com/flowbite@1.5.4/dist/datepicker.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
        <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
        <script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>
        <script src="../path/to/flowbite/dist/datepicker.js"></script>
        <div class="flex flex-col justify-center items-center">
            <div class="w-6/12 mx-24 content-center" style=" border:1px ;">
                <form name="newApt" action="/ManageAppointment/new" method="POST" enctype='multipart/form-data'
                    onsubmit="return validate()">
                    @csrf
                    <div class="mb-6">
                        <label for="Username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                            Name</label>
                        <input type="Username" id="Username" name=userName
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder={{ Auth::user()->userName }} @disabled(true)>
                    </div>
                    <div class="mb-6">
                        <label for="Contact Num" name=contactNumber
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Contact</label>
                        <input type="Contact" id="Contact"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder={{ Auth::user()->contactNumber }} @disabled(true)>
                    </div>


                    <label for="appointment name"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select your
                        health service</label>
                    <select id="apName" name="apName"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option>Health Screning</option>
                        <option>Allergy Test</option>
                        <option>Cardiac Test</option>
                        <option>DNA Test</option>
                        <option>Pre Maritial Screening</option>
                        <option>Pre-U Screening </option>
                    </select>
                    <label for="appointment place"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select your
                        appointment Location</label>
                    <select id="apPlace" name="apPlace"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option>Pantai Hospital</option>
                        <option>Columbia Asia Hospital </option>
                        <option>Sri kota Hospital </option>
                        <option>Bukit Tinggi Hospital </option>
                        <option>Tengku Ampuan Rahimah Hospital </option>
                    </select>
                    <br>



                    <div class="relative">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input datepicker datepicker-autohide type="text" name="apDate"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Select date">
                    </div>
                    <br>
                    <div class="flex justify-center">
                        <div class="timepicker relative form-floating mb-3 xl:w-96">
                            <input type="text"name="apTime"
                                class="form-control mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Select a date" />
                            <label for="floatingInput" class="text-gray-700">Select a time</label>
                            <button tabindex="0" type="button" class="timepicker-toggle-button"
                                data-mdb-toggle="timepicker">
                                <i class="fas fa-clock timepicker-icon"></i>
                            </button>
                        </div>
                    </div>

                    <div class="relative">
                        <br>
                        <div class="flex flex-col justify-center items-center">
                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                        </div>
                </form>
            </div>
            <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
            </form>
        </div>
    </body>
@endsection

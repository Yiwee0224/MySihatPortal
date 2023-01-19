@extends('layout.admin')

@section('content')
    <script>
        var loadPic = function(event) {
            var image = document.getElementById('pic_review');
            image.style.visibility = "visible";
            image.src = URL.createObjectURL(event.target.files[0]);
            visibility: hidden;
        };
    </script>

    <style>
        table {
            border: 1px solid black;
            border-collapse: separate;
            border-spacing: 0 1em;
        }

        input.text {
            width: 200px;
        }

        label {
            margin-left: 10px;
        }
    </style>


    <div class="container-fluid mt-5" style="width:60%; margin-left:auto; margin-right:auto; ">
        <form name="newUserF" action="/ManageLabReport/new" method="POST" enctype='multipart/form-data'
            onsubmit="return validate()">
            @csrf
            <div class="container-fluid mt-5" style="width:100%; margin-bottom:10px;">
                <table style="width:100%;">
                    <thead>
                        <tr>
                            <td colspan=3 style="border-bottom:1px solid black;">
                                <div style="float:left; margin-left:5px; margin-bottom:10px;">
                                    <a href="javascript:window.history.back();"><i
                                            class="fas fa-arrow-circle-left fa-3x"></i></a>
                                </div>
                                <h3 style="text-align:center; margin-top:8px;">New Lab Report</h3>
                            </td>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td style="width:25%"><label for="userID">Customer ID:</label></td>
                            <td style="width:30%;"><input type="number" name="userID" placeholder="9"></td>
                        </tr>
                        <tr>
                            <td style="width:25%"><label for="userName">User Name</label></td>
                            <td style="width:30%;"><input type="userName" name="userName" placeholder="KD"></td>
                        </tr>
                        <tr>
                            <td style="width:25%"><label for="reportTitle">Test Name:</label></td>
                            <td style="width:30%;"><input type="tel" name="reportTitle" placeholder="DNA Test"></td>
                        </tr>
                        <tr>
                            <td style="width:25%"><label for="reportDate">Date Of Report:</label></td>
                            <td style="width:30%;"><input type="reportDate" name="reportDate" placeholder="2019-02-19">
                            </td>
                        </tr>
                        <tr>

                            <td> <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="reportDocument">Upload file</label></td>
                            <td> <input
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    accept=".pdf" id="reportDocument" type="file" name="reportDocument"></td>
                        </tr>


                    <tbody>
                    <tfoot stlye="display:none;">
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div style="float:right;">
                <div class="container">
                    <input type="submit"
                        class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs
                    leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg
                    focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800
                    active:shadow-lg transition duration-150 ease-in-out"
                        value="Create Lab Report">
                    <button class="right dt-button" type="button" style="width:100px; height:30px;"
                        onClick="javascript:window.history.back();">Cancel</button>


                </div>
            </div>
        </form>
    </div>
@endsection

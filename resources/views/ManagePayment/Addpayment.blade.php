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
        <form name="newUserF" action="/ManagePayment/new" method="POST" enctype='multipart/form-data'
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
                                <h3 style="text-align:center; margin-top:8px;">New Payment </h3>
                            </td>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td style="width:25%"><label for="userID">Customer ID:</label></td>
                            <td style="width:30%;"><input type="number" name="userID" placeholder="9"></td>
                        </tr>
                    
                        <tr>
                            <td style="width:25%"><label for="payName">Payment Name:</label></td>
                            <td style="width:30%;"><input type="tel" name="payName" placeholder="DNA Test"></td>
                        </tr>
                        <tr>
                            <td style="width:25%"><label for="payDate">Date Of Payment:</label></td>
                            <td style="width:30%;"><input type="payDate" name="payDate" placeholder="2019-02-19">
                            </td>
                        </tr>
                        <tr>
                            <td style="width:25%"><label for="payAmount">Payment Amount:</label></td>
                            <td style="width:30%;"><input type="payAmount" name="payAmount" placeholder="1000">
                            </td>
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
                        value="Create New Payment">
                    <button class="right dt-button" type="button" style="width:100px; height:30px;"
                        onClick="javascript:window.history.back();">Cancel</button>


                </div>
            </div>
        </form>
    </div>
@endsection

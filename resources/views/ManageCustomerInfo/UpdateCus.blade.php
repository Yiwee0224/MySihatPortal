@extends('layout.admin')

@section('content')
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

    <div class="container-fluid mt-5" style="width:60%; margin-left:auto; margin-right:auto;">
        @foreach ($datas as $data)
            <form action="/ManageCustomerInfo/updateUserProfile/{{ $data->userID }}" method="POST"
                enctype='multipart/form-data'>
                @csrf
        @endforeach
        <div class="container-fluid mt-5" style="width:100%; margin-bottom:10px;">
            <table style="width:100%;">
                <thead>
                    <tr>
                        <td colspan=3 style="border-bottom:1px solid black;">
                            <div style="float:left; margin-left:5px; margin-bottom:10px;">
                                <a href="javascript:window.history.back();"><i
                                        class="fas fa-arrow-circle-left fa-3x"></i></a>
                            </div>
                            <h3 style="text-align:center;margin-top:8px;">Update Customer Profile</h3>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $data)
                        <tr>
                            <td style="width:25%"><label for="userID">User ID:</label></td>
                            <td style="width:30%;"><input type="text" name="userID" value="{{ $data->userID }}" readonly
                                    disabled></td>
                            <td rowspan="6">
                                <div style="margin-top:-100px;">

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:25%"><label for="userName">Name:</label></td>
                            <td style="width:30%;">
                                <textarea type="text" name="userName" style="height:70px; width:192px;resize:none;" required>{{ $data->userName }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:25%"><label for="contactNumber">Contact Number:</label></td>
                            <td style="width:30%;"><input type="tel" name="contactNumber" palceholder="0123456789"
                                    value="{{ $data->contactNumber }}" required></td>
                        </tr>
                        <tr>
                            <td style="width:25%"><label for="email">Email:</label></td>
                            <td style="width:30%;"><input type="email" name="email" value="{{ $data->email }}"
                                    required>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:25%"><label for="userType">User Type:</label></td>
                            <td style="width:30%;">
                                <input type="radio" name="userType" value="customer" required><label
                                    for="userType">customer</label>
                                <br>
                                <input type="radio" name="userType" value="admin"><label for="userType">admin</label>
                                <br>



                            </td>
                        </tr>
                    @endforeach
                <tbody>
                <tfoot stlye="display:none;">
                    <tr>
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
                    value="Update">
                <button
                    class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs
                leading-tight uppercase rounded shadow-md hover:bg-sky-400 hover:shadow-lg
                focus:bg-sky-400 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-sky-400
                active:shadow-lg transition duration-150 ease-in-out"
                    type="button" onClick="javascript:window.history.back();">Cancel</button>


            </div>
        </div>
        </form>
    </div>
@endsection

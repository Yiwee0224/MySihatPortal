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
        @foreach ($Apt as $apt)
            <form action="/ManageAppointment/update/{{ $apt->userID }}" method="POST" enctype='multipart/form-data'>
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
                            <h3 style="text-align:center;margin-top:8px;">Update Appointment </h3>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Apt as $apt)
                        <tr>
                            <td style="width:25%"><label for="userName">Name:</label></td>
                            <td style="width:30%;"><input type="userName" name="userName" value="{{ $apt->userName }}"
                                    disabled>
                            </td>
                        </tr>

                        <tr>
                            <td style="width:25%"><label for="apName">Appointment Name:</label></td>
                            <td style="width:30%;"> <select id="apName" name="apName"value="{{ $apt->apName }}">
                                    <option>Health Screning</option>
                                    <option>Allergy Test</option>
                                    <option>Cardiac Test</option>
                                    <option>DNA Test</option>
                                    <option>Pre Maritial Screening</option>
                                    <option>Pre-U Screening </option>
                                </select></td>
                        </tr>
                        <tr>
                            <td style="width:25%"><label for="apDate">Appoitment Date:</label></td>
                            <td style="width:30%;"><input type="apDate" name="apDate" palceholder="0123456789"
                                    value="{{ $apt->apDate }}" required></td>
                        </tr>
                        <tr>
                            <td style="width:25%"><label for="apTime">Appointment Time:</label></td>
                            <td style="width:30%;"><input type="apTime" name="apTime" palceholder="0123456789"
                                    value="{{ $apt->apTime }}" required></td>
                        </tr>
                        <tr>
                            <td style="width:25%"><label for="email">Email:</label></td>
                            <td style="width:30%;"><input type="email" name="email" value="{{ $apt->email }}"
                                    disabled>
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

@extends('layout.admin')

@section('content')
    <style>
        table {
            border: 1px solid black;
            border-collapse: separate;
            border-spacing: 0 1em;
        }

        p {
            margin-left: 10px;
        }
    </style>
    @csrf
    <div class="container-fluid mt-5" style="width:60%; margin-left:auto; margin-right:auto; ">
        <div class="container-fluid mt-5" style="width:100%; margin-bottom:10px;">
            <table style="width:100%;">
                <thead>
                    <tr>
                        <td colspan=3 style="border-bottom:1px solid black;">
                            <div style="float:left; margin-left:5px; margin-bottom:10px;">
                                <a href="javascript:window.history.back();"><i class="fas fa-arrow-circle-left fa-3x"></i></a>
                            </div>
                            <h3 style="text-align:center; margin-top:8px;">Incident </h3>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Cs as $cs)
                        <tr>
                            <td style="width:25%">
                                <p>Name:</p>
                            </td>
                            <td style="width:45%;"> {{ $cs->userName }} </td>
                        </tr>
                        <tr>
                            <td style="width:25%">
                                <p>Email:</p>
                            </td>
                            <td style="width:45%;"> {{ $cs->email }} </td>
                        </tr>
                        <tr>
                            <td style="width:25%">
                                <p>Incident Tittle :</p>
                            </td>
                            <td style="width:45%;"> {{ $cs->CsTitle }} </td>
                        </tr>

                        <tr>
                            <td style="width:25%">
                                <p>Solution:</p>
                            </td>
                            <td style="width:45%;"> {{ $cs->CsSolution }} </td>
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
                @foreach ($Cs as $cs)
                    <a href="/ManageCs/UpdateCs/{{ $cs->userID }}"><button
                            class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs
                    leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg
                    focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800
                    active:shadow-lg transition duration-150 ease-in-out"
                            type="button">Update</button></a>
                @endforeach
                <button class="right dt-button" type="button" style="width:80px; height:30px;"
                    onClick="javascript:window.history.back();">OK</button>
            </div>
        </div>
    </div>
@endsection

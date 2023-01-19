@extends('layout.layout')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
@section('content')
    <script>
        $(document).ready(function() {
            var table = $('#users').DataTable();
        });
    </script>
    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse;
        }

        table,
        tr,
        th {
            text-align: center;
        }
    </style>
    <br>
    <div class="flex justify-center ...">
        <div class="w-3/6 mx-24" style=" border:1px solid white;">
            <div class="w-full " style=" border:1px solid black;">
                <table style="width:100%; margin-left:auto; margin-right:auto;  border:1px solid white;">
                    <tr>
                        <td>
                            <div style="float:left; margin-top:10px; margin-bottom:10px;">
                                <a href="javascript:window.history.back();"><i
                                        class="fas fa-arrow-circle-left fa-3x"></i></a>
                            </div>
                            <h3 style="margin-top:20px;font-size:30px;">Incident List</h3>
                        </td>
                    </tr>
                    <tr style="border-top:1px solid black;">
                        <td><br></td>
                    </tr>
                    <tr>
                        <td>
                            <table id="users" class="display w-full" style="border:1px solid white;">
                                <thead>
                                    <tr>

                                        <th>Incident Tittle</th>
                                        <th>Solution</th>




                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Cs as $cs)
                                        <tr>

                                            <td> {{ $cs->CsTitle }} </td>
                                            <td> {{ $cs->CsSolution }}</td>





                                        </tr>


                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot style="display:none;">
                        <tr>
                            <td></td>
                            <td></td>




                        </tr>
                    </tfoot>
                </table>
                </td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>

                </table>
            </div>
        </div>
    </div>
@endsection

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
    <div class="w-10/12 mx-24" style=" border:1px solid white;">
        <div class="w-full " style=" border:1px solid black;">
            <table style="width:100%; margin-left:auto; margin-right:auto;  border:1px solid white;">
                <tr>
                    <td>
                        <div style="float:left; margin-top:10px; margin-bottom:10px;">
                            <a href="javascript:window.history.back();"><i class="fas fa-arrow-circle-left fa-3x"></i></a>
                        </div>
                        <h3 style="margin-top:20px;font-size:30px;">Customer Lab Report List</h3>
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

                                    <th>Customer Name</th>
                                    <th>Test Name</th>

                                    <th>Date of Report</th>
                                    <th></th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reportDetail as $report)
                                    <tr>


                                        <td>{{ $report->userName }}</td>
                                        <td>{{ $report->reportTitle }}</td>

                                        <td>{{ $report->reportDate }}</td>

                                        <td class="w-1/5">

                                            <a href="/download_files/{{ $report->reportDocument }}" class="btn">
                                                <button type="button"
                                                    class="inline-block px-6 pt-2.5 pb-2 bg-blue-600 text-white font-medium text-xs leading-normal uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out flex align-center">
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="download" class="w-3 mr-2" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="currentColor"
                                                            d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                                                        </path>
                                                    </svg>
                                                    Download
                                                </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot style="display:none;">
                                <tr>
                                    <td></td>
                                    <td></td>

                                    <td></td>
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

    <script type="text/javascript" class="init">
        $(document).ready(function() {
            $('#listReport').DataTable();
        });
    </script>
@endsection

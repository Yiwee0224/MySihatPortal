@extends('layout.admin')
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
                        <h3 style="margin-top:20px;font-size:30px;">Customer Payment List</h3>
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

                                    <th>Cus Name</th>
                                    <th>Payment Name</th>
                                    <th>Payment Date</th>
                                    <th>Payment Amount</th>
                                    <th>Invoice</th>



                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($paymentdetail as $pay)
                                    <tr>


                                        <td>{{ $pay->userName }}</td>
                                        <td> {{ $pay->payName }} </td>
                                        <td> {{ $pay->payDate }} </td>
                                        <td> {{ $pay->payAmount }} </td>
                                        {{-- <td> <a href="/ManagePayment/PaymentInvoice/{{ $pay->userID }}"><button
                                                    type="button"
                                                    class="inline-block px-6 py-2.5 bg-yellow-300 text-white font-medium text-xs
                    leading-tight uppercase rounded shadow-md hover:bg-yellow-300 hover:shadow-lg
                    focus:z focus:shadow-lg focus:outline-none focus:ring-0 active:bg-yellow-300
                    active:shadow-lg transition duration-150 ease-in-out">
                                                    View</a> </td> --}}
                                        <td><button type="button"
                                                class="inline-block px-6 py-2.5 bg-yellow-300 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-yellow-300 hover:shadow-lg focus:z focus:shadow-lg focus:outline-none focus:ring-0 active:bg-yellow-300 active:shadow-lg transition duration-150 ease-in-out"
                                                onclick="window.open('/ManagePayment/PaymentInvoice/{{ $pay->userID }}', '_blank')">View</button>
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
                                    <td></td>



                                </tr>
                            </tfoot>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr style="border-top:1px solid black;">
                    <td>
                        <div style="margin-top:5px;">
                            <div style="float:left;">

                                <a href="/ManagePayment/Addpayment" type="button"
                                    class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs
                                     leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg
                                     focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800
                                     active:shadow-lg transition duration-150 ease-in-out">
                                    Add New Payment
                                </a>
                            </div>

                        </div>
                    </td>
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

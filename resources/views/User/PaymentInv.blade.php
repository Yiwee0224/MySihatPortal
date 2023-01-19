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
                            <h3 style="text-align:center; margin-top:8px;">Payment Detail </h3>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($paymentDetails as $pay)
                        <tr>
                            <td style="width:25%">
                                <p>Payment ID:</p>
                            </td>
                            <td style="width:45%;"> {{ $pay->payID }} </td>
                        </tr>

                        <tr>
                            <td style="width:25%">
                                <p>Service Name:</p>
                            </td>
                            <td style="width:45%;"> {{ $pay->payName }} </td>
                        </tr>
                        <tr>
                            <td style="width:25%">
                                <p>Payment Date :</p>
                            </td>
                            <td style="width:45%;"> {{ $pay->payDate }} </td>
                        </tr>

                        <tr>
                            <td style="width:25%">
                                <p>Payment Time:</p>
                            </td>
                            <td style="width:45%;"> {{ $pay->payAmount }} </td>
                        </tr>
                    @endforeach
                <tbody>
                <tfoot stlye="display:none;">
                    <tr>
                        <td></td>
                        <td></td>

                    </tr>
                </tfoot>
            </table>
        </div>
        <div style="float:right;">
            <div class="container">
                @foreach ($paymentDetails as $pay)
                @endforeach
                <button onclick="window.print()">Print</button>

            </div>
        </div>
    </div>

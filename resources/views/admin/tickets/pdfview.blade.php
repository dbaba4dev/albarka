<?php
$settings = \App\Setting::where('id', 1)->first();
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('pdf/bootstrap/bootstrap.min.css')}}">
</head>

<body>
<header class="clearfix" style="padding-bottom: -0.2rem; ">
    <div id="logo" style="text-align: center; padding-bottom: -2.5rem">

        <img src="data:image/png;base64, {{base64_encode(@file_get_contents(asset('images/logo/Cfresh-label.png')))}}"
             height="100px" width="100px"><br><br>
        <br><br>
    </div>
    <div class="row">
        <table class="table table-borderless  table-sm" style="font-size: 12px">
            <tr>
                <td colspan="3"> <h3 class="text-bold text-primary text-center">Ticket </h3></td>
            </tr>
            <tr>
                <td class="text-left"><strong>{{$employee}}</strong></td>
                <td>
                    <p class="m-0 text-center">{{$settings->site_name}} </p>
                    <p style="font-size: 10px"  class="m-0 text-center">{{$settings->contact_address}} </p>
                </td>
                <td class="text-right">{{$user}}</td>
            </tr>

        </table>
    </div>
    <div class="row">
            <table class="table table-bordered  table-sm" style="font-size: 12px">

                <tr>
                    <td style="background-color: darkred; color: white;"><strong>FILLING STATION</strong></td>
                    <td class="text-center">{{strtoupper($PDFReport->station->name . ', ' .$PDFReport->station->address )}}</td>
                </tr>

                <tr>
                    <td style="background-color: darkred; color: white;"><strong>SERIAL</strong></td>
                    <td class="text-center">{{ strtoupper($PDFReport->serial)  }}</td>
                </tr>

                <tr>
                    <td style="background-color: darkred; color: white;"><strong>FUEL</strong></td>
                    <td class="text-center">{{ strtoupper($PDFReport->fuel->name)  }}</td>
                </tr>

                <tr>
                    <td style="background-color: darkred; color: white;"><strong>QUANTITY</strong></td>
                    <td class="text-center">{{ $PDFReport->qty == 0 ? '' : $PDFReport->qty }}</td>
                </tr>
                <tr>
                    <td style="background-color: darkred; color: white;"><strong>UNIT PRICE</strong></td>
                    <td class="text-center">NGN {{ number_format($PDFReport->unit_price, 2)  }}</td>
                </tr>

                <tr>
                    <td style="background-color: darkred; color: white;"><strong>TOTAL AMOUNT</strong></td>
                    <td class="text-center"><strong>NGN {{ number_format($PDFReport->tot_price, 2)  }}</strong></td>
                </tr>

            </table>

    </div>

    <div class="row">
        <table class="table table-bordered  table-sm" style="font-size: 12px">
            <tr>
                <td style="background-color: darkred; color: white;"><strong>SALES ASSISTANT</strong></td>
                <td class="text-center"></td>
                <td style="background-color: darkred; color: white;"><strong>Sign.</strong></td>
            </tr>
            <tr>
                <td class="text-center">{{strtoupper($PDFReport->sales_assist )}}</td>
                <td class="text-center" height="50px"></td>
                <td class="text-center" height="50px"></td>
            </tr>
        </table>
    </div>

</header>

<script type="text/php">
    if ( isset($pdf) ) {
        $font = $fontMetrics->getFont("Times", "bold");
        $color = array(0,0,0);
        $w = $pdf->get_width();
        $h = $pdf->get_height();

    $pdf->page_text(30, 810, "{{\Carbon\Carbon::parse(today())->toFormattedDateString()}}
    -({{\Carbon\Carbon::parse(now())->format('h:i A')}})", $font, 6, array(0,0,1));
        $pdf->page_text(270, 810, "Page {PAGE_NUM} of {PAGE_COUNT}", $font, 6, $color);
        $pdf->page_text(530, 810, "cfresh.org", $font, 8, array(0,0,1));
    }

</script>
<script src="{{asset('pdf/jquery/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('pdf/popper.js/dist/popper.min.js')}}"></script>
<script src="{{asset('pdf/bootstrap/bootstrap.bundle.min.js')}}"></script>
</body>
</html>

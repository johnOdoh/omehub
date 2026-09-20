<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Packing List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        td, th {
            border: 1px solid black;
            padding: 4px;
            vertical-align: top;
        }
        .no-border {
            border: none;
        }
        .center {
            text-align: center;
        }
        .bold {
            font-weight: bold;
        }
        .small {
            font-size: 11px;
        }
        .checkbox {
            display: inline-block;
            width: 12px;
            height: 12px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h2 class="center">PACKING LIST</h2>

    <table width="100%">
        <tr>
            <td rowspan="2" style="width:60%;">
                <strong>SHIPPED TO</strong><br><br>
                {{ $customer_name }} <br>
                {{ $customer_address }} <br>
                {{ $customer_city }}, {{ $customer_zip }}, {{ $customer_country }}<br>
              Tel: {{ $customer_phone }}
            </td>
            <td style="width:20%;"><strong>ORDER #</strong><br>{{ $order_no }}</td>
            <td style="width:20%;"><strong>DATE</strong><br>{{ $date_shipped }}</td>
        </tr>
        <tr>
            <td colspan="2" class="small" style="text-align:center;">
                <strong>NOTE:</strong><br>
                When referring to this shipment be sure to give<br>
                order # and shipping date.
            </td>
        </tr>
    </table>
    <br>

    <table>
        <tr>
            <td><strong>DATE ORDERED</strong><br>{{ $order_date }}</td>
            <td><strong>CUSTOMER ORDER NUMBER</strong><br>{{ $cus_no }}</td>
            <td colspan="2"><strong>ATTENTION</strong><br>{{ $attention }}</td>
        </tr>
        <tr>
            <td><strong>DATE SHIPPED</strong><br>{{ $date_shipped }}</td>
            <td><strong>SHIPPED VIA</strong><br>{{ $shipped_via }}</td>
            <td><strong>CONTAINER NUMBER</strong><br>{{ $container_no }}</td>
            <td><strong>OUR INVOICE NUMBER</strong><br>{{ $invoice_no }}</td>
        </tr>
    </table>
    <br>

    <table>
        <tr class="bold center">
            <td style="width:5%;">#</td>
            <td style="width:15%;">ITEM NUMBER</td>
            <td style="width:10%;">QUANTITY</td>
            <td style="width:10%;">SHIPPED</td>
            <td style="width:10%;">BACKORDERED</td>
            <td style="width:30%;">DESCRIPTION</td>
            <td style="width:10%;">UNIT WEIGHT</td>
            <td style="width:10%;">TOTAL WEIGHT</td>
        </tr>
        @for ($i = 0; $i <= $index; $i++)
            <tr>
                <td class="center">{{ $i+1 }}</td>
                <td>{{ $item_no[$i] }}</td>
                <td>{{ $qty[$i] }}</td>
                <td>{{ $qty_shipped[$i] }}</td>
                <td>{{ $qty_back[$i] }}</td>
                <td>{{ $description[$i] }}</td>
                <td>{{ $unit_weight[$i] }} {{ $unit[$i] }}</td>
                <td>{{ $total_weight[$i] }} {{ $unit[$i] }}</td>
            </tr>
        @endfor
    </table>
    <br>

    <table>
        <tr>
            <td style="height:70px; width: 70%;">
                <strong>Comments</strong><br>
                {{ $comments }}
            </td>
            <td style="height:70px; width: 30%;">
                <strong>PACKED BY</strong> <br>
                {{ $packed_by }}
            </td>
        </tr>
    </table>
    <br>
</body>
</html>

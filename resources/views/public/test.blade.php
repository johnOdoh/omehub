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
                John Doe <br>
                123 Main Street <br>
                Springfield, IL 62704
            </td>
            <td style="width:20%;"><strong>ORDER #</strong><br>ORD-4598</td>
            <td style="width:20%;"><strong>DATE</strong><br>2025-09-08</td>
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
            <td><strong>DATE ORDERED</strong><br>2025-09-01</td>
            <td><strong>CUSTOMER ORDER NUMBER</strong><br>CUST-7890</td>
            <td><strong>DATE SHIPPED</strong><br>2025-09-07</td>
            <td><strong>ATTENTION</strong><br>Jane Smith</td>
        </tr>
        <tr>
            <td><strong>SHIPPED VIA</strong><br>FedEx</td>
            <td><strong>CONTAINER NUMBER</strong><br>CN-5542</td>
            <td colspan="2"><strong>OUR INVOICE NUMBER</strong><br>INV-2025-120</td>
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

        <tr>
            <td class="center">1</td>
            <td>ITM-001</td>
            <td>50</td>
            <td>50</td>
            <td>0</td>
            <td>Wireless Headphones</td>
            <td>0.5 kg</td>
            <td>25 kg</td>
        </tr>
        <tr>
            <td class="center">2</td>
            <td>ITM-002</td>
            <td>100</td>
            <td>90</td>
            <td>10</td>
            <td>Bluetooth Speakers</td>
            <td>0.8 kg</td>
            <td>80 kg</td>
        </tr>
        <tr>
            <td class="center">3</td>
            <td>ITM-003</td>
            <td>200</td>
            <td>200</td>
            <td>0</td>
            <td>USB-C Chargers</td>
            <td>0.2 kg</td>
            <td>40 kg</td>
        </tr>
        <tr>
            <td class="center">4</td>
            <td>ITM-004</td>
            <td>150</td>
            <td>150</td>
            <td>0</td>
            <td>Laptop Backpacks</td>
            <td>1.2 kg</td>
            <td>180 kg</td>
        </tr>
        <!-- Fill remaining rows empty -->
        <tr><td class="center">5</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
        <tr><td class="center">6</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
        <tr><td class="center">7</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
        <tr><td class="center">8</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
        <tr><td class="center">9</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
        <tr><td class="center">10</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
        <tr><td class="center">11</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
        <tr><td class="center">12</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
    </table>
    <br>

    <table>
        <tr>
            <td style="height:70px; width: 70%;">
                <strong>Comments</strong><br>
                Handle with care. Fragile items included.
            </td>
            <td style="height:70px; width: 30%;">
                <strong>PACKED BY</strong> <br>
                John Smith
            </td>
        </tr>
    </table>
    <br>
</body>
</html>

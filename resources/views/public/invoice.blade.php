<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Shipment Invoice</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: px;
      color: #000;
      font-size: 12px;
    }

    .invoice-box {
      /* max-width: 800px; */
      margin: auto;
      padding: 10px;
      border: 1px solid #eee;
    }

    .logo {
      width: 150px;
    }

    /* .section {
      width: 50%;
    } */

    .table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 30px;
    }

    .table th, .table td {
      border: 1px solid #000;
      padding: 8px;
      text-align: left;
    }

    .table th {
      background: #0b3aa7;
      color: white;
    }

    .summary {
      margin-top: 20px;
      text-align: right;
    }

    .summary div {
      margin-bottom: 5px;
    }

    .footer-note {
      margin-top: 30px;
      font-style: italic;
      font-size: 13px;
    }

    .text-right {
      text-align: right;
    }
  </style>
</head>
<body>
  <div class="invoice-box">
    <table style="width: 100%; margin-bottom: 20px;">
        <tr>
            <td colspan="2" style="text-align: left;">
                <img src="{{ public_path('storage/'.$from->profile()->logo) }}" alt="Company Logo" style="width: 100px;">
            </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center; font-size: 18px; color: #0b3aa7; font-weight: bold;">
            Tracking Number #{{ $shipment->tracking_number }}
            </td>
        </tr>
        <tr>
            <td style="width: 50%; vertical-align: top; padding-right: 10px;">
            <p><strong style="color:#0b3aa7;">{{ $from->name }}</strong><br>
                {{ $from->profile()->address }}<br>
                {{ $from->email }}<br>
                {{ $from->profile()->phone }}
            </p>
            <p>
                <strong>Bank Name: </strong>{{ $data['name'] }}<br>
                <strong>Address: </strong>{{ $data['address'] }}<br>
                <strong>SWIFT/BIC: </strong>{{ $data['swift'] }}<br>
                <strong>Account Number: </strong>{{ $data['number'] }}
            </p>
            </td>

            <td style="width: 50%; vertical-align: top; padding-left: 10px;">
            <p><strong style="color:#0b3aa7;">BILL TO</strong><br>
                {{ $to->name }}<br>
                {{ $to->profile()->address }}<br>
                {{ $to->email }}<br>
                {{ $to->profile()->phone }}
            </p>
            <p>
                Invoice Date: {{ date('d/m/Y') }}<br>
                <strong>Due Date: {{ $data['date'] }}</strong>
            </p>
            </td>
        </tr>
    </table>
    @php $currency = $shipment->quote->request->currency @endphp
    @if ($type == 'logistics')
        <table class="table">
            <thead>
                <tr>
                    <th>DESCRIPTION</th>
                    <th>QTY</th>
                    <th>UNIT PRICE ({{ $currency }})</th>
                    <th>SUBTOTAL ({{ $currency }})</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Freight Charge</td>
                    <td>1</td>
                    <td>{{ number_format($shipment->quote->cost, 2) }}</td>
                    <td>{{ number_format($shipment->quote->cost, 2) }}</td>
                </tr>
                <tr>
                    <td>Custom Charge</td>
                    <td>1</td>
                    <td>{{ number_format($shipment->quote->custom, 2) }}</td>
                    <td>{{ number_format($shipment->quote->custom, 2) }}</td>
                </tr>
                @if ($shipment->insurance_quote_id)
                    <tr>
                        <td>Insurance Charge</td>
                        <td>1</td>
                        <td>{{ number_format($shipment->insurance_quote->charge, 2) }}</td>
                        <td>{{ number_format($shipment->insurance_quote->charge, 2) }}</td>
                    </tr>
                @endif
                @if ($shipment->carbon_offset)
                    <tr>
                        <td>Carbon Emission</td>
                        <td>1</td>
                        <td>{{ number_format($shipment->carbon_offset, 2) }}</td>
                        <td>{{ number_format($shipment->carbon_offset, 2) }}</td>
                    </tr>
                @endif
            </tbody>
        </table>
        <div class="summary">
            <div>SUBTOTAL: {{ $currency }} {{ number_format($shipment->amount, 2) }}</div>
            <div><strong>Total: {{ $currency }} {{ number_format($shipment->amount, 2) }}</strong></div>
        </div>
    @elseif ($type == 'insurance')
        <table class="table">
            <thead>
                <tr>
                    <th>DESCRIPTION</th>
                    <th>QTY</th>
                    <th>UNIT PRICE ({{ $currency }})</th>
                    <th>SUBTOTAL ({{ $currency }})</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Insurance Charge</td>
                    <td>1</td>
                    <td>{{ number_format($shipment->insurance_quote->charge, 2) }}</td>
                    <td>{{ number_format($shipment->insurance_quote->charge, 2) }}</td>
                </tr>
            </tbody>
        </table>
        <div class="summary">
            <div>SUBTOTAL: {{ $currency }} {{ number_format($shipment->insurance_quote->charge, 2) }}</div>
            <div><strong>Total: {{ $currency }} {{ number_format($shipment->insurance_quote->charge, 2) }}</strong></div>
        </div>
    @endif
  </div>
</body>
</html>

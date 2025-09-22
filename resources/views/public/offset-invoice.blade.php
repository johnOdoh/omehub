<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Carbon Offset Invoice</title>
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
    <table style="width: 100%;">
        <tr class="margin-bottom: 50px;">
            <td colspan="2" style="text-align: center; margin-bottom: 15px;">
                <img src="{{ public_path('storage/'.$from->profile->logo) }}" alt="Company Logo" style="width: 100px;">
            </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: left; font-size: 13px; color: #0b3aa7; font-weight: bold;">
                Carbon Offset Invoice for {{ $data['month'] }}
            </td>
        </tr>
        <tr>
            <td style="width: 50%; vertical-align: top; padding-right: 10px;">
                <p><strong style="color:#0b3aa7;">{{ $from->name }}</strong><br>
                    {{ $from->profile->address }}<br>
                    {{ $from->email }}<br>
                    {{ $from->profile->phone }}
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
                    {{ config('app.name') }}<br>
                    {{ config('app.address') }}<br>
                    {{ config('app.email') }}<br>
                    {{ config('app.phone') }}
                </p>
                <p>
                    Invoice Date: {{ date('d/m/Y') }}<br>
                    <strong>Due Date: {{ $data['date'] }}</strong>
                </p>
            </td>
        </tr>
    </table>
    <table class="table">
        <thead>
            <tr>
                <th>S/N</th>
                <th>SHIPMENT DATE</th>
                <th>ORDERED BY</th>
                <th>SHIPPED BY</th>
                <th>SHIPMENT AMOUNT</th>
                <th>OFFSET AMOUNT</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($shipments as $shipment)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $shipment->created_at->format('d M, Y') }}</td>
                    <td>{{ $shipment->user->name }}</td>
                    <td>{{ $shipment->quote->user->name }}</td>
                    <td>{{ $shipment->quote->request->currency }} {{ number_format($shipment->amount, 2) }}</td>
                    <td>USD {{ number_format(5, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="summary">
        <div>SUBTOTAL: USD {{ number_format($shipments->count()*5, 2) }}</div>
        <div><strong>Total: USD {{ number_format($shipments->count()*5, 2) }}</strong></div>
    </div>
  </div>
</body>
</html>

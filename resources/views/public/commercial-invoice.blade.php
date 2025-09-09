<!doctype html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Commercial Invoice</title>
  <style>
    body { font-family: DejaVu Sans, Arial, Helvetica, sans-serif; font-size:11px; color:#000; }
    .page { width: 100%; margin: 0; padding: 8px; }
    table { width: 100%; border-collapse: collapse; table-layout: fixed; }
    th, td { border: 1px solid #000; padding: 4px 6px; vertical-align: top; word-wrap: break-word; }
    .no-border { border: none !important; padding: 0; }
    .title { text-align: center; font-weight: bold; font-size:16px; margin-bottom:6px; }
    /* .small-note { font-size:9px; text-align:right; } */
    .field-box { border: 1px solid #000; height:18px; display:inline-block; vertical-align:middle; padding:2px 6px; min-width:60px; }
    .field-block { border:1px solid #000; height:22px; display:block; padding:2px 6px; }
    .checkbox { display:inline-block; width:12px; height:12px; border:1px solid #000; vertical-align:middle; margin-right:6px; }
    .thead { background:#f8f8f8; font-weight:bold; text-align:center; }
    /* .c-origin { width:12%; }
    .c-marks { width:12%; }
    .c-pkgs { width:6%; text-align:center; }
    .c-pack { width:9%; }
    .c-desc { width:34%; }
    .c-hs { width:6%; }
    .c-unit { width:6%; }
    .c-weight { width:7%; text-align:right; }
    .c-unitval { width:6%; text-align:right; }
    .c-total { width:8%; text-align:right; } */
    .signature-box { height:30px; border:1px solid #000; padding:8px; }
    .label { font-weight:bold; font-size:11px; }
    .muted { color:#333; font-size:10px; }
  </style>
</head>
<body>
  <div class="page">
    <div class="title">COMMERCIAL INVOICE</div>
    <div class="small-note">INTERNATIONAL AIR WAYBILL NO: <b>{{ $waybill_no }}</b></div>

    <!-- top header table -->
    <table style="margin-top:8px;">
      <tr>
        <td style="width:50%;">
          <div class="label">DATE OF EXPORTATION</div>
          <div class="field-block" style="margin-top:4px;">{{ $export_date }}</div>
        </td>
        <td style="width:50%;">
          <div class="label">SHIPPER'S EXPORT REFERENCES</div>
          <div class="field-block" style="margin-top:4px;">{{ $reference_no }}</div>
        </td>
      </tr>

      <tr>
        <td style="width:50%; border:1px solid #000; padding:6px;">
            <div class="label">SHIPPER / EXPORTER</div>
            <div class="muted">(Complete name, address, telephone, etc.)</div>
            <div style="border:1px solid #000; margin-top:6px; padding:4px;">
              {{ $exporter_name }}<br>
              {{ $exporter_address }}<br>
              {{ $exporter_city }}, {{ $exporter_zip }}, {{ $exporter_country }}<br>
              Tel: {{ $exporter_phone }}
            </div>
        </td>
        <td style="width:50%; border:1px solid #000; padding:6px;">
            <div class="label">CONSIGNEE</div>
            <div class="muted">(Complete name, address, telephone, etc.)</div>
            <div style="border:1px solid #000; margin-top:6px; padding:4px;">
              {{ $consignee_name }}<br>
              {{ $consignee_address }}<br>
              {{ $consignee_city }}, {{ $consignee_zip }}, {{ $consignee_country }}<br>
              Tel: {{ $consignee_phone }}
            </div>
        </td>
      </tr>

      <tr>
        <td style="padding:6px;">
          <div class="label">COUNTRY OF EXPORT</div>
          <div class="field-block" style="margin-top:4px;">{{ $origin }}</div>
        </td>
        <td style="padding:6px;" rowspan="3">
          <div class="label">IMPORTER - IF OTHER THAN CONSIGNEE</div>
          <div class="field-block" style="height:100px; margin-top:4px;">
            @if ($has_importer)
                {{ $importer_name }}<br>
                {{ $importer_address }}<br>
                {{ $importer_city }}, {{ $importer_zip }}, {{ $importer_country }}<br>
                Tel: {{ $importer_phone }}
            @else
                N/A
            @endif
          </div>
        </td>
    </tr>
    <tr>
        <td style="padding:6px;">
            <div class="label">REASON FOR EXPORT</div>
            <div class="field-block" style="margin-top:4px;">{{ $reason }}</div>
        </td>
      </tr>
      <tr>
        <td style="padding:6px;">
          <div class="label">COUNTRY OF ULTIMATE DESTINATION</div>
          <div class="field-block" style="margin-top:4px;">{{ $destination }}</div>
        </td>
      </tr>
    </table>

    <!-- Items table -->
    <table style="margin-top:8px;">
      <thead>
        <tr class="thead">
          <th class="c-origin">COUNTRY OF ORIGIN</th>
          <th class="c-marks">MARKS / NO's</th>
          <th class="c-pack">TYPE OF PACKAGING</th>
          <th class="c-pack">QTY PER PKG</th>
          <th class="c-desc">FULL DESCRIPTION OF GOODS</th>
          <th class="c-hs">HS CODE</th>
          <th class="c-weight">UNIT OF MEASUREMENT</th>
          <th class="c-unit">QTY</th>
          <th class="c-weight">WEIGHT</th>
          <th class="c-unitval">UNIT VALUE</th>
          <th class="c-total">TOTAL VALUE</th>
        </tr>
      </thead>
      <tbody>
        @php $total = 0 @endphp
        @for ($i = 0; $i <= $index; $i++)
            @php $total += $amount[$i]*$qty[$i] @endphp
            <tr>
                <td>{{ $origin }}</td>
                <td>{{ $parcel_no[$i] }}</td>
                <td>{{ $type[$i]}}</td>
                <td>{{ $qty_per_package[$i] }}</td>
                <td>{{ $description[$i] }}</td>
                <td>{{ $hs_code[$i] }}</td>
                <td>{{ $parcel_unit[$i] }}</td>
                <td>{{ $qty[$i] }}</td>
                <td>{{ $weight[$i] .' '. $unit }}</td>
                <td>{{ number_format($amount[$i], 2) .' '. $currency }}</td>
                <td>{{ number_format($amount[$i]*$qty[$i], 2) .' '. $currency }}</td>
            </tr>
        @endfor
        <tr>
          <td colspan="7"></td>
          {{-- <td style="font-weight:bold;">3</td>
          <td colspan="3"></td> --}}
          <td colspan="2" style="text-align:center;"><b>{{ array_sum($weight).' '. $unit }}</b></td>
          <td colspan="2" style="text-align:center;"><b>{{ number_format($total, 2) .' '. $currency }}</b></td>
        </tr>
      </tbody>
    </table>

    <p style="margin-top:10px; font-weight:bold;">I DECLARE ALL THE INFORMATION CONTAINED IN THE INVOICE TO BE TRUE AND CORRECT.</p>

    <table style="margin-top:6px; width: 50%;">
      <tr>
        <td style="width:40%; padding:8px;" colspan="2">
          <div class="label">SIGNATURE OF SHIPPER/EXPORTER</div>
          <div class="signature-box" style="margin-top:6px;"></div>
        </td>
      </tr>
      <tr>
        <td style="padding:6px;">
          <div class="label">NAME</div>
          <div class="field-block" style="margin-top:4px;"></div>
        </td>
        <td style="padding:6px;">
          <div class="label">DATE</div>
          <div class="field-block" style="margin-top:4px;"></div>
        </td>
      </tr>
    </table>
  </div>
</body>
</html>

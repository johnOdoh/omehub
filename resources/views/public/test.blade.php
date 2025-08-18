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
    .small-note { font-size:9px; text-align:right; }
    .field-box { border: 1px solid #000; height:18px; display:inline-block; vertical-align:middle; padding:2px 6px; min-width:60px; }
    .field-block { border:1px solid #000; height:22px; display:block; padding:2px 6px; }
    .checkbox { display:inline-block; width:12px; height:12px; border:1px solid #000; vertical-align:middle; margin-right:6px; }
    .thead { background:#f8f8f8; font-weight:bold; text-align:center; }
    .c-origin { width:12%; }
    .c-marks { width:12%; }
    .c-pkgs { width:6%; text-align:center; }
    .c-pack { width:9%; }
    .c-desc { width:34%; }
    .c-hs { width:6%; }
    .c-unit { width:6%; }
    .c-weight { width:7%; text-align:right; }
    .c-unitval { width:6%; text-align:right; }
    .c-total { width:8%; text-align:right; }
    .signature-box { height:110px; border:1px solid #000; padding:8px; }
    .label { font-weight:bold; font-size:11px; }
    .muted { color:#333; font-size:10px; }
  </style>
</head>
<body>
  <div class="page">
    <div class="title">COMMERCIAL INVOICE</div>
    <div class="small-note">(Please complete in English print) &nbsp;&nbsp;&nbsp; NOTE: All shipments must be accompanied by a FedEx International Air Waybill & two duplicate copies of CI.</div>

    <!-- top header table -->
    <table style="margin-top:8px;">
      <tr>
        <td style="width:30%" rowspan="2">
          <div class="label">INTERNATIONAL AIR WAYBILL NO.</div>
          <div class="field-block" style="margin-top:4px;">AWB123456789</div>
        </td>
        <td style="width:20%;" rowspan="2">
          <div class="label">DATE OF EXPORTATION</div>
          <div class="field-block" style="margin-top:4px;">2025-08-09</div>
        </td>
        <td style="width:50%;">
          <div class="label">SHIPPER'S EXPORT REFERENCES</div>
          <div class="field-block" style="margin-top:4px;">INV-2025-001</div>
        </td>
      </tr>
      <tr></tr>

      <tr>
        <td colspan="3" style="padding:0;">
          <table style="width:100%; border-collapse: collapse;">
            <tr>
              <td style="width:50%; border:1px solid #000; padding:6px;">
                <div class="label">SHIPPER / EXPORTER</div>
                <div class="muted">(Complete name, address, telephone, etc.)</div>
                <div style="height:46px; border:1px solid #000; margin-top:6px; padding:4px;">
                  ABC Exporters Ltd.<br>
                  123 Trade Street<br>
                  New York, NY 10001, USA<br>
                  Tel: +1 555 123 4567
                </div>
              </td>
              <td style="width:50%; border:1px solid #000; padding:6px;">
                <div class="label">CONSIGNEE</div>
                <div class="muted">(Complete name, address, telephone, etc.)</div>
                <div style="height:46px; border:1px solid #000; margin-top:6px; padding:4px;">
                  XYZ Imports Co.<br>
                  789 Commerce Road<br>
                  London, UK<br>
                  Tel: +44 20 7946 1234
                </div>
              </td>
            </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td style="padding:6px;">
          <div class="label">COUNTRY OF EXPORT</div>
          <div class="field-block" style="margin-top:4px;">United States</div>
        </td>
        <td style="padding:6px;">
          <div class="label">IMPORTER - IF OTHER THAN CONSIGNEE</div>
          <div class="field-block" style="margin-top:4px;">N/A</div>
        </td>
        <td style="padding:6px;">
          <div class="label">REASON FOR EXPORT</div>
          <div class="field-block" style="margin-top:4px;">Sale of Goods</div>
        </td>
      </tr>
      <tr>
        <td style="padding:6px;">
          <div class="label">COUNTRY OF ULTIMATE DESTINATION</div>
          <div class="field-block" style="margin-top:4px;">United Kingdom</div>
        </td>
        <td style="padding:6px;" colspan="2">
          <div style="float:right;">
            <span class="checkbox" style="background:#000;"></span><span style="font-size:11px;">Documents</span>&nbsp;&nbsp;
            <span class="checkbox"></span><span style="font-size:11px;">Non-documents</span>&nbsp;&nbsp;
            <span class="checkbox"></span><span style="font-size:11px;">Other</span>
          </div>
        </td>
      </tr>
    </table>

    <!-- Items table -->
    <table style="margin-top:8px;">
      <thead>
        <tr class="thead">
          <th class="c-origin">COUNTRY OF ORIGIN</th>
          <th class="c-marks">MARKS / NO's</th>
          <th class="c-pkgs">NO. OF PKGS</th>
          <th class="c-pack">TYPE OF PACKAGING</th>
          <th class="c-desc">FULL DESCRIPTION OF GOODS</th>
          <th class="c-hs">HS CODE</th>
          <th class="c-unit">UNIT OF MEASURE</th>
          <th class="c-weight">UNIT WEIGHT</th>
          <th class="c-unitval">UNIT VALUE</th>
          <th class="c-total">TOTAL VALUE</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>USA</td>
          <td>BOX-001</td>
          <td>2</td>
          <td>Cartons</td>
          <td>Electronic Components</td>
          <td>854239</td>
          <td>PCS</td>
          <td>5 kg</td>
          <td>500</td>
          <td>1000</td>
        </tr>
        <tr>
          <td>USA</td>
          <td>BOX-002</td>
          <td>1</td>
          <td>Crate</td>
          <td>Industrial Tools</td>
          <td>820730</td>
          <td>SET</td>
          <td>12 kg</td>
          <td>750</td>
          <td>750</td>
        </tr>
        <tr>
          <td colspan="2" style="text-align:center; font-weight:bold;">TOTAL PKGS</td>
          <td>3</td>
          <td colspan="3" style="text-align:center; font-weight:bold;">TOTAL WEIGHT</td>
          <td colspan="2">17 kg</td>
          <td colspan="2" style="text-align:center; font-weight:bold;">USD 1,750</td>
        </tr>
      </tbody>
    </table>

    <p style="margin-top:10px; font-weight:bold;">I DECLARE ALL THE INFORMATION CONTAINED IN THE INVOICE TO BE TRUE AND CORRECT.</p>

    <table style="margin-top:6px;">
      <tr>
        <td style="width:75%; padding:8px;">
          <div class="label">SIGNATURE OF SHIPPER/EXPORTER</div>
          <div class="signature-box" style="margin-top:6px;">Signed: John Doe</div>
          <div style="margin-top:8px;">
            NAME (PLEASE PRINT) John Doe<br>
            TITLE (PLEASE PRINT) Export Manager<br>
            DATE 2025-08-09
          </div>
        </td>
        <td style="width:25%; padding:8px;">
          <div style="text-align:center; font-size:10px;">
            Duty rates are available at<br><a href="https://www.fedex.com" style="color:#000;">www.fedex.com</a>
          </div>
        </td>
      </tr>
    </table>
  </div>
</body>
</html>

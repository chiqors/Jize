<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoices Template</title>

    <style>
    .invoice-box {
        max-width: 950px;
        margin: auto;
        padding: 40px;
        border: 1px inset #eee;
        box-shadow: 0 0 20px rgba(0, 0, 0, .20);
        font-size: 18px;
        line-height: 27px;
        font-family: 'Lucida Console', 'Verdana', Verdana, Arial, sans-serif;
        color: #555;
    }

    .invoice-box table {
        width: 100%;
        line-height: number;
        text-align: left;
    }

    .invoice-box table td {
        padding: 7px;
        vertical-align: top;
    }

    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }

    .invoice-box table tr.top table td {
        padding-bottom: 30px;
    }

    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }

    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }

    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }

    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }

    .invoice-box table tr.item.last td {
        border-bottom: none;
    }

    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }

    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }

        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }

    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Lucida Console', 'Verdana', Verdana, Arial, sans-serif;
    }

    .rtl table {
        text-align: right;
    }

    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="4">
                    <table>
                        <tr>

                            <td class="title">
                                <img src="<?php echo site_url('assets/img/logo.png') ?>" style="width: 80px;">
                            </td>

                            <td>
                                Invoice #<?= $invoice->id ?><br>
                                Created: <?= date("M, d Y", strtotime($invoice->order_date)) ?><br>
                                Due: <?= date("M, d Y", strtotime($invoice->order_expire)) ?><br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="4">
                    <table>
                        <tr>
                            <td style="border-bottom:1px solid #f2f2f2;padding-bottom:10px">Status: <?= $invoice->status == "unpaid" || $invoice->status == "verification" ? "Belum Lunas" : "Lunas" ?></td>
                            <td style="border-bottom:1px solid #f2f2f2;padding-bottom:10px">Pembayaran: <?= $invoice->payment_method ?></td>
                        </tr>
                        <tr>
                            <td>
                                Pengirim:<br>
                                Jize<br>
                                Jl. Pegadungan<br>
                                Bandung, Jawa Barat 40132
                            </td>
                            <td>
                                Peneriman:<br>
                                <?= $user->nama ?><br>
                                <?= $user->address ?><br>
                                <?= $user->postal_code ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="heading">
                <td align="center">
                    Barang
                </td>

                <td width="150" align="center">Harga</td>

                <td width="150" align="center">Qty</td>

                <td width="150" align="center">
                    Sub Total
                </td>
            </tr>

            <?php $total = 0; while($row = $invoiceItems->fetch_object()): $total += $row->total_price ?>
            <tr class="details">
                <td align="center"><?= $row->title ?></td>
                <td align="center"><?= rupiah($row->price) ?></td>
                <td align="center"><?= round($row->total_price/$row->price) ?></td>
                <td align="center"><?= rupiah($row->total_price) ?></td>
            </tr>
            <?php endwhile; ?>

            <tr class="heading">
                <td colspan="2" align="center">
                    Jumlah
                </td>

                <td colspan="2">
                    <?= rupiah($total) ?>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>

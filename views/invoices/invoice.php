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
                <td colspan="2">
                    <table>
                        <tr>

                            <td class="title">
                                <img src="<?php echo site_url('assets/img/logo.png') ?>" style="width: 300px; height: 100px;">
                            </td>
                            
                            <td>
                                Invoice<br>
                                Created: October, 22 2018<br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                Jize<br>
                                Jl. Pegadungan<br>
                                Bandung, Jawa Barat 40132
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Barang
                </td>
                
                <td>
                    Harga
                </td>
            </tr>
            
            <tr class="details">
                <td></td>
            </tr>
            
            <tr class="heading">
                <td>
                    Pembayaran
                </td>
                
                <td>
                    Jumlah
                </td>
            </tr>
            <tr class="details">
                <td></td>
            </tr>
            
           <tr class="heading">
               <td>
                   
               </td>
               <td>
                   Kembalian
               </td>
            </tr>
        </table>
    </div>
</body>
</html>
<?php
if($data_result!=""){
        foreach ($data_result->result() as $row){
                $customer_fname=$row->customer_name;
                $customer_lname = $row->customer_lastname;
                $tel = $row->customer_tel;
                $address = $row->customer_address;
        }
        foreach ($data_order->result() as $row){
                $order_id=$row->order_id;
                $order_date = $row->order_date;
        }

}

 ?>
<!doctype html>
<html>
<head>
  <link href="<?php echo base_url();?>style/homepage/styles/layout3.css" rel="stylesheet" type="text/css" media="all">

    <meta charset="utf-8">
    <title>Jadpai Invoice</title>

    <style>
    .invoice-box{
        max-width:800px;
        margin:auto;
        padding:30px;
        border:1px solid #eee;
        box-shadow:0 0 10px rgba(0, 0, 0, .15);
        font-size:16px;
        line-height:24px;
        font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color:#555;
    }

    .invoice-box table{
        width:100%;
        line-height:inherit;
        text-align:left;
    }

    .invoice-box table td{
        padding:5px;
        vertical-align:top;
    }

    .invoice-box table tr td:nth-child(2){
        text-align:right;
    }

    .invoice-box table tr.top table td{
        padding-bottom:20px;
    }

    .invoice-box table tr.top table td.title{
        font-size:45px;
        line-height:45px;
        color:#333;
    }

    .invoice-box table tr.information table td{
        padding-bottom:40px;
    }

    .invoice-box table tr.heading td{
        background:#eee;
        border-bottom:1px solid #ddd;
        font-weight:bold;
    }

    .invoice-box table tr.details td{
        padding-bottom:20px;
    }

    .invoice-box table tr.item td{
        border-bottom:1px solid #eee;
    }

    .invoice-box table tr.item.last td{
        border-bottom:none;
    }

    .invoice-box table tr.total td:nth-child(2){
        border-top:2px solid #eee;
        font-weight:bold;
    }

    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td{
            width:100%;
            display:block;
            text-align:center;
        }

        .invoice-box table tr.information table td{
            width:100%;
            display:block;
            text-align:center;
        }
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="3">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="<?php echo base_url();?>img/invoice/logo.png" style="width:100%; max-width:300px;">
                            </td>
                            <td align="right">
                                Invoice: <?php echo $order_id;?><br>
                                Created: <?php echo $order_date;?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="3">
                    <table>
                        <tr>
                            <td>
                                Jadpaidotcom<br>
                                Walailak University <br> 222 Thaiburi,Thasala District<br>
                                Nakhonsithammarat, 80161
                            </td>
                            <td align="right">
                                <?php echo $customer_fname." ".$customer_lname;?><br>
                                  <?php echo $address ;?><br>
                                <?php echo $tel ;?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="heading">
                <td>
                    Item
                </td>
              <td>
                  Quantity
                </td>
                <td align="right">
                      Price (บาท)
                </td>
            </tr>

        <?php foreach ($this->cart->contents() as $items): ?>
            <tr class="item">
                <td>
                    <?php echo $items['name']?>
                </td>
            <td><?php echo $items['qty'] ?></td>
                <td align="right">
                    <?php echo $items['subtotal']?>
                </td>
            </tr>
<?php endforeach; ?>

            <tr class="total">
                <td></td>
                <td></td>
                <td align="right  ">
                   <?php echo $this->cart->format_number($this->cart->total()); ?>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>

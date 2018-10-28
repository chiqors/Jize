<?php

is_logedin();

$title = "Unggah Bukti Pembayaran";
$id = $_GET['id'];

if($id == "") {
    header("Location: {$fn->site_url('/orders')}");
}

$hscripts ='<link rel="stylesheet" href="'.site_url('/assets/plugins/fancybox/jquery.fancybox.min.css').'">';
$fscripts = '<script src="'.site_url('/assets/plugins/fancybox/jquery.fancybox.min.js').'"></script><script>$(\'[data-fancybox]\').fancybox();</script>';

$order = $mysql->query("SELECT * FROM orders WHERE (id = $id AND user_id = ".$_SESSION['id_user']." AND status = 'unpaid' OR status = 'verification')");

if(mysqli_num_rows($order) < 1) {
    header("Location: ".site_url('orders'));
}

$order = $order->fetch_object();

if(isset($_FILES['payment_proof'])) {
    $path = __DIR__.'/../public/payment_proof';
    $file = $_FILES['payment_proof'];

    if(!getimagesize($file['tmp_name'])) {
        header("location: ".site_url('/orders/payment?id='.$order->id));
    }

    $pathInfo = pathinfo($file['name']);
    $fileName = md5(time().$pathInfo['filename']).'.'.$pathInfo['extension'];

    if(move_uploaded_file($file['tmp_name'], $path.'/'.$fileName)) {
        if(file_exists($path.'/'.$order->payment_proof)) {
            unlink($path.'/'.$order->payment_proof);
        }

        $mysql->query("UPDATE orders SET payment_proof = '$fileName', status = 'verification' WHERE id = $order->id AND user_id = ".$_SESSION['id_user']);

        header("location: ".site_url('/orders/payment?id='.$order->id));
    }
}

?>

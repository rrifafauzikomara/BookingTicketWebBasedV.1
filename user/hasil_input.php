<?php
include "../inc/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="../css1/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css1/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome1/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="shortcut icon"  href="../images/logo.jpg"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    label.custom-checkbox input[type="checkbox"] { 
    opacity:0;
        }
         
        label.custom-checkbox input[type="checkbox"] ~ .helping-el{
            background-color: #FFFFFF;
            border: 2px solid #009688;  
            border-radius: 2px;
            display: inline-block;
            padding: 10px;
            position: relative;
            top: 2px;
        }
         
        label.custom-checkbox input[type="checkbox"]:checked ~ .helping-el{ 
            border: 2px solid #009688;
            background-color: #009688;
        }
         
        label.custom-checkbox input[type="checkbox"]:checked ~ .helping-el:after {
            color: #FFFFFF;
            content: "\2714";
            font-size: 20px;
            font-weight: normal;
            left: 2px;
            position: absolute;
            top: -6px;
            transform: rotate(10deg);
        }
    </style>

    <script language='javascript' >
        var txt=' Selamat Datang di Website Primajasa *****';
        var speed=300;var refresh=null;function move() { document.title=txt;
        txt=txt.substring(1,txt.length)+txt.charAt(0);
        refresh=setTimeout("move()",speed);}move();
    </script>


</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <li>
                     <a class="navbar-brand" href="../index.php">Primajasa </a>
                </li>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="jadwal.php"><i class="fa fa-calendar"></i>Jadwal </a>
                    </li>
                    <li>
                        <a href="bantuan.php"><i class="fa fa-question"></i>Bantuan </a>
                    </li>
                    <li>
                        <a href="carapesan.php"><i class="fa fa-eye"></i>Cara Pesan </a>
                    </li>
                    <li>
                        <a href="cekpesan.php" ><i class="fa fa-table"></i>Cek Pesanan </a>
                    </li>
                    <li>
                        <a href="upload.php" ><i class="fa fa-upload"></i>Upload Pembayaran </a>
                    </li>
                    <li class="active">
                        <a href="booking.php"><i class="fa fa-edit"></i>Booking </a>
                    </li>
                    <li>
                        <a href="../inc/login.php"><i class="fa fa-sign-in"></i>Login </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="col-md-12" align="center">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                    <img class="slide-image" src="../images/1.jpg" alt="">
                    </div>
                    <div class="item">
                    <img class="slide-image" src="../images/2.jpg" alt="">
                    </div>
                    <div class="item">
                    <img class="slide-image" src="../images/3.jpg" alt="">
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header"><center>Selamat Datang di PT Primajasa</center></h2>
            </div>
        </div>

        <!-- /.row -->
                <div class="well">
                <fieldset>
                                    <?php
                        $no_pesan=uniqid();
                    ?>

                                    <form action="" method="post" class="form-horizontal form-label-left" name="form">
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_pesan">No Booking <span class="required"></span>
                                            </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input id="disabledInput" class="form-control col-md-7 col-xs-12" data-validate-length-range="4" data-validate-number="4" name="no_pesan" placeholder="" required="required" type="text" value="<?php echo $no_pesan; ?>" readonly="true">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                        <label for="" class="control-label col-md-3">No KTP </label>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                        <input id="" type="text" name="no_ktp" value="" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12" placeholder="Masukan No KTP">
                                        <input type="hidden" name="id_jadwal" value="<?php echo $_GET['route']; ?>">
                                        <input type="hidden" name="tgl_keb" value="<?php echo $_GET['tgl_keb']; ?>">
                                        <input type="hidden" name="harga" value="<?php echo $_GET['otiket']; ?>">  
                                        <input type="hidden" name="sub" value="<?php echo $_GET['osub']; ?>">
                                        
                                        </div>
                                        </div>
                                        <div class="item form-group">
                                        <label for="" class="control-label col-md-3">Nama Lengkap </label>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                          <input id="" type="text" name="nama" value="" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12" placeholder="Masukan Nama Lengkap">
                                        </div>
                                        </div>
                                        <div class="item form-group">
                                        <label for="" class="control-label col-md-3">Alamat Lengkap </label>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                          <input id="" type="text" name="alamat" value="" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12" placeholder="Masukan Alamat Lengkap">
                                        </div>
                                        </div>
                                        <div class="item form-group">
                                        <label for="" class="control-label col-md-3">Contact </label>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                          <input id="" type="text" name="kontak" value="" data-validate-length-range="5,12" class="optional form-control col-md-7 col-xs-12" placeholder="Masukan No Hp atau Telephone">
                                        </div>
                                        </div>
                                        <div class="item form-group">
                                        <br>
                                       <label for="" class="control-label col-md-3">Tempat Duduk </label>
                                       <br>
                                       <div class="col-md-4 col-sm-4 col-xs-12">
                                         <?php 
                                         $s1q="select * from tb_user where seat='1'";
                                         $t1q=mysqli_query($con, $s1q);
                                         $s1d=mysqli_num_rows($t1q);
                                         $s2q="select * from tb_user where seat='2'";
                                         $t2q=mysqli_query($con, $s2q);
                                         $s2d=mysqli_num_rows($t2q);
                                         $s3q="select * from tb_user where seat='3'";
                                         $t3q=mysqli_query($con, $s3q);
                                         $s3d=mysqli_num_rows($t3q);
                                         $s4q="select * from tb_user where seat='4'";
                                         $t4q=mysqli_query($con, $s4q);
                                         $s4d=mysqli_num_rows($t4q);
                                         $s5q="select * from tb_user where seat='5'";
                                         $t5q=mysqli_query($con, $s5q);
                                         $s5d=mysqli_num_rows($t5q);
                                         $s6q="select * from tb_user where seat='6'";
                                         $t6q=mysqli_query($con, $s6q);
                                         $s6d=mysqli_num_rows($t6q);
                                         $s7q="select * from tb_user where seat='7'";
                                         $t7q=mysqli_query($con, $s7q);
                                         $s7d=mysqli_num_rows($t7q);
                                         $s8q="select * from tb_user where seat='8'";
                                         $t8q=mysqli_query($con, $s8q);
                                         $s8d=mysqli_num_rows($t8q);
                                         $s9q="select * from tb_user where seat='9'";
                                         $t9q=mysqli_query($con, $s9q);
                                         $s9d=mysqli_num_rows($t9q);
                                         $s10q="select * from tb_user where seat='10'";
                                         $t10q=mysqli_query($con, $s10q);
                                         $s10d=mysqli_num_rows($t10q);
                                         $s11q="select * from tb_user where seat='11'";
                                         $t11q=mysqli_query($con, $s11q);
                                         $s11d=mysqli_num_rows($t11q);
                                         $s12q="select * from tb_user where seat='12'";
                                         $t12q=mysqli_query($con, $s12q);
                                         $s12d=mysqli_num_rows($t12q);
                                         $s13q="select * from tb_user where seat='13'";
                                         $t13q=mysqli_query($con, $s13q);
                                         $s13d=mysqli_num_rows($t13q);
                                         $s14q="select * from tb_user where seat='14'";
                                         $t14q=mysqli_query($con, $s14q);
                                         $s14d=mysqli_num_rows($t14q);
                                         $s15q="select * from tb_user where seat='15'";
                                         $t15q=mysqli_query($con, $s15q);
                                         $s15d=mysqli_num_rows($t15q);
                                         $s16q="select * from tb_user where seat='16'";
                                         $t16q=mysqli_query($con, $s16q);
                                         $s16d=mysqli_num_rows($t16q);
                                         $s17q="select * from tb_user where seat='17'";
                                         $t17q=mysqli_query($con, $s17q);
                                         $s17d=mysqli_num_rows($t17q);
                                         $s18q="select * from tb_user where seat='18'";
                                         $t18q=mysqli_query($con, $s18q);
                                         $s18d=mysqli_num_rows($t18q);
                                         $s19q="select * from tb_user where seat='19'";
                                         $t19q=mysqli_query($con, $s19q);
                                         $s19d=mysqli_num_rows($t19q);
                                         $s20q="select * from tb_user where seat='20'";
                                         $t20q=mysqli_query($con, $s20q);
                                         $s20d=mysqli_num_rows($t20q);
                                         $s21q="select * from tb_user where seat='21'";
                                         $t21q=mysqli_query($con, $s21q);
                                         $s21d=mysqli_num_rows($t21q);
                                         $s22q="select * from tb_user where seat='22'";
                                         $t22q=mysqli_query($con, $s22q);
                                         $s22d=mysqli_num_rows($t22q);
                                         $s23q="select * from tb_user where seat='23'";
                                         $t23q=mysqli_query($con, $s23q);
                                         $s23d=mysqli_num_rows($t23q);
                                         $s24q="select * from tb_user where seat='24'";
                                         $t24q=mysqli_query($con, $s24q);
                                         $s24d=mysqli_num_rows($t24q);
                                         $s25q="select * from tb_user where seat='25'";
                                         $t25q=mysqli_query($con, $s25q);
                                         $s25d=mysqli_num_rows($t25q);
                                         $s26q="select * from tb_user where seat='26'";
                                         $t26q=mysqli_query($con, $s26q);
                                         $s26d=mysqli_num_rows($t26q);
                                         $s27q="select * from tb_user where seat='27'";
                                         $t27q=mysqli_query($con, $s27q);
                                         $s27d=mysqli_num_rows($t27q);
                                         $s28q="select * from tb_user where seat='28'";
                                         $t28q=mysqli_query($con, $s28q);
                                         $s28d=mysqli_num_rows($t28q);
                                         $s29q="select * from tb_user where seat='29'";
                                         $t29q=mysqli_query($con, $s29q);
                                         $s29d=mysqli_num_rows($t29q);
                                         $s30q="select * from tb_user where seat='30'";
                                         $t30q=mysqli_query($con, $s30q);
                                         $s30d=mysqli_num_rows($t30q);
                                         $s31q="select * from tb_user where seat='31'";
                                         $t31q=mysqli_query($con, $s31q);
                                         $s31d=mysqli_num_rows($t31q);
                                         $s32q="select * from tb_user where seat='32'";
                                         $t32q=mysqli_query($con, $s32q);
                                         $s32d=mysqli_num_rows($t32q);

                                         if($s1d > 0){
                                            $s1="disabled";
                                            $s1c="checked";
                                         }
                                         else {
                                            $s1="";
                                            $s1c="";
                                         }
                                         if($s2d > 0){
                                            $s2="disabled";
                                             $s2c="checked";
                                         }
                                         else {
                                            $s2="";
                                            $s2c="";
                                         }
                                         if($s3d > 0){
                                            $s3="disabled";
                                            $s3c="checked";
                                         }
                                         else {
                                            $s3="";
                                            $s3c="";
                                         }
                                         if($s4d > 0){
                                            $s4="disabled";
                                            $s4c="checked";
                                         }
                                         else {
                                            $s4="";
                                            $s4c="";
                                         }
                                         if($s5d > 0){
                                            $s5="disabled";
                                            $s5c="checked";
                                         }
                                         else {
                                            $s5="";
                                            $s5c="";
                                         }
                                         if($s6d > 0){
                                            $s6="disabled";
                                            $s6c="checked";
                                         }
                                         else {
                                            $s6="";
                                            $s6c="";
                                         }
                                         if($s7d > 0){
                                            $s7="disabled";
                                            $s7c="checked";
                                         }
                                         else {
                                            $s7="";
                                            $s7c="";
                                         }
                                         if($s8d > 0){
                                            $s8="disabled";
                                            $s8c="checked";
                                         }
                                         else {
                                            $s8="";
                                            $s8c="";
                                         }
                                         if($s9d > 0){
                                            $s9="disabled";
                                            $s9c="checked";
                                         }
                                         else {
                                            $s9="";
                                            $s9c="";
                                         }
                                         if($s10d > 0){
                                            $s10="disabled";
                                            $s10c="checked";
                                         }
                                         else {
                                            $s10="";
                                            $s10c="";
                                         }
                                         if($s11d > 0){
                                            $s11="disabled";
                                            $s11c="checked";
                                         }
                                         else {
                                            $s11="";
                                            $s11c="";
                                         }
                                         if($s12d > 0){
                                            $s12="disabled";
                                            $s12c="checked";
                                         }
                                         else {
                                            $s12="";
                                            $s12c="";
                                         }
                                         if($s13d > 0){
                                            $s13="disabled";
                                            $s13c="checked";
                                         }
                                         else {
                                            $s13="";
                                            $s13c="";
                                         }
                                         if($s14d > 0){
                                            $s14="disabled";
                                            $s14c="checked";
                                         }
                                         else {
                                            $s14="";
                                            $s14c="";
                                         }
                                         if($s15d > 0){
                                            $s15="disabled";
                                            $s15c="checked";
                                         }
                                         else {
                                            $s15="";
                                            $s15c="";
                                         }
                                         if($s16d > 0){
                                            $s16="disabled";
                                            $s16c="checked";
                                         }
                                         else {
                                            $s16="";
                                            $s16c="";
                                         }
                                         if($s17d > 0){
                                            $s17="disabled";
                                            $s17c="checked";
                                         }
                                         else {
                                            $s17="";
                                            $s17c="";
                                         }
                                         if($s18d > 0){
                                            $s18="disabled";
                                            $s18c="checked";
                                         }
                                         else {
                                            $s18="";
                                            $s18c="";
                                         }
                                         if($s19d > 0){
                                            $s19="disabled";
                                            $s19c="checked";
                                         }
                                         else {
                                            $s19="";
                                            $s19c="";
                                         }
                                         if($s20d > 0){
                                            $s20="disabled";
                                            $s20c="checked";
                                         }
                                         else {
                                            $s20="";
                                            $s20c="";
                                         }
                                         if($s21d > 0){
                                            $s21="disabled";
                                            $s21c="checked";
                                         }
                                         else {
                                            $s21="";
                                            $s21c="";
                                         }
                                         if($s22d > 0){
                                            $s22="disabled";
                                            $s22c="checked";
                                         }
                                         else {
                                            $s22="";
                                            $s22c="";
                                         }
                                         if($s23d > 0){
                                            $s23="disabled";
                                            $s23c="checked";
                                         }
                                         else {
                                            $s23="";
                                            $s23c="";
                                         }
                                         if($s24d > 0){
                                            $s24="disabled";
                                            $s24c="checked";
                                         }
                                         else {
                                            $s24="";
                                            $s24c="";
                                         }
                                         if($s25d > 0){
                                            $s25="disabled";
                                            $s25c="checked";
                                         }
                                         else {
                                            $s25="";
                                            $s25c="";
                                         }
                                         if($s26d > 0){
                                            $s26="disabled";
                                            $s26c="checked";
                                         }
                                         else {
                                            $s26="";
                                            $s26c="";
                                         }
                                         if($s27d > 0){
                                            $s27="disabled";
                                            $s27c="checked";
                                         }
                                         else {
                                            $s27="";
                                            $s27c="";
                                         }
                                         if($s28d > 0){
                                            $s28="disabled";
                                            $s28c="checked";
                                         }
                                         else {
                                            $s28="";
                                            $s28c="";
                                         }
                                         if($s29d > 0){
                                            $s29="disabled";
                                            $s29c="checked";
                                         }
                                         else {
                                            $s29="";
                                            $s29c="";
                                         }
                                         if($s30d > 0){
                                            $s30="disabled";
                                            $s30c="checked";
                                         }
                                         else {
                                            $s30="";
                                            $s30c="";
                                         }
                                         if($s31d > 0){
                                            $s31="disabled";
                                            $s31c="checked";
                                         }
                                         else {
                                            $s31="";
                                            $s31c="";
                                         }
                                         if($s32d > 0){
                                            $s32="disabled";
                                            $s32c="checked";
                                         }
                                         else {
                                            $s32="";
                                            $s32c="";
                                         }



                                         ?>
                                         <label class="custom-checkbox">
                                         <input type="checkbox" name="seat[]" value="1" <?php echo $s1; ?> <?php echo $s1c;?>/> 
                                         <span class="helping-el"></span>
                                         <span class="label-text">01</span>
                                        </label>
                                          <label class="custom-checkbox">
                                         <input type="checkbox" name="seat[]" value="2" <?php echo $s2;?> <?php echo $s2c;?>/> 
                                         <span class="helping-el"></span>
                                         <span class="label-text">02</span>
                                        </label>
                                          <label class="custom-checkbox">
                                         <input type="checkbox" name="seat[]" value="3" <?php echo $s3;?> <?php echo $s3c;?>/> 
                                         <span class="helping-el"></span>
                                         <span class="label-text">03</span>
                                        </label>
                                          <label class="custom-checkbox">
                                         <input type="checkbox" name="seat[]" value="4" <?php echo $s4;?> <?php echo $s4c;?>/> 
                                         <span class="helping-el"></span>
                                         <span class="label-text">04</span>

                                        </label>
                                        <br>
                                         <label class="custom-checkbox">
                                         <input type="checkbox" name="seat[]" value="5" <?php echo $s5;?> <?php echo $s5c;?>/> 
                                         <span class="helping-el"></span>
                                         <span class="label-text">05</span>
                                        </label>
                                        <label class="custom-checkbox">
                                         <input type="checkbox" name="seat[]" value="6" <?php echo $s6;?> <?php echo $s6c;?>/> 
                                         <span class="helping-el"></span>
                                         <span class="label-text">06</span>
                                        </label>
                                        <label class="custom-checkbox">
                                         <input type="checkbox" name="seat[]" value="7" <?php echo $s7;?> <?php echo $s7c;?>/> 
                                         <span class="helping-el"></span>
                                         <span class="label-text">07</span>
                                        </label>
                                        <label class="custom-checkbox">
                                         <input type="checkbox" name="seat[]" value="8" <?php echo $s8;?> <?php echo $s8c;?>/> 
                                         <span class="helping-el"></span>
                                         <span class="label-text">08</span>
                                        </label>
                                        <br>
                                        <label class="custom-checkbox">
                                         <input type="checkbox" name="seat[]" value="9" <?php echo $s9;?> <?php echo $s9c;?>/> 
                                         <span class="helping-el"></span>
                                         <span class="label-text">09</span>
                                        </label>
                                        <label class="custom-checkbox">
                                         <input type="checkbox" name="seat[]" value="10" <?php echo $s10;?> <?php echo $s10c;?>/> 
                                         <span class="helping-el"></span>
                                         <span class="label-text">10</span>
                                        </label>
                                        <label class="custom-checkbox">
                                         <input type="checkbox" name="seat[]" value="11" <?php echo $s11;?> <?php echo $s11c;?>/> 
                                         <span class="helping-el"></span>
                                         <span class="label-text">11</span>
                                        </label>
                                        <label class="custom-checkbox">
                                         <input type="checkbox" name="seat[]" value="12" <?php echo $s12;?> <?php echo $s12c;?>/> 
                                         <span class="helping-el"></span>
                                         <span class="label-text">12</span>
                                        </label>
                                        <br>
                                        <label class="custom-checkbox">
                                         <input type="checkbox" name="seat[]" value="13" <?php echo $s13;?> <?php echo $s13c;?>/> 
                                         <span class="helping-el"></span>
                                         <span class="label-text">13</span>
                                        </label>
                                        <label class="custom-checkbox">
                                         <input type="checkbox" name="seat[]" value="14" <?php echo $s14;?> <?php echo $s14c;?>/> 
                                         <span class="helping-el"></span>
                                         <span class="label-text">14</span>
                                        </label>
                                        <label class="custom-checkbox">
                                         <input type="checkbox" name="seat[]" value="15" <?php echo $s15;?> <?php echo $s15c;?>/> 
                                         <span class="helping-el"></span>
                                         <span class="label-text">15</span>
                                        </label>
                                        <label class="custom-checkbox">
                                         <input type="checkbox" name="seat[]" value="16" <?php echo $s16;?> <?php echo $s16c;?>/> 
                                         <span class="helping-el"></span>
                                         <span class="label-text">16</span>
                                        </label>
                                        <br>
                                        <label class="custom-checkbox">
                                         <input type="checkbox" name="seat[]" value="17" <?php echo $s17;?> <?php echo $s17c;?>/> 
                                         <span class="helping-el"></span>
                                         <span class="label-text">17</span>
                                        </label>
                                        <label class="custom-checkbox">
                                         <input type="checkbox" name="seat[]" value="18" <?php echo $s18;?> <?php echo $s18c;?>/> 
                                         <span class="helping-el"></span>
                                         <span class="label-text">18</span>
                                        </label>
                                        <label class="custom-checkbox">
                                         <input type="checkbox" name="seat[]" value="19" <?php echo $s19;?> <?php echo $s19c;?>/> 
                                         <span class="helping-el"></span>
                                         <span class="label-text">19</span>
                                        </label>
                                        <label class="custom-checkbox">
                                         <input type="checkbox" name="seat[]" value="20" <?php echo $s20;?> <?php echo $s20c;?>/> 
                                         <span class="helping-el"></span>
                                         <span class="label-text">20</span>
                                        </label>
                                        <br>
                                        <label class="custom-checkbox">
                                         <input type="checkbox" name="seat[]" value="21" <?php echo $s21;?> <?php echo $s21c;?>/> 
                                         <span class="helping-el"></span>
                                         <span class="label-text">21</span>
                                        </label>
                                        <label class="custom-checkbox">
                                         <input type="checkbox" name="seat[]" value="22" <?php echo $s22;?> <?php echo $s22c;?>/> 
                                         <span class="helping-el"></span>
                                         <span class="label-text">22</span>
                                        </label>
                                        <label class="custom-checkbox">
                                         <input type="checkbox" name="seat[]" value="23" <?php echo $s23;?> <?php echo $s23c;?>/> 
                                         <span class="helping-el"></span>
                                         <span class="label-text">23</span>
                                        </label>

                                        <label class="custom-checkbox">
                                         <input type="checkbox" name="seat[]" value="24" <?php echo $s24;?> <?php echo $s24c;?>/> 
                                         <span class="helping-el"></span>
                                         <span class="label-text">24</span>
                                        </label>
                                        <br>
                                        <label class="custom-checkbox">
                                         <input type="checkbox" name="seat[]" value="25" <?php echo $s25;?> <?php echo $s25c;?>/> 
                                         <span class="helping-el"></span>
                                         <span class="label-text">25</span>
                                        </label>
                                        <label class="custom-checkbox">
                                         <input type="checkbox" name="seat[]" value="26" <?php echo $s26;?> <?php echo $s26c;?>/> 
                                         <span class="helping-el"></span>
                                         <span class="label-text">26</span>
                                        </label>
                                        <label class="custom-checkbox">
                                         <input type="checkbox" name="seat[]" value="27" <?php echo $s27;?> <?php echo $s27c;?>/> 
                                         <span class="helping-el"></span>
                                         <span class="label-text">27</span>
                                        </label>
                                        <label class="custom-checkbox">
                                         <input type="checkbox" name="seat[]" value="28" <?php echo $s28;?> <?php echo $s28c;?>/> 
                                         <span class="helping-el"></span>
                                         <span class="label-text">28</span>
                                        </label>
                                        <br>
                                        <label class="custom-checkbox">
                                         <input type="checkbox" name="seat[]" value="29" <?php echo $s29;?> <?php echo $s29c;?>/> 
                                         <span class="helping-el"></span>
                                         <span class="label-text">29</span>
                                        </label>
                                        <label class="custom-checkbox">
                                         <input type="checkbox" name="seat[]" value="30" <?php echo $s30;?> <?php echo $s30c;?>/> 
                                         <span class="helping-el"></span>
                                         <span class="label-text">30</span>
                                        </label>
                                        <label class="custom-checkbox">
                                         <input type="checkbox" name="seat[]" value="31" <?php echo $s31;?> <?php echo $s31c;?>/> 
                                         <span class="helping-el"></span>
                                         <span class="label-text">31</span>
                                        </label>
                                        <label class="custom-checkbox">
                                         <input type="checkbox" name="seat[]" value="32" <?php echo $s32;?> <?php echo $s32c;?>/> 
                                         <span class="helping-el"></span>
                                         <span class="label-text">32</span>
                                        </label>
                                            </div>
                                            </div>

                                        <h5> "Note : Untuk Tempat Duduk Yang Bergambar Warna Hijau Tandanya Kursi Sudah Di Isi."</h5>
                                        <br>

                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-3">
                                                <input id="submit" type="submit" name="pesan" value="Pesan" class="btn btn-primary">
                                                <input type="reset" value="Reset" class="btn btn-primary">
                                            </div>
                                        </div>
                                    </form>
                                </div>

    <?php
    if (@$_POST['pesan']) {

        $no_pesan = $_POST['no_pesan'];
        $no_ktp = $_POST['no_ktp'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $kontak = $_POST['kontak'];
        $id_jadwal = $_POST['id_jadwal'];
       
        
            if ($no_pesan == '' || $no_ktp == '' || $nama == '' || $alamat == '' || $kontak == '') {
                    ?> <script type="text/javascript">alert("Inputan tidak boleh kosong !!");</script> <?php
                } else {
                     foreach($_POST['seat'] as $checkboxes) {
                 $seat=$checkboxes;
              $sql_insert = "insert into tb_user(no_pesan,no_ktp,nama,alamat,kontak,seat,id_jadwal,tgl_keb,jml_tiket,harga,sub) values ('$no_pesan','$no_ktp','$nama','$alamat','$kontak','$seat', '$_POST[id_jadwal]','$_POST[tgl_keb]','$_GET[qty]','$_POST[harga]','$_POST[sub]')" or die (mysqli_error());
              $pesan = mysqli_query($con, $sql_insert);
               }
             
                if ($pesan) {
                    ?> <script type="text/javascript">alert("Pemesanan Berhasil");</script> <?php

                    echo "<script type=text/javascript>
                                window.location.href='http://localhost/primajasa/user/print.php?id=$no_pesan';
                                </script>" ;

                    }
                }

            }
    ?>

    <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <ol class="breadcrumb">
                            <p><font face="Time New Roman" color="#000000"><center>Copyright ©2016 Primajasa All Rights Reserved </center></font></p>
                    </ol>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../js1/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js1/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>

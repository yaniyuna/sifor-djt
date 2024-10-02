<?php
$con -> auth();
$conn=$con->koneksi();
switch (@$_GET['page']){
    case 'add':
        $content= "views/driver/tambah.php";
        include_once 'views/template.php';
        break;
    case 'save':
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $sql= "INSERT INTO driver (nama_driver, id_driver, nik, alamat_driver, notelp_driver)
            VALUES ('$_POST[nama_driver]', '$_POST[id_driver]', '$_POST[nik]', '$_POST[alamat_driver]', '$_POST[notelp_driver]')";
            if($conn->query($sql) === true){
                header('Location: '.$con->site_url().'/admin/index.php?mod=driver');
            }
            else{
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            if(isset($err)){
                $content= "views/driver/tambah.php";
                include_once 'views/template.php';
            }
        }
        else{
            $err['msg']= "Tidak Diijinkan";
        }
        break;
    case 'edit':
        $driver="select * from driver where md5(id_driver)='$_GET[id]'";
        $driver=$conn->query($driver);
        $_POST=$driver->fetch_assoc();
        //$_POST['nomor']=$_POST['nomor_minuman'];
        $_POST['id_driver']=md5($_POST['id_driver']);
        //var_dump
        $content="views/driver/tambah.php";
        include_once 'views/template.php';
        break;
    case 'delete':
        $driver= "delete from driver where md5(id_driver)='$_GET[id]'";
        $driver=$conn->query($driver);
        header('location: ' . $con->site_url() . '/admin/index.php?mod=driver');
        break;
    default:
        $sql = "Select * from driver";
        $driver=$conn->query($sql);
        $conn->close();
        $content= "views/driver/tampil.php";
        include_once 'views/template.php';
}
?>
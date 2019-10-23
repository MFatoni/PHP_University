<?php
class Controller{
    public function login(){
        session_start();
        $con = mysqli_connect("localhost","root","","gunadarma");
        if (mysqli_connect_errno()){
            echo "Koneksi database gagal : " . mysqli_connect_error();
        }else {
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            if(empty($email) or empty($password)){
                echo "<script>alert('Mohon Periksa Kembali Data Masukan');history.go(-1);</script>";
            }else{
                $query = mysqli_query($con,"select*from role where email = '$email' and password = '$password'");
                if(mysqli_num_rows($query) > 0){
                    $role = mysqli_fetch_array($query);
                    $_SESSION['id'] = $role['id'];
                    $_SESSION['role'] = $role['role'];
                    header("location:../public/admin/");
                }else{
                    echo "<script>alert('Mohon Periksa Kembali Data Masukan');history.go(-1);</script>";
                }
            }
        }
    }
    public function register(){
        $con = mysqli_connect("localhost","root","","gunadarma");
        if (mysqli_connect_errno()){
            echo "Koneksi database gagal : " . mysqli_connect_error();
        } else {
            $name = $_POST['name'];
            $gender = $_POST['gender'];
            $nohp= $_POST['nohp'];
            $email=$_POST['email'];
            $password = $_POST['password'];
            if(empty($name) or empty($gender) or empty($nohp) or empty($email) or empty($password)){
                echo "<script>alert('Gagal di tambahkan! Mohon Periksa Kembali Data Masukan');history.go(-1);</script>";}
            else{
                $pass = md5($_POST['password']);
                $ins = mysqli_query($con,"insert into role values ('','$name','$gender','$nohp','$email','$pass','user')");
                echo "<script>alert('Berhasil');window.location='../public/login.html';</script>";}
        }
    }
    public function logout(){
        session_start();
        unset($_SESSION['id']);
        header("location:../index.php");
    }
}
$user= new Controller;
if(isset($_POST['status'])){
    if ($_POST['status']=='login'){
        $user->login();}
    else if ($_POST['status']=='regist'){
        $user->register();}
    else{
        $user->index();}
} 
elseif(isset($_GET['status'])) {
    $user->logout();}
else {
    echo 'Forbidden Access';}
?>


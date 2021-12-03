<?php 
	session_start();
	// if (isset($_SESSION["login"])) {
	// 	header("Location:perpustakaan/home.html");
	// 	exit;
	// }

	include 'conn.php';	

	if(isset($_POST['login'])){
        $email = $mysqli->real_escape_string($_POST['Username']);
        $password = $mysqli->real_escape_string($_POST['Password']);
        
        //cek user login 
        $cek_login = $mysqli->query("select count(*) as num_rows,password,id,nama_user,username from user where username='$email'");
        $ktm_login = $cek_login->num_rows;
        $data_login = $cek_login->fetch_assoc();
        $time = time(); 
        $check = isset($_POST['setcookie'])?$_POST['setcookie']:'';
    
        if($ktm_login>=1){
            //login email tersedia
            //verify password 
            if(password_verify($password,$data_login['password'])){
                //silakan buat session dan redirect disini
                // session_start();
                $_SESSION['idlogin']=$data_login['id'];
                $_SESSION['status']='online';
                $_SESSION['user']=$data_login['nama_user'];
                $_SESSION['username']=$data_login['username'];

                if($check) {        
                    setcookie("cookielogin[user]",$email , $time + 3600);        
                    setcookie("cookielogin[pass]", $password, $time + 3600);    
                }
    
                //redircet 
                header("location:home.php");
            }else{
                // echo "<script>

                // alert('Username / Password Salah!');

                // </script>
                // ";

                header("location:login.php?pesan=gagal");
                $error = true;

            }
        }else{
            header("location:login.php?pesan=gagal");
            $error = true;
        }

        $error = true;
        
        $mysqli->close();
    }
    else{
        header("location:login.php?pesan=gagal");
    }

?>
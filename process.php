<?php
    include "conn.php";
    session_start();

    if(isset($_POST['reg_button'])){


        $name = $_POST['nm'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $pn = $_POST['pn'];

        $insertusers = mysqli_query($conn, "INSERT INTO agreda
        VALUES('0','$name','$email','$pass','$pn')");
      
if($insertusers==true){
            ?>
            <script>
                alert("Your Registration was Successful!");
                window.location.href="index.php";
                </script>
            <?php

        }else{
            ?>
            <script>
                alert("Error Registration\nTry Again!");
                window.location.h<?php
    include "conn.php";
    session_start();

    if(isset($_POST['reg_button'])){

        $name=$_POST['nm'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $pn=$_POST['pn'];


        $insertusers=mysqli_query($conn, "INSERT INTO agreda
        VALUES('0','$name','$email','$pass','$pn')");

        if($insertusers==true){
            ?>
            <script>
                alert("Your registration was successful!");
                window.location.href="index.php";
            </script>
            <?php


        }else{
            ?>
            <script>
                alert( "Error registration!\n Try again!");
                window.location.href="reg.php";
            </script>
            <?php

        }


    }

    if(isset($_POST['login'])){
        
        $email=$_POST['login_email'];
        
        $pass=$_POST['login_pass'];

        
        $check=mysqli_query($conn, "SELECT * FROM agreda WHERE email='$email' AND password='$pass'");

        $num=mysqli_num_rows($check);


        if($num >=1){

            $_SESSION['email']=$email;
            ?>

            <script>
                alert("Account Accepted! Welcome Users!");
                window.location.href="userhome.php";
            </script>
            <?php

        }else{
            ?>
            <script>
                alert("Email or Password not Found!");
                window.location.href="index.php";
            </script>
            <?php



        }

    
    }



?>ref="reg.php";
                </script>
            <?php
        }
    }

    if(isset($_POST['login'])){
        $email=$_POST['login_email'];

        $pass=$_POST['login_pass'];

        $check=mysqli_query($conn, "SELECT * FROM agreda
        WHERE email='$email' AND password='$pass'");

        $num=mysqli_num_rows($check);

       if($num >=1 ){

            $_SESSION['email']=$email;
            ?>
            <script>
                alert("Account Accepted! Welcome Users!");
                window.location.href="userhome.php";
                </script>
            <?php

       }else{
            ?>
            <script>
                alert("Email or Password not Found!");
                window.location.href="index.php";
                </script>
            <?php
       }

    }

          //this program is for update user/account
            if (isset($_POST ['update_account'])){
            
            $id=$_GET['id'];

              $upname=$_POST['up_name'];
              $upemail=$_POST['up_email'];
              $uppass=$_POST['up_pass'];
              $uppn=$_POST['up_pn'];

       $updateaccount=mysqli_query($conn,"UPDATE agreda SET name='$upname',
       email='$upemail',password='$uppass',phone_number='$uppn'
        WHERE id='$id'");




           if($updateaccount==true){

             ?>
            <script>
                  alert("Data was changed!");
                  windows.location.href="userhome.php";

            </script>
            <?php

        
           }else{

                     ?>
            <script>
                  alert("Data not changed!");
                  windows.location.href="update.php";

            </script>
            <?php

}


}


?>
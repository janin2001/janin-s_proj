<?php
    include "conn.php";
    session_start();

    $e=$_SESSION["email"];

    $getName=mysqli_query($conn, "SELECT * FROM agreda WHERE email='$e'");
    while($row=mysqli_fetch_object($getName)){

        $id = $row -> id;
        $name = $row -> name;
        $email = $row -> email;
        $pass = $row -> password;
        $pn = $row -> phone_number;
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X_UA_Compatible" content="IE-edge">
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <title><?php echo $Name;?></title>
        <style>
     body{
        background-image: url('img/kkk.jpg')  ;
        background-size: auto;
        background-size: cover;

    }
        .nav {
        overflow: hidden;
 
    }
    
     .nav a{
        display: inline-block;
        float: center;
        font-color: black;
        font-size: 24px;
        font-weight: 100px;
        margin-right: 25px;
        margin-top: 0%;
        margin-left: 7rem;
        padding-top: 0px;
        text-decoration: none;
        font-weight: bold;
        background-color:yellow;
        padding: 3px;
        border-radius: 3px;
     }
    
    
    .nav a:hover {
       color: black;
    }
    .janin{
        border: 5px solid whitesmoke;
         border-radius: 10%;
        padding: 5px;
        padding-bottom: 10px;
        text-align: center;
        opacity: .8;
        border-radius: 20px;
        width: 20%;
        height: 40%;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        position: absolute;
    }
    .janin h1{
        color: white;
        background-color: brown;
        font-weight: bold;
        border-radius: 10%;
       
        padding: 5px;
    
    }
    .janin label{
        font-size: 20px;
        color: maroon;
        font-weight: bold;
        float: left;
        margin-left: 3rem;
    }
    .janin input{
        font-size: 20px;
        color: black;
        float: left;
        margin-left: 4rem;
    }
    .sub{
        margin-left: 4rem;
        margin-top: 7rem;
        
    }
    

            
        </style>
    </head>
    <body>
        <div class="nav">
            <a href = "userhome.php"> HOME </a>
            <a href = "gallery.php"> GALLERY </a>
            <a href = "project.php">GROUP PROJECT </a>
            <a href = "post.php"> CREATE POST </a>
            <a href = "update.php"> UPDATE PROFILE </a>
            <a href = "index.php"> LOGOUT </a>
        </div>

    <div class="janin">
        <h1>UPDATE PROFILE</h1>

        <form action="process.php?id=<?php echo $id;?>" method="POST">

        <label> Name </label> </br>
            <input type="text" name="up_name" value="<?php echo $name;?>" required> </p>

            <label> Email </label> </br>
            <input type="email" name="up_email" value="<?php echo $email;?>" required> </p>

            <label> Password </label> </br>
            <input type="password" Name="up_pass" value="<?php echo $pass;?>" required> </p>

            <label> Phone Number </label> </br>
            <input type="text" Name="up_pn" value="<?php echo $pn;?>" required> </p>

            <div class = "sub">
            <input type="submit" value="UPDATE" Name="update_account">
            </div>
        
        
        </form>
    </div>

</body>
</html>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<style>

{
    padding: 0;
    margin: 0;
    font-family: sans-serif;
}

body{
    background: url('img/g.jpg')no-repeat;
    background-size: cover;
}

.login-form{
    padding: 100px;
    background-color: transparent;
    opacity: 0.8;
    border: 5px solid black;
    border-radius: 80px;
    border-color: whitesmoke;
    box-shadow: 5px required;
    width: 30%;
    top: 50%;
    left: 50%;
    transform:translate(-50%,-50%);
    position: absolute;
    color: black;
}

.login-form h1{
    font-size: 40px;
    text-align: center;
    text-transform: uppercase;
    margin: 40px 0;
}

.login-form label{
    font-size: 30px;
    margin: 15px 0;
}

.login-form input{
    font-size: 16px;
    width: 95%;
    padding: 15px 10px;
    border: 0;
    outline: none;
    border-radius: 5px;
}

.login-form button{
    font-size: 18px;
    font-weight: bold;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    margin: 20px 0;
    width: 40%;
    border-radius: 5px;
    border: 0;
    padding: 15px 10px;
    margin-left: 11rem;
    font-stretch: ;
}

</style>
<body>
<div class="login-form">
    <h1> Welcome to My Login Page! </h1>

    <form action = "process.php" method ="POST">

    <label>Email</label></br>
    <input type ="email" name="login_email" required placeholder ="Enter Email Here!...">
    </br></br>

    <label>Password</label></br>
    <input type = "password" name="login_pass" required placeholder="Enter Password Here!...">
    </br></br>

    <input type="submit" name="login" value="LOGIN">
   
    <button type=""><a href="reg.php"> Click Here to Register! </p></button>
    
</div>
</form>

</body>
</html>

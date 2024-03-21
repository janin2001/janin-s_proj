<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
    <style>

        body{
            background-image: url("img/as.jpg");
            background-size: cover;
        }
        .nav{

            border: 5px solid whitesmoke;
            border-radius: 8%;
            text-align: center;
            font-style:normal;
            color: lightgray;
            background-color: gray;
            opacity: .7;
            width: 40%;
            margin-top: 11rem;
            margin-left:38rem;
            width: 30%;

        }
        .nav h1{
            font-size: 20px;
            font-style:calc();
            text-align: center;
            font-weight: bolder;
            color:lightgray;
            
    

        }
        .nav label{
            font-size: 30px;
            margin: 2rem;
            font-weight: bold;
            
        }
        .nav input{
            font-size:30px;
            margin-left: 2rem;
            margin-bottom: 1.5rem;
            text-align:center;
            color: chocolate;
            border-radius: 10%;
            border-color: whitesmoke;

        }

    </style>

    </body>
    <div class="nav">
        <h1>Registration Form</h1>

        <form action = "process.php" method = "POST">

            <label>Name: </label> </br>
            <input type = "text" name ="nm" required></p>

            <label>Email: </label> </br>
            <input type = "email" name ="email" required></p>

            <label>Password: </label> </br>
            <input type = "password" name ="pass" required></p>

            <label>Phone Number: </label> </br>
            <input type = "text" name ="pn" required></p>

            <input type ="submit" name = "reg_button" value = "Register">


    
</body>
</html>


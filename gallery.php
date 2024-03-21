<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Gallery</title>
</head>
<body>
    <div class="header">
        <p><center><b> PEPPA PIG </b></center></p>
    </div>

<center>
    <div class="row">

    
       
        <div class="col1">
            <img src="img/1.jpg" width="100%" >
            <button><i class= style="font-size:20px;color:red"></i> <span></span></i></button>
        </div>

           
        <div class="col2">
            <img src="img/2.jpg" width="100%">
            <button><i class= style="font-size:20px;color:red"></i> <span> </span></i></button>
            
            </div>
           

        <div class="col1">
            <img src="img/3.jpg" width="100%">
            <button><i class= style="font-size:20px;color:red"></i> <span></span></i></button>
        </div>
           
            
        
        <div class="col2">
            <img src="img/4.jpg" width="100%">
            <button><i class= style="font-size:20px;color:red"></i> <span></span></i></button>
        </div>
            
        
        <div class="col1">
            <img src="img/5.jpg" width="100%">
            <button><i class= style="font-size:20px;color:red"></i> <span></span></i></button>
        </div>
        
    

        <div class="col2">
            <img src="img/6.jpg" width="100%">
            <button><i class= style="font-size:20px;color:red"></i> <span></span></i></button>
        </div>
           
       
        <div class="col1">
            <img src="img/7.jpg" width="100%">
            <button><i class= style="font-size:20px;color:red"></i> <span></span></i></button>
        </div>
          
            

        <div class="col2">
            <img src="img/8.jpg" width="100%">
            <button><i class= style="font-size:20px;color:red"></i> <span></span></i></button>
        </div>
            
        <div class="col1">
            <img src="img/9.jpg" width="100%">
            <button><i class= style="font-size:20px;color:red"></i> <span></span></i></button>
        </div>
            
            
        <div class="col2">
            <img src="img/0.jpg" width="100%">
            <button><i class= style="font-size:20px;color:red"></i> <span></span></i></button>
        </div>
             

    <div class="button">
        <a href="userhome.php"><button class="button">BACK</button></a>
    </div>
</center>  
</body>
<style>
    body{
        background: url('img/zz.png') no-repeat;
        background-size: cover;
        margin-top: -1rem;
    }
    .header{
        font-size: 50px;
        color: pink;
        font-style: normal;
        font-stretch: semi-expanded;
    }

    .row{
            padding: 30px;
            margin-left: 3rem;
        }
    .col1{
            width: 18%;
            height: 80%;
            padding: 10px 10px 10px 10px;
            border: 2px solid black;
            background-color: coral;
            box-shadow: 10px 10px 5px gray;
            float: left;
            border-radius: 3px;
            margin-top: 0;
    }
    .col1 span{
        font-size: 15px;

    }
    .col1:hover{
            transform: rotate(0deg);

    }
    .col1 button{
        font-size: 10px;
        color: black;
        font-family: impact;
    }
    .col2{
            width: 18%;
            height: 80%;
            padding: 10px 10px 10px 10px;
            border: 2px solid black;
            background-color: whitesmoke;
            box-shadow: 10px 10px 5px gray;
            float: left;
            border-radius: 3px;
            margin-top: 0;
    }
    .col2 span{
        font-size: 15px;

     }
    .col2:hover{
            transform: rotate(0deg);
    }
    .col2 button{
        font-size: 10px;
        color: black;
        font-family: impact;
    }

    .button{
        background-color: #af4c4c;
        color: white;
        text-align: center;
        display: inline-block;
        font-size: 16px;
        margin: 4px 3px;
        border-radius: 12px;
    }
    .button:hover{
        color: red;
    }
</style>
</html>
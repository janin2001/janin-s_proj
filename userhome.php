<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name;?></title>
</head>
<style>
    body{
        background: url('img/m.jpg') no-repeat;
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
        margin-left: 5.5rem;
        padding-top: 0px;
        text-decoration: none;
        font-weight: bold;
        background-color: yellow;
        padding: 3px;
        border-radius: 3px;
     }
    
    
    .nav a:hover {
       color: blue;
    }
    </style>


<body>

    <div class="nav">

    <a href = "userhome.php"> HOME </a>
    <a href = "gallery.php"> GALLERY </a>
    <a href = "project.php"> GROUP PROJECT </a>
    <a href = "post.php"> CREATE POST </a>
    <a href = "update.php"> UPDATE PROFILE </a>
    <a href = "index.php"> LOGOUT </a>

    </div>




    
</body>
</html>
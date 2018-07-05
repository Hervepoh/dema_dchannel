<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SignUp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css" media="all" title="le style de base">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body{
            margin: 0px;
            padding: 0px;
            background: url('backsign.jpg');
            background-size: cover;
            background-position: center;
            font-family: sans-serif;
            height: 500px;
        }
        .loginbox{
            width:450px;
            height:430px;
            background: #000;
            color: #fff;
            margin: 120px auto;  
            border-radius:8px;
            box-shadow: 0px 0px 8px #5E4485;
        }
        .avatar{
            height:150px;
            width:150px;
            border-radius: 50%;
            position: relative;
            top: -75px;
            right: -150px ;
        }
        .loginbox h1{
            text-align: center; 
            margin: -80px 0px 0px 0px;
            font-size: 35px;
        }
        [for="username"]{
            margin-top:10px;
        }
        .loginbox label{
            font-weight: bold;
            font-size:15px;
            color: rgba(255, 255, 255, 0.6);

        }
        .loginbox .formstyle{
            width: 400px;
            height: 250px;
            margin: 10px auto;
            text-align: center;
        }
        .loginbox .formstyle input{
            width: 290px;
            margin: 9px auto;
            opacity: 0.8;
        }
        .loginbox .formstyle a{
            font-size: 10px;
            opacity: 0.6;
            color: #5E4485;
        }
        .loginbox .formstyle button{
            margin-top: 5px;
            border-radius: 20px;
        }
        
    </style>
</head>
<body>
    <div class="loginbox">
        <img src="img/avatar/AvatarsThumb.png" alt="avatar" class="avatar" >
        <h1>Welcome</h1>
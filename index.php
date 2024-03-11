<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ACTIVITY 5</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto';
            background: linear-gradient(rgba(0, 0, 0, 1.0),rgba(0, 0, 0, 0.0)), url(img/homebg.jpg);
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .logo{
            position: absolute;
            top: 25px;
            left: 5px;
            box-sizing: border-box;
            background-size: cover;
            height: 130px;
            width: 130px;
            display: flex;
            padding-left: 4%;
        }  
        

        .logo1{
            width: 200px;
            cursor: pointer;
        } 


        h1{
            font-size: 100px;
            font-weight: bold;
            text-align: center;
            color: white;
        }

        h2{
        	color: white;
        }

        .btn {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 50px;
        }
        .button1 {
            border: 5em;
            cursor: pointer;
            outline: none;
            font-size: 23px;
            -webkit-transform: translate(0);
            transform: translate(0);
            background-image: linear-gradient(45deg, #4568dc, #b06ab3);
            padding: 0.7em 2em;
            border-radius: 65px;
            box-shadow: 1px 1px 10px rgba(255, 255, 255, 0.438);
            -webkit-transition: box-shadow 0.25s;
            transition: box-shadow 0.25s;
            color: white;
            text-decoration: none;

        }

        .button1 .text {
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-image: linear-gradient(45deg, #4568dc, #b06ab3);
        }

        .button1:after {
            content: "";
            border-radius: 18px;
            position: absolute;
            margin: 4px;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            z-index: -1;
            background: #0e0e10;
        }

        .button1:hover {
            background-image: linear-gradient(-45deg, #4568dc, #b06ab3);
            box-shadow: 0 12px 24px rgba(128, 128, 128, 0.1);
        }

        .button1:hover .text {
            background-image: linear-gradient(-45deg, #4568dc, #b06ab3);
        }

  
        
    </style>
</head>
<body>
	<div class="logo">
        <img src="img/logo.png" class="logo1">
        
    </div>

    <h1>Audio Alchemy</h1>
    <h2>- Select -</h2>

    <div class="btn">
        <a class="button1" href="song1.php">TAHANAN</a>         
        <a class="button1" href="song2.php">YELLOW</a>
        <a class="button1" href="song3.php">GITARA</a>  
        <a class="button1" href="song4.php">BINHI</a>   
        <a class="button1" href="song5.php">YOU'LL BE SAFE HERE</a>  
        <a class="button1" href="song6.php">ALWAYS</a>  
        <a class="button1" href="song7.php">PAGSAMO</a> 
    </div>
</body>
</html>

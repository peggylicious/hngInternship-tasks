<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            margin: 0px;
        }

        header {
            background-color: #E0E0E0;
            margin-top: 0px;
            width: 100%;
            height: 95px;
        }

        h1 {
            Font-Family: Sedan SC;
            Font-Style: Regular;
            Font-Size: 72px;
            Line-Height: 100px;
            text-align: Center;  
            margin-top: 100px;  
        }

        p {
            Font-Family: Digital;
            Font-Style: Regular;
            Font-Size: 48px;
            Line-Height: 62px;
            text-align: Center;
        }
    </style>
</head>
<body>
    <header></header>
    <h1>WELCOME GUEST</h1>
    <p>
        <?php
            echo date("h:i:sa");
        ?>
    </p>
    
</body>
</html>
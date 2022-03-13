<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{margin:0;padding:0;font-family:sans-serif;}
        .container{height:500px;width:400px;border:1px solid black;position:absolute;
            left: 50%;
            top: 50%;
    transform: translate(-50%,-50%);}
    .signup,.stext{text-align:center;}
    .signup{font-size:30px;}
    .stext{font-size:14px;margin:10px 0;}
    #stext{font-size:12px;}
    </style>
</head>
<body>
    <div class="container" id="num_1" >
        <div class="head">
            <div class="signup">Sign Up</div>
            <div class="stext" id="stext">Don't have an account? <span><a href="index.php">signin</a></span></div>
        </div>
        <div class="scon">
<form action="signup.php" method="post">
<div class="incon">
                <input type="text" name="username" id="username" placeholder="Username">
            </div>
            <div class="incon">
                <input type="email" name="email" id="email" placeholder="Email">
            </div>
            <div class="incon">
                <input type="password" name="password" id="password" placeholder="password">
            </div>
            <div class="incon">
                <input type="text" name="secret" id="secret" placeholder="secret">
            </div>
            <div class="sbtn">
                <input type="submit" value="submit">
            </div>
            </form>
            <div class="stext">by clicking the sign-up button, you are creating an account, and you agree to the Terms of Use</div>

        </div>

    </div>
</body>
</html>
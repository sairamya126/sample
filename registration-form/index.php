<html>
    <head>
        <title>form</title>
        <link rel="stylesheet" type="text/css" href="mystyle.css">
        <style>
            .div {
            align-self: center;
            width: 50%;
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            }
            input[type=password]{
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            }
        </style>
    </head>
    <body>
        <div class="div">
            <form method="POST" action="login.php">
                <h1><u><center>LOGIN</center></u></h1>
                <label for="uname">UserName</label><br/>
                <input type="text" id="uname" name="username" placeholder="Enter your user name..." required/><br/>
                <label for="pass">Password</label><br/>
                <input type="password" id="pass" name="password" placeholder="Enter your password..." required/><br/>
                <h5>Not a user? click <a href="registration.html">here</a> to register </h5>
            </form>
        </div>
    </body>
</html>
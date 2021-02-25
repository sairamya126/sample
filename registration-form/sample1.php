<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
    <div>
        <form method="POST" action="registration.php">
            <h1><u><center>REGISTRATION FORM</center></u></h1>
            <label for="fname">First Name</label><br/>
            <input type="text" id="fname" name="firstname" placeholder="Enter your first name..." required/><br/>
            <label for="lname">Last Name</label><br/>
            <input type="text" id="lname" name="lastname" placeholder="Enter your last name..." required/><br/>
            <label for="uname">UserName</label><br/>
            <input type="text" id="uname" name="username" required/><br/>
            <label for="pwd">Password</label><br/>
            <input type="password" id="pwd" name="pass" required/><br/>
            <label for="mail">E-Mail</label><br/>
            <input type="email" id="mail" name="email" required/><br/>
            <label for="date">Date Of Birth</label><br/>
            <input type="date" id="date" name="dob"/><br/>
            <label for="gender">Gender:</label><br/>
            <input type="radio" id="male" name="gender">
            <label for="male">Male</label> <br/>
            <input type="radio" id="female" name="gender">
            <label for="female">Female</label> <br/>
            <input type="submit" value="submit" onclick="myfunction()" /><br/>
            <h5>already a user? click <a href="index.html">here</a>to sign in </h5>
        </form>
    </div>
    <script>
        function myfunction()
        {
            alert("submitted successfully...")
        }
    </script>
</body>
</html>
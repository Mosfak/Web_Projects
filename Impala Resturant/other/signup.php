<html>
<head>
    <link href="../css/login.css" type="text/css" rel="stylesheet" />
</head>

<body>
<div class="fix header">
    <div class="fix logo" onclick="document.location.href='../index.php'"><h1><span style="color:yellow;font-size:50;text-decoration:;">Im<span style="color:blue;">pala</span></span><br>Restaurant</h1></div>
    <div class="fix menu">
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="">About Us</a></li>
            <li><a href="">Menu</a></li>
            <li><a href="">Special Offer</a></li>
            <li><a href="login.php">Sign in</a></li>
        </ul>
    </div>
</div>
  
<div class="fix frm">
    <form action="../php/signupaction.php" method="post">
        <lebel>Email</lebel><br>
        <input type="text" name="email" ><br><br>
        <lebel>Password</lebel><br>
        <input type="password" name="pass"><br><br>
        <lebel>Name</lebel><br>
        <input type="text" name="name"><br><br>
        <lebel>Phone</lebel><br>
        <input type="text" name="phone"><br><br>
        <input type="submit" value="Sign Up"/>
        <a href="login.php" > >>Login</a>
    </form>
    
</div>

<div class="fix footer" >
    <div class="fix contacts">
        <h1>Contacts</h1>
        <hr width="300px"  color="red" style="margin-left: 600px;">
        <p >Email:mosfak2400@gmail.com</p>
        <p>Phone:01590127784</p>
    </div>
    <div class="fix seat">
        <form>
            <h2>Reserve a Seat!</h2>
            Enter date:<br>
            <input type="date"><br>
            Enter Time:<br>
            <input type="time"><br>
            Enter party size:<br>
            <input type="number"><br>
                        <input type="text" placeholder="Enter Your Email"><br>
                        <input type="submit" onclick="alert('Your Reservarion is being processed \nWe will inform you through a mail')"><br>
        </form>
    </div>
    <div class="fix open">
        <h2>We are Open<br>7.00AM-9.00PM</h2>
    </div>
    <div class="fix map">
        <h3>We are Here:</h3>
        <img src="../img/map.png" width="400" height="200">
    </div>
</div>
<div class="fix cpyright">
    <hr color="white">
    &copy;Developed by Mosfak Motin Rimon
</div>
</body>

</html>
<!DOCTYPE html> 
<html> 
<head> 
<title>Signout Page</title> 
</head> 
<body> 
<style> 
body{ 
background-image:lineargradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("back8.jpg"); 
height: 100vh; 
/* Center and scale the image nicely */ 
background-position: center; 
background-repeat: no-repeat; 
background-size: cover; 
} 
</style> 
<div  style="color: #ff4500; font-family: 'Lucida Calligraphy', sansserif;font-size: 22px;"> 
<center><h1>Please Sign Out here..!!!</h1></center> 
<form action="logout.php" method="post" name="form" type="text/plain"> 
<center>Name : <input type="text" name="p" placeholder="Enter the Username.."></center><br> 
<center>Password : <input type="password" name="n" placeholder="Enter the Password.."></center><br> 
</div> 
<center><button type="submit" name="signin" class="button_1">Signout</button> <button>Cancel</button></center><br> 
</form> 
</body> 
</html> 
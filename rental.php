<br><br><h1 style="color:blue"><center>
Welcome to Bhushan Rentals!
</h1>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}
.container {
  position: absolute;
  left: 500px;
  top:50px;
  margin: 20px;
  border-style:solid;
  border-color:black;
  max-width: 450px;
  padding: 16px;
  background-color: white;
}
input[type=email],select, input[type=password] {
  width: 25%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: 1px;
  border-style:solid;
  background: #f1f1f1;
}

input[type=email]:focus,select:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

.btn {
  background-color: blue;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 10%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 5;
}
</style>
</head>
<body>

 <center> <h2>Select your specification here!</h2></center>

<center><form action="" method="post">
  <select id="bhk" name="bhk" required>
    <option value="">-Select-</option>
    <option value="1BHK">1 BHK</option>
    <option value="2BHK">2 BHK</option>
    <option value="3BHK">3 BHK</option>
  </select>
<br>  <center> <button type="submit" class="btn" name="submit" >SUBMIT</button></center>
</form></center>
</form>
</body>
</html>
<center><h2><?php
if(isset($_POST['submit'])){
$mysqli=new mysqli('localhost','newuser','12345','myDB');
$bhktype=$mysqli->real_escape_string($_POST['bhk']);
$first=$mysqli->query("select BHK,ADDRESS,OWNER from RENTAL  where BHK='$bhktype'");
while($row = $first->fetch_assoc()){
        echo " ".$row['BHK']." is Availabe at "
. $row['ADDRESS'] ." contact ".$row['OWNER']. "!"."<br>";
}
}
?></h2></center>

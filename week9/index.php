<!DOCTYPE html>
<html>
<head>
<title>Leleyow</title>
<style>
#myHeader {
  background-color: darkblue;
  color: white;
  font-family: Brush Script MT;
  font-size: 50px;
  padding: 10px;
  text-align: center;}
body {background-color:powderblue;
  background-image: url('bluethunder1.png')
}
.yeah {
  background-color: lightblue;
  color: darkblue;
  padding: 20px;}

  table, th, td {
  border:2px solid black;
  text-align:center;
  background-color: cornflowerblue;
}
table.center {
  margin-left: auto; 
  margin-right: auto;
}
</style>
</head>
<body>
<h1 id="myHeader"><marquee> Hi! Welcome to Leleyow's Website! </marquee> </h1>
<img src="Leleyow.png" style="float:right;width:250px;height:260px;">
<h2> Want to know more about Lerrlyn Neverio?</h2>
<h2 class="yeah">Lele's Info</h2>
<p style="font-size:18px";>Full Name: Lerrlyn Distura Neverio <br> Nickname: Lele <br> Birthdate: February 20, 2002 <br> Age: 20 yrs old
<br> School: Asia Pacific College <br> Course: Bachelor of Science in Information Technology Specializing
 Mobile and Internet Technology</p>

<h2 class="yeah" style="text-align: center;">Things that Lele loves to do and what she loves.</h2>

<table class="center"; style="width:40%";>
  <tr> 
    <th style="width:20%"> Me</th>
    <th style="width:20%"> Things that I loves</th>
  </tr>

  <tr>
    <td > <img src="guitar.png" style="width:200px;height:260px; "> </td>
    <td> When I am bored, I usually play guitar and play any songs that I want. </td>
  </tr>

  <tr>
    <td > <img src="food.jpg" style="width:200px;height:260px; "> </td>
    <td> Fooooddss!!! I really love to eat a lot, especially when I am sad and of course, when I am hungry. </td>
  </tr>

  <tr>
    <td > <img src="dogs.jpg" style="width:200px;height:260px; "> </td>
    <td> The ones that I love the most right now are my dogs. They save me from my sadness, and
       I really want to take care of a dog.</td>
  </tr>

</table>
<h2 class="yeah" style="text-align: center;">&copy;Lerrlyn Neverio 2022</h2>

<script>
  function myFunction() {
    document.getElementById("demo").innerHTML = "I AM THE CUTEST HUMAN ALIVE HEHEHEHEHE";
  }
  </script

<p id="demo">DON'T YOU EVER CLICK IT, OKAY?</p>
<button type="button" onclick="myFunction()">WARNING!!!</button>

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>

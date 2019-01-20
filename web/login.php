<!DOCTYPE html>
<html>
<head>
  <header></header>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

.active {
  background-color: darkblue;
}

</style>
</head>

<body>

<ul>
  <li><a href="/home.php">Home</a></li>
  <li><a href="/about-us.php">About Us</a></li>
  <li><a class="active" href="#login">Login</a></li>
</ul>

<h1>log in here</h1>

<button type="button" value="Login as admin"><a href="/auth.php?user=admin"></a></button>
<button type="button" value="Login as tester"><a href="/auth.php?user=tester"></a></button>


</body>

</html>
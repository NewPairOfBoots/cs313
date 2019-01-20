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

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}

<ul>
  <li><a href="/homepage.php">Home</a></li>
  <li><a href="/assignments.php">Assignments</a></li>
  <li><a href="/music.php">My Music</a></li>
</ul>
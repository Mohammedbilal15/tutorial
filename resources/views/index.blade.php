<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
}

li {
  float: left;
  color: red;
}

li a {
    color: red;
  display: block;
  padding: 8px;
  background-color: black;
}
</style>
</head>
<body>
<hi >Welcome to home page</h1><br></br>
<ul>
<li><a href="/about">About page</a></li>
<li><a href="/welcome">Welcome page</a></li>
<li><a href="/contact">Contact page</a></li>
<li><a href="/User"> {{ $test }} </a></li>
<! –– this $test variable is registered in NavigationServiceprovide––> 
</ul>

</body>
</html>
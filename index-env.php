<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php
   $user = getenv('USER');
   $password = getenv('PASSWORD');
   echo "User: $user</p>";
   echo "Password: $password</p>";
 ?>
 </body>
</html>

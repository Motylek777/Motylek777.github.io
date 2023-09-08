<html>
  <head><title></title>
  </head>
<body>
    <h1>saving data from a form in a text file</h1>
    <form action="index.php" methon="get">
      username:<input type="text" name="pass">
      password:<input type="password" name="pass"
      Minput type="submit" value="submit">
    </form>
    <?php
      $user=$_GET["user"];
      $pass=$_GET["pass"];

      $f=fopen("info.txt, "a");
      fwrite($f, "username:".$user." passwrod:"$pass."\n");
      fclose($f);
    ?> 
</body>
</html>
<html>
<body>
<style> 
h3 {
color: blue;
}

</style>
<h3>Result</h3>
<?php 
      $num1 = intval($_POST["num1"]);
      $num2 = intval($_POST["num2"]);
      $result = $num1 + $num2;
      echo $result; 
?>
<br>
</body>
</html> 

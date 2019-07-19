
<html>
  <head>
    <title>Summer HackCamp</title>
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body>
    <div style="height: 20%; display: flex; justify-content: center; align-items: center; margin-top:17%;">
      <h1>Will you find your way in Paris?</h1>
    </div>
    <div style="height: 100%; display: flex; justify-content: center; align-items: center; margin-top:5%;">
      <a href="motivationDevops.pdf"><input type="button" value="See the PDF"></a>
    </div>
  </body>
  
<?php
if (isset($_SESSION['user'])){
  var_dump($_SESSION);
}else{
  header("HTTP/1.0 404 Not Found");
}
?>
</html>

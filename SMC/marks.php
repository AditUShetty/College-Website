<?php
$author=$_POST["author"];
if($author!=NULL)
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="form">
        <form action="marks1.php" method="POST">
            <input class="form-input" type="text" name="name" id="name" placeholder="Enter Your name">
            <input class="form-input" type="number" name="regno" id="regno" placeholder="Enter Your regno">
            <input class="form-input" type="number" name="DC" id="DC" placeholder="Enter Your DC" min="0" max="100">
            <input class="form-input" type="number" name="LAMP" id="LAMP" placeholder="Enter Your LAMP" min="0" max="100">
            <input class="form-input" type="number" name="LINUX" id="LINUX" placeholder="Enter Your LINUX" min="0" max="100">
            <input class="form-input" type="number" name="JAVA" id="JAVA" placeholder="Enter Your JAVA" min="0" max="100">
            <input class="form-input" type="number" name="SE" id="SE" placeholder="Enter Your SE" min="0" max="100">
            <input class="form-input" type="number" name="WEB" id="WEB" placeholder="Enter Your WEB" min="0" max="100">
            <input class="form-input" type="number" name="JAVALAB" id="JAVALAB" placeholder="Enter Your JAVALAB" min="0" max="100">
            <input class="form-input" type="number" name="WEBLAB" id="WEBLAB" placeholder="Enter Your WEBLAB" min="0" max="100">
            <input type="text" name="author" value="<?php echo "$author" ?>" id="author" style="width:0px;height:0px;">
            <button class="btn btn-sm btn-dark" type="submit">Submit</button>
            <button class="btn btn-sm btn-dark" type="reset">Reset</button>
        </form>
    </div>
</body>
</html>
<?php
}
else{
    ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
  </head>
  <body>
      <h1>go back to the <a href="access.html">access</a> page..</h1>
  </body>
  </html>
  <?php
}
?>
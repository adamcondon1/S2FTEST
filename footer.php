<footer>

  <div class="space">
  </div>

  <html>

 <head>
  <link rel="stylesheet" href="style.css" type="text/css">
 </head>

 <body>

  <form action="" method="POST">
  <div class="leavealink">

<h1>PT Application Form</h1>

</div>

<div class="footerComment">
   <label> Name:
    <input type="text" name="Name" class="Input" style="width: 225px" required>
   </label>
   <br><br>
   <label> Linkedin Url: <br>
    <textarea name="Comment" class="Input" style="width: 300px" required></textarea>
   </label>
   <br><br>
   <input type="submit" name="Submit" value="Submit" class="Submit">

  </form>
</div>
 </body>

</html>


<?php

 if($_POST['Submit']){
  print "<h1>Your name and Url have been submitted!</h1>";

  $Name = $_POST['Name'];
  $Comment = $_POST['Comment'];

  #Get old comments
  $old = fopen("comments.txt", "r+t");
  $old_comments = fread($old, 1024);

  #Delete everything, write down new and old comments
  $write = fopen("comments.txt", "w+");
  $string = "<b>".$Name."</b><br>".$Comment."<br>\n".$old_comments;
  fwrite($write, $string);
  fclose($write);
  fclose($old);
 }

?>

</footer>

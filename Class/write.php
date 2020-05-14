<!doctype html>
<html>
 <head>
  <meta charset="UTF-8">  
 </head>
 <body>
 <form method="POST" action="write.php">
   
   <input type="hidden" name="writer" value="<?=$_POST['name']?>" > 
 
  <select name="tp">
	<option value="질문">질문</option>
	<option value="후기">후기</option>
	<option value=""></option>
	<option value=""></option>
  </select>
  <input type="text" name="subject" >
  <textarea name="feedback" rows="5" cols="50"></textarea>
 <input type="submit" value="확인"> 
</form>



 </body>
</html>

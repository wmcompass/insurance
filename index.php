<!DOCTYPE html>
<html>

  
<body>
 
<form action ="search.php" method="post">
<input type="text" name ="key_word">
<button type="button">Search</button>
</form>
  
 <br><br> 
 <form action="save_data.php" method ="post">
 姓氏: <input type="text" name="lastname">
 名字: <input type="text" name="firstname">
 生日:<input type="date" name="birthdate">  
 性別:<br>
 <input type ="radio" name="gender" value="male”>Male<br>
 <input type ="radio" name="gender" value=female"Female<br>
 身分證字號: <input type ="text" name="personal_ID">
     
 <input type="submit">
 </form>

  
</body>
</html>

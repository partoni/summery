<?php ## MODeJ!b CKpHnTa, npHl-01MaKllleI'O ｔ･ｾｃｔ＠OT ｮｏｾ｢ＳＰｂ｡ｔ･ＮｩＱｒ
if (@$_REQUEST['text'])
 echo  $_REQUEST ['text'] . "<hr />";
  ?>
 <form action="<?$_SERVER [ 'SCRIPT_NAME' ] ?>" method=" POST"> 
 <textarea name="text" cols="60" rows="1O">
 <?php
      @htmlspecialchars($_REQUEST['text'])
      ?> 
</textarea><br /> 
<input type="submit"> 
</form>
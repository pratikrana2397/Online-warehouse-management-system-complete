<?php
require_once("includes/load.php");
  $chats=show_msg();
?>
<?php include_once('layouts/header.php'); ?>

	<div id ="scores">
<div class="panel">
<?php
foreach($chats as $chat):
?>
<p>[<?php  echo $chat['date'];?>]&nbsp
[<?php  echo $chat['Name'];?>]&nbsp
<?php  echo $chat['message'];?><br></p>

<?php endforeach;?>
</div>

<?php include("layouts/footer.php");?>
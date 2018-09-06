<?php
  $page_title = 'Chatroom';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('chat.php', false);}
  $chats=show_msg();
?>
<?php include_once('layouts/header.php'); ?>
<?php
if(isset($_POST['send']))
	{
	
		$date=date("Y/m/d");
		if($_POST['message']!=NULL)
		{
			if(!enter_msg($user['name'],$date,$_POST['message']))
			{
				echo "message failed";
			}
			else
			{
				echo "message sent sucessfully ";
			}
	    }
		else
		{
			echo "No Message entered";
		}
	}
?>
<div class="panel">
<?php
foreach($chats as $chat):
?>
<p>[<?php  echo $chat['date'];?>]&nbsp
[<?php  echo $chat['Name'];?>]&nbsp
<?php  echo $chat['message'];?><br></p>

<?php endforeach;?>
</div>

<div class="row">
  <div class="col-md-12">
    <?php //echo display_msg($msg); ?>
  </div>
 <div class="col-md-12">
    <div class="panel">
      <form method="post"class="clearfix">
	  <div class="jumbotron text-center">
          <div class="form-group">
              <label for="message" class="control-label">Message</label>
              <input type="message" class="form-control" name="message" placeholder="Type your text here....">
        </div>
		<div class="form-group">
                <button type="submit" name="send" class="btn btn-info  pull-right">Send Message</button>
        </div>
      </div>
	  </form>
	  </div>
    </div>
 </div>
</div>

<?php include_once('layouts/footer.php'); ?>

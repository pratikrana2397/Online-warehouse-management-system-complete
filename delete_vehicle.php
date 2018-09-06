<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(2);
?>
<?php
  $vehicles = find_by_id('vehicle',(int)$_GET['id']);
  if(!$product){
    $session->msg("d","Missing Vehicle Id");
    redirect('vehicle.php');
  }
?>
<?php
  $delete_id = delete_by_id('vehicle',(int)$vehicles['id']);
  if($delete_id){
      $session->msg("s","Vehicles deleted.");
      redirect('vehicle.php');
  } else {
      $session->msg("d","Vehicle deletion failed.");
      redirect('vehicle.php');
  }
?>

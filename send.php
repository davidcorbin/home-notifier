<?php

    $state = "";
    if ( !isset($_POST['from']) || !isset($_POST['content']) || $_POST['from']=="" || $_POST['content']=="" ) {
        $state = '
<div class="alert alert-dismissable alert-danger">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Error!</strong> Missing field data. Please fill in all fields.
</div>
';
    } else {
    
    $state = '
<div class="alert alert-dismissable alert-success">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Successfully Submitted!</strong> Notification has been sent and sound has been made.
</div>
';
    }

    //print_r($_POST);

    include "main.inc";

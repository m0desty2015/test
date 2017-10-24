<?php if(!Session::get('loggedIn') == true){
header('Location: ../login');	
}?>
<?php if(Session::get('loggedIn') == true):?>
  <a href="dashboard/logout">Logout</a>
<?php endif; ?>
<h1> Dashboard page </h1>
<?php
    include ($contentPage);
?>
<h1> Dashboard page </h1>

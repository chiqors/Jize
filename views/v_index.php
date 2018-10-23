<h1>Main</h1>
<a href="<?php echo site_url("about")?>">About</a><br>
<?php if(@$_SESSION['loggedin']) {?>
<a href="<?php echo site_url("logout")?>">Logout</a>
<?php } ?>
<?php 
	$firstname = ucfirst(substr($username, 0,1)) ;
 ?>
<div class="name"><span class="firt-name">{{ $firstname }}</span>{{ $username }}</div>
<div class="content-comment">{{ $content }}</div>
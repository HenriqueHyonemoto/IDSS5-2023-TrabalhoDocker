<?php
unset($_COOKIE['titulo']); 
setcookie('titulo', "", -1, '/'); 
unset($_COOKIE['corpo']); 
setcookie('corpo', "", -1, '/'); 
unset($_COOKIE['urlimg']); 
setcookie('urlimg', "", -1, '/'); 
unset($_COOKIE['cort']); 
setcookie('cort', "", -1, '/'); 
unset($_COOKIE['corbg']); 
setcookie('corbg', "", -1, '/'); 
unset($_COOKIE['datahora']); 
setcookie('datahora', "", -1, '/'); 

header("Location: praticando_post.php");
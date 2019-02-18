<?php
// lam the nao de xoa duoc 1 cai cookie
setcookie('T3H','',time() - 10,"/","",0);
header('Location:index2.php');
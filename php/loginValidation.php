<?php
	if(isset($_POST['email']) && isset($_POST['password'])) {
	    echo "El usuario y contraseña son correctos";
	}
	else { 
	    echo "El usuario o la contraseña son incorrectas";
	}
?>
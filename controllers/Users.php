<?php
	class Users{
		public function main(){}
		public function Register(){
      require_once "models/User.php";
      // Instancia la Clase
      $user = new User;
      
      // Pasar los datos
      $user->setRolCode(1);
      $user->setUserCode(1);
      $user->setUserName("Albeiro");

      // Retornar los Datos
      echo "<br>" . "Código Rol: " . $user->getRolCode();
      echo "<br>" . "Código Usuario: " . $user->getUserCode();
      echo "<br>" . "Nombre Usuario: " . $user->getUserName();
    }
	}
?>
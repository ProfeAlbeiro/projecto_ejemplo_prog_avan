<?php
  require_once "models/Rol.php";
	class Roles{
		public function main(){}
		public function Register(){
      $rol = new Rol(null, "Rolitos");
      $rol->create_rol();
    }
	}
?>
<?php
  require_once "models/User.php";
	class Users{
		public function main(){}
		public function Register(){
      $user1 = new User;
      $user1->setRolCode(null);
      $user1->setRolName("cajero");
      $user1->create_rol();
    }
	}
?>
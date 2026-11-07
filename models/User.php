<?php
	class User{
                                 // 1ra Parte: Atributos
    private $rolCode;
    private $userCode;
    private $userName;
    private $userLastName;
    private $userId;
    private $userEmail;
    private $userPassword;
    private $userState;    
                                    // 2da Parte: Métodos
    // 2.1. Constructores
    // 2.2. Setter y Getters
    # Código Rol
    public function setRolCode($rolCode){
        $this->rolCode = $rolCode;
    }
    public function getRolCode(){
        return $this->rolCode;
    }
    # Código del Usuario
    public function setUserCode($userCode){
        $this->userCode = $userCode;
    }
    public function getUserCode(){
        return $this->userCode;
    }
    # Nombre del Usuario
    public function setUserName($userName){
        $this->userName = $userName;
    }
    public function getUserName(){
        return $this->userName;
    }
  }
?>
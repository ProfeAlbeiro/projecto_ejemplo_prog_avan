<?php
class Rol {
  private $dbh;
  private $rol_code;
  private $rol_name;

  public function __construct(){
    try {
      $this->dbh = DataBase::connection();
      $a = func_get_args();
      $i = func_num_args();
      if (method_exists($this, $f = '__construct' . $i)) {
        call_user_func_array(array($this, $f), $a);
      }
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function __construct0(){}

  # Constructor: Objeto 02 parámetros
  public function __construct2($rol_code, $rol_name){
    $this->rol_code = $rol_code;
    $this->rol_name = $rol_name;
  }

  # Código Rol
  public function setRolCode($rol_code){
    $this->rol_code = $rol_code;
  }
  public function getRolCode() {
    return $this->rol_code;
  }
  # Nombre Rol
  public function setRolName($rol_name){
    $this->rol_name = $rol_name;
  }
  public function getRolName(){
    return $this->rol_name;
  }
  public function create_rol() {
    try {
      $sql = 'INSERT INTO ROLES VALUES (:rolCode,:rolName)';
      $stmt = $this->dbh->prepare($sql);
      $stmt->bindValue('rolCode', $this->getRolCode());
      $stmt->bindValue('rolName', $this->getRolName());
      $stmt->execute();
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

}
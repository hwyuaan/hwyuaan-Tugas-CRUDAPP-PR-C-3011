<?php
class Database {
  private $username ='root';
  private $hostname ='localhost';
  private $password ='';
  private $dbname = 'konseryuk.com';

  private $dbh;
  private $stmt;

  public function __construct()
  {
    $option =[
      PDO :: ATTR_PERSISTENT => true,
      PDO :: ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,];
      try {
        $dsn = 'mysql:host=' . $this->hostname . ';dbname=' . $this->dbname;
        $this->dbh = new PDO($dsn, $this->username, $this->password, $option);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        exit();
    }
    echo "Connected to database successfully!";
  } 
  

  public function query($query){
    $this ->stmt = $this ->dbh->prepare($query);
  }

  public function bind($param,$value,$type=null){
    if(is_null($type)){
      switch (true) {
        case is_int($value):
          $type = PDO ::PARAM_INT;
          break;
        case is_bool($value) :
          $type = PDO ::PARAM_BOOL;
          break;
        case is_null($value):
          $type = PDO :: PARAM_NULL;
          break;
        default:
          $type = PDO :: PARAM_STR;
      }
    }
    $this->stmt->bindValue($param, $value,$type);
  }

  public function execute($data = null) 
  {
    if ($data === null) {
        $this->stmt->execute();
    } else {
        $this->stmt->execute($data);
    }
  }

  public function resultSet(){
    $this->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function rowCount (){
    return $this->stmt->rowCount();
  }

}
?>
 

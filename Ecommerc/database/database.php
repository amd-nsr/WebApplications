<?php include_once('config.php'); ?>
<?php
class database{
    private $serverName=DBTybe;
    private $username=DBUser;
    private $password=DBPassword;
    private $host=DBHost;
    private $usedDatbase=databse;
    function __construct(){
        $sdh = 'mysql:dbname=webtask;host=127.0.0.1';
        //$test=$serverName.'dbname=cinema;host='.$host;
        //$DBMSType."host=".$this->host.";dbname=".$this->usedDatabse
        //$serverName.':dbname=cinema;host=127.0.0.1';
        
        try{
        $this->pdo=new PDO($sdh,
                           $this->username,
                           $this->password,
                           array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"));
        }
        catch(PDOException $e)
        {
            echo "Error : ".$e->getMessage();
        }
    }
    public function disconnect(){
        $this->pdo=null;
        $isConnected=false;
    }
    
    public function getRow($query,$params=array()){
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($params);
        return $stmt->fetch();
    }
    public function getCount($query,$params=array()){
        $stmt=$this->pdo->prepare($query);
        $stmt->execute($params);
        return $stmt->rowCount();
    }
    public function getRows($query,$params=array()){
        $stmt=$this->pdo->prepare($query);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getObjs($query, $params=array()){
                $stmt = $this->pdo->prepare($query);
                $stmt->execute($params);
                return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function insertRow($query, $params=array()){
                $stmt = $this->pdo->prepare($query);
                $stmt->execute($params);
                return $stmt->rowCount();
              }
    public function ubdateRow($query,$params=array()){
        return $this->insertRow($query,$params);
    }
    public function deleteRow($query, $params=array()){
        return $this->insertRow($query, $params=array());
    }
    public function Execute($query){
        return $this->pdo->exec($query);
    }

}    
?>
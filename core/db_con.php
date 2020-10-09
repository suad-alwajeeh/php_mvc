<?php
class db_conect{
     public $connect;
     public function connect(){
      try {
        $connect = new PDO('mysql:host=localhost;dbname=mvc_db;charset=utf8;','root','');
        $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $connect;
      } catch (Exception $e) {
        die('Error db(connect) '.$e->getMessage());
      }
    }
}
class db_query{
  public $cols;
  public $table;
  public $cond;
  public $final_query;
    
function selectall($t){
      return "select * from".$table;
    } 

    function select($col){
      $colfrommultitable=$this->$cols=implode(',',$col);
      return "select ".$colfrommultitable;
        
    } 
    function from($tab){
      $tables=$this->$table=implode(',',$tab);
      return "from ".$tables;

    }
    function whereone($col_name,$con,$val){
      //$this->$cond=implode(',',$cons);
      return "where ".$col_name.$con.$val;

    }
  function build(){
        return 'select'.$cols.'from'.$table.'where'.$cond;
        return $this;

    }
    function execute(){
       $stat=pdo::prepar($this->$final_query()) ;
      $stat=execute();
      return $this;
    }
    function delete(){
        
    }


}


?>
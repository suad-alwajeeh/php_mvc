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

  public $cols;
  public $table;
  public $cond;
  public $final_query;
    
function selectall($t){
    
      return "select * from ".$t;
    } 

    function select($col){
      //$colfrommultitable=$this->$cols=implode(',',$col);
      return "select ".$col;
        
    } 
    function from($tab){
      //$tables=$this->$table=implode(',',$tab);
      return " from ". $tab;

    }
     function fromone($tab){
      return "from ".$tab ;

    }
    function whereone($col_name,$con,$val){
      //$this->$cond=implode(',',$cons);
      return " where ". $col_name . $con . $val;

    }
    function orderby($col_name,$method){
      //$this->$cond=implode(',',$cons);
      return " ORDER BY ". $col_name ." ". $method;

    }
    function groupby($col_name){
      //$this->$cond=implode(',',$cons);
      return " GROUP BY ". $col_name ;

    }
    function orderbymore($col_name,$method){
      //$col_names=implode(' , ',$col_name);
      return " ORDER BY ". $col_name ." ". $method ;

    }
     function limit($num){
      //$this->$cond=implode(',',$cons);
      return " LIMIT ". $num;

    }
  function rightjoin($table2,$col,$con,$val){
        return ' RIGHT JOIN '. $table2 .' ON '. $col . $con . $val ;

    }
     function innerjoin($table2,$col,$con,$val){
        return ' INNER  JOIN '. $table2 .' ON '. $col . $con . $val;

    }
     function leftjoin($table2,$col,$con,$val){
        return ' LEFT  JOIN '. $table2 .' ON '. $col . $con . $val;

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
<?php

class buildermodel extends db_conect{
   function __construct(){
   
   }
    function getall(){
    $SQL =$this->selectall('mvc_user');
			$result = $this->connect()->prepare($SQL);
			$result->execute();
          $count= $result->rowcount();
        if($count>=1){
            echo  "</br>function_1:there is".$count."rows";
    
    }
        else{echo "</br>function_1:there is 0 row";}
    }
    
     function get_one_with_condation(){
    $SQL =$this->selectall('mvc_user').$this->whereone('user_id','=',1);
			$result = $this->connect()->prepare($SQL);
			$result->execute();
          $count= $result->rowcount();
        if($count>=1){
            echo  "</br>function_2:there is".$count."rows";
    
    }
        else{echo "</br>function_2:there is 0 row";}
    }
    
    
    function select_orderby(){
    $SQL =$this->selectall('mvc_user').$this->whereone('user_id','>',10).$this->orderby('user_id','DESC');
			$result = $this->connect()->prepare($SQL);
			$result->execute();
          $count= $result->rowcount();
        if($count>=1){
            echo  "</br>function_3:there is".$count."rows";
    
    }
        else{echo "</br>function_3:there is 0 row";}
    }
    function select_orderbymore(){
    $SQL =$this->selectall('mvc_user').$this->whereone('user_id','>',12).$this->orderbymore('user_id,use_name','DESC');
			$result = $this->connect()->prepare($SQL);
			$result->execute();
          $count= $result->rowcount();
        if($count>=1){
            echo  "</br>function_4:there is".$count."rows";
    
    }
        else{echo "</br>function_4:there is 0 row";}
    }
     function select_limit(){
    $SQL =$this->select('user_email,use_name').$this->from('mvc_user').$this->limit(2);
			$result = $this->connect()->prepare($SQL);
			$result->execute();
          $count= $result->rowcount();
        if($count>=1){
            echo  "</br>function_5:there is".$count."rows";
    
    }
        else{echo "</br>function_5:there is 0 row";}
    }
    function select_group(){
    $SQL =$this->select('user_email,use_name').$this->from('mvc_user').$this->groupby('use_name');
			$result = $this->connect()->prepare($SQL);
			$result->execute();
          $count= $result->rowcount();
        if($count>=1){
            echo  "</br>function_6:there is".$count."rows";
    
    }
        else{echo "</br>function_6:there is 0 row";}
    }
    function select_joininner(){
$SQL =$this->select('user_email,use_name,cust_name').$this->from('mvc_user').$this->innerjoin('customer','mvc_user.user_id','=','customer.cust_id');
			$result = $this->connect()->prepare($SQL);
			$result->execute();
          $count= $result->rowcount();
        if($count>=1){
            echo  "</br>function_7:there is".$count."rows";
    
    }
        else{echo "</br>function_7:there is 0 row";}
    }
    function select_joinleft(){
$SQL =$this->select('user_email,use_name,cust_name').$this->from('mvc_user').$this->leftjoin('customer','mvc_user.use_name','=','customer.cust_name');
			$result = $this->connect()->prepare($SQL);
			$result->execute();
          $count= $result->rowcount();
        if($count>=1){
            echo  "</br>function_8:there is".$count."rows";
    
    }
        else{echo "</br>function_8:there is 0 row";}
    }
       function select_joinRIGHT(){
$SQL =$this->select('user_email,use_name,cust_name').$this->from('mvc_user').$this->rightjoin('customer','mvc_user.use_name','=','customer.cust_name');
			$result = $this->connect()->prepare($SQL);
			$result->execute();
          $count= $result->rowcount();
        if($count>=1){
            echo  "</br>function_9:there is".$count."rows";
    
    }
        else{echo "</br>function_9:there is 0 row";}
    }

}
?>
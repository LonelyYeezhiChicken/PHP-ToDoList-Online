<?php  
class PdoConn{
   public function GetConn(){
      $database = new Database();
      $myModel = $database->mode();
      //判斷需要連哪一個資料庫
      if($myModel === "test"){
       $db = $database -> test();
      }else{
       $db = $database -> default();
      }  
   
      try {  
         $conn = new PDO( 
           "{$db["DBDriver"]}:host={$db["hostname"]};dbname={$db["database"]};charset={$db["charset"]}",
           $db["username"],$db["password"]); 
           return $conn;  
      } 
      catch( PDOException $ex ) {  
         die( "Error connecting to SQL Server" );   
         echo "資料庫連結失敗<br>";
         echo "error : ".$ex->getMessage();
         exit;
      }  
   }
   
}
?>
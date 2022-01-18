<?php  
   require_once("../config/Database.php");
   $database = new Database();
   //判斷需要連哪一個資料庫
   if($myModel === "test"){
    $db = $database -> test();
   }else{
    $db = $database -> default();
   }  
   echo $db["DBDriver"];
   try {  
      $conn = new PDO( 
        "{$db["DBDriver"]}:host={$db["hostname"]};dbname={$db["database"]};charset={$db["charset"]}",
        $db["username"],$db["password"]);   
   } 
   catch( PDOException $e ) {  
      die( "Error connecting to SQL Server" );   
      echo "資料庫連結失敗<br>";
      echo "error : ".$ex->getMessage();
      exit;
   }  
?>
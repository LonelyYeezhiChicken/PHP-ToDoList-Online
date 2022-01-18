<?php  
   require_once("../config/Database.php");
   
   //判斷需要連哪一個資料庫
   if($mode === "test"){
    $db = $test;
   }else{
    $db = $default;
   }  
   
   try {  
      $conn = new PDO( 
        "{$db.DBDriver}:host={$db.hostname};dbname={$db.database};charset=utf8"
        $db.username,$db.password);   
   } 
   catch( PDOException $e ) {  
      die( "Error connecting to SQL Server" );   
      echo "資料庫連結失敗<br>";
      echo "error : ".$ex->getMessage();
      exit;
   }  
?>
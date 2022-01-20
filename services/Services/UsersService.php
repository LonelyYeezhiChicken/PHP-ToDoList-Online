<?php
class UsersService{
    protected  $usersrepo;
    public function __construct(IUserRepository $usersrepo ) {
        $this-> usersrepo = $usersrepo;
     }

     /**
      * 登入驗證
      *@var bool
      */
     public function IsValid($email,$password):bool
     {
        //get user data from repo
       $userData = $this->usersrepo->LoadUserByEmail($email);
       //檢查是否有撈到資料
       if($userData !== null){
        //判斷密碼是否正確
        if($userData["password"] === $password){
            return true;
        }else{
            return false;
        }
       }else{
           return false;
       }       
     }
}


?>
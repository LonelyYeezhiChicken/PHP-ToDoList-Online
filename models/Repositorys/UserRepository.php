<?php
interface IUserRepository{
    /**
     * 取得使用者資料
     */
    public function LoadUserByEmail($email);
}

class UserRepository implements IUserRepository{
    /**
     * 取得使用者資料
     */
    public function LoadUserByEmail($email){
        $pdoconn = new PdoConn();
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $pdoconn->GetConn()->prepare($sql);
        $stmt->execute([$email]);
        $row = $stmt->fetch();
        return $row;
    }
}

?>
<?php 
include_once "Connection.php";
class User{
    public $userName;
    public $password;
    public $role_code;
    public $birth_day;
    public $email;
    public $state;
    protected $connect;
    public function __construct()
    {
        $this->connect = new Connection();
    }
    public function newUser($userName,$password,$role_code, $birth_day, $email, $state)
    {
        $this->userName = $userName;
        $this->password = $password;
        $this->role_code = $role_code;
        $this->birth_day = $birth_day;
        $this->email = $email;
        $this->state = $state;
    }
    public function getUserByUserName($userName){
        $qry = "SELECT * FROM nguoidung WHERE tennd='$userName' ";
        $stmt = $this->connect->select($qry);
        while($row = $stmt->fetch()){
            $this->newUser($row['tennd'], $row['matkhau'],$row['matruycap'],$row['ngaysinh'],$row['thudientu'],$row['trangthai']);
        }
    }
    public function isCorrectUserName(){
        $qry = "SELECT * FROM nguoidung WHERE tennd='$this->userName' ";
        $stmt = $this->connect->select($qry);
        if($stmt->rowCount()>0)
            return true;
        return false;
    }
    
    public function isCorrectPassword(){
        $qry = "SELECT * FROM nguoidung WHERE tennd='$this->userName' AND matkhau='$this->password' ";
        $stmt = $this->connect->select($qry);
        if($stmt->rowCount()>0)
            return true;
        return false;
    }
    public function updateUserAttribute($newUser){
        if($this->userName != $newUser->userName)
            return;
        if($this->password!==$newUser->password)
            $this->password = $newUser->password;
        if($this->role_code!==$newUser->role_code)
            $this->role_code = $newUser->role_code;
        if($this->birth_day!==$newUser->birth_day)
            $this->birth_day = $newUser->birth_day;
        if($this->email!==$newUser->email)
            $this->email  = $newUser->email;
        if($this->state!==$newUser->state)
            $this->state  = $newUser->state;
        $this->update();
    }
    public function update(){
        $query = "UPDATE nguoidung SET matruycap='$this->role_code', ngaysinh='$this->birth_day', thudientu='$this->email', trangthai='$this->state' WHERE tennd='$this->userName'";
        echo $query;
        $this->connect->update($query);
    }
    public function __toString()
    {
        return $this->userName.", ".$this->password.", ".$this->role_code.", ".$this->birth_day.", ".$this->email.", ".$this->state;
    }

}

?>
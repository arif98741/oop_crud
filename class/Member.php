<?php

include_once "Session.php";
include 'Database.php';

class Member {

    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function addMember($data) { //form validation method 
        $name           = $data['name'];
        $username       = $data['username'];
        $email          = $data['email'];
        $password       = md5($data['password']);
        $address        = $data['address'];
        $designation    = $data['designation'];
        $chk_email      = $this->emailCheck($email);
        

        if ($name == '' or $username == '' or $email == '' or $password == '') {
            $msg = "<div class='alert alert-info' style='margin: 0 auto;'><strong>Error!</strong> Field Must Not be Empty</div>";
            return $msg;
        } else {
            if (strlen($username) <= 3) { //for checking character length
                $msg = "<p class='alert alert-danger'  id='message' style='margin: 0 auto;'><strong>Error!</strong> Username is too Short</p>";
                return $msg;
            } elseif (preg_match('/[^a-z0-9_-]+/i', $username)) { //for checking character validation
                $msg = "<p class='alert alert-danger'  id='message'  style='margin: 0 auto;'><strong>Error!</strong> Username Must Only Contain alphanumerical, dashes, </p>";
                return $msg;
            }

            if (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) { //for checking email validation
                $msg = "<p class='alert alert-danger'  id='message'  style='margin: 0 auto;'><strong>Error!</strong> Email is Not Valid</p>";
                return $msg;
            }
            if ($chk_email == true) { //for checking email availability in database
                $msg = "<p class='alert alert-danger'  id='message'  style='margin: 0 auto;'><strong>Error!</strong> Email is already Exist</p>";
                return $msg;
            }
            if (strlen($data['password']) < 6) { //for checking character length of password
                // $data['password'] is used because we have make password md5 first.
                //and here we have used directly by array $data['password']
                $msg = "<p class='alert alert-danger'   id='message'  style='margin: 0 auto;'><strong>Error!</strong> Password must contain 6 characters </p>";
                return $msg;
            } elseif (preg_match('/[^a-z0-9_-]+/i', $password)) { //for checking character validation
                $msg = "<p class='alert alert-danger'  id='message'  style='margin: 0 auto;'><strong>Error!</strong> Password must contain alphanumeric characters(a-z,A-Z,_,0-9,@)</p>";
                return $msg;
            }
        }

        $sql = "insert into member (name,username,email,password,address,designation) values(:name,:username,:email,:password,:address,:designation)";
        $query = $this->db->pdo->prepare($sql);
        $query->bindValue(':name', $name);
        $query->bindValue(':username', $username);
        $query->bindValue(':email', $email);
        $query->bindValue(':password', $password);
        $query->bindValue(':address', $address);
        $query->bindValue(':designation', $designation);
        $result = $query->execute();
        if ($result) {
            $msg = "<p class='alert alert-success'  id='message'  style='margin: 0 auto;'><strong>Congratulations!</strong> You Have been Registered.</p>";
            return $msg;
        } else {
            $msg = "<p class='alert alert-danger'  id='message'  style='margin: 0 auto;'><strong>Error!!</strong> Sorry, there has been problem in inserting data. Contact with administrator.</p>";
            return $msg;
        }
    }

    public function emailCheck($email) {
        $sql = "select email from member where email= :email";
        $query = $this->db->pdo->prepare($sql);
        $query->bindValue(':email', $email);
        $query->execute();
        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    //get username and password from table for login
    public function getLoginUser($email, $password) {
        $sql = "select * from tbl_user where email= :email AND password = :password LIMIT 1";
        $query = $this->db->pdo->prepare($sql);
        $query->bindValue(':email', $email);
        $query->bindValue(':password', $password);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_OBJ);
        return $result;
    }

    //login method
    public function userLogin($data) {

        $email = $data['email'];
        $chk_email = $this->emailCheck($email);
        $password = md5($data['password']);

        if ($email == '' or $password == '') {
            $msg = "<div class='alert alert-info' style='margin: 0 auto;'><strong>Error!</strong> Field Must Not be Empty</div>";
            return $msg;
        } else {
            if (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) { //for checking email validation
                $msg = "<div class='alert alert-danger'  style='margin: 0 auto;'><strong>Error!</strong> Email is Not Valid</div>";
                return $msg;
            }
            if ($chk_email == false) { //for checking email availability in database
                $msg = "<div class='alert alert-danger'  style='margin: 0 auto;'><strong>Error!</strong> Email is Not Exist</div>";
                return $msg;
            }
        }

        $result = $this->getLoginUser($email, $password);
        if ($result) {
            Session::initialization();
            Session::set("login", true);
            Session::set("id", $result->id);
            Session::set("name", $result->name);
            Session::set("username", $result->username);
            Session::set("loginmsg", "<div class='alert alert-success'  style='margin: 0 auto;'><strong>Sucess!</strong> You are Logged In!.</div>");
            header("location: index.php");
        } else {
            $msg = "<div class='alert alert-danger'  style='margin: 0 auto;'><strong>Error!</strong> Data Not Found.</div>";
            return $msg;
        }
    }

}

?>
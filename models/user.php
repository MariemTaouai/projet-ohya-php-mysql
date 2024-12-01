<?php
class User {
    private $user_id, $first_name, $last_name, $email, $password, $contact_no, $isAdmin;

    public function __construct( $first_name = "", $last_name = "", $email = "", $password = "", $contact_no = "", $isAdmin = "") {
       
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
        $this->contact_no = $contact_no;
        $this->isAdmin = $isAdmin;
    }

    public function getUserId() {
        return $this->user_id;
    }

    public function getFirstName() {
        return $this->first_name;
    }

    public function getLastName() {
        return $this->last_name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getContactNo() {
        return $this->contact_no;
    }

    public function getIsAdmin() {
        return $this->isAdmin;
    }

    public function setUserId($id) {
        $this->user_id = $id;
    }

    public function setFirstName($first_name) {
        $this->first_name = $first_name;
    }

    public function setLastName($last_name) {
        $this->last_name = $last_name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setContactNo($contact_no) {
        $this->contact_no = $contact_no;
    }

    public function setIsAdmin($isAdmin) {
        $this->isAdmin = $isAdmin;
    }
}
?>

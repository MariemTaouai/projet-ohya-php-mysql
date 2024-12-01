<?php

class contact {
    private $id;
    private $namee;
    private $email;
    private $subject;
    private $message;

    public function __construct( $namee = "", $email = "", $subject = "", $message = "") {
      
        $this->namee = $namee;
        $this->email = $email;
        $this->subject = $subject;
        $this->message = $message;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getNamee()  {
        return $this->namee;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSubject() {
        return $this->subject;
    }

    public function getMessage() {
        return $this->message;
    }

    // Setters
    public function setId($id) {
        $this->id = $id;
    }

    public function setName($namee) {
        $this->namee = $namee;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setSubject($subject) {
        $this->subject = $subject;
    }

    public function setMessage($message) {
        $this->message = $message;
    }
}
?>

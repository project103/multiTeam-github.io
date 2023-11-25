<?php
class User {
    private $id;
    private $name;
    private $password;
    private $roleId;
    private $image;
    private $progress;
    private $email;
    private $phone;
    private $region;

    // Setters
    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setRoleId($roleId) {
        $this->roleId = $roleId;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function setProgress($progress) {
        $this->progress = $progress;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function setRegion($region) {
        $this->region = $region;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getRoleId() {
        return $this->roleId;
    }

    public function getImage() {
        return $this->image;
    }

    public function getProgress() {
        return $this->progress;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getRegion() {
        return $this->region;
    }
}

?>

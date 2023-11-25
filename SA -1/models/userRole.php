<?php
class UserRole {
    private $role;
    private $id;

    // Setters
    public function setRole($role) {
        $this->role = $role;
    }

    public function setId($id) {
        $this->id = $id;
    }

    // Getters
    public function getRole() {
        return $this->role;
    }

    public function getId() {
        return $this->id;
    }
}

?>

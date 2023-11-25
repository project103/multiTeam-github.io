<?php
class coursetypes {
    private $name;
    private $id;

    // Setters
    public function setName($name) {
        $this->name = $name;
    }

    public function setId($id) {
        $this->id = $id;
    }

    // Getters
    public function getName() {
        return $this->name;
    }

    public function getId() {
        return $this->id;
    }
}

?>

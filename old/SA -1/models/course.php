<?php
class course {

    private $lecturesId;
    private $instructorId;
    private $instructor;
    private $creationDate;
    private $typeId;
    private $type;
    private $name;
    private $id;
    private $instructorEmail;

    // Setters
    public function setLecturesId($lecturesId) {
        $this->lecturesId = $lecturesId;
    }

    public function setInstructorId($instructorId) {
        $this->instructorId = $instructorId;
    }

    public function setInstructor($instructor) {
        $this->instructor = $instructor;
    }

    public function setCreationDate($creationDate) {
        $this->creationDate = $creationDate;
    }

    public function setTypeId($typeId) {
        $this->typeId = $typeId;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setInstructorEmail($instructorEmail) {
        $this->instructorEmail = $instructorEmail;
    }

    // Getters
    public function getLecturesId() {
        return $this->lecturesId;
    }

    public function getInstructorId() {
        return $this->instructorId;
    }

    public function getInstructor() {
        return $this->instructor;
    }

    public function getCreationDate() {
        return $this->creationDate;
    }

    public function getTypeId() {
        return $this->typeId;
    }

    public function getType() {
        return $this->type;
    }

    public function getName() {
        return $this->name;
    }

    public function getId() {
        return $this->id;
    }

    public function getInstructorEmail() {
        return $this->instructorEmail;
    }

}

?>

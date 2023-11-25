<?php
class quiz {
    private $id;
    private $name;
    private $lectureId;
    private $courseId;
    private $q1Id;
    private $q2Id;
    private $q3Id;
    private $q4Id;
    private $q5Id;

    // Setters
    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setLectureId($lectureId) {
        $this->lectureId = $lectureId;
    }

    public function setCourseId($courseId) {
        $this->courseId = $courseId;
    }

    public function setQ1Id($q1Id) {
        $this->q1Id = $q1Id;
    }

    public function setQ2Id($q2Id) {
        $this->q2Id = $q2Id;
    }

    public function setQ3Id($q3Id) {
        $this->q3Id = $q3Id;
    }

    public function setQ4Id($q4Id) {
        $this->q4Id = $q4Id;
    }

    public function setQ5Id($q5Id) {
        $this->q5Id = $q5Id;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getLectureId() {
        return $this->lectureId;
    }

    public function getCourseId() {
        return $this->courseId;
    }

    public function getQ1Id() {
        return $this->q1Id;
    }

    public function getQ2Id() {
        return $this->q2Id;
    }

    public function getQ3Id() {
        return $this->q3Id;
    }

    public function getQ4Id() {
        return $this->q4Id;
    }

    public function getQ5Id() {
        return $this->q5Id;
    }
}

?>

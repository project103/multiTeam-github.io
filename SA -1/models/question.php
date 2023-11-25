<<?php
class lectures {
    private $id;
    private $courseId;
    private $le1id;
    private $le2id;
    private $le3id;
    private $le4id;
    private $le5id;
    private $le6id;

    // Setters
    public function setId($id) {
        $this->id = $id;
    }

    public function setCourseId($courseId) {
        $this->courseId = $courseId;
    }

    public function setLe1id($le1id) {
        $this->le1id = $le1id;
    }

    public function setLe2id($le2id) {
        $this->le2id = $le2id;
    }

    public function setLe3id($le3id) {
        $this->le3id = $le3id;
    }

    public function setLe4id($le4id) {
        $this->le4id = $le4id;
    }

    public function setLe5id($le5id) {
        $this->le5id = $le5id;
    }

    public function setLe6id($le6id) {
        $this->le6id = $le6id;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getCourseId() {
        return $this->courseId;
    }

    public function getLe1id() {
        return $this->le1id;
    }

    public function getLe2id() {
        return $this->le2id;
    }

    public function getLe3id() {
        return $this->le3id;
    }

    public function getLe4id() {
        return $this->le4id;
    }

    public function getLe5id() {
        return $this->le5id;
    }

    public function getLe6id() {
        return $this->le6id;
    }
}

?>

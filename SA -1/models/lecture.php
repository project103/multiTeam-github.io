<?php
class lecture {
    private $id;
    private $name;
    private $courseId;
    private $title;
    private $point1;
    private $p1desc;
    private $point2;
    private $p2desc;
    private $video;

    // Setters
    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setCourseId($courseId) {
        $this->courseId = $courseId;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setPoint1($point1) {
        $this->point1 = $point1;
    }

    public function setP1desc($p1desc) {
        $this->p1desc = $p1desc;
    }

    public function setPoint2($point2) {
        $this->point2 = $point2;
    }

    public function setP2desc($p2desc) {
        $this->p2desc = $p2desc;
    }

    public function setVideo($video) {
        $this->video = $video;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getCourseId() {
        return $this->courseId;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getPoint1() {
        return $this->point1;
    }

    public function getP1desc() {
        return $this->p1desc;
    }

    public function getPoint2() {
        return $this->point2;
    }

    public function getP2desc() {
        return $this->p2desc;
    }

    public function getVideo() {
        return $this->video;
    }
}

?>

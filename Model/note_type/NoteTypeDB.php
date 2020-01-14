<?php

class NoteTypeDB
{
    private $conn;

    public function __construct()
    {
        $db = new DBConnect();
        $this->conn = $db->connect();
    }

    public function getListType()
    {
        $sql = "SELECT * FROM note_type";
        $stmt = $this->conn->query($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $this->returnNoteTypeList($result);
    }

    public function creatNoteTypeFromResult($item)
    {
        $noteType = new NoteType($item['name'], $item['description']);
        $noteType->setId($item['id']);
        return $noteType;
    }

    public function returnNoteTypeList($result)
    {
        $arr = [];
        foreach ($result as $item) {
            $noteType = $this->creatNoteTypeFromResult($item);
            array_push($arr, $noteType);
        }
        return $arr;
    }
}
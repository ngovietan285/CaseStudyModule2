<?php


class NoteController
{
    private $noteDB;
    private $noteTypeDB;

    public function __construct()
    {
        $this->noteDB = new NoteDB();
        $this->noteTypeDB = new NoteTypeDB();
    }

    public function index()
    {
        $noteDB = $this->noteDB->getList();
        $noteTypeDB = $this->noteTypeDB->getListType();
        include_once "View/note/list.php";
    }

    public function addNote()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $types = $this->noteTypeDB->getListType();
            include_once "View/note/add.php";
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $note = new Note($_POST['title'], $_POST['content'], $_POST['type_id']);
            $this->noteDB->add($note);
            header("location: index.php");
        }
    }

    public function deleteNote()
    {
        $note_id = $_GET['id'];
        $this->noteDB->delete($note_id);
        header("location: index.php");
    }

    public function editNote()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $note = $this->noteDB->getNoteById($_GET['id']);
            $types = $this->noteTypeDB->getListType();
            include_once "View/note/edit.php";
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $note_id = $_GET['id'];
            $note = new Note($_POST['title'], $_POST['content'], $_POST['type_id']);
            $this->noteDB->edit($note_id, $note);
            header("location: index.php");
        }
    }

    public function searchNoteByTitle()
    {
        $keyword = $_GET['keyword'];
        $noteList = $this->noteDB->search($keyword);
        include_once "View/note/list.php";
    }

    public function searchNoteByType()
    {
        $keyword = $_GET['id'];
        $note = $this->noteDB->getNoteById($keyword);
        include_once "View/note/list.php";
    }

    public function noteDetail()
    {
        $note_id = $_GET['id'];
        $note = $this->noteDB->getNoteById($note_id);
        include_once "View/note/details.php";
    }

    public function getNoteByType()
    {
        $type_id = $_GET['type_id'];
        $type = $this->noteTypeDB->getListType();
        $noteList = $this->noteDB->getNoteByType($type_id);
        include_once "View/note/list.php";
    }
}
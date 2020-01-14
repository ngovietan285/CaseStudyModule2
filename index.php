<?php
include_once "Model/note/Note.php";
include_once "Model/note/NoteDB.php";
include_once "Model/database/DBConnect.php";
include_once "Controller/NoteController.php";
include_once "Model/note_type/NoteType.php";
include_once "Model/note_type/NoteTypeDB.php";

$noteController = new NoteController();
?>

<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;
switch ($page) {
    case "detail";
        $noteController->noteDetail();
        break;
    case 'edit';
        $noteController->editNote();
        break;
    case 'delete';
        $noteController->deleteNote();
        break;
    case 'add';
        $noteController->addNote();
        break;
    default :
        if (isset($_GET['keyword'])) {
            $noteController->searchNoteByTitle();
        } elseif (isset($_GET['type_id']) && $_GET['type_id'] != null) {
            $noteController->getNoteByType();
        } else {
            $noteController->index();
        }
        break;
}

?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>

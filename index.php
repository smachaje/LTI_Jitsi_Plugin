<?PHP

$room = $_POST['context_title']." Room(".substr(hash("sha512", $_POST['context_title'].$_POST['context_label']),0,9).")";
header("location: https://meet.jit.si/".$room);

?>

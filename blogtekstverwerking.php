<?php
if(isset($_POST['name']) && isset($_POST['blogpost'])) {
    $data = $_POST['name'] . '' . $_POST['blogpost'] . " <br>\r\n";
    $ret = file_put_contents('mijnblog.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('Er ging iets mis met het schrijven van dit bestand');
    }
    else {
        echo " blogpost opgeslagen!!";
        header('Location: index2.php');
    }
}
else {
   die('geen data om te verwerken');
}

?>

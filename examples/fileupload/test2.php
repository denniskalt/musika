<?php

#mail('test@example.com', 'Titel', 'Lorem ipsum dolor sit amet');

var_Dump($_REQUEST);
var_dump($_FILES);

mkdir('/tmp/my_files');

// TODO: Dateiendung überprüfen!
$md5 =  md5(file_get_contents($_FILES['file']['tmp_name']));
move_uploaded_file($_FILES['file']['tmp_name'], '/tmp/my_files/'. $md5 .'.png');
?>


<html>
    <body>
        <form method="post" enctype="multipart/form-data">
            <input name="file" type="file">
            <button>Abschicken</button>
        </form>
        <img src="showfile.php?id=<?= $md5 ?>">
    </body>
</html>

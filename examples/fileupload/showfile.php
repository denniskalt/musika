<?php

header('Content-Type: image/png');

readfile('/tmp/my_files/'. $_REQUEST['id'] .'.png');

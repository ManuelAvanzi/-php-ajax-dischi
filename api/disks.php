<?php

include "../database/db-dischi.php";

header("Content-Type: application/json");


echo json_encode($disks);

?>



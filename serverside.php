<?php

header("Content-type: application/json");

print_r(json_encode( $_FILES['file'] ));


?>
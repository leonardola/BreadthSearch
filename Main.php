<?php
use Files\Files;
/**
 * Created by IntelliJ IDEA.
 * User: leonardoalbuquerque
 * Date: 27/05/15
 * Time: 12:44
 */

//$files = new Files();


$data = array(
    "a"=>array(
        "a"=>0,
        "b"=>1
    ),
    "b"=>array(
        "a"=>0,
        "b"=>0
    )
);

echo json_encode($data,true);
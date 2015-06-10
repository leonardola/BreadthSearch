<?php
/**
 * Created by IntelliJ IDEA.
 * User: leonardoalbuquerque
 * Date: 09/06/15
 * Time: 22:21
 */

require_once("Files.php");
require_once("BreadthSearch.php");

header('Content-Type: application/json');

$files = new Files();

$graph = $files->getData();

$graphObj = new BreadthSearch($graph);
$output = [];

foreach($graph as $firstElement => $element){
    $output[] = $graphObj->doBreathSearch($firstElement);
}

echo json_encode($output,JSON_FORCE_OBJECT);



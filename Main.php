<?php


/**
 * Created by IntelliJ IDEA.
 * User: leonardoalbuquerque
 * Date: 27/05/15
 * Time: 12:44
 */

require_once("Files.php");
require_once("BreathSearch.php");


$files = new Files();

$graph = $files->getData();

echo "qual nó começar? ";

$firstElement = readline();

echo $firstElement . "\n";


$graphObj = new BreadthSearch();

$graphObj->doSearch($firstElement,$graph);
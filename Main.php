<?php


/**
 * Created by IntelliJ IDEA.
 * User: leonardoalbuquerque
 * Date: 27/05/15
 * Time: 12:44
 */

require_once("Files.php");
require_once("Graph.php");


$files = new Files();

$graph = $files->getData();

echo "qual nó começar? ";

$firstElement = readline();

echo $firstElement;


$graphObj = new Graph();

$graphObj->doSearch($firstElement,$graph);
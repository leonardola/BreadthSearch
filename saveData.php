<?php
/**
 * Created by IntelliJ IDEA.
 * User: leonardoalbuquerque
 * Date: 09/06/15
 * Time: 21:46
 */
require_once("Files.php");

$matrix = $_POST['matrix'];

$files = new Files();

$files->saveMatrix($matrix);
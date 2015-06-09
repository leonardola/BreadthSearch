<?php
/**
 * Created by IntelliJ IDEA.
 * User: leonardoalbuquerque
 * Date: 27/05/15
 * Time: 12:13
 */


/**
 * Esta classe
 * Class Files
 * @package Files
 */
class Files {

   private $inputFile;

    public function __construct(){

        $this->inputFile = "input.json";

    }

    /**
     * pega os dados do arquivo
     * @return string
     */
    public function getData(){

        $data = file_get_contents($this->inputFile);

        return json_decode($data,true);

    }

}
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

   private $file;

    public function __construct(){

        //$this->inputFile = "input.json";
        $this->file = "testeInput.json";

    }

    /**
     * pega os dados do arquivo
     * @return string
     */
    public function getData(){

        $data = file_get_contents($this->file);

        return json_decode($data,true);

    }

    public function saveMatrix($matrix){
        $matrix = $this->matrixIntVal($matrix);
        $matrix = json_encode($matrix,JSON_FORCE_OBJECT);
        file_put_contents($this->file,$matrix);
    }

    private function matrixIntVal($matrix){

        foreach($matrix as &$line){
            foreach($line as &$column){
                $column = intval($column);
            }
        }
        return $matrix;
    }

}
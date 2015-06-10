<?php
/**
 * Created by IntelliJ IDEA.
 * User: leonardoalbuquerque
 * Date: 29/05/15
 * Time: 09:41
 */

class BreadthSearch {

    private $buffer = [];
    private $output = [];
    private $matrix = [];
    private $needle;

    public function __construct($matrix){
        $this->matrix = $matrix;
    }

    /**
     * @param $needle
     * @param $matrix
     */
    public function doBreathSearch($needle){
        $this->needle = $needle;

        $this->addNeedleAsFirstElement();

        while(!$this->isBufferEmpty()){

            foreach($this->matrix[$this->buffer[0]] as $node => $nodeIsConnected){

                if($nodeIsConnected && !$this->nodeWasVisited($node)){
                    $this->addNode($node);
                }
            }

            $this->removeActualElementFromBuffer();

        }

        $this->removeNeedleFromOutputIfNeeded();

        $this->showOutput();

    }


    private function addNeedleAsFirstElement(){
        $this->buffer = [$this->needle];
        $this->output = [$this->needle];
    }

    private function isBufferEmpty(){
        return sizeof($this->buffer) == 0 ;
    }

    private function nodeWasVisited($node){
        return in_array($node,$this->buffer) || in_array($node,$this->output);
    }

    private function addNode($node){
        $this->buffer[] = $node;
        $this->output[] = $node;
    }

    private function removeActualElementFromBuffer(){
        array_shift($this->buffer);
    }

    private function removeNeedleFromOutputIfNeeded(){
        if($this->isNeedledLoopback()){
            array_shift($this->output);
        }
    }

    private function isNeedledLoopback(){
        return !$this->matrix[$this->needle][$this->needle];
    }

    private function showOutput(){
        print_r($this->output);
    }
}
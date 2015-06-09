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

    /**
     * @param $needle
     * @param $matrix
     */
    public function doBreathSearch($needle,$matrix){

        $this->addNeedleAsFirstElement($needle);

        while(!$this->isBufferEmpty()){

            foreach($matrix[$this->buffer[0]] as $node => $nodeIsConnected){

                if($nodeIsConnected && !$this->nodeWasVisited($node)){
                    $this->addNode($node);
                }
            }

            $this->removeActualElementFromBuffer();

        }

        $this->removeNeedleFromOutput();

        $this->showOutput();

    }


    private function addNeedleAsFirstElement($needle){
        $this->buffer = [$needle];
        $this->output = [$needle];
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

    private function removeNeedleFromOutput(){
        array_shift($this->output);
    }

    private function showOutput(){

        print_r($this->output);

    }
}
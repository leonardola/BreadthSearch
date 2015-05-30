<?php
/**
 * Created by IntelliJ IDEA.
 * User: leonardoalbuquerque
 * Date: 29/05/15
 * Time: 09:41
 */

class Graph {

    /**
     * @param $needle
     * @param $matrix
     */
    public function doSearch($needle,$matrix){

        $buffer = [$needle];

        $output = [$needle];

        while(sizeof($buffer) > 0){

            foreach($matrix[$buffer[0]] as $key => $column){

                if($column){

                    if(!in_array($key,$buffer) && !in_array($key,$output)){

                        $buffer[] = $key;
                        $output[] = $key;

                    }
                }
            }

            array_shift($buffer);

        }

        print_r($output);

    }

}
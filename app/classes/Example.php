<?php


namespace App\classes;
class Example
{
    public $i;
    public function index()
    {
//        echo "Hello World";

        /*
         * Single Line
         * Conditional
                *IF
                *IF ELSE
                * IF ELSE IF
                * SWITCH
         * Repeated
                * FOR
                * WHILE
                * DO WHILE
                * FOREACH
         */

//        $x = 10;
//        echo $x;

        // FOR LOOP//
//        for($this->i = 50; $this->i < 71; $this->i++)
//        {
//            echo $this->i. '<br/>';
//        }

//        //WHILE loop//
//        $this->i = 10;
//        while ($this->i < 20)
//        {
//            echo $this->i ;
//            $this->i++;
//        }

        // DO WHILE//
        $this->i = 10;
        do{
            echo $this->i;
            $this->i++;
        } while($this->i > 20);
    }
}


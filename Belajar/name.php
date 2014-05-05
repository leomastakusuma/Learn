<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of name
 *
 * @author leomasta
 */
class name {
    //put your code here
    protected $_a='BCD';
    
    public function __get($name) {
        echo $this->_a=$name;
        
    }
    
}
$a = new name;

        

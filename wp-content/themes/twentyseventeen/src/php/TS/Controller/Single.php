<?php

namespace TS\Controller;

class Single{
    
    public function holaMundo(){
        
        $args = [];
        
        $args['mensaje'] = 'Rafael';
        return $args;
    }
    
}
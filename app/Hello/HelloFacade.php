<?php 

namespace App\Hello;

use illuminate\Support\Facades\Facade;

class HelloFacade extends Facade{


    protected static function getFacadeAccessor(){
       return 'coca-cola';
    } 

}
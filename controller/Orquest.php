<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 16/08/15
 * Time: 02:33 PM
 */

// Numero tocayoMiguel :: 3208169930

class OrquestController{
    private $message = array(
        'Esto es lo maximo.',
        'lorem ipsum dolor.',
        'Colombia es colombia y de lo mejor.',
        'Caracoles de colores que deben mimarse.',
    );

    function __contruct(){
        /*$this->message = array(
            'Esto es lo maximo.',
            'Lorem ipsum dolor.',
            'Colombia es colombia y de lo mejor.',
            'Caracoles de colores que deben mimarse.',
        );*/
    }

    function setMessage( $message = NULL ){
        if( !empty( $message ) ){
            $this->message[] = $message;
        }
    }

    function getMessages(){
        krsort( $this->message );
        return $this->message;
    }
}

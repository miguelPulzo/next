<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 16/08/15
 * Time: 02:58 PM
 */
    $obj = new OrquestController();

    if( isset($_POST['message']) ){
        $obj->setMessage( $_POST['message'] );
    }
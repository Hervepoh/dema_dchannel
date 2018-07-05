<?php
    function input($id){
        $value= isset($_POST[$id]) ? $_POST[$id] :'';
        return "<input type='text' name='username' id='$id' class='form-control' value='$value'>" ;
    }
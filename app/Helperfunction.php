<?php
    function flash($message, $class='info') {
        session()->flash( 'message' ,$message);
    }

<?php
    function debugOutput($array){

        $clean = htmlspecialchars( print_r( $array, true ) );

        echo"<pre>".$clean."</pre>";

    }
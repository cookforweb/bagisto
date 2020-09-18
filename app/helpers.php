<?php

if ( !function_exists( 'last_modification_timestamp'))
{

    function last_modification_timestamp($file)
    {
        if (file_exists($file)) {
            return filemtime($file);
        }
    }
}

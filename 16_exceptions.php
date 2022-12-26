<?php

/* ---------- Exceptions ---------- */

/*
PHP has an exception model similar to that of other
programming languages. An exception can be thrown, and
caught within PHP. Code may be surrounded in a try 
block, to facilitate the catching of potential exceptions.
Each try must have at least one corresponding catch of 
finally block.
*/

function inverse($x)
{
    if (!$x) {
        throw new exception("division by zero");
    }

    return 1 / $x;
}

try {
    echo inverse(0);
} catch (Exception $e) {
    echo "Caught Exception {$e->getMessage()}";
}

<?php

class MyErEx extends Exception {}
class HttpEx extends Exception {}

function foo()
{
    try {
        throw new MyErEx("ERROR\n");

    } catch(HttpEx $e) {
        echo "error_1\n";
        echo $e->getMessage();
        return false;
    }
    return true;
}

try {
    echo "start\n";
    var_dump(foo());
    echo "end\n";
} catch (MyErEx $e) {
    echo $e->getMessage();
}

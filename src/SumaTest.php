<?php

require_once '../src/Suma.php';

function testSumar() {
    $suma = new Suma();
    $result = $suma->sumar(1, 2);
    if ($result === 3) {
        return "Test sumar: PASSED";
    } else {
        return "Test sumar: FAILED";
    }
}

<?php
    require("elevador.php");

    Elevador::entrar(5,2);
    echo "<hr>";
    Elevador::inicializar(0,5,0,6);
    Elevador::setSubir(4);
    echo"<hr>".Elevador::getSubir();
    echo "<br>";
    Elevador::setDescer(2);
    echo"<hr>".Elevador::getDescer();
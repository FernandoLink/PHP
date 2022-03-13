<?php
require_once 'Lobo.php';
class Cachorro extends Lobo
{
    public function emitirSom()
    {
        echo "<p>Au!Au!Au!</p>";
    }
    public function enterrarOsso()
    {
        echo "<p>Enterrando o Osso.</p>";
    }
    public function abanarRabo()
    {
        echo "<p>Abanando o Rabo.</p>";
    }   
}

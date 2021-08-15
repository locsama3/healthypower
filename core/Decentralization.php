<?php
abstract class Decentralization {
    
    public $db = null;
    abstract public function handle($url);
}
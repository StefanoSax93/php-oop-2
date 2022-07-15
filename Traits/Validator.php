<?php

trait Validator
{
    private function validateStrings($str)
    {
        if (!isset($str) || strlen(trim($str)) === 0 || !is_string($str)) {
            throw new Exception("Il testo inserito non è valido");
        }
    }
}

<?php

namespace App;

interface IProceda
{
    public function encode(array $file);
    public function decode(array $file);
}
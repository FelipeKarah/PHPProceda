<?php

namespace FCunha;

interface IProceda
{
    public function encode(array $file);
    public function decode(array $file);
}
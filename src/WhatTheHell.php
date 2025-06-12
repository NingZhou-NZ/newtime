<?php

namespace app;

class WhatTheHell
{
    public $new;
    
    public function __construct()
    {
        $this->new = 1;
    }

    public function out()
    {
        echo $this->new;
    }
}
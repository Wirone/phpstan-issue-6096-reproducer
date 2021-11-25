<?php

declare(strict_types=1);

# Comment it and error disappears
$array = ['y'];

class X
{
    public function __construct()
    {
        (new \Y())->get();
    }
}

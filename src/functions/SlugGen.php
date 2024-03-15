<?php

namespace wdd\slug\functions;

use Illuminate\Support\Str;

class SlugGen
{
    public function generate(String $string)
    {
        return Str::slug($string);
    }
}

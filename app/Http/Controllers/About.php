<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class About extends Controller
{
    public function main() 
    {
      return 'About page from controller'; 
    }
    
    public function anotherMain($name)
    {
        return "<pre>--{$name}--</pre>";
    }
}

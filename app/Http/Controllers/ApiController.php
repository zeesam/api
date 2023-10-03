<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function testapi()
    {
      return $data = [
        'name' => 'S Govind Singh',
        'designation' => 'System Analyst',
        'phone' => '8787454522'
      ];
    }
}

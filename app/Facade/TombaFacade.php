<?php
namespace App\Facade;

use Illuminate\Support\Facades\Facade;
use App\Facade\Tomba;

class TombaFacade extends Facades
{
  protected static function getFacadeAccessor()
  {
    return 'Tomba';
  }
}

  ?>

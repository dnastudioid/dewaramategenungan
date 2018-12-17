<?php

namespace App\Lib;

use Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class Helper {

  public static function url($u = ''){
    $url = 'master/';
    if (Auth::user()->role == 'admin') {
      $url = 'admin/';
    }
    return url($url.$u);
  }

  public static function type(){
    $type = 'Master';
    if (Auth::user()->role == 'Admin') {
      $type = 'Admin';
    }
    return $type;
  }
}

<?php

namespace App\Http\Controllers;

class AdminGetPageController extends Controller{

  public function getPages($action){
    return view($action);
  }
}

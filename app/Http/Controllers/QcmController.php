<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class QcmController extends Controller
{
  public function traiterRequete(){
    if (isset($_POST)){
      if (file_exists("https://parrainage.herokuapp.com/xml/qcm.xml")) {
        $xml = simplexml_load_file("https://parrainage.herokuapp.com/xml/qcm.xml");
        $xml->addChild("QCM");
      }
      else{
        $xml = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><QCM></QCM>');
        echo $xml->asxml();
      }
  }
  }
  public function show(){
    return view('home');
  }
}
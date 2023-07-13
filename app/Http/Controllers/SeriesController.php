<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request) 
    {
        $request -> get('id');
        $series = [
            'Punisher',
            'Lost',
            'The Witcher'
      ];
  
      $html = '<ul>';
      foreach($series as $serie) {
         $html .= "<li>$serie</li>";
      }
      $html .= '</ul>';
  
      return $html;
    }
}
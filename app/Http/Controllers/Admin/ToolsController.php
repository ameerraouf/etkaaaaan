<?php

namespace App\Http\Controllers\tools;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ToolsController extends Controller
{

      static function html_special($string)
      {
       $string = nl2br($string);
       $string = str_replace("\n", "", $string);
       $string = str_replace("\r", "", $string);
       if(preg_match_all('/\<pre\>(.*?)\<\/pre\>/', $string, $match))
       {
           foreach($match as $a){
               foreach($a as $b){
               $string = str_replace('<pre>'.$b.'</pre>', "<pre>".str_replace("<br />", PHP_EOL, $b)."</pre>", $string);
               }
           }
       }
       $string = str_replace("<br /><br /><br /><pre>", '<br /><br /><pre>', $string);
       $string = str_replace("</pre><br /><br />", '</pre><br />', $string);
       $string = str_replace("<br /><br /><ul>", '<br /><ul>', $string);
       $string = str_replace("</ul><br /><br />", '</ul><br />', $string);
       $string = str_replace("<ul><br />", '<ul>', $string);
       $string = str_replace("<br /></ul>", '</ul>', $string);
       $string = str_replace("<br /><br /><ol>", '<br /><ol>', $string);
       $string = str_replace("</ol><br /><br />", '</ol><br />', $string);
       $string = str_replace("<ol><br />", '<ol>', $string);
       $string = str_replace("<br /></ol>", '</ol>', $string);
       $string = str_replace("<br /><li>", '<li>', $string);
       $string = str_replace("</li><br />", '</li>', $string);
       return $string;
      }
}

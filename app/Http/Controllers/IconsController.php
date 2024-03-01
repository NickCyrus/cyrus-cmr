<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class IconsController extends Controller
{
    //
    var $path = '/img/icons/pack/';
    
    private function loadIcons(){
           $list  = [];
           $html  = ''; 
           $icons = glob(public_path($this->path.'*.svg'));
           foreach($icons as $icon){
                $list[] = ['icon'=>basename( $icon, '.svg'), 'name'=>$this->path.basename( $icon)];
            //    $html .= $this->prepareComponent( public_path($this->path.basename( $icon)) , basename( $icon, '.svg'));
           }
           /*
           $file = fopen(public_path($this->path)."icon.txt", "w");
           fwrite($file, $html . PHP_EOL);
           fclose($file);
 */
           return $list;
          
    }

    function prepareComponent( $file , $name)  {
        $content = file_get_contents($file);
        return  str_replace('<svg','<svg v-else-if="name === \''.$name.'\'"', $content);
    }

    /*

    $file = fopen("archivo.txt", "w");
    fwrite($file, "Esto es una nueva linea de texto" . PHP_EOL);
    fwrite($file, "Otra más" . PHP_EOL);
    fclose($file);
    */

    public function index(){
       
        return Inertia::render('Icons/Index', ['list_icons'=>$this->loadIcons()]);
    }

}

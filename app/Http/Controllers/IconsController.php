<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
 

class IconsController extends Controller
{
    //
    var $path = '/img/icons/pack/';
    
    private function loadIcons(){
            
            $contents = file_get_contents(storage_path('/json/icon.json'));
            return json_decode($contents);
           /* 
           $list  = [];
           $html  = ''; 
           $icons = glob(public_path($this->path.'*.svg'));
           foreach($icons as $icon){
                $nameBase =  str_replace(" ","-",basename( $icon, '.svg'));
                $list[] = ['icon'=>$nameBase, 'name'=>$this->path.basename($icon)];
                $json[] = ['icon'=>$nameBase];
                // $html .= $this->prepareComponent( public_path($this->path.basename( $icon)) , $nameBase );
           }
            
           $this->createJson($json);
           // return $list;
           /*
           $file = fopen(public_path($this->path)."icon.txt", "w");
           fwrite($file, $html . PHP_EOL);
           fclose($file);
           */
           // return $list;
          
    }
    
    function createJson($array = []){

        $json =  storage_path('/json/')."icon.json";
        @unlink($json);

        $file = fopen($json, "w");
        fwrite($file, json_encode($array) . PHP_EOL);
        fclose($file);

        return $json;
    }

    function prepareComponent( $file , $name)  {
        $content = file_get_contents($file);
        return  str_replace('<svg','<svg v-else-if="name === \''.$name.'\'"', $content);
    }

     
    public function index(){
       
        return Inertia::render('Icons/Index', ['list_icons'=>$this->loadIcons()]);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Module extends Functions
{
    use HasFactory;
    use LogsActivity;
    
    protected $guarded = [];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logOnly(['*']);;
    }


    public function getSubmenuAttribute(){

  
        return Module::whereIn('id', RolModulePermission::where('rol_id', user()->rol_id )
                                    ->IsTrue('view')
                                    ->pluck('module_id')
                              )
        ->where('parent_id', $this->id )
        ->orderBy('order','DESC')->get()
        ->map(function($item){
            return [
                'name' => $item->name,
                'icon' => $item->icon,
                'slug' => $item->slug
            ];
        }) ?? null;
    }
    
}

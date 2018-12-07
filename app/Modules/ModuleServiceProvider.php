<?php
namespace App\Modules;

class ModuleServiceProvider extends  \Illuminate\Support\ServiceProvider{
    public function boot(){
        $modules = array_map('basename', \File::directories(__DIR__));
        foreach ($modules as $module) {
            $this->bootRoutes($module);
            $this->bootViews($module);
        }
    }

    public function register(){}

    public function bootRoutes($module){
        if(file_exists(__DIR__.'/'.$module.'/Routes/web.php')){
            $this->loadRoutesFrom(__DIR__.'/'.$module.'/Routes/web.php');
        }
        if(file_exists(__DIR__.'/'.$module.'/Routes/api.php')){
            $this->loadRoutesFrom(__DIR__.'/'.$module.'/Routes/api.php');
        }
    }

    public function bootViews($module){
        if(is_dir(__DIR__.'/'.$module.'/Resources/Views')) {
            $this->loadViewsFrom(__DIR__.'/'.$module.'/Resources/Views', $module);
        }
    }
}

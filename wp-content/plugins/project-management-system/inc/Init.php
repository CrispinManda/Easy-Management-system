<?php
/**
 * @package PMS
 */

namespace Inc;

final class Init{

    public static function getClasses(){
        return[
            Base\Controller::class,
            Base\Enqueue::class,
            Pages\ExternalApi::class,
            Pages\CPT::class,
            Pages\Roles::class,
            Pages\CustomFunctions::class,
            Base\Functions::class,
        ];
    }

    public static function register_services(){
        foreach(self::getClasses() as $classes){
            $service = self::instantiate($classes);
            if(method_exists($service, 'register')){
                $service->register();
            }
        }
    }

    public static function instantiate($classes){
        $service = new $classes();
        return $service;
    }
}
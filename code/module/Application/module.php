<?php
namespace Application;

class module 
{
//     function onBootstrap(Event $e)
//     {
//     }
    public function getAutoloaderConfig()
    {
        return array(
                'Zend\Loader\ClassMapAutoloader' => array(
                        __DIR__ . '/autoload_classmap.php',
                ),
                'Zend\Loader\StandardAutoloader' => array(
                        'namespaces' => array(
                                __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                        ),
                ),
        );
    }
    
    public function getConfig()
    {
        return include __DIR__ . '/Config/module.config.php';
    }
    
//     public function getServiceConfig()
//     {
//         return include __DIR__ . '/Config/service.config.php';
//     }
    
//     public function getViewHelperConfig()
//     {
//         return include __DIR__ . '/Config/viewhelper.config.php';
//     }
    
//     public function getControllerConfig()
//     {
//         return include __DIR__ . '/Config/controller.config.php';
//     }
}
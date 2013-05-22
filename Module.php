<?php

namespace libphonenumbers-zf2;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;

class Module implements AutoloaderProviderInterface
{
    public function getAutoloaderConfig()
    {
        return array(
            
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                   'com\google\i18n\phonenumbers' => __DIR__ . '/lib/'
                ),
            ),
        );
    }
}

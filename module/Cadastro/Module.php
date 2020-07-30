<?php
namespace Cadastro;

use Zend\Mail\Transport\Smtp as SmtpTransport,
    Zend\Mail\Transport\SmtpOptions,
    Zend\Mvc\MvcEvent,
    Zend\ModuleManager\ModuleManager;

class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
       
    public function getServiceConfig()
    {
        return array(
            'factories' =>  array(
                'Cadastro\Service\Usuario' => function($sm) {
                    $userService = new Service\Usuario($sm->get('Doctrine\ORM\EntityManager'),
                        $sm->get('Cadastro\Mail\Transport'),
                        $sm->get('View'));

                    $userService->setConfigurationMail($sm->get('Config'));

                    return $userService;
                },
                'Cadastro\Mail\Transport' => function($sm) {
                    $config = $sm->get('Config');

                    $transport = new SmtpTransport;
                    $options = new SmtpOptions($config['mail']);
                    $transport->setOptions($options);

                    return $transport;
                }
            )
        );
    }

    public function getViewHelperConfig(){

        return array(
            'invokables' => array()
        );
    }
}

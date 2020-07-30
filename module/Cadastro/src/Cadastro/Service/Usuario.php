<?php
namespace Cadastro\Service;

use Base\Service\AbstractService;
use Doctrine\ORM\EntityManager;
use Zend\Stdlib\Hydrator;
use Zend\Mail\Transport\Smtp as SmtpTransport;
use Base\Mail\Mail;

class Usuario extends AbstractService
{
    protected $transport;
    protected $view;
    protected $configurationMail;
    
    public function __construct(EntityManager $em, SmtpTransport $transport, $view) 
    {
        parent::__construct($em);
        
        $this->entity = 'Cadastro\Entity\Usuario';
        $this->transport = $transport;
        $this->view = $view;
    }

    public function sendConfirm($data){
        /**
         * @var \Cadastro\Entity\Usuario $entity
         */
        $entity = $this->em
            ->getRepository('Cadastro\Entity\Usuario')
            ->findOneByEmail($data['email']);

        $data = array(
            'from'  =>  array(
                $this->getConfigurationMail()['mail']['connection_config']['from'] =>
                    $this->getConfigurationMail()['mail']['connection_config']['name_from']
            ),
            'to'    =>  array(
                $entity->getEmail() => $entity->getNome()
            ),
            'id'   =>  $entity->getId(),
            'activeKey' =>  $entity->getActivationKey(),
            'nome' => $entity->getNome(),
            'email' => $entity->getEmail()
        );

        $subject = 'Cadastro efetuado no sistema';
        $return = $this->sendMail($data,$subject,'add-user');

        return $return;
    }

    public function sendNotificacao($data){
        /**
         * @var \Cadastro\Entity\Usuario $entity
         */
        $entity = $this->em->getRepository('Cadastro\Entity\Usuario')->findOneByEmail($data['email']);

        $data = array(
            'to'  =>  array(
                $this->getConfigurationMail()['mail']['connection_config']['from'] =>
                    $this->getConfigurationMail()['mail']['connection_config']['name_from']
            ),
            'from'    =>  array(
                $entity->getEmail() => $entity->getNome()
            ),
            'id'   =>  $entity->getId(),
            'activeKey' =>  $entity->getActivationKey(),
            'nome' => $entity->getNome(),
            'email' => $entity->getEmail()
        );

        $subject = 'Novo usuário cadastrado no sistema';
        $return = $this->sendMail($data,$subject,'notify-user');

        return $return;
    }

    public function activate($key)
    {
        /**
         * @var \Cadastro\Entity\Usuario $user
         */
        $repo = $this->em->getRepository('Cadastro\Entity\Usuario');

        $user = $repo->findOneByActivationKey($key);

        if($user)
        {
            $user->setAtivo(true);

            $this->em->persist($user);
            $this->em->flush();

            return $user;
        }else{
            return false;
        }
    }

    public function lostPassword(array $data){
        $em = $this->em;
        /**
         * @var \Cadastro\Entity\Usuario $db_usuario
         */
        $db_usuario = $em->getRepository('Cadastro\Entity\Usuario')->findOneByEmail($data['email']);

        if($db_usuario){
            $novaSenha = $this->geraSenha();

            $db_usuario->setSenha($novaSenha);

            $em->persist($db_usuario);
            $em->flush();

            $data = array(
                'from'  =>  array(
                    $this->getConfigurationMail()['mail']['connection_config']['from'] =>
                    $this->getConfigurationMail()['mail']['connection_config']['name_from']
                ),
                'to'    =>  array(
                    $db_usuario->getEmail() => $db_usuario->getNome()
                ),
                'nome' => $db_usuario->getNome(),
                'senha' => $novaSenha
            );

            $subject = 'Recuperacao de senha';
            $return = $this->sendMail($data,$subject,'mail-lostPassword');

            if($return['result']){
                $return['msg'] = "Sua senha foi recuperada com sucesso, por favor entre na sua caixa de entrada para obter sua nova senha!";
            }

            return $return;
        }else{
            return array(
                'result'    =>  false,
                'msg'       =>  "Usuário não encontrado"
            );
        }
    }

    public function geraSenha($tamanho = 8, $maiusculas = true, $numeros = true, $simbolos = false)
    {
        // Caracteres de cada tipo
        $lmin = 'abcdefghijklmnopqrstuvwxyz';
        $lmai = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $num = '1234567890';
        $simb = '!@#$%*-';
        // Variáveis internas
        $retorno = '';
        $caracteres = '';
        // Agrupamos todos os caracteres que poderão ser utilizados
        $caracteres .= $lmin;
        if ($maiusculas) $caracteres .= $lmai;
        if ($numeros) $caracteres .= $num;
        if ($simbolos) $caracteres .= $simb;
        // Calculamos o total de caracteres possíveis
        $len = strlen($caracteres);
        for ($n = 1; $n <= $tamanho; $n++) {
            // Criamos um número aleatório de 1 até $len para pegar um dos caracteres
            $rand = mt_rand(1, $len);
            // Concatenamos um dos caracteres na variável $retorno
            $retorno .= $caracteres[$rand-1];
        }
        return $retorno;
    }

    public function getConfigurationMail()
    {
        return $this->configurationMail;
    }

    public function setConfigurationMail($configurationMail)
    {
        $this->configurationMail = $configurationMail;
    }

    public function sendMail($data,$subject, $template){
        $mail = new Mail($this->transport, $this->view,$template);
        $mail->setData($data)->prepare();
        $result = $mail->send($this,$subject);

        return $result;
    }
}

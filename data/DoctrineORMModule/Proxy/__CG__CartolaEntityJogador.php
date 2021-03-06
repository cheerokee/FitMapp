<?php

namespace DoctrineORMModule\Proxy\__CG__\Cartola\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Jogador extends \Cartola\Entity\Jogador implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Cartola\\Entity\\Jogador' . "\0" . 'id', '' . "\0" . 'Cartola\\Entity\\Jogador' . "\0" . 'nome', '' . "\0" . 'Cartola\\Entity\\Jogador' . "\0" . 'apelido', '' . "\0" . 'Cartola\\Entity\\Jogador' . "\0" . 'imagem', '' . "\0" . 'Cartola\\Entity\\Jogador' . "\0" . 'numero_jogo', '' . "\0" . 'Cartola\\Entity\\Jogador' . "\0" . 'media', '' . "\0" . 'Cartola\\Entity\\Jogador' . "\0" . 'preco', '' . "\0" . 'Cartola\\Entity\\Jogador' . "\0" . 'pontos', '' . "\0" . 'Cartola\\Entity\\Jogador' . "\0" . 'slug', '' . "\0" . 'Cartola\\Entity\\Jogador' . "\0" . 'clube', '' . "\0" . 'Cartola\\Entity\\Jogador' . "\0" . 'posicao', '' . "\0" . 'Cartola\\Entity\\Jogador' . "\0" . 'status'];
        }

        return ['__isInitialized__', '' . "\0" . 'Cartola\\Entity\\Jogador' . "\0" . 'id', '' . "\0" . 'Cartola\\Entity\\Jogador' . "\0" . 'nome', '' . "\0" . 'Cartola\\Entity\\Jogador' . "\0" . 'apelido', '' . "\0" . 'Cartola\\Entity\\Jogador' . "\0" . 'imagem', '' . "\0" . 'Cartola\\Entity\\Jogador' . "\0" . 'numero_jogo', '' . "\0" . 'Cartola\\Entity\\Jogador' . "\0" . 'media', '' . "\0" . 'Cartola\\Entity\\Jogador' . "\0" . 'preco', '' . "\0" . 'Cartola\\Entity\\Jogador' . "\0" . 'pontos', '' . "\0" . 'Cartola\\Entity\\Jogador' . "\0" . 'slug', '' . "\0" . 'Cartola\\Entity\\Jogador' . "\0" . 'clube', '' . "\0" . 'Cartola\\Entity\\Jogador' . "\0" . 'posicao', '' . "\0" . 'Cartola\\Entity\\Jogador' . "\0" . 'status'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Jogador $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getNome()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNome', []);

        return parent::getNome();
    }

    /**
     * {@inheritDoc}
     */
    public function setNome($nome)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNome', [$nome]);

        return parent::setNome($nome);
    }

    /**
     * {@inheritDoc}
     */
    public function getApelido()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApelido', []);

        return parent::getApelido();
    }

    /**
     * {@inheritDoc}
     */
    public function setApelido($apelido)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApelido', [$apelido]);

        return parent::setApelido($apelido);
    }

    /**
     * {@inheritDoc}
     */
    public function getImagem()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImagem', []);

        return parent::getImagem();
    }

    /**
     * {@inheritDoc}
     */
    public function setImagem($imagem)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImagem', [$imagem]);

        return parent::setImagem($imagem);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumeroJogo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumeroJogo', []);

        return parent::getNumeroJogo();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumeroJogo($numero_jogo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumeroJogo', [$numero_jogo]);

        return parent::setNumeroJogo($numero_jogo);
    }

    /**
     * {@inheritDoc}
     */
    public function getMedia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMedia', []);

        return parent::getMedia();
    }

    /**
     * {@inheritDoc}
     */
    public function setMedia($media)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMedia', [$media]);

        return parent::setMedia($media);
    }

    /**
     * {@inheritDoc}
     */
    public function getPreco()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreco', []);

        return parent::getPreco();
    }

    /**
     * {@inheritDoc}
     */
    public function setPreco($preco)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPreco', [$preco]);

        return parent::setPreco($preco);
    }

    /**
     * {@inheritDoc}
     */
    public function getPontos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPontos', []);

        return parent::getPontos();
    }

    /**
     * {@inheritDoc}
     */
    public function setPontos($pontos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPontos', [$pontos]);

        return parent::setPontos($pontos);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', []);

        return parent::getSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlug($slug)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlug', [$slug]);

        return parent::setSlug($slug);
    }

    /**
     * {@inheritDoc}
     */
    public function getClube()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClube', []);

        return parent::getClube();
    }

    /**
     * {@inheritDoc}
     */
    public function setClube($clube)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClube', [$clube]);

        return parent::setClube($clube);
    }

    /**
     * {@inheritDoc}
     */
    public function getPosicao()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPosicao', []);

        return parent::getPosicao();
    }

    /**
     * {@inheritDoc}
     */
    public function setPosicao($posicao)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPosicao', [$posicao]);

        return parent::setPosicao($posicao);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus($status)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

}

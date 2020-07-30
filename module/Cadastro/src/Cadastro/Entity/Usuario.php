<?php
namespace Cadastro\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Stdlib\Hydrator;
/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity(repositoryClass="Cadastro\Entity\UsuarioRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Usuario
{
  /**
   * @var integer
   *
   * @ORM\Column(name="id", type="integer", nullable=false)
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="IDENTITY")
   */
  private $id;

  /**
   * @var \DateTime
   *
   * @ORM\Column(name="criado_em", type="datetime", nullable=false)
   */
  private $criado_em;

  /**
   * @var \DateTime
   *
   * @ORM\Column(name="atualizado_em", type="datetime", nullable=true)
   */
  private $atualizado_em;

  /**
   * @var string
   *
   * @ORM\Column(name="nome", type="string", length=255, nullable=false)
   */
  private $nome;

  /**
   * @var string
   *
   * @ORM\Column(name="telefone", type="string", length=255, nullable=true)
   */
  private $telefone;

  /**
   * @var string
   *
   * @ORM\Column(name="documento", type="string", length=255, nullable=true)
   */
  private $documento;

  /**
   * @var string
   *
   * @ORM\Column(name="senha", type="string", length=255, nullable=false)
   */
  private $senha;

  /**
   * @var string
   *
   * @ORM\Column(name="email", type="string", length=255, nullable=false)
   */
  private $email;

  /**
   * @var string
   *
   * @ORM\Column(name="imagem", type="string", length=255, nullable=true)
   */
  private $imagem;

  /**
   * @var string
   *
   * @ORM\Column(name="slug", type="string", length=255, nullable=true)
   */
  private $slug;

  /**
   * @var string
   *
   * @ORM\Column(name="id_pagarme", type="string", length=255, nullable=true)
   */
  private $id_pagarme;

  /**
   * @var string
   *
   * @ORM\Column(name="activation_key", type="string", length=255, nullable=true)
   */
  private $activation_key;

  /**
   * @var string
   *
   * @ORM\Column(name="ativo", type="boolean", nullable=true)
   */
  private $ativo;

  public function __construct(array $options = array())
  {
    (new Hydrator\ClassMethods)->hydrate($options, $this);

    $this->criado_em = new \DateTime("now");
    $this->atualizado_em = new \DateTime("now");

    $this->activation_key = md5(time());
  }

  /**
   * @return int
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * @param int $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }

  public function __toString()
  {
    return $this->getNome();
  }

  public function toArray()
  {
    return (new Hydrator\ClassMethods())->extract($this);
  }

  /**
   * @return \DateTime
   */
  public function getCriadoEm()
  {
    return $this->criado_em;
  }

  /**
   * @param \DateTime $criado_em
   */
  public function setCriadoEm($criado_em)
  {
    $this->criado_em = $criado_em;
  }

  /**
   * @return \DateTime
   */
  public function getAtualizadoEm()
  {
    return $this->atualizado_em;
  }

  /**
   * @param \DateTime $atualizado_em
   */
  public function setAtualizadoEm($atualizado_em)
  {
    $this->atualizado_em = $atualizado_em;
  }

  /**
   * @return string
   */
  public function getNome()
  {
    return $this->nome;
  }

  /**
   * @param string $nome
   */
  public function setNome($nome)
  {
    $this->nome = $nome;
  }

  /**
   * @return string
   */
  public function getTelefone()
  {
    return $this->telefone;
  }

  /**
   * @param string $telefone
   */
  public function setTelefone($telefone)
  {
    $this->telefone = $telefone;
  }

  /**
   * @return string
   */
  public function getDocumento()
  {
    return $this->documento;
  }

  /**
   * @param string $documento
   */
  public function setDocumento($documento)
  {
    $this->documento = $documento;
  }

  /**
   * @return string
   */
  public function getSenha()
  {
    return $this->senha;
  }

  /**
   * @param string $senha
   */
  public function setSenha($senha)
  {
    $this->senha = $this->encryptPassword($senha);
    return $this;
  }

  public function encryptPassword($senha)
  {
    return md5($senha);
  }

  /**
   * @return string
   */
  public function getEmail()
  {
    return $this->email;
  }

  /**
   * @param string $email
   */
  public function setEmail($email)
  {
    $this->email = $email;
  }

  /**
   * @return string
   */
  public function getSlug()
  {
    return $this->slug;
  }

  /**
   * @param string $slug
   */
  public function setSlug($slug)
  {
    $this->slug = $slug;
  }

  /**
   * @return string
   */
  public function getActivationKey()
  {
    return $this->activation_key;
  }

  /**
   * @param string $activation_key
   */
  public function setActivationKey($activation_key)
  {
    $this->activation_key = $activation_key;
  }

  /**
   * @return string
   */
  public function getAtivo()
  {
    return $this->ativo;
  }

  /**
   * @param string $ativo
   */
  public function setAtivo($ativo)
  {
    $this->ativo = $ativo;
  }

  /**
   * @return string
   */
  public function getImagem()
  {
    return $this->imagem;
  }

  /**
   * @param string $imagem
   */
  public function setImagem($imagem)
  {
    $this->imagem = $imagem;
  }

  /**
   * @return string
   */
  public function getIdPagarme()
  {
    return $this->id_pagarme;
  }

  /**
   * @param string $id_pagarme
   */
  public function setIdPagarme($id_pagarme)
  {
    $this->id_pagarme = $id_pagarme;
  }
}


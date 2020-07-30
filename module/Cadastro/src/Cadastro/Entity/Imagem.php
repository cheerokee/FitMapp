<?php
namespace Cadastro\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Imagem
 *
 * @ORM\Table(name="imagem")
 * @ORM\Entity
 */
class Imagem
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
   * @var string
   *
   * @ORM\Column(name="titulo", type="string", length=255, nullable=false)
   */
  private $titulo;

  /**
   * @var string
   *
   * @ORM\Column(name="src", type="string", length=255, nullable=false)
   */
  private $src;

  /**
   * @var string
   *
   * @ORM\Column(name="descricao", type="string", length=65000, nullable=true)
   */
  private $descricao;

  /**
   * @var \Cadastro\Entity\Exercicio
   *
   * @ORM\ManyToOne(targetEntity="Cadastro\Entity\Exercicio", fetch="LAZY")
   * @ORM\JoinColumns({
   *   @ORM\JoinColumn(name="exercicio_id", referencedColumnName="id",
   *      nullable=false,
   *      onDelete="CASCADE")
   * })
   */
  private $exercicio;

  public function __construct() {}

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

  /**
   * @return string
   */
  public function getTitulo()
  {
    return $this->titulo;
  }

  /**
   * @param string $titulo
   */
  public function setTitulo($titulo)
  {
    $this->titulo = $titulo;
  }

  /**
   * @return string
   */
  public function getSrc()
  {
    return $this->src;
  }

  /**
   * @param string $src
   */
  public function setSrc($src)
  {
    $this->src = $src;
  }

  /**
   * @return string
   */
  public function getDescricao()
  {
    return $this->descricao;
  }

  /**
   * @param string $descricao
   */
  public function setDescricao($descricao)
  {
    $this->descricao = $descricao;
  }

  /**
   * @return Exercicio
   */
  public function getExercicio()
  {
    return $this->exercicio;
  }

  /**
   * @param Exercicio $exercicio
   */
  public function setExercicio($exercicio)
  {
    $this->exercicio = $exercicio;
  }
}


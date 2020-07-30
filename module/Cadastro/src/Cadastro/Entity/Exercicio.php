<?php
namespace Cadastro\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Exercicio
 *
 * @ORM\Table(name="exercicio")
 * @ORM\Entity
 */
class Exercicio
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
   * @ORM\Column(name="nome", type="string", length=255, nullable=false)
   */
  private $nome;

  /**
   * @var string
   *
   * @ORM\Column(name="descricao", type="text", length=65000, nullable=true)
   */
  private $descricao;

  /**
   * @var \Cadastro\Entity\Categoria
   *
   * @ORM\ManyToOne(targetEntity="Cadastro\Entity\Categoria", fetch="LAZY")
   * @ORM\JoinColumns({
   *   @ORM\JoinColumn(name="categoria_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
   * })
   */
  private $categoria;

  public function __construct()
  {}

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
   * @return Categoria
   */
  public function getCategoria()
  {
    return $this->categoria;
  }

  /**
   * @param Categoria $categoria
   */
  public function setCategoria($categoria)
  {
    $this->categoria = $categoria;
  }
}


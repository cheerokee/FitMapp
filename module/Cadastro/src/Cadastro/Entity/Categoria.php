<?php
namespace Cadastro\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categoria
 *
 * @ORM\Table(name="categoria")
 * @ORM\Entity
 */
class Categoria
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
   * @ORM\Column(name="imagem", type="string", length=255, nullable=false)
   */
  private $imagem;

  /**
   * @var \Cadastro\Entity\Categoria
   *
   * @ORM\ManyToOne(targetEntity="Cadastro\Entity\Categoria", fetch="LAZY")
   * @ORM\JoinColumns({
   *   @ORM\JoinColumn(name="categoria_id", referencedColumnName="id", nullable=true, onDelete="CASCADE")
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


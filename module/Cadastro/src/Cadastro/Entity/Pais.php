<?php
namespace Cadastro\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pais
 *
 * @ORM\Table(name="pais")
 * @ORM\Entity
 */
class Pais
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
     * @ORM\Column(name="abreviacao", type="string", length=10, nullable=false)
     */
    private $abreviacao;

    /**
     * @var string
     *
     * @ORM\Column(name="ddi", type="integer", nullable=false)
     */
    private $ddi;

    public function __construct(array $options = array())
    {
        $this->criado_em = new \DateTime("now");
        $this->atualizado_em = new \DateTime("now");
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
    public function getAbreviacao()
    {
        return $this->abreviacao;
    }

    /**
     * @param string $abreviacao
     */
    public function setAbreviacao($abreviacao)
    {
        $this->abreviacao = $abreviacao;
    }

    /**
     * @return string
     */
    public function getDdi()
    {
        return $this->ddi;
    }

    /**
     * @param string $ddi
     */
    public function setDdi($ddi)
    {
        $this->ddi = $ddi;
    }
}


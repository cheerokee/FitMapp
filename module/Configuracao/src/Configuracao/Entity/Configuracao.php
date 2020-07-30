<?php
namespace Configuracao\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Configuracao
 *
 * @ORM\Table(name="configuracao")
 * @ORM\Entity
 */
class Configuracao
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
     * @ORM\Column(name="criado_em", type="datetime", nullable=true)
     */
    private $criado_em;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="atualizado_em", type="datetime", nullable=true)
     */
    private $atualizado_em;

    public function __construct(array $options = array()) {
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
}


<?php
namespace Acl\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Perfil
 *
 * @ORM\Table(name="perfil")
 * @ORM\Entity
 */
class Perfil
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
     * @var \Acl\Entity\Perfil
     *
     * @ORM\ManyToOne(targetEntity="Acl\Entity\Perfil", fetch="LAZY")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="heranca", referencedColumnName="id",
     *      nullable=true,
     *      onDelete="SET NULL")
     * })
     */
    private $herenca;

    /**
     * @var string
     *
     * @ORM\Column(name="admin", type="boolean", nullable=true)
     */
    private $admin;

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

    public function __toString()
    {
        return $this->getNome();
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
     * @return boolean
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * @param boolean $admin
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;
    }

    /**
     * @return Perfil
     */
    public function getHerenca()
    {
        return $this->herenca;
    }

    /**
     * @param Perfil $herenca
     */
    public function setHerenca($herenca)
    {
        $this->herenca = $herenca;
    }
}


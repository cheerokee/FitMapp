<?php
namespace Cadastro\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario_perfil")
 * @ORM\Entity
 */
class UsuarioPerfil
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
     * @var \Cadastro\Entity\Usuario
     *
     * @ORM\ManyToOne(targetEntity="Cadastro\Entity\Usuario", fetch="LAZY")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario_id", referencedColumnName="id",
     *      nullable=false,
     *      onDelete="CASCADE")
     * })
     */
    private $usuario;

    /**
     * @var \Acl\Entity\Perfil
     *
     * @ORM\ManyToOne(targetEntity="Acl\Entity\Perfil", fetch="LAZY")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="perfil_id", referencedColumnName="id",
     *      nullable=false,
     *      onDelete="CASCADE")
     * })
     */
    private $perfil;

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
        return $this->getUsuario() . ' - ' . $this->getPerfil();
    }

    /**
     * @return Usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param Usuario $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * @return \Acl\Entity\Perfil
     */
    public function getPerfil()
    {
        return $this->perfil;
    }

    /**
     * @param \Acl\Entity\Perfil $perfil
     */
    public function setPerfil($perfil)
    {
        $this->perfil = $perfil;
    }
}


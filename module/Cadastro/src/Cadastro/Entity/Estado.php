<?php
namespace Cadastro\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estado
 *
 * @ORM\Table(name="estado")
 * @ORM\Entity
 */
class Estado
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
     * @ORM\Column(name="sigla", type="string", length=10, nullable=false)
     */
    private $sigla;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_externo", type="integer", nullable=true)
     */
    private $codigo_externo;

    /**
     * @var \Cadastro\Entity\Regiao
     *
     * @ORM\ManyToOne(targetEntity="Cadastro\Entity\Regiao", fetch="LAZY")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="regiao_id", referencedColumnName="id",
     *      nullable=true,
     *      onDelete="SET NULL")
     * })
     */
    private $regiao;

    /**
     * @var \Cadastro\Entity\Pais
     *
     * @ORM\ManyToOne(targetEntity="Cadastro\Entity\Pais", fetch="LAZY")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pais_id", referencedColumnName="id",
     *      nullable=false,
     *      onDelete="CASCADE")
     * })
     */
    private $pais;

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
    public function getCodigoExterno()
    {
        return $this->codigo_externo;
    }

    /**
     * @param string $codigo_externo
     */
    public function setCodigoExterno($codigo_externo)
    {
        $this->codigo_externo = $codigo_externo;
    }

    /**
     * @return string
     */
    public function getSigla()
    {
        return $this->sigla;
    }

    /**
     * @param string $sigla
     */
    public function setSigla($sigla)
    {
        $this->sigla = $sigla;
    }

    /**
     * @return Regiao
     */
    public function getRegiao()
    {
        return $this->regiao;
    }

    /**
     * @param Regiao $regiao
     */
    public function setRegiao($regiao)
    {
        $this->regiao = $regiao;
    }

    /**
     * @return Pais
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * @param Pais $pais
     */
    public function setPais($pais)
    {
        $this->pais = $pais;
    }
}


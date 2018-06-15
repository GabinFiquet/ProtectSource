<?php

namespace PS\ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 *
 * @ORM\Table(name="project")
 * @ORM\Entity(repositoryClass="PS\ProjectBundle\Repository\ProjectRepository")
 */
class Project
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
	
	/**
	 * @ORM\ManyToOne(targetEntity="PS\ProjectBundle\Entity\Project")
	 * @ORM\JoinColumn(nullable=false, onDelete="CASCADE"))
	 */
	private $user;
	
	

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=150)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime", nullable=true)
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="keyProject", type="string", length=255)
     */
    private $keyProject;

    /**
     * @var string
     *
     * @ORM\Column(name="instruction", type="text")
     */
    private $instruction;
	
	
	public function __construct(){
		// Par défaut, la date du project est la date d'aujourd'hui
		$this->creationDate = new \Datetime();
		$this->keyProject = new \Datetime();
	}

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Project
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Project
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Project
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set keyProject
     *
     * @param string $keyProject
     *
     * @return Project
     */
    public function setKeyProject($keyProject)
    {
        $this->keyProject = $keyProject;

        return $this;
    }

    /**
     * Get keyProject
     *
     * @return string
     */
    public function getKeyProject()
    {
        return $this->keyProject;
    }

    /**
     * Set instruction
     *
     * @param string $instruction
     *
     * @return Project
     */
    public function setInstruction($instruction)
    {
        $this->instruction = $instruction;

        return $this;
    }

    /**
     * Get instruction
     *
     * @return string
     */
    public function getInstruction()
    {
        return $this->instruction;
    }

    /**
     * Set user
     *
     * @param \PS\ProjectBundle\Entity\Project $user
     *
     * @return Project
     */
    public function setUser(\PS\ProjectBundle\Entity\Project $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \PS\ProjectBundle\Entity\Project
     */
    public function getUser()
    {
        return $this->user;
    }
}

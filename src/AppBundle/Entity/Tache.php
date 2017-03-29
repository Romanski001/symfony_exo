<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Importance;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Tache
 *
 * @ORM\Table(name="tache")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TacheRepository")
 */
class Tache
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="detail", type="text")
     */
    private $detail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var bool
     *
     * @ORM\Column(name="effectuee", type="boolean")
     */
    private $effectuee;

      /** * @var Importance
     *@ORM\ManyToOne(targetEntity="Importance", inversedBy="Tache")
     *@ORM\JoinColumn(name="nom_id" , referencedColumnName="id")
     */
   private $importance;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Tache
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set detail
     *
     * @param string $detail
     *
     * @return Tache
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;

        return $this;
    }

    /**
     * Get detail
     *
     * @return string
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Tache
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set effectuee
     *
     * @param boolean $effectuee
     *
     * @return Tache
     */
    public function setEffectuee($effectuee)
    {
        $this->effectuee = $effectuee;

        return $this;
    }

    /**
     * Get effectuee
     *
     * @return bool
     */
    public function getEffectuee()
    {
        return $this->effectuee;
    }

  /**
    * set importance
    *
    *@param Importance $importance
    *
    *@return Tache
    */
    public function setImportance(Importance $importance)
  {
         $this->importance = $importance;
         return $this;
  }    /**
    * Get importance
    *
    *@return Importance
    */
    public function getImportance()
  {
         return $this->importance;
  }
}

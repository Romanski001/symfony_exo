<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Tache;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Importance
 *
 * @ORM\Table(name="importance")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ImportanceRepository")
 */
class Importance
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
     * @var int
     *
     * @ORM\Column(name="niveau", type="integer")
     */
    private $niveau;

      /**
    *@var ArrayCollection
    *
    *@ORM\OneToMany(targetEntity="Tache", mappedBy="importance")
    */
    private $taches;
    public function __construct(){
           $this->taches = new ArrayCollection();
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Importance
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
     * Set niveau
     *
     * @param integer $niveau
     *
     * @return Importance
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return int
     */
    public function getNiveau()
    {
        return $this->niveau;
    }
    /** *Add tache
   *
   *@param Tache $Tache
   *
   *@return Importance
   */
   public function addTache(Tache $tache)
   {
          $this->taches[] = $tache;           return $this;
   }    /**
   * Remove tache
   *
   * @param Tache $tache
   *
   *@return Importance
   */
   public function removeTache(Tache $tache)
   {
          $this->taches->removeElement($tache);           return $this;
   }    /**
   *Get taches
   *
   *@return ArrayCollection
   */
   public function getTaches()
   {
          return $this->$taches;
   }    /**
   *set taches
   *
   *@param ArrayCollection $taches
   *
   *@return Importance
   */
   public function setTaches(ArrayCollection $taches){
          $this->taches = $taches;
   }
}

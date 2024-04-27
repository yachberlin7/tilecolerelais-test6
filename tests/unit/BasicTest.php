<?php

namespace App\Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Entity\Enfant;
use App\Entity\Famille;
use App\Entity\DossierMedical;
use App\Entity\DossierStage;
use App\Entity\PersonneResponsable;


class EntityTest extends TestCase
{
    public function testEnfantEntity()
    {
        $enfant = new Enfant();
        
        $enfant->setIdE(1);
        $this->assertEquals(1, $enfant->getIdE());
        
        $enfant->setNom("John");
        $this->assertEquals("John", $enfant->getNom());
        
        $enfant->setPrenom("Doe");
        $this->assertEquals("Doe", $enfant->getPrenom());
        
        $enfant->setAge(5);
        $this->assertEquals(5, $enfant->getAge());
        
        $enfant->setAdresse("123 Street");
        $this->assertEquals("123 Street", $enfant->getAdresse());
      
        // Ajoutez d'autres tests pour les fonctions restantes de l'entité Enfant
    }
    
    public function testFamilleEntity()
    {
        $famille = new Famille();
        
        $famille->setIdF(1);
        $this->assertEquals(1, $famille->getIdF());
        
        $famille->setNompere("John");
        $this->assertEquals("John", $famille->getNompere());
        
        $famille->setPrenompere("Doe");
        $this->assertEquals("Doe", $famille->getPrenompere());
        
        $famille->setNommere("Jane");
        $this->assertEquals("Jane", $famille->getNommere());
        
        $famille->setPrenommere("Doe");
        $this->assertEquals("Doe", $famille->getPrenommere());
      
        // Ajoutez d'autres tests pour les fonctions restantes de l'entité Famille
    }}

    class DossierMedicalTest extends TestCase
{
    public function testGetId()
    {
        $dossierMedical = new DossierMedical();
        $this->assertNull($dossierMedical->getId());
    }

    public function testGetIdDM()
    {
        $dossierMedical = new DossierMedical();
        $this->assertNull($dossierMedical->getIdDM());
    }

    // Ajouter d'autres tests pour les autres méthodes de l'entité DossierMedical
}
class DossierStageTest extends TestCase
{
    public function testGetId()
    {
        $dossierStage = new DossierStage();
        $this->assertNull($dossierStage->getId());
    }

    public function testGetIdDST()
    {
        $dossierStage = new DossierStage();
        $this->assertNull($dossierStage->getIdDST());
    }

    // Ajouter d'autres tests pour les autres méthodes de l'entité DossierStage
}
class PersonneResponsableTest extends TestCase
{
    public function testGetId()
    {
        $personneResponsable = new PersonneResponsable();
        $this->assertNull($personneResponsable->getId());
    }

    public function testGetIdRP()
    {
        $personneResponsable = new PersonneResponsable();
        $this->assertNull($personneResponsable->getIdRP());
    }

    // Ajouter d'autres tests pour les autres méthodes de l'entité PersonneResponsable
}

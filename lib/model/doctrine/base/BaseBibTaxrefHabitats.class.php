<?php

/**
 * BaseBibTaxrefHabitats
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_habitat
 * @property string $nom_habitat
 * 
 * @method integer           getIdHabitat()   Returns the current record's "id_habitat" value
 * @method string            getNomHabitat()  Returns the current record's "nom_habitat" value
 * @method BibTaxrefHabitats setIdHabitat()   Sets the current record's "id_habitat" value
 * @method BibTaxrefHabitats setNomHabitat()  Sets the current record's "nom_habitat" value
 * 
 * @package    geonature
 * @subpackage model
 * @author     Gil Deluermoz
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseBibTaxrefHabitats extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('taxonomie.bib_taxref_habitats');
        $this->hasColumn('id_habitat', 'integer', 8, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 8,
             ));
        $this->hasColumn('nom_habitat', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}
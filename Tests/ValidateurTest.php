<?php
/**
 * Ce fichier contient la classe Validateur, qui fournit des fonctionnalités utiles.
 *
 * PHP Version 7
 *
 * @category Class_Validateur.
 * @package  MonPackage.
 * @author   donbeni imboyo <donblackimboyo@gmail.com>
 * @license  https://www.example.com/license/ M.
 * @link     https://pedag.u-picardie.fr/moodle/upjv/?redirect=0
 */
/**
 * Class Doc Comment
 *
 * @category Class_Validateur.
 * @package  MonPackage.
 * @author   donbeni imboyo <donblackimboyo@gmail.com>
 * @license  https://www.example.com/license/ M.
 * @link     https://pedag.u-picardie.fr/moodle/upjv/?redirect=0
 */

final class ValidateurTest extends PHPUnit\Framework\TestCase
{
    public function testCheck()
    {
        $Validateur = new Validateur();
        $this->assertTrue($Validateur->check('abc')); 
        $this->assertFalse($Validateur->check('a')); // la chaîne 'a' n'a pas une longueur valide et doit renvoyer false
    }
}




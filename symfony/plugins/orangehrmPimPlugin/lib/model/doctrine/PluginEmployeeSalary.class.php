<?php

/**
 * PluginEmployeeSalary
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class PluginEmployeeSalary extends BaseEmployeeSalary {
    
    public function setUp() {
        parent::setup();

        if (KeyHandler::keyExists()) {
            $key = KeyHandler::readKey();
            $this->addListener(new EncryptionListener('amount', $key));
        }
    } 
}
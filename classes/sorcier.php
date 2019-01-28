<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 28/01/2019
 * Time: 14:24
 */

class sorcier extends personnage
{

    public function __construct()
    {
        parent::__construct();

        $this->x = 125;
        $this->y = 125;
    }

}
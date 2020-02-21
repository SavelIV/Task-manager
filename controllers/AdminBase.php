<?php

/**
 * Abstract class AdminBase 
 * contains common logic for CabinetControllers
 */
abstract class AdminBase {

    /**
     * Checks if user is an admin
     * @return boolean
     */
    public function __construct() {
        
        $userId = User::checkLogged();

        if ($userId === 'admin') {
            return true;
        }

        die('Доступ запрещен!');
    }

}

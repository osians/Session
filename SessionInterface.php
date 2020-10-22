<?php

/**
 * Session Interface
 *
 * @package Vita
 * @subpackage Core
 * @category Sessions
 * @author Wanderlei Santana <sans.pds@gmail.com>
 * @link https://github.com/osians
 **/
interface SessionInterface
{
    /**
     * Set a value in the session
     *
     * @param string $name  Property name
     * @param mixed $value  Mixed value
     *
     * @return Session
     */
    public function set($name, $value);


    /**
     * Get value From Session by name
     *
     * @param string $name Property name
     *
     * @return mixed | null
     */
    public function get($name);


    /**
     * Destroy All data from Session
     *
     * @return void
     **/
    public function destroy();


}

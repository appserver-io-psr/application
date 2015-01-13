<?php

/**
 * AppserverIo\Psr\Application\FilesystemAwareInterface
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @category   Appserver
 * @package    Psr
 * @subpackage Application
 * @author     Tim Wagner <tw@appserver.io>
 * @copyright  2014 TechDivision GmbH <info@appserver.io>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/appserver-io-psr/application
 * @link       http://www.appserver.io
 */

namespace AppserverIo\Psr\Application;

/**
 * Interface for applications that are aware of user, group and umask.
 *
 * @category   Appserver
 * @package    Psr
 * @subpackage Application
 * @author     Tim Wagner <tw@appserver.io>
 * @copyright  2014 TechDivision GmbH <info@appserver.io>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/appserver-io-psr/application
 * @link       http://www.appserver.io
 */
interface FilesystemAwareInterface
{

    /**
     * Injects the username the application should be executed with.
     *
     * @return string The username
     */
    public function getUser();

    /**
     * Injects the groupname the application should be executed with.
     *
     * @return string The groupname
     */
    public function getGroup();

    /**
     * Returns the umask the application should create files/directories with.
     *
     * @return string The umask
     */
    public function getUmask();
}

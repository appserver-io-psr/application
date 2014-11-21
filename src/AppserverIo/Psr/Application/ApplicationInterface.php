<?php

/**
 * AppserverIo\Psr\Application\ApplicationInterface
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

use AppserverIo\Psr\Naming\NamingDirectoryInterface;

/**
 * Interface ApplicationInterface
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
interface ApplicationInterface extends NamingDirectoryInterface
{

    /**
     * Key for the default applications cache directory.
     *
     * @var string
     */
    const CACHE_DIRECTORY = 'cache';

    /**
     * Key for the default applications session directory.
     *
     * @var string
     */
    const SESSION_DIRECTORY = 'sessions';

    /**
     * Has been automatically invoked by the container after the application
     * instance has been created.
     *
     * @return \AppserverIo\Psr\Application\ApplicationInterface The connected application
     */
    public function connect();

    /**
     * Returns the application name (that has to be the class namespace,
     * e. g. TechDivision\Example).
     *
     * @return string The application name
     */
    public function getName();

    /**
     * Return's the applications servers base directory, which is
     * /opt/appserver by default.
     *
     * @param string $directoryToAppend Directory to append before returning the base directory
     *
     * @return string The application server's base directory
     */
    public function getBaseDirectory($directoryToAppend = null);

    /**
     * Returns the path to the web application.
     *
     * @return string The path to the web application
     */
    public function getWebappPath();

    /**
     * Returns the absolute path to the applications base directory.
     *
     * @return string The app base directory
     */
    public function getAppBase();

    /**
     * Returns the absolute path to the applications temporary directory.
     *
     * @return string The app temporary directory
     */
    public function getTmpDir();

    /**
     * Returns the absolute path to the applications session directory.
     *
     * @return string The app session directory
     */
    public function getSessionDir();

    /**
     * Returns the absolute path to the applications cache directory.
     *
     * @return string The app cache directory
     */
    public function getCacheDir();

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

    /**
     * Returns the applications naming directory.
     *
     * @return \AppserverIo\Psr\Naming\NamingDirectoryInterface The applications naming directory interface
     */
    public function getNamingDirectory();
}

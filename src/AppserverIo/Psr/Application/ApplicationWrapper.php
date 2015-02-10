<?php

/**
 * AppserverIo\Psr\Application\ApplicationWrapper
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/application
 * @link      http://www.appserver.io
 */

namespace AppserverIo\Psr\Application;

/**
 * A wrapper implementation for an application.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/application
 * @link      http://www.appserver.io
 */
class ApplicationWrapper
{

    /**
     * The wrapped application instance.
     *
     * @var \AppserverIo\Psr\Application\ApplicationInterface
     */
    protected $application;

    /**
     * Injects the application instance we want to wrap.
     *
     * @param \AppserverIo\Psr\Application\ApplicationInterface $application The application instance we want to wrap
     *
     * @return void
     */
    public function injectApplication(ApplicationInterface $application)
    {
        $this->application = $application;
    }

    /**
     * Returns the wrapped application instance.
     *
     * @return \AppserverIo\Psr\Application\ApplicationInterface
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * Has been automatically invoked by the container after the application
     * instance has been created.
     *
     * @return \AppserverIo\Psr\Application\ApplicationInterface The connected application
     */
    public function connect()
    {
        return $this->getApplication()->connect();
    }

    /**
     * Returns the application name (that has to be the class namespace,
     * e. g. TechDivision\Example).
     *
     * @return string The application name
     */
    public function getName()
    {
        return $this->getApplication()->getName();
    }

    /**
     * Return's the applications servers base directory, which is
     * /opt/appserver by default.
     *
     * @param string $directoryToAppend Directory to append before returning the base directory
     *
     * @return string The application server's base directory
     */
    public function getBaseDirectory($directoryToAppend = null)
    {
        return $this->getApplication()->getBaseDirectory($directoryToAppend);
    }

    /**
     * Returns the path to the web application.
     *
     * @return string The path to the web application
     */
    public function getWebappPath()
    {
        return $this->getApplication()->getWebappPath();
    }

    /**
     * Returns the absolute path to the applications base directory.
     *
     * @return string The app base directory
     */
    public function getAppBase()
    {
        return $this->getApplication()->getAppBase();
    }

    /**
     * Returns the absolute path to the applications temporary directory.
     *
     * @return string The app temporary directory
     */
    public function getTmpDir()
    {
        return $this->getApplication()->getTmpDir();
    }

    /**
     * Returns the absolute path to the applications session directory.
     *
     * @return string The app session directory
     */
    public function getSessionDir()
    {
        return $this->getApplication()->getSessionDir();
    }

    /**
     * Returns the absolute path to the applications cache directory.
     *
     * @return string The app cache directory
     */
    public function getCacheDir()
    {
        return $this->getApplication()->getCacheDir();
    }

    /**
     * Injects the username the application should be executed with.
     *
     * @return string The username
     */
    public function getUser()
    {
        return $this->getApplication()->getUser();
    }

    /**
     * Injects the groupname the application should be executed with.
     *
     * @return string The groupname
     */
    public function getGroup()
    {
        return $this->getApplication()->getGroup();
    }

    /**
     * Returns the umask the application should create files/directories with.
     *
     * @return string The umask
     */
    public function getUmask()
    {
        $this->getApplication()->getUmask();
    }
}

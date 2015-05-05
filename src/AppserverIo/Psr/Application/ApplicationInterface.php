<?php

/**
 * \AppserverIo\Psr\Application\ApplicationInterface
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
 * Interface for thread-safe applications.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/application
 * @link      http://www.appserver.io
 *
 * The comments below hint at methods present in widely used explicit implementations of this interface and MAY
 * be introduced in the next MAJOR release of this PSR
 *
 * @method \AppserverIo\Appserver\Core\Interfaces\ClassLoaderInterface getClassLoader() getClassLoader(string $identifier) Return the requested class loader instance
 * @method \AppserverIo\Storage\GenericStackable getClassLoaders() getClassLoaders() Return the class loaders
 * @method \AppserverIo\Storage\GenericStackable getManagers() getManagers() Returns the manager instances
 * @method \AppserverIo\Psr\Application\ManagerInterface getManager() getManager(string $identifier) Return the requested manager instance
 * @method \AppserverIo\Storage\GenericStackable getProvisioners() getProvisioners() Returns the provisioner instances
 * @method \AppserverIo\Psr\Application\ProvisionerInterface getProvisioner() getProvisioner(string $identifier) Return the requested provisioner instance
 * @method null addClassLoader() addClassLoader(\AppserverIo\Appserver\Core\Interfaces\ClassLoaderInterface $classLoader, \AppserverIo\Appserver\Core\Api\Node\ClassLoaderNodeInterface $configuration) Injects an additional class loader
 * @method null addManager() addManager(\AppserverIo\Psr\Application\ManagerInterface $manager, \AppserverIo\Appserver\Core\Api\Node\ManagerNodeInterface $configuration) Injects manager instance and the configuration
 * @method null addProvisioner() addProvisioner(\AppserverIo\Psr\Application\ProvisionerInterface $provisioner, \AppserverIo\Appserver\Core\Api\Node\ProvisionerNodeInterface $configuration) Injects provisioner instance and the configuration
 * @method object newService() newService(string $className) Creates a new service instance
 * @method \AppserverIo\Appserver\Application\Interfaces\ContextInterface getInitialContext() getInitialContext() Returns the initial context instance
 * @method null registerClassLoaders() registerClassLoaders() Registers all class loaders injected to the applications in the opposite order as they have been injected
 * @method null provision() provision() Provisions the initialized application
 */
interface ApplicationInterface
{

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
     * Returns the applications servers base directory, which is
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
}

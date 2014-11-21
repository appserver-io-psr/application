<?php

/**
 * AppserverIo\Psr\Application\ManagerInterface
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

use AppserverIo\Psr\Context\Context;

/**
 * Generic interface for all manager instances added to an application.
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
interface ManagerInterface extends Context
{

    /**
     * The managers unique identifier.
     *
     * @return string The unique identifier
     */
    public function getIdentifier();

    /**
     * Has been automatically invoked by the container after the application
     * instance has been created.
     *
     * @param \AppserverIo\Psr\Application\ApplicationInterface $application The application instance
     *
     * @return void
     */
    public function initialize(ApplicationInterface $application);
}

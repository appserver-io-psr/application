<?php

/**
 * \AppserverIo\Psr\Application\ApplicationWrapperTest
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
 * Test for application wrapper implementation.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/application
 * @link      http://www.appserver.io
 */
class NamingDirectoryWrapperTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test if the application name is returned correctly.
     *
     * @return void
     */
    public function testGetName()
    {

        // create a stub for the ApplicationInterface
        $stub = $this->getMock('\AppserverIo\Psr\Application\ApplicationInterface');

        // Configure the stub
        $stub->expects($this->any())
             ->method('getName')
             ->will($this->returnValue($name = 'global'));

        // create a new wrapper instance
        $wrapper = new ApplicationWrapper();
        $wrapper->injectApplication($stub);

        // check if the name has been returned
        $this->assertSame($name, $wrapper->getName());
    }
}

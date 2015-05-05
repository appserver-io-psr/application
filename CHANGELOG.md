# Version 1.3.0

## Bugfixes

* None

## Features

* Added new ProvisionerInterface

# Version 1.2.0

## Bugfixes

* None

## Features

* Added method hinting for ApplicationInterface's common implementations

# Version 1.1.0

## Bugfixes

* None

## Features

* Add ClassLoaderInterface, ClassLoaderConfigurationInterface + ManagerConfiguration interface

# Version 1.0.0

## Bugfixes

* None

## Features

* Switched to stable dependencies due to version 1.0.0 release

# Version 0.6.0

## Bugfixes

* None

## Features

* Remove ApplicationInterface::getNamingDirectory() method and dependency to appserver-io-psr/naming library

# Version 0.5.0

## Bugfixes

* None

## Features

* Unified the interface naming conventions
* Moved to new documentation schema

# Version 0.4.0

## Bugfixes

* None

## Features

* Add FilesystemAwareInterface and DirectoryAwareInterface interfaces

# Version 0.3.5

## Bugfixes

* None

## Features

* ApplicationInterface now extends NamingDirectoryInterface
* Application is also used as NamingDirectory now

# Version 0.3.4

## Bugfixes

* Remove invalid Application::getDependencyInjectionContainer() + Application::injectDependencyInjectionContainer() methods

## Features

* Add ApplicationInterface::getInstance() + ApplicationInterface::getNamingDirectory() methods
* Add missing methods to DependencyInjectionContainerInterface

# Version 0.3.3

## Bugfixes

* None

## Features

* Add dependency to techdivision/naming package
* Add DependencyInjectionContainerInterface
* NamingDirectory integration

# Version 0.3.2

## Bugfixes

* Query profile logger to be initialized or not

## Features

* None

# Version 0.3.1

## Bugfixes

* None

## Features

* Add dependency to appserver-io/logger for profiling purposes
* Add basic profiling of application state and memory

# Version 0.3.0

## Bugfixes

* None

## Features

* Remove ManagerInterface::visit() method because of new factory integration to initialize manager instances

# Version 0.2.5

## Bugfixes

* Inject all Stackable instances instead of initialize them in Application::__construct => pthreads 2.x compatibility

## Features

* None

# Version 0.2.4

## Bugfixes

* Add synchronized() method around all wait()/notify() calls => pthreads 2.x compatibility

## Features

* None

# Version 0.2.3

## Bugfixes

* None

## Features

* Add synchronization for Application::connect() method to make sure, all class loaders and managers have been initialized

# Version 0.2.2

## Bugfixes

* None

## Features

* Rename ManagerInterface::add() method to ManagerInterface::visit()
* Add new ManagerConfigurationInterface as type hint for ManagerInterface::visit() method

# Version 0.2.1

## Bugfixes

* None

## Features

* Refactoring ANT PHPUnit execution process
* Composer integration by optimizing folder structure (move bootstrap.php + phpunit.xml.dist => phpunit.xml)
* Switch to new appserver-io/build build- and deployment environment

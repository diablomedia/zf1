<?php
// The Zend_Service_WindowsAzure_CommandLine classes try to bootstrap the Zend_Service_Console_Command
// component when the classes are loaded (bottom of file), which phpstan will trigger when it
// autoloads the classes.  This prevents it from bootstrapping (which prevents some exceptions being thrown)
define('MICROSOFT_CONSOLE_COMMAND_HOST', 'nobootstrap');

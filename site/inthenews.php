<?php

// No direct access to this file

defined('_JEXEC') or die('Restricted access');

// import Joomla controller library
jimport('joomla.application.component.controller');

// Get an instance of the controller prefixed by InTheNews
$controller = JController::getInstance('InTheNews');

// Perform the Request task
$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task'));

// Redirect if set by the controller
$controller->redirect();

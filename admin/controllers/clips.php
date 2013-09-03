<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla controlleradmin library
jimport('joomla.application.component.controlleradmin');

/**
 * Clips controller
 */
 
 class InTheNewsControllerClips extends JControllerAdmin
 {
	public function getModel ($name = 'Clip', $prefix = 'InTheNewsModel')
		{
			$model = parent::getModel($name, $prefix, array('ignore_request' => true));
			return $model;
		}
 }
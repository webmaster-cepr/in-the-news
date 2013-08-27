<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla model item library
jimport('joomla.application.component.modelitem');

/**
 * InTheNews Model
 */

 class InTheNewsModelInTheNews extends JModelItem
 {

 	/**
	 * @var string msg
	 */

	 protected $msg;

	/**
	 * Get the message
	 * @return string The message will be displayed to the user
	 */

	 public function getMsg()
	 {
	 	if(!isset($this->msg))
		{
			$this->msg = "Eventually this will be replaced!";
		}
		return $this->msg;
	}

}

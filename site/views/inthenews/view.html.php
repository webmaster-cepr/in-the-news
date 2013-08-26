
<?php

// Restrict direct Access

defined ( '_JEXEC' ) or die ( 'Restricted access' );

jimport( 'joomla.application.component.view' );

class InTheNewsViewInTheNews extends JView

{

	function display($tpl = null)
	
		{	// This isn't going to do anything until the db is set up
			$this->msg = "Nothing to see right now.";

			parent::display($tpl);
			
		}
		
}

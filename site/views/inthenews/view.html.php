
<?php

// Restrict direct Access

defined ( '_JEXEC' ) or die ( 'Restricted access' );

jimport( 'joomla.application.component.view' );

class InTheNewsViewInTheNews extends JView

{

	function display($tpl = null)
	
		{	
			$this->msg = $this->get('Msg');

			// Check for errors

			if (count($errors = $this->get('Errors')))
			{
				JLog::add(implode('<br/>', $errors), JLog::WARNING, 'jerror');
			}
			// Display the view

			parent::display($tpl);
			
		}

		
}

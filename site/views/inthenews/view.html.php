
<?php

// Restrict direct Access

defined ( '_JEXEC' ) or die ( 'Restricted access' );

jimport( 'joomla.application.component.view' );

class InTheNewsViewInTheNews extends JView

{

	function display($tpl = null)
	
		{
			$rows =& $this->get('data');
			$this->assignRef( 'rows', $rows );
			parent::display($tpl);
			
		}

		
}


<?php

// Restrict direct Access

defined ( '_JEXEC' ) or die ( 'Restricted access' );

jimport( 'joomla.application.component.view' );

class InTheNewsViewInTheNews extends JView

{

	function display($tpl = null)
	
		{
			// Get data from the model
			$items = $this->get('Items');
			$pagination = $this->get('Pagination');
			
                // Check for errors.
                if (count($errors = $this->get('Errors'))) 
                {
                        JError::raiseError(500, implode('<br />', $errors));
                        return false;
                }			
			
			// Assign data to the view
			$this->items = $items;
			$this->pagination = $pagination;
			
			// Display the template
			parent::display($tpl);
			
		}

		
}

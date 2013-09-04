<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla view library
jimport('joomla.application.component.view');
 
/**
 * InTheNews View
 */
class InTheNewsViewClips extends JView
{
        /**
         * InTheNews view display method
         * @return void
         */
        function display($tpl = null) 
        {
                // Get data from the model
                $items = $this->get('Items');
                $pagination = $this->get('Pagination');
				$state = $this->get('State');
 
                // Check for errors.
                if (count($errors = $this->get('Errors'))) 
                {
                        JError::raiseError(500, implode('<br />', $errors));
                        return false;
                }
                // Assign data to the view
                $this->items = $items;
                $this->pagination = $pagination;
				$this->state = $state;
				
				// Set the toolbar
				$this->addToolBar();
 
                // Display the template
                parent::display($tpl);
        }
		
		/**
		 * Setting the toolbar
		 */
		 
		protected function addToolBar()
			{
				JToolBarHelper::title(JText::_('Press Hits Manager'));
				JToolBarHelper::deleteList('', 'clips.delete');
				JToolBarHelper::editList('clip.edit');
				JToolBarHelper::addNew('clip.add');
			}

}
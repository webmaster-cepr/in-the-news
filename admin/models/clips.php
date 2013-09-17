<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
// import the Joomla modellist library
jimport('joomla.application.component.modellist');
/**
 * InTheNewsList Model
 */
class InTheNewsModelClips extends JModelList
{

        /**
         * Method to build an SQL query to load the list data.
         *
         * @return      string  An SQL query
         */
        protected function getListQuery()
        {
                // Create a new query object.           
                $db = JFactory::getDBO();
                $query = $db->getQuery(true);

                // Select some fields
                $query->select('id, title, publication, source, type, language, published');

				// From the inthenews table
                $query->from('#__inthenews');

                //Filter by search in title
				$search = $this->getState('filter.search');
				if (!empty($search)) {
					$search = $db->Quote('%'.$db->escape($search, true). '%');
					$query->where('((#__inthenews.title LIKE ' . $search.'))');
				}

				$query->order($this->getState('list.ordering', 'published') . ' ' .
					$this->getState('list.direction', 'DESC'));
                return $query;
        }
		
		protected function populateState($ordering = null, $direction = null)
		{
		
			// Load the filter state.
			$search = $this->getUserStateFromRequest($this->context .'.filter.search', 
				'filter_search');
			$this->setState('filter.search', $search);
			
			// List the state information.
			parent::populateState($ordering, $direction);
		
		}
}
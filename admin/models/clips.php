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
				$query->order($this->getState('list.ordering', 'published') . ' ' .
					$this->getState('list.direction', 'DESC'));
                return $query;
        }
}
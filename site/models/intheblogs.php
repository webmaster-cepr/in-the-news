<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla modelitem library
jimport('joomla.application.component.modellist');
 
/**
 * InTheNews Model
 */
class InTheNewsModelInTheBlogs extends JModelList
{
 
	protected function getListQuery()
	
		{
                $db   = JFactory::getDBO();
                $query  = $db->getQuery(true);
				$query->select('title, url, publication, italicized, DATE_FORMAT(published, "%M %d, %Y") AS published, source, type, language, published AS sortdate');
				$query->from('#__inthenews');
				$query->where('type = "Blogs"');
				$query->where('language = "English"');
				$query->where('copy = "0"');
				$query->where('live != "No"');
				
				// This is where we determine the year of the hits based on the menu type
				$year = JRequest::getInt('year');
				$query->where ('published LIKE "%' . $year . '%"');
				
				// This is where we determine the expert to narrow down our hits
				$expert = JRequest::getString('expert');
				if ($expert != '') {
					
					$query->where('source LIKE "%' . $expert . '%"');
					
				}
				
				$query->order('sortdate DESC');
		
				return $query;
		
		}
		
	        public function getMsg() 
        {
                if (!isset($this->msg)) 
                {
                	$intro_text = JRequest::getString('intro_text');
					$this->msg = $intro_text;
                }
                return $this->msg;
        }

}
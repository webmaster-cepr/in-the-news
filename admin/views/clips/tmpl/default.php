<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
 
// load tooltip behavior
JHtml::_('behavior.tooltip');

$listOrder = $this->state->get('list.ordering');
$listDirn = $this->state->get('list.direction');

?>
<form action="<?php echo JRoute::_('index.php?option=com_inthenews'); ?>" method="post" name="adminForm">

 <fieldset id="filter-bar">
        <div>
            <label for="filter_search"><?php echo JText::_('JSEARCH_FILTER_LABEL'); ?></label>
            <input type="text" name="filter_search" id="filter_search" 
               value="<?php echo $this->escape($this->state->get('filter.search')); ?>" 
               title="<?php echo JText::_('COM_INTHENEWS_CLIPS'); ?>" />
            <button type="submit"><?php echo JText::_('JSEARCH_FILTER_SUBMIT'); ?></button>
            <button type="button" onclick="document.id('filter_search').value='';this.form.submit();">
               <?php echo JText::_('JSEARCH_FILTER_CLEAR'); ?>
            </button>
        </div>
    </fieldset>


	<table class="adminlist">
                <thead><?php echo $this->loadTemplate('head');?></thead>
                <tbody><?php echo $this->loadTemplate('body');?></tbody>
				<tfoot><?php echo $this->loadTemplate('foot');?></tfoot>
        </table>
        <div>
                <input type="hidden" name="task" value="" />
                <input type="hidden" name="boxchecked" value="0" />
                <?php echo JHtml::_('form.token'); ?>
        </div>
</form>

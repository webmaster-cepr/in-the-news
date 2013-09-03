<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>
<?php foreach($this->items as $i => $item): ?>
        <tr class="row<?php echo $i % 2; ?>">
            
			<td style="display:none;">
			<?php echo $item->id; ?>
			</td>
			
            <td>
			<?php echo $item->title; ?>
			</td>

			<td>
            <?php echo JHtml::_('grid.id', $i, $item->id); ?>
			</td>

			<td>
			<?php echo $item->publication; ?>
			</td>

			<td>
			<?php echo $item->source; ?>
			</td>

			<td>
			<?php echo $item->type; ?>
			</td>

			<td>
			<?php echo $item->language; ?>
			</td>				

			<td>
			<?php echo $item->published; ?>
			</td>			
			
			</tr>
<?php endforeach; ?>
<?php

// Restrict direct Access

defined ( '_JEXEC' ) or die ( 'Restricted access' );

$cache = & JFactory::getCache();
$cache->setCaching( 1 );

?>

<p class="pageIntro"><?php echo $this->msg; ?></p>

<hr/>

<ul style="font-family:verdana; font-size:11px; padding: 3px">

<?php


 foreach ($this->items as $i => $item)

	{
		

		if ($item->url == '') {
		
		echo '<li style="list-style:none"><strong>' . $item->title . '</strong><br/>';
		
		}
		
		else {
		
		echo '<li style="list-style:none"><a href="' . $item->url .'" target="new">' . $item->title . '</a><br/>';
		
		}
		
		if ($item->italicized == 1) {
		
		echo '<em>' . $item->publication . '</em>,&nbsp;' . $item->published . '</li><br/>';
		
		}
		
		else {

		echo $item->publication . ',&nbsp;' . $item->published . '</li><br/>';

		}
		
	}
	
?>

</ul>

<?php echo $this->pagination->getListFooter(); ?>


<?php

// Restrict direct Access

defined ( '_JEXEC' ) or die ( 'Restricted access' );

$cache = & JFactory::getCache();
$cache->setCaching( 1 );

?>

<p class="interiorSectionHeader"><span class="pageIntro">The following selection of publications and news programs cited CEPR or featured interviews with our experts. You can also browse only <a href="http://www.cepr.net/index.php/radio-interviews/">radio</a> and <a href="http://www.cepr.net/index.php/tvvideos/">TV</a> interviews in our <a href="http://www.cepr.net/index.php/multimedia/">Multimedia</a> section. <br> <br> To browse our mentions in the blogosphere, see <a href="http://www.cepr.net/index.php/component/option,com_ceprinthenews/Itemid,252/view,blogs/">CEPR In the Blogs</a>. <br></span></p>

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


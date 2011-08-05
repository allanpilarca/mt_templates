<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>

<p class="iteminfo">
<?php $time = JHTML::date($item->publish_up,'%m - %d - %Y'); ?>
<span class="createdate"><?php echo $time; ?></span>
</p>

<?php if ($params->get('item_title')) : ?>
<div class="contentpaneopen<?php echo $params->get( 'moduleclass_sfx' ); ?>">
	<div class="contentheading<?php echo $params->get( 'moduleclass_sfx' ); ?>" width="100%">
	<?php if ($params->get('link_titles') && $item->linkOn != '') : ?>
		<a href="<?php echo $item->linkOn;?>" class="contentpagetitle<?php echo $params->get( 'moduleclass_sfx' ); ?>">
			<?php echo $item->title;?></a>
	<?php else : ?>
		<?php echo $item->title; ?>
	<?php endif; ?>
	</div>
</div>
<?php endif; ?>

<?php if (!$params->get('intro_only')) :
	echo $item->afterDisplayTitle;
endif; ?>

<?php echo $item->beforeDisplayContent; ?>

<div class="contentpaneopen<?php echo $params->get( 'moduleclass_sfx' ); ?>">
		<p><?php echo $item->text; ?></p>
    <?php if (isset($item->linkOn) && $item->readmore && $params->get('readmore')) :
	    echo '<p class="readmore"><a class="readon" href="'.$item->linkOn.'">'.$item->linkText.'</a></p>';
    endif; ?>
</div>

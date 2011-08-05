<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>

	<?php foreach ($list as $item) : ?>
		<?php modNewsFlashHelper::renderItem($item, $params, $access); ?>
	<?php endforeach; ?>

<?php // @version $Id: default.php 10571 2008-07-21 01:27:35Z pasamio $
defined('_JEXEC') or die('Restricted access');
?>

<div id="page">
<p>
	<?php if ((!empty ($this->article->modified) && $this->params->get('show_modify_date')) || ($this->params->get('show_author') && ($this->article->author != "")) || ($this->params->get('show_create_date'))) : ?>
		<?php if ($this->params->get('show_create_date')) : ?>
		<span class="createdate">
			<?php echo 'Posted: '.JHTML::_('date', $this->article->created, JText::_('%d %B, %Y')); ?>
		</span>
		<?php endif; ?>
	<?php endif; ?>

	<?php if( isset ($this->article->toc) || $this->print || $this->params->get('show_pdf_icon') || $this->params->get('show_print_icon') || $this->params->get('show_email_icon') ): ?>
	<span class="toolbox">
		<span class="headingbuttons">
			<?php if ($this->print) :
				echo JHTML::_('icon.print_screen', $this->article, $this->params, $this->access);
			elseif ($this->params->get('show_pdf_icon') || $this->params->get('show_print_icon') || $this->params->get('show_email_icon')) : ?>
			<img src="<?php echo $this->baseurl ?>/templates/beez/images/trans.gif" alt="<?php echo JText::_('attention open in a new window'); ?>" />
			<?php if ($this->params->get('show_pdf_icon')) :
				echo JHTML::_('icon.pdf', $this->article, $this->params, $this->access);
			endif;
			if ($this->params->get('show_print_icon')) :
				echo JHTML::_('icon.print_popup', $this->article, $this->params, $this->access);
			endif;
			if ($this->params->get('show_email_icon')) :
				echo JHTML::_('icon.email', $this->article, $this->params, $this->access);
			endif;
			endif; ?>
		</span>
		<?php if (isset ($this->article->toc)) :
			echo $this->article->toc;
		endif; ?>
	</span>
<?php endif; ?>
		
		<?php if ( $this->user->authorize('com_content', 'edit', 'content', 'all') || $this->user->authorize('com_content', 'edit', 'content', 'own')) : ?>
		<span class="editbuttons">
			<?php echo JHTML::_('icon.edit', $this->article, $this->params, $this->access); ?>
		</span>
		<?php endif; ?>
</p>

<?php if ($this->params->get('show_title')) : ?>
<h1><?php echo $this->escape($this->article->title);?></h1>
<?php endif; ?>

<?php if ((!empty ($this->article->modified) && $this->params->get('show_modify_date')) || ($this->params->get('show_author') && ($this->article->author != "")) || ($this->params->get('show_create_date'))) : ?>
<p class="articleinfo">

	<?php if (($this->params->get('show_author')) && ($this->article->author != "")) : ?>
	<span class="createdby">
		<?php JText::printf('Written by', ($this->article->created_by_alias ? $this->article->created_by_alias : $this->article->author)); ?>
	</span>
	<?php endif; ?>

</p>
<?php endif; ?>

<?php if (!$this->params->get('show_intro')) :
	echo $this->article->event->afterDisplayTitle;
endif; ?>

<?php if (($this->params->get('show_section') && $this->article->sectionid) || ($this->params->get('show_category') && $this->article->catid)) : ?>
<p class="iteminfo">
	<?php if ($this->params->get('show_section') && $this->article->sectionid) : ?>
	<span>
		<?php if ($this->params->get('link_section')) : ?>
			<?php echo '<a href="'.JRoute::_(ContentHelperRoute::getSectionRoute($this->article->sectionid)).'">'; ?>
		<?php endif; ?>
		<?php echo $this->article->section; ?>
		<?php if ($this->params->get('link_section')) : ?>
			<?php echo '</a>'; ?>
		<?php endif; ?>
		<?php if ($this->params->get('show_category')) : ?>
			<?php echo ' - '; ?>
		<?php endif; ?>
	</span>
	<?php endif; ?>
	<?php if ($this->params->get('show_category') && $this->article->catid) : ?>
	<span>
		<?php if ($this->params->get('link_category')) : ?>
			<?php echo '<a href="'.JRoute::_(ContentHelperRoute::getCategoryRoute($this->article->catslug, $this->article->sectionid)).'">'; ?>
		<?php endif; ?>
		<?php echo $this->article->category; ?>
		<?php if ($this->params->get('link_category')) : ?>
			<?php echo '</a>'; ?>
		<?php endif; ?>
	</span>
	<?php endif; ?>
</p>
<?php endif; ?>

<?php echo $this->article->event->beforeDisplayContent; ?>

<?php if ($this->params->get('show_url') && $this->article->urls) : ?>
<span class="small">
	<a href="<?php echo $this->article->urls; ?>" target="_blank">
		<?php echo $this->article->urls; ?></a>
</span>
<?php endif; ?>

<div class="content">
	<?php echo JFilterOutput::ampReplace($this->article->text); ?>
</div>

<?php if ((!empty ($this->article->modified) && $this->params->get('show_modify_date')) || ($this->params->get('show_author') && ($this->article->author != "")) || ($this->params->get('show_create_date'))) : ?>
	<?php if (!empty ($this->article->modified) && $this->params->get('show_modify_date')) : ?>
	<span class="modifydate">
		<?php echo JText::_('Updated:').' '.JHTML::_('date', $this->article->modified, JText::_('%m-%d-%Y')).' '; ?>
	</span>
	<?php endif; ?>
<?php endif; ?>

<?php echo $this->article->event->afterDisplayContent; ?>

</div>

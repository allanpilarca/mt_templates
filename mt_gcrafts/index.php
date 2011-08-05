<?php defined('_JEXEC') or die('Restricted access');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>"> 
<head>
	<?php $this->setGenerator('Joomla! 1.5 Template by MagicThemes.com'); ?>
	<jdoc:include type="head" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template; ?>/css/typo.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl;?>/templates/system/css/general.css" type="text/css" />

	<!--[if IE 7]>
		<link href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template; ?>/css/ie7only.css" rel="stylesheet" type="text/css" />
	<![endif]-->

	<!--[if IE 8]>
		<link href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template; ?>/css/ie8only.css" rel="stylesheet" type="text/css" />
	<![endif]-->

</head>
<body>

		<!-- Start: Min Wrapper -->
		<div id="mt-wrapper" class="clearfix">

			<!-- Start: Header -->
			<div id="mt-header">
				<div id="mt-logo">
					<a href="<?php echo JURI::base(); ?>" alt="" title="<?php echo $this->params->get('logoTitle');?>"><?php echo $this->params->get('logoTitle');?></a>
				</div>
				
				<?php if($this->countModules('mt-top')) : ?>
				<div id="mt-topMod">
					<jdoc:include type="modules" name="mt-top" style="xhtml" />
				</div>
				<?php endif; ?>
				
				<?php if($this->countModules('user1')) : ?>
				<div id="mt-topmenu">
					<jdoc:include type="modules" name="user1" style="xhtml" />
				</div>
				<?php endif; ?>
			
			</div>
			<!--End: Header -->
			
			<!-- Start: Content Panel -->
			<div id="mt-contentPanel" class="clearfix">
					
				<?php if($this->countModules('breadcrumb')) : ?>
				<div class="mt-breadcrumb">
					<jdoc:include type="modules" name="breadcrumb" />
				</div>
				<?php endif; ?>
				
				<jdoc:include type="message" />
				
				<?php if($this->countModules('mt-banner')) : ?>
				<div class="mt-bannerContents">
					<jdoc:include type="modules" name="mt-banner" />
				</div>
				<?php endif; ?>

				<jdoc:include type="component" />

			</div>
			<!-- End: Content- Panel -->
			
			<!-- Start: Right Panel -->
			<div id="mt-rightPanel">

				<?php if($this->countModules('mt-search')) : ?>
				<div class="mt-searchBox">
					<jdoc:include type="modules" name="mt-search" style="xhtml" />
				</div>
				<?php endif;
				
				if($this->countModules('right')) : ?>
				<div class="mt-rightMods">
					<jdoc:include type="modules" name="right" style="xhtml" />
				</div>
				<?php endif; ?>
			</div>
			<!-- End: Right Panel -->
		
		</div>
		<!-- End: Main Wrapper -->
		
		<!-- Start: Mid Content Panel -->
		<div id="mt-midContentPanel" class="clearfix">
			<div class="mt-midContentPanelWrapper clearfix">

				<?php if($this->countModules('user2')) : ?>
				<div class="mt-midContentMod">
					<jdoc:include type="modules" name="user2" style="xhtml" />
				</div>
				<?php endif; ?>

				<?php if($this->countModules('user3')) : ?>
				<div class="mt-midContentMod">
					<jdoc:include type="modules" name="user3" style="xhtml" />
				</div>
				<?php endif; ?>

				<?php if($this->countModules('user4')) : ?>
				<div class="mt-midContentMod">
					<jdoc:include type="modules" name="user4" style="xhtml" />
				</div>
				<?php endif; ?>
			</div>
		</div>
		<!-- End: Mid Content Panel -->
		
		<!-- Start: Footer Content -->
		<div id="mt-footerTopBg"></div>
		<div id="mt-footerContent" class="clearfix">
			<div class="mt-footerContentWrapper clearfix">
				<div class="mt-templateLogo">
					<a href="http://magicthemes.com" alt="" title="MagicThemes" target="_blank">MagicThemes</a>
				</div>

				<?php if($this->countModules('mt-footer')) : ?>
				<div class="mt-footer">
					<jdoc:include type="modules" name="mt-footer" style="xhtml" />
				</div>
				<?php endif; ?>
			</div>
		</div>
		<!-- End: Footer Content -->

</body>
</html>
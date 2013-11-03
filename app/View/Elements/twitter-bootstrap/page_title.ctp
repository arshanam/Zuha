<div class="page-title navbar">
	<a class="btn btn-navbar" data-toggle="collapse" data-target=".page-title .nav-collapse">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</a>
    <?php $title = !empty($page_title_for_layout) ? $page_title_for_layout : Inflector::humanize($this->request->params['controller']); ?>
   	<?php echo !empty($title) ? __('<div id="pageTitle" class="first pull-left"><h1 class="page-title">%s</h1></div>', $title) : null; ?>
   	<?php echo !empty($forms_search) ? $this->Element('forms/search', $forms_search) : null; ?>
    <div class="nav-collapse collapse"><?php echo $this->Element('twitter-bootstrap/context_menu'); ?></div>
	<hr style="clear:both" />
</div>
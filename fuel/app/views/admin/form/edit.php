<h2>Editing Form</h2>
<br>

<?php echo render('admin/form/_form'); ?>
<p>
	<?php echo Html::anchor('admin/form/view/'.$form->id, 'View'); ?> |
	<?php echo Html::anchor('admin/form', 'Back'); ?></p>

<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Name', 'name', array('class'=>'control-label')); ?>

				<?php echo Form::input('name', Input::post('name', isset($form) ? $form->name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Email', 'email', array('class'=>'control-label')); ?>

				<?php echo Form::input('email', Input::post('email', isset($form) ? $form->email : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Email')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Comment', 'comment', array('class'=>'control-label')); ?>

				<?php echo Form::input('comment', Input::post('comment', isset($form) ? $form->comment : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Comment')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Ip address', 'ip_address', array('class'=>'control-label')); ?>

				<?php echo Form::input('ip_address', Input::post('ip_address', isset($form) ? $form->ip_address : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Ip address')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('User agent', 'user_agent', array('class'=>'control-label')); ?>

				<?php echo Form::input('user_agent', Input::post('user_agent', isset($form) ? $form->user_agent : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'User agent')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>
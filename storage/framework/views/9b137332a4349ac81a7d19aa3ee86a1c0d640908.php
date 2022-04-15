<?php if(Session::has('global')): ?>
	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<?php echo e(Session::get('global')); ?>

				</div>
			</div>
		</div>
	</div>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\Laravel-Library-Management-system-main\resources\views/account/message.blade.php ENDPATH**/ ?>
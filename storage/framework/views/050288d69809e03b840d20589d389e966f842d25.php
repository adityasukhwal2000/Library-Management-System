<?php $__env->startSection('content'); ?>

<?php echo $__env->make('account.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="wrapper  wrapper1">
	<div class="container">
		<div class="row">
			<div class="module span12">
				<div class="module-head">
					<h3>Search Books</h3>
				</div>
				<div class="module-body">
					<form class="form-horizontal row-fluid">
						<div class="control-group">
							<label class="control-label">Name or author<br>of the book</label>
							<div class="controls">
								<textarea class="span12" rows="2"></textarea>
							</div>
						</div>

						<div class="control-group">
							<div class="controls" id="search_book_button">
								<a class="btn btn-default">Search Book</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="row" style="display: none;">
			<div class="module span12">
				<div class="module-body">
		            <table class="table table-striped table-bordered table-condensed">
		                <thead>
		                    <tr>
		                        <th>Book ID</th>
		                        <th>Book Title</th>
		                        <th>Author</th>
		                        <th>Description</th>
		                        <th>Category</th>
		                        <th>Status</th>
		                    </tr>
		                </thead>
		                <tbody id="book-results"></tbody>
		            </table>
				</div>
			</div>
		</div>
	</div>
	<input type="hidden" name="categories_list" id="categories_list" value="<?php echo e(json_encode($categories_list)); ?>">
</div>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom_bottom_script'); ?>
<script type="text/javascript">
    var categories_list = $('#categories_list').val();
</script>
<script type="text/javascript" src="<?php echo e(asset('static/custom/js/script.searchbook.js')); ?>"></script>

<script type="text/template" id="search_book">
    <?php echo $__env->make('underscore.search_book', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('account.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LMS-IN-LARAVEL\resources\views/public/book-search.blade.php ENDPATH**/ ?>
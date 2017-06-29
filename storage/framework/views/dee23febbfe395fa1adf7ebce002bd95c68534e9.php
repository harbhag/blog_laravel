<?php $__env->startSection('content'); ?>
<div class="col-sm-8 blog-main">
	<h1>Publish a Post eh!</h1>
<hr/>
<?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<form method="POST" action="/posts">
		<?php echo e(csrf_field()); ?>

  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="form-group">
    <label for="body">Body</label>
    <textarea name="body" id="body" class="form-control"></textarea>
  </div>
<div class="form-group">
  <button type="submit" class="btn btn-primary">Publish</button>
</div>

	</form>

</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
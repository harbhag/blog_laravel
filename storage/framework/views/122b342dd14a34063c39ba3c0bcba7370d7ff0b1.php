<?php $__env->startSection('content'); ?>
<div class="col-sm-8 blog-main">
    <h1> <?php echo e($post->title); ?>.</h1>
    <?php echo e($post->body); ?>

    <hr>
    <strong>Comments</strong>
    <div class="comments">
      <ul class="list-group">
        <?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li class="list-group-item">
            <strong><?php echo e($comment->created_at->diffForHumans()); ?>:&nbsp; </strong>
            <?php echo e($comment->body); ?>

          </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
    </div>

    <!--Add a Comment -->
    <hr>
    <div class="card">
      <div class="card-block">
        <form method="POST" action="/posts/<?php echo e($post->id); ?>/comments">
          <?php echo e(csrf_field()); ?>

          <div class="form-group">
            <textarea name="body" placeholder="Your comment Here." class="form-control" required></textarea>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary">Add Comment</button>
          </div>
        </form>
        <?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
      </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
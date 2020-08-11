<?php $__env->startSection('content'); ?>
    <div class="container mt-4">
        
        <div class="border p-4">
        <div class="mb-4 text-right">
            <a class="btn btn-primary" href="<?php echo e(route('posts.edit', ['post' => $post])); ?>">
                編集する
            </a>
            <form
            style="display: inline-block;"
            method="POST"
            action="<?php echo e(route('posts.destroy', ['post' => $post])); ?>"
        >
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>

            <button class="btn btn-danger">削除する</button>
        </form>
        </div>
        
            <h1 class="h5 mb-4">
                <?php echo e($post->title); ?>

            </h1>

            <p class="mb-5">
                <?php echo nl2br(e($post->body)); ?>

            </p>
            <form class="mb-4" method="POST" action="<?php echo e(route('comments.store')); ?>">
                    <?php echo csrf_field(); ?>

                    <input
                        name="post_id"
                        type="hidden"
                        value="<?php echo e($post->id); ?>"
                    >

                    <div class="form-group">
                        <label for="body">
                            本文
                        </label>

                        <textarea
                            id="body"
                            name="body"
                            class="form-control <?php echo e($errors->has('body') ? 'is-invalid' : ''); ?>"
                            rows="4"
                        ><?php echo e(old('body')); ?></textarea>
                        <?php if($errors->has('body')): ?>
                            <div class="invalid-feedback">
                                <?php echo e($errors->first('body')); ?>

                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary">
                            コメントする
                        </button>
                    </div>
                </form>
                
            <section>
                <h2 class="h5 mb-4">
                    コメント
                </h2>

                <?php $__empty_1 = true; $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="border-top p-4">
                        <time class="text-secondary">
                            <?php echo e($comment->created_at->format('Y.m.d H:i')); ?>

                        </time>
                        <p class="mt-2">
                            <?php echo nl2br(e($comment->body)); ?>

                        </p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p>コメントはまだありません。</p>
                <?php endif; ?>
            </section>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel-bbs/resources/views/posts/show.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
    <div class="container mt-4">
        <div class="border p-4">
            <h1 class="h5 mb-4">
                投稿の新規作成
            </h1>

            <form method="POST" action="<?php echo e(route('posts.store')); ?>">
                <?php echo csrf_field(); ?>

                <fieldset class="mb-4">
                    <div class="form-group">
                        <label for="title">
                            タイトル
                        </label>
                        <input
                            id="title"
                            name="title"
                            class="form-control <?php echo e($errors->has('title') ? 'is-invalid' : ''); ?>"
                            value="<?php echo e(old('title')); ?>"
                            type="text"
                        >
                        <?php if($errors->has('title')): ?>
                            <div class="invalid-feedback">
                                <?php echo e($errors->first('title')); ?>

                            </div>
                        <?php endif; ?>
                    </div>

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

                    <div class="mt-5">
                        <a class="btn btn-secondary" href="<?php echo e(route('top')); ?>">
                            キャンセル
                        </a>

                        <button type="submit" class="btn btn-primary">
                            投稿する
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel-bbs/resources/views/posts/create.blade.php ENDPATH**/ ?>
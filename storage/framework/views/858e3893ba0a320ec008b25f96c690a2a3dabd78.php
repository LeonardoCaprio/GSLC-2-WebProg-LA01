<?php $__env->startSection('title', 'Add Course Form'); ?>

<?php $__env->startSection('content'); ?>
<div class="insert">
    <div class="form-left">
        <h1>Insert <br> Your Course</h1>
    </div>
    <div class="form-right">
        <form action="<?php echo e(route('add_logic')); ?>" method="post" class="form-action">
        <?php echo csrf_field(); ?>
            <label for="text">Course Code</label> <br>
            <input type="text" placeholder="Code Course" name="code_course"><br>
            <?php $__errorArgs = ['code_course'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <?php echo e($message); ?>

            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <label for="text">Course Name</label><br>
            <input type="text" placeholder="Course" name="name_course"><br>
            <?php $__errorArgs = ['name_course'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <?php echo e($message); ?>

            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <label for="text">Class Course</label><br>
            <input type="text" placeholder="Class" name="class_course"><br>
            <?php $__errorArgs = ['class_course'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <?php echo e($message); ?>

            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <label for="text">Score Test</label><br>
            <input type="text" placeholder="Score" name="score_course"><br>
            <?php $__errorArgs = ['score_course'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <?php echo e($message); ?>

            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <div class="submit">
                <input type="submit" class="submit_button">
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\BINUS\Web Prog Lec Semester 5\Pertemuan 5\2440015322_Assignment II Web Programming\2440015322_Leonardo Caprio\resources\views/add_form.blade.php ENDPATH**/ ?>
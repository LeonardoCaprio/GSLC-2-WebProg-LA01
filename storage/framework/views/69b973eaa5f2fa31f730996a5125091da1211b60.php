<?php $__env->startSection('title', 'Course'); ?>

<?php $__env->startSection('content'); ?>
<div class="course-BG">
    <div class="course">
        <H1>----Score Course ODD 2022/2023----</H1>
        <table class="table">
            <thead class="nav-table">
              <tr>
                <th scope="col">Course Code</th>
                <th scope="col">Course Name</th>
                <th scope="col">Class</th>
                <th scope="col">Score</th>
                <th scope="col">Grade</th>
              </tr>
            </thead>

            <?php if(count($course)<1): ?>
              <h1>NO GAME DATA FOUND!!!</h1>
            <?php else: ?>
                <?php $__currentLoopData = $course; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listcourse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tbody class="nav-body">
                        <tr>
                            <div>
                                <td><?php echo e($listcourse->code_course); ?></td>
                                <td><?php echo e($listcourse->name_course); ?></td>
                                <td><?php echo e($listcourse->class_course); ?></td>
                                <td><?php echo e($listcourse->score_course); ?></td>
                                <?php if(($listcourse->score_course>=90) and ($listcourse->score_course<=100)): ?>
                                    <td>A</td>
                                <?php elseif(($listcourse->score_course>=80) and ($listcourse->score_course<90)): ?>
                                    <td>B</td>
                                <?php elseif(($listcourse->score_course>=70) and ($listcourse->score_course<80)): ?>
                                    <td>C</td>
                                <?php else: ?>
                                    <td>D</td>
                                <?php endif; ?>
                            </div>
                        </tr>
                    </tbody>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\BINUS\Web Prog Lec Semester 5\Pertemuan 5\2440015322_Assignment II Web Programming\2440015322_Leonardo Caprio\resources\views/course.blade.php ENDPATH**/ ?>
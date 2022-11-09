<?php $__env->startSection('title', 'Score Course'); ?>

<?php $__env->startSection('content'); ?>
<table class="table">
    <thead class="nav-table">
      <tr>
        <th scope="col">Course Code</th>
        <th scope="col">Course Name</th>
        <th scope="col">Score</th>
        <th scope="col">Grade</th>
      </tr>
    </thead>

    <?php $__currentLoopData = $listscore; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $score): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tbody class="bodytable">
        <tr>
          <td><?php echo e($score["Course Code"]); ?></td>
          <td><?php echo e($score["Course"]); ?></td>
          <td><?php echo e($score["Score"]); ?></td>
            <?php if(($score["Score"]>=90) and ($score["Score"]<=100)): ?>
                <td>A</td>
            <?php elseif(($score["Score"]>=80) and ($score["Score"]<90)): ?>
                <td>B</td>
            <?php elseif(($score["Score"]>=70) and ($score["Score"]<80)): ?>
                <td>C</td>
            <?php else: ?>
                <td>D</td>
          <?php endif; ?>
        </tr>
    </tbody>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\BINUS\Web Prog Lec Semester 5\Pertemuan 5\2440015322_Assignment II Web Programming\2440015322_Leonardo Caprio\resources\views/scorecourse.blade.php ENDPATH**/ ?>
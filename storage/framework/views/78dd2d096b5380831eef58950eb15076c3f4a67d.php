<?php $__env->startSection('title', 'Homepage'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="box">
        <div class="konten">
            <h1>Assignment II Web Programing LA01</h1>
            <h3>by Leonardo Caprio</h3>
        </div>
        <div class="konten1">
            <div class="konten1.1">
                <table>
                    <thead>
                        <tr>
                            <th scope="col">Key</th>
                            <th scope="col">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>GPA</th>
                            <td><?php echo e($gpa); ?></td>
                        </tr>
                        <tr>
                            <th>SKS</th>
                            <td><?php echo e($sks); ?></td>
                        </tr>
                        <tr>
                            <th>Community Service</th>
                            <td><?php echo e($comserv); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="konten1.2">
                <img src=<?php echo e($picture); ?> alt="" width="200">
            </div>
            <div class="konten1.3">
                <table>
                    <thead>
                        <tr>
                            <th scope="col">Key</th>
                            <th scope="col">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Name</th>
                            <td><?php echo e($name); ?></td>
                        </tr>
                        <tr>
                            <th>NIM</th>
                            <td><?php echo e($nim); ?></td>
                        </tr>
                        <tr>
                            <th>Class</th>
                            <td><?php echo e($class); ?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><?php echo e($email); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\BINUS\Web Prog Lec Semester 5\Pertemuan 5\2440015322_Assignment II Web Programming\2440015322_Leonardo Caprio\resources\views/home.blade.php ENDPATH**/ ?>
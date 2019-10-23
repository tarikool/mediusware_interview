<?php $__env->startSection('content'); ?>
    <div class="container-fluid app-body settings-page">
        <h1>Recent Posts sent to buffer</h1>

        <div class="row">
            <div class="col-md-3 col-lg-3">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
            <div class='col-md-3 col-lg-3'>
                <div class="form-group">
                    <input class="date form-control" type="text">
                </div>
            </div>
            <div class="col-md-3 col-lg-3">
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Group Byu all
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                     <?php $__currentLoopData = $buffer_posting; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="#"><?php echo e($post->groupInfo->type); ?></a></li>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover social-accounts">
                    <thead>
                    <tr><th>Group Name</th> <th>Group Type</th> <th>Account Name</th> <th>Post Text</th> <th>Time</th> </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $buffer_posting; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($post->groupInfo->name); ?></td>
                            <td><?php echo e($post->groupInfo->type); ?></td>
                            <td width="350">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="">
                                            <span class="fa fa-<?php echo e($post->accountInfo->type); ?>"></span>
                                            <img width="50" class="media-object img-circle" src=" <?php echo e($post->accountInfo->avatar); ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="media-body media-middle" style="width: 180px;">
                                        <h4 class="media-heading"><?php echo e($post->accountInfo->user->name); ?></h4>
                                    </div>
                                </div>
                            </td>

                            <td> <?php echo e($post->socialPost->text); ?></td>
                            <td> <?php echo e(date('d M, Y a', strtotime($post->socialPost->created_at))); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <?php echo e($buffer_posting->links()); ?>

            </div>
        </div>

        </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
        $('.date').datepicker({
            format: 'mm-dd-yyyy'
        });

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
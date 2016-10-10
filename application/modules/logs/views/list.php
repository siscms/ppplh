<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Log Aktifitas
            <small>List</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Log Aktifitas</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-init table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Modul</th>
                                    <th>Aksi</th>
                                    <th>Info</th>
                                    <th>Penulis</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($logs > 0) {
                                    foreach ($logs as $row):
                                        ?>
                                        <tr>
                                            <td><?php echo $row['log_date']; ?></td>
                                            <td><?php echo $row['log_module']; ?></td>
                                            <td><?php echo $row['log_action']; ?></td>
                                            <td><?php echo $row['log_info']; ?></td>
                                            <td><?php echo $row['user_full_name']; ?></td>
                                        </tr>
                                    <?php
                                endforeach;
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
</div>
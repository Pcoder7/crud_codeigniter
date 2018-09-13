<div class="container">
    <div class="page-header">
        <h1>Simple CRUD System <a href="<?php echo base_url() ?>employee/add_new" class="btn btn-lg btn-success float-right"> Add New</a></h1>
    </div>
        <hr>
    </div>
       <div class="container">

      <div class="card card-primary">
    <h4 class="card-header">Employee list</h4>
    <div class="car-body">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Address</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
               <?php if(count($employees)>0){ ?>
               <?php foreach($employees as $emp){ ?>
            <tr>
                    <td><?php echo $emp->emp_id; ?></td>
                    <td><?php echo $emp->emp_fname.' '.$emp->emp_lname; ?></td>
                    <td><?php echo $emp->emp_email; ?></td>
                    <td><?php echo $emp->emp_address; ?></td>
                    <td><img src="<?php echo $emp->emp_image; ?>" >
                    <td>
                        <a href="<?php echo base_url() ?>employee/edit/<?php echo $emp->emp_id; ?>" class="btn btn-primary btn-xs"> Update</a>
                        <button type="button" class="btn btn-danger btn-xs"> Delete</button>
                    </td>
                </tr>
            <?php } ?>

               <?php } ?>

            </tbody>
        </table>
        <?php echo $pagination; ?>
    </div>

</div>
        <hr>
</div>
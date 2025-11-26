<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banner List</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
    <div class="content-wrapper">
        <h2 class="mb-4">Banner List</h2>
         <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>alt</th>
                    
                    <th>added_date</th>
					
					<th>Action</th>
					
                  </tr>
                  </thead>
                  <tbody>
    				  <?php $i=1; foreach($banner as $value){ ?>
                      <tr>
        				  <th scope="row"><?= $i; ?></th>
        				  
        				  <td><img src="<?= base_url('uploads/' . $value->banner_img); ?>" width="100" height="100"></td>
        				  <td><?= $value->title; ?></td>
        				  <td><?= $value->description; ?></td>
        				  <td><?= $value->alt; ?></td>
        				  <td><?= $value->added_date; ?></td>
                          <td>
                             <a href="<?= base_url('admin/edit_banner/'.$value->id); ?>">Edit</a> |
            				  <a href="<?= base_url('admin/delete_banner/'.$value->id); ?>">Delete</a>
        				</td>
                      </tr>
    				  <?php  $i++; } ?>
                  </tbody>
                 
                </table>
    </div>
</body>
</html>

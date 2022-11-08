<div class="card card-outline card-primary rounded-0">
    <div class="card-header">
        <h4 class="mb-0">List of Contact</h4>
    </div>
   
    <div class="card-body">
        <div class="container-fluid">
            <table class="table table-bordered" id="users-list">

                <thead>
                    <tr class="lg navbar-light" style="background: linear-gradient(to right, #b2fefa, #0ed2f7);">
                        <th class="py-1 text-center">S.No</th>
                        <th class="py-1 text-center">Name</th>
                        <th class="py-1 text-center">Email</th>
                        <th class="py-1 text-center">Contact</th>
                        <th class="py-1 text-center">address</th>               
                        <th class="py-1 text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(count($list) > 0): ?>
                        <?php $i = 1; ?>
                        <?php foreach($list as $row): ?>
                            <tr>
                                <th class="p-1 align-middle text-center"><?= $i++ ?></th>
                                <td class="p-1 align-middle"><?= $row->firstname.", ".$row->lastname ?></td>
                                <td class="p-1 align-middle"><?= $row->email ?></td>
                                <td class="p-1 align-middle"><?= $row->contact ?></td>
                                <td class="p-1 align-middle"><?= $row->address ?></td>        
                                <td class="p-1 align-middle text-center">
                                    <div class="btn-group btn-group-sm">
                                        <a href="<?= base_url('main/view_details/'.$row->id) ?>" class="btn btn-default bg-gradient-light border text-dark rounded-0" title="View Contact"><i class="fa fa-eye"></i></a>
                                        <a href="<?= base_url('main/edit/'.$row->id) ?>" class="btn btn-primary rounded-0" title="Edit Contact"><i class="fa fa-edit"></i></a>
                                        <a href="<?= base_url('main/delete/'.$row->id) ?>" onclick="if(confirm('Are you sure to delete this contact details?') === false) event.preventDefault()" class="btn btn-danger rounded-0" title="Delete Contact"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
            
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
      $('#users-list').DataTable();
  } );
</script>
<?php include "../include/config.php"?>
<htm>
    <head>
        <title>AdminRevisionNorth</title>
        <?php include "../include/link.php"?>
    </head>
    <body>
        <?php include "include/header.php"?>
        <div class="container mt-4">
            <div class="row">
                <div class="col">
                    <table class="table">
                        <tr>
                            <th>id</th>
                            <th>user_id</th>
                            <th>month</th>
                            <th>unit</th>
                            <th>amount</th>
                            <th>date_of_creation</th>
                            <th>Action</th>
                        </tr>
                        
                        <?php
                          $calling = callingData('bill');
                          foreach($calling as $r):
                        ?>
                        
                        <tr>
                            <td><?= $r['id'];?></td>
                            <td><?= $r['user_id'];?></td>
                            <td><?= $r['month'];?></td>
                            <td><?= $r['unit'];?></td>
                            <td><?= $r['amount'];?></td>
                            <td><?= $r['date_of_creation'];?></td>
                            <td>
                                <a href="index.php?delete=<?= $r['id'];?>" class="btn btn-dark">Delete</a>
                                
                                <?php if($r['status']==false):?>
                                
                                <a href="index.php?id=<?= $r['id'];?>" class="btn btn-info">Approve</a>
                                
                                <?php else:?>
                                
                                <a href="" class="btn btn-light">Approved</a>
                                
                                <?php endif;?>
                                
                            </td>
                        </tr>
                        
                        <?php endforeach;?>
                        
                    </table>
                </div>
                
            </div>
        </div>
        
        <?php include "../include/footer.php"?>
        
    </body>
</htm>

<?php
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    
    deleteData('bill',"id = '$id'");
    redirect("index");
}
        
if(isset($_GET['id'])){
    $id = $_GET['id'];
        
    updateData('bill',"status='1'","id = '$id'");
    redirect("index");
}        

?>







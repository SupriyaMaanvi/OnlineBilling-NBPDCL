<?php include "../include/config.php"?>
<htm>
    <head>
        <title>AdminRevisionNorth</title>
        <?php include "../include/link.php"?>
    </head>
    <body>
        <?php include "include/header.php"?>
        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col">
                    <table class="table">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Pan</th>
                            <th>Aadhar</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Area</th>
                            <th>Pin_code</th>
                            <th>Action</th>
                        </tr>
                        
                        <?php
                          $calling = callingData('user');
                          foreach($calling as $r):
                        ?>
                        
                        <tr>
                            <td><?= $r['id'];?></td>
                            <td><?= $r['name'];?></td>
                            <td><?= $r['email'];?></td>
                            <td><?= $r['contact'];?></td>
                            <td><?= $r['pan'];?></td>
                            <td><?= $r['aadhar'];?></td>
                            <td><?= $r['city'];?></td>
                            <td><?= $r['state'];?></td>
                            <td><?= $r['area'];?></td>
                            <td><?= $r['pin_code'];?></td>
                            <td>
                                <a href="index.php?del=<?= $r['id'];?>" class="btn btn-dark">Delete</a>
                                
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
if(isset($_GET['del'])){
    $id = $_GET['del'];
    
    deleteData('user',"id = '$id'");
    redirect("index");
}
        
if(isset($_GET['id'])){
    $id = $_GET['id'];
        
    updateData('user',"status='1'","id = '$id'");
    redirect("index");
}
?>






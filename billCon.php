<?php include "include/config.php"?>
<htm>
    <head>
        <title>billRevisionNorth</title>
        <?php include "include/link.php"?>
    </head>
    <body>
        <?php include "include/header.php"?>
        <div class="container-fluid mt-4">
            <div class="row">
                
                <div class="col-lg-3">
                    <?php include "include/side.php";?>
                </div>
                
                <div class="col-lg-9">
                    <div class="row">
                    <div class="col-lg-10 mx-auto">
                    <div class="card">
                    <div class="card-body">
                        
                        <h2>Online Billing</h2>
                        <h4>NORTH BIHAR POWER DISTRIBUTION COMPANY LTD</h4>
                        <h6>GOVERNMENT OF BIHAR</h6>
                        <br>
                    <form action="" method="post">
                        
                        <div class="form-group">
                            <label>user_id</label>
                            <select type="text" name="user_id" id="user_id" class="form-control">
                                <?php
                               $calling = callingData('user');
                               foreach($calling as $r):
                                ?>
                                <option value="<?= $r['id'];?>"><?= $r['name'];?></option>
                                <?php endforeach;?>
                                
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label>month</label>
                            <input type="text" name="month" id="month" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label>unit</label>
                            <input type="text" name="unit" id="unit" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label>date_of_creation</label>
                            <input type="date" name="date_of_creation" id="date_of_creation" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" name="bill_send" class="btn btn-info float-right">
                        </div>
                        
                        
                    </form>
                </div>
            </div>
        </div>
        </div>
       </div>
      </div>
    </div>
        <?php include "include/footer.php"?>
        
    </body>
</htm>

<?php
if(isset($_POST['bill_send'])){
    
    $data = [
        'user_id' => $_POST['user_id'],
        'month' => $_POST['month'],
        'unit' => $_POST['unit'],
        'amount' => $_POST['unit']*8,
        'date_of_creation' => $_POST['date_of_creation'],
        'status' => $_POST['status']
        ]; 
    
    insertData('bill',$data);
}
?>






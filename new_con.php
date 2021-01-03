<?php include "include/config.php";?>
<htm>
    <head>
        <title>RevisionNorth</title>
        <?php include "include/link.php";?>
    </head>
    <body>
        <?php include "include/header.php";?>
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
                        
                        <h2>Online Registration</h2>
                        <h4>NORTH BIHAR POWER DISTRIBUTION COMPANY LTD</h4>
                        <h6>GOVERNMENT OF BIHAR</h6>
                        <br>
                    <form action="" method="post">
                        
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label>Contact</label>
                            <input type="text" name="contact" id="contact" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label>Pan</label>
                            <input type="text" name="pan" id="pan" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label>Aadhar</label>
                            <input type="text" name="aadhar" id="aadhar" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" name="city" id="city" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label>State</label>
                            <input type="text" name="state" id="state" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label>Area</label>
                            <input type="text" name="area" id="area" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label>Pin_code</label>
                            <input type="text" name="pin_code" id="pin_code" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" name="con_send" class="btn btn-info float-right">
                        </div>
                        
                        
                    </form>
                </div>
            </div>
        </div>
        </div>
       </div>
      </div>
    </div>
        
        <?php include "include/footer.php";?>
        
    </body>
</htm>

<?php
if(isset($_POST['con_send'])){
    
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    if(checkData('user',"contact = '$contact'")){
        echo"<script>alert('contact already exist')</script>";
    }
    elseif(checkData('user',"email = '$email'")){
        echo"<script>alert('email already exist')</script>";
    }
    else{
    $data = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'contact' => $_POST['contact'],
        'pan' => $_POST['pan'],
        'aadhar' => $_POST['aadhar'],
        'city' => $_POST['city'],
        'state' => $_POST['state'],
        'area' => $_POST['area'],
        'pin_code' => $_POST['pin_code']
    ];
    
    insertData('user',$data);
}
}
?>










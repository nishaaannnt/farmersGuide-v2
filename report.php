<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Report</title>
</head>

<body>
    <!-- NAVBAR -->
    <?php include 'partial/_header.php'?>
    <?php include 'partial/_dbconnect.php'?>

    <?php
    $alert=false;
    $method=$_SERVER['REQUEST_METHOD'];
    if($method=='POST'){
            $fname=$_POST['first_name'];
            $lname=$_POST['surname'];
            $work=$_POST['work'];
            $state=$_POST['state'];
            $crop=$_POST['crop'];
            $ferti=$_POST['fertilizer'];
            $cuse=$_POST['crop_use'];
            $govsub=$_POST['gov_sub'];
            $sql="INSERT INTO `report`(`fname`, `lname`, `work`, `state`, `crop`, `fertilizer`, `crop_use`, `subsidy`, `timestamp`) VALUES ('$fname','$lname','$work','$state','$crop','$ferti','$cuse','$govsub',current_timestamp())";
            $result=mysqli_query($conn,$sql);

            $alert=true;
            

            
        } ?>

    <div class="form-body">
        <?php 
       echo '
            
        <form action="'.$_SERVER['REQUEST_URI'].'" method="post">
            <h1>REPORT</h1>';
            if($alert){
                echo '
                <div class="alert">
                <p id="alert">
                Response Recorded <button type="button"onclick="closealert()">X</button></p>
            </div>
                ';};


            if(isset($_SESSION["loggedin"])&&$_SESSION["loggedin"]=true){
            echo '<hr>
            <div class="form-row">
                <div class="flexc">
                    <label for="form_name">Firstname *</label>
                    <input type="text" name="first_name" placeholder="Please enter your firstname *" required="required"
                        data-error="Firstname is required." />
                </div>
                <div class="flexc">

                    <label for="form_lastname">Lastname *</label>
                    <input type="text" name="surname" placeholder="Please enter your lastname *" required="required"
                        data-error="Lastname is required." />
                </div>
            </div>
            <div class="form-row">
                <div class="flexc">

                    <label for="form_need">Worked as*</label>
                    <select name="work" type="text" required="required" data-error="Please specify your need.">
                        <option value="" selected disabled>
                            --Select Your Role--
                        </option>
                        <option>Land Owner</option>
                        <option>Land Labourer</option>
                    </select>
                </div>
                <div class="flexc">
                    <label for="form_need">State *</label>
                    <select name="state" type="text" required="required" data-error="Please specify your need.">
                        <option value="" selected disabled>
                            --Select Your State--
                        </option>
                        <option>Andhra Pradesh</option>
                        <option>Arunachal Pradesh</option>
                        <option>Assam</option>
                        <option>Bihar</option>
                        <option>Chhattisgarh</option>
                        <option>Goa</option>
                        <option>Gujarat</option>
                        <option>Haryana</option>
                        <option>Himachal Pradesh</option>
                        <option>Jharkhand</option>
                        <option>Karnataka</option>
                        <option>Kerala</option>
                        <option>Madhya Pradesh</option>
                        <option>Maharashtra</option>
                        <option>Manipur</option>
                        <option>Meghalaya</option>
                        <option>Mizoram</option>
                        <option>Nagaland</option>
                        <option>Odisha</option>
                        <option>Punjab</option>
                        <option>Rajasthan</option>
                        <option>Sikkim</option>
                        <option>Tamil Nadu</option>
                        <option>Telangana</option>
                        <option>Tripura</option>
                        <option>Uttarakhand</option>
                        <option>Uttar Pradesh</option>
                        <option>West Bengal</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="flexc">
                    <label for="form_need">Crop Grown*</label>
                    <select name="crop" type="text" required="required" data-error="Please specify your need.">
                        <option value="" selected disabled>
                            --Select Your Crop--
                        </option>
                        <option>Rice</option>
                        <option>Wheat</option>
                        <option>Millets</option>
                        <option>Pulses</option>
                        <option>Tea</option>
                        <option>Coffee</option>
                        <option>Sugarcane</option>
                        <option>Oil Seeds</option>
                        <option>Cotton</option>
                        <option>Jute</option>
                        <option>Other</option>
                    </select>
                </div>
                <div class="flexc">


                    <label for="form_need">Fertilizer Used*</label>
                    <select name="fertilizer" type="text" required="required" data-error="Please specify your need.">
                        <option value="" selected disabled>
                            --Select Your Role--
                        </option>
                        <option>Organic(cowdung etc.)</option>
                        <option>Inorganic(chemical)</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="flexc">
                    <label for="form_need">Crop Used for*</label>
                    <select name="crop_use" type="text" required="required" data-error="Please specify your need.">
                        <option value="" selected disabled>
                            --Select Your Crop--
                        </option>
                        <option>Domestic Use</option>
                        <option>Selling</option>
                        <option>Other</option>
                    </select>
                </div>

                <div class="flexc">


                    <label for="form_need">Used Government Subsidy*</label>
                    <select name="gov_sub" type="text" required="required" data-error="Please specify your need.">
                        <option value="" selected disabled>
                            --Select Your Answer--
                        </option>
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                </div>
            </div>  
            <button type="submit" class="subbtn">Submit</button>
        </form>';
        }
        else{
            echo '<hr><div class="notlogged">
            
            <h2>*PLEASE LOGIN TO REPORT YOUR DATA*</h2>
            <p>Login or signup in the Navigation bar</p>
            </div>';
        }
        ?>
        <div class="report-desc">
            <p>
                <hr>
                <br>
                <h3>NOTE:</h3>
                <br>
                <ul>
                    <li>Please Enter correct information.</li>
                    <li>If you are entering on someones behalf then please verify all the details.</li>
                    <li>Your data is valuable to us and also for anyone who is interested in agriculture so please be honest.</li>
                    <li>By filling the form you accept all our terms and conditions</li>
                </ul>
            </p>
        </div>
    </div>
    <?php include 'partial/_footer.php'?>

</body>

</html>
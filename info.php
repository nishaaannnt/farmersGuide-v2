<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info|Farmer's Guide</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'partial/_header.php'?>
    <?php include 'partial/_dbconnect.php'?>

    <!-- CRITERIA  -->
    <div class="info">
        <div class="info-head">
            <h1>See my Farmers </h1>

        </div>
        <?php 
        if(isset($_SESSION['loggedin'])&&$_SESSION["loggedin"]=true){
        echo '
        <div class="info-criteria">
            <form action="'.$_SERVER['REQUEST_URI'] .'" method="post">
                <div class="form-row">
                    <div class="flexc">
                        <label class="state-info" for="form_need">Select a state as per your requirement *</label>
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
                    <button type="submit" class="subbtn">Submit</button>
            </form>
        </div>
    ';}else{
        echo'
        <div class="notlogged">
        <h2>*PLEASE LOGIN TO ACCESS THE REPORT*</h2>
            <p>Login or signup in the Navigation bar</p> 
        </div>';
    }
    ?>
        <div class="info-head">
            <hr>
            <ul>
                <p>DISCLAIMER:</p>
                <li>Select the state of which you wanna see agricultural data.</li>
                <li>A list can be seen below if data is available.</li>
                <li>If no results are seen, it is possible that no data is added of that area.</li>
                <li>If you have any information about that area you can fill it in report section.</li>
            </ul>
            <hr>
        </div>
        <!-- PHP FOR DISPLAYING RESULT -->
        <?php
    $method=$_SERVER['REQUEST_METHOD'];
    if($method=='POST'){
            $state=$_POST['state']; 
            $sql="SELECT * FROM `report` WHERE state='$state'";
            $result=mysqli_query($conn,$sql);
            $once=true;
                
            $noResult=true;

            while($row=mysqli_fetch_assoc($result)){
                $noResult=false;
                if($once){
                    echo'<div class="result">
                <hr>
                <h2 class="info-h2">RESULT</h2>
                <hr>
                <br>
                <table>
                <tbody>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Worked as</th>
                        <th>Crop grew</th>
                        <th>Fertilizer</th>
                        <th>Crop use</th>
                        <th>Gov Subsidy</th>
                        <th>Time</th>
                    </tr>';
                    $once=false;
                }
            $fname=$row['fname'];
            $lname=$row['lname'];
            $work=$row['work'];
            $crop=$row['crop'];
            $ferti=$row['fertilizer'];
            $cuse=$row['crop_use'];
            $govsub=$row['subsidy'];
            $time=$row['timestamp'];
            echo '
            <tr>
                    <td>'.$fname.'</td>
                    <td>'.$lname.'</td>
                    <td>'.$work.'</td>
                    <td>'.$crop.'</td>
                    <td>'.$ferti.'</td>
                    <td>'.$cuse.'</td>
                    <td>'.$govsub.'</td>
                    <td>'.$time.'</td>
                </tr>

            ';
            }
            if($noResult){
                echo '<hr><h2 class="info-h2">No Results found</h2>';
            }else{
                echo'</tbody>
                </table>
            </div>';
            }
        } ?>
    </div>
    <?php include 'partial/_footer.php'?>
</body>

</html>
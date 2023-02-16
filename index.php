<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>



<!-- LINKED TABLE TO REPORT -->
<!-- WRITING ALERT IN HOME OPEN XAMPP AND SEE USERS AND TABLE -->
<!-- NOT INSERTED ANY DATA YET -->

<body>
    <div class="main">
        <!-- NAVBAR -->
        <?php include 'partial/_header.php';
        ?>
        <!-- HOME -->
        <div class="home">

            <div class="home-head">
                <h1>WELCOME TO THE PLACE OF THE <span> CROP MAGICIANS</span></h1>
                <p>Start your agriculture journey with us</p>
            </div>

            <div class="homemain">
                <div class="report">
                    <p>List your cultivation report to help the report be more accurate and crisp</p>
                    <a class="report-btn" href="report.php">List your Report</a>
                </div>
                <div class="seereport">

                    <p>See cultivation reports and understand the condition of agriculture</p>
                    <a class="seereport-btn" href="info.php">See the Reports</a>
                </div>
            </div>
        </div>

        <!-- ABOUT -->
        <div class="about" id="about">
            <h1>WHAT IS <span> FARMER'S GUIDE</span> ?</h1>
            <hr>

            <div class="about-container">
                <div class="about-text">
                    <h2>KNOW ABOUT OTHER'S..</h2>
                    <h1>AGRICULTURAL APPROACH</h1>
                    <p>Here, you can report the agricultural state of your area, as a farmer. This helps other's who
                        want to start with agriculture but have no prior knowledge, can actually look through this
                        data and see the required ammenities for growing their crop. This can help in scaling and
                        making agriculture easy for new comers and youth. <br><br> Scroll above or see the
                        navigation bar to access or report the data in your region.</p>
                </div>
                <div class="about-img">
                    <img src="static/farmer.jpg" class="farmer-img" alt="">
                </div>
            </div>
        </div>
        <!-- ABOUT THE PROJECT -->
        <div class="about">
            <hr>
            <h1>HOW DOES<span> FARMER'S GUIDE</span> HELP?</h1>
            <hr>

            <div class="about-container">
                <div class="about-img">
                    <img src="static/farmer2.jpg" class="farmer-img" alt="">
                </div>
                <div class="about-text">
                    <h2>SEE THE FARMING ACTIVITIES</h2>
                    <h1>OF OTHER INDIAN STATES</h1>
                    <p>Understanding the farming culture in other states can help us understand which crop is popular in
                        which region. This makes it easier to also interpret the climatic conditions and their effect on
                        agriculture, making more clear about the farming cutlure. We provide all necessary information
                        so that one can understand the requirments clearly, that is, what things are necessary to grow a
                        certain crop.<br><br> Scroll above or see the
                        navigation bar to access or report the data in your region.</p>
                </div>

            </div>
        </div>
        <!-- FOOTER -->
        <?php include 'partial/_footer.php' ?>

    </div>
    <script src="script.js"></script>
</body>

</html>
<!DOCTYPE html>
<html>
    <link re
    <style>
        body{
            margin-top: 55px;
        }
    </style>
</head>
<body background="img/bg.jpg">
    <?php include 'header.php';?>
    <div class="container">
        <div class="row top_margin">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">INTERNSHIP REGISTRATION</div>
                    <div class="panel-body">
                        <form method="POST" action="server.php" autocomplete="on">
                            <div class="form-group">
                                <label for="User">Your Name</label>
                                <input type="text" class="form-control" id="User" name="User" required autofocus placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <label for="Usermobile">Your Mobile</label>
                                <input type="number" class="form-control" id="Usermobile" name="Usermobile" placeholder="Enter your mobile">
                            </div>
                            <div class="form-group">
                                <label for="Name">Name of Internship</label>
                                <input type="text" class="form-control" id="Name" name="Name" required placeholder="Enter Companys name/internship name">
                            </div>
                            <div class="form-group">
                                <label for="Department">Department</label>
                                <select name="Department" required>
                                    <option value="CSE">CSE</option>
                                    <option value="CE">CE</option>
                                    <option value="EEE">EEE</option>
                                    <option value="ECE">ECE</option>
                                    <option value="BME">BME</option>
                                    <option value="BTE">BTE</option>
                                    <option value="ME">ME</option>
                                    <option value="OTHER">OTHER</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Duration">Duration</label>
                                <input type="Number" class="form-control" id="Duration" name="Duration" min="0" max="120" minlength="1" maxlength="3" required placeholder="Enter the duration of program(no of days)">
                            </div>
                            <div class="form-group">
                                <label for="District">District</label>
                                <select name="District" required>
                                    <option value="THRISSUR">Thrissur</option>
                                    <option value="KOCHI">Kochi</option>
                                    <option value="OTHERS">Others</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Price">Price</label>
                                <input type="Number" class="form-control" id="Price" name="Price" min="0" max="20000" maxlength="6" minlength="1" required placeholder="Enter the amount in INR">
                            </div>
                            <div class="form-group">
                                <label for="Mobile">Company's Mobile</label>
                                <input type="Number" class="form-control" id="Mobile" name="Mobile" maxlength="12" minlength="10" placeholder="Enter Companys Mobile/Contact number">
                            </div>
                            <div class="form-group">
                                <label for="Web">Company's Website</label>
                                <input type="url" class="form-control" id="Web" name="Web" placeholder="Enter companys website/email">
                            </div>
                            <div class="form-group">
                                <label for="Address">Companys Address</label>
                                <input type="textarea" class="form-control" id="Address" name="Address" placeholder="Enter Companys address">
                            </div>
                            <div class="form-group">
                                <label for="About">About</label>
                                <input type="textarea" class="form-control" id="About" name="About" placeholder="Enter more about internship">
                            </div>
                            <button type="submit" class="btn btn-primary" value=”registration_submit”>Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


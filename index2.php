<!DOCTYPE html>
<html lang="en">
<?php include 'template/head.php'; ?>

<body>
    <!-- navbar -->
    <?php include 'template/nav.php'; ?>
    <?php if (isset($_SESSION['email'])) {?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <!-- <div class="imaged">
                    <img src="reheboth.png" class = "logo img-responsive" alt="">
                </div> -->
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 mt-3 mb-3">
                <h2 class="fw-bold text-uppercase text-center mt-3 mb-5 h2">Know your customer (KYC) certificate </h2>
                <p>The following confirmation details is drawn up in compliance with CBN KYC policy section 3 of money Laundering
                    Prohibition Act, CBN KYC Directive 2001 and KYC Manual, 2003 ,confirmation that the procedures neccessary
                    for the proper identification of a custimer hs been carried out
                </p>
            </div>

    <?php  
        include 'backend/conn.php';
        $email = $_SESSION['email'];

        $query_user = $conn->query("SELECT * FROM personal_details where email = '$email' ");
        if (mysqli_num_rows($query_user) < 1) {
            $column_name = $conn->query("SHOW COLUMNS FROM personal_details");
            $numColumns = mysqli_num_rows($column_name);
            $x = 0;
            while ($x < $numColumns)
            {
                $colname = $column_name->fetch_array();
                $col[$colname[0]] = $x;
                $x++;
            }
            // print_r($col);
            foreach($col as $rows =>$v) {
                $meta[$rows] = "";
            }
        } else {
            $arr = $query_user->fetch_array();
            foreach($arr as $rows =>$v) {

                $meta[$rows] = $v;
            }
        }
    ?>

<?php  
        $email = $_SESSION['email'];

        $query_user = $conn->query("SELECT * FROM contact_details where email = '$email' ");
        if (mysqli_num_rows($query_user) < 1) {
            $column_name = $conn->query("SHOW COLUMNS FROM contact_details");
            $numColumns = mysqli_num_rows($column_name);
            $x = 0;
            while ($x < $numColumns)
            {
                $colname = $column_name->fetch_array();
                $col[$colname[0]] = $x;
                $x++;
            }
            // print_r($col);
            foreach($col as $rows =>$v) {
                $contact[$rows] = "";
            }
        } else {
            $arr = $query_user->fetch_array();
            foreach($arr as $rows =>$v) {

                $contact[$rows] = $v;
            }
        }
    ?>

<?php  
        $email = $_SESSION['email'];
        $query_user = $conn->query("SELECT * FROM nextofkin where email = '$email' ");
        if (mysqli_num_rows($query_user) < 1) {
            $column_name = $conn->query("SHOW COLUMNS FROM nextofkin");
            $numColumns = mysqli_num_rows($column_name);
            $x = 0;
            while ($x < $numColumns)
            {
                $colname = $column_name->fetch_array();
                $col[$colname[0]] = $x;
                $x++;
            }
            // print_r($col);
            foreach($col as $rows =>$v) {
                $nextofkin[$rows] = "";
            }
        } else {
            $arr = $query_user->fetch_array();
            foreach($arr as $rows =>$v) {

                $nextofkin[$rows] = $v;
            }
        }
    ?>

<?php  
        $email = $_SESSION['email'];
        $query_user = $conn->query("SELECT * FROM employment_address where email = '$email' ");
        if (mysqli_num_rows($query_user) < 1) {
            $column_name = $conn->query("SHOW COLUMNS FROM employment_address");
            $numColumns = mysqli_num_rows($column_name);
            $x = 0;
            while ($x < $numColumns)
            {
                $colname = $column_name->fetch_array();
                $col[$colname[0]] = $x;
                $x++;
            }
            // print_r($col);
            foreach($col as $rows =>$v) {
                $employment[$rows] = "";
            }
        } else {
            $arr = $query_user->fetch_array();
            foreach($arr as $rows =>$v) {

                $employment[$rows] = $v;
            }
        }
    ?>
            <div class="col-sm-12 col-md-12 col-lg-12 mt-4">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Customer Name:</label>
                    <input type="text" class="form-control" value = "<?= $meta['surname']." ". $meta['firstname']." ".$meta['othername'] ;?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email Address</label>
                    <input type="text" class="form-control" value = "<?= $_SESSION['email']; ?>" id="exampleInputPassword1">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Account Type</label>
                        <input type="text" class="form-control" value = "<?= $meta['acc_type']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
                    </div>
                </div>
                <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Telephone Number</label>
                        <input type="text" class="form-control" value ="<?= $contact['phone_number1']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Surname">
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Gender </label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Male">
                    </div>
                </div>
                <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Marital Status </label>
                        <input type="text" class="form-control" value = "<?= $meta['marital_status']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Married">
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Date of Birth</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Male">
                    </div>
                </div>
                <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Maiden Name </label>
                        <input type="text" class="form-control" value = "<?= $meta['maidenName']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Married">
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nationality </label>
                        <input type="text" class="form-control" value = "<?= $meta['nationality']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Male">
                    </div>
                </div>
                <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> State of Origin </label>
                        <input type="text" class="form-control" value = "<?= $meta['origin']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Married">
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">LGA </label>
                        <input type="text" class="form-control" value = "<?= $contact['lg_area']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Male">
                    </div>
                </div>
                <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Home Town </label>
                        <input type="text" class="form-control" value = "<?= $contact['home_town']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Married">
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Place of birth </label>
                        <input type="text" class="form-control" value = "<?= $meta['pob']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Male">
                    </div>
                </div>
                <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Mother Maiden Name </label>
                        <input type="text" class="form-control"  value = "<?= $meta['maidenName']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Married">
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Address </label>
                        <input type="text" class="form-control" value = "<?= $contact['house_number']." ".$contact['street_name']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Male">
                    </div>
                </div>
                <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Religion </label>
                        <input type="text" class="form-control" value = "<?= $contact['religion']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Married">
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="row mt-2">
                <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nearest Bus Stop </label>
                        <input type="text" class="form-control" value = "<?= $contact['bus_stop']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Male">
                    </div>
                </div>
                <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> BVN </label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Married">
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="row mt-2">
                <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Occupation/Profession </label>
                        <input type="text" class="form-control" value = "<?= $employment['nature_of_business']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Male">
                    </div>
                </div>
                <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Employers Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Married">
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="row mt-2">
                <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Address(Office) </label>
                        <input type="text" class="form-control" value = "<?= $employment['street_name']." ".$employmment['bus_stop']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Male">
                    </div>
                </div>
                <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Customer Nickname </label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Married">
                    </div>
                </div>
            </div>

            <!--  -->
            <div class="row mt-2">
                <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Next of Kin </label>
                        <input type="text" class="form-control" value = "<?= $nextofkin['surname']." ".$nextofkin['firstname']." ". $nextofkin['othername'];?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Male">
                    </div>
                </div>
                <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Relationship </label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Married">
                    </div>
                </div>
            </div>

            <!--  -->
            <div class="row mt-2">
                <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Address(Office) </label>
                        <input type="text" class="form-control" value = "<?= $nextofkin['street_name']." ".$nextofkin['bus_stop'];?>"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Male">
                    </div>
                </div>
                <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Customer Nickname(Alias) </label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Married">
                    </div>
                </div>
            </div>

            <!--  -->
            <div class="row mt-2">
                <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> ID TYPE </label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Male">
                    </div>
                </div>
                <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> ID No </label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Married">
                    </div>
                </div>
            </div>

            <!--  -->
            <div class="row mt-2">
                <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> ID issued Date </label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Male">
                    </div>
                </div>
                <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Expiry Date </label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Married">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col md-12 col-lg-12 mb-3">
                    <div class="form-group mb-2">
                        <label for="exampleInputEmail1"> Expected Annual Income(corporate account) </label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="#1,000,000.00">
                    </div>
                    <div class="form-group mb-2">
                        <label for="exampleInputEmail1"> Others(Specify)</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="#1,000,000.00">
                        <div id="emailHelp" class="form-text">Other sources of income apart from occupation: Investment( ) Dividends( ) Others( ) </div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="exampleInputEmail1"> Who introduced you to the bank? </label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <!--  -->
                <div class="col-sm-12 col md-12 col-lg-12 mb-3">
                    <div id="emailHelp" class="form-texts "> <span class="fw-bold"> For Office Use </span></div>
                    <div>
                        <p><span>I,</span> <input type="text" /> the Relationship officer of <input type="text" />
                            who is a prospective customer of the Bank do hereby certify that I have carried out relevant
                            verifications to establish the identity, address and nature of business of the customer and
                            his/her eligibility as an account holder with bank:</p>
                        <p>I also certify that the applicant (prospect) is engaged in (nature of business)
                            <input type="text" /> it shall be my responsibility to
                            continuously monitor the account holder, the account activities and inform the
                            Management/HOP, if it any point in time there is (are) profound change (s) in the standing
                            of the account holder and / or suspicious transactions as required by statutory regulation.
                        </p>
                        <div class="row">
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-5 mt-1">
                                <p>Name and signature of Account Officer: </p>
                                <input class="form-control" type="text">
                            </div>
                            <div class="col-sm-4 mt-1">
                                <p>DATE: </p><input class="form-control" type="text">
                            </div>
                            <div class="col-sm-2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-1">

                            </div>
                            <div class="col-sm-12 col-12 col-md-5">
                                <p>Name and signature of HM/MB: </p>
                                <input class="form-control" type="text">
                            </div>
                            <div class="col-sm-12 col-md-4 mt-1">
                                <p>DATE: </p>
                                <input class="form-control" type="text">
                            </div>
                            <div class="col-sm-2">

                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    <li class="page-item">
                        <a class="page-link" href="index.html">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="index.html">1</a></li>
                    <li class="page-item"><a class="page-link" href="index2.html">2</a></li>
                    <li class="page-item"><a class="page-link" href="index3.html">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="index3.html">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <?php } ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
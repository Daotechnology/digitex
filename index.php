<!DOCTYPE html>
<html lang="en">
<?php include_once('template/head.php'); ?>

<body>
    
    <!-- navbar -->
    <?php include_once('template/nav.php'); ?>

    <?php if (isset($_SESSION['email'])){?>

        <!-- Toast -->
        <div class="toast-container position-fixed top-0 end-0 p-3">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <!--  -->
            </div>
        </div>

<!-- Toast -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <!-- <div class="imaged">
                    <img src="reheboth.png" class = "logo img-responsive" alt="">
                </div> -->
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="image float-end mb-3 mt-3">
                    <img src="affix.png" alt="">
                </div>
               
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="text-upercase text-center bg-danger text-white px-2 border rounded mb-2 h-75 p-2 fw-bold h5">APPLICATION TO AN ACCOUNT</div>
            </div>
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
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <span>Branch</span><br>
                    <input type="text" id ="branch" value = "<?php echo $meta['branch']; ?>" class = "form-control" />
                </div>
            </div>     
        </div>
        <div class="row mt-2 mb-2">
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 text-white bg-danger " style = "margin-right: 5px;">
                <div class="label ">
                    <span class="acc_num text-uppercase f-3">Account No(for officail use only)</span><br>
                    <input type="text"  class = "mb-2 form-control" />
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 text-white bg-danger mr-5"  style = "margin-right: 5px;">
                <div class="label ">
                    <span class="acc_num text-uppercase ">Account No(for officail use only)</span><br>
                    <input type="text"  class = "mb-2 form-control" />
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-5 col-lg-5 text-white bg-danger">
                <div class="label ">
                    <span class="acc_num text-uppercase ">Account No(for official use only)</span><br>
                    <input type="text"  class = "mb-2 form-control" />
                </div>
            </div>
        </div>

        <div class="row mt-2 mb-2">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class = "d-flex justify-content-between">
                    <span>Account Category:</span>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="Individual account" id="acc_category" checked>
                      <label class="form-check-label" for="flexCheckDefault"> Individual account</label>
                      
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="acc_category" id="acc_category">
                      <label class="form-check-label" for="flexCheckChecked">
                        Joint Account
                      </label>
                    </div>
                </div>
            </div>            
        </div>

        <div class="row mt-2">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div style = "display:flex;justify-content: space-between;">
                    <span>Account type:</span>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="Current" id="acc_type" checked>
                      <label class="form-check-label" for="flexCheckDefault"> Current</label>
                      
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="Savings" id="acc_type">
                      <label class="form-check-label" for="flexCheckChecked">
                        Savings
                      </label>
                    </div>
                </div>
                <!-- <p>This form should be completed in CAPITAL LETTERS using BLUE INK</p> -->
            </div>
      </div>

      <!-- Personal Deatials -->
      <div class="row mt-3">
        <div class="personal_details text-uppercase bg-danger text-white h-100 rounded fw-bold h5">
            PERSONAL DETAILS (PLEASE tick where neccessary)
        </div>
        <form id = "personal_details">
            <div class="row mt-2">
                <div class="col-sm-12 col md-6 col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Title </label>
                        <input type="text" class="form-control" value = "<?php echo $meta['title']; ?>" name = "title" id="title"  placeholder="Enter Title">
                    </div>
                </div>
                <div class="col-sm-12 col md-6 col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Surname</label>
                        <input type="text" class="form-control" name = "surname" value = "<?php echo $meta['surname']; ?>" id="surname"  placeholder="Olajide">
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-12 col md-6 col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Firstname</label>
                        <input type="text" class="form-control" value = "<?php echo $meta['firstname']; ?>" name = "firstname" id="firstname"  placeholder="Oladapo">
                    </div>
                </div>
                <div class="col-sm-12 col md-6 col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Othername</label>
                        <input type="text" class="form-control" value = "<?php echo $meta['othername']; ?>" name ="othername"  placeholder="Ayomide">
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-12 col md-6 col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Maiden Name</label>
                        <input type="text" class="form-control" value = "<?php echo $meta['maidenName']; ?>" name="maiden_name"  placeholder="Enter Maiden Name">
                    </div>
                </div>
                <div class="col-sm-12 col md-6 col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Place Of Birth</label>
                        <input type="text" class="form-control" value = "<?php echo $meta['pob']; ?>" name="pob"  placeholder="Oyo State">
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-sm-12 col md-6 col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nationality</label>
                        <input type="text" class="form-control" value = "<?php echo $meta['nationality']; ?>" name ="nationality"  placeholder="Nigeria">
                    </div>
                </div>
                <div class="col-sm-12 col md-6 col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">State of Origin</label>
                        <input type="text" class="form-control" value = "<?php echo $meta['origin']; ?>" name ="sog"  placeholder="Osun State">
                    </div>
                </div>
            </div>
            
            <select id ="marital_status" name = "marital_status" class="form-select mt-2" aria-label="Default select example">
                <option selected>Marital Status </option>
                <option value="single">Single</option>
                <option value="married">Married</option>
            </select>

            <div class = "mt-2">
                <button type="button" class="btn btn-danger mt-2">Dual Citizenship</button>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="dual" value="yes" checked>
                    <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="dual" value="no">
                    <label class="form-check-label" for="inlineCheckbox2">No</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="dual" value="othes">
                    <label class="form-check-label" for="inlineCheckbox3"> Others</label>
                </div>

            </div>

            <button class = "btn btn-danger btn-md mt-2 float-end" type="submit"> Submit </button>

            </form>
      </div>

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
                $meta[$rows] = "";
            }
        } else {
            $arr = $query_user->fetch_array();
            foreach($arr as $rows =>$v) {

                $meta[$rows] = $v;
            }
        }
        ?>

      <!-- Contact Details -->
      <div class="row mt-3">
        <div class="personal_details bg-danger text-white h-100 rounded fw-bold h5">
            CONTACT DETAILS 
        </div>
        <form id ="contact_details">
            <div class="row mt-2">
                <div class="col-sm-12 col md-6 col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">House Number</label>
                        <input type="text" class="form-control" value = "<?= $meta['house_number']; ?>" name = "house_number" id="exampleInputEmail1" placeholder="Enter House Number">
                    </div>
                </div>
                <div class="col-sm-12 col md-6 col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Street Name</label>
                        <input type="text" class="form-control" value = "<?= $meta['street_name']; ?>" name = "street_name" id="exampleInputEmail1"  placeholder="No 26 Ologolo Crescent">
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-12 col md-6 col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nearest Bus top</label>
                        <input type="text" class="form-control" value = "<?= $meta['bus_stop']; ?>" name = "bus_stop" id="exampleInputEmail1"  placeholder="Enter Bustop">
                    </div>
                </div>
                <div class="col-sm-12 col md-6 col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">City/Town</label>
                        <input type="text" class="form-control" value = "<?= $meta['city']; ?>" name = "city" id="exampleInputEmail1"  placeholder="Lagos">
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-12 col md-6 col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">LG Area</label>
                        <input type="text" class="form-control" value = "<?= $meta['lg_area']; ?>" name = "lg_area" id="exampleInputEmail1"  placeholder="Enter Title">
                    </div>
                </div>
                <div class="col-sm-12 col md-6 col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">State</label>
                        <input type="text" class="form-control" value = "<?= $meta['state']; ?>" name = "state" id="exampleInputEmail1"  placeholder="Enter Surname">
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-sm-12 col md-6 col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Home Town</label>
                        <input type="text" class="form-control" value = "<?= $meta['home_town']; ?>" name = "home_town" id="exampleInputEmail1"  placeholder="Enter Title">
                    </div>
                </div>
                <div class="col-sm-12 col md-6 col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Religion</label>
                        <input type="text" class="form-control" value = "<?= $meta['religion']; ?>" name = "religion" id="exampleInputEmail1"  placeholder="Enter Surname">
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-sm-12 col md-6 col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone Number 1</label>
                        <input type="text" class="form-control" value = "<?= $meta['phone_number1']; ?>" name = "phone_number1" id="exampleInputEmail1"  placeholder="Enter Title">
                    </div>
                </div>
                <div class="col-sm-12 col md-6 col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone Number 2</label>
                        <input type="text" class="form-control" value = "<?= $meta['phone_number2']; ?>" name = "phone_number2" id="exampleInputEmail1"  placeholder="Enter Surname">
                    </div>
                </div>
            </div>
           
            <div class="form-group">
                <label for="exampleInputEmail1">Email Address</label>
                <input type="email" class="form-control" value = "<?php echo $_SESSION['email'];?>" id="exampleInputEmail1"  placeholder="Enter Email">
            </div>
            <button class = "btn btn-danger btn-md mt-2 float-end" type="submit"> Submit </button>

        </form>
      </div>
      <!-- EMPLOYMENT DETAILS -->
      <div class="row mt-3">
        <div class="employement-details bg-danger text-white h5 fw-bold h-100">
            EMPLOYMENT DETAILS 
        </div>
        <form id ="employment_details">
            <div class="col-sm-12 col-md-12-col-lg-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="employment" value="Employed">
                    <label class="form-check-label" for="inlineCheckbox1">Employed</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="employment" value="Self Employed">
                    <label class="form-check-label" for="inlineCheckbox2">Self Employed</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="employment" value="UnEmployed">
                    <label class="form-check-label" for="inlineCheckbox2">UnEmployed</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="employment" value="Retired">
                    <label class="form-check-label" for="inlineCheckbox2"> Retired </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="employment" value="Student">
                    <label class="form-check-label" for="inlineCheckbox2">Student</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="employment" value="Others">
                    <label class="form-check-label" for="inlineCheckbox2">Others</label>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Employment Date</label>
                    <input type="date" class="form-control" name = "date" id="exampleInputEmail1">
                </div>
            </div>
            <button class = "btn btn-danger btn-md mt-2 float-end" type="submit"> Submit </button>
        </form>
      </div>

      <!-- details of next of kin -->
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
                $meta[$rows] = "";
            }
        } else {
            $arr = $query_user->fetch_array();
            foreach($arr as $rows =>$v) {

                $meta[$rows] = $v;
            }
        }
        ?>

      <div class="row mt-3">
        <div class="personal_details bg-danger text-white fw-bold h5 h-100">
            DETAILS OF NEXT OF KIN
        </div>
        <form id ="nextofkin">
            <div class="row mt-2">
                <div class="col-sm-12 col md-6 col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Surname </label>
                        <input type="text" class="form-control" value ="<?=  $meta['surname']; ?>" name = "surname" id="exampleInputEmail1"  placeholder="Enter Surname">
                    </div>
                </div>
                <div class="col-sm-12 col md-6 col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">FirstName</label>
                        <input type="text" class="form-control" value ="<?=  $meta['firstname']; ?>" name = "firstname" id="exampleInputEmail1"  placeholder="Enter Firstname">
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-12 col md-6 col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Othername</label>
                        <input type="text" value ="<?=  $meta['othername']; ?>" class="form-control" name = "othername" id="exampleInputEmail1"  placeholder="Enter Othername">
                    </div>
                </div>
                <div class="col-sm-12 col md-6 col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Date of Birth</label>
                        <input type="text" class="form-control" value ="<?=  $meta['dob']; ?>"name = "dob" id="exampleInputEmail1"  placeholder="09/09/1968">
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-12 col md-6 col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Gender</label>
                        <input type="text" value ="<?=  $meta['gender']; ?>" class="form-control" name = "gender" id="exampleInputEmail1"  placeholder="Female">
                    </div>
                </div>
                <div class="col-sm-12 col md-6 col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Mobile Number</label>
                        <input type="text" class="form-control" value ="<?=  $meta['mobile_number']; ?>" name = "mobile_number" id="exampleInputEmail1"  placeholder="09069394998">
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-sm-12 col md-6 col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Street Name</label>
                        <input type="text" class="form-control" value ="<?= $meta['street_name']; ?>" name = "street_name" id="exampleInputEmail1"  placeholder="Enter Title">
                    </div>
                </div>
                <div class="col-sm-12 col md-6 col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nearest Bus top</label>
                        <input type="text" class="form-control" value ="<?= $meta['bus_stop']; ?>" name = "bus_stop" id="exampleInputEmail1"  placeholder="Enter Surname">
                    </div>
                </div>
            </div>

            <button class = "btn btn-danger btn-md mt-2 float-end" type="submit"> Submit </button>
        </form>
      </div>

      <!-- SPECIMEN SIGNATURES -->

      <div class="specimen mt-4">
        <div class = "h4 bg-danger text-white" style = "margin-bottom: -1px;width:100%;padding-left:20px;padding-top:10px">SPECIMEN SIGNATURES</div>
        <table class="table table-bordered border-dark table-striped table-responsive">
            <thead>
                <tr>
                    <th scope="col">Title(Mr,Mrs etc)</th>
                    <th scope="col">Signatory type</th>
                    <th scope="col">Photograph</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td scope="col">Name:</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td >Signature:</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Title(Mr,Mrs etc):</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td >Name:</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Signature:</td>
                <td></td>
                <td></td>
            </tr>

            </tbody>
            <tfoot>
                <th style = "font-size:13px">Authorized Combination(for joint Account holders)</th>
                <th colspan="2"  style = "font-size:13px"> Company Seal/Stamp required
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">Yes</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">No</label>
                      </div><br>
                      <span style = "font-size:12px"> Specified Company Seal/Stamp (if required)</span>
                </th>
                
                <th></th>
            </tfoot>
        </table>
      </div>

      <!-- EMPLOYMENT ADDRESS -->
      <div class="row mt-3">
        <div class="e-address h5 bg-danger text-white">
            Employer's/Employment Address (Even if self Employed)
        </div>
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
                $meta[$rows] = "";
            }
        } else {
            $arr = $query_user->fetch_array();
            foreach($arr as $rows =>$v) {

                $meta[$rows] = $v;
            }
        }
        ?>
        <form id ="employee_address">
            <div class="row mt-2">
                <div class="col-sm-12 col md-6 col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Street Number</label>
                        <input type="text" name = "street_number" value = "<?= $meta['street_number']; ?>" class="form-control" id="exampleInputEmail1"  placeholder="Enter Street Number">
                    </div>
                </div>
                <div class="col-sm-12 col md-6 col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Street Name</label>
                        <input type="text" name = "street_name" value = "<?= $meta['street_name']; ?>" class="form-control" id="exampleInputEmail1"  placeholder="Enter Street Name">
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-12 col md-6 col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">City/Town</label>
                        <input type="text" name = "city" value = "<?= $meta['city']; ?>" class="form-control" id="exampleInputEmail1"  placeholder="Enter City/Town">
                    </div>
                </div>
                <div class="col-sm-12 col md-6 col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nearest Bus Stop/Landmark</label>
                        <input type="text" name = "bus_stop" value = "<?= $meta['bus_stop']; ?>" class="form-control" id="exampleInputEmail1"  placeholder="09/09/1968">
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-12 col md-6 col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">LGA Area</label>
                        <input type="text" name = "lga_area" value = "<?= $meta['lga_area']; ?>" class="form-control" id="exampleInputEmail1"  placeholder="Ilesha East">
                    </div>
                </div>
                <div class="col-sm-12 col md-6 col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">State</label>
                        <input type="text" name = "state" class="form-control" value = "<?= $meta['state']; ?>" id="exampleInputEmail1"  placeholder="Osun State">
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-sm-12 col md-12 col-lg-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nature of Business/Occupation</label>
                        <input type="text" name = "nature_of_business" value = "<?= $meta['nature_of_business']; ?>" class="form-control" id="exampleInputEmail1"  placeholder="Enter Surname">
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-12 col md-6 col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Office Phone Number</label>
                        <input type="text" name = "phone_number" value = "<?= $meta['phone_number']; ?>" class="form-control" id="exampleInputEmail1"  placeholder="Enter Title">
                    </div>
                </div>
                <div class="col-sm-12 col md-6 col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Fax Number</label>
                        <input type="text" name = "fax_number" class="form-control" value = "<?= $meta['fax_number']; ?>" id="exampleInputEmail1"  placeholder="Enter Surname">
                    </div>
                </div>
            </div>
            <button class = "btn btn-danger btn-md mt-2 float-end" type="submit"> Submit </button>
        </form>
      </div>

      <!-- BANK USE ONLY -->
      <div class="row mt-3">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <h4 class="text-center"> (FOR BANK USE ONLY) ACCOUNT OPENING </h4>
        <div style="overflow-x:auto">
            <table class="table table-bordered border-dark table-striped table-responsive">
                <thead class = "table-dark">
                  <tr>
                    <th>S/N</th>
                    <th>DOCUMENT OBTAINED</th>
                    <th>REQUIRED DATE</th>
                    <th>RECIEVED COMPLETED</th>
                    <th>N/A</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Collection of Account Opening Form</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Submission of Accont Opening Form</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Identification</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>(a)Notary Certificate</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>(b)International Passport</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>(c)Drivers License</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>(d)National ID Card</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Verification of Signature</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Signature of Cards</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Passport Photograph</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Waived Documentation</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>What document is Deffered ?</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>Defferal Period</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>KYC Form</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>Watrer/Electricity/Telephone Reciept</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>Search Report</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td> Address Verification Form</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
        </div>
            
          </div>
      </div>

      <!-- remarks -->
      <div class="general_remark">
        <div class="row mt-3 remarks border border-danger">
            <h6 class="remark">REMARKS</h6>
            <div class ="row mb-3">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <label for="">Account Officer:</label>
                    <input type="text" class = "form-control" placeholder="">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <label for="">Sign:</label>
                    <input type="text" class = "form-control" placeholder="">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <label for="">Date:</label>
                    <input type="text" class = "form-control" placeholder="">
                </div>
            </div>
            <!--  -->
            <div class ="row mb-3">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <label for="">Account Officer:</label>
                    <input type="text" class = "form-control" placeholder="">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <label for="">Sign:</label>
                    <input type="text" class = "form-control" placeholder="">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <label for="">Date:</label>
                    <input type="text" class = "form-control" placeholder="">
                </div>
            </div>
            <!--  -->
            <div class ="row mb-3">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <label for="">Account Officer:</label>
                    <input type="text" class = "form-control" placeholder="">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <label for="">Sign:</label>
                    <input type="text" class = "form-control" placeholder="">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <label for="">Date:</label>
                    <input type="text" class = "form-control" placeholder="">
                </div>
            </div>
          </div>
    
          <!-- Remark2 -->
          <div class="row  remarks border border-danger">
            <div class ="row mt-3">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <label for="">Business Manager:</label>
                    <input type="text" class = "form-control" placeholder="">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <label for="">Sign:</label>
                    <input type="text" class = "form-control" placeholder="">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <label for="">Date:</label>
                    <input type="text" class = "form-control" placeholder="">
                </div>
            </div>
            <!--  -->
            <div class ="row mt-3">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <label for="">Approved By HOP:</label>
                    <input type="text" class = "form-control" placeholder="">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <label for="">Sign:</label>
                    <input type="text" class = "form-control" placeholder="">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <label for="">Date:</label>
                    <input type="text" class = "form-control" placeholder="">
                </div>
            </div>
            <!--  -->
            <div class ="row mt-3">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <label for="">Reviewed By:</label>
                    <input type="text" class = "form-control" placeholder="">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <label for="">Sign:</label>
                    <input type="text" class = "form-control" placeholder="">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <label for="">Date:</label>
                    <input type="text" class = "form-control" placeholder="">
                </div>
            </div>
          </div>

          <div class="text-center" style ="font-size:9px;line-height: 11px;">
            <p>
                <span>DISCLAIMER:</span> Please if you do not recieve alert within 24hrs of cash lodgement, kindly call this number
                08116670300
            </p>
            <p>if fraudulent activity is associated with the operation of your account , you agree that we have the right to</p>
            <p>Apply restriction to your account and report to the appropraite law enforcemnt agencies </p>
          </div>

          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
              <li class="page-item disabled">
                <a class="page-link">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="index.php">1</a></li>
              <li class="page-item"><a class="page-link" href="index2.php">2</a></li>
              <li class="page-item"><a class="page-link" href="index3.php">3</a></li>
              <li class="page-item">
                <a class="page-link" href="index2.php">Next</a>
              </li>
            </ul>
          </nav>
          
      </div>
      
    </div>
    <?php }else{?>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <h5 class="fw-bold">Please Login to continue your application....</h5>
                </div>
            </div>
        </div>
    <?php } ?>
    <!-- REGISTER  -->

    <!--Register Modal -->
    <div class="modal fade ls" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-dark text-white">
                <div class="modal-body">
                <button type="button" class="btn-close" style="background-color:white" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="myform">
                    <h1 class="text-center">Register Form</h1>
                    <form id = "register">

                        <div class="mb-3 mt-4">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" >
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                        </div>

                        <button type="submit"  class="btn btn-danger mt-3 mb-3 "  data-bs-dismiss="modal" >Register</button>
                        <p>Already a member?<a href="#" id = "md1" class="btn btn-sm btn-danger rounded mx-3" data-bs-toggle="modal" data-bs-target="#exampleModal1" > Login </a></p>
                    </form>
                </div>
                </div>
            </div>
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="js/personal.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/employment.js"></script>
    <script src="js/nextofkin.js"></script>
    <script src="js/employee_address.js"></script>



    <script>
        const form = document.querySelector("#register");
        form.addEventListener("submit",async(e)=>{
            e.preventDefault();
            const email = form.email.value
            const password = form.password.value;

            const data = {
                "email":email,
                "password":password
            }
            const response = await axios.post('backend/login.php',data);
           
            if (response.data) {
                location.href = 'index.php';
            }
        })
        
    </script>
    <!-- MODAL 2 -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-dark text-white">
                <div class="modal-body">
                <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="myform">
                    <h1 class="text-center">Login Form</h1>
                    <form id = "login">
                        <div class="mb-3 mt-4">
                            <label for="exampleInputEmail1" class="form-label"> Email address </label>
                            <input type="email" name = "email" class="form-control" id="exampleInputEmail1" >
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label"> Password </label>
                            <input type="password" name = "password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit"  class="btn btn-danger mt-3 mb-3"> Login </button>
                        <p>Not a member?<a href="#" id ="md2" class="btn btn-sm btn-danger rounded mx-3" data-bs-dismiss="modal"> Register </a></p>
                    </form>
                </div>
                </div>
            </div>
            </div>
    </div>
    
    <script>
        const login = document.querySelector("#login");
        login.addEventListener("submit",async(e)=>{
            e.preventDefault();
            const email = login.email.value
            const password = login.password.value;

            const data = {
                "email":email,
                "password":password
            }
            const response = await axios.post('backend/register.php',data);
            if (response.data.status) {
                location.href = 'index.php';
            } else if(response.data.errorCode) {
                alert(response.data.statusText);
            }
        })
    </script>
    <script>
        // const toastTrigger = document.getElementById('liveToastBtn')
        // const toastLiveExample = document.getElementById('liveToast')
        // if (toastTrigger) {
        // toastTrigger.addEventListener('click', () => {
        //     const toast = new bootstrap.Toast(toastLiveExample)
        //     toast.show()
        // })
        // }
    </script>
</body>
<?php include 'template/footer.php'; ?>

</html>
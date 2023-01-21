<!DOCTYPE html>
<html lang="en">
<?php include 'template/head.php'; ?>

<body>
    <!-- navbar -->
    <?php include 'template/nav.php'; ?>

    <?php if(isset($_SESSION['email'])) {?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <!-- <div class="imaged">
                    <img src="reheboth.png" class = "logo img-responsive" alt="">
                </div> -->
            </div>
            
    <?php  
        include 'backend/conn.php';
        $email = $_SESSION['email'];

        $query_user = $conn->query("SELECT * FROM account_officer where email = '$email' ");
        if (mysqli_num_rows($query_user) < 1) {
            $column_name = $conn->query("SHOW COLUMNS FROM account_officer");
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
    <form id = "account_officer">
           <div class="col-sm-12 col-md-12 col-lg-12 mt-5">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Account Name:</label>
                  <input type="text" name = "account_name" value = "<?= $meta['account_name']; ?>" class="form-control" id="exampleInputEmail1" >
                </div>
           </div>
           <div class="row mt-2">
            <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Account Number</label>
                    <input type="text" name = "account_number" value = "<?= $meta['account_number']; ?>" class="form-control" id="exampleInputEmail1"  placeholder="Enter Title">
                </div>
            </div>
            <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Account Type</label>
                    <input type="text" name = "account_type" value = "<?= $meta['account_type']; ?>" class="form-control" id="exampleInputEmail1"  placeholder="Enter Surname">
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <p>I <input  name = "officer_name" type ="text" value = "<?= $meta['officer_name']; ?>" placeholder ="Olajide Oladapo Ayomide"/> visited the above named customer’s address and below are my findings:</p>
        </div>
        <div class="row mt-2">
            <div class="col-sm-12 col md-12 col-lg-12 mb-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Address Visited</label>
                    <input type="text" name="address_visited" value = "<?= $meta['address_visited']; ?>" class="form-control" id="exampleInputEmail1"  placeholder="Ikuomola street obianor">
                </div>
            </div>
           
        </div>
        <div class="row mt-2">
            <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Description of the building including type, colour of the house and the gate</label>
                    <input type="text" value = "<?= $meta['building_description']; ?>" name = "building_description" class="form-control" id="exampleInputEmail1"  placeholder=".......">
                </div>
            </div>
          
        </div>
        
        <div class="row mt-2">
            <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Closest Bus Stop</label>
                    <input type="text" name = "bus_stop" value = "<?= $meta['bus_stop']; ?>" class="form-control" id="exampleInputEmail1"  placeholder="Male">
                </div>
            </div>
            <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                <div class="form-group">
                    <label for="exampleInputEmail1"> Major LandMark </label>
                    <input type="text" name = "landmark"  value = "<?= $meta['landmark']; ?>" class="form-control" id="exampleInputEmail1"  placeholder="Married">
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-sm-12 col md-12 col-lg-12 mb-3">
                <label for="">Address confirmed okay</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="address_confirmed" value="Yes" checked>
                    <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="address_confirmed" value="No">
                    <label class="form-check-label" for="inlineCheckbox2">No</label>
                  </div>
            </div>
        </div>
        <p>I here by confirm that the customer resides at the above address, and is well known in
            the address visited by me:
            </p>
        <div class="row mt-2">
            <div class="col-sm-12 col md-12 col-lg-12 mb-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Date of visit </label>
                    <input type="text" value = "<?= $meta['visited_date']; ?>" name = "visited_date" class="form-control" id="exampleInputEmail1"  placeholder="09/09/1994">
                </div>
            </div>
        </div>
        <!--  -->
        <div class="row mt-2">
            <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Account Officers Name</label>
                    <input type="text" value = "<?= $meta['officer_name']; ?>" class="form-control" id="exampleInputEmail1"  placeholder="Male">
                </div>
            </div>
            <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                <div class="form-group">
                    <label for="exampleInputEmail1"> Signature && Date</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Married">
                </div>
            </div>
        </div>
         <!--  -->
         <div class="row mt-2">
            <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">HM/Branch Manager’s name:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Male">
                </div>
            </div>
            <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                <div class="form-group">
                    <label for="exampleInputEmail1"> Signature && Date</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Married">
                </div>
            </div>
        </div>
       
        <div class="row mt-2">
            <div class="col sm-12 col-12 col-lg-12 col-md-12">
                <div class="h4 fw-bold">E-CHANNEL PRODUCTS</div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-sm-3">
                <label for="" class ="h6 fw-bold ">SMS</label>
            </div>
            <div class="col-sm-4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="sms" value="Yes" checked>
                    <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="sms" value="No">
                    <label class="form-check-label" for="inlineCheckbox2">No</label>
                  </div>
                 
            </div>
            <div class="col-sm-5"></div>
        </div>
        <div class="row mt-2">
            <div class="col-sm-3">
                <label for="" class ="h6 fw-bold ">ATM CARD</label>
            </div>
            <div class="col-sm-4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="atm" value="Yes" checked>
                    <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="atm" value="No">
                    <label class="form-check-label" for="inlineCheckbox2">No</label>
                  </div>
                 
            </div>
            <div class="col-sm-5"></div>
        </div>

        <div class="row mt-2">
            <div class="col-sm-3">
                <label for="" class ="h6 fw-bold ">Mobile Banking</label>
            </div>
            <div class="col-sm-4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="mobile_banking" value="Yes" checked>
                    <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="mobile_banking" value="No">
                    <label class="form-check-label" for="inlineCheckbox2">No</label>
                  </div>
                 
            </div>
            <div class="col-sm-5"></div>
        </div>

        <div class="row mt-2">
            <div class="col-sm-3">
                <label for="" class ="h6 fw-bold ">Internet Banking</label>
            </div>
            <div class="col-sm-4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="internet_banking" value="Yes" checked>
                    <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="internet_banking" value="No">
                    <label class="form-check-label" for="inlineCheckbox2">No</label>
                  </div>
                 
            </div>
            <div class="col-sm-5"></div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <!-- <button type = "button" class = "btn btn-danger mt-4">Upload Signature </h3> -->
                <button class = "btn btn-danger btn-md mt-4 float-end mb-4" type="submit"> Submit </button>

            </div>
        </div>

    </form>

        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
              <li class="page-item">
                <a class="page-link"  href="index2.php">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="index.php">1</a></li>
              <li class="page-item"><a class="page-link" href="index2.php">2</a></li>
              <li class="page-item"><a class="page-link" href="index3.php">3</a></li>
              <li class="page-item">
                <a class="page-link" href="form2.php">Next</a>
              </li>
            </ul>
          </nav>

        </div>
    </div>

    <?php } else {
        header('Location:index.php');
    } ?>
     <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="js/account_officer.js"></script>
    </body>

    <footer>

    </footer>
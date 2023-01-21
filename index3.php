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
          
           <div class="col-sm-12 col-md-12 col-lg-12 mt-5">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Account Name:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" >
                </div>
                <!-- <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Email Address</label>
                  <input type="text" class="form-control" id="exampleInputPassword1">
                </div> -->
           </div>
           <div class="row mt-2">
            <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Account Number</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter Title">
                </div>
            </div>
            <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Account Type</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter Surname">
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <p>I <input name ="fullname" type ="text" placeholder ="Olajide Oladapo Ayomide"/> visited the above named customer’s address and below are my findings:</p>
        </div>
        <div class="row mt-2">
            <div class="col-sm-12 col md-12 col-lg-12 mb-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Address Visited</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Male">
                </div>
            </div>
           
        </div>
        <div class="row mt-2">
            <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Description of the building including type, colour of the house and the gate</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder=".......">
                </div>
            </div>
          
        </div>
        
        <div class="row mt-2">
            <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Closest Bus Stop</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Male">
                </div>
            </div>
            <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                <div class="form-group">
                    <label for="exampleInputEmail1"> Major LandMark </label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Married">
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-sm-12 col md-12 col-lg-12 mb-3">
                <label for="">Address confirmed okay</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
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
                    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="09/09/1994">
                </div>
            </div>
        </div>
        <!--  -->
        <div class="row mt-2">
            <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Account Officers Name</label>
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
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
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
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
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
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
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
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">No</label>
                  </div>
                 
            </div>
            <div class="col-sm-5"></div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <button type = "button" class = "btn btn-danger mt-4">Upload Signature </h3>
            </div>
        </div>

        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
              <li class="page-item">
                <a class="page-link"  href="index2.html">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="index.html">1</a></li>
              <li class="page-item"><a class="page-link" href="index2.html">2</a></li>
              <li class="page-item"><a class="page-link" href="index3.html">3</a></li>
              <li class="page-item">
                <a class="page-link" href="form2.html">Next</a>
              </li>
            </ul>
          </nav>

        </div>
    </div>

    <?php } else {
        header('Location:index.php');
    } ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous">
</script>
    </body>

    <footer>

    </footer>
<!DOCTYPE html>
<html lang="en">
<?php include_once('template/head.php'); ?>

<body>
    <!-- navbar -->
    <?php include_once('template/nav.php'); ?>

    <?php if (isset($_SESSION['email'])) {?>
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-12 col-md-6 col-lg-6">

                <div class="checklist">
                    <h3 class = "fw-bold text-uppercase"> Checklist </h3>
                    <p> Please complete all relevant portions of the application form and Account opening mandate return the package along with the following documents. </p>
                </div>

                <div class="corporate">
                    <h3 class = "fw-bold text-uppercase">Corporate (LIMITED LIABILITY COMPANY)</h3>
                    <ul class = "list-group list-group-flush list-group-numbered">
                        <li class = "list-group-item"> Two passport photographs of each of the signatories with their names and signatures at the back.</li>
                        <li class = "list-group-item"> ID cards of signatoriesof (International Passport Driver's liscense).</li>
                        <li class = "list-group-item"> Certified True Copy of Certificate of Incorporation, Articles and Memorandum of Association.</li>
                        <li class = "list-group-item"> Forms CO2&CO7 (ParticularsofDirectors).</li>
                        <li class = "list-group-item">Board Resolution.</li>
                        <li class = "list-group-item">Two detachable reference fonts duly completed by the signaturories.</li>
                        <li class = "list-group-item"> Current Utility Bill e.g (Electricity bill or Water Rate Bill. Telephone Bill or Receipt of Rent or Tenement Payment.</li>
                        <li class = "list-group-item"> Resident permit (where applicable).</li>
                    </ul>
                </div>

                <div class="enterprise mt-4">
                    <h3 class = "fw-bold text-uppercase">ENTERPRISE</h3>
                    <ul class = "list-group list-group-flush list-group-numbered">
                        <li class = "list-group-item"> Certificate of Incorporation/Registration</li>
                        <li class = "list-group-item"> All other Registration papers</li>
                        <li class = "list-group-item"> Two passport photographsof each of the signatories with their name and signature at the back</li>
                        <li class = "list-group-item"> ID cards of each signatories with their name and signature at the back</li>
                        <li class = "list-group-item">Two signature card duly compleed by the signatories</li>
                        <li class = "list-group-item"> Current Utility Bill e.g (Electricity bill or Water Rate Bill. Telephone Bill or Receipt of Rent or Tenement Payment.</li>
                        <li class = "list-group-item"> Resident permit (where applicable).</li>
                    </ul>
                </div>

                <div class="association mt-4">
                    <h3 class = "fw-bold text-uppercase text-break">ASSOCIATION,CLUBS,COORPORATIVES, RELIGION BODIES</h3>
                    <ul class = "list-group list-group-flush list-group-numbered">
                        <li class = "list-group-item"> Two passport photographs of each of the signatories with their names written and duly signed at the back </li>
                        <li class = "list-group-item">ID cards of signatories (International Passport Driver's liscense) </li>
                        <li class = "list-group-item"> Copy of Certificate of Registration</li>
                        <li class = "list-group-item"> Board Council Resolution </li>
                        <li class = "list-group-item">Two detachable reference forms to be duly completed by Church or Corporate bodies maintaning accounts with banks in Nigeria.</li>
                        <li class = "list-group-item">Two signature</li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="row mt-2 mb-2">
                    <div class="col-sm-12 col-md-2">
                        <label for="" class ="h6 fw-bold ">Select the deserved type of account </label>
                    </div>
                    <div class="col-sm-12 col-md-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label text-uppercase" for="inlineCheckbox1">Limited Liability CO</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">ENTERPRISE</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox3">Association</label>
                          </div>
                    </div>
                </div>

                 <!--  -->
                <div class="row mt-2">
                    <div class="col-sm-12 col md-6 col-lg-6 mb-3">
                        <div class="form-group">
                            <label class = "text-wrap" for="exampleInputEmail1">NAME OF COMPANY ASSOCIATION CLUBS IN ENTERPRISE RELIGIOUS BODY</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"  placeholder=".......">
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
                    <div class="col-sm-12 col md-4 col-lg-4 mb-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Telephone</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"  placeholder=".......">
                        </div>
                    </div>

                    <div class="col-sm-12 col md-4 col-lg-4 mb-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Fax</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Married">
                        </div>
                    </div>

                    <div class="col-sm-12 col md-4 col-lg-4 mb-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Eamil</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="dao@gmail.com">
                        </div>
                    </div>
                </div>
            
                 <!--  -->
                 <div class="row mt-2">
                    <div class="col-sm-12 col md-12 col-lg-12 mb-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nature && Line of Business</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"  placeholder=".......">
                        </div>
                    </div>
                </div>

                <!--  -->
                <div class="row mt-2">
                    <div class="col-sm-12 col md-12 col-lg-12 mb-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">BODY STRUCTURE SCHEDULE</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"  placeholder=".......">
                        </div>
                    </div>
                </div>
            
                <!--  -->
                <div class="row mt-2">
                    <div class="col-sm-12 col md-12 col-lg-12 mb-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">ID NO</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"  placeholder=".......">
                        </div>
                    </div>
                </div>

                <!--  -->
                <div class="row mt-2">
                    <div class="col-sm-12 col md-12 col-lg-12 mb-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Management</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"  placeholder=".......">
                        </div>
                    </div>
                </div>

                <div class = "row mt-2">
                    <div class="col-sm-12 col-md-12-col-lg-12">
                        <table class="table table-bordered table-responsive table-striped ">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td></td>
                                <td></td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td></td>
                                <td colspan="2"></td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                    
                      <p class = "text-break"> ANNUAL SALES TURNOVER INCOME Most recent years PROPOSED INITIAL DEPOS.1 </p>
                      <div class="row mt-2 mb-2">
                        <div class="col-sm-12 col-md-8">
                            <label for="" class ="h6 fw-bold text-break">Should man's ird ring varent be sell or held for collection </label>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label text-uppercase" for="inlineCheckbox1">Send</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">Sold</label>
                              </div>
                        </div>
                    </div>
                </div>
                
                <div class="row mt-2">
                    <div class="info text-uppercase h4 fw-bold mb-3">ACCOUNT WITH OTHER BANKS</div>
                    <div class="col-sm-12 col md-12 col-lg-12 mb-3">
                        <div class="form-group">
                            <label class = "text-uppercase"for="exampleInputEmail1"> Bankers Name and address</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"  placeholder=".......">
                        </div>
                        <div class="form-group">
                            <label class = "text-uppercase"for="exampleInputEmail1"> Account Name and Number</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"  placeholder=".......">
                        </div>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="info text-uppercase text-break h5 fw-bold mb-3">NAME AND ADDRESS OF REFEREES BUSINESS OCCUPATION <span class = "text-end">BANKERS</span></div>
                    <div class="col-sm-12 col md-12 col-lg-12 mb-3">
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1"  placeholder=".......">
                        </div>
                        <div id="emailHelp" class="form-text">We sequnce the opposite of a current account with Reboboth Microfinance Bank Limited. We verify from the above particulars are correct</div>

                    </div>
                </div>
            
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row mb-5 ">
            <!-- <div class="col-sm-12 col-md-1 col-lg-2"></div> -->
            <div class="col-sm-12 col-md-12 col-lg-12 col-12 ">
                <div class="authority">
                    <h3 class = "fw-bold text-uppercase text-center">AUTHORITY TO DEBIT ACCOUNT </h3>
                    <p class = "mt-3"> 
                        In considereation of Rehoboth Microfinance Bank 
                        Limited opening a current Account on my/our behalf.
                     </p>
                     <p>I/We, the authorised signatory/signatories of
                        <input type="text" class = "mb-2" name="" id="" > hereby authorise Reboboth Microfinance Bank Limited 
                        to debit my/our account with the sum of  <input type="text" name="" id=""> 
                        Being the cost incurred in respect of a cheque booklet 
                        and/or conducting a search in respect of this account. 
                        My/our Account Number is <input type="text" /> </p>
                </div>
                <div class="row signatory mt-5 d-flex justify-content-around">
                    <div class="col-sm-12 col-md-6 col-lg-6 mb-4">
                        <h4 class = "fw-bold">Authorized Signatory</h4>
                        <div class="date mt-4">Date: -----------</div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 ">
                        <h4 class = "fw-bold">Authorized Signatory Date </h4>
                        <div class="date mt-4">Date: -----------</div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-sm-12 col-md-1 col-lg-2"></div> -->
        </div>
        <div class="row mt-2 mb-2">
            <div class="authority mb-4">
                <h3 class = "fw-bold text-uppercase text-center"> ACCOUNT SIGNATORY DETAILS </h3>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="personal_det border border-dark border-3">
                        <div class="personal h5 bg-dark text-white">
                            PERSONAL DETAILS (Please complete in capital letters and tick where necessary)
                        </div>
                        <div class="forms ps-3 pe-3">
                            <form>
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Title</label>
                                  <input type="tet" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputPassword1" class="form-label">Surname</label>
                                  <input type="text" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">firstname</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">othername</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Mother Maiden Name</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                  </div>
                                  <div>
                                    <label for="">Marital Status</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Single</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Married</label>
                                    </div>
                                  </div>
                                
                                  <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">DOB(Date of Birth)</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                  </div>
    
                                  <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Place of Birth</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Nationality</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                  </div>
                                  <div>
                                    <label for="">Dual Citizenship</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">No</label>
                                    </div>
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">State of Origin</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">LGA</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Religion</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                  </div>  
                                  <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Home Town</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                  </div>                           
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </form>
                        </div>
                    </div>
                     <!-- Employment Deatials -->
                <div class="personal_det border border-dark border-3">
                    <div class="personal h5 bg-dark text-white w-auto">
                        EMPLOYMENT DETAILS 
                    </div>

                    <div class="forms ps-3 pe-3">
                        <form action="">
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Employment</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">Self Employed</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">Un-Employed</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">Retired</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">Student</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">Cannot Speicfy</label>
                                </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-12 col-lg-6">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Name of former employer</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" >
                                          </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-12 col-lg-6">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">BVN</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" >
                                          </div>
                                    </div>
                                </div>
                                
                        </form>
                    </div> 
                </div>
            </div>
            <!-- Contact Deatials -->
            <div class="col-sm-12 col-md-6 col-lg-6">

                <div class="personal_det border border-dark border-3">
                    <div class="personal h5 bg-dark text-white">
                        CONTACT DETAILS 
                    </div>

                    <div class="forms ps-3 pe-3">
                        <form>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">House Number</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" >
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Street name</label>
                              <input type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Not Seen</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">City</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Local Goverment Area</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                              </div>
                              <div>
                                <label for="">Marital Status</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Phone Number</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">Phone Number 2</label>
                                </div>
                              </div>
                            
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">ID Type</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                              </div>

                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">ID No</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Email Address</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                              </div>
                              
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Not Seen</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                              </div>
                          </form>
                    </div>
                </div>

               
        
                 <div class="personal_det border border-dark border-3">
                    <div class="personal h5 bg-dark text-white">
                        DETAILS OF NEXT OF KIN
                    </div>

                    <div class="forms ps-3 pe-3">
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Surname</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" >
                                      </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">FirstName</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" >
                                      </div>
                                </div>
                            </div> 
                                <!--  -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Othername</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" >
                                          </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">DOB</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" >
                                          </div>
                                    </div>
                                </div> 
                                <!--  -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Gender</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" >
                                          </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Not seen</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" >
                                          </div>
                                    </div>
                                </div> 
                                <!--  -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Relationship</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" >
                                          </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" >
                                          </div>
                                    </div>
                                </div> 
                                <!--  -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Street Name</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" >
                                          </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nearest Bus Stop</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" >
                                          </div>
                                    </div>
                                </div> 
                          </form>
                    </div>
                </div>

             
            </div>


        </div>

        <div class="row mt-5 mb-2">
            <div class="col-sm-12 col-lg col md-12">
                <div class="h4 text-center">The company/organisation understands and agrees:</div>
                <div class="agree">
                    <ul class = "list-group list-group-flush list-group-numbered">
                        <li class = "list-group-item"> That the Bank is under no obligation to honorary cheque(s) on our account unless there are sufficient funds in the account to cover the value of the said cheques. The company/organisation Understands and agree that any such cheques may be returned to the Company’s organisation.</li>
                        <li class = "list-group-item"> That any disagreements with the entries on the company's organisation Bank Statements will be made by the company organisation within 15 days of the dispatch of the Bank Statement. Failing receipt by the Bank of a notice of disagreement of the entries within 15 days from the date of dispatch of the company/organisation Bank Statement it will be assumed by the Bank that the Statement rendered is correct;</li>
                        <li class = "list-group-item"> That any sum standing to the debit of this account shall bear interest. The company/organization further understands that any sum standing to the debit of the current account shall be liable lo interest charges at a rate fixed by the Bank from time to time. The Bank is authorized to debit from the account the usual banking charges, interest, commissions, and any sums wrongly credited to the account and to take such steps to recover such sums with interest thereon. That the Bank is no1 bound to honor any cheque(s) drawn on this account, unless there are sufficient funds.</li>
                        <li class = "list-group-item"> That the company/organisation shall not be entitled to the value of a cheque lodge with the Bank until after the requisite clearing period in accordance with the clearing rules in force at the time of lodging the at cheques. Where the bank however allows drawing by the company/ organisation against unclear cheques and the cheque returned, the bank can take any further action it does appropriate to recover the value of the cheque from the company organisation with interest.</li>
                        <li class = "list-group-item"> That the Bank shall whenever it deems appropriate have a right to confirm the insurance of a cheque drawn on the company's/organisation's account{s) directly from the signatories of the account{s), failing which the Bank may return the chequels) with Drawers confirmation/attention required endorsed thereon.</li>
                        <li class = "list-group-item"> That the following persons be and are hereby appointed signatories to the Company's/organisation’s account and are mandated to complete the specimen signature cards of the Bank and in the combination specified below.</li>

                    </ul>
                </div>
            </div>
        </div>

        <div class="row mt-5 mb-2">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Signature</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                  </table>
                  <p>We further certify that there is no provision in the Articles and Memorandum of Association/Trust Deed/Consitution of the company/organisation imiting the the power of the Board of Directors/Governing Council to pass the faregoing resolution and the same are in conformity with the provisions of the said Articles and Memorandoum of Association/Trust Deed/Constitution.</p>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Manadate</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" >
                  </div>
                  <!--  -->
                  <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Dated This</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" >
                          </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Dated Of</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" >
                          </div>
                    </div>
                </div> 
                <div class="d-flex justify-content-between mt-5">
                    <div class="director">
                        <span>---------</span>
                        <h6>Director/Chairman of Governing Council</h6>
                    </div>
                    <div class="director">
                        <span>---------</span>
                        <h6>Secretary</h6>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <span>---------</span>
                    <h6 class="text-uppercase">Company Seal Stamp</h6>
                </div>
                <div class="header_declaration">
                    <h5 class="mt-4 fw-bold">DECLARATION</h5>
                    <p>I/WE request the commencement of a financial relationship with Reboboth Microfinance Bank LTD. and confirm that the above information is true. I agree to the terms and conditions which are presented overleaf.</p>
                </div>
                <div class="joint mt-5 mb-2">
                    <h4 class = "fw-bold">INDIVIDUAL/JOINT ACCOUNT HOLDER SIGNATURE</h4>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Signature</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                      <h6 class="signature mt-5">SIGNATURE MANDATE ..........</h6>
                </div>
                
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <h3 class="resolutions fw-bold"> CORPORATE RESOLUTIONS </h3>
                <div>
                    All executices of the Board Executives Governing Council of <input type="text"> requsted office 
                    <div class="row mt-4">
                        <div class="col-sm-12 col-md-6">
                            <label for="">Cant even see too blurr</label>
                            <input type="text"> a.m 
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="">cant see too blur</label>
                            <input type="text">
                        </div>
                    </div>
                </div>
                <div class="content mt-5 mb-2">
                    <h6 class = "mb-4">The following resolutions were passed:</h6>
                    <ul class="list-group list-group-flush">
                        <p><li class="list-group-item">That Rehoboth Microfinance Bank Limited (hereinafter called "The Bank")</li></p>
                        <p><li class="list-group-item">That the Bank be and is hereby inserted to honor and pay all herpes,
                             datt orders expressed to be drew on behalf of the company organization urson the company's 
                             organization ecom with de Bend all bills percentage and promhacry notes ade payable the Dand
                              exper to be galo belul if he omgay or any time or times, whether the brand or as this compare
                               are event by the payment therent for or ere inered roof graviss</li></p>
                        <p><li class="list-group-item">That the Bank intraday ruction with synd dose 
                            of other dealings in For docents of to worry priation in very case washer
                             the counts or he Company organs or are un desi watat de to die Bank's lato 
                             refuse we allow any dialny split from epithe san signal by I'm </li></p>
                        <p><li class="list-group-item">That aril the Rank receives ary written 
                            notice by way of th company organization o the cerary, the Bank he
                             noted to hermana granares) appearing hereunder for all purposes on
                              the company sorgen uded above </li></p>
                        <p><li class="list-group-item">Tibed the Turk and semi in Katil es teul lion in writing gven to 
                            the Rack and signed by the chairman and the secretary of the company, organizare. 
                            Tat the surorized gratories as stated in the column below are hereby authorized on
                             behalf of the </li></p>
                        <p><li class="list-group-item">tay Domowy to obtc credit for the company for 
                            he Bank on any and delivernotes dels cepatice, insum of grade agreemen and
                             may of the big of the Company org.zation thereof is a formsaisactory to the Daak</li></p>
                       
                    </ul>                    
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-sm-12 col-md-12">
                <ul class = "list-group list-group-flush">
                    <p><li class="list-group-item">The Gan ways is her play is a deva as wurity Themes </li></p>
                    <p><li class="list-group-item">Ivan credit ince olson not hilsen mortgages merchandise hills of</li></p>
                    <p><li class="list-group-item">lacing, werehesse receipts and other cocuments, 
                        selonging to the company aparization with full</li>
                    </p>
                    <p>atherty in vendors, assignor gracay of the same in the name of the Bark</li></p>
                
                    <p><li class = "list-group-item">tes Discmay hill receivable ry payman hell by the copy organ with full urbem er dorsette same in the aft Banks. (di Withdraw to the Hank and give roccipes for or so zurire the Hanc to deliver</li></p>
                    <p><li class = "list-group-item">to bearer or to one or more des gatos pasos, all or any decumeat and scites or otra property held by a wherhelda-cola.eral secarity or for the safekeepinger for any other murpose Recues, he Bank</li> </p>
                    <p><li class = "list-group-item">other securities. Teuta and deliver all secuity and uiler agreemen, mane a state of pur ponie Bank in cernection with any of the forening matters and fix the feal of the company cigania where necessary.</li></p>
                    <p><li class = "list-group-item">The Bank beply noified in writing by the socery or other of the comparation o we hese waiven chuch offers slid my of hac in pace offese resources, and retail has actly relvad me series time shall have clasederente: to permit the Banki 1 due course andy suchmases may be ceem approate. my such of is departments officers, ranches and orrespondents as the bank ay deem we be concedereby itshalbeneurified undecemos hamales from any red or by noured </li></p>
                    <p><li class = "list-group-item">coniung tipone of these resolut.was though, ese resorts may Lave beenchanged. Te and willa's al sing f my and her tunction lan balf a f company organizen win the Rank are hercherified concedard approved and fur schonk mey rely por the zurority corned by is resolution until receipt by it of a reseltran er the Bore Governing Council revoking or modify nghe seme</li></p>
                    
                </ul>
                
            </div>
        </div>

        <!-- Company Mandate -->
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Company Mandate
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class = "d-flex">
                                <span class="to"> To: </span>
                                 <span class="head fw-bold px-2"> REHEBOTH MICROFINANCE BANK </span>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Name of Comapny Organization:</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" >
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Registered Office:</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" >
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Address for correspondence:</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" >
                            </div>
                            <div>Dear Sir,</div>
                            <ul class = "list-group list-group-numbered">
                                <li class = "list-group-item">We, the undersigned request you to open a current account in the name of.</li>
                                <li class = "list-group-item">We hereby certify that the following are the resolutions adopted by the Board of Directions Governing Council of <input type = "text"> on <input type = "text"> and not subsequently rescinded or modified and that the said company is sciatic in general meeting has not imposed any restrictions and conditions in the exercise by the Board of Director Governing Council of any power to borrow money or to invest the funds of the company/organization determines otherwise.</li>
                                <li class = "list-group-item">That any sum(s) standing to the debit the current account shall be liable in interest charges at the role fixed by the Bank from time to time you are authorized to debit the account with your banking charges. Interest, commissions, etc.</li>
                                <li class = "list-group-item">That aril the Rank receives ary written notice by way of th company organization o the cerary, the Bank he noted to hermana granares) appearing hereunder for all purposes on the company sorgen uded above</li>
                                <li class = "list-group-item">That our attention has been drawn to the necessity of the safe guarding our cheque book so that unauthorized persons are unable to have access to li and lo the fact that reg.cc of this precaution may be a ground for any consequential loss being charged 1o our account and shall exempt the Bank from liability thereof.</li>
                                <li class = "list-group-item">I/WE agree that you may initiate or roll-reverse-invest on my behalf any money stading to the credit of any account in znyotic of your investment securities, namely; Time Deposit, Treasury Bills.Bank Acceptance or Guaranteed Commercial Payers until countrary instructons are given by me provided that you shall become demand all cheques issued by , f there are sufficient funds in my accountto cover the value of their cheques</li>
                                <li class = "list-group-item">That in addition to any general Hen or similar right to which you as banker may be entitled to by law may at anytime without notice to combine or consolidate all any of your account(s) with the liabilities to you and ser off or transfer any sum of sums, standing to the credit of any more of such accounts or any other credit be it cash, cheque, valueables, deposits, securities negotiable instruments or assest belonging to us with you in or towards satisfactions of any of our liabilities to you or any other account or in any other respect whether such liabilities present or future be actual or contignet, primary or collaterals, several or joint.</li>
                                <li class = "list-group-item">To hold you free from any responsibility for any loss of funds deposited with you due to any futyre government order law, levy, tax, embargo, exchange restrictions or other cause beyond your control.</li>
                                <li class = "list-group-item">To accept as due notification any notice of change in conditions governing the account directed to our last known address and to be bound by such change.</li>
                                <li class = "list-group-item">That if a cheque paid into our current is returned dishonoured , the same may be transmitted to us throught the last known address either by hearer or by post.</li>
                                <li class = "list-group-item">We agreee that the bank is not liable whatsoever for funds handedto cash officers and tellers outside banking hours except as may be otherwise agreed in writing</li>
                                <li class = "list-group-item">We agree that you may at your absolute discreetion close any time our account(s) with you upon giving seven(7) days notice in writing to us at our address for correspondence given. </li>
                            </ul>
                            <div class="mb-3 mt-3">
                               <span>---------------------</span> 
                               <h6 class = "word-break">Director/Chairman of Governing Council Signature & Date</h6>
                            </div>
                            <div class="mb-3 mt-3">
                                <span>---------------------</span> 
                                <h6 class = "word-break"> Secretary Signature & Date </h6>
                             </div>
                             <h5 class = "text-center text-danger"> COMPANY SEAL STAMP </h5>
                        </div>
                      </div>
                    </div>

                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Company Mandate2
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class = "d-flex">
                                <span class="to"> To: </span>
                                 <span class="head fw-bold px-2"> REHEBOTH MICROFINANCE BANK </span>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Branch:</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" >
                            </div>
                            <div>Dear Sir,</div>
                            <p> Please open a Current Account in my/our Name
                                I/WE request and authorize you unless I/WE give notice on writing to the contrary. to honour all
                                Cheques or others orders lu the said account with you whether such accounts be for the time being 
                                in credit or may become overdrawn, in consequence of such debt in consideration of which I/WE agree.
                            </p>
                            <ul class = "list-group list-group-numbered">
                                <li class = "list-group-item">To be responsible for repayment of any such overdraft with interest acceding thereon together with any usual banking charglies. Interests and communication.</li>
                                <li class = "list-group-item">To assume full responsibility for the genuine. coreerncss and validity of all Endorsements appearing on all cheques, orders, bills, notes, negotiable instruments and receipts or other documents deposited in any account</li>
                                <li class = "list-group-item"> To hold you free form any responsibility for any loss of funds deposited with you due to any of failure government order, law, levy,tax-charges</li>
                                <li class = "list-group-item">To accept as due to notification any notice of change in conditions governing the account directed in my last known address and to be bond bt such change.</li>
                                <li class = "list-group-item">That if a cheque credited to my/our individual current accoutn is returned dishonoured, the same may be transmitted to me through the last known address either by beurer or post.</li>
                                <li class = "list-group-item">That our attention has been drawn to the necessity of the safe guarding our cheque book so that unauthorized persons are unable to have access to li and lo the fact that reg.cc of this precaution may be a ground for any consequential loss being charged 1o our account and shall exempt the Bank from liability thereof.</li>
                                <li class = "list-group-item">I/WE agree that the Bank will not accept the liability whatsoever for funds handed to cash officers and tellers outside banking hours..</li>
                                <li class = "list-group-item">I/WE accept and agree that you are not bound to honour any cheque(s) drawn on this account unless there are sufficient funds in the account to cover the value of the said cheque and I understand and agree that any such cheque may be returned to me unpaid. But if paid I am obligated to repay the bank demand with interest thereon.</li>
                                <li class = "list-group-item">I/We understand that any sums of standing to debit of the current account shall be liable to interest charges at the rate fixed by the hunk from time to time. You are authorized to debit from the account your usual barking charges. Interests commissions etc. And any sum wrongly credited to my account. and lo take such steps to recover such sum with interest thereon</li>
                                <li class="list-group-item">I/WE agree that you may initiate or roll-reverse-invest on my behalf any money standing to the credit of any amount in anyone of your investment securites, namely; Time Deposit, Treasury Bills, Bank Acceptance or Guaranteed Commercial papers until contrary instruction are given by me provided that you shall honour on demand all cheques issued by me if there are sufficient funds in my account to cover the value of the cheques.</li>
                                <li class="list-group-item">I/WE agree that in addition to any general Hen or similar right to which you as banker may be entitled to by law may at anytime without notice to combine or consolidate all any of your account(s) with the liabilities to you and ser off or transfer any sum of sums, standing to the credit of any more of such accounts or any other credit be it cash, cheque, valueables, deposits, securities negotiable instruments or assest belonging to us with you in or towards satisfactions of any of our liabilities to you or any other account or in any other respect whether such liabilities present or future be actual or contignet, primary or collaterals, several or joint.</li>
                                <li class="list-group-item">I/We agree that you may at your absolute discreetion close any time our account(s) with you upon giving seven(7) days notice in writing to me at my address for correspondence given above or such other as may be notified from time to time writing to you.</li>
                                <li class="list-group-item">I/WE agree that you may treat the above authority until you receive notice in writing to the contrary.</li>
                            </ul>
                            <div class = "d-flex flex-row justify-content-around mb-3">
                                <div class="mb-3 mt-3">
                                    <input type = "text" class="form-control mb-3 mt-2">
                                    <h6 class = "text-center">Dated this</h6>
                                 </div>
                                 <div class="mb-3 mt-3">
                                    <input type = "text" class="form-control mb-3 mt-2"> 
                                    <h6 class = "text-center"> Dated Of </h6>
                                 </div>
                            </div>
                            <div class = "d-flex flex-row justify-content-around mb-3">
                                <div class="mb-3 mt-3">
                                    <input type = "text" class="form-control mb-3 mt-2">
                                    <h6 class = "text-center">Signature</h6>
                                 </div>
                                 <div class="mb-3 mt-3">
                                    <input type = "text" class="form-control mb-3 mt-2"> 
                                    <h6 class = "text-center"> Name && Address </h6>
                                 </div>
                            </div>
                            <div class = "d-flex flex-row justify-content-around mb-3">
                                <div class="mb-3 mt-3">
                                    <input type = "text" class="form-control mb-3 mt-2">
                                    <h6 class = "text-center">Witness Signature</h6>
                                 </div>
                                 <div class="mb-3 mt-3">
                                    <input type = "text" class="form-control mb-3 mt-2"> 
                                    <h6 class = "text-center"> Name && Address </h6>
                                 </div>
                            </div>
                            <div class="e-channel">
                                <h5 class = "fw-bold">E-CHANNEL PRODUCTS</h5>
                                <div class="sms-alert d-flex flex-row justify-content-evenly">
                                    <h5 class = "text-break"> SMS ALERT </h5>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">No</label>
                                      </div>
                                </div>
                                <div class="sms-alert d-flex flex-row justify-content-evenly">
                                    <h5>INTERNET BANKING</h5>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">No</label>
                                      </div>
                                </div>
                                <div class="sms-alert d-flex flex-row justify-content-evenly">
                                    <h5>ATM CARD</h5>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">No</label>
                                      </div>
                                </div>
                                <div class="sms-alert d-flex flex-row justify-content-evenly">
                                    <h5>MOBILE BANKING</h5>
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
                            <div class="form-group mt-4">
                                <label for="exampleInputEmail1">Customer Signature && Date</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Customer Signature && Date">
                            </div>
                        </div>
                      </div>
                    </div>

                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            CUSTOMER'S RESIDENTIAL ADDRESS VISITATION REPORT
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <form>
                                <div class="row mt-2">
                                    <div class="col-sm-12 col md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Account Name</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Account Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Account Number</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Account Number">
                                        </div>
                                    </div>
                                </div>
                                <p class = "mt-4">I <input type="text"> have visited the above named customer's address, below is my findings</p>
                                <div class="row mt-2">
                                    <div class="col-sm-12 col md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Address Visited</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Descrition of the Building Including LandMark</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Surname">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-sm-12 col md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Closest Bus Stop</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col md-6 col-lg-6">
                                        <select class="form-select mt-2" aria-label="Default select example">
                                            <option selected>Address Confirmed</option>
                                            <option value="1">Yes</option>
                                            <option value="2">No</option>
                                        </select>
                                    </div>
                                </div>
                                <p class = "mt-4">I <input type="text"> I hereby confirm that the customer resides at the above address and is well known in the address visited by me</p>
                                <div class="row mt-2">
                                    <div class="col-sm-12 col md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Date of Visit</label>
                                            <input type="date" class = "form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Account Office Sign/Date </label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Surname">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-sm-12 col md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Branch Manager Sign/Date</label>
                                            <input type="text" class = "form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-12 col md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">HBDM Sign/Date </label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Surname">
                                        </div>
                                    </div>
                                </div>
                            </form>                       
                         </div>
                      </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            REFERENCE FORM
                          </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <h6>The Manager</h6>
                              <form>
                                <div class = "row">
                                    <div class="col-sm-12 col md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">REHEBOTH MICROFINANCE BANK LTD</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Account Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Name of Applicant</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Account Name">
                                        </div>
                                    </div>
                                </div>
                                <p>I/WE wish to confimr that the above named individual/compant is
                                     well known to me and is suitable to maintain a current account with you.</p>
                                     <p>The Applicant signs thus <input type="text">
                                        And I witness the signature as being correct.
                                        I maintain a current account with</p>
                                  <div class="row mt-2">
                                      <div class="col-sm-12 col md-6 col-lg-6">
                                          <div class="form-group">
                                              <label for="exampleInputEmail1">Name of Bank</label>
                                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Account Name">
                                          </div>
                                      </div>
                                      <div class="col-sm-12 col md-6 col-lg-6">
                                          <div class="form-group">
                                              <label for="exampleInputEmail1">Address</label>
                                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Account Number">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row mt-2">
                                      <div class="col-sm-12 col md-6 col-lg-6">
                                          <div class="form-group">
                                              <label for="exampleInputEmail1">Account Number</label>
                                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
                                          </div>
                                      </div>
                                      <div class="col-sm-12 col md-6 col-lg-6">
                                          <div class="form-group">
                                              <label for="exampleInputEmail1">Type of Account</label>
                                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Surname">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row mt-2">
                                      <div class="col-sm-12 col md-12 col-lg-12">
                                          <div class="form-group">
                                              <label for="exampleInputEmail1"> Business/Occupation </label>
                                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
                                          </div>
                                      </div>
                                  </div>
                                  <p class = "mt-4">Yours Faithfully,</p>
                                  <div class="row mt-2">
                                      <div class="col-sm-12 col md-6 col-lg-6">
                                          <div class="form-group">
                                              <label for="exampleInputEmail1">Signature</label>
                                              <input type="date" class = "form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
                                          </div>
                                      </div>
  
                                      <div class="col-sm-12 col md-6 col-lg-6">
                                          <div class="form-group">
                                              <label for="exampleInputEmail1"> Date </label>
                                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Surname">
                                          </div>
                                      </div>
                                  </div>
  
                                  <div class="row mt-2">
                                      <div class="col-sm-12 col md-6 col-lg-6">
                                          <div class="form-group">
                                              <label for="exampleInputEmail1">Name</label>
                                              <input type="text" class = "form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
                                          </div>
                                      </div>
                                      
                                      <div class="col-sm-12 col md-6 col-lg-6">
                                          <div class="form-group">
                                              <label for="exampleInputEmail1">Address </label>
                                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Surname">
                                          </div>
                                      </div>
                                  </div>
                              </form>                       
                           </div>
                        </div>
                      </div>

                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            KNOW YOUR CUSTOMER (KYC) CERTIFICATE
                          </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <h6 class = "text-center">The following certification which is drawn up to compliance with CBN KYC policy sector 3 of Money Laundering Production act 2054, CBN KYC Directive 2601 and KYC manual, 2063.
                                Information that the promotes recovery for proper identification of a customer has been carried out.</h6>
                              <form>
                                <div class = "row">
                                    <div class="col-sm-12 col md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Customer Name</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Account Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Account Type</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Account Name">
                                        </div>
                                    </div>
                                </div>
                               
                                  <div class="row mt-2">
                                      <div class="col-sm-12 col md-6 col-lg-6">
                                          <div class="form-group">
                                              <label for="exampleInputEmail1">Tel Number</label>
                                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Account Name">
                                          </div>
                                      </div>
                                      <div class="col-sm-12 col md-6 col-lg-6">
                                          <div class="form-group">
                                              <label for="exampleInputEmail1">Email Address</label>
                                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Account Number">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row mt-2">
                                      <div class="col-sm-12 col md-6 col-lg-6">
                                          <div class="form-group">
                                              <label for="exampleInputEmail1">Gender</label>
                                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
                                          </div>
                                      </div>
                                      <div class="col-sm-12 col md-6 col-lg-6">
                                          <div class="form-group">
                                              <label for="exampleInputEmail1">Marital Status</label>
                                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Surname">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row mt-2">
                                      <div class="col-sm-12 col md-12 col-lg-12">
                                          <div class="form-group">
                                              <label for="exampleInputEmail1"> Religion </label>
                                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row mt-2">
                                      <div class="col-sm-12 col md-6 col-lg-6">
                                          <div class="form-group">
                                              <label for="exampleInputEmail1">Date of Birth (DOB)</label>
                                              <input type="date" class = "form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
                                          </div>
                                      </div>
  
                                      <div class="col-sm-12 col md-6 col-lg-6">
                                          <div class="form-group">
                                              <label for="exampleInputEmail1"> Maiden Name</label>
                                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Surname">
                                          </div>
                                      </div>
                                  </div>
  
                                  <div class="row mt-2">
                                      <div class="col-sm-12 col md-6 col-lg-6">
                                          <div class="form-group">
                                              <label for="exampleInputEmail1">Nationality</label>
                                              <input type="text" class = "form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
                                          </div>
                                      </div>
                                      
                                      <div class="col-sm-12 col md-6 col-lg-6">
                                          <div class="form-group">
                                              <label for="exampleInputEmail1">State of Origin</label>
                                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Surname">
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row mt-2">
                                    <div class="col-sm-12 col md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">LGA(Local Government) </label>
                                            <input type="text" class = "form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-12 col md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Home Town</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Surname">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-sm-12 col md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Place of Birth</label>
                                            <input type="text" class = "form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-12 col md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Mothers Maiden Name</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Surname">
                                        </div>
                                    </div>
                                </div>

                                    <div class="row mt-2">
                                        <div class="col-sm-12 col md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Address/Residential</label>
                                                <input type="text" class = "form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-12 col md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">earest Bustop</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Surname">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row mt-2">
                                        <div class="col-sm-12 col md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">BVN</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Surname">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Occupation Profession</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Surname">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-2">
                                        <div class="col-sm-12 col md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Employers Name</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Surname">
                                            </div>
                                        </div>
    
                                        <div class="col-sm-12 col md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Address/Office</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Surname">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row mt-2">
                                        <div class="col-sm-12 col md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Customer Nickname</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Surname">
                                            </div>
                                        </div>
    
                                        <div class="col-sm-12 col md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Next of Kin</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Surname">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-2">
                                        <div class="col-sm-12 col md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Relationship</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Surname">
                                            </div>
                                        </div>
    
                                        <div class="col-sm-12 col md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tel Number</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Surname">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-2">
                                        <div class="col-sm-12 col md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">ID issued Date</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Surname">
                                            </div>
                                        </div>
    
                                        <div class="col-sm-12 col md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Expiry Date</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Surname">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-2">
                                        <div class="col-sm-12 col md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Expected Annaul Income</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Surname">
                                            </div>
                                        </div>
    
                                        <div class="col-sm-12 col md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tel Number</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Surname">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-sm-12 col md-12 col-lg-12">
                                            <label for="exampleInputEmail1">Relationship</label>
                                            <select class="form-control">
                                                <option value="salary"> Salary </option>
                                                <option value="business"> Business Investment </option>
                                                <option value="dividends"> Dividends </option>
                                                <option value="others"> Others </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-sm-12 col md-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Who introduce you the the bank</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Surname">
                                            </div>
                                        </div>
    
                                    </div>
                                    <p class = "mt-2">I <input type="text">
                                        the Relationship Office of <input type="text">
                                        Who is a prospective customer of the bank do hereby certify that I have carried out every verification to establish the identity, address and nature of business of the customer and I also certify that the application: 
                                        is engaged in nature(of business) <input type="text">
                                        it shall be my responsibility to continously monitor the account activities and inform the management-OP if at any point in time there is (are) 
                                        no profound change(s) in one standing of the account holder and/or suspicious transactions as
                                         required by statutory regulation.
                                        </p>
                                        <div class = "row mt-2">
                                            <div class="col-sm-12 col-md-6 col-lg-6 regulatory d-flex flex-row justify-content-evenly mt-3 mb-3">
                                                    <div>
                                                        <label>Name of Account Officer</label>
                                                        <input type="text" class = "form-control" name="" id="">
                                                    </div>
                                                    <div class = "">
                                                        <label class = "">Date</label>
                                                        <input class = "form-control" type="date" name="" id="">
                                                    </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-6 regulatory d-sm-flex flex-row justify-content-evenly mt-3 mb-3">
                                                <div>
                                                    <label>Name and Signature of HM && BM</label>
                                                    <input type="text" class = "form-control" name="" id="">
                                                </div>
                                                <div>
                                                    <label>Date</label>
                                                    <input class = "form-control" type="date" name="" id="">
                                                </div>
                                                
                                            </div> 
                                        </div>

                              </form>                       
                           </div>
                        </div>
                      </div>

                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Business Premise Visitation Report Form
                          </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <form>
                                <div class = "row">
                                    <div class="col-sm-12 col md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Account Name</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Account Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Account Number</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Account Name">
                                        </div>
                                    </div>
                                </div>
                               <p class="mt-2">i <input type="text"> have visited the above names customer's address below is my findings:</p>
                                  <div class="row mt-2">
                                      <div class="col-sm-12 col md-6 col-lg-6">
                                          <div class="form-group">
                                              <label for="exampleInputEmail1">Address Visited</label>
                                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Account Name">
                                          </div>
                                      </div>
                                      <div class="col-sm-12 col md-6 col-lg-6">
                                          <div class="form-group">
                                              <label for="exampleInputEmail1">Building Description Including Landmark</label>
                                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Account Number">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row mt-2">
                                      <div class="col-sm-12 col md-6 col-lg-6">
                                          <div class="form-group">
                                              <label for="exampleInputEmail1">Closest Bus Stop</label>
                                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
                                          </div>
                                      </div>
                                      <div class="col-sm-12 col md-6 col-lg-6">
                                        <label for="exampleInputEmail1">Address Confirmed Oaky</label>
                                          <select class="form-group">
                                            <option value="">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                      </div>
                                  </div>
                                  <p class="mt-2 mb-2">I hereby confirm that the customer resides at the above address and is well known in the address visited by me</p>
                                  <div class="row mt-2">
                                      <div class="col-sm-6 col-md-6 col-lg-6">
                                          <div class="form-group">
                                              <label for="exampleInputEmail1"> Date of Visit </label>
                                              <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
                                          </div>
                                      </div>
                                      <div class="col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Account Office Sign/Date </label>
                                            <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
                                        </div>
                                    </div>
                                  </div>

                                  <div class="row mt-2">
                                      <div class="col-sm-12 col md-6 col-lg-6">
                                          <div class="form-group">
                                              <label for="exampleInputEmail1">Branch Manager Sign/Date</label>
                                              <input type="date" class = "form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
                                          </div>
                                      </div>
  
                                      <div class="col-sm-12 col md-6 col-lg-6">
                                          <div class="form-group">
                                              <label for="exampleInputEmail1"> HBDM Sign/Date </label>
                                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Surname">
                                          </div>
                                      </div>
                                  </div>
                              </form>                       
                           </div>
                        </div>
                      </div>

                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            CHEQUE CONFIRMATION
                          </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <form>
                                <p>You are required to confirm to Rehoboth Microfinance Bank of N50,000.00 and above beore such cheques are presented for payment over the counter and via clearing by other of the following ways:</p>
                                <div class = "row">
                                    <div class="col-sm-12 col md-12 col-lg-12">
                                        <div class="form-group">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1">Written</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">Sms</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">Email</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2"> In Person </label>
                                              </div>
                                        </div>
                                    </div>
                                </div>

                               <p class="mt-2"> This policy was adopted in further safeguard your acces from fradulent practices Kindly indicate your acceptance of the policy by signing the column that is most appropriate for your type of business</p>
                               <div class="row mt-3">
                                <h4 class = "mt-2">MININUM AMOUNT FOR CONFIRMATION N100,000 (ENCASHMENT) N100,000 (CLEARING) AND ABOVE</h4>   
                                    <div class="col-sm-12 col md-6 col-lg-6">
                                        <div class="form-group">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label" for="inlineCheckbox1">Confirmation letter duly signed by authorized signatory(ies)</label>
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-12 col md-6 col-lg-6">
                                        <div class="form-group">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label" for="inlineCheckbox1"> Confirmation date on the reverse side of the chequeOther (please specify)</label>
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <h4 class = "mt-2">MININUM AMOUNT FOR CONFIRMATION N100,000 (ENCASHMENT) N100,000 (CLEARING) AND ABOVE</h4>   
                                        <div class="col-sm-12 col md-6 col-lg-6">
                                            <div class="form-group">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label" for="inlineCheckbox1">Confirmation letter duly signed by authorized signatory(ies)</label>
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-12 col md-6 col-lg-6">
                                            <div class="form-group">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label" for="inlineCheckbox1"> Confirmation date on the reverse side of the chequeOther (please specify)</label>
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col md-6 col-lg-6">
                                            <div class="form-group">
                                                <div class="form-check form-check-inline">
                                                    <label class="form-check-label" for="inlineCheckbox1"> Confirmation date on the reverse side of the chequeOther (please specify)</label>
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                </div>
                                            </div>
                                        </div>
                                </div>

                                <div class="row mt-3">
                                    <h4 class = "mt-2">IF CONFIRMATIoN IS NOT REQUIRED PLEASE SIGN THE INDEMNITY BELOW</h4>   
                                    <h4>INDEMNITY</h4>
                                    <p> WE/I here by instruct Rehoboth Microfinance Bank Limited to clear our instruments without further confirmation WE/I hereby indemnify the Bank against any loss, fraud or damage occasioned by non-confirmation of instruments.</p>
                                </div>

                              </form>                       
                           </div>
                        </div>
                      </div>


                  </div>
            </div>
        </div>

        <nav aria-label="Page navigation example mt-5">
            <ul class="pagination justify-content-end mt-5">
              <li class="page-item">
                <a class="page-link"  href="index.php">Previous</a>
              </li>
              <!-- <li class="page-item"><a class="page-link" href="index.html">1</a></li>
              <li class="page-item"><a class="page-link" href="index2.html">2</a></li>
              <li class="page-item"><a class="page-link" href="index3.html">3</a></li> -->
              <li class="page-item">
                <a class="page-link" href="index2.php">Next</a>
              </li>
            </ul>
          </nav>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous">
    </script>

    <?php } else {
        header('Location:index.php');
    } ?>
</body>

<footer>
<?php include 'template/footer.php'; ?>
</footer>




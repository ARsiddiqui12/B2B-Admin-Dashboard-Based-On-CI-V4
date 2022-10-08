<div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="../../images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
      <?php echo view('sidebar_view'); ?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><i class="fa fa-users"></i> Customers
                  
                  <a href="javascript:;" class="btn btn-primary btn-sm add-btn-right-side-header btn-open-customer-modal"><i class="fa fa-plus"></i> Add</a>
                  
                  </h4>
                  <hr />
                  <div class="alert alert-success success-message" style="display:none;">A new B2B Customer Registered Successfully!</div>
                  
                  <div class="table-responsive">
                    <table class="table table-striped" style="width: 100%;" id="CustomersTable" data-url="<?php echo base_url('b2bcustomerdatatable'); ?>">
                      <thead>
                        <tr>
                          <th>
                            Account Number
                          </th>
                          <th>
                            First Name
                          </th>
                          <th>
                            Last Name
                          </th>
                          <th>
                            Email Address
                          </th>
                          <th>
                            Phone Number
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        
                      </tbody>
                    </table>
                  </div>
                
                
                </div>
              </div>
            </div>
            
            
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    
    
    <div class="modal fade" id="B2bModalCustomerForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="padding: 10px 12px !important;">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa-regular fa-address-book"></i> Add Customer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin: -19px -12px -35px auto !important;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body padding-ten">
        
                  
                   <div class="row">
                      <div class="col-md-1"></div>
                      <div class="col-md-3">
                          <p class="card-description">
                       <strong><i class="fa-solid fa-user-tie"></i> User Information</strong>
                      </p>
                      </div>
                      </div>
                  
                  
                  <form class="forms-sample" id="B2BCustomerForm" data-url="<?php echo base_url('b2bcustomerformsubmission'); ?>">
                      
                      <div class="row">
                          
                          <div class="col-md-1"></div>
                          
                          <div class="col-md-3">
                              
                              <div class="form-group">
                                <label for="">First Name <span class="required-star">*</span></label>
                                <input type="text" class="form-control input-sm" name="first_name" id="" placeholder="First Name" required>
                              </div>
                              
                          </div>
                          
                          <div class="col-md-3">
                              
                              <div class="form-group">
                                <label for="">Last Name <span class="required-star">*</span></label>
                                <input type="text" class="form-control input-sm" name="last_name" id="" placeholder="Last Name" required>
                              </div>
                              
                          </div>
                          
                          <div class="col-md-3">
                              
                              <div class="form-group">
                                <label for="">Email <span class="required-star">*</span></label>
                                <input type="email" class="form-control input-sm" name="email" id="" placeholder="Email" required>
                              </div>
                              
                          </div>
                          
                          <div class="col-md-1"></div>
                          
                      </div>
                      
                      <div class="row">
                          
                        <div class="col-md-1"></div>
                        
                        <div class="col-md-3">
                              
                              <div class="form-group">
                                <label for="">Mobile Number <span class="required-star">*</span></label>
                                <input type="text" class="form-control input-sm" name="mobile_number" id="" placeholder="Mobile Number" required>
                              </div>
                              
                          </div>
                          
                        <div class="col-md-3">
                              
                              <div class="form-group">
                                <label for="">Date Of Birth</label>
                                <input type="date" class="form-control input-sm" name="date_of_birth" id="" placeholder="YYYY/MM/DD">
                              </div>
                              
                          </div>
                          
                        <div class="col-md-3">
                              
                              <div class="form-group">
                                <label for="">Company Name</label>
                                <input type="text" class="form-control input-sm" name="company_name" id="" placeholder="Company Name">
                              </div>
                              
                          </div>
                        
                        <div class="col-md-1"></div>
                          
                      </div>
                      
                      <div class="row">
                          
                          <div class="col-md-1"></div>
                          
                          <div class="col-md-3">
                              
                              <div class="form-group">
                                  
                                <label for="">Customer Group <span class="required-star">*</span></label>
                                <select name="customer_group" class="js-example-basic-single form-control input-sm" required>
                                    
                                        <option value="" selected>Select Customer Group</option>
                                        <?php if(count($b2b_group_list) > 0){
                                            foreach($b2b_group_list as $r){
                                        ?>
                                       <option value="<?php echo $r->id;  ?>"><?php echo $r->group_name;  ?></option>
                                        <?php } } ?>
                                </select>
                              </div>
                              
                          </div>
                          
                          <div class="col-md-3">
                              
                              <div class="form-group">
                                <label for="">Referred By</label>
                                <select name="referred_by" class="js-example-basic-single form-control input-sm" >
                                    
                                        <option value="" selected>Select Referred User Id</option>
                                        <?php if(count($b2b_refered_list) > 0){
                                            foreach($b2b_refered_list as $r){
                                        ?>
                                       <option value="<?php echo $r->id;  ?>"><?php echo $r->account_number." - ".$r->first_name." ".$r->last_name;  ?></option>
                                        <?php } } ?>
                                </select>
                              </div>
                              
                          </div>
                        
                      </div>
                      
                      <hr />
                      
                      <div class="row">
                      <div class="col-md-1"></div>
                      <div class="col-md-3">
                          <p class="card-description">
                        <strong><i class="fa-solid fa-location-dot"></i> Address Information</strong>
                      </p>
                      </div>
                      </div>
                      <div class="row">
                          
                          <div class="col-md-1"></div>
                          
                          <div class="col-md-3">
                              
                              <div class="form-group">
                                <label for="">Address 1 <span class="required-star">*</span></label>
                                <input type="text" class="form-control input-sm" name="address_line_one" id="" placeholder="Address 1" required>
                              </div>
                              
                          </div>
                          
                          <div class="col-md-3">
                              
                              <div class="form-group">
                                <label for="">Address 2</label>
                                <input type="text" class="form-control input-sm" name="address_line_two" id="" placeholder="Address 2">
                              </div>
                              
                          </div>
                          
                          <div class="col-md-3">
                              
                              <div class="form-group">
                                <label for="">City <span class="required-star">*</span></label>
                                <input type="text" class="form-control input-sm" name="city" id="" placeholder="City" required>
                              </div>
                              
                          </div>
                          
                      </div>
                      
                      <div class="row">
                          
                          <div class="col-md-1"></div>
                          
                          <div class="col-md-3">
                              
                              <div class="form-group">
                                <label for="">Postal Code <span class="required-star">*</span></label>
                                <input type="text" class="form-control input-sm" name="postal_code" id="" placeholder="Postal Code" required>
                              </div>
                              
                          </div>
                          
                          <div class="col-md-3">
                              
                              <div class="form-group">
                                <label for="">State <span class="required-star">*</span></label>
                                <select name="state" class="js-example-basic-single form-control input-sm" required>
                                    
                                        <option value="" selected>Select State</option>
                                        
                                         <?php if(count($state_list) > 0){
                                            foreach($state_list as $r){
                                        ?>
                                       <option value="<?php echo $r->id;  ?>"><?php echo $r->state_name;  ?></option>
                                        <?php } } ?>
                                    
                                </select>
                              </div>
                              
                          </div>
                          
                          <div class="col-md-3">
                              
                              <div class="form-group">
                                <label for="">Country <span class="required-star">*</span></label>
                                <select name="country" class="js-example-basic-single form-control input-sm" required>
                                    
                                        <option value="" selected>Select Country</option>
                                        
                                        <?php if(count($country_list) > 0){
                                            foreach($country_list as $r){
                                        ?>
                                       <option value="<?php echo $r->id;  ?>"><?php echo $r->country;  ?></option>
                                        <?php } } ?>
                                    
                                </select>
                              </div>
                              
                          </div>
                          
                      </div>
                      
                      <div class="row">
                          
                          <div class="col-md-1"></div>
                
                          <div class="col-md-3">
                              
                              <div class="form-group">
                                <label for="">Favorite Destination</label>
                                <select name="favorite_id" class="js-example-basic-single form-control input-sm" required>
                                    
                                        <option value="" selected>Select Favorite Destination</option>
                                        
                                        <?php if(count($country_list) > 0){
                                            foreach($country_list as $r){
                                        ?>
                                       <option value="<?php echo $r->id;  ?>"><?php echo $r->country;  ?></option>
                                        <?php } } ?>
                                    
                                </select>
                              </div>
                              
                          </div>

                      </div>
                      
                      <hr />
                      
                      <div class="row">
                           <div class="col-md-1"></div>
                           <div class="col-md-6">
                              <p class="card-description">
                        <strong><i class="fa-solid fa-envelope-circle-check"></i> Email Notifications</strong>
                      </p>
                              <div class="form-group">
                                
                            <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" name="allow_general_email" class="form-check-input" >
                              General Emails - All account related emails.
                            </label>
                            </div>
                            
                            <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" name="allow_invoice_email" class="form-check-input" >
                              Invoice Emails - New Invoices, Reminders & Overdue Notices
                            </label>
                            </div>
                            
                            <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" name="allow_support_email" class="form-check-input" >
                              Support Emails - Receive a copy of all Support Ticket Communications.
                            </label>
                            </div>
                            
                            <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" name="allow_product_email" class="form-check-input" >
                              Product Emails - Welcome Emails, Suspensions & Other Lifecycle Notifications.
                            </label>
                            </div>
                                
                                
                              </div>
                              
                          </div>
                           
                           <div class="col-md-5">
                               
                              <p class="card-description">
                                <strong><i class="fa-solid fa-gears"></i> Settings</strong>
                              </p>
                              
                              <div class="form-group">
                                  
                                  <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" data-toggle="toggle" data-size="xs" name="allow_single_signin" class="form-check-input" >
                              Allow Single Sign-On
                            </label>
                            </div>
                            
                            <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input type="checkbox" data-toggle="toggle" data-size="xs" name="allow_marketing_email" class="form-check-input" >
                              Marketing Emails Opt-In
                            </label>
                            </div>
                                  
                              </div>
                              
                            </div>
                          
                      </div>
                      
                      <hr />
                      
                      <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-9">
                              <p class="card-description">
                        <strong><i class="fa-solid fa-file-circle-check"></i> Additional Information</strong>
                      </p>
                      
                              <div class="form-group">
                                <label for="">Customer Notes</label>
                                <textarea name="note" class="form-control" rows="6"></textarea>
                              </div>
                              
                          </div>  
                          
                      </div>
                      <hr />
                      <div class="row">
                      <div class="col-md-1"></div>
                      <div class="col-md-3">
                          <p class="card-description">
                        <strong><i class="fa-solid fa-lock"></i> Login Information</strong>
                      </p>
                      </div>
                      </div>
                      
                      
                      
                      
                      <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                              
                              <div class="form-group">
                                <label for="">Password</label>
                                <div class="input-group">
                                <input type="password" class="password-one form-control input-sm" name="password" id="passTxt" placeholder="Password" style="border-right: none !important;" required>
                                <div class="input-group-append" style="border: 1px solid #CED4DA;padding: 9px 5px 1px 5px;border-radius: 0px 5px 5px 0px;">
                                    <i class="fa fa-eye eye-open" data-id="1"></i>
                                    <i class="fa-solid fa-eye-slash eye-close" data-id="1"></i>
                                </div>
                                </div>
                              
                              </div>
                              
                          </div>
                          
                          <div class="col-md-3">
                               
                              <div class="form-group">
                                <label for="">Confirm Password</label>
                                <div class="input-group">
                                <input type="password" class="password-two form-control input-sm" name="confirm_password" id="" style="border-right: none !important;" placeholder="Password" required>
                                <div class="input-group-append" style="border: 1px solid #CED4DA;padding: 9px 5px 1px 5px;border-radius: 0px 5px 5px 0px;">
                                    <i class="fa fa-eye eye-open" data-id="2"></i>
                                    <i class="fa-solid fa-eye-slash eye-close" data-id="2"></i>
                                </div>
                                </div>
                              
                              </div>
                              
                          </div>
                          
                          <div class="col-md-3">
                              
                              <button type="button" class="btn btn-primary btn-sm btn-password-generator" style="margin-top: 29px;"><i class="fa-solid fa-shield-halved"></i> Generate Password</button>
                              
                          </div>
                          
                      </div>
                    
                    <input type="submit" id="hiddenSub" style="display:none;" />
                  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa-solid fa-xmark"></i> Close</button>&nbsp;&nbsp;&nbsp;
        <button type="button" class="btn btn-primary btn-sm btn-add-customer-submit"><i class="fa-solid fa-check"></i> Save changes</button>
      </div>
    </div>
  </div>
</div>
   
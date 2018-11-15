<!-----System User Registration ------>
<div class="modal fade" id="modal-form" tabindex="1" role="dialog" >
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form id="form-contact" method="post" class="form-basic form-validate-jquery" data-toggle="validator" enctype="multipart/form-data">
          {{ csrf_field() }} {{ method_field('POST') }}
          <div class="modal-header bg-success">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"> &times; </span>
            </button>
            <h3 class="modal-title"></h3>
          </div>

          <div class="modal-body">
            <div class="table-responsive">
              <div class="panel-body">
          
                <div class="form-basic form-validate-jquery">
                  <fieldset class="content-group">
                    <input type="hidden" id="id" name="id">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label> Name<span class="text-danger"> *</span></label>
                          <div class="form-group has-feedback has-feedback-left">
                            <input type="text" class="form-control" required="required"  placeholder="Full Name" name="name" id="idname">
                            <div class="form-control-feedback"><i class="icon-user"></i></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Role<span class="text-danger"> *</span></label>   
                          <div class="form-group has-feedback has-feedback-left">
                            <select data-plugin="selectpicker" class="select form-control" name="role" id="idrole" data-placeholder="---Select Role---">
                              <option></option> 
                              <option value="SYA">System Admin</option>
                              <option value="MGM">Management</option>
                              <option value="CCE">Customer Care Executive</option>
                              <option value="CCM">Customer Care Manager</option>
                              <option value="NEM">Network Manager</option>
                              <option value="TES">Technical Support</option>
                              <option value="BIM">Billing Manager</option>
                              <option value="FDE">Front Desk Executive</option>
                              <option value="SAM">Sales Manager</option>
                              <option value="SAE">Sales Executive</option>
                              <option value="ACC">Accounts</option>
                              <option value="AGE">Agencies</option>                          
                            </select> 
                            <div class="form-control-feedback"><i class="icon-mobile2"></i></div>
                          </div>           
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Designation<span class="text-danger"> *</span></label>
                          <div class="form-group has-feedback has-feedback-left">
                            <input type="text" class="form-control" required="required"  placeholder="Designation" name="designation" id="iddesignation">
                            <div class="form-control-feedback"><i class="icon-user"></i></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Mobile No<span class="text-danger"> *</span></label>
                          <div class="form-group has-feedback has-feedback-left">
                            <input type="number" class="form-control" required="required"  placeholder="Enter mobile number" name="mobilenumber" id="idmobilenumber" data-plugin="formatter" >
                            <div class="form-control-feedback"><i class="icon-mobile2"></i></div>
                          </div>           
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                         <label>Email<span class="text-danger"> *</span></label>
                         <div class="form-group has-feedback has-feedback-left">
                          <input type="text" class="form-control" required="required"  placeholder="Email" name="email" id="idemail">
                          <div class="form-control-feedback"><i class="icon-user"></i></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                       <label>Location<span class="text-danger"> *</span></label>     
                       <div class="form-group has-feedback has-feedback-left">
                        <select data-plugin="selectpicker" class="select form-control" id="idlocation" name="location" data-placeholder="---Select Location---">
                          <option></option> 
                          <option value="Dimapur">Dimapur</option>
                          <option value="Kohima">Kohima</option>
                          <option value="Mokokchung">Mokokchung</option>
                          <option value="Wokha">Wokha</option>
                          <option value="All">All</option>                          
                        </select>
                        <div class="form-control-feedback"><i class="icon-mobile2"></i></div>
                      </div>           
                    </div>
                  </div>
                </div>
                  </fieldset>
                </div>
              </div>
            </div>           
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-success btn-save">Submit</button>    
          </div>
      </form>
    </div>
  </div>
</div>
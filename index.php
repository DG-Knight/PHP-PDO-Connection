<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<title>PHP CRUD Operations Using PDO Connection</title>
    
	<!-- Bootstrap CSS File  -->
    <link href="asset/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
  <!-- Content Section -->
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <h1>PHP PDO Connection</h1>
          </div>
      </div>
      <div class="row">
          <div class="col-md-12">
              <div class="pull-right">
                  <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Add New Record</button>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-12">
              <h3>Records:</h3>

              <div class="records_content"></div>
          </div>
      </div>
  </div>
  <!-- /Content Section -->

  <!-- Bootstrap Modals -->
  <!-- Modal - Add New Record/User -->
  <div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Add New Record</h4>
              </div>
              <div class="modal-body">

                  <div class="form-group">
                      <label for="first_name">First Name</label>
                      <input type="text" id="first_name" placeholder="First Name" class="form-control"/>
                  </div>

                  <div class="form-group">
                      <label for="last_name">Last Name</label>
                      <input type="text" id="last_name" placeholder="Last Name" class="form-control"/>
                  </div>

                  <div class="form-group">
                      <label for="email">Email Address</label>
                      <input type="text" id="email" placeholder="Email Address" class="form-control"/>
                  </div>

              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                  <button type="button" class="btn btn-primary" onclick="addRecord()">Add Record</button>
              </div>
          </div>
      </div>
  </div>
  <!-- // Modal -->

<!-- Modal - Update User details -->
<div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Update</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="update_first_name">First Name</label>
                    <input type="text" id="update_first_name" placeholder="First Name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_last_name">Last Name</label>
                    <input type="text" id="update_last_name" placeholder="Last Name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_email">Email Address</label>
                    <input type="text" id="update_email" placeholder="Email Address" class="form-control"/>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()" >Save Changes</button>
                <input type="hidden" id="hidden_user_id">
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- Jquery JS file -->
<!--<script type="text/javascript" src="asset/bootstrap/js/jquery-1.12.4.min.js"></script>-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
<script type="text/javascript" src="asset/bootstrap/js/jquery-1.12.4.min.js"></script>
<!-- Bootstrap JS file -->
<script type="text/javascript" src="asset/bootstrap/js/bootstrap.min.js"></script>

<!-- Custom JS file -->
<script type="text/javascript" src="asset/bootstrap/js/script.js"></script>

</body>
</html>

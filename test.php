<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- DATATABLE -->
    <link href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.4/datatables.min.css" rel="stylesheet"/>
    <!-- DATARANGE PICKER -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <!-- SELECT 2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <title>PHP CRUD</title>
  </head>
  <body>



  <!-- Add User Modal-->
  <div class="modal fade" id="userAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">

          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <form id="saveUser">
              <div class="modal-body">

                  <div class="mb-3">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control">
                  </div>
                  <div class="mb-3">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control">
                  </div>
                  <div class="mb-3">
                        <label for="">Phone</label>
                        <input type="text" name="phone" class="form-control">
                  </div>
                  <div class="mb-3">
                        <label for="">CNP</label>
                        <input type="text" name="cnp" class="form-control">
                  </div>
                  <!-- <div class="mb-3">
                        <label for="">Choose Your Work</label>
                        <select class="form-control" aria-label="Default select example" name="work">
                            <option value="0"selected>Works</option>
                            <option value="1">Project Manager</option>
                            <option value="2">Programer</option>
                            <option value="3">Tester</option>
                        </select>
                  </div> -->
                  <div class="mb-3">
                        <label for="">Choose Your Work</label>
                        <select style="width: 100%; height: 100px !important" class="form-control select2" id="add_select2" name="work" aria-label="Default select example">
                            <option value="0" selected>Works:</option>
                            <option value="1">Project Manager</option>
                            <option value="2">Programer</option>
                            <option value="3">Tester</option>
                        </select>
                  </div>
                  <div class="mb-3">
                        <label for="file" class="form-label">File</label>
                        <input class="form-control" name="file" type="file" id="file">
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save User</button>
              </div>
          </form>

        </div>
      </div>
  </div>

  <!-- Update User Modal-->
  <div class="modal fade" id="userEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <form id="updateUser">
                  <div class="modal-body">

                      <div id="errorMessageUpdate" class="alert alert-warning d-none"></div>

                      <input type="hidden" name="user_id" id="user_id">
                      
                      <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                      </div>
                      <div class="mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" id="email" class="form-control">
                      </div>
                      <div class="mb-3">
                            <label for="">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control">
                      </div>
                      <div class="mb-3">
                            <label for="">CNP</label>
                            <input type="text" name="cnp" id="cnp" class="form-control">
                      </div>
                      <!-- <div class="mb-3">
                        <label for="">Choose Your Work</label>
                        <select class="form-control" aria-label="Default select example" name="work">
                          <option id="edit_work" selected></option>
                            <option value="1">Project Manager</option>
                            <option value="2">Programer</option>
                            <option value="3">Tester</option>
                        </select>
                  </div> -->
                  <div class="mb-3">
                        <label for="">Choose Your Work</label>
                        <select style="width: 100%" class="form-control" id="update_select2" name="work" aria-label="Default select example">
                            <option value="0" selected>Works:</option>
                            <option value="1">Project Manager</option>
                            <option value="2">Programer</option>
                            <option value="3">Tester</option>
                        </select>
                  </div>
                      <div class="mb-3">
                            <label for="file" class="form-label">Default file input example</label>
                            <input class="form-control" type="file" name="file" id="formFile">
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update User</button>
                  </div>
              </form>
        </div>
      </div>
  </div>

  <!-- View User Modal-->
  <div class="modal fade" id="userViewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">View User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
                  <div class="modal-body">
                      
                      <div class="mb-3">
                            <label for="">Name</label>
                            <p id="view_name" class="form-control"></p>
                      </div>
                      <div class="mb-3">
                            <label for="">Email</label>
                            <p id="view_email" class="form-control"></p>
                      </div>
                      <div class="mb-3">
                            <label for="">Phone</label>
                            <p id="view_phone" class="form-control"></p>
                      </div>
                      <div class="mb-3">
                            <label for="">CNP</label>
                            <p id="view_cnp" class="form-control"></p>
                      </div>
                      <div class="mb-3">
                            <label for="">Work</label>
                            <p id="view_work" class="form-control"></p>
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
        </div>
      </div>
  </div>

  <!-- TABLE WITH DATA -->
  <div class="container">
    <div class="row ">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>
              PHP AJAX CRUD
              
              <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#userAddModal">
                  Add User
              </button>

            </h4>
          </div>

          <div class="card-body">


                <div class="form-row">
                    <div class="col">
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
                          <input id="name_search" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                          <input id="email_search" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="inputGroup-sizing-default">Phone</span>
                          <input id="phone_search" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>   
                    </div>
                    <div class="col">
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="inputGroup-sizing-default">CNP</span>
                          <input id="cnp_search" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>   
                    </div>
                </div>

                <div class="form-row">
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Start date</span>
                            <input class="form-control datepicker" type="text" name="initial_date" id="initial_date" placeholder="YYY-MM-DD" style="height: 40px;"/>
                        </div>    
                    </div>
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">End date</span>
                            <input class="form-control datepicker" type="text" name="final_date" id="initial_date" placeholder="YYY-MM-DD" style="height: 40px;"/>
                        </div>
                    </div>
                </div>




                <table id="myTable" class="table table-bordered table-striped" style="width: 100%">
                      <thead>
                        <tr>
                          <th>ID</th> 
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>CNP</th>
                          <th>Work</th>
                          <th>Inregistration date</th>
                          <th >Action</th>
                        </tr>
                      </thead>
                </table>
          </div>
        </div>
      </div>
    </div>
  </div>


    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
    <!-- DATA RANGE -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <!-- SWEET ALERT -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- DATATABLE -->
    <script src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.4/datatables.min.js"></script>
    <!-- SELECT 2 -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  
     
    <script>
      $(document).ready(function(){

        //DATATABLE 
        var table = null;

        table = $('#myTable').DataTable({
          processing: true,
          searching: true,
          serverSide: true,
          statesave: true,
          "columnDefs": [
            { "targets": [0], "width": "10px" },
            { "targets": [-1], "width": "200px" },
            { "targets": "_all", "className": "dt-center" }
          ],
          "scrollX": true,
          'paging': true,
          "language": {
              "search": "Căutare:"
          },
          "pageLength": 10,
          "order": [
              [1, "asc"]
          ],
          'ajax': {
              'url': 'php_code/datatable1.php',
              'dataType': "json",
              'type': 'POST',
              'data': {
                "action": "myTable",
                "initial_date": initial_date,
                "final_date": final_date
              },
              "dataSrc": "records"
              complete: function (data){
                //console.log(data)
            }
          }
      
        });

        //DATATABLE FILTER BY NAME
        $('#name_search').on('input', function(){

          console.log(this.value)
          table
            .columns(1)
            .search(this.value)
            .draw();
        });

        //DATATABLE FILTER BY EMAIL
        $('#email_search').on('input', function(){

          console.log(this.value)
          table
            .columns(2)
            .search(this.value)
            .draw();
        });

        //DATATABLE FILTER BY PHONE
        $('#phone_search').on('input', function(){

          console.log(this.value)
          table
            .columns(3)
            .search(this.value)
            .draw();
        });

        //DATATABLE FILTER BY CNP
        $('#cnp_search').on('input', function(){

          console.log(this.value)
          table
            .columns(4)
            .search(this.value)
            .draw();
        });

        //DATATABLE FILTER BY INREGISTRATION DATE
        $(function() {
          jQuery.noConflict();
          $('#date_rangepicker').daterangepicker({
            opens: 'center'
          }, function(start, end, label) {
            //console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
          });

          $('#date_rangepicker').on('apply.daterangepicker', function(ev, picker){
          let start = picker.startDate.format('YYYY-MM-DD')
          let end = picker.endDate.format('YYYY-MM-DD')

          //console.log(getDatesInRange(new Date(start), new Date(end)));

          table
            .columns(6)
            .search(getDatesInRange(new Date(start), new Date(end)),true, false)
            .draw();

          $(this).val(picker.startDate.format('YYYY-MM-DD') + '-' + picker.endDate.format('YYYY-MM-DD'))
          });
        });

        //CONSTRUCT AN ARRAY START WITH STARTDATE AND FINISH WITH ENDDATE
        function getDatesInRange(start, end){
          const date = new Date(start.getTime());

          const dates = [];

          while(date <= end){

            dates.push(formatData(date));
            date.setDate(date.getDate() + 1);
          }
          
          let searchStr

          dates.forEach((id) => {
            if(searchStr !== ""){
              searchStr = `${searchStr}|${id}`
            }else{
              searchStr = id;
            }
          });

          return searchStr;
        }

        //DATE FORMATING(YYYY-MM-DD)
        function formatData(date){
          let startDate = new Date(date)
          let dt = startDate.getDate()
          let month = startDate.getMonth() + 1
          let year = startDate.getFullYear()

          if(dt<10){
            dt = '0' + month;
          }
          if(month<10){
            month = '0' + month;
          }
          let formatedData = year + '-' + month + '-' + dt

          return formatedData
        }

        //SELECT 2
        $('#add_select2').select2({
          placeholder: "Select a work",
          dropdownParent: '#userAddModal'
        });

        $('#update_select2').select2({
          placeholder: "Select a work",
          dropdownParent: '#userEditModal'
        });

        //ADD USER
        $(document).on('submit', '#saveUser', function(e){
          e.preventDefault();

          var formData = new FormData(this);
          formData.append("save_user", true);

          $.ajax({
            type: "POST",
            url: "php_code/add.php",
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
              
                var res = jQuery.parseJSON(response);
                if(res.status == 422){
                  Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'All fields are mandatory!'
                  })
                }else if(res.status == 500){
                  Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'The User could not be created!'
                  })
                }else if(res.status == 501){
                  Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'There was an error loading the file!'
                  })
                }else if(res.status == 502){
                  Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'The file type is not supported!'
                  })
                }else if(res.status == 200){

                  Swal.fire({
                    icon: 'success',
                    title: 'The user has been successfully added',
                    showConfirmButton: false,
                    timer: 1500
                  }) 
                    jQuery.noConflict();
                    $('#userAddModal').modal('hide');
                    $('#saveUser')[0].reset();

                    // $('#myTable').load(location.href + "#myTable");
                    //window.location.reload();
                    table.ajax.reload();
                }
            }

          });

        });


        //EDIT USER
        $(document).on('click', '.editUserBtn', function () {

          var user_id = $(this).attr('row-id');

          $.ajax({
            type: "GET",
            //url: "php_code/update.php?user_id=" + user_id,
            url: "php_code/view.php?user_id=" + user_id,
            success: function (response) {

              var res = jQuery.parseJSON(response);
              if(res.status == 422){

                  alert(res.message);

                }else if(res.status == 200){


                    $('#user_id').val(res.data.id);
                    $('#name').val(res.data.name);
                    $('#email').val(res.data.email);
                    $('#phone').val(res.data.phone);
                    $('#cnp').val(res.data.cnp);
                    $('#edit_work').text(res.data.workName);

                    jQuery.noConflict();
                    $('#userEditModal').modal('show');

                }
            }
          });

        });

        //UPDATE USER
        $(document).on('submit', '#updateUser', function(e){
          e.preventDefault();

          var formData = new FormData(this);
          formData.append("update_user", true);

          $.ajax({
            type: "POST",
            url: "php_code/update.php",
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
              
                var res = jQuery.parseJSON(response);
                if(res.status == 422){

                  Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'All fields are mandatory!',
                  })
                }else if(res.status == 500){
                  Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'The User could not be updated!',
                  })
                }else if(res.status == 501){
                  Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'There was an error loading the file!',
                  })
                }else if(res.status == 502){
                  Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'The file type is not supported!',
                  })
                }else if(res.status == 200){

                  Swal.fire({
                    icon: 'success',
                    title: 'The user has been successfully added',
                    showConfirmButton: false,
                    timer: 1500
                  })  
                    jQuery.noConflict();
                    $('#userEditModal').modal('hide');
                    $('#updateUser')[0].reset();

                    //$('#myTable').load(location.href + "#myTable");
                    //window.location.reload();
                    table.ajax.reload();

                }
            }

          });

        });

        //VIEW USER
        $(document).on('click', '.viewUserBtn', function () {

              var user_id = $(this).attr('row-id');

              $.ajax({
                type: "GET",
                url: "php_code/view.php?user_id=" + user_id,
                success: function (response) {

                  var res = jQuery.parseJSON(response);
                  if(res.status == 422){

                      alert(res.message);

                    }else if(res.status == 200){

                        $('#view_name').text(res.data.name);
                        $('#view_email').text(res.data.email);
                        $('#view_phone').text(res.data.phone);
                        $('#view_cnp').text(res.data.cnp);
                        $('#view_work').text(res.data.workName);

                        jQuery.noConflict();
                        $('#userViewModal').modal('show');

                    }
                }
              });

        });

        //DELETE USER
        $(document).on('click', '.deleteUserBtn', function (e) {
            e.preventDefault();

            Swal.fire({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                  if (result.isConfirmed) {

                    var user_id = $(this).attr('row-id');
                    $.ajax({
                      type: "POST",
                      url: "php_code/delete.php",
                      data: {
                          'delete_user': true,
                          'user_id': user_id
                      },
                      success: function (response) {

                        var res = jQuery.parseJSON(response);
                        if(res.status == 500){

                            alert(res.message);

                          }else{
                            Swal.fire(
                              'Deleted!',
                              'Your file has been deleted.',
                              'success'
                            )

                            //$('#myTable').load(location.href + "#myTable");
                            //window.location.reload();
                            table.ajax.reload();
                          }
                      },
                      complete: function(response){
                        console.log(response);
                      }
                    });
                    

                  }
                })
        });

      });

      
    </script>
  
  
  </body>
</html>


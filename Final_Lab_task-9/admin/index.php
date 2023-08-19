<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>PHP - AJAX - CRUD</title>
</head>
<body>



  <!-- Add Modal -->
  <div class="modal fade" id="Student_AddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Package Data </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="error-message">

                    </div>
                </div>
                <div class="col-md-6">
                    <label for="">Package Image</label>
                    <input type="file" class="form-control package_img" accept="image/*">
                </div>
                <div class="col-md-6">
                    <label for="">Package Name</label>
                    <input type="text" class="form-control package_title">
                </div>
                <div class="col-md-6">
                    <label for="">Package Price</label>
                    <input type="text" class="form-control package_price">
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary student_add_ajax">Save</button>
      </div>
    </div>
  </div>
</div>




    <!-- View Modal -->
    <div class="modal fade" id="StudentViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Package Detail View</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <h4 class="id_view"></h4>
                    <h4 class="pimage_view"></h4>
                    <h4 class="pname_view"></h4>
                    <h4 class="pprice_view"></h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>






        <!-- Edit Modal -->
    <div class="modal fade" id="StudentEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Student Data without page reload</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <div class="row">
                        <input type="hidden" id="id_edit">

                        <div class="col-md-12">
                            <div class="error-message">

                            </div>
                        </div>

                        <div class="col-md-12">
                        <img id="edit_img" src="" style="width:200px;height:200px;border:2px solid gray;border-radius:50%;object-fit:cover;">
                        </div>

                        
                        <div class="col-md-6">
                            <label for="">Package Image</label>
                            <input type="file" id="edit_pimg" class="form-control package_img" accept="image/*">
                        </div>
                <div class="col-md-6">
                    <label for="">Package Name</label>
                    <input type="text" id="edit_pname" class="form-control package_title">
                </div>
                <div class="col-md-6">
                    <label for="">Package Price</label>
                    <input type="text" id="edit_pprice" class="form-control package_price">
                </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary student_update_ajax">Update</button>
            </div>
            </div>
        </div>
    </div>





    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            PHP - AJAX - CRUD | Data without page reload using jquery ajax in php.
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#Student_AddModal">
                                Add
                            </button>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="message-show">

                        </div>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Package Image</th>
                                    <th>Package Name</th>
                                    <th>Package Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="studentdata">
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            getdata();

            $(document).on("click", ".delete_btn", function () {
                var stud_id = $(this).closest('tr').find('.stud_id').text();
                $.ajax({
                    type: "POST",
                    url: "code.php",
                    data: {
                        'checking_delete': true,
                        'stud_id': stud_id,
                    },
                    success: function (response) {
                        // console.log(response);
                        $('.message-show').append('\
                                <div class="alert alert-success alert-dismissible fade show" role="alert">\
                                    <strong>Hey!</strong> '+response+'.\
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                                        <span aria-hidden="true">&times;</span>\
                                    </button>\
                                </div>\
                            ');
                            // $('.studentdata').html("");
                            getdata();
                    }
                });

            });
            $('.student_update_ajax').click(function (e) { 
                e.preventDefault();
                var stud_id = $('#id_edit').val();
                var pimg = $('#edit_pimg').val();
                var pname = $('#edit_pname').val();
                var pprice  = $('#edit_pprice').val();

                if(pimg == 'undefined'){
                    pimg = ''
                }
                if(pname != '' & pprice !='' & pimg != '')
                {
                    var temp = pimg.split('fakepath')[1].replace(/\\/g, '');
                    $.ajax({
                        type: "POST",
                        url: "code.php",
                        data: {
                            'checking_update':true,
                            'pid':stud_id,
                            'pimg': temp,
                            'pname': pname,
                            'pprice': pprice,
                        },
                        success: function (response) {
                            $('#StudentEditModal').modal('hide');
                            $('.message-show').append('\
                                <div class="alert alert-success alert-dismissible fade show" role="alert">\
                                    <strong>Hey!</strong> '+response+'.\
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                                        <span aria-hidden="true">&times;</span>\
                                    </button>\
                                </div>\
                            ');
                            $('.studentdata').html("");
                            getdata();

                        }
                    });

                }
                else
                {
                    $('.error-message').append('\
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">\
                            <strong>Hey!</strong> Please enter all fileds.\
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                                <span aria-hidden="true">&times;</span>\
                            </button>\
                        </div>\
                    ');
                }
                
            });
            $(document).on("click", ".edit_btn", function () {
                var stud_id = $(this).closest('tr').find('.stud_id').text();

                $.ajax({
                    type: "POST",
                    url: "code.php",
                    data: {
                        'checking_edit': true,
                        'stud_id': stud_id,
                    },
                    success: function (response) {
                        // console.log(response);
                        $.each(response, function (key, studedit) { 
                            // console.log(studview['fname']);
                            $('#id_edit').val(studedit['id']);
                            $('#edit_img').attr("src", "./uploads/img/" + studedit['package_img']);
                            // $('#edit_pimg').val(studedit['package_img']);
                            $('#edit_pname').val(studedit['package_title']);
                            $('#edit_pprice').val(studedit['package_price']);
                        });
                        $('#StudentEditModal').modal('show');
                    }
                });

            });
            $(document).on("click", ".viewbtn", function () {
                var package_id = $(this).closest('tr').find('.stud_id').text();

                $.ajax({
                    type: "POST",
                    url: "code.php",
                    data: {
                        'checking_view': true,
                        'stud_id': package_id,
                    },
                    success: function (response) {
                        // console.log(response);
                        $.each(response, function (key, studview) { 
                            $('.id_view').text(studview['id']);
                            $('.pimage_view').text(studview['package_img']);
                            $('.pname_view').text(studview['package_title']);
                            $('.pprice_view').text(studview['package_price']);
                        });
                        $('#StudentViewModal').modal('show');
                    }
                });

            });            
            $('.student_add_ajax').click(function (e) { 
                e.preventDefault();
                var pimg = $('.package_img').val();
                var pname = $('.package_title').val();
                var pprice = $('.package_price').val();
                if(pimg == 'undefined'){
                    pimg = ''
                }
                if(pname != '' & pprice !='' & pimg != '')
                {
                    var temp = pimg.split('fakepath')[1].replace(/\\/g, '');
                    $.ajax({
                        type: "POST",
                        url: "code.php",
                        data: {
                            'checking_add':true,
                            'pimg': temp,
                            'pname': pname,
                            'pprice': pprice,
                        },
                        success: function (response) {
                            $('#Student_AddModal').modal('hide');
                            $('.message-show').append('\
                                <div class="alert alert-success alert-dismissible fade show" role="alert">\
                                    <strong>Hey!</strong> '+response+'.\
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                                        <span aria-hidden="true">&times;</span>\
                                    </button>\
                                </div>\
                            ');
                            $('.studentdata').html("");
                            getdata();
                            $('.package_img').val("");
                            $('.package_title').val("");
                            $('.package_price').val("");
                        }
                    });

                }
                else
                {
                    $('.error-message').append('\
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">\
                            <strong>Hey!</strong> Please enter all fileds.\
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                                <span aria-hidden="true">&times;</span>\
                            </button>\
                        </div>\
                    ');
                }
                
            });
        });


        function getdata()
        {
            $.ajax({
                type: "GET",
                url: "fetch.php",
                success: function (response) {
                    $.each(response, function (key, value) { 
                        $('.studentdata').append('<tr>'+
                                '<td class="stud_id">'+value['id']+'</td>\
                                <td><img src="uploads/img/'+value['package_img']+'" style="width:50px;height:50px;border:2px solid gray;border-radius:8px;object-fit:cover"></td>\
                                <td>'+value['package_title']+'</td>\
                                <td>'+value['package_price']+'</td>\
                                <td>\
                                    <a href="#" class="badge btn-info viewbtn">VIEW</a>\
                                    <a href="#" class="badge btn-primary edit_btn">EDIT</a>\
                                    <a href="" class="badge btn-danger delete_btn">Delete</a>\
                                </td>\
                            </tr>');
                    });
                }
            });
        }
    </script>

  </body>
</html>
<?php
?>

<!--  BEGIN CREATE USER PART  -->
<br>



<div class="row layout-top-spacing">
    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-6">
            <div class="table-responsive mb-4 mt-4">
                <h5>Ads Details</h5>
                <table id="example23" class="table table-hover" style="width:100%">

                </table>
            </div>
        </div>
    </div>
</div>

<!--  END CONTENT PART  -->

<script>
    // showInsertFormData 
    function showInsertFormData() {
        // show form when click
        $('#form1').show();
        // save record function call when form show
        // txt_for
        $('#txt_for').val('INSERT');

        // create jquery content for hide btn for the main btn  btn-main
        let btnData = '';
        btnData += '<button type="button" onclick="HideFormData()" class="btn btn-info btn-blck mt-5">Hide-Form</button>';
        btnData += '<br>';
        

    }

    // this is for when form is hide btn click for show form
    function HideFormData() {
        $('#form1').hide();
        // this is for when page relaord all fields value keep empty
        $('#txt_first_name').val('');
        $('#txt_last_name').val('');
        $('#txt_email').val('');
        $('#txt_user_password').val('');
        $('#txt_profile').val('');
        $('#txt_contact').val('');

        let btnData = '';
        btnData += '<button type="button" onclick="showInsertFormData()" class="btn btn-info btn-blck mt-5">Hide-Form</button>';
       

    }
     //this is for edit data 
     function show_edit_form() {
        $('#form1').show();
        $('#txt_for').val('EDIT');

        let btnData = '';
        btnData += '<button type="button" onclick="showInsertFormData()" class="btn btn-info btn-blck mt-5">Hide-Form</button>';
        btnData += '<br>';

        $('#btn_main').html(btnData);

        let content1 = '<button style="text-info" class="btn btn-info" name="submit" type="submit">Edit Data</button>';

        $('#submit_div').html(content1);

    }
</script>

<script>
    $(document).ready(function() {
        // form one is hidden here
        $('#form1').hide();

          // this is for when page relaord all fields value keep empty
          $('#txt_full_name').val('');
            $('#txt_email').val('');
            $('#txt_password').val('');
            $('#txt_confirm_password').val('');
            $('#txt_propic').val('');

            $("#user_form").validate({
            ignore: [],
            rules: {
                txt_full_name: {
                        required: true,
                    },
                    txt_email: {
                        required: true,
                        email: true
                    },
                    txt_password: {
                        required: true,
                       
                    },
                    txt_confirm_password: {
                        required: true,
                        equalTo: '#txt_password'
                    },
                    txt_propic: {
                        required: true,
                    }

                },
                messages: {
                    txt_full_name: "fullname is required!",
                    txt_password: "password is Required!",
                    txt_email: {
                        required: "Email Address is Required!",
                        email: "Please enter a valid email address!"
                    },
                    txt_confirm_password: {
                        required: "confirm is Required!",
                    },
                    txt_propic: {
                        required: "User Profile Image is Required!",
                    } 
                },
                submitHandler: function(form) {

                    let formData = new FormData(form);

                

                    // insert data 
                    if ($('#txt_for').val() === 'INSERT') {
                        $.ajax({
                            type: 'POST',
                            url: '/saveuserdetails',
                            data: formData,
                            dataType: 'json',
                            processData: false,
                            enctype: 'multipart/form-data',
                            contentType: false,
                            cache: false,
                            success: function(result) {

                                dt.ajax.reload();
                                dt.draw();
                                
                                if (result.status == 200) {
                                    toastr["success"](result.message)

                                    toastr.options = {
                                        "closeButton": true,
                                        "debug": false,
                                        "newestOnTop": false,
                                        "progressBar": true,
                                        "positionClass": "toast-top-right",
                                        "preventDuplicates": false,
                                        "onclick": null,
                                        "showDuration": "100",
                                        "hideDuration": "1000",
                                        "timeOut": "5000",
                                        "extendedTimeOut": "1000",
                                        "showEasing": "swing",
                                        "hideEasing": "linear",
                                        "showMethod": "fadeIn",
                                        "hideMethod": "fadeOut"
                                    }
                                }

                                if (result.status == 500) {
                                    toastr["error"](result.message)

                                    toastr.options = {
                                        "closeButton": true,
                                        "debug": false,
                                        "newestOnTop": false,
                                        "progressBar": true,
                                        "positionClass": "toast-top-right",
                                        "preventDuplicates": false,
                                        "onclick": null,
                                        "showDuration": "200",
                                        "hideDuration": "1000",
                                        "timeOut": "5000",
                                        "extendedTimeOut": "1000",
                                        "showEasing": "swing",
                                        "hideEasing": "linear",
                                        "showMethod": "fadeIn",
                                        "hideMethod": "fadeOut"
                                    }
                                }


                            },
                            error: function(error) {
                                console.log("error : " + error);
                                dt.ajax.reload();
                                dt.draw();

                            },

                        }); 

                        HideFormData();
                        }

                 }
                                
                    
             });

// dat table init here
dt = $('#example23').DataTable({
            "processing": true,
            "initComplete": function (settings, json) {
                $("#example23").show();
            },
            "serverSide": true,
            "select": true,
            "dataSrc": "tableData",
            "bDestroy": true,
            "columns": [
                {
                "data": "idAds",
                "title": "Ads ID"
                },
              {
                    "data": "Ads_type",
                    "title": "Ads Types"
                }
             
                ],
            "language": {
                "emptyTable": "No files to show..."
            },
            "ajax": "{{ url('adsshow') }}",
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": []
            
        });

  
      
            
    });
</script>

{{-- get dat in to fields here --}}
<script>
    function edit(id) {
        $.ajax({
            type: 'POST',
            url: 'getData',
            data: {
                  ID: id,
                 _token: '{{csrf_token()}}'
            },
            dataType: 'json',
            // error: function(error) {
            //     console.log("error : " + error);
            // },
            success: function(result) {
                show_edit_form();
                if (result.status == 500) {
                    toastr["error"](result.message)
                    toastr.options = {
                        "closeButton": true,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": true,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }
                }

                if (result.status == 200) {

                   // $('#name').val(r.data[0].fname + ' ' + r.data[0].lname);
                   $('#txt_admin_id').val(result.data[0].adminid);
                   $('#txt_full_name').val(result.data[0].fullname);
                   $('#txt_email').val(result.data[0].email);

                }
               

            }
           
        });

    }



    // delete admin data
    function del(id) {
        swal({
            title: "Do you want to remove this Product?",
            // text: "You will not be able to recover this lorem ipsum!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#fcb03b",
            confirmButtonText: "Yes, remove it!",
            cancelButtonText: "No, cancel it!"
        }).then(result => {

            if (result.value) {
                $.ajax({
                    url: "delete",
                    data: {
                        ID: id,
                        _token: '{{csrf_token()}}'
                    },
                    method: "POST",
                    dataType: "json",
                    error: function (error) {
                        console.log(error);
                        dt.ajax.reload();
                        dt.draw();
                        swal("Failed", "The operation which you perform is failed!", "error");
                    },
                    success: function (r) {
                        console.log(r);
                        dt.ajax.reload();
                        dt.draw();
                        swal({
                            title: 'Removed!',
                            text: 'Your selected user has been removed.',
                            type: 'success',
                        });
                    }
                });
            } else if (result.dismiss === swal.DismissReason.cancel) {
                swal("Cancelled", "Ok..target user is safe:)", "error");
            }
        });
    }


     // delete admin data
     function blc(id) {
        swal({
            title: "Do you want Block this User?",
            // text: "You will not be able to recover this lorem ipsum!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#fcb03b",
            confirmButtonText: "Yes, Block it!",
            cancelButtonText: "No, cancel it!"
        }).then(result => {

            if (result.value) {
                $.ajax({
                    url: "block",
                    data: {
                        ID: id,
                        _token: '{{csrf_token()}}'
                    },
                    method: "POST",
                    dataType: "json",
                    error: function (error) {
                        console.log(error);
                        dt.ajax.reload();
                        dt.draw();
                        swal("Failed", "The operation which you perform is failed!", "error");
                    },
                    success: function (r) {
                        console.log(r);
                        dt.ajax.reload();
                        dt.draw();
                        swal({
                            title: 'Removed!',
                            text: 'Your selected user has been Blcoked.',
                            type: 'success',
                        });
                    }
                });
            } else if (result.dismiss === swal.DismissReason.cancel) {
                swal("Cancelled", "Ok..target user is safe:)", "error");
            }
        });
    }

</script>
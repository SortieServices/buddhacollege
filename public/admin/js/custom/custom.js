// ############################
// ###### Custom JS File ######
// ############################


var token = document.querySelector('meta[name="csrf-token"]').content;

// quill text editor


// var toolbarOptions = [
//     ['bold', 'italic', 'underline'],        // toggled buttons
//     ['blockquote'],
//     [{ 'list': 'ordered'}, { 'list': 'bullet' }],
//     [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
//     [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
//     [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

//     [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
//     [{ 'align': [] }],
//     ['clean']                                         // remove formatting button
//   ];

//   Quill.register('modules/counter', function(quill, options) {
//     var container = document.querySelector(options.container);
//     quill.on('text-change', function() {
//       var text = quill.getText();
//       if (options.unit === 'word') {
//         container.innerText = text.split(/\s+/).length + ' words';
//       } else {
//         container.innerText = text.length + ' characters';
//       }
//     });
//   });


/*
** Slug Generator **
**/

function slugify(text) {
    return text.toString().toLowerCase()
        .replace(/\s+/g, '-');              // Replace spaces with -
        // .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
        // .replace(/\-\-+/g, '-')         // Replace multiple - with single -
        // .replace(/^-+/, '')             // Trim - from start of text
        // .replace(/-+$/, '');            // Trim - from end of text
}

function capitalize_first_letter(text) {
    return text.charAt(0).toUpperCase() + text.slice(1);
}

$(document).ready(function () {
    // $('.select2').select2();

    // $('.select2-icons').select2({
    //     templateResult: iconFormat,
    //     templateSelection: iconFormat
    // });
    // $('.select2InModal').select2({
    //     templateResult: iconFormat,
    //     templateSelection: iconFormat
    // });

});

 //checkbox event for value
 $(function()
 {
     $('input[type="checkbox"]').click(function(){
         if($(this).is(':checked'))
         {
             $(this).val(1);
         }
         else
         {
             $(this).val(0);
         }
     });
 });


// clone div
var varient_element_count = 1;
var feature_element_count = 1;
$('#btn_attribute_id-feature').on('click', function () {

    clone_div('attribute_id-feature',feature_element_count)
})

$('#btn_attribute_id-varient').on('click', function () {

    clone_div('attribute_id-varient',varient_element_count)
})

function clone_div(clone_element,element_count) {

    var select_type = clone_element.split('-')[1];

    var options_count = $('#' + clone_element + '-0 option').length; // minus 1 for select item
    // if(element_count + 1 > options_count -1) {
    //     alert('cannot add more than ' + element_count + ' options');
    //     return false;
    // }
    // else{

        let clone_div = $('#div_main_' + clone_element ).clone();
        clone_div.attr('id', 'div_' + clone_element + '-' + element_count);
        // clone_div.find('#div_main_attribute_id-feature').remove();
        clone_div.find('.'+ select_type +'-select').attr('id', clone_element + '-' + element_count);
        clone_div.find('.'+ select_type +'-value').attr('id', clone_element + '-value-' + element_count)


        clone_div.appendTo('#div_' + clone_element);

        // if(select_type == 'feature') {
            // feature_element_count++

        // }
        // else
        // {
        //     varient_element_count++;
        // }
    // }
}


function getajaxdata(url, table)
{

    $.ajax({
        url: url,
        type: "GET",
        dataType: "json",
        success: function (data) {
            if(table == 'users'){
                user_datatable(data);
            }
            else if(table == 'city'){
                city_datatable(data);
            }
            else if(table == 'enquiry'){
                enquiry_datatable(data);
            }
            else if(table == 'registration'){

                registration_datatable(data);
            }

        },
        error: function (data) {
            console.log('Error:', data);
        }
    });
}

    function user_datatable(dataset)
    {

        $('#users-table').DataTable({
        "data": dataset.data,
        "iDisplayLength": 10,
        // "order": ([1, 'asc'], [9, 'asc']),
        "lengthChange": false,
        "searching": true,
        "bDestroy": true,
        "paging": true,
        "info": true,
        "ordering": true,
        "scrollCollapse": true,
        "autoWidth": false,
        "columns": [
                    { 'data': 'DT_RowId'},
                    { 'data': 'name' },
                    { 'data': 'email'},
                    { 'data': 'mobile'},
                    { 'data': 'created_at'},
                    { 'data': 'status'},

                    { 'data': 'action', orderable: false, searchable: false},
                ],
                "columnDefs":
                [
                {
                "targets": [0],
                "orderable": false
                }
                ],
        });
    }

    function city_datatable(dataset)
    {

        $('#city-table').DataTable({
        "data": dataset.data,
        "iDisplayLength": 10,
        // "order": ([1, 'asc'], [9, 'asc']),
        "lengthChange": false,
        "searching": true,
        "bDestroy": true,
        "paging": true,
        "info": true,
        "ordering": true,
        "scrollCollapse": true,
        "autoWidth": false,
        "columns": [
                { 'data': 'DT_RowId'},
                { 'data': 'name' },
                { 'data': 'state'},

                { 'data': 'action', orderable: false, searchable: false},
                ],
                "columnDefs":
                [
                {
                "targets": [0],
                "orderable": false
                }
                ],
        });
    }

    function enquiry_datatable(dataset)
    {

        $('#category-table').DataTable({
        "data": dataset.data,
        "iDisplayLength": 10,
        // "order": ([1, 'asc'], [9, 'asc']),
        "lengthChange": false,
        "searching": true,
        "bDestroy": true,
        "paging": true,
        "info": true,
        "ordering": true,
        "scrollCollapse": true,
        "autoWidth": false,
        "columns": [
                    { 'data': 'DT_RowId'},
                    { 'data': 'name' },
                    { 'data': 'parent'},
                    { 'data': 'status'},
                    { 'data': 'action', orderable: false, searchable: false},
                ],
                "columnDefs":
                [
                  {
                  "targets": [0],
                  "orderable": false
                  }
                ],
        });
    }

    function registration_datatable(dataset)
    {

        $('#attribute-table').DataTable({
        "data": dataset.data,
        "iDisplayLength": 10,
        // "order": ([1, 'asc'], [9, 'asc']),
        "lengthChange": false,
        "searching": true,
        "bDestroy": true,
        "paging": true,
        "info": true,
        "ordering": true,
        "scrollCollapse": true,
        "autoWidth": false,
        "columns": [
                    { 'data': 'DT_RowId'},
                    { 'data': 'name' },
                    { 'data': 'type'},
                    { 'data': 'attribute_type'},
                    { 'data': 'status'},
                    { 'data': 'action', orderable: false, searchable: false},
                ],
                "columnDefs":
                [
                  {
                  "targets": [0],
                  "orderable": false
                  }
                ],
        });
    }


    // function updateOutOfStock(product_id)
    // {

    // }
    //Form Submission
    function submit_form(form, opration)
    {
        var table_name = form.getAttribute('data-table'); // its a custom attribute added in the form

        var method = opration == 'add' ? 'POST' : 'PATCH';

        if(form.id == 'category-edit-form' || form.id == 'attribute-edit-form')
        {
            method = 'POST';
        }

        $.ajax({
        url: form.action,
        method: method,
        data: new FormData(form),
        dataType: "JSON",
        contentType: false,
        cache: false,
        processData: false,
        headers: {
            'X-CSRF-Token': token
        },
        success: function(data) {

            if (data.status == 200) {

                $('.spinner-border').addClass('d-none');
                $('#success-msg').removeClass('d-none').text(data.message);
                $('#edit_success-msg').removeClass('d-none').text(data.message);

                setTimeout(() => {
                    $('#success-msg').addClass('d-none')
                    $('#edit_success-msg').addClass('d-none')
                }, 3000);
                if(opration == 'add'){
                    $('#' + table_name + '-add-form')[0].reset();
                }

                getajaxdata(window.location.href, table_name);
            }
        },
        error: function(response) {
                $('.spinner-border').addClass('d-none');
                $.each(response.responseJSON.errors, function(key, value) {
                    if(opration == 'edit'){
                        $('#error_edit-' + key ).text(value[0]);
                        $('#edit_'+ key ).removeClass('border-0').addClass('is-invalid');
                    }else{
                        $('#error-' + key ).text(value[0]);
                        $('#'+ key ).removeClass('border-0').addClass('is-invalid');
                    }
                })
            }
        });
    }




    // here url is for update
    function editModel(id,url,table)
    {
        if(table == 'city'){
            edit_city(id,url);
        }
        else if(table == 'users'){
            edit_user(id,url);
        }
        else if(table == 'enquiry'){
            edit_enquiry(id,url);
        }
        else if(table == 'registration'){
            edit_registration(id,url);
        }
    }


    function edit_city(id,url)
    {
        var offcanvasElement = document.getElementById("offcanvasedit");
        var offcanvas = new bootstrap.Offcanvas(offcanvasElement);

        $.ajax({
            url: 'cities/'+id,
            type: "GET",
            dataType: "json",
            success: function (data) {

                $('#city-edit-form').attr('action',url);
                console.log(data);
                $("#edit_id").val(data.data.id);
                $("#edit_name").val(data.data.name);

                // let option = '';
                // if(data.data.state_id != 0 && data.data.parent != null){
                //     option += '<option value="'+data.data.state_id+'" selected>' + data.data.parent.name + '</option>';
                //     $('#edit_state_id').append(option);
                // }
                $("#edit_state_id option").each(function()
                {
                   if(this.value == data.data.state_id)
                   {
                       $(this).prop('selected', 'selected');
                   }
                });
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });

        return offcanvas.toggle();
    }

    function edit_user(id,url)
    {
        var offcanvasElement = document.getElementById("attribute_edit_canvas");
        var offcanvas = new bootstrap.Offcanvas(offcanvasElement);

        $.ajax({
            url: 'users/'+id,
            type: "GET",
            dataType: "json",
            success: function (data) {

                $('#attribute-edit-form').attr('action',url);

                $("#edit_id").val(data.data.id);
                $("#edit_name").val(capitalize_first_letter(data.data.name));

                $("#edit_type option").each(function()
                {
                   if(this.value == data.data.type)
                   {
                       $(this).attr('selected', 'selected');
                   }
                });

                $("#edit_attribute_type option").each(function()
                {
                   if(this.value == data.data.attribute_type)
                   {
                       $(this).attr('selected', 'selected');
                   }
                });

                $("#edit_status").val(data.data.status);
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });

        return offcanvas.toggle();
    }

    function edit_enquiry(id,url)
    {
        var offcanvasElement = document.getElementById("offcanvasedit");
        var offcanvas = new bootstrap.Offcanvas(offcanvasElement);

        $.ajax({
            url: 'coupans/'+id,
            type: "GET",
            dataType: "json",
            success: function (data) {

                $('#coupan-edit-form').attr('action',url);

                $("#edit_code").val(data.data.code);

                $("#edit_value").val(data.data.value);
                $("#edit_min_purchase_amount").val(data.data.min_purchase_amount);
                $("#edit_from_date").val(data.data.from_date);
                $("#edit_to_date").val(data.data.to_date);


                // let option = '';
                // if(data.data.parent_id != 0 && data.data.parent != null){
                //     option += '<option value="'+data.data.parent_id+'" selected>' + data.data.parent.name + '</option>';
                //     $('#edit_parent_id').append(option);
                // }
                $("#edit_type option").each(function()
                {
                   if(this.value == data.data.type)
                   {
                       $(this).prop('selected', 'selected');
                   }
                });

            },
            error: function (data) {
                console.log('Error:', data);
            }
        });

        return offcanvas.toggle();
    }

    function edit_registration(id,url)
    {

        var offcanvasElement = document.getElementById("offcanvasedit");
        var offcanvas = new bootstrap.Offcanvas(offcanvasElement);

        $.ajax({
            url: 'permissions/'+id,
            type: "GET",
            dataType: "json",
            success: function (data) {

                $('#permissions-edit-form').attr('action',url);

                $("#edit_name").val(data.data.name);

            },
            error: function (data) {
                console.log('Error:', data);
            }
        });

        return offcanvas.toggle();
    }

    function deleteConfirmation(model,url)
    {

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            customClass: {
            confirmButton: 'btn btn-primary',
            cancelButton: 'btn btn-outline-danger ms-1'
            },
            buttonsStyling: false
        }).then(function (result) {
            if (result.value) {
                $.ajax({
                    url:url,
                    type: "DELETE",
                    headers: {
                        'X-CSRF-Token': token
                   },
                    // data: {
                    //     id: 5
                    // },csrf-token
                    // dataType: "html",
                    success: function (data) {

                        Swal.fire({
                            icon: 'success',
                            title: 'Deleted!',
                            text: 'Your file has been deleted.',
                            customClass: {
                            confirmButton: 'btn btn-success'
                            }
                        }).then(function(success){
                            location.reload();
                        });
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        var err = JSON.parse(xhr.responseText);
                        Swal.fire({
                            title: 'Cancelled',
                            text: err.message,
                            icon: 'error',
                            customClass: {
                            confirmButton: 'btn btn-success'
                            }
                        });

                    },

                });
            } else if (result.dismiss === Swal.DismissReason.cancel) {
            Swal.fire({
                title: 'Cancelled',
                text: 'Your imaginary file is safe :)',
                icon: 'error',
                customClass: {
                confirmButton: 'btn btn-success'
                }
            });
            }
        });
    }

    // Status Update
    function statusConfirmation(url){

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, Change it!',
            customClass: {
            confirmButton: 'btn btn-primary',
            cancelButton: 'btn btn-outline-danger ms-1'
            },
            buttonsStyling: false
        }).then(function (result) {
            if (result.value) {
                $.ajax({
                    url:url,
                    type: "GET",
                    headers: {
                        'X-CSRF-Token': token
                },
                    // data: {
                    //     id: 5
                    // },
                    // dataType: "html",
                    success: function (data) {

                        Swal.fire({
                            icon: 'success',
                            title: 'Changed!',
                            text: 'Your status has been changed.',
                            customClass: {
                            confirmButton: 'btn btn-success'
                            }
                        }).then(function(success){
                            location.reload();
                        });
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        var err = JSON.parse(xhr.responseText);
                        Swal.fire({
                            title: 'Cancelled',
                            text: err.message,
                            icon: 'error',
                            customClass: {
                            confirmButton: 'btn btn-success'
                            }
                        });

                    },

                });
            } else if (result.dismiss === Swal.DismissReason.cancel) {
            Swal.fire({
                title: 'Cancelled',
                text: 'Status not changed :)',
                icon: 'error',
                customClass: {
                confirmButton: 'btn btn-success'
                }
            });
            }
        });
    }







<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/x-icon" href="../../assets/images/inven-log3.png" />
</head>
</html>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<style>
      .content-wrapper{
        font-family: Nunito, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
        font-weight: 500;
        background-color: #1E282C;
      }
</style>
  <!-- Content Header (Page header) -->
  <section class="content-header">
  <style>
      h1{
        font-family: Nunito, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
        font-weight: bolder;
        color: gray;
      }
    </style>
    <h1>
      Manage Description
      <small>Value</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><a href="<?php echo base_url('attributes/') ?>">Description</a></li>
      <li class="active">Description Value</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-12 col-xs-12">

        <div class="box">
          <div class="box-body">
            <h4>Description name: <?php echo $attribute_data['name']; ?></h4>
          </div>
        </div>

        <div id="messages"></div>

        <?php if($this->session->flashdata('success')): ?>
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('success'); ?>
          </div>
        <?php elseif($this->session->flashdata('error')): ?>
          <div class="alert alert-error alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('error'); ?>
          </div>
        <?php endif; ?>

        <?php //if(in_array('createGroup', $user_permission)): ?>
          <button class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add Value</button>
          <br /> <br />
        <?php //endif; ?>


        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Manage Description Value</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="manageTable" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Description Value</th>
                <?php //if(in_array('updateGroup', $user_permission) || in_array('deleteGroup', $user_permission)): ?>
                  <th>Action</th>
                <?php //endif; ?>
              </tr>
              </thead>

            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- col-md-12 -->
    </div>
    <!-- /.row -->
    

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<!-- create brand modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="addModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add Description Value</h4>
      </div>

      <form role="form" action="<?php echo base_url('attributes/createValue') ?>" method="post" id="createForm">

        <div class="modal-body">
          <div class="form-group">
            <label for="brand_name">Description Value</label>
            <input type="text" class="form-control" id="attribute_value_name" name="attribute_value_name" placeholder="Enter attribute value" autocomplete="off">
          </div>
        </div>

        <div class="modal-footer">
          <input type="hidden" name="attribute_parent_id" id="attribute_parent_id" value="<?php echo $attribute_data['id']; ?>">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add Description V.</button>
        </div>

      </form>


    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- edit brand modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="editModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Description Value</h4>
      </div>

      <form role="form" action="<?php echo base_url('attributes/updateValue') ?>" method="post" id="updateForm">

        <div class="modal-body">
          <div id="messages"></div>

          <div class="form-group">
            <label for="edit_brand_name">Description Value</label>
            <input type="text" class="form-control" id="edit_attribute_value_name" name="edit_attribute_value_name" placeholder="Enter attribute value" autocomplete="off">
          </div>
        </div>

        <div class="modal-footer">
          <input type="hidden" name="attribute_parent_id" id="attribute_parent_id" value="<?php echo $attribute_data['id']; ?>">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update Description V.</button>
        </div>

      </form>


    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- remove brand modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="removeModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Discard Description Value</h4>
      </div>

      <form role="form" action="<?php echo base_url('attributes/removeValue') ?>" method="post" id="removeForm">
        <div class="modal-body">
          <p>Do you really want to remove description value 
          <b><i><span><span style="text-transform:uppercase;">ID:
    <?php echo $attribute_data['id']; ?>.</span></i></b> ?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">Yes, delete</button>
        </div>
      </form>


    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<script type="text/javascript">
var manageTable;
var base_url = "<?php echo base_url(); ?>";

$(document).ready(function() {

  

  $("#attributeNav").addClass('active');

   //This will help you to hide your message after 3 seconds with fadeOut animation.
  // You can change seconds in timeout variable.
  var timeout = 3000; // in miliseconds (3*1000)

$('.alert').delay(timeout).fadeOut(300);

  // initialize the datatable 
  manageTable = $('#manageTable').DataTable({
    'ajax': base_url+'attributes/fetchAttributeValueData/'+<?php echo $attribute_data['id']; ?>,
    'order': []
  });

  // submit the create from 
  $("#createForm").unbind('submit').on('submit', function() {
    var form = $(this);

    // remove the text-danger
    $(".text-danger").remove();

    $.ajax({
      url: form.attr('action'),
      type: form.attr('method'),
      data: form.serialize(), // /converting the form data into array and sending it to server
      dataType: 'json',
      success:function(response) {

        manageTable.ajax.reload(null, false); 

        if(response.success === true) {
          $("#messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
            '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
            '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
          '</div>');
          $(function() {
// setTimeout() function will be fired after page is loaded
// it will wait for 2 sec. and then will fire
// $("#successMessage").hide() function
setTimeout(function() {
    $(".alert-success").hide('blind', {}, 200)
}, 2000);
})

          // hide the modal
          $("#addModal").modal('hide');

          // reset the form
          $("#createForm")[0].reset();
          $("#createForm .form-group").removeClass('has-error').removeClass('has-success');

        } else {

          if(response.messages instanceof Object) {
            $.each(response.messages, function(index, value) {
              var id = $("#"+index);

              id.closest('.form-group')
              .removeClass('has-error')
              .removeClass('has-success')
              .addClass(value.length > 0 ? 'has-error' : 'has-success');
              
              id.after(value);

            });
          } else {
            $("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
              '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
              '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
            '</div>');
            $(function() {
// setTimeout() function will be fired after page is loaded
// it will wait for 2 sec. and then will fire
// $("#successMessage").hide() function
setTimeout(function() {
    $(".alert-warning").hide('blind', {}, 200)
}, 2000);
})
          }
        }
      }
    }); 

    return false;
  });

});

// edit function
// id => attribute value id
function editFunc(id)
{ 

  $.ajax({
    url: base_url+'attributes/fetchAttributeValueById/'+id,
    type: 'post',
    dataType: 'json',
    success:function(response) {

      console.log(response);

      $("#edit_attribute_value_name").val(response.value);

      // submit the edit from 
      $("#updateForm").unbind('submit').bind('submit', function() {
        var form = $(this);

        // remove the text-danger
        $(".text-danger").remove();

        $.ajax({
          url: form.attr('action') + '/' + id,
          type: form.attr('method'),
          data: form.serialize(), // /converting the form data into array and sending it to server
          dataType: 'json',
          success:function(response) {

            manageTable.ajax.reload(null, false); 

            if(response.success === true) {
              $("#messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
                '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
              '</div>');
              $(function() {
// setTimeout() function will be fired after page is loaded
// it will wait for 2 sec. and then will fire
// $("#successMessage").hide() function
setTimeout(function() {
    $(".alert-success").hide('blind', {}, 200)
}, 2000);
})

              // hide the modal
              $("#editModal").modal('hide');
              // reset the form 
              $("#updateForm .form-group").removeClass('has-error').removeClass('has-success');

            } else {

              if(response.messages instanceof Object) {
                $.each(response.messages, function(index, value) {
                  var id = $("#"+index);

                  id.closest('.form-group')
                  .removeClass('has-error')
                  .removeClass('has-success')
                  .addClass(value.length > 0 ? 'has-error' : 'has-success');
                  
                  id.after(value);

                });
              } else {
                $("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
                  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                  '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
                '</div>');
                $(function() {
// setTimeout() function will be fired after page is loaded
// it will wait for 2 sec. and then will fire
// $("#successMessage").hide() function
setTimeout(function() {
    $(".alert-warning").hide('blind', {}, 200)
}, 2000);
})
              }
            }
          }
        }); 

        return false;
      });

    }
  });
}

// remove functions 
function removeFunc(id)
{
  if(id) {
    $("#removeForm").on('submit', function() {

      var form = $(this);

      // remove the text-danger
      $(".text-danger").remove();

      $.ajax({
        url: form.attr('action'),
        type: form.attr('method'),
        data: { attribute_value_id:id }, 
        dataType: 'json',
        success:function(response) {

          manageTable.ajax.reload(null, false); 

          if(response.success === true) {
            $("#messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
              '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
              '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
            '</div>');
            $(function() {
// setTimeout() function will be fired after page is loaded
// it will wait for 2 sec. and then will fire
// $("#successMessage").hide() function
setTimeout(function() {
    $(".alert-success").hide('blind', {}, 200)
}, 2000);
})
            // hide the modal
            $("#removeModal").modal('hide');

          } else {

            $("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
              '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
              '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
            '</div>'); 
            $(function() {
// setTimeout() function will be fired after page is loaded
// it will wait for 2 sec. and then will fire
// $("#successMessage").hide() function
setTimeout(function() {
    $(".alert-warning").hide('blind', {}, 200)
}, 2000);
})
          }
        }
      }); 

      return false;
    });
  }
}


</script>

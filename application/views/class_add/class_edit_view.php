<?php
include_once('Template/dash_index.php');
 include_once('Template/nav.php');
 if (empty($this->session->userdata("logged_in")) == true) {
     
     redirect("login.htm");
 }

   
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href='<?php echo base_url()?>assets/css/bootstrap.min.css'>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/animate.min.css">
	<link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
   
    <link href="<?php echo base_url()?>assets/css/demo.css" rel="stylesheet" />
	<link href="<?php echo base_url()?>assets/css/breadcrumbs.css" rel="stylesheet" />
	<style>
       #vg{

            position: absolute;
            bottom: 5px;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -2;
            /*background-image: url("<?php echo base_url();?>assets/img/12.jpg");*/
            /*background-color: rgb(225, 229, 229);*/
            background-color: #dadada;
            background-size: cover !important;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            filter: blur(50px);
            -webkit-filter: blur(5px);
            }
            #all1>p{
            	font-size: 13px;
            	text-align: center;
            	font-family: sans-serif;
            	color: #fff;
            }
       #msg1{
            	font-size: 13px;
            	text-align: center;
            	font-family: sans-serif;
            	color: #fff;
            }

         #msg{
            	font-size: 13px;
            	text-align: center;
            	font-family: sans-serif;
            	color: #fff;
            }
      
</style>
</head>
<body>
	<div id="vg"></div>
	<div class="page-content">
<div class="container-fluid">
	<div class="row">
                <ul class="breadcrumb">
                  <li><a href="<?php echo base_url(); ?>dash.htm">Dashboard</a></li>
                  <li><a href="<?php echo base_url(); ?>classes.htm">Add Class & Group</a></li>
                  <li><a href="<?php echo base_url(); ?>classes_details_only.htm">View Class</a></li>
                  <li>Edit Class</li>
                </ul>
            </div>
	<div class="row">
		<div class=" col-sm-4 col-md-6 col-xs-offset-2 col-xs-pull-0" style="margin-bottom: 10%; position: absolute; z-index: 1; ">
			<br/>
			<div class="col-md-10 col-sm-12 col-xs-offset-1">
				<form method="post" action="<?php echo base_url()?>update.htm">
					<!-- <?php echo form_hidden('id',$id); ?> -->
					<div class="form-group">
				 <input type='hidden' name='id_update' value="<?php echo $result[0]->cls_id ?>" >
				<input type="text" name="classes" value="<?php echo $result[0]->cls_name ?>" class="form-control">
				<!-- <input type="text" name="groups" value="<?php echo $result[0]->grp_name ?>" class="form-control"> -->
						<div class="alert-danger" id="all1">
								<?php echo form_error('classes'); ?>
							</div>
							<?php
									if (!empty($this->session->flashdata('cls_msg')))
									 {
										echo "<div id='msg1' class='alert-danger'>";
										echo $this->session->flashdata('cls_msg');
										echo "</div>";
									}

								?>
							
					</div>
					
				
					
					<input type="submit" name="update_btn" class="btn btn-success btn-block" value="Update Class"/>

			</form>
		</div>

	  </div>
	  
	</div>
</body>
</html>
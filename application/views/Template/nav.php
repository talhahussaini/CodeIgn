<div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><i class="pe-7s-home"></i> Dashboard</a>
                </div>
               
           
            <ul class="nav navbar-nav navbar-right">
                <li style="margin-top: 7%; margin-right: 5em; font-family: verdana;">
                    <small>Welcome.. <b><i><?php if (!empty($this->session->userdata('logged_in'))) {
                       $sess = $this->session->userdata('logged_in');
                       echo $sess['us_name'];
                    }  ?></i> 
                   
                   </b> </small>
                </li>
                         <li>
                            <a class="txton" href="<?php echo base_url(); ?>logout.htm"><i class="pe-7s-power"></i> LogOut</a>
                        </li>
                        <li class="separator hidden-lg"></li>
                    </ul>
        </nav>

 
 
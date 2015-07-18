
<?php
	 
	$this->load->view('common/header.php');
?>

<body layout="row"  ng-controller="DashboardController">
    
<md-sidenav layout="column" class="md-sidenav-left md-whiteframe-z2" md-component-id="left" md-is-locked-open="$mdMedia('gt-md')">
      <md-toolbar class="md-tall md-hue-2">
        <span flex></span>
        <div layout="column" class="md-toolbar-tools-bottom inset">
          <user-avatar></user-avatar>
          <span></span>
          <div>Firstname Lastname</div>
          <div>email@domainname.com</div>
        </div>
      </md-toolbar>
       
    </md-sidenav>

 <div layout="column" class="relative" layout-fill role="main">
      
     <md-toolbar class="md-hue-2" flex="10">
          <div class="md-toolbar-tools">
            <h2>
              <span><i class="fa fa-user"></i> Login</span>
            </h2>
          </div>
        </md-toolbar>
   </div>


    
    <?php

	$this->load->view('common/footer.php');
	//$this->load->view('masterController.php');
?>
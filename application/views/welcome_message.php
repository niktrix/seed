
<?php
	 
	$this->load->view('common/header.php');
?>

<body layout="column"  ng-controller="LoginController">
    

  <md-toolbar flex="5">
     <md-toolbar flex>
          <div class="md-toolbar-tools" layout-align="center">
            <h2>
              <span><i class="fa fa-user"></i> Login</span>
            </h2>
          </div>
        </md-toolbar>
    </md-toolbar>


    <md-content  layout-align="center center" layout="row" layout-padding flex>
      <md-card  flex="40">
        <md-toolbar flex>
          <div class="md-toolbar-tools" layout-align="center">
            <h2>
              <span><i class="fa fa-user"></i> Login</span>
            </h2>
          </div>
        </md-toolbar>
    
    <md-card-content>
      <form name="signInForm" ng-submit="submitLogin()" flex >
        <md-input-container>
          <label>Username</label>
            <input ng-model="username">
        </md-input-container>
    <md-input-container>
      <label>Password</label>
      <input ng-model="password" type="password">
    </md-input-container>
<!--         <md-button class="md-primary md-raised submit"  type="submit">Sign in</md-button>
 -->
        <div class="md-actions" layout="row" layout-align="end center">
             <md-button class="md-primary md-hue-2 md-raised submit">Sign In</md-button>
       </div>
      
  </form>
</md-card-content>
</md-card>
</md-content>


    <?php
	$this->load->view('common/footer.php');
	//$this->load->view('masterController.php');
?>
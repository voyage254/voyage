  <form role="form" method="post" class="login_form">
  <h3>Welcome to Voyage </h3>
  <h4>Please Login Your Account</h4>
  <hr>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="" name="email" placeholder="Enter email" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="" name="password" placeholder="Password" required>
  </div>
  <button type="submit" class="btn btn-info"><i class="fa fa-check-square-o"></i> Submit</button>
  <div class="pull-right"><a href="#add_member" data-toggle="modal"  type="submit" class="btn btn-info"><i class="fa fa-group"></i> Join US</a></div>
</form>
  <?php include('signup_modal.php') ?>
  <script>
						jQuery(document).ready(function(){
						jQuery(".login_form").submit(function(e){
								e.preventDefault();
								var formData = jQuery(this).serialize();
								$.ajax({
									type: "POST",
									url: "login.php",
									data: formData,
									success: function(html){
									if(html=='true')
									{
										window.location = 'home.html';  
									}else{
										alert('Please Check Your Username and Password');
									}
									}
								});
								return false;
							});
						});
						</script>
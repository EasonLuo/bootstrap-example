<!DOCTYPE html>
<html>
<head>
<title>Bootstrap Example</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<link rel="stylesheet" href="css/sticky-footer-navbar.css" />
<style>
</style>
</head>
<body>


<!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
			<div class="form-container">
				<form action="" method="POST" class="form" role="form">
					<fieldset>
						<legend><h3>Basic Information</h3></legend>
					<div class="form-group">
						<div class="row">
							<div class="col-sm-3">
								<label>Username</label>
							</div>
							<div class="col-sm-9">
								<input class="form-control" name="username" required="required">
								<div id="username-message" style="display:none;" class="alert alert-warning">Username is required.</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<input class="form-control" name="password" placeholder="Password">
						<div id="password-message" style="display:none;" class="alert alert-warning">Password is required.</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">Confirm Password</span>
							<input class="form-control" name="confirm">
						</div>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input class="form-control" type="email" required="required" name="email" value="example@gmail.com">
					</div>
					
					<div class="form-group">
						<label>Age</label>
						<input class="form-control" type="number">
					</div>
					<div class="form-group">
						<div class="checkbox">
							<label><input type="checkbox">Subscribe</label>
						</div>
					</div>
					<div class="form-group">
						<div class="btn-group btn-group-justified" role="group">
							<div class="btn-group">
								<input type="reset" class="btn btn-default" value="Clear">
							</div>
							<div class="btn-group">
								<input type="submit" class="btn btn-success" value="Register">
							</div>
						</div>
					</div>
					</fieldset>
				</form>
				</div>
				
				<table class="table table-striped">
					<tr>
						<td>Username</td>
						<td>Password</td>
						<td>Email</td>
						<td>Age</td>
					</tr>
					<tr>
						<td>Username</td>
						<td>Password</td>
						<td>Email</td>
						<td>Age</td>
					</tr>
					<tr>
						<td>Username</td>
						<td>Password</td>
						<td>Email</td>
						<td>Age</td>
					</tr>
					<tr>
						<td>Username</td>
						<td>Password</td>
						<td>Email</td>
						<td>Age</td>
					</tr>
				</table>
				
				<div class="list-group">
					<div class="list-group-item">Username<span class="badge">3</span></div>
					 
					<div class="list-group-item">Password <span class="label label-success">New</span></div>
					<div class="list-group-item">Email</div>
					<div class="list-group-item">Age</div>
				</div>
				
				<div class="well">
					<p>Well example
					<br>
					</p>
				</div>
				
				<div class="panel panel-primary">
					<div class="panel-heading"><h4>Information</h4></div>
					<div class="panel-body">
					<p>Panel example
					</p>
					</div>
				</div>
			</div>
		</div>
	</div>

   
    <footer class="footer">
      <div class="container">
        <p class="text-muted">Place sticky footer content here.</p>
      </div>
    </footer>



<!-- Latest compiled and minified JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script type="text/javascript">

// add required validation
jQuery("input.form-control[required=required]").on("change", function(){
	if(!this.value || this.value==""){
		jQuery("#"+this.name+"-message").show();
	}
});

// add username available
jQuery("input[name=username]").on("change",function(){
	var username = this.value;
	var input = this;
	jQuery.get("username-validater.php?username="+username, null, function(response){
		if(response=='error'){
			jQuery(input).parent().append("<div id='username-available' class='alert alert-danger'>"+username+" has been taken.</div>");
		}else{
			jQuery("#username-available").remove();
		}
	});
});

</script>

</body>
</html>
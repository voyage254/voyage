<nav class="navbar navbar-default " role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><i class="fa fa-user"></i> <?php echo $name; ?></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     <!-- <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" Placeholder="Search Member"  required>
        </div>
        <button type="submit" class="btn btn-info"><i class="fa fa-search"></i> Search</button>
      </form>-->
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i> Account <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#change_profile_picture_modal" data-toggle="modal"><i class="fa fa-pencil"></i> Change Profile Picture</a></li>
            <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>

          </ul>
        </li>
      </ul>
	  <?php include('change_profile_picture_modal.php'); ?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
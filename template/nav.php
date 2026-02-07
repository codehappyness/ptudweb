<nav class="navbar navbar-default">
  <div class="container">

    <!-- Brand -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Tin tức tổng hợp</a>
    </div>

    <!-- Menu -->
    <div class="collapse navbar-collapse" id="mainNavbar">

      <!-- Left menu -->
      <ul class="nav navbar-nav">
        <li class="active"><a href="../loaitin/loaitin_quanly.php">Loại tin tức</a></li>
        <li><a href="../tintuc/tintuc_quanly.php">Tin tức</a></li>
        <li><a href="../tintuc/tintuc_quanly.php">Người dùng</a></li>
      </ul>

      <!-- Right menu -->
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="glyphicon glyphicon-user"></span>
            <?php echo $_SESSION['user_name']; ?>
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="../logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>

    </div>
  </div>
</nav>

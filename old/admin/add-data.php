<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/dbcon.php';


require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/includes/functions.php';

// require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/assets/php/table-name.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/assets/php/instructors.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/assets/php/category.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/assets/php/sub-category.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/assets/php/instructors-profile.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/assets/php/video-list.php';
$all_table = get_all_table();
$all_table = $all_table  !== false ? $all_table : [];

?>

<!DOCTYPE html>
<html class="loading" lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
  <!-- <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard"> -->
  <!-- <meta name="author" content="ThemeSelect"> -->
  <title>FG | Add Data</title>
  <link rel="apple-touch-icon" href="theme-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="theme-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN CHAMELEON  CSS-->
  <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
  <!-- END CHAMELEON  CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="theme-assets/css/core/colors/palette-gradient.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <!-- END Custom CSS-->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

  <!-- fixed-top-->
  <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
    <div class="navbar-wrapper">
      <div class="navbar-container content">
        <div class="collapse navbar-collapse show" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
            <li class="nav-item dropdown navbar-search"><a class="nav-link dropdown-toggle hide" data-toggle="dropdown" href="#"><i class="ficon ft-search"></i></a>
              <ul class="dropdown-menu">
                <li class="arrow_box">
                  <form>
                    <div class="input-group search-box">
                      <div class="position-relative has-icon-right full-width">
                        <input class="form-control" id="search" type="text" placeholder="Search here...">
                        <div class="form-control-position navbar-search-close"><i class="ft-x"> </i></div>
                      </div>
                    </div>
                  </form>
                </li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav float-right">
            <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language"></span></a>
              <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                <div class="arrow_box"><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-ru"></i> Russian</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-es"></i> Spanish</a></div>
              </div>
            </li>
          </ul>
          <ul class="nav navbar-nav float-right">
            <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail"> </i></a>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="arrow_box_right"><a class="dropdown-item" href="#"><i class="ft-book"></i> Read Mail</a><a class="dropdown-item" href="#"><i class="ft-bookmark"></i> Read Later</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Mark all Read </a></div>
              </div>
            </li>
            <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"> <span class="avatar avatar-online"><img src="theme-assets/images/portrait/small/arif.jpg" alt="avatar"><i></i></span></a>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="theme-assets/images/portrait/small/arif.jpg" alt="avatar"><span class="user-name text-bold-700 ml-1">Sn Arif</span></span></a>
                  <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a><a class="dropdown-item" href="#"><i class="ft-mail"></i> My Inbox</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a><a class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a>
                  <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="ft-power"></i> Logout</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- ////////////////////////////////////////////////////////////////////////////-->


  <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="theme-assets/images/backgrounds/02.jpg">
    <div class="navbar-header">
      <ul class="nav navbar-nav flex-row">
        <li class="nav-item mr-auto"><a class="navbar-brand" href="index.php"><img class="brand-logo" alt="Chameleon admin logo" src="theme-assets/images/logo/logo.png" />
            <h3 class="brand-text">FG</h3>
          </a></li>
        <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
      </ul>
    </div>
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" nav-item"><a href="index.php"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
        </li>
        <li class="active"><a href="add-data.php"><i class="la la-plus-circle"></i><span class="menu-title" data-i18n="">Add Data</span></a>
        </li>
      </ul>
    </div>
    <div class="navigation-background"></div>
  </div>

  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
        <div class="content-header-left col-md-4 col-12 mb-2">
          <h3 class="content-header-title">Add Videos Data</h3>
        </div>
        <div class="content-header-right col-md-8 col-12">
          <div class="breadcrumbs-top float-md-right">
            <div class="breadcrumb-wrapper mr-1">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item active">Add Data</li>
              </ol>
            </div>
          </div>
        </div>
      </div>

      <div class="content-body">
        <section class="basic-inputs">
          <div class="row match-height">
            <div class="col-xl-4 col-lg-6 col-md-12">
              <div class="card">
                <div class="card-block">
                  <div class="card-body">

                    <form action="#" method="POST">
                      <select name="add-data" class="form-control mr-1 mb-1">
                        <option disabled selected>Select Data Table</option>
                        <!-- fetch table data from database -->
                        <?php foreach ($all_table as $table) {
                          if ($table[0] == 'custom_fields') {
                            continue;
                          }
                        ?>
                          <option value="<?php echo "{$table[0]}"; ?>"> <?php echo "{$table[0]}\n"; ?></option>
                        <?php } ?>
                      </select>
                      <button disabled type="submit" class="btn btn-info btn-lg text-center btn-block text-white">Add Data <icon class="la la-angle-double-right text-white"></icon></button>
                    </form>

                  </div>
                </div>
              </div>
            </div>

            <?php

            if (isset($_POST["tablesubmit"]) || 1) {
              $select = $_POST['add-data'];
              // echo ($selectedoption);
            ?>
              <?php
              if ($select == 'category' || true) { ?>
                <div id="category" class="col-xl-6 col-md-12 formselect category">
                  <div class="card">
                    <div class="card-content">
                      <div class="card-body pb-0">
                        <h4 class="card-title">Add Category</h4>
                      </div>
                      <div class="card-body">
                        <form class="form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
                          <div class="form-body">
                            <div class="form-group">
                              <label for="donationinput1" class="sr-only">Title</label>
                              <input type="text" class="form-control" placeholder="Title" name="title">
                            </div>
                            <div class="form-group">
                              <label for="donationinput1" class="sr-only">Select Image</label>
                              <input type="file" class="form-control" name="image">
                            </div>
                          </div>
                          <div class="form-actions">
                            <button name="catgsubmit" type="submit" class="btn btn-outline-primary center">Send Data <icon class="la la-send"></icon></button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

              <?php }
              if ($select == 'sub_category' || true) { ?>
                <div class="col-xl-6 col-md-12 formselect sub_category">
                  <div class="card">
                    <div class="card-content">
                      <div class="card-body pb-0">
                        <h4 class="card-title">Add Sub-Category</h4>
                      </div>
                      <div class="card-body">
                        <form class="form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
                          <div class="form-body">
                            <div class="form-group">
                              <label for="title" class="sr-only">Title</label>
                              <input type="text" class="form-control" placeholder="Title" name="title">
                            </div>
                            <div class="form-group">
                              <label for="image" class="sr-only">Select Image</label>
                              <input type="file" class="form-control" name="image">
                            </div>

                            <select name="parentID" class="form-control mr-1 mb-1">
                              <option selected>Select Parent Id</option>
                              <?php

                              $sql = "SELECT * FROM `category` WHERE 1";
                              $result = $conn->query($sql);
                              while ($row = mysqli_fetch_array($result)) {
                                $id = $mysqli->insert_id; ?>
                                <option value="<?php echo "{$row['id']}"; ?>"><?php echo "{$row['id']}\n" . " " . "{$row['title']}"; ?></option>
                              <?php } ?>
                            </select>

                          </div>
                          <div class="form-actions">
                            <button name="subcatgSubmit" type="submit" class="btn btn-outline-primary center">Send Data <icon class="la la-send"></icon></button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

              <?php }

              if ($select == 'instructors' || 1) { ?>
                <div class="col-xl-6 col-md-12 formselect instructors">
                  <div class="card">
                    <div class="card-content">
                      <div class="card-body pb-0">
                        <h4 class="card-title">Add Instructors</h4>
                      </div>
                      <div class="card-body">
                        <form class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
                          <div class="form-body">
                            <div class="form-group">
                              <label for="name" class="sr-only">Instructor Name</label>
                              <input type="text" class="form-control" placeholder="Instructor Name" name="name">
                            </div>

                            <select name="parentID" class="form-control mr-1 mb-1">

                              <option selected>Select Parent Id</option>

                              <?php

                              $sql = "SELECT * FROM `sub_category` WHERE 1";
                              $result = $conn->query($sql);
                              while ($row = mysqli_fetch_array($result)) {
                                $id = $mysqli->insert_id; ?>
                                <option value="<?php echo "{$row['id']}"; ?>"><?php echo "{$row['id']}\n" . " " . "{$row['title']}"; ?></option>
                              <?php } ?>


                            </select>
                            <div class="form-group">
                              <label for="donationinput1" class="sr-only">Select Image</label>
                              <input type="file" name="image" class="form-control">
                            </div>
                          </div>
                          <div class="form-actions">
                            <button name="insSubmit" type="submit" class="btn btn-outline-primary center">Send Data <icon class="la la-send"></icon></button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              <?php }

              if ($select == 'instructor_profile' || 1) { ?>
                <div class="col-xl-6 col-md-12 formselect instructor_profile">
                  <div class="card">
                    <div class="card-content">
                      <div class="card-body pb-0">
                        <h4 class="card-title">Add Instructor Profile</h4>
                      </div>
                      <div class="card-body">
                        <form class="form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
                          <div class="form-body">
                            <div class="form-group">
                              <label for="iname" class="sr-only">Instructor Name</label>
                              <input type="text" name="iname" class="form-control" placeholder="Instructor Name">
                            </div>
                            <div class="form-group">
                              <label for="instructorLink" class="sr-only">Instructor Link</label>
                              <input type="link" class="form-control" placeholder="Instructor Link" name="ytlink">
                            </div>
                            <select class="form-control mr-1 mb-1" name="parentID">
                              <option selected>Select Parent Id</option>

                              <?php

                              $sql = "SELECT * FROM `video_list` WHERE 1";
                              $result = $conn->query($sql);
                              while ($row = mysqli_fetch_array($result)) {
                                $id = $mysqli->insert_id; ?>
                                <option value="<?php echo "{$row['id']}"; ?>"><?php echo "{$row['id']}\n" . " " . "{$row['title']}"; ?></option>
                              <?php } ?>

                            </select>
                            <div class="form-group">
                              <label for="image" class="sr-only">Select Image</label>
                              <input type="file" name="image" class="form-control">
                            </div>
                          </div>
                          <div class="form-actions">
                            <button name="profileSubmit" type="submit" class="btn btn-outline-primary center">Send Data <icon class="la la-send"></icon></button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              <?php }


              if ($select == 'video_list' || 1) { ?>
                <div class="col-xl-6 col-md-12 formselect video_list">
                  <div class="card">
                    <div class="card-content">
                      <div class="card-body pb-0">
                        <h4 class="card-title">Add Video List</h4>
                      </div>
                      <div class="card-body">
                        <form class="add-data.php" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
                          <div class="form-body">
                            <div class="form-group">
                              <label for="donationinput1" class="sr-only">Title</label>
                              <input type="text" id="donationinput1" class="form-control" placeholder="Title" name="title">
                            </div>
                            <select class="form-control mr-1 mb-1" name="parentID">
                              <option selected>Select Parent Id</option>
                              <?php

                              $sql = "SELECT * FROM `instructors` WHERE 1";
                              $result = $conn->query($sql);
                              while ($row = mysqli_fetch_array($result)) {
                                $id = $mysqli->insert_id; ?>
                                <option value="<?php echo "{$row['id']}"; ?>"><?php echo "{$row['id']}\n" . " " . "{$row['name']}"; ?></option>
                              <?php } ?>

                            </select>
                            <div class="form-group">
                              <label for="donationinput1" class="sr-only">Select Image</label>
                              <input type="file" name="image" class="form-control">
                            </div>
                          </div>
                          <div class="form-actions">
                            <button name="videoList" type="submit" class="btn btn-outline-primary center">Send Data <icon class="la la-send"></icon></button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              <?php }
              if ($select == 'videos' || 1) { ?>
                <div class="col-xl-6 col-md-12 formselect videos">
                  <div class="card">
                    <div class="card-content">
                      <div class="card-body pb-0">
                        <h4 class="card-title">Add videos</h4>
                      </div>
                      <div class="card-body">
                        <form class="form" enctype="multipart/form-data">
                          <div class="form-body">
                            <div class="form-group">
                              <label for="title" class="sr-only">Title</label>
                              <input type="text" name="title" class="form-control" placeholder="Title">
                            </div>
                            <select class="form-control mr-1 mb-1" id="basicSelect">
                              <option selected>Select Parent Id</option>
                              <?php

                              $sql = "SELECT * FROM `instructors` WHERE 1";
                              $result = $conn->query($sql);
                              while ($row = mysqli_fetch_array($result)) {
                                $id = $mysqli->insert_id; ?>
                                <option value="<?php echo "{$row['id']}"; ?>"><?php echo "{$row['id']}\n" . " " . "{$row['name']}"; ?></option>
                              <?php } ?>
                            </select>
                            <div class="form-group">
                              <label for="donationinput1" class="sr-only">Select Image</label>
                              <input type="file" name="image" class="form-control">
                            </div>
                          </div>
                          <div class="form-actions">
                            <button type="submit" class="btn btn-outline-primary center">Send Data <icon class="la la-send"></icon></button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

            <?php }
            }
            ?>

          </div>
        </section>

      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->


  <footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2023 &copy; Copyright <span class="text-bold-800 grey darken-2 brand-text" target="_blank">| Freelancing Guideline</span></span>
    </div>
  </footer>


  <script type="text/javascript">
    jQuery('.formselect').hide();
    jQuery('[name="add-data"]').on('change', function() {
      let selectedOption = jQuery('[name="add-data"]').val();

      jQuery('.formselect').hide();

      jQuery('.' + selectedOption).show();

    });
  </script>

  <!-- BEGIN VENDOR JS-->
  <script src="theme-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN CHAMELEON  JS-->
  <script src="theme-assets/js/core/app-menu-lite.js" type="text/javascript"></script>
  <script src="theme-assets/js/core/app-lite.js" type="text/javascript"></script>
  <!-- END CHAMELEON  JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="theme-assets/vendors/js/forms/tags/form-field.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
</body>

</html>
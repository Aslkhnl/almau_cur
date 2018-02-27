<?php require_once('../../private/initialize.php'); ?>

<?php $page_title = 'ALMAU Area'; ?>
<?php include(SHARED_PATH .'/staff_header.php'); ?>

    <div class="tab" >
      <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/staff.css'); ?>" />
    <button class="tablinks" onclick="openCity(event, 'Home')">Home</button>
    <button class="tablinks" onclick="openCity(event, 'About us')">About us</button>
      <input type="text" placeholder="Search..">
    </div>
    <!-- Tab content -->
    <div id="Home" class="tabcontent">
      <h3> Welcome to your Student account! </h3>
      <p>This is your student account. </p>
    </div>

    <div id="About us" class="tabcontent">
      <h3>About us</h3>
      <p> Aya Seiilkhan and Samal and Asem</p>
    </div>





    <!-- Side navigation -->
    <div class="sidenav">
      <h2>Services</h2>
      <ul>
  <li><a href="<?php echo url_for('/staff/subjects/index.php'); ?> ">Curriculum</a>
  <li><a href="<?php echo url_for('/staff/subjects/index.php'); ?> ">Search for a course</a>
  <li><a href="<?php echo url_for('/staff/subjects/index.php'); ?> ">Register for a course</a>
  <li><a href="<?php echo url_for('/staff/subjects/index.php'); ?> ">Drop course</a>
          </li>
      </ul>
    </div>

    <!-- Page content -->
    <div id="main">

    </div>
<div id="content">
    <div id="main-menu">

    </div>
</div>
    <section id="news">
    <h1>This is my page</h1>
    </section>

<script>
function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>


<?php include(SHARED_PATH .'/staff_footer.php'); ?>

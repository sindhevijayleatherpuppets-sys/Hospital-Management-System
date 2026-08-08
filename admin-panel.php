<?php 
require_once(__DIR__ . '/db.php');
include('func.php');  
include('newfunc.php');

$pid = isset($_SESSION['pid']) && !empty($_SESSION['pid']) ? $_SESSION['pid'] : 1;
$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
$fname = isset($_SESSION['fname']) ? $_SESSION['fname'] : '';
$gender = isset($_SESSION['gender']) ? $_SESSION['gender'] : '';
$lname = isset($_SESSION['lname']) ? $_SESSION['lname'] : '';
$contact = isset($_SESSION['contact']) ? $_SESSION['contact'] : '';

$alert_msg = '';
$alert_type = 'info';

if(isset($_POST['app-submit']))
{
  $pid = isset($_SESSION['pid']) && !empty($_SESSION['pid']) ? $_SESSION['pid'] : 1;
  $username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
  $email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
  $fname = isset($_SESSION['fname']) ? $_SESSION['fname'] : '';
  $lname = isset($_SESSION['lname']) ? $_SESSION['lname'] : '';
  $gender = isset($_SESSION['gender']) ? $_SESSION['gender'] : '';
  $contact = isset($_SESSION['contact']) ? $_SESSION['contact'] : '';
  $doctor=$_POST['doctor'];
  $docFees=$_POST['docFees'];

  $appdate=$_POST['appdate'];
  $apptime=$_POST['apptime'];
  $cur_date = date("Y-m-d");
  date_default_timezone_set('Asia/Kolkata');
  $cur_time = date("H:i:s");
  $apptime1 = strtotime($apptime);
  $appdate1 = strtotime($appdate);
	
  if(date("Y-m-d",$appdate1)>=$cur_date){
    if((date("Y-m-d",$appdate1)==$cur_date and date("H:i:s",$apptime1)>$cur_time) or date("Y-m-d",$appdate1)>$cur_date) {
      $check_query = mysqli_query($con,"select apptime from appointmenttb where doctor='$doctor' and appdate='$appdate' and apptime='$apptime'");

        if(mysqli_num_rows($check_query)==0){
          $query=mysqli_query($con,"insert into appointmenttb(pid,fname,lname,gender,email,contact,doctor,docFees,appdate,apptime,userStatus,doctorStatus) values('$pid','$fname','$lname','$gender','$email','$contact','$doctor','$docFees','$appdate','$apptime','1','1')");

          if($query)
          {
            $alert_msg = "Your appointment was successfully booked!";
            $alert_type = "success";
          }
          else{
            $alert_msg = "Unable to process your request. Please try again!";
            $alert_type = "danger";
          }
      }
      else{
        $alert_msg = "We are sorry to inform that the doctor is not available at this time or date. Please choose a different time or date!";
        $alert_type = "warning";
      }
    }
    else{
      $alert_msg = "Please select a time or date in the future!";
      $alert_type = "warning";
    }
  }
  else{
    $alert_msg = "Please select a time or date in the future!";
    $alert_type = "warning";
  }
}

if(isset($_GET['cancel']))
{
  $query=mysqli_query($con,"update appointmenttb set userStatus='0' where ID = '".$_GET['ID']."'");
  if($query)
  {
    $alert_msg = "Your appointment was successfully cancelled!";
    $alert_type = "info";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Patient Dashboard - Dhanvanthari Ayurveda Hospital</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
      body {
        font-family: 'IBM Plex Sans', sans-serif;
        background-color: #f5f3f0;
      }
      .bg-primary {
        background: linear-gradient(135deg, #1a1464, #00a3d9) !important;
      }
      .list-group-item {
        transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        border-left: 4px solid transparent;
        font-weight: 500;
        color: #64748b;
        border-radius: 0 !important;
        padding: 14px 20px;
        font-size: 0.9rem;
      }
      .list-group-item:hover {
        background-color: rgba(57, 49, 175, 0.04);
        color: #3931af;
        border-left-color: rgba(57, 49, 175, 0.3);
      }
      .list-group-item.active {
        z-index: 2;
        color: #fff !important;
        background: linear-gradient(135deg, #3931af, #5b4fd4) !important;
        border-color: transparent !important;
        border-left: 5px solid #00c6ff !important;
        font-weight: 700;
        box-shadow: 0 4px 15px rgba(57, 49, 175, 0.25);
      }
      .list-group-item i {
        width: 20px;
        text-align: center;
        margin-right: 6px;
      }
      .card {
        transition: transform 0.35s ease, box-shadow 0.35s ease;
        border: 1px solid rgba(0,0,0,0.04) !important;
        background: #faf9f7;
      }
      .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 16px 40px rgba(0,0,0,0.1) !important;
      }
      .text-primary {
        color: #3931af !important;
      }
      .btn-primary {
        background: linear-gradient(135deg, #3931af, #5b4fd4);
        border: none;
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        box-shadow: 0 4px 15px rgba(57, 49, 175, 0.25);
      }
      .btn-primary:hover {
        background: linear-gradient(135deg, #2d27a0, #4a3fc4);
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(57, 49, 175, 0.35);
      }
      .table th {
        font-weight: 600;
        color: #64748b;
        font-size: 0.82rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        border-bottom-width: 1px;
      }
      .table td {
        vertical-align: middle;
        color: #334155;
        font-size: 0.9rem;
      }
      .badge {
        padding: 5px 12px;
        font-weight: 600;
        letter-spacing: 0.3px;
      }
      button:hover { cursor: pointer; }
      #inputbtn:hover { cursor: pointer; }
      @media (prefers-reduced-motion: reduce) {
        *, *::before, *::after {
          animation-duration: 0.01ms !important;
          transition-duration: 0.01ms !important;
        }
      }
    </style>
  </head>
  <body style="padding-top:80px;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" style="padding: 12px 20px;">
      <a class="navbar-brand" href="#" style="display: flex; align-items: center; gap: 12px;">
        <img src="images/logo.png" alt="Logo" style="height: 45px; width: auto; object-fit: contain;">
        <span style="font-weight: 700; font-size: 1.25rem;">Dhanvanthari Ayurveda Hospital</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
          </li>
        </ul>
      </div>
    </nav>

    <?php if(!empty($alert_msg)): ?>
    <div class="container mt-3">
      <div class="alert alert-<?php echo $alert_type; ?> alert-dismissible fade show shadow-sm" role="alert" style="border-radius: 12px; font-weight: 500;">
        <i class="fa fa-info-circle mr-2"></i> <?php echo $alert_msg; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
    <?php endif; ?>

    <div class="container-fluid" style="margin-top:20px;">
      <div class="row mb-3">
        <div class="col-md-12">
          <div class="card border-0 shadow-sm" style="border-radius: 14px; background: white; border-left: 6px solid #3931af;">
            <div class="card-body d-flex align-items-center justify-content-between flex-wrap p-3">
              <div>
                <h4 style="margin: 0; font-weight: 700; color: #1e3d59;">Welcome, <?php echo !empty($fname) ? $fname.' '.$lname : 'Patient'; ?></h4>
                <p style="margin: 0; color: #666; font-size: 0.95rem;">Manage your appointments, consultations, and prescriptions with Dr. Krishnamoorthy BS.</p>
              </div>
              <span class="badge badge-primary px-3 py-2" style="font-size: 0.95rem; background: #3931af;">Patient Portal</span>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <!-- SIDEBAR NAVIGATION -->
        <div class="col-md-3 col-lg-2 mb-3">
          <div class="list-group shadow-sm" id="list-tab" role="tablist" style="border-radius: 12px; overflow: hidden;">
            <a class="list-group-item list-group-item-action active" id="list-dash-list" data-toggle="list" href="#list-dash" role="tab" aria-controls="dash"><i class="fa fa-dashboard"></i> Dashboard</a>
            <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home"><i class="fa fa-calendar-plus-o"></i> Book Appointment</a>
            <a class="list-group-item list-group-item-action" id="list-pat-list" data-toggle="list" href="#app-hist" role="tab" aria-controls="history"><i class="fa fa-list"></i> Appointment History</a>
            <a class="list-group-item list-group-item-action" id="list-pres-list" data-toggle="list" href="#list-pres" role="tab" aria-controls="prescriptions"><i class="fa fa-file-text-o"></i> Prescriptions</a>
          </div>
        </div>

        <!-- MAIN CONTENT PANELS -->
        <div class="col-md-9 col-lg-10">
          <div class="tab-content" id="nav-tabContent">

            <!-- PAGE 1: DASHBOARD OVERVIEW -->
            <div class="tab-pane fade show active" id="list-dash" role="tabpanel" aria-labelledby="list-dash-list">
              <div class="row">
                <div class="col-md-4 mb-4">
                  <div class="card border-0 shadow-sm text-center p-4" style="border-radius: 14px; background: white;">
                    <span class="fa-stack fa-2x mb-2" style="margin: 0 auto;">
                      <i class="fa fa-square fa-stack-2x text-primary"></i>
                      <i class="fa fa-calendar-plus-o fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="font-weight-bold" style="color: #1e3d59;">Book Appointment</h4>
                    <p class="text-muted">Schedule a new consultation with Chief Doctor Dr. Krishnamoorthy BS.</p>
                    <button class="btn btn-primary font-weight-bold px-4" style="border-radius: 20px;" onclick="openTab('#list-home-list')">Book Now</button>
                  </div>
                </div>

                <div class="col-md-4 mb-4">
                  <div class="card border-0 shadow-sm text-center p-4" style="border-radius: 14px; background: white;">
                    <span class="fa-stack fa-2x mb-2" style="margin: 0 auto;">
                      <i class="fa fa-square fa-stack-2x text-primary"></i>
                      <i class="fa fa-list fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="font-weight-bold" style="color: #1e3d59;">Appointment History</h4>
                    <p class="text-muted">View past and current appointment bookings, timings, and status.</p>
                    <button class="btn btn-info font-weight-bold px-4" style="border-radius: 20px;" onclick="openTab('#list-pat-list')">View History</button>
                  </div>
                </div>

                <div class="col-md-4 mb-4">
                  <div class="card border-0 shadow-sm text-center p-4" style="border-radius: 14px; background: white;">
                    <span class="fa-stack fa-2x mb-2" style="margin: 0 auto;">
                      <i class="fa fa-square fa-stack-2x text-primary"></i>
                      <i class="fa fa-file-text-o fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="font-weight-bold" style="color: #1e3d59;">My Prescriptions</h4>
                    <p class="text-muted">Access doctor prescriptions, treatment instructions, and dosage advice.</p>
                    <button class="btn btn-success font-weight-bold px-4" style="border-radius: 20px;" onclick="openTab('#list-pres-list')">View Prescriptions</button>
                  </div>
                </div>
              </div>
            </div>

            <!-- PAGE 2: BOOK APPOINTMENT FORM -->
            <div class="tab-pane fade" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
              <div class="card border-0 shadow-sm" style="border-radius: 14px; background: white; padding: 25px;">
                <h4 style="color: #1e3d59; font-weight: 700;" class="mb-3"><i class="fa fa-calendar-plus-o text-primary"></i> Book an Appointment</h4>
                <form class="form-group" method="post" action="admin-panel.php">
                  <div class="row">
                    <div class="col-md-4 mb-3">
                      <label for="spec" class="font-weight-bold">Specialization:</label>
                    </div>
                    <div class="col-md-8 mb-3">
                      <select name="spec" class="form-control" id="spec" required>
                        <option value="" disabled selected>Select Specialization</option>
                        <?php display_specs(); ?>
                      </select>
                    </div>

                    <div class="col-md-4 mb-3">
                      <label for="doctor" class="font-weight-bold">Select Doctor:</label>
                    </div>
                    <div class="col-md-8 mb-3">
                      <select name="doctor" class="form-control" id="doctor" required="required">
                        <option value="" disabled selected>Select Doctor</option>
                        <?php display_docs(); ?>
                      </select>
                    </div>

                    <div class="col-md-4 mb-3">
                      <label for="docFees" class="font-weight-bold">Consultancy Fees (₹):</label>
                    </div>
                    <div class="col-md-8 mb-3">
                      <input class="form-control" type="text" name="docFees" id="docFees" readonly="readonly" value="500"/>
                    </div>

                    <div class="col-md-4 mb-3">
                      <label for="appdate" class="font-weight-bold">Appointment Date:</label>
                    </div>
                    <div class="col-md-8 mb-3">
                      <input type="date" class="form-control datepicker" name="appdate" required>
                    </div>

                    <div class="col-md-4 mb-3">
                      <label for="apptime" class="font-weight-bold">Appointment Time:</label>
                    </div>
                    <div class="col-md-8 mb-3">
                      <select name="apptime" class="form-control" id="apptime" required="required">
                        <option value="" disabled selected>Select Time Slot</option>
                        <option value="08:00:00">8:00 AM</option>
                        <option value="10:00:00">10:00 AM</option>
                        <option value="12:00:00">12:00 PM</option>
                        <option value="14:00:00">2:00 PM</option>
                        <option value="16:00:00">4:00 PM</option>
                        <option value="18:00:00">6:00 PM</option>
                      </select>
                    </div>

                    <div class="col-md-12 d-flex gap-2 flex-wrap mt-3" style="gap: 12px;">
                      <input type="submit" name="app-submit" value="Book Appointment" class="btn btn-primary font-weight-bold px-4 py-2" id="inputbtn" style="border-radius: 20px;">
                      <button type="button" class="btn btn-success font-weight-bold px-4 py-2" style="border-radius: 20px; background: #28a745;" onclick="goToPayment();"><i class="fa fa-qrcode"></i> Pay via QR Code & Confirm</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <!-- PAGE 3: APPOINTMENT HISTORY -->
            <div class="tab-pane fade" id="app-hist" role="tabpanel" aria-labelledby="list-pat-list">
              <div class="card border-0 shadow-sm" style="border-radius: 14px; background: white; padding: 25px;">
                <h4 style="color: #1e3d59; font-weight: 700;" class="mb-3"><i class="fa fa-list text-info"></i> My Appointment History</h4>
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">Doctor Name</th>
                        <th scope="col">Fee</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $query = "select ID,doctor,docFees,appdate,apptime,userStatus,doctorStatus from appointmenttb where pid='$pid' OR (fname='$fname' AND lname='$lname' AND fname!='') OR (email='$email' AND email!='');";
                        $result = mysqli_query($con,$query);
                        if($result && mysqli_num_rows($result) > 0){
                          while ($row = mysqli_fetch_array($result)){
                      ?>
                          <tr>
                            <td><strong><?php echo $row['doctor'];?></strong></td>
                            <td>₹<?php echo $row['docFees'];?></td>
                            <td><?php echo $row['appdate'];?></td>
                            <td><?php echo $row['apptime'];?></td>
                            <td>
                              <?php 
                                if(($row['userStatus']==1) && ($row['doctorStatus']==1)) {
                                  echo '<span class="badge badge-success">Active</span>';
                                } elseif(($row['userStatus']==0) && ($row['doctorStatus']==1)) {
                                  echo '<span class="badge badge-warning">Cancelled by You</span>';
                                } elseif(($row['userStatus']==1) && ($row['doctorStatus']==0)) {
                                  echo '<span class="badge badge-danger">Cancelled by Doctor</span>';
                                } else {
                                  echo '<span class="badge badge-secondary">Cancelled</span>';
                                }
                              ?>
                            </td>
                            <td>
                              <?php if(($row['userStatus']==1) && ($row['doctorStatus']==1)) { ?>
                                <a href="admin-panel.php?ID=<?php echo $row['ID']?>&cancel=update" 
                                   onClick="return confirm('Are you sure you want to cancel this appointment ?')"
                                   class="btn btn-outline-danger btn-sm font-weight-bold">Cancel</a>
                              <?php } else { echo '<span class="text-muted">-</span>'; } ?>
                            </td>
                          </tr>
                      <?php 
                          }
                        } else {
                          echo '<tr><td colspan="6" class="text-center text-muted p-4">No appointment history found.</td></tr>';
                        }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <!-- PAGE 4: PRESCRIPTIONS LIST -->
            <div class="tab-pane fade" id="list-pres" role="tabpanel" aria-labelledby="list-pres-list">
              <div class="card border-0 shadow-sm" style="border-radius: 14px; background: white; padding: 25px;">
                <h4 style="color: #1e3d59; font-weight: 700;" class="mb-3"><i class="fa fa-file-text-o text-success"></i> My Prescriptions</h4>
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">Doctor Name</th>
                        <th scope="col">Appt ID</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Disease / Diagnosis</th>
                        <th scope="col">Allergies</th>
                        <th scope="col">Prescription Details</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $query = "select doctor,ID,appdate,apptime,disease,allergy,prescription from prestb where pid='$pid' OR (fname='$fname' AND lname='$lname' AND fname!='');";
                        $result = mysqli_query($con,$query);
                        if($result && mysqli_num_rows($result) > 0){
                          while ($row = mysqli_fetch_array($result)){
                      ?>
                          <tr>
                            <td><strong><?php echo $row['doctor'];?></strong></td>
                            <td><?php echo $row['ID'];?></td>
                            <td><?php echo $row['appdate'];?></td>
                            <td><?php echo $row['apptime'];?></td>
                            <td><span class="badge badge-info"><?php echo $row['disease'];?></span></td>
                            <td><?php echo $row['allergy'];?></td>
                            <td><?php echo $row['prescription'];?></td>
                          </tr>
                      <?php 
                          }
                        } else {
                          echo '<tr><td colspan="7" class="text-center text-muted p-4">No prescriptions issued yet.</td></tr>';
                        }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- JavaScript & jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
      function showTabDirect(hash) {
        if (!hash) hash = window.location.hash;
        if (!hash) return;
        
        var cleanHash = hash.toLowerCase().replace(/\/$/, "");
        
        var aliasMap = {
          "#list-dash": "list-dash",
          "#dash": "list-dash",
          "#dashboard": "list-dash",
          "#list-home": "list-home",
          "#home": "list-home",
          "#book": "list-home",
          "#app-hist": "app-hist",
          "#history": "app-hist",
          "#appointments": "app-hist",
          "#list-pres": "list-pres",
          "#prescriptions": "list-pres",
          "#pres": "list-pres"
        };

        var targetPaneId = aliasMap[cleanHash] || cleanHash.replace(/^#/, "");
        var targetPane = $('#' + targetPaneId);

        if (targetPane.length > 0) {
          $('.tab-content .tab-pane').removeClass('show active');
          $('#list-tab .list-group-item').removeClass('active');

          targetPane.addClass('show active');
          
          var targetLink = $('#list-tab a[href="#' + targetPaneId + '"]');
          if (targetLink.length === 0) {
            if (targetPaneId === 'list-dash') targetLink = $('#list-dash-list');
            if (targetPaneId === 'list-home') targetLink = $('#list-home-list');
            if (targetPaneId === 'app-hist') targetLink = $('#list-pat-list');
            if (targetPaneId === 'list-pres') targetLink = $('#list-pres-list');
          }
          targetLink.addClass('active');
        }
      }

      function openTab(selector) {
        var href = $(selector).attr('href');
        showTabDirect(href);
      }

      $(document).ready(function() {
        if (window.location.hash) {
          showTabDirect(window.location.hash);
        }

        $('#list-tab a').on('click', function(e) {
          e.preventDefault();
          var href = $(this).attr('href');
          showTabDirect(href);
          if (history.pushState) {
            history.pushState(null, null, href);
          } else {
            window.location.hash = href;
          }
        });
      });

      $(window).on('hashchange popstate', function() {
        if (window.location.hash) {
          showTabDirect(window.location.hash);
        }
      });

      document.getElementById('doctor').onchange = function updateFees(e) {
        var selection = document.querySelector(`[value="${this.value}"]`);
        if (selection && selection.getAttribute('data-value')) {
          document.getElementById('docFees').value = selection.getAttribute('data-value');
        }
      };

      document.getElementById('spec').onchange = function foo() {
        let spec = this.value;   
        let docs = [...document.getElementById('doctor').options];
        docs.forEach((el, ind, arr)=>{
          arr[ind].style.display = "";
          if (el.getAttribute("data-spec") && el.getAttribute("data-spec") != spec ) {
            arr[ind].style.display = "none";
          }
        });
      };

      function goToPayment() {
        var doc = document.getElementById('doctor').value;
        var fees = document.getElementById('docFees').value || '500';
        var date = document.querySelector('input[name="appdate"]').value;
        var time = document.getElementById('apptime').value;
        if (!doc) {
          alert('Please select a doctor first.');
          return;
        }
        window.location.href = 'payment.php?doctor=' + encodeURIComponent(doc) + '&docFees=' + encodeURIComponent(fees) + '&appdate=' + encodeURIComponent(date) + '&apptime=' + encodeURIComponent(time);
      }
    </script>
  </body>
</html>

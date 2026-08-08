<?php 
require_once(__DIR__ . '/db.php');
include('func1.php');
$doctor = isset($_SESSION['dname']) ? $_SESSION['dname'] : 'Dr. Krishnamoorthy BS';

if(isset($_GET['cancel']))
{
  $query=mysqli_query($con,"update appointmenttb set doctorStatus='0' where ID = '".$_GET['ID']."'");
  if($query)
  {
    echo "<script>alert('Appointment successfully cancelled');</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Doctor Panel - Dhanvanthari Ayurveda Hospital</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
      body {
        font-family: 'IBM Plex Sans', sans-serif;
        background-color: #f4f6f9;
      }
      .bg-primary {
        background: -webkit-linear-gradient(left, #3931af, #00c6ff) !important;
      }
      .list-group-item.active {
        z-index: 2;
        color: #fff;
        background-color: #3931af;
        border-color: #3931af;
      }
      .text-primary {
        color: #3931af !important;
      }
      .list-group-item {
        transition: all 0.25s ease;
        border-left: 4px solid transparent;
        font-weight: 500;
        color: #495057;
      }
      .list-group-item:hover {
        background-color: #eef0f8;
        color: #3931af;
      }
      .list-group-item.active {
        z-index: 2;
        color: #fff !important;
        background-color: #3931af !important;
        border-color: #3931af !important;
        border-left: 5px solid #00c6ff !important;
        font-weight: 700;
      }
      .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }
      .card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 30px rgba(0,0,0,0.12) !important;
      }
      .btn-outline-light:hover {
        color: #25bef7;
        background-color: #f8f9fa;
        border-color: #f8f9fa;
        transform: translateY(-1px);
      }
      button:hover { cursor: pointer; }
      #inputbtn:hover { cursor: pointer; }
    </style>
  </head>
  <body style="padding-top:80px;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" style="padding: 10px 20px;">
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
            <a class="nav-link" href="logout1.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" method="post" action="search.php">
          <input class="form-control mr-sm-2" type="text" placeholder="Enter contact number" aria-label="Search" name="contact">
          <input type="submit" class="btn btn-outline-light" id="inputbtn" name="search_submit" value="Search">
        </form>
      </div>
    </nav>

    <div class="container-fluid" style="margin-top:20px;">
      <div class="row mb-3">
        <div class="col-md-12">
          <div class="card border-0 shadow-sm" style="border-radius: 14px; background: white; border-left: 6px solid #28a745;">
            <div class="card-body d-flex align-items-center justify-content-between flex-wrap p-3">
              <div class="d-flex align-items-center gap-3">
                <img src="images/doctor-image.png" alt="Doctor" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; border: 3px solid #28a745; background: #fff; padding: 2px; box-shadow: 0 4px 10px rgba(0,0,0,0.15);">
                <div>
                  <h4 style="margin: 0; font-weight: 700; color: #1e3d59;">Welcome, Dr. Krishnamoorthy BS, B.A.M.S.</h4>
                  <p style="margin: 0; color: #666; font-size: 0.95rem;">Chief Ayurvedic Physician & Panchakarma Specialist | 16+ Years Experience</p>
                </div>
              </div>
              <span class="badge badge-success px-3 py-2" style="font-size: 0.95rem;">Chief Ayurvedic Physician</span>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2 mb-3">
          <div class="list-group shadow-sm" id="list-tab" role="tablist" style="border-radius: 10px; overflow: hidden;">
            <a class="list-group-item list-group-item-action active" href="#list-dash" role="tab" aria-controls="home" data-toggle="list"><i class="fa fa-dashboard"></i> Dashboard</a>
            <a class="list-group-item list-group-item-action" href="#list-app" id="list-app-list" role="tab" data-toggle="list" aria-controls="home"><i class="fa fa-calendar"></i> Appointments</a>
            <a class="list-group-item list-group-item-action" href="#list-pres" id="list-pres-list" role="tab" data-toggle="list" aria-controls="home"><i class="fa fa-file-text-o"></i> Prescription List</a>
          </div>
        </div>

        <div class="col-md-10">
          <div class="tab-content" id="nav-tabContent">
            <!-- DASHBOARD TAB -->
            <div class="tab-pane fade show active" id="list-dash" role="tabpanel" aria-labelledby="list-dash-list">
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="card border-0 shadow-sm text-center p-4" style="border-radius: 12px; background: white;">
                    <span class="fa-stack fa-2x mb-2" style="margin: 0 auto;">
                      <i class="fa fa-square fa-stack-2x text-primary"></i>
                      <i class="fa fa-list fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="font-weight-bold" style="color: #1e3d59;">View Patient Appointments</h4>
                    <p class="text-muted">Check all scheduled patient appointments, manage bookings, and issue prescriptions.</p>
                    <a href="#list-app" class="btn btn-primary font-weight-bold px-4" style="border-radius: 20px;" onclick="document.querySelector('#list-app-list').click();">Open Appointment List</a>
                  </div>
                </div>

                <div class="col-md-6 mb-4">
                  <div class="card border-0 shadow-sm text-center p-4" style="border-radius: 12px; background: white;">
                    <span class="fa-stack fa-2x mb-2" style="margin: 0 auto;">
                      <i class="fa fa-square fa-stack-2x text-primary"></i>
                      <i class="fa fa-file-text fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="font-weight-bold" style="color: #1e3d59;">Issued Prescriptions</h4>
                    <p class="text-muted">View past medical prescriptions, treatment history, and patient notes.</p>
                    <a href="#list-pres" class="btn btn-success font-weight-bold px-4" style="border-radius: 20px;" onclick="document.querySelector('#list-pres-list').click();">Open Prescription List</a>
                  </div>
                </div>
              </div>
            </div>

            <!-- APPOINTMENTS TAB -->
            <div class="tab-pane fade" id="list-app" role="tabpanel" aria-labelledby="list-home-list">
              <div class="card border-0 shadow-sm" style="border-radius: 12px; background: white; padding: 20px;">
                <h4 style="color: #1e3d59; font-weight: 700;" class="mb-3"><i class="fa fa-calendar text-primary"></i> Patient Appointments</h4>
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">PID</th>
                        <th scope="col">Appt ID</th>
                        <th scope="col">Patient Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Status</th>
                        <th scope="col">Cancel</th>
                        <th scope="col">Prescribe</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $dname = $_SESSION['dname'];
                        $query = "select pid,ID,fname,lname,gender,email,contact,appdate,apptime,userStatus,doctorStatus from appointmenttb where doctor='$dname' OR doctor LIKE '%Krishnamoorthy%' OR doctor LIKE '%$dname%';";
                        $result = mysqli_query($con,$query);
                        if($result && mysqli_num_rows($result) > 0){
                          while ($row = mysqli_fetch_array($result)){
                      ?>
                          <tr>
                            <td><?php echo $row['pid'];?></td>
                            <td><?php echo $row['ID'];?></td>
                            <td><strong><?php echo $row['fname'].' '.$row['lname'];?></strong></td>
                            <td><?php echo $row['gender'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $row['contact'];?></td>
                            <td><?php echo $row['appdate'];?></td>
                            <td><?php echo $row['apptime'];?></td>
                            <td>
                              <?php 
                                if(($row['userStatus']==1) && ($row['doctorStatus']==1)) {
                                  echo '<span class="badge badge-success">Active</span>';
                                } elseif(($row['userStatus']==0) && ($row['doctorStatus']==1)) {
                                  echo '<span class="badge badge-warning">Cancelled by Patient</span>';
                                } elseif(($row['userStatus']==1) && ($row['doctorStatus']==0)) {
                                  echo '<span class="badge badge-danger">Cancelled by You</span>';
                                } else {
                                  echo '<span class="badge badge-secondary">Cancelled</span>';
                                }
                              ?>
                            </td>
                            <td>
                              <?php if(($row['userStatus']==1) && ($row['doctorStatus']==1)) { ?>
                                <a href="doctor-panel.php?ID=<?php echo $row['ID']?>&cancel=update" 
                                   onClick="return confirm('Are you sure you want to cancel this appointment ?')"
                                   class="btn btn-outline-danger btn-sm font-weight-bold">Cancel</a>
                              <?php } else { echo '<span class="text-muted">-</span>'; } ?>
                            </td>
                            <td>
                              <?php if(($row['userStatus']==1) && ($row['doctorStatus']==1)) { ?>
                                <a href="prescribe.php?pid=<?php echo $row['pid']?>&ID=<?php echo $row['ID']?>&fname=<?php echo $row['fname']?>&lname=<?php echo $row['lname']?>&appdate=<?php echo $row['appdate']?>&apptime=<?php echo $row['apptime']?>"
                                   class="btn btn-success btn-sm font-weight-bold"><i class="fa fa-pencil"></i> Prescribe</a>
                              <?php } else { echo '<span class="text-muted">-</span>'; } ?>
                            </td>
                          </tr>
                      <?php 
                          }
                        } else {
                          echo '<tr><td colspan="11" class="text-center text-muted p-4">No appointments scheduled currently.</td></tr>';
                        }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <!-- PRESCRIPTION LIST TAB -->
            <div class="tab-pane fade" id="list-pres" role="tabpanel" aria-labelledby="list-pres-list">
              <div class="card border-0 shadow-sm" style="border-radius: 12px; background: white; padding: 20px;">
                <h4 style="color: #1e3d59; font-weight: 700;" class="mb-3"><i class="fa fa-file-text-o text-success"></i> Issued Prescriptions</h4>
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">PID</th>
                        <th scope="col">Patient Name</th>
                        <th scope="col">Appt ID</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Disease</th>
                        <th scope="col">Allergy</th>
                        <th scope="col">Prescription Details</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $query = "select pid,fname,lname,ID,appdate,apptime,disease,allergy,prescription from prestb where doctor='$doctor' OR doctor LIKE '%Krishnamoorthy%' OR doctor LIKE '%$doctor%';";
                        $result = mysqli_query($con,$query);
                        if($result && mysqli_num_rows($result) > 0){
                          while ($row = mysqli_fetch_array($result)){
                      ?>
                          <tr>
                            <td><?php echo $row['pid'];?></td>
                            <td><strong><?php echo $row['fname'].' '.$row['lname'];?></strong></td>
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
                          echo '<tr><td colspan="8" class="text-center text-muted p-4">No prescriptions issued yet.</td></tr>';
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php
require_once(__DIR__ . '/db.php');
?>
<!DOCTYPE html>

$fname = isset($_SESSION['fname']) ? $_SESSION['fname'] : (isset($_GET['fname']) ? $_GET['fname'] : 'Patient');
$lname = isset($_SESSION['lname']) ? $_SESSION['lname'] : (isset($_GET['lname']) ? $_GET['lname'] : '');
$email = isset($_SESSION['email']) ? $_SESSION['email'] : (isset($_GET['email']) ? $_GET['email'] : '');
$contact = isset($_SESSION['contact']) ? $_SESSION['contact'] : (isset($_GET['contact']) ? $_GET['contact'] : '');
$doctor = isset($_GET['doctor']) ? $_GET['doctor'] : 'Dr. Krishnamoorthy BS';
$docFees = isset($_GET['docFees']) ? $_GET['docFees'] : '500';
$appdate = isset($_GET['appdate']) ? $_GET['appdate'] : date('Y-m-d');
$apptime = isset($_GET['apptime']) ? $_GET['apptime'] : '10:00:00';
$pid = isset($_SESSION['pid']) ? $_SESSION['pid'] : 1;

if(isset($_POST['confirm_payment'])) {
  $doctor = $_POST['doctor'];
  $docFees = $_POST['docFees'];
  $appdate = $_POST['appdate'];
  $apptime = $_POST['apptime'];
  $pay_mode = $_POST['pay_mode'];
  $txn_id = mysqli_real_escape_string($con, $_POST['txn_id']);
  
  $query = mysqli_query($con, "insert into appointmenttb(pid,fname,lname,gender,email,contact,doctor,docFees,appdate,apptime,userStatus,doctorStatus) values('$pid','$fname','$lname','Male','$email','$contact','$doctor','$docFees','$appdate','$apptime','1','1')");
  
  if($query) {
    echo "<script>alert('Payment Received! Your appointment with ".$doctor." on ".$appdate." at ".$apptime." has been successfully booked.'); window.location.href='admin-panel.php';</script>";
  } else {
    echo "<script>alert('Error confirming appointment. Please try again!');</script>";
  }
}
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Payment & QR Code Confirmation - Dhanvanthari Ayurveda Hospital</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'IBM Plex Sans', sans-serif;
            background: -webkit-linear-gradient(left, #3931af, #00c6ff);
            color: #333;
            min-height: 100vh;
            padding-bottom: 40px;
        }
        .pay-card {
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            overflow: hidden;
            margin-top: 90px;
        }
        .qr-box {
            background: #f8f9fa;
            border: 2px dashed #28a745;
            border-radius: 12px;
            padding: 20px;
            text-align: center;
        }
        .qr-img {
            width: 220px;
            height: 220px;
            border-radius: 10px;
            object-fit: contain;
            border: 3px solid #28a745;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" style="background: -webkit-linear-gradient(left, #3931af, #00c6ff); padding: 10px 20px;">
      <div class="container-fluid px-md-4">
        <a class="navbar-brand" href="admin-panel.php" style="display: flex; align-items: center; gap: 12px;">
          <img src="images/logo.png" alt="Logo" style="height: 45px; width: auto; object-fit: contain;">
          <h3 style="margin: 0; font-weight: 700; color: #ffffff; letter-spacing: 0.5px; font-size: 1.4rem;">DHANVANTHARI AYURVEDA HOSPITAL</h3>
        </a>
      </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-8">
                <div class="pay-card p-4 p-md-5">
                    <div class="text-center mb-4">
                        <span class="badge badge-success px-3 py-2" style="font-size: 0.9rem;">Consultation Payment</span>
                        <h3 class="font-weight-bold mt-2" style="color: #1e3d59;">Appointment Payment & Confirmation</h3>
                        <p class="text-muted">Complete your ₹<?php echo $docFees; ?> consultation fee payment to finalize your booking with Dr. Krishnamoorthy BS.</p>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <div class="card h-100 border-0 bg-light p-3" style="border-radius: 10px;">
                                <h6 class="font-weight-bold text-success"><i class="fa fa-calendar-check-o"></i> Appointment Summary</h6>
                                <hr class="mt-1 mb-2">
                                <p class="mb-1"><strong>Doctor:</strong> <?php echo $doctor; ?></p>
                                <p class="mb-1"><strong>Patient:</strong> <?php echo $fname.' '.$lname; ?></p>
                                <p class="mb-1"><strong>Date:</strong> <?php echo $appdate; ?></p>
                                <p class="mb-1"><strong>Time:</strong> <?php echo $apptime; ?></p>
                                <h5 class="mt-2 font-weight-bold text-primary">Fee: ₹<?php echo $docFees; ?></h5>
                            </div>
                        </div>

                        <div class="col-md-6 text-center">
                            <div class="qr-box">
                                <h6 class="font-weight-bold text-dark mb-2"><i class="fa fa-qrcode text-success"></i> Scan QR Code to Pay</h6>
                                <img src="images/logo.png" alt="Payment QR Code" class="qr-img mb-2" id="qr-display">
                                <p class="small text-muted mb-1"><strong>UPI ID:</strong> dhanvanthari@upi / 9035931500@paytm</p>
                                <span class="badge badge-info">Accepts GPay, PhonePe, Paytm, BHIM</span>
                            </div>
                        </div>
                    </div>

                    <form method="post" action="payment.php" enctype="multipart/form-data">
                        <input type="hidden" name="doctor" value="<?php echo $doctor; ?>">
                        <input type="hidden" name="docFees" value="<?php echo $docFees; ?>">
                        <input type="hidden" name="appdate" value="<?php echo $appdate; ?>">
                        <input type="hidden" name="apptime" value="<?php echo $apptime; ?>">

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Select Payment Mode:</label>
                            <select name="pay_mode" class="form-control" style="border-radius: 8px;" required>
                                <option value="UPI QR Code Scan" selected>UPI / QR Code Scan</option>
                                <option value="Pay at Hospital">Pay at Hospital Counter</option>
                                <option value="Net Banking / Card">Net Banking / Card</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Transaction / UTR Reference ID (Optional):</label>
                            <input type="text" name="txn_id" class="form-control" placeholder="Enter 12-digit UTR or Transaction Number" style="border-radius: 8px;">
                        </div>

                        <div class="form-group mb-4">
                            <label class="font-weight-bold">Upload Payment Screenshot / QR Image (Optional):</label>
                            <input type="file" name="payment_proof" class="form-control-file" accept="image/*">
                            <small class="form-text text-muted">When you upload your QR Code image, it will be saved for hospital records.</small>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-2 mb-md-0">
                                <a href="admin-panel.php" class="btn btn-outline-secondary btn-block font-weight-bold py-2" style="border-radius: 25px;">Back to Booking</a>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" name="confirm_payment" class="btn btn-success btn-block font-weight-bold py-2" style="border-radius: 25px; background: #28a745;">Confirm Payment & Book</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

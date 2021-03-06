<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="fmri_db";
$br_area_id="";
$area_nme="";
$gyral_land="";

 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
 
//connect to mysql database
try{
$conn =mysqli_connect($servername,$username,$password,$dbname);
}catch(MySQLi_Sql_Exception $ex){
echo("error in connecting");
}
//get data from the form
function getData()
{
$data = array();
$data[0]=$_POST['function_id'];


return $data;
}
//search
if(isset($_POST['view']))
{
$info = getData();
$search_query="SELECT * FROM function_detail WHERE function_id = '$info[0]'";
$search_result=mysqli_query($conn, $search_query);
if($search_result)
{
if(mysqli_num_rows($search_result))
{
while($rows = mysqli_fetch_array($search_result))
{
$function_id = $rows['function_id'];
$function = $rows['function'];

//echo "$function_id";

//echo "$function";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Brainstorm</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<style>
.button:hover {
    background-color: #e7e7e7; color: black;
    border-radius: 4px;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    transition-duration: 0.4s;
    border: 2px solid #555555;

}

</style>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="blue" data-image="../assets/img/sidebar-1.jpg">
 
            <div class="logo">
                <a href="http://localhost/fMRI%20website/index.php" class="simple-text">
                    Brainstorm
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    
                    
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                   


                    <div class="navbar-header">
                      <a href="http://localhost/fmri%20website/admin/examples/client_welcome8.php" class="btn btn-info btn-round">Back</a>
             
                      <a href="http://localhost/fmri%20website/admin/examples/client_welcome1.php" class="btn btn-info btn-round">
                            <i class="material-icons">home</i>
                      </a>
                        




                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"></a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="./view_user.php"><i class="material-icons">person</i>
                                    <!--<p class="hidden-lg hidden-md">Profile</p>-->
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title"> <center>Please Enter the Function ID to view the data</h4>

                                </div>
                                <br><br><br>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                       <form>
                                              <b>The Function ID:</b><br>
                                              <input  style="size: 20px" type="text" name="function_id" value="<?php echo "$function_id"?>">
                                              <br><br>
                                              <b>The Function:</b><br>
                                              <input style="size: 40px" type="text" name="function" value="<?php echo "$function"?>">
                                              <br><br>
                                             
                                              
                                              <!-- center><input type="submit"  name= "view" value ="View Data"> -->
                                            </form>
                                    </table>
                                </div>
                                <br><br><br>


                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>


</body>
<!--   Core JS Files   -->
<script src="../assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="../assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="../assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="../assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="../assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>

</html>


<?php
}
}else{
echo("no data are available");
}
} else{
echo("result error");
}
 
}


?>
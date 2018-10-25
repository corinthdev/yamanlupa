<?php include ("../admin/authentication.php"); ?>  
<?php
include 'connection.php';
if(isset($_GET["id"]))
{

$query = "SELECT * FROM dss_table_one WHERE id = '".$_GET["id"]."'";
$result = mysqli_query($conn, $query);

    while($test = mysqli_fetch_array($result))
    {
          
            $dss_info=$test['dss_info'] ;
            $dss_krit= $test['dss_krit'] ;          
            $dss_observe=$test['dss_observe'] ;
            $dss_result=$test['dss_result'] ;
    }
}

if(isset($_POST['update']))
{ 
  $q = $_POST['dss_info'];
  $w = $_POST['dss_krit'];
  $e = $_POST['dss_observe'];
  $r = $_POST['dss_result'];

  $update = "UPDATE dss_table_one SET dss_info ='$q', dss_krit ='$w', dss_observe ='$e', dss_result ='$r' WHERE id = '".$_GET["id"]."'";   
  if (mysqli_query($conn, $update)) {
    $_SESSION['success'] = "Record Successfully Update!";
    header("refresh:1;dss_platform.php");
} 
  else {
      echo "Error updating record: " . mysqli_error($conn);
  }
}
?>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <?php include 'frontend_links/links.php'; ?>  

        <!-- start banner Area -->
        <section class="banner-area relative about-banner" id="home"> 
            <div class="overlay overlay-bg"></div>
            <div class="container">       
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="about-content col-lg-12">
                        <h1 class="text-white">
                            DSS Platform        
                        </h1> 
                        <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/pages/dss_platform/dss_platform"> DSS Platform</a></p>
                    </div>  
                </div>
            </div>
        </section>
        <!-- End banner Area -->

        <!-- Start events-list Area -->
        <section class="events-list-area section-gap event-page-lists bg-light">
            <div class="container">
            <center><h1>DSS Platform</h1></center><br><hr>
                <div class="row">
                    <div class="col-lg-12">
                        <h3>2016 Platform</h3><br><br>
                        <?php if (isset($_SESSION['success'])) : ?>
                          <div class="alert alert-success" id="flash-msg">
                            <h4>
                              <?php 
                                echo $_SESSION['success']; 
                                unset($_SESSION['success']);
                              ?>
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                            </h4>
                          </div>
                        <?php endif ?>
                        <div class="row">
                          <div class="col-lg-6">
                            <form method="POST">
                                <table>
                                  <tbody>
                                    <tr>
                                      <td>Impormasyon ng Kalusugan ng Lupa</td>
                                      <td><input class = "form-control" type="text" value="<?php echo $dss_info;?>" name="dss_info"></td>
                                    </tr>
                                    <tr>
                                      <td>Kritikal na Hangganan</td>
                                      <td><input class = "form-control" type="text" value="<?php echo $dss_krit;?>" name="dss_krit"></td>
                                    </tr>
                                    <tr>
                                      <td>Obserbasyon</td>
                                      <td><input class = "form-control" type="text" value="<?php echo $dss_observe;?>" name="dss_observe"></td>
                                    </tr>
                                    <tr>
                                      <td>Resulta</td>
                                      <td><input class = "form-control" type="text" value="<?php echo $dss_result;?>" name="dss_result"></td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <a href = "dss_platform.php" role = "button" class="form-control btn btn-success">Back to DSS PLATFORM</a>
                                      </td>
                                      <td>
                                        <input type="submit" name="update" class="form-control btn btn-warning" value="Save"> 
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                            </form>
                          </div> 
                        </div>
                    </div>
                </div>
            </div>  
        </section>
            
        <?php include '../navigation/footer.php'; ?>
<?php
$page_title = 'Sale Report';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(3);
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-6">
    <?php echo display_msg($msg); ?>
  </div>
</div>
<div class="row mr-2 ml-2">
  <div class="col-md-12">
  <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">
                                        Date Range
                                    </h6>
                                </div>
                                <div class="card-body">
                                <form class="clearfix" method="post" action="sale_report_process.php">
                                  <div class="form-group">
                                    <label class="form-label" style = "font-size:20px">Date Range</label>
                                      <div class="input-group">
                                        <input type="date" class="datepicker form-control" name="start-date" placeholder="From">
                                    
                                        <input type="date" class="datepicker form-control" name="end-date" placeholder="To">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                    <center>
                                      <button type="submit" name="submit" class="btn btn-primary" style = "font-size:20px">Generate Report</button>
</center>                                  
                                    </div>
                                </form>
                                </div>
                            </div>



                            </div>
   

</div>
<?php include_once('layouts/footer.php'); ?>

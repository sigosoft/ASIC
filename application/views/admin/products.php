<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?php echo base_url(); ?>images/favicon.ico" type="image/ico" />

    <title>ASIC | Home</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url(); ?>vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url(); ?>vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url(); ?>vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url(); ?>vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        <?php include 'navigation.php'; ?>

        <!-- top navigation -->
        <?php include 'settings.php'; ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main" style="min-height: 3664px;">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3 class="mb-0">Dashboard</h3>
				  <h5>Overview</h5>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
				  <div class="x_panel">

          <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Products </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>

                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <!--<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url(); ?>admin/product/get_product">

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Start Date
                      </label>
                      <div class="col-md-3 col-sm-3 col-xs-6">
                        <input type="date" id="start_date" name="start_date"  class="form-control col-md-7 col-xs-12" value="<?php echo date('Y-m-d'); ?>">
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">End Date
                      </label>
                      <div class="col-md-3 col-sm-3 col-xs-6">
                        <input type="date" id="end_date" name="end_date"  class="form-control col-md-7 col-xs-12" value="<?php echo date('Y-m-d'); ?>">
                      </div>
                    </div>


                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button class="btn btn-primary" type="reset">Reset</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                    </div>
                    <div class="ln_solid"></div>
                  </form>-->

                  <div class="x_content">

                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Sl No</th>
                          <th>Date</th>
                          <th>Plant</th>
                          <th>Shift</th>
                          <th>Product No</th>
                          <th>Mould</th>
                          <th>Color</th>
                          <th>Quantity</th>
                          <th>Face Mixer</th>
                          <th>Base Mixer</th>
                          <th>P.Factor</th>
                          <th>Prod.Time</th>
                          <th>Cycle time</th>
                          <th>Prod.Team</th>
                          <th>Waste Qty</th>
                          <th>Comments</th>
                          <th>Raw Materials</th>

                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
              <?php $i=1;
              foreach($result as $row){
              ?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td><?php echo date('d-M-Y',strtotime($row['date'])); ?></td>
                          <td><?php echo $this->db->get_where('plants',array('plant_id'=>$row['plant_no']))->row()->plant_name;; ?></td>
                          <td><?php echo $row['shift_name']; ?></td>
                          <td><?php echo $row['product_no']; ?></td>
                          <td><?php echo $row['mould']; ?></td>
                          <td><?php echo $row['color']; ?></td>
                          <td><?php echo $row['quantity']; ?></td>
                          <td><?php echo $row['face_mixer']; ?></td>
                          <td><?php echo $row['base_mixer']; ?></td>
                          <td><?php echo $row['p_factor']; ?></td>
                          <td><?php echo $row['prod_time']; ?></td>
                          <td><?php echo $row['cycle_time']; ?></td>
                          <td><?php echo $row['prod_team']; ?></td>
                          <td><?php echo $row['waste_qty']; ?></td>
                          <td><?php echo $row['comments']; ?></td>
                          <td><a href="<?php echo base_url(); ?>admin/product/raw_material/<?php echo $row['product_id'];  ?>">View Details</a></td>

                          <td>
                            <a href="<?php echo base_url(); ?>admin/product/edit/<?php echo $row['product_id'];  ?>" class="btn btn-success btn-xs btn-labeled fa fa-wrench" data-toggle="tooltip"   title="edit">
                              <?php echo 'edit';?></a>



                          </td>
                        </tr>

              <?php $i++; } ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

				</div>
              </div>
            </div>

          </div>
        </div>
        <!-- /page content -->

        <div class="modal inmodal fade" id="del_modal" tabindex="-1" role="dialog"  aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <form method="post" action="<?php echo base_url();?>index.php/admin/shift/del_view" >
                        <div class="modal-content">
                            <div class="modal-body">
                            <p style="text-align:center"><strong>Are You Sure?</p>
                              <input type="hidden" id="id1"  name="id1">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-white" data-dismiss="modal">Cancel</button>
                              <button type="submit" class="btn btn-primary">OK</button>
                            </div>
                        </div>
                      </form>
                    </div>
                </div>

        <!-- footer content -->
        <footer>
          <div class=" black">
           2018@ASIC
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url(); ?>vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url(); ?>vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url(); ?>vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url(); ?>vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url(); ?>vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url(); ?>vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url(); ?>vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url(); ?>vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url(); ?>vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url(); ?>vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url(); ?>vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url(); ?>vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url(); ?>vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url(); ?>vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php echo base_url(); ?>vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url(); ?>vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url(); ?>vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url(); ?>build/js/custom.min.js"></script>


    <!-- NProgress -->

    <script src="<?php echo base_url(); ?>vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/pdfmake/build/vfs_fonts.js"></script>

<script>
function del_view(id){
    var id2=id;
    //alert(id2);
    document.getElementById('id1').value=id2;
    $(document).ready(function(){ $('#del_modal').modal('show'); });
  }
  </script>
  </body>
</html>

<?php
    require_once('functions/function.php');
    get_header();
    get_sidebar();
    $id=$_GET['v'];
    $sel="SELECT * FROM adm_sechandbook WHERE secbook_id='$id'";
    $Q=mysqli_query($con,$sel);
    $in=mysqli_fetch_assoc($Q);
?>
    <div class="col-md-12">
    	<div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                    View Second Hand Book
                 </div>
                 <div class="col-md-3 text-right">
                 	<a href="all-sechandbook.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Second Hand Book</a>
                </div>
                <div class="clearfix"></div>
            </div>
          <div class="panel-body">
              <div class="col-md-1">
              </div>
              <div class="col-md-9">
              	<table class="table table-hover table-striped table-responsive view_table_cus">
                	<tr>
                    	<td>Book Title</td>
                        <td>:</td>
                        <td><?= $in['secbook_title']; ?></td>
                    </tr>
                    <tr>
                    	<td>Book Edition</td>
                        <td>:</td>
                        <td style="word-wrap: break-word;min-width: 160px;max-width: 160px;"><?= $in['secbook_edition']; ?></td>
                    </tr>
                    <tr>
                    	<td>Book Category</td>
                        <td>:</td>
                        <td><?= $in['secbook_price']; ?></td>
                    </tr>
                    <tr>
                        <td>Book Doner</td>
                        <td>:</td>
                        <td><?= $in['seller_num']; ?></td>
                    </tr>
                    <tr>
                    	<td>Thumbnail</td>
                        <td>:</td>
                        <td><?= $in['secbook_img']; ?></td>
                    </tr>
                </table>
              </div>
              <div class="col-md-2">
              </div>
          </div>
          <div class="panel-footer">
            <div class="col-md-4">
              <button onclick="window.print()" class="btn btn-sm btn-info" type="button">PDF</button>
              <button onclick="window.print()" class="btn btn-sm btn-success" type="button">PRINT</button>
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4 text-right">

            </div>
            <div class="clearfix"></div>
          </div>
        </div>
    </div><!--col-md-12 end-->
<?php
    get_footer();
?>

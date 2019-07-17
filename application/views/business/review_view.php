<?php $this->load->view("business/business_header"); ?>
<div class="page-inner" style="min-height:1480px !important">
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-12">
                <!-- <?php echo "<pre>";print_r($payment_history); ?> -->
                <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                    <thead ><center><b><h1>User-Reviews</h1></b></center>
                        <tr>
                           
                            <th>ID</th>
                            <th>User</th>
                            <th>Business</th>
                            <th>Review</th>
                            <th>Star</th> 
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Business</th>
                            <th>Review</th>
                            <th>Star</th>

                        </tr>
                    </tfoot>
                    <tbody>
                <?php foreach ($breview as $value) {
                ?>
                <tr>
                    <td><?php echo $value['rev_id']; ?></td>
                    <td><?php echo $value['uname']; ?></td>
                    <td><?php echo $value['bname']; ?></td>
                    <td><?php echo $value['review']; ?></td>
                    <td><?php echo $value['star']; ?></td>
                    
                    </tr>
                <?php
                } ?>
                </tbody>
                </table>  
            </div>
        </div><!-- Row -->
    </div><!-- Main Wrapper -->
</div>
<?php $this->load->view("business/business_footer"); ?>
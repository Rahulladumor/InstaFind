<?php $this->load->view("business/business_header"); ?>
<div class="page-inner" style="min-height:1480px !important">
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-12">
                <!-- <?php echo "<pre>";print_r($payment_history); ?> -->
                <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                    <thead >
                        <tr>
                            <th>Business</th>
                            <th>Package</th>
                            <th>Transaction ID</th>
                            <th>Amount</th>
                            <th>Date/Time</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Business</th>
                            <th>Package</th>
                            <th>Transaction ID</th>
                            <th>Amount</th>
                            <th>Date/Time</th>
                        </tr>
                    </tfoot>
                    <tbody>
                <?php foreach ($payment_history as $value) {
                ?>
                <tr>
                    <td><?php echo $value['bname']; ?></td>
                    <td><?php echo $value['pname']; ?></td>
                    <td><?php echo $value['txnid']; ?></td>
                    <td><?php echo $value['amount']; ?></td>
                    <td><?php echo $value['date']." / ".$value['time']; ?></td>
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
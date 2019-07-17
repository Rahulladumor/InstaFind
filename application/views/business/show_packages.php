<?php $this->load->view("business/business_header"); ?>
 <div class="page-inner">
                <div class="page-title">
                    <h3>Pricing Tables</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Extra</a></li>
                            <li class="active">Pricing Tables</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                    <div class="cd-pricing-container">
                                        <ul class="cd-pricing-list cd-bounce-invert">
                                            <?php foreach($package as $value){ ?>
                                            <form class="cd-pricing-list cd-bounce-invert myform" style="float: left;width: calc(33.33% - 10px);margin: 5px;" name="myform" method="POST" action="<?php echo site_url("business/welcome/index"); ?>">
                                            	<input type="hidden" name="pamt" value="<?php echo $value['price']; ?>">
                                            	<input type="hidden" name="ptype" value="<?php echo $value['pkg_type']; ?>">
                                            	<input type="hidden" name="bname" value="<?php echo $bname; ?>">
                                            	<input type="hidden" name="bcontact" value="<?php echo $bcontact; ?>">
                                            	<input type="hidden" name="bid" value="<?php echo $bid; ?>">
                                                <input type="hidden" name="pid" value="<?php echo $value['package_id']; ?>">
                                            <li style="width: 100%">
                                                <ul class="cd-pricing-wrapper">
                                                    <li data-type="yearly" class="is-visible">
                                                        <header class="cd-pricing-header">
                                                            <h2><?php echo $value['pkg_type']; ?></h2>
                                                            <div class="cd-price">
                                                                <span class="cd-currency">₹</span>
                                                                <span class="cd-value"><?php echo $value['price']; ?></span>
                                                                
                                                            </div>
                                                        </header>
                                                        <div class="cd-pricing-body">
                                                            <ul class="cd-pricing-features">
                                                                <li><em><?php echo $value['description']; ?></em> </li>
                                                                <li><em>24/7</em> Support</li>
                                                            </ul>
                                                        </div>
                                                        <footer class="cd-pricing-footer">
                                                        	<button type="submit" class="cd-select pay" >Select</button>
                                                            <!-- <a class="cd-select pay">Select</a> -->
                                                        </footer>
                                                    </li>
                                                </ul>
                                            </li>
                                            </form>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
                <div class="page-footer">
                    <p class="no-s">2015 &copy; Modern by Steelcoders.</p>
                </div>
            </div><!-- Page Inner -->
<?php $this->load->view("business/business_footer"); ?>

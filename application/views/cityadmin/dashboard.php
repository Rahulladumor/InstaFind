<?php $this->load->view("cityadmin/header"); ?>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="<?php echo base_url();?>assets/cityadmin/#">Home</a></li>                    
                    <li class="active">Dashboard</li>
                </ul>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    <!-- START WIDGETS -->                    
                    <div class="row">
                        <div class="col-md-3">
                            
                            <!-- START WIDGET SLIDER -->
                            <div class="widget widget-default widget-carousel">
                                <div class="owl-carousel" id="owl-example">
                                    <div>                                    
                                        <div class="widget-title">Total business</div>                                                                        
                                        <!-- <div class="widget-subtitle">20/06/2018 15:23</div> -->
                                        <div class="widget-int"><?php echo $total_business;?></div>
                                    </div>
                                    <div>                                    
                                        <div class="widget-title">Active</div>
                                        <div class="widget-subtitle">Business</div>
                                        <div class="widget-int"><?php echo $total_abusiness;?></div>
                                    </div>
                                    <div>                                    
                                        <div class="widget-title">Block</div>
                                        <div class="widget-subtitle">Business
                                        </div>
                                        <div class="widget-int"><?php echo $total_bbusiness;?></div>
                                    </div>
                                </div>                            
                                <div class="widget-controls">                                
                                    <a href="<?php echo base_url();?>assets/cityadmin/#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                             
                            </div>         
                            <!-- END WIDGET SLIDER -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET MESSAGES -->
                            <div class="widget widget-default widget-item-icon" onclick="location.href='pages-messages.html';">
                                <div class="widget-item-left">
                                    <span class="fa fa-star"></span>
                                </div>                             
                                <div class="widget-data">
                                    <div class="widget-int num-count"><?php echo $total_event;?></div>
                                    <div class="widget-title">Total </div>
                                    <div class="widget-subtitle">Events</div>
                                </div>      
                                <div class="widget-controls">                                
                                    <a href="<?php echo base_url();?>assets/cityadmin/#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>
                            </div>                            
                            <!-- END WIDGET MESSAGES -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon" onclick="location.href='pages-address-book.html';">
                                <div class="widget-item-left">
                                    <span class="fa fa-user"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count"><?php echo $total_comment;?></div>
                                    <div class="widget-title">Total</div>
                                    <div class="widget-subtitle">Comment</div>
                                </div>
                                <div class="widget-controls">                                
                                    <a href="<?php echo base_url();?>assets/cityadmin/#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                            
                            </div>                            
                            <!-- END WIDGET REGISTRED -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET CLOCK -->
                            <div class="widget widget-danger widget-padding-sm">
                                <div class="widget-big-int plugin-clock">00:00</div>                            
                                <div class="widget-subtitle plugin-date">Loading...</div>
                                <div class="widget-controls">                                
                                    <a href="<?php echo base_url();?>assets/cityadmin/#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="left" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                            
                                <div class="widget-buttons widget-c3">
                                    <div class="col">
                                        <a href="<?php echo base_url();?>assets/cityadmin/#"><span class="fa fa-clock-o"></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="<?php echo base_url();?>assets/cityadmin/#"><span class="fa fa-bell"></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="<?php echo base_url();?>assets/cityadmin/#"><span class="fa fa-calendar"></span></a>
                                    </div>
                                </div>                            
                            </div>                        
                            <!-- END WIDGET CLOCK -->
                            
                        </div>
                    </div>
                    <!-- END WIDGETS -->                    
                    
                   
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

<?php $this->load->view("cityadmin/footer"); ?>        







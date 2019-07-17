<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>City-Admin Instafind</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>assets/user/images/favicon/favi.png">
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url();?>assets/cityadmin/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <!-- <a href="<?php echo base_url();?>assets/cityadmin/index.html">City-Admin</a> -->
                        <a href="#">CITY-ADMIN</a>
                        <a href="<?php echo base_url();?>assets/cityadmin/#" class="x-navigation-control">CITY-ADMIN</a>
                    </li>
                    <li class="xn-profile">
                        <a href="<?php echo base_url();?>assets/cityadmin/#" class="profile-mini">
                            <img src="<?php echo base_url();?>assets/cityadmin/assets/images/users/avatar.jpg" alt="John Doe"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="<?php echo base_url('upload/cityadmin/'.$ctadmin['image']);?>" width="150px"  height="90px" alt="John Doe"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name"><b><?php echo @$ctadmin["name"]; ?></b></div>
                                <div class="profile-data-title" style="font-size: 15px;">Your City: &nbsp;<b style="color:#fff; font-size: 15px;"><?php echo $ctname['name']?></b></div>
                            </div>
                            <div class="profile-controls">
                                <a href="<?php echo base_url();?>assets/cityadmin/pages-profile.html" class="profile-control-left"><span class="fa fa-info" style="line-height: 2;"></span></a>
                                <a href="<?php echo base_url();?>assets/cityadmin/pages-messages.html" class="profile-control-right"><span class="fa fa-envelope" style="line-height: 2;"></span></a>
                            </div>
                        </div>                                                                        
                    </li>
                    <!-- <li class="xn-title">Navigation</li> -->
                    <li class="active">
                        <a href="<?php echo site_url();?>/cityadmin/dashboard_con"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
                    </li>
                        <li>
                        <a href="<?php echo site_url("cityadmin/login/cityadmin_profile"); ?>"><span class="fa fa-desktop"></span> <span class="xn-text">Profile</span></a>
                    </li>
                    
                    <li>
                        <a href="<?php echo site_url("cityadmin/dashboard_con/show_business");?>"><span class="fa fa-desktop"></span> <span class="xn-text">Businesses</span></a>
                    </li>
                        <li>
                        <a href="<?php echo site_url("cityadmin/dashboard_con/owner_deatil"); ?>"><span class="fa fa-desktop"></span> <span class="xn-text">Owner</span></a>
                    </li>
                        <li>
                        <a href="<?php echo site_url("cityadmin/dashboard_con/show_comment"); ?>"><span class="fa fa-desktop"></span> <span class="xn-text">Comment</span></a>
                    </li>
                        <li>
                        <a href="<?php echo site_url("cityadmin/dashboard_con/show_review"); ?>"><span class="fa fa-desktop"></span> <span class="xn-text">Review</span></a>
                    </li>
                    
                    

                    <!-- <li class="active">
                        <a href="<?php echo base_url();?>assets/cityadmin/index.html"><span class="fa fa-desktop"></span> <span class="xn-text">Events</span></a>
                    </li>
 -->                <!-- <li class="active">
                        <a href="<?php echo base_url();?>assets/cityadmin/index.html"><span class="fa fa-desktop"></span> <span class="xn-text">Package</span></a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url();?>assets/cityadmin/index.html"><span class="fa fa-desktop"></span> <span class="xn-text">Owner</span></a>
                    </li>
                    <li class="xn-openable">
                        <a href="<?php echo base_url();?>assets/cityadmin/#"><span class="fa fa-files-o"></span> <span class="xn-text">Pages</span></a>
                        <ul>
                            <li><a href="<?php echo base_url();?>assets/cityadmin/pages-gallery.html"><span class="fa fa-image"></span> Gallery</a></li>
                            <li><a href="<?php echo base_url();?>assets/cityadmin/pages-profile.html"><span class="fa fa-user"></span> Profile</a></li>
                            <li><a href="<?php echo base_url();?>assets/cityadmin/pages-address-book.html"><span class="fa fa-users"></span> Address Book</a></li>
                            <li class="xn-openable">
                                <a href="<?php echo base_url();?>assets/cityadmin/#"><span class="fa fa-clock-o"></span> Timeline</a>
                                <ul>
                                    <li><a href="<?php echo base_url();?>assets/cityadmin/pages-timeline.html"><span class="fa fa-align-center"></span> Default</a></li>
                                    <li><a href="<?php echo base_url();?>assets/cityadmin/pages-timeline-simple.html"><span class="fa fa-align-justify"></span> Full Width</a></li>
                                </ul>
                            </li>
                            <li class="xn-openable">
                                <a href="<?php echo base_url();?>assets/cityadmin/#"><span class="fa fa-envelope"></span> Mailbox</a>
                                <ul>
                                    <li><a href="<?php echo base_url();?>assets/cityadmin/pages-mailbox-inbox.html"><span class="fa fa-inbox"></span> Inbox</a></li>
                                    <li><a href="<?php echo base_url();?>assets/cityadmin/pages-mailbox-message.html"><span class="fa fa-file-text"></span> Message</a></li>
                                    <li><a href="<?php echo base_url();?>assets/cityadmin/pages-mailbox-compose.html"><span class="fa fa-pencil"></span> Compose</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url();?>assets/cityadmin/pages-messages.html"><span class="fa fa-comments"></span> Messages</a></li>
                            <li><a href="<?php echo base_url();?>assets/cityadmin/pages-calendar.html"><span class="fa fa-calendar"></span> Calendar</a></li>
                            <li><a href="<?php echo base_url();?>assets/cityadmin/pages-tasks.html"><span class="fa fa-edit"></span> Tasks</a></li>
                            <li><a href="<?php echo base_url();?>assets/cityadmin/pages-content-table.html"><span class="fa fa-columns"></span> Content Table</a></li>
                            <li><a href="<?php echo base_url();?>assets/cityadmin/pages-faq.html"><span class="fa fa-question-circle"></span> FAQ</a></li>
                            <li><a href="<?php echo base_url();?>assets/cityadmin/pages-search.html"><span class="fa fa-search"></span> Search</a></li>
                            <li class="xn-openable">
                                <a href="<?php echo base_url();?>assets/cityadmin/#"><span class="fa fa-file"></span> Blog</a>
                                
                                <ul>                                    
                                    <li><a href="<?php echo base_url();?>assets/cityadmin/pages-blog-list.html"><span class="fa fa-copy"></span> List of Posts</a></li>
                                    <li><a href="<?php echo base_url();?>assets/cityadmin/pages-blog-post.html"><span class="fa fa-file-o"></span>Single Post</a></li>
                                </ul>
                            </li>
                            <li class="xn-openable">
                                <a href="<?php echo base_url();?>assets/cityadmin/#"><span class="fa fa-sign-in"></span> Login</a>
                                <ul>                                    
                                    <li><a href="<?php echo base_url();?>assets/cityadmin/pages-login.html">App Login</a></li>
                                    <li><a href="<?php echo base_url();?>assets/cityadmin/pages-login-website.html">Website Login</a></li>
                                    <li><a href="<?php echo base_url();?>assets/cityadmin/pages-login-website-light.html"> Website Login Light</a></li>
                                </ul>
                            </li>
                            <li class="xn-openable">
                                <a href="<?php echo base_url();?>assets/cityadmin/#"><span class="fa fa-warning"></span> Error Pages</a>
                                <ul>                                    
                                    <li><a href="<?php echo base_url();?>assets/cityadmin/pages-error-404.html">Error 404 Sample 1</a></li>
                                    <li><a href="<?php echo base_url();?>assets/cityadmin/pages-error-404-2.html">Error 404 Sample 2</a></li>
                                    <li><a href="<?php echo base_url();?>assets/cityadmin/pages-error-500.html"> Error 500</a></li>
                                </ul>
                            </li>                            
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="<?php echo base_url();?>assets/cityadmin/#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Layouts</span></a>
                        <ul>
                            <li><a href="<?php echo base_url();?>assets/cityadmin/layout-boxed.html">Boxed</a></li>
                            <li><a href="<?php echo base_url();?>assets/cityadmin/layout-nav-toggled.html">Navigation Toggled</a></li>
                            <li><a href="<?php echo base_url();?>assets/cityadmin/layout-nav-top.html">Navigation Top</a></li>
                            <li><a href="<?php echo base_url();?>assets/cityadmin/layout-nav-right.html">Navigation Right</a></li>
                            <li><a href="<?php echo base_url();?>assets/cityadmin/layout-nav-top-fixed.html">Top Navigation Fixed</a></li>                            
                            <li><a href="<?php echo base_url();?>assets/cityadmin/layout-nav-custom.html">Custom Navigation</a></li>
                            <li><a href="<?php echo base_url();?>assets/cityadmin/layout-frame-left.html">Frame Left Column</a></li>
                            <li><a href="<?php echo base_url();?>assets/cityadmin/layout-frame-right.html">Frame Right Column</a></li>
                            <li><a href="<?php echo base_url();?>assets/cityadmin/layout-search-left.html">Search Left Side</a></li>
                            <li><a href="<?php echo base_url();?>assets/cityadmin/blank.html">Blank Page</a></li>
                        </ul>
                    </li> -->
                    <!-- <li class="xn-title">Components</li> -->
                    <!-- <li class="xn-openable">
                        <a href="<?php echo base_url();?>assets/cityadmin/#"><span class="fa fa-cogs"></span> <span class="xn-text">UI Kits</span></a>                        
                        <ul>
                            <li><a href="<?php echo base_url();?>assets/cityadmin/ui-widgets.html"><span class="fa fa-heart"></span> Widgets</a></li>                            
                            <li><a href="<?php echo base_url();?>assets/cityadmin/ui-elements.html"><span class="fa fa-cogs"></span> Elements</a></li>
                            <li><a href="<?php echo base_url();?>assets/cityadmin/ui-buttons.html"><span class="fa fa-square-o"></span> Buttons</a></li>                            
                            <li><a href="<?php echo base_url();?>assets/cityadmin/ui-panels.html"><span class="fa fa-pencil-square-o"></span> Panels</a></li>
                            <li><a href="<?php echo base_url();?>assets/cityadmin/ui-icons.html"><span class="fa fa-magic"></span> Icons</a><div class="informer informer-warning">+679</div></li>
                            <li><a href="<?php echo base_url();?>assets/cityadmin/ui-typography.html"><span class="fa fa-pencil"></span> Typography</a></li>
                            <li><a href="<?php echo base_url();?>assets/cityadmin/ui-portlet.html"><span class="fa fa-th"></span> Portlet</a></li>
                            <li><a href="<?php echo base_url();?>assets/cityadmin/ui-sliders.html"><span class="fa fa-arrows-h"></span> Sliders</a></li>
                            <li><a href="<?php echo base_url();?>assets/cityadmin/ui-alerts-popups.html"><span class="fa fa-warning"></span> Alerts & Popups</a></li>                            
                            <li><a href="<?php echo base_url();?>assets/cityadmin/ui-lists.html"><span class="fa fa-list-ul"></span> Lists</a></li>
                            <li><a href="<?php echo base_url();?>assets/cityadmin/ui-tour.html"><span class="fa fa-random"></span> Tour</a></li>
                        </ul>
                    </li>   -->                  
                    <!-- <li class="xn-openable">
                        <a href="<?php echo base_url();?>assets/cityadmin/#"><span class="fa fa-pencil"></span> <span class="xn-text">Forms</span></a>
                        <ul>
                            <li>
                                <a href="<?php echo base_url();?>assets/cityadmin/form-layouts-two-column.html"><span class="fa fa-tasks"></span> Form Layouts</a>
                                <div class="informer informer-danger">New</div>
                                <ul>
                                    <li><a href="<?php echo base_url();?>assets/cityadmin/form-layouts-one-column.html"><span class="fa fa-align-justify"></span> One Column</a></li>
                                    <li><a href="<?php echo base_url();?>assets/cityadmin/form-layouts-two-column.html"><span class="fa fa-th-large"></span> Two Column</a></li>
                                    <li><a href="<?php echo base_url();?>assets/cityadmin/form-layouts-tabbed.html"><span class="fa fa-table"></span> Tabbed</a></li>
                                    <li><a href="<?php echo base_url();?>assets/cityadmin/form-layouts-separated.html"><span class="fa fa-th-list"></span> Separated Rows</a></li>
                                </ul> 
                            </li>
                            <li><a href="<?php echo base_url();?>assets/cityadmin/form-elements.html"><span class="fa fa-file-text-o"></span> Elements</a></li>
                            <li><a href="<?php echo base_url();?>assets/cityadmin/form-validation.html"><span class="fa fa-list-alt"></span> Validation</a></li>
                            <li><a href="<?php echo base_url();?>assets/cityadmin/form-wizards.html"><span class="fa fa-arrow-right"></span> Wizards</a></li>
                            <li><a href="<?php echo base_url();?>assets/cityadmin/form-editors.html"><span class="fa fa-text-width"></span> WYSIWYG Editors</a></li>
                            <li><a href="<?php echo base_url();?>assets/cityadmin/form-file-handling.html"><span class="fa fa-floppy-o"></span> File Handling</a></li>
                        </ul>
                    </li> -->
                    <!-- <li class="xn-openable">
                        <a href="<?php echo base_url();?>assets/cityadmin/tables.html"><span class="fa fa-table"></span> <span class="xn-text">Tables</span></a>
                        <ul>                            
                            <li><a href="<?php echo base_url();?>assets/cityadmin/table-basic.html"><span class="fa fa-align-justify"></span> Basic</a></li>
                            <li><a href="<?php echo base_url();?>assets/cityadmin/table-datatables.html"><span class="fa fa-sort-alpha-desc"></span> Data Tables</a></li>
                            <li><a href="<?php echo base_url();?>assets/cityadmin/table-export.html"><span class="fa fa-download"></span> Export Tables</a></li>                            
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="<?php echo base_url();?>assets/cityadmin/#"><span class="fa fa-bar-chart-o"></span> <span class="xn-text">Charts</span></a>
                        <ul>
                            <li><a href="<?php echo base_url();?>assets/cityadmin/charts-morris.html"><span class="xn-text">Morris</span></a></li>
                            <li><a href="<?php echo base_url();?>assets/cityadmin/charts-nvd3.html"><span class="xn-text">NVD3</span></a></li>
                            <li><a href="<?php echo base_url();?>assets/cityadmin/charts-rickshaw.html"><span class="xn-text">Rickshaw</span></a></li>
                            <li><a href="<?php echo base_url();?>assets/cityadmin/charts-other.html"><span class="xn-text">Other</span></a></li>
                        </ul>
                    </li>                    
                    <li>
                        <a href="<?php echo base_url();?>assets/cityadmin/maps.html"><span class="fa fa-map-marker"></span> <span class="xn-text">Maps</span></a>
                    </li>                    
                    <li class="xn-openable">
                        <a href="<?php echo base_url();?>assets/cityadmin/#"><span class="fa fa-sitemap"></span> <span class="xn-text">Navigation Levels</span></a>
                        <ul>                            
                            <li class="xn-openable">
                                <a href="<?php echo base_url();?>assets/cityadmin/#">Second Level</a>
                                <ul>
                                    <li class="xn-openable">
                                        <a href="<?php echo base_url();?>assets/cityadmin/#">Third Level</a>
                                        <ul>
                                            <li class="xn-openable">
                                                <a href="<?php echo base_url();?>assets/cityadmin/#">Fourth Level</a>
                                                <ul>
                                                    <li><a href="<?php echo base_url();?>assets/cityadmin/#">Fifth Level</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>                            
                        </ul>
                    </li> -->
                    
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
                        <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="<?php echo base_url();?>assets/cityadmin/#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                    <li class="xn-search">
                        <form role="form">
                            <input type="text" name="search" placeholder="Search..."/>
                        </form>
                    </li>   
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="<?php echo site_url('cityadmin/login/logout')?>" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                    <!-- User Profile -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-user"></span></a>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging" style="width: 200px;height: 150px;">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-user"></span> <?php  echo $ctadmin['name']?></h3>
                            </div>
                            <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                                <a href="<?php echo site_url("cityadmin/login/cityadmin_profile"); ?>" class="list-group-item">
                                    <span class="contacts-title"><i class="fa fa-user" ></i>Profile</span>
                                </a>
                                <a href="<?php echo site_url("cityadmin/login/change_pass_view"); ?>" class="list-group-item">
                                    <span class="contacts-title"><i class="fa fa-lock" ></i>Change Password</span>
                                </a>
                                <a href="<?php echo site_url("cityadmin/login/logout"); ?>" class="list-group-item">
                                    <span class="contacts-title"><i class="fa fa-sign-out" ></i>Logout</span>
                                </a>
                            </div>                                
                        </div>                        
                    </li>
                    <!-- profile end -->
                    <!-- MESSAGES -->
                    <li class="xn-icon-button pull-right">
                        <a href="<?php echo base_url();?>assets/cityadmin/#"><span class="fa fa-comments"></span></a>
                        <div class="informer informer-danger">4</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-comments"></span> Messages</h3>                                
                                <div class="pull-right">
                                    <span class="label label-danger">4 new</span>
                                </div>
                            </div>
                            <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                                <a href="<?php echo base_url();?>assets/cityadmin/#" class="list-group-item">
                                    <div class="list-group-status status-online"></div>
                                    <img src="<?php echo base_url();?>assets/cityadmin/assets/images/users/user2.jpg" class="pull-left" alt="John Doe"/>
                                    <span class="contacts-title"><?php echo @$ctadmin["name"]; ?></span>
                                    <p>Praesent placerat tellus id augue condimentum</p>
                                </a>
                                <a href="<?php echo base_url();?>assets/cityadmin/#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="<?php echo base_url();?>assets/cityadmin/assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk"/>
                                    <span class="contacts-title">Dmitry Ivaniuk</span>
                                    <p>Donec risus sapien, sagittis et magna quis</p>
                                </a>
                                <a href="<?php echo base_url();?>assets/cityadmin/#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="<?php echo base_url();?>assets/cityadmin/assets/images/users/user3.jpg" class="pull-left" alt="Nadia Ali"/>
                                    <span class="contacts-title">Nadia Ali</span>
                                    <p>Mauris vel eros ut nunc rhoncus cursus sed</p>
                                </a>
                                <a href="<?php echo base_url();?>assets/cityadmin/#" class="list-group-item">
                                    <div class="list-group-status status-offline"></div>
                                    <img src="<?php echo base_url();?>assets/cityadmin/assets/images/users/user6.jpg" class="pull-left" alt="Darth Vader"/>
                                    <span class="contacts-title">Darth Vader</span>
                                    <p>I want my money back!</p>
                                </a>
                            </div>     
                            <div class="panel-footer text-center">
                                <a href="<?php echo base_url();?>assets/cityadmin/pages-messages.html">Show all messages</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END MESSAGES -->
                    <!-- TASKS -->
                    <li class="xn-icon-button pull-right">
                        <a href="<?php echo base_url();?>assets/cityadmin/#"><span class="fa fa-tasks"></span></a>
                        <div class="informer informer-warning">3</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-tasks"></span> Tasks</h3>                                
                                <div class="pull-right">
                                    <span class="label label-warning">3 active</span>
                                </div>
                            </div>
                            <div class="panel-body list-group scroll" style="height: 200px;">                                
                                <a class="list-group-item" href="<?php echo base_url();?>assets/cityadmin/#">
                                    <strong>Phasellus augue arcu, elementum</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 25 Sep 2014 / 50%</small>
                                </a>
                                <a class="list-group-item" href="<?php echo base_url();?>assets/cityadmin/#">
                                    <strong>Aenean ac cursus</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%</div>
                                    </div>
                                    <small class="text-muted">Dmitry Ivaniuk, 24 Sep 2014 / 80%</small>
                                </a>
                                <a class="list-group-item" href="<?php echo base_url();?>assets/cityadmin/#">
                                    <strong>Lorem ipsum dolor</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">95%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 23 Sep 2014 / 95%</small>
                                </a>
                                <a class="list-group-item" href="<?php echo base_url();?>assets/cityadmin/#">
                                    <strong>Cras suscipit ac quam at tincidunt.</strong>
                                    <div class="progress progress-small">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 21 Sep 2014 /</small><small class="text-success"> Done</small>
                                </a>                                
                            </div>     
                            <div class="panel-footer text-center">
                                <a href="<?php echo base_url();?>assets/cityadmin/pages-tasks.html">Show all tasks</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END TASKS -->
                </ul>

                
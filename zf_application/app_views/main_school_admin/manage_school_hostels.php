<?php
    //Accessing school profile model
    $zf_controller->Zf_loadModel("main_school_admin", "manage_school_hostels");

    $schoolSystemCode = $zf_actionData;
    
?>
    
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
           
            <!-- BEGIN PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                    <h3 class="page-title">Manage Hostels</h3>
                    <div class="page-breadcrumb breadcrumb">
                        <i class="fa fa-home"></i> <?php Zf_BreadCrumbs::zf_load_breadcrumbs(); ?>
                    </div>
                    <!-- END PAGE TITLE & BREADCRUMB-->
                </div>
            </div>
            <!-- END PAGE HEADER-->
            
            <div class="clearfix"></div>
            
            <!-- BEGIN INNER CONTENT -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-hospital-o"></i> Hostels Profile
                            </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            
                            <!--This is the start of the tabs-->
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 zozo_tab_wrapper">
                                    <?php
                                        $zf_widgetFolder = "indicators"; $zf_widgetFile = "hostel_setup_indicator.php";
                                        Zf_ApplicationWidgets::zf_load_widget($zf_widgetFolder, $zf_widgetFile);
                                    ?> 
                                    <div id="tabbed-nav">
                                        <ul>
                                            <li><a></i>Hostels overview</a></li>
                                            <li><a><i class="fa fa-plus-square"></i> Add  a hostel (Dormitory)</a></li>
                                        </ul>

                                        <div>
                                            <div> 
                                                <?php 
                                                    //FETCH HOSTEL DATA
                                                    $zf_controller->zf_targetModel->getSchoolHostels($schoolSystemCode);
                                                ?>
                                            </div>
                                            <div>
                                                <div class="tab-pane active">
                                                    <?php
                                                        //LOAD HOSTEL SETUP FORM
                                                        Zf_ApplicationWidgets::zf_load_widget("main_school_admin", "add_hostel_form.php");
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--This is the end of the tabs-->
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- END INNER CONTENT -->
            
        </div>
    </div>
    <!-- END CONTENT -->


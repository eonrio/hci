
<!-- header -->
<!-- /header -->
<!-- breadcrumbs -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Faveo | HELP DESK</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- faveo favicon -->
        <link href="http://localhost/obite/public/lb-faveo/media/images/favicon.ico" rel="shortcut icon">
               <!-- Bootstrap 4.3.1 -->
        <link href="http://localhost/obite/public/lb-faveo/css/bootstrap4.min.css" rel="stylesheet" type="text/css" />
    
        <!-- Font Awesome Icons -->
        <link href="http://localhost/obite/public/lb-faveo/css/font-awesome-5.min.css" rel="stylesheet" type="text/css" />
    
        <!-- Ionicons -->
        <link href="http://localhost/obite/public/lb-faveo/css/ionicons.min.css" rel="stylesheet"  type="text/css" />
    
        <!-- Theme style -->
        <link href="http://localhost/obite/public/lb-faveo/adminlte3/css/adminlte3.min.css" rel="stylesheet" type="text/css" />

        <link href="http://localhost/obite/public/lb-faveo/adminlte3/plugins/overlayScrollbars/overlayScrollbars.min.css" rel="stylesheet"  type="text/css" />

        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <link href="http://localhost/obite/public/lb-faveo/css/editor.css" rel="stylesheet" type="text/css"/>

        <link href="http://localhost/obite/public/lb-faveo/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet"  type="text/css"/>

        <link href="http://localhost/obite/public/lb-faveo/css/jquery.rating.css" rel="stylesheet" type="text/css" />
    
        <!-- Select2 -->
        <link href="http://localhost/obite/public/lb-faveo/plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />

        <link href="http://localhost/obite/public/css/close-button.css" rel="stylesheet" type="text/css" />
        <!--Daterangepicker-->
        <link rel="stylesheet" href="http://localhost/obite/public/lb-faveo/css/bootstrap-datetimepicker4.7.14.min.css" rel="stylesheet" type="text/css" />

        <link href="http://localhost/obite/public/lb-faveo/plugins/summernote/summernote-bs4.min.css" rel="stylesheet" type="text/css" />

        <link href="http://localhost/obite/public/lb-faveo/css/jquery.ui.css" rel="stylesheet" type="text/css" />
        <!-- Colorpicker -->

        <link href="http://localhost/obite/public/lb-faveo/plugins/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet" type="text/css" />    
        
         <script src="http://localhost/obite/public/lb-faveo/js/jquery-3.4.1.min.js" type="text/javascript"></script>
         <script src="http://localhost/obite/public/lb-faveo/js/jquery-migrate.js" type="text/javascript"></script>
          <script src="http://localhost/obite/public/lb-faveo/js/jquery.ui.js" type="text/javascript"></script>
        <script src="http://localhost/obite/public/lb-faveo/js/popper.min.js" type="text/javascript"></script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="http://localhost/obite/public/lb-faveo/js/bootstrap4.min.js" type="text/javascript"></script>
        
        <style type="text/css">

            .dataTables_wrapper table {display: table !important;}
        
            .product-description { overflow: visible !important;white-space: unset !important; }

            .noti_User { color: #6c757d !important; }

            .brand-image{float: none !important; margin-left: 0 !important;}

            .table { display: block;width: 100%;overflow-x: auto; }

            td{ word-break: break-all !important; }

            .table { width: 100% !important;display: table !important; }

            .list-group-item{ margin-bottom: auto !important; }

            .help-block { color : #dd4b39; }

             .text-red { color: red; }

             .nav-sidebar .nav-header:not(:first-of-type) {
                padding: 0.5rem;
            }

           .has-error label {
                color: #dd4b39 !important;
            }

            .has-error .form-control {
                border-color: #dd4b39 !important;
                box-shadow: none;
            }

            .btn.disabled, .btn[disabled], fieldset[disabled] .btn {
                box-shadow: none;
                cursor: not-allowed;
                opacity: 0.65;
                pointer-events: none;
            }
        </style>
    </head>
    <body class="skin-yellow sidebar-mini layout-fixed layout-navbar-fixed text-sm">

        
        <div class="wrapper">

            <nav class="main-header navbar navbar-expand navbar-dark navbar-orange">
                
                <!-- Sidebar toggle button-->
                <ul class="navbar-nav">
                  
                    <li class="nav-item">
                
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>

                
                <ul class="navbar-nav">

                                        <li class="nav-item d-none d-sm-inline-block">

                        <a id="dash"  href="http://localhost/obite/public/dashboard"  class="nav-link">
                            Agent panel
                        </a>
                    </li>
                                    </ul>

                <ul class="navbar-nav ml-auto">
                    
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="http://localhost/obite/public/admin" class="nav-link">Admin Panel</a>
                    </li>

                    <li class="nav-item dropdown notifications-menu">

    <a href="#" class="nav-link" data-toggle="dropdown">

        <i class="fas fa-sync"></i>

        <span class="badge badge-warning navbar-badge" id="count">0</span>
    </a>

    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

        <span class="dropdown-header">You have 0 update(s).</span>

        <ul class="menu list-unstyled">

                    </ul>
    </div>
</li>


                    <li class="nav-item dropdown notifications-menu" id="myDropdown">

                        <a href="#" class="nav-link" data-toggle="dropdown" onclick="myFunction()">
                            
                            <i class="fas fa-bell"></i>
                            
                            <span class="badge badge-warning navbar-badge" id="count">9</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right">
                            
                            <div id="alert11" class="alert alert-success alert-dismissable" style="display:none;">

                                <button id="dismiss11" type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                
                                <h4><i class="icon fas fa-check"></i>Alert!</h4>

                                <div id="message-success1"></div>
                            </div>

                            <ul class="products-list product-list-in-card pl-2 pr-2" style="height: 350px;overflow-y: scroll;">
                                
                                <li class="dropdown-header">You have 9 notifications.

                                    <a class="float-right" id="read-all" href="#">Mark all as read.</a>
                                </li>

                                                                
                                                                                                
                                <li class="item">
                                
                                    <div class="product-img">
                                        
                                        <img src="https://secure.gravatar.com/avatar/64e1b8d34f425d19e1ee2ea7236d3028?s=80&amp;r=g&amp;d=identicon" alt="Product Image" class="img-size-50 img-circle">
                                    </div>
                                    
                                    <div class="product-info">
                                      
                                        <span class="product-description">
                                            
                                            <a href="http://localhost/obite/public/thread/4" id='9' 
                                                class='noti_User'>
                                                A new ticket has been created with id "AAAA-0000-0003"
                                            </a>
                                        </span>
                                    </div>
                                </li>
                                                                                                
                                                                                                
                                <li class="item">
                                
                                    <div class="product-img">
                                        
                                        <img src="https://secure.gravatar.com/avatar/64e1b8d34f425d19e1ee2ea7236d3028?s=80&amp;r=g&amp;d=identicon" alt="Product Image" class="img-size-50 img-circle">
                                    </div>
                                    
                                    <div class="product-info">
                                      
                                        <span class="product-description">
                                            
                                            <a href="http://localhost/obite/public/thread/4" id='8' 
                                                class='noti_User'>
                                                You have a new reply on this ticket with id "AAAA-0000-0003"
                                            </a>
                                        </span>
                                    </div>
                                </li>
                                                                                                
                                                                                                
                                <li class="item">
                                
                                    <div class="product-img">
                                        
                                        <img src="https://secure.gravatar.com/avatar/64e1b8d34f425d19e1ee2ea7236d3028?s=80&amp;r=g&amp;d=identicon" alt="Product Image" class="img-size-50 img-circle">
                                    </div>
                                    
                                    <div class="product-info">
                                      
                                        <span class="product-description">
                                            
                                            <a href="http://localhost/obite/public/thread/6" id='7' 
                                                class='noti_User'>
                                                A new ticket has been created with id "AAAA-0000-0005"
                                            </a>
                                        </span>
                                    </div>
                                </li>
                                                                                                
                                                                                                
                                <li class="item">
                                
                                    <div class="product-img">
                                        
                                        <img src="https://secure.gravatar.com/avatar/64e1b8d34f425d19e1ee2ea7236d3028?s=80&amp;r=g&amp;d=identicon" alt="Product Image" class="img-size-50 img-circle">
                                    </div>
                                    
                                    <div class="product-info">
                                      
                                        <span class="product-description">
                                            
                                            <a href="http://localhost/obite/public/thread/5" id='6' 
                                                class='noti_User'>
                                                A new ticket has been created with id "AAAA-0000-0004"
                                            </a>
                                        </span>
                                    </div>
                                </li>
                                                                                                
                                                                                                
                                <li class="item">
                                
                                    <div class="product-img">
                                        
                                        <img src="https://secure.gravatar.com/avatar/64e1b8d34f425d19e1ee2ea7236d3028?s=80&amp;r=g&amp;d=identicon" alt="Product Image" class="img-size-50 img-circle">
                                    </div>
                                    
                                    <div class="product-info">
                                      
                                        <span class="product-description">
                                            
                                            <a href="http://localhost/obite/public/thread/4" id='5' 
                                                class='noti_User'>
                                                You have a new reply on this ticket with id "AAAA-0000-0003"
                                            </a>
                                        </span>
                                    </div>
                                </li>
                                                                                                
                                                                                                
                                <li class="item">
                                
                                    <div class="product-img">
                                        
                                        <img src="https://secure.gravatar.com/avatar/64e1b8d34f425d19e1ee2ea7236d3028?s=80&amp;r=g&amp;d=identicon" alt="Product Image" class="img-size-50 img-circle">
                                    </div>
                                    
                                    <div class="product-info">
                                      
                                        <span class="product-description">
                                            
                                            <a href="http://localhost/obite/public/thread/4" id='4' 
                                                class='noti_User'>
                                                A new ticket has been created with id "AAAA-0000-0003"
                                            </a>
                                        </span>
                                    </div>
                                </li>
                                                                                                
                                                                                                
                                <li class="item">
                                
                                    <div class="product-img">
                                        
                                        <img src="https://secure.gravatar.com/avatar/64e1b8d34f425d19e1ee2ea7236d3028?s=80&amp;r=g&amp;d=identicon" alt="Product Image" class="img-size-50 img-circle">
                                    </div>
                                    
                                    <div class="product-info">
                                      
                                        <span class="product-description">
                                            
                                            <a href="http://localhost/obite/public/thread/3" id='3' 
                                                class='noti_User'>
                                                A new ticket has been created with id "AAAA-0000-0002"
                                            </a>
                                        </span>
                                    </div>
                                </li>
                                                                                                
                                                                                                
                                <li class="item">
                                
                                    <div class="product-img">
                                        
                                        <img src="https://secure.gravatar.com/avatar/64e1b8d34f425d19e1ee2ea7236d3028?s=80&amp;r=g&amp;d=identicon" alt="Product Image" class="img-size-50 img-circle">
                                    </div>
                                    
                                    <div class="product-info">
                                      
                                        <span class="product-description">
                                            
                                            <a href="http://localhost/obite/public/thread/2" id='2' 
                                                class='noti_User'>
                                                A new ticket has been created with id "AAAA-0000-0001"
                                            </a>
                                        </span>
                                    </div>
                                </li>
                                                                                                
                                                                                                
                                <li class="item">
                                
                                    <div class="product-img">
                                        
                                        <img src="https://secure.gravatar.com/avatar/64e1b8d34f425d19e1ee2ea7236d3028?s=80&amp;r=g&amp;d=identicon" alt="Product Image" class="img-size-50 img-circle">
                                    </div>
                                    
                                    <div class="product-info">
                                      
                                        <span class="product-description">
                                            
                                            <a href="http://localhost/obite/public/thread/1" id='1' 
                                                class='noti_User'>
                                                A new ticket has been created with id "AAAA-0000-0000"
                                            </a>
                                        </span>
                                    </div>
                                </li>
                                                                                                                                
                                <li class="item" style="position: relative;top: -5px;">

                                    <img src="http://localhost/obite/public/lb-faveo/media/images/gifloader.gif" style="display: none;margin-left: 100px;" id="notification-loader" 
                                        class="img-size-50">
                                </li>
                                
                                <li class="dropdown-footer"><a class="text-dark" href="http://localhost/obite/public/notifications-list">View all</a>
                            </ul>
                        </div>
                    </li>    

                    <li class="nav-item dropdown">

                        
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            <img src="http://localhost/obite/public/lb-faveo/flags/en.png">
                        </a>
                       
                       <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right p-0" style="width: 290px;">
                           
                                                                                   <a href="#" class="dropdown-item" id="de" onclick="changeLang(this.id)"><img src="http://localhost/obite/public/lb-faveo/flags/de.png">&nbsp;German&nbsp;
                                                        (Deutsch)</a>
                                                                                    <a href="#" class="dropdown-item" id="en" onclick="changeLang(this.id)"><img src="http://localhost/obite/public/lb-faveo/flags/en.png">&nbsp;English&nbsp;
                                                        (English)</a>
                                                                                    <a href="#" class="dropdown-item" id="es" onclick="changeLang(this.id)"><img src="http://localhost/obite/public/lb-faveo/flags/es.png">&nbsp;Spanish&nbsp;
                                                        (Español)</a>
                                                                                    <a href="#" class="dropdown-item" id="fr" onclick="changeLang(this.id)"><img src="http://localhost/obite/public/lb-faveo/flags/fr.png">&nbsp;French&nbsp;
                                                        (français)</a>
                                                                                    <a href="#" class="dropdown-item" id="it" onclick="changeLang(this.id)"><img src="http://localhost/obite/public/lb-faveo/flags/it.png">&nbsp;Italian&nbsp;
                                                        (Italiano)</a>
                                                                                    <a href="#" class="dropdown-item" id="nl" onclick="changeLang(this.id)"><img src="http://localhost/obite/public/lb-faveo/flags/nl.png">&nbsp;Dutch&nbsp;
                                                        (Vlaams)</a>
                                                                                    <a href="#" class="dropdown-item" id="pt" onclick="changeLang(this.id)"><img src="http://localhost/obite/public/lb-faveo/flags/pt.png">&nbsp;Portuguese&nbsp;
                                                        (Português)</a>
                                                                                    <a href="#" class="dropdown-item" id="pt-br" onclick="changeLang(this.id)"><img src="http://localhost/obite/public/lb-faveo/flags/pt-br.png">&nbsp;Brazilian Portuguese&nbsp;
                                                        (Português)</a>
                                                                                    <a href="#" class="dropdown-item" id="ru" onclick="changeLang(this.id)"><img src="http://localhost/obite/public/lb-faveo/flags/ru.png">&nbsp;Russian&nbsp;
                                                        (Русский)</a>
                                                                                    <a href="#" class="dropdown-item" id="zh-hans" onclick="changeLang(this.id)"><img src="http://localhost/obite/public/lb-faveo/flags/zh-hans.png">&nbsp;Chinese&nbsp;
                                                        (中文 [Simplified])</a>
                                  
                       </div>
                    </li>

                    <li class="nav-item dropdown user-menu">

                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                                        <img src="https://secure.gravatar.com/avatar/64e1b8d34f425d19e1ee2ea7236d3028?s=80&amp;r=g&amp;d=identicon"class="user-image img-circle elevation-2" alt="User Image"/>
                            <span class="d-none d-md-inline">Demo Admin</span>
                                                    </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                            <!-- User image -->
                            <li class="user-header bg-secondary"  style="background-color:#343F44;">
                                                                <img src="https://secure.gravatar.com/avatar/64e1b8d34f425d19e1ee2ea7236d3028?s=80&amp;r=g&amp;d=identicon" class="img-circle elevation-2" alt="User Image" />

                                <p style="margin-top: 0px;">Demo Admin
                                    <small class="text-capitalize">admin</small>
                                </p>
                                                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                
                                <a href="http://localhost/obite/public/admin-profile" class="btn btn-primary btn-flat">Profile</a>
                                
                                <a href="http://localhost/obite/public/auth/logout" class="btn btn-danger btn-flat float-right">Sign out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar elevation-4 sidebar-dark-orange">

                <a href="http://www.faveohelpdesk.com" class="brand-link navbar-orange" style="text-align: center;">
                    <img src="http://localhost/obite/public/lb-faveo/media/images/logo.png" class="brand-image" alt="Company Log0">
                </a>

                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">

                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        
                       <div class="image">

                            <img id="sidebar-profile-img" src="https://secure.gravatar.com/avatar/64e1b8d34f425d19e1ee2ea7236d3028?s=80&amp;r=g&amp;d=identicon" alt="User Image" width="auto" height="auto" 
                                class="img-circle elevation-2" style="width: 30px;height: 30px;">
                        </div>

                       <div class="info">
                                                       <a class="d-block" href="http://localhost/obite/public/profile">Demo Admin</a>
                                                   </div>
                    </div>

                    <nav class="mt-2">
                        
                        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                                                        
                            <li class="nav-header">Settings</li>

                            <li  class="nav-item">

                                <a  href="#"  class="nav-link">
                                    <i class="nav-icon fas fa-curriculum"></i> 
                                    <p>Curriculum <i class="right fas fa-angle-left"></i></p> 
                                </a>

                                <ul  class="nav nav-treeview">

                                    <li class="nav-item">
                                        <a href="http://localhost/obite/public/assessments"  class="nav-link">
                                            <i class="nav-icon fas fa-assessments"></i>
                                            <p>Assessments</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="http://localhost/obite/public/graduate_attributes"  class="nav-link">
                                            <i class="nav-icon fas fa-graduate-attributes"></i>
                                            <p>Graduate attributes</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="http://localhost/obite/public/knowledge_areas"  class="nav-link">
                                            <i class="nav-icon fas fa-knowledge-areas"></i>
                                            <p>Knowledge areas</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="http://localhost/obite/public/programs"  class="nav-link">
                                            <i class="nav-icon fas fa-programs"></i>
                                            <p>Programs </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="http://localhost/obite/public/program_outcomes"  class="nav-link">
                                            <i class="nav-icon fas fa-program-outcomes"></i>
                                            <p>Program outcomes</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="http://localhost/obite/public/courses"  class="nav-link">
                                            <i class="nav-icon fas fa-courses"></i>
                                            <p>Courses</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li  class="nav-item">

                                <a  href="#"  class="nav-link">
                                    <i class="nav-icon fas fa-users"></i> 
                                    <p>Staff <i class="right fas fa-angle-left"></i></p> 
                                </a>

                                <ul  class="nav nav-treeview">

                                    <li class="nav-item">
                                        <a href="http://localhost/obite/public/agents"  class="nav-link">
                                            <i class="nav-icon fas fa-user "></i>
                                            <p>Agents</p>
                                        </a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="http://localhost/obite/public/departments"  class="nav-link">
                                            <i class="nav-icon fas fa-sitemap"></i>
                                            <p>Departments</p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="http://localhost/obite/public/teams"  class="nav-link">
                                            <i class="nav-icon fas fa-users"></i>
                                            <p>Teams</p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="http://localhost/obite/public/groups"  class="nav-link">
                                            <i class="nav-icon fas fa-object-group"></i>
                                            <p>Groups</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li  class="nav-item">
                                
                                <a href="#"  class="nav-link">
                                    <i class="nav-icon fas fa-envelope"></i>
                                    <p>Email <i class="fas fa-angle-left right"></i></p>
                                </a>

                                <ul  class="nav nav-treeview">

                                    <li class="nav-item">
                                        <a href="http://localhost/obite/public/emails"  class="nav-link">
                                            <i class="nav-icon fas fa-envelope"></i>
                                            <p>Emails</p>
                                        </a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="http://localhost/obite/public/banlist"  class="nav-link">
                                            <i class="nav-icon fas fa-ban"></i>
                                            <p>Ban lists</p>
                                        </a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="http://localhost/obite/public/template-sets"  class="nav-link">
                                            <i class="nav-icon fas fa-reply"></i>
                                            <p>Templates</p>
                                        </a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="http://localhost/obite/public/getemail"  class="nav-link">
                                            <i class="nav-icon fas fa-at"></i>
                                            <p>Email settings</p>
                                        </a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="http://localhost/obite/public/queue"  class="nav-link">
                                            <i class="nav-icon fas fa-upload"></i>
                                            <p>Queues</p>
                                        </a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="http://localhost/obite/public/getdiagno"  class="nav-link">
                                            <i class="nav-icon fas fa-plus"></i>
                                            <p>Diagnostics</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li  class="nav-item">
                                
                                <a href="#"  class="nav-link">
                                    <i class="nav-icon fas fa-cubes"></i>
                                    <p>Manage <i class="fas fa-angle-left right"></i></p>
                                </a>

                                <ul  class="nav nav-treeview">

                                    <li class="nav-item">
                                        <a href="http://localhost/obite/public/helptopic"  class="nav-link">
                                            <i class="nav-icon fas fa-file-alt"></i>
                                            <p>Help topics</p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="http://localhost/obite/public/sla"  class="nav-link">
                                            <i class="nav-icon fas fa-clock"></i>
                                            <p>SLA plans</p>
                                        </a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="http://localhost/obite/public/forms"  class="nav-link">
                                            <i class="nav-icon fas fa-file-alt"></i>
                                            <p>Forms</p>
                                        </a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="http://localhost/obite/public/workflow"  class="nav-link">
                                            <i class="nav-icon fas fa-sitemap"></i>
                                            <p>Workflow</p>
                                        </a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="http://localhost/obite/public/ticket/priority"  class="nav-link">
                                            <i class="nav-icon fas fa-asterisk"></i>
                                            <p>Priority</p>
                                        </a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="http://localhost/obite/public/url/settings"  class="nav-link">
                                            <i class="nav-icon fas fa-server"></i>
                                            <p>URL</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li  class="nav-item">
                                
                                <a href="#"  class="nav-link">
                                    <i class="nav-icon fas fa-ticket-alt"></i>
                                    <p>Tickets <i class="fas fa-angle-left right"></i></p>
                                </a>
                                
                                <ul  class="nav nav-treeview">

                                    <li class="nav-item">
                                        <a href="http://localhost/obite/public/getticket"  class="nav-link">
                                            <i class="nav-icon fas fa-file-alt"></i>
                                            <p>Ticket</p>
                                        </a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="http://localhost/obite/public/getresponder"  class="nav-link">
                                            <i class="nav-icon fas fa-reply-all"></i>
                                            <p>Auto response</p>
                                        </a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="http://localhost/obite/public/getalert"  class="nav-link">
                                            <i class="nav-icon fas fa-bell"></i>
                                            Alert and notices
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="http://localhost/obite/public/setting-status"  class="nav-link">
                                            <i class="nav-icon fas fa-plus-square"></i>
                                            <p>Status</p>
                                        </a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="http://localhost/obite/public/getratings"  class="nav-link">
                                            <i class="nav-icon fas fa-star"></i>
                                            <p>Ratings</p>
                                        </a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="http://localhost/obite/public/close-workflow"  class="nav-link">
                                            <i class="nav-icon fa fa-sitemap"></i>
                                            <p>Close ticket workflow</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li  class="nav-item">
                                
                                <a href="#"  class="nav-link">
                                    <i class="nav-icon fas fa-cog"></i>
                                    <p>Settings <i class="fas fa-angle-left right"></i></p>
                                </a>
                                
                                <ul  class="nav nav-treeview">

                                    <li class="nav-item">
                                        <a href="http://localhost/obite/public/getcompany"  class="nav-link">
                                            <i class="nav-icon fas fa-building"></i>
                                            <p>Company</p>
                                        </a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="http://localhost/obite/public/getsystem"  class="nav-link">
                                            <i class="nav-icon fas fa-laptop"></i>
                                            <p>System</p>
                                        </a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="http://localhost/obite/public/social/media"  class="nav-link">
                                            <i class="nav-icon fas fa-globe"></i> 
                                            <p>Social login</p>
                                        </a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="http://localhost/obite/public/languages"  class="nav-link">
                                            <i class="nav-icon fas fa-language"></i>
                                            <p>Language</p>
                                        </a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="http://localhost/obite/public/job-scheduler"  class="nav-link">
                                            <i class="nav-icon fas fa-hourglass"></i>
                                            <p>Cron</p>
                                        </a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="http://localhost/obite/public/security"  class="nav-link">
                                            <i class="nav-icon fas fa-lock"></i>
                                            <p>Security</p>
                                        </a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="http://localhost/obite/public/settings-notification"  class="nav-link">
                                            <i class="nav-icon fas fa-bell"></i>
                                            <p>Notifications</p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="http://localhost/obite/public/storage"  class="nav-link">
                                            <i class="nav-icon fas fa-save"></i>
                                            <p>Storage</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li  class="nav-item">
                                
                                <a href="#"  class="nav-link">
                                    <i class="nav-icon fas fa-heartbeat"></i>
                                    <p>Error logs and debugging <i class="fas fa-angle-left right"></i></p>
                                </a>
                                
                                <ul  class="nav nav-treeview">

                                    <li class="nav-item">
                                        <a href="http://localhost/obite/public/error-and-debugging-options"  class="nav-link">
                                            <i class="nav-icon fas fa-bug"></i> 
                                            <p>Debugging options</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li  class="nav-item">
                                
                                <a href="#"  class="nav-link">
                                    <i class="nav-icon fas fa-chart-pie"></i>
                                    <p>Widgets <i class="fas fa-angle-left right"></i></p>
                                </a>
                                
                                <ul  class="nav nav-treeview">
                                
                                    <li class="nav-item">
                                        <a href="http://localhost/obite/public/widgets"  class="nav-link">
                                            <i class="nav-icon fas fa-list-alt"></i> 
                                            <p>Widgets</p>
                                        </a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="http://localhost/obite/public/social-buttons"  class="nav-link">
                                            <i class="nav-icon fas fa-cubes"></i> 
                                            <p>Social</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="http://localhost/obite/public/plugins"  class="nav-link">
                                    <i class="nav-icon fas fa-plug"></i>
                                    <p>Plugin</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="http://localhost/obite/public/api"  class="nav-link">
                                    <i class="nav-icon fas fa-cogs"></i>
                                    <p>API</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="http://localhost/obite/public/logs" class="nav-link active"
 class="nav-link">
                                    <i class="nav-icon fas fa-lock"></i>
                                    <p>Logs</p>
                                </a>
                            </li>
                                                                                </ul>
                    </nav>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <div class="content-wrapper" style="padding-bottom: 1px;">
                
                <!-- Main content -->
                <section class="content">
                                
                    
                    <style>


    .stack {
        font-size: 0.85em;
        font-style: italic;
    }
    .date {
        min-width: 75px;
    }
    .text {
        word-break: break-all;
    }
    a.llv-active {
        z-index: 2;
        background-color: #f5f5f5;
        border-color: #777;
    }
    .list-group-item+.list-group-item {
        border-top-width: 1px !important;
    }
</style>
<div class="container-fluid">
    <div class="card card-light">
        <div class="card-header">
            <h3 class="card-title">System Logs</h3>
            <div class="card-tools">
                <a href="?dl=bGFyYXZlbC0yMDIxLTEwLTA0LmxvZw==" class="btn btn-primary btn-sm text-white"><span class="fas fa-download"></span> Download file</a>
                <a id="delete-log" href="?del=bGFyYXZlbC0yMDIxLTEwLTA0LmxvZw==" class="btn btn-danger btn-sm text-white"><span class="fas fa-trash"></span> Delete file</a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-2">
                    <div class="list-group">
                                                <a href="?l=bGFyYXZlbC0yMDIxLTEwLTA0LmxvZw==" class="list-group-item  llv-active ">
                            laravel-2021-10-04.log
                        </a>
                                                <a href="?l=bGFyYXZlbC0yMDIxLTEwLTAzLmxvZw==" class="list-group-item ">
                            laravel-2021-10-03.log
                        </a>
                                                <a href="?l=bGFyYXZlbC0yMDIxLTA5LTMwLmxvZw==" class="list-group-item ">
                            laravel-2021-09-30.log
                        </a>
                                                <a href="?l=bGFyYXZlbC0yMDIxLTA5LTI5LmxvZw==" class="list-group-item ">
                            laravel-2021-09-29.log
                        </a>
                                                <a href="?l=bGFyYXZlbC0yMDIxLTA5LTI4LmxvZw==" class="list-group-item ">
                            laravel-2021-09-28.log
                        </a>
                                                <a href="?l=bGFyYXZlbC0yMDIxLTA5LTI3LmxvZw==" class="list-group-item ">
                            laravel-2021-09-27.log
                        </a>
                                                <a href="?l=bGFyYXZlbC0yMDIxLTA5LTI2LmxvZw==" class="list-group-item ">
                            laravel-2021-09-26.log
                        </a>
                                                <a href="?l=Z2VvaXAubG9n" class="list-group-item ">
                            geoip.log
                        </a>
                                            </div>
                </div>
                <div class="col-md-10 table-container">
                                        <table id="table-log" class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width:10%">Level</th>
                                <th style="width:12%">Context</th>
                                <th>Date</th>
                                <th>Content</th>
                            </tr>
                        </thead>
                        <tbody>

                                                        <tr>
                                <td class="text-danger" style="width: 90px;"><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> &nbsp;Error</td>
                                <td class="text">Development</td>
                                <td class="date">04/10/2021 14:26:20</td>
                                <td class="text">
                                     <a class="pull-right expand btn btn-default btn-xs" data-display="stack0"><span class="glyphicon glyphicon-search"></span></a>                                    Undefined variable: courses (View: C:\xampp\htdocs\obite\resources\views\themes\default1\agent\layout\agent.blade.php) (View: C:\xampp\htdocs\obite\resources\views\themes\default1\agent\layout\agent.blade.php) {&quot;userId&quot;:2,&quot;email&quot;:&quot;demo_agent@gmail.com&quot;,&quot;exception&quot;:&quot;[object] (ErrorException(code: 0): Undefined variable: courses (View: C:\\xampp\\htdocs\\obite\
esources\\views\\themes\\default1\\agent\\layout\\agent.blade.php) (View: C:\\xampp\\htdocs\\obite\
esources\\views\\themes\\default1\\agent\\layout\\agent.blade.php) at C:\\xampp\\htdocs\\obite\\storage\\framework\\views\\80303f7216420fd269bafd19459677c34bb71e59.php:419, ErrorException(code: 0): Undefined variable: courses (View: C:\\xampp\\htdocs\\obite\
esources\\views\\themes\\default1\\agent\\layout\\agent.blade.php) at C:\\xampp\\htdocs\\obite\\storage\\framework\\views\\80303f7216420fd269bafd19459677c34bb71e59.php:419, ErrorException(code: 0): Undefined variable: courses at C:\\xampp\\htdocs\\obite\\storage\\framework\\views\\80303f7216420fd269bafd19459677c34bb71e59.php:419)
                                                                         <div class="stack" id="stack0" style="display: none; white-space: pre-wrap;">[stacktrace]
vcxvxv
&quot;}</div>                                </td>
                            </tr>
                                                        <tr>
                                <td class="text-danger" style="width: 90px;"><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> &nbsp;Error</td>
                                <td class="text">Development</td>
                                <td class="date">04/10/2021 14:03:14</td>
                                <td class="text">
                                     <a class="pull-right expand btn btn-default btn-xs" data-display="stack1"><span class="glyphicon glyphicon-search"></span></a>                                    Cannot end a section without first starting one. (View: C:\xampp\htdocs\obite\resources\views\themes\default1\agent\obe\courses\index.blade.php) {&quot;userId&quot;:2,&quot;email&quot;:&quot;demo_agent@gmail.com&quot;,&quot;exception&quot;:&quot;[object] (ErrorException(code: 0): Cannot end a section without first starting one. (View: C:\\xampp\\htdocs\\obite\
esources\\views\\themes\\default1\\agent\\obe\\courses\\index.blade.php) at C:\\xampp\\htdocs\\obite\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Concerns\\ManagesLayouts.php:85, InvalidArgumentException(code: 0): Cannot end a section without first starting one. at C:\\xampp\\htdocs\\obite\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Concerns\\ManagesLayouts.php:85)
                                                                         <div class="stack" id="stack1" style="display: none; white-space: pre-wrap;">[stacktrace]
gdfgd
&quot;}</div>                                </td>
                            </tr>
                                                        <tr>
                                <td class="text-danger" style="width: 90px;"><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> &nbsp;Error</td>
                                <td class="text">Development</td>
                                <td class="date">04/10/2021 13:40:48</td>
                                <td class="text">
                                     <a class="pull-right expand btn btn-default btn-xs" data-display="stack2"><span class="glyphicon glyphicon-search"></span></a>                                    syntax error, unexpected &#039;;&#039;, expecting &#039;,&#039; or &#039;)&#039; (View: C:\xampp\htdocs\obite\resources\views\themes\default1\agent\obe\courses\show.blade.php) {&quot;userId&quot;:2,&quot;email&quot;:&quot;demo_agent@gmail.com&quot;,&quot;exception&quot;:&quot;[object] (ErrorException(code: 0): syntax error, unexpected &#039;;&#039;, expecting &#039;,&#039; or &#039;)&#039; (View: C:\\xampp\\htdocs\\obite\
esources\\views\\themes\\default1\\agent\\obe\\courses\\show.blade.php) at C:\\xampp\\htdocs\\obite\\storage\\framework\\views\\3ae025a1b8631c8086ee12222c185eba371d9208.php:133, Symfony\\Component\\Debug\\Exception\\FatalThrowableError(code: 0): syntax error, unexpected &#039;;&#039;, expecting &#039;,&#039; or &#039;)&#039; at C:\\xampp\\htdocs\\obite\\storage\\framework\\views\\3ae025a1b8631c8086ee12222c185eba371d9208.php:133)
                                                                         <div class="stack" id="stack2" style="display: none; white-space: pre-wrap;">[stacktrace]
fdsfs
&quot;}</div>                                </td>
                            </tr>
                                                        <tr>
                                <td class="text-danger" style="width: 90px;"><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> &nbsp;Error</td>
                                <td class="text">Development</td>
                                <td class="date">04/10/2021 13:07:14</td>
                                <td class="text">
                                     <a class="pull-right expand btn btn-default btn-xs" data-display="stack3"><span class="glyphicon glyphicon-search"></span></a>                                    syntax error, unexpected &#039;}&#039;, expecting &#039;;&#039; {&quot;exception&quot;:&quot;[object] (Symfony\\Component\\Debug\\Exception\\FatalThrowableError(code: 0): syntax error, unexpected &#039;}&#039;, expecting &#039;;&#039; at C:\\xampp\\htdocs\\obite\\app\\Http\\Controllers\\Agent\\obe\\CourseController.php:85)
                                                                         <div class="stack" id="stack3" style="display: none; white-space: pre-wrap;">[stacktrace]
fsdf
&quot;}</div>                                </td>
                            </tr>
                                                        <tr>
                                <td class="text-danger" style="width: 90px;"><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> &nbsp;Error</td>
                                <td class="text">Development</td>
                                <td class="date">04/10/2021 13:07:13</td>
                                <td class="text">
                                     <a class="pull-right expand btn btn-default btn-xs" data-display="stack4"><span class="glyphicon glyphicon-search"></span></a>                                    syntax error, unexpected &#039;}&#039;, expecting &#039;;&#039; {&quot;exception&quot;:&quot;[object] (Symfony\\Component\\Debug\\Exception\\FatalThrowableError(code: 0): syntax error, unexpected &#039;}&#039;, expecting &#039;;&#039; at C:\\xampp\\htdocs\\obite\\app\\Http\\Controllers\\Agent\\obe\\CourseController.php:85)
                                                                         <div class="stack" id="stack4" style="display: none; white-space: pre-wrap;">[stacktrace]
dfsf
&quot;}</div>                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                                    </div>
            </div>
        </div>
    </div>
</div>


                </section><!-- /.content -->
                <!-- /.content-wrapper -->
            </div>

            <footer class="main-footer">

                <div class="float-right d-none d-sm-block">
                     
                    <span style="font-weight: 500">Version</span> Community 1.11.0
                </div>

                <span style="font-weight: 500">Copyright &copy; 2021  <a href="" target="_blank"></a>.</span> All rights reserved. Powered by <a href="http://www.faveohelpdesk.com/" target="_blank">Faveo</a>
            </footer>
        </div><!-- ./wrapper -->

        <script src="http://localhost/obite/public/lb-faveo/adminlte3/js/adminlte3.min.js" type="text/javascript"></script>
        <!-- Slimscroll -->
        <script src="http://localhost/obite/public/lb-faveo/adminlte3/plugins/overlayScrollbars/overlayScrollbars.min.js" type="text/javascript"></script>
       
        <script src="http://localhost/obite/public/lb-faveo/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>

        <script src="http://localhost/obite/public/lb-faveo/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>

        <script src="http://localhost/obite/public/lb-faveo/js/jquery.rating.pack.js" type="text/javascript"></script>

        <script src="http://localhost/obite/public/lb-faveo/plugins/select2/select2.full.min.js" type="text/javascript"></script>

        <script src="http://localhost/obite/public/lb-faveo/plugins/moment/moment.js" type="text/javascript"></script>

        <!-- full calendar-->
        <script src="http://localhost/obite/public/lb-faveo/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>

        <script src="http://localhost/obite/public/lb-faveo/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>

        <script src="http://localhost/obite/public/lb-faveo/js/bootstrap-datetimepicker4.7.14.min.js" type="text/javascript"></script>

        <script src="http://localhost/obite/public/lb-faveo/plugins/summernote/summernote-bs4.min.js" type="text/javascript"></script>

        <script src="http://localhost/obite/public/lb-faveo/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- Colorpicker -->
        <script src="http://localhost/obite/public/lb-faveo/plugins/colorpicker/bootstrap-colorpicker.min.js" ></script>

                    <script>
            $(function () {
            //Add text editor
                $("textarea").summernote({
                    height: 300,
                    tabsize: 2,
                    toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']]
                  ]
                  });
            });
            </script>
            <script>
        $('#read-all').click(function () {

            var id2 = 1;
            var dataString = 'id=' + id2;
            $.ajax
                    ({
                        type: "POST",
                        url: "http://localhost/obite/public/mark-all-read" + "/" + id2,
                        data: dataString,
                        cache: false,
                        beforeSend: function () {
                            $('#myDropdown').on('hide.bs.dropdown', function () {
                                return false;
                            });
                            $("#refreshNote").hide();
                            $("#notification-loader").show();
                        },
                        success: function (response) {
                            $("#refreshNote").load("/obite/public/logs  #refreshNote");
                            $("#notification-loader").hide();
                            $('#myDropdown').removeClass('open');
                        }
                    });
        });</script>

    <!-- CK Editor -->
    <script src="http://localhost/obite/public/lb-faveo/plugins/filebrowser/plugin.js"></script>
    <script src="http://localhost/obite/public/lb-faveo/js/languagechanger.js" type="text/javascript"></script>
    <script>
$(document).ready(function () {
    $('#table-log').DataTable({
        "order": [1, 'desc'],
        "stateSave": true,
        "stateSaveCallback": function (settings, data) {
            window.localStorage.setItem("datatable", JSON.stringify(data));
        },
        "stateLoadCallback": function (settings) {
            var data = JSON.parse(window.localStorage.getItem("datatable"));
            if (data)
                data.start = 0;
            return data;
        }
    });
    $('.table-container').on('click', '.expand', function () {
        $('#' + $(this).data('display')).toggle();
    });
    $('#delete-log').click(function () {
        return confirm('Are you sure?');
    });
});
</script>
<link rel='stylesheet' type='text/css' property='stylesheet' href='//localhost/obite/public/_debugbar/assets/stylesheets?v=1615822910'><script type='text/javascript' src='//localhost/obite/public/_debugbar/assets/javascript?v=1615822910'></script><script type="text/javascript">jQuery.noConflict(true);</script>
<script> Sfdump = window.Sfdump || (function (doc) { var refStyle = doc.createElement('style'), rxEsc = /([.*+?^${}()|\[\]\/\\])/g, idRx = /\bsf-dump-\d+-ref[012]\w+\b/, keyHint = 0 <= navigator.platform.toUpperCase().indexOf('MAC') ? 'Cmd' : 'Ctrl', addEventListener = function (e, n, cb) { e.addEventListener(n, cb, false); }; (doc.documentElement.firstElementChild || doc.documentElement.children[0]).appendChild(refStyle); if (!doc.addEventListener) { addEventListener = function (element, eventName, callback) { element.attachEvent('on' + eventName, function (e) { e.preventDefault = function () {e.returnValue = false;}; e.target = e.srcElement; callback(e); }); }; } function toggle(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className, arrow, newClass; if (/\bsf-dump-compact\b/.test(oldClass)) { arrow = '▼'; newClass = 'sf-dump-expanded'; } else if (/\bsf-dump-expanded\b/.test(oldClass)) { arrow = '▶'; newClass = 'sf-dump-compact'; } else { return false; } if (doc.createEvent && s.dispatchEvent) { var event = doc.createEvent('Event'); event.initEvent('sf-dump-expanded' === newClass ? 'sfbeforedumpexpand' : 'sfbeforedumpcollapse', true, false); s.dispatchEvent(event); } a.lastChild.innerHTML = arrow; s.className = s.className.replace(/\bsf-dump-(compact|expanded)\b/, newClass); if (recursive) { try { a = s.querySelectorAll('.'+oldClass); for (s = 0; s < a.length; ++s) { if (-1 == a[s].className.indexOf(newClass)) { a[s].className = newClass; a[s].previousSibling.lastChild.innerHTML = arrow; } } } catch (e) { } } return true; }; function collapse(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className; if (/\bsf-dump-expanded\b/.test(oldClass)) { toggle(a, recursive); return true; } return false; }; function expand(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className; if (/\bsf-dump-compact\b/.test(oldClass)) { toggle(a, recursive); return true; } return false; }; function collapseAll(root) { var a = root.querySelector('a.sf-dump-toggle'); if (a) { collapse(a, true); expand(a); return true; } return false; } function reveal(node) { var previous, parents = []; while ((node = node.parentNode || {}) && (previous = node.previousSibling) && 'A' === previous.tagName) { parents.push(previous); } if (0 !== parents.length) { parents.forEach(function (parent) { expand(parent); }); return true; } return false; } function highlight(root, activeNode, nodes) { resetHighlightedNodes(root); Array.from(nodes||[]).forEach(function (node) { if (!/\bsf-dump-highlight\b/.test(node.className)) { node.className = node.className + ' sf-dump-highlight'; } }); if (!/\bsf-dump-highlight-active\b/.test(activeNode.className)) { activeNode.className = activeNode.className + ' sf-dump-highlight-active'; } } function resetHighlightedNodes(root) { Array.from(root.querySelectorAll('.sf-dump-str, .sf-dump-key, .sf-dump-public, .sf-dump-protected, .sf-dump-private')).forEach(function (strNode) { strNode.className = strNode.className.replace(/\bsf-dump-highlight\b/, ''); strNode.className = strNode.className.replace(/\bsf-dump-highlight-active\b/, ''); }); } return function (root, x) { root = doc.getElementById(root); var indentRx = new RegExp('^('+(root.getAttribute('data-indent-pad') || ' ').replace(rxEsc, '\\$1')+')+', 'm'), options = {"maxDepth":1,"maxStringLength":160,"fileLinkFormat":false}, elt = root.getElementsByTagName('A'), len = elt.length, i = 0, s, h, t = []; while (i < len) t.push(elt[i++]); for (i in x) { options[i] = x[i]; } function a(e, f) { addEventListener(root, e, function (e) { if ('A' == e.target.tagName) { f(e.target, e); } else if ('A' == e.target.parentNode.tagName) { f(e.target.parentNode, e); } else if (e.target.nextElementSibling && 'A' == e.target.nextElementSibling.tagName) { f(e.target.nextElementSibling, e, true); } }); }; function isCtrlKey(e) { return e.ctrlKey || e.metaKey; } function xpathString(str) { var parts = str.match(/[^'"]+|['"]/g).map(function (part) { if ("'" == part) { return '"\'"'; } if ('"' == part) { return "'\"'"; } return "'" + part + "'"; }); return "concat(" + parts.join(",") + ", '')"; } function xpathHasClass(className) { return "contains(concat(' ', normalize-space(@class), ' '), ' " + className +" ')"; } addEventListener(root, 'mouseover', function (e) { if ('' != refStyle.innerHTML) { refStyle.innerHTML = ''; } }); a('mouseover', function (a, e, c) { if (c) { e.target.style.cursor = "pointer"; } else if (a = idRx.exec(a.className)) { try { refStyle.innerHTML = '.phpdebugbar pre.sf-dump .'+a[0]+'{background-color: #B729D9; color: #FFF !important; border-radius: 2px}'; } catch (e) { } } }); a('click', function (a, e, c) { if (/\bsf-dump-toggle\b/.test(a.className)) { e.preventDefault(); if (!toggle(a, isCtrlKey(e))) { var r = doc.getElementById(a.getAttribute('href').substr(1)), s = r.previousSibling, f = r.parentNode, t = a.parentNode; t.replaceChild(r, a); f.replaceChild(a, s); t.insertBefore(s, r); f = f.firstChild.nodeValue.match(indentRx); t = t.firstChild.nodeValue.match(indentRx); if (f && t && f[0] !== t[0]) { r.innerHTML = r.innerHTML.replace(new RegExp('^'+f[0].replace(rxEsc, '\\$1'), 'mg'), t[0]); } if (/\bsf-dump-compact\b/.test(r.className)) { toggle(s, isCtrlKey(e)); } } if (c) { } else if (doc.getSelection) { try { doc.getSelection().removeAllRanges(); } catch (e) { doc.getSelection().empty(); } } else { doc.selection.empty(); } } else if (/\bsf-dump-str-toggle\b/.test(a.className)) { e.preventDefault(); e = a.parentNode.parentNode; e.className = e.className.replace(/\bsf-dump-str-(expand|collapse)\b/, a.parentNode.className); } }); elt = root.getElementsByTagName('SAMP'); len = elt.length; i = 0; while (i < len) t.push(elt[i++]); len = t.length; for (i = 0; i < len; ++i) { elt = t[i]; if ('SAMP' == elt.tagName) { a = elt.previousSibling || {}; if ('A' != a.tagName) { a = doc.createElement('A'); a.className = 'sf-dump-ref'; elt.parentNode.insertBefore(a, elt); } else { a.innerHTML += ' '; } a.title = (a.title ? a.title+'\n[' : '[')+keyHint+'+click] Expand all children'; a.innerHTML += '<span>▼</span>'; a.className += ' sf-dump-toggle'; x = 1; if ('sf-dump' != elt.parentNode.className) { x += elt.parentNode.getAttribute('data-depth')/1; } elt.setAttribute('data-depth', x); var className = elt.className; elt.className = 'sf-dump-expanded'; if (className ? 'sf-dump-expanded' !== className : (x > options.maxDepth)) { toggle(a); } } else if (/\bsf-dump-ref\b/.test(elt.className) && (a = elt.getAttribute('href'))) { a = a.substr(1); elt.className += ' '+a; if (/[\[{]$/.test(elt.previousSibling.nodeValue)) { a = a != elt.nextSibling.id && doc.getElementById(a); try { s = a.nextSibling; elt.appendChild(a); s.parentNode.insertBefore(a, s); if (/^[@#]/.test(elt.innerHTML)) { elt.innerHTML += ' <span>▶</span>'; } else { elt.innerHTML = '<span>▶</span>'; elt.className = 'sf-dump-ref'; } elt.className += ' sf-dump-toggle'; } catch (e) { if ('&' == elt.innerHTML.charAt(0)) { elt.innerHTML = '…'; elt.className = 'sf-dump-ref'; } } } } } if (doc.evaluate && Array.from && root.children.length > 1) { root.setAttribute('tabindex', 0); SearchState = function () { this.nodes = []; this.idx = 0; }; SearchState.prototype = { next: function () { if (this.isEmpty()) { return this.current(); } this.idx = this.idx < (this.nodes.length - 1) ? this.idx + 1 : 0; return this.current(); }, previous: function () { if (this.isEmpty()) { return this.current(); } this.idx = this.idx > 0 ? this.idx - 1 : (this.nodes.length - 1); return this.current(); }, isEmpty: function () { return 0 === this.count(); }, current: function () { if (this.isEmpty()) { return null; } return this.nodes[this.idx]; }, reset: function () { this.nodes = []; this.idx = 0; }, count: function () { return this.nodes.length; }, }; function showCurrent(state) { var currentNode = state.current(); if (currentNode) { reveal(currentNode); highlight(root, currentNode, state.nodes); if ('scrollIntoView' in currentNode) { currentNode.scrollIntoView(); } } counter.textContent = (state.isEmpty() ? 0 : state.idx + 1) + ' of ' + state.count(); } var search = doc.createElement('div'); search.className = 'sf-dump-search-wrapper sf-dump-search-hidden'; search.innerHTML = ' <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0<\/span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"> <path d="M1683 1331l-166 165q-19 19-45 19t-45-19l-531-531-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"\/> <\/svg> <\/button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"> <path d="M1683 808l-742 741q-19 19-45 19t-45-19l-742-741q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"\/> <\/svg> <\/button> '; root.insertBefore(search, root.firstChild); var state = new SearchState(); var searchInput = search.querySelector('.sf-dump-search-input'); var counter = search.querySelector('.sf-dump-search-count'); var searchInputTimer = 0; var previousSearchQuery = ''; addEventListener(searchInput, 'keyup', function (e) { var searchQuery = e.target.value; /* Don't perform anything if the pressed key didn't change the query */ if (searchQuery === previousSearchQuery) { return; } previousSearchQuery = searchQuery; clearTimeout(searchInputTimer); searchInputTimer = setTimeout(function () { state.reset(); collapseAll(root); resetHighlightedNodes(root); if ('' === searchQuery) { counter.textContent = '0 of 0'; return; } var classMatches = [ "sf-dump-str", "sf-dump-key", "sf-dump-public", "sf-dump-protected", "sf-dump-private", ].map(xpathHasClass).join(' or '); var xpathResult = doc.evaluate('.//span[' + classMatches + '][contains(translate(child::text(), ' + xpathString(searchQuery.toUpperCase()) + ', ' + xpathString(searchQuery.toLowerCase()) + '), ' + xpathString(searchQuery.toLowerCase()) + ')]', root, null, XPathResult.ORDERED_NODE_ITERATOR_TYPE, null); while (node = xpathResult.iterateNext()) state.nodes.push(node); showCurrent(state); }, 400); }); Array.from(search.querySelectorAll('.sf-dump-search-input-next, .sf-dump-search-input-previous')).forEach(function (btn) { addEventListener(btn, 'click', function (e) { e.preventDefault(); -1 !== e.target.className.indexOf('next') ? state.next() : state.previous(); searchInput.focus(); collapseAll(root); showCurrent(state); }) }); addEventListener(root, 'keydown', function (e) { var isSearchActive = !/\bsf-dump-search-hidden\b/.test(search.className); if ((114 === e.keyCode && !isSearchActive) || (isCtrlKey(e) && 70 === e.keyCode)) { /* F3 or CMD/CTRL + F */ e.preventDefault(); search.className = search.className.replace(/\bsf-dump-search-hidden\b/, ''); searchInput.focus(); } else if (isSearchActive) { if (27 === e.keyCode) { /* ESC key */ search.className += ' sf-dump-search-hidden'; e.preventDefault(); resetHighlightedNodes(root); searchInput.value = ''; } else if ( (isCtrlKey(e) && 71 === e.keyCode) /* CMD/CTRL + G */ || 13 === e.keyCode /* Enter */ || 114 === e.keyCode /* F3 */ ) { e.preventDefault(); e.shiftKey ? state.previous() : state.next(); collapseAll(root); showCurrent(state); } } }); } if (0 >= options.maxStringLength) { return; } try { elt = root.querySelectorAll('.sf-dump-str'); len = elt.length; i = 0; t = []; while (i < len) t.push(elt[i++]); len = t.length; for (i = 0; i < len; ++i) { elt = t[i]; s = elt.innerText || elt.textContent; x = s.length - options.maxStringLength; if (0 < x) { h = elt.innerHTML; elt[elt.innerText ? 'innerText' : 'textContent'] = s.substring(0, options.maxStringLength); elt.className += ' sf-dump-str-collapse'; elt.innerHTML = '<span class=sf-dump-str-collapse>'+h+'<a class="sf-dump-ref sf-dump-str-toggle" title="Collapse"> ◀</a></span>'+ '<span class=sf-dump-str-expand>'+elt.innerHTML+'<a class="sf-dump-ref sf-dump-str-toggle" title="'+x+' remaining characters"> ▶</a></span>'; } } } catch (e) { } }; })(document); </script><style> .phpdebugbar pre.sf-dump { display: block; white-space: pre; padding: 5px; } .phpdebugbar pre.sf-dump:after { content: ""; visibility: hidden; display: block; height: 0; clear: both; } .phpdebugbar pre.sf-dump span { display: inline; } .phpdebugbar pre.sf-dump .sf-dump-compact { display: none; } .phpdebugbar pre.sf-dump abbr { text-decoration: none; border: none; cursor: help; } .phpdebugbar pre.sf-dump a { text-decoration: none; cursor: pointer; border: 0; outline: none; color: inherit; } .phpdebugbar pre.sf-dump .sf-dump-ellipsis { display: inline-block; overflow: visible; text-overflow: ellipsis; max-width: 5em; white-space: nowrap; overflow: hidden; vertical-align: top; } .phpdebugbar pre.sf-dump .sf-dump-ellipsis+.sf-dump-ellipsis { max-width: none; } .phpdebugbar pre.sf-dump code { display:inline; padding:0; background:none; } .sf-dump-str-collapse .sf-dump-str-collapse { display: none; } .sf-dump-str-expand .sf-dump-str-expand { display: none; } .sf-dump-public.sf-dump-highlight, .sf-dump-protected.sf-dump-highlight, .sf-dump-private.sf-dump-highlight, .sf-dump-str.sf-dump-highlight, .sf-dump-key.sf-dump-highlight { background: rgba(111, 172, 204, 0.3); border: 1px solid #7DA0B1; border-radius: 3px; } .sf-dump-public.sf-dump-highlight-active, .sf-dump-protected.sf-dump-highlight-active, .sf-dump-private.sf-dump-highlight-active, .sf-dump-str.sf-dump-highlight-active, .sf-dump-key.sf-dump-highlight-active { background: rgba(253, 175, 0, 0.4); border: 1px solid #ffa500; border-radius: 3px; } .phpdebugbar pre.sf-dump .sf-dump-search-hidden { display: none; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper { float: right; font-size: 0; white-space: nowrap; max-width: 100%; text-align: right; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > * { vertical-align: top; box-sizing: border-box; height: 21px; font-weight: normal; border-radius: 0; background: #FFF; color: #757575; border: 1px solid #BBB; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > input.sf-dump-search-input { padding: 3px; height: 21px; font-size: 12px; border-right: none; width: 140px; border-top-left-radius: 3px; border-bottom-left-radius: 3px; color: #000; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-next, .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-previous { background: #F2F2F2; outline: none; border-left: none; font-size: 0; line-height: 0; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-next { border-top-right-radius: 3px; border-bottom-right-radius: 3px; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-next > svg, .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-previous > svg { pointer-events: none; width: 12px; height: 12px; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-count { display: inline-block; padding: 0 5px; margin: 0; border-left: none; line-height: 21px; font-size: 12px; }.phpdebugbar pre.sf-dump, .phpdebugbar pre.sf-dump .sf-dump-default{word-wrap: break-word; white-space: pre-wrap; word-break: normal}.phpdebugbar pre.sf-dump .sf-dump-num{font-weight:bold; color:#1299DA}.phpdebugbar pre.sf-dump .sf-dump-const{font-weight:bold}.phpdebugbar pre.sf-dump .sf-dump-str{font-weight:bold; color:#3A9B26}.phpdebugbar pre.sf-dump .sf-dump-note{color:#1299DA}.phpdebugbar pre.sf-dump .sf-dump-ref{color:#7B7B7B}.phpdebugbar pre.sf-dump .sf-dump-public{color:#000000}.phpdebugbar pre.sf-dump .sf-dump-protected{color:#000000}.phpdebugbar pre.sf-dump .sf-dump-private{color:#000000}.phpdebugbar pre.sf-dump .sf-dump-meta{color:#B729D9}.phpdebugbar pre.sf-dump .sf-dump-key{color:#3A9B26}.phpdebugbar pre.sf-dump .sf-dump-index{color:#1299DA}.phpdebugbar pre.sf-dump .sf-dump-ellipsis{color:#A0A000}.phpdebugbar pre.sf-dump .sf-dump-ns{user-select:none;}</style>
<script type="text/javascript">
var phpdebugbar = new PhpDebugBar.DebugBar();
phpdebugbar.addIndicator("php_version", new PhpDebugBar.DebugBar.Indicator({"icon":"code","tooltip":"Version"}), "right");
phpdebugbar.addTab("messages", new PhpDebugBar.DebugBar.Tab({"icon":"list-alt","title":"Messages", "widget": new PhpDebugBar.Widgets.MessagesWidget()}));
phpdebugbar.addIndicator("time", new PhpDebugBar.DebugBar.Indicator({"icon":"clock-o","tooltip":"Request Duration"}), "right");
phpdebugbar.addTab("timeline", new PhpDebugBar.DebugBar.Tab({"icon":"tasks","title":"Timeline", "widget": new PhpDebugBar.Widgets.TimelineWidget()}));
phpdebugbar.addIndicator("memory", new PhpDebugBar.DebugBar.Indicator({"icon":"cogs","tooltip":"Memory Usage"}), "right");
phpdebugbar.addTab("exceptions", new PhpDebugBar.DebugBar.Tab({"icon":"bug","title":"Exceptions", "widget": new PhpDebugBar.Widgets.ExceptionsWidget()}));
phpdebugbar.addTab("views", new PhpDebugBar.DebugBar.Tab({"icon":"leaf","title":"Views", "widget": new PhpDebugBar.Widgets.TemplatesWidget()}));
phpdebugbar.addTab("route", new PhpDebugBar.DebugBar.Tab({"icon":"share","title":"Route", "widget": new PhpDebugBar.Widgets.VariableListWidget()}));
phpdebugbar.addIndicator("currentroute", new PhpDebugBar.DebugBar.Indicator({"icon":"share","tooltip":"Route"}), "right");
phpdebugbar.addTab("queries", new PhpDebugBar.DebugBar.Tab({"icon":"database","title":"Queries", "widget": new PhpDebugBar.Widgets.LaravelSQLQueriesWidget()}));
phpdebugbar.addTab("emails", new PhpDebugBar.DebugBar.Tab({"icon":"inbox","title":"Mails", "widget": new PhpDebugBar.Widgets.MailsWidget()}));
phpdebugbar.addTab("session", new PhpDebugBar.DebugBar.Tab({"icon":"archive","title":"Session", "widget": new PhpDebugBar.Widgets.VariableListWidget()}));
phpdebugbar.addTab("request", new PhpDebugBar.DebugBar.Tab({"icon":"tags","title":"Request", "widget": new PhpDebugBar.Widgets.VariableListWidget()}));
phpdebugbar.setDataMap({
"php_version": ["php.version", ],
"messages": ["messages.messages", []],
"messages:badge": ["messages.count", null],
"time": ["time.duration_str", '0ms'],
"timeline": ["time", {}],
"memory": ["memory.peak_usage_str", '0B'],
"exceptions": ["exceptions.exceptions", []],
"exceptions:badge": ["exceptions.count", null],
"views": ["views", []],
"views:badge": ["views.nb_templates", 0],
"route": ["route", {}],
"currentroute": ["route.uri", ],
"queries": ["queries", []],
"queries:badge": ["queries.nb_statements", 0],
"emails": ["swiftmailer_mails.mails", []],
"emails:badge": ["swiftmailer_mails.count", null],
"session": ["session", {}],
"request": ["request", {}]
});
phpdebugbar.restoreState();
phpdebugbar.ajaxHandler = new PhpDebugBar.AjaxHandler(phpdebugbar, undefined, true);
phpdebugbar.ajaxHandler.bindToXHR();
phpdebugbar.setOpenHandler(new PhpDebugBar.OpenHandler({"url":"http:\/\/localhost\/obite\/public\/_debugbar\/open"}));
phpdebugbar.addDataSet({"__meta":{"id":"X7dd8ce7a9545c364059995b440fa7337","datetime":"2021-10-05 15:34:01","utime":1633444441.591124,"method":"GET","uri":"\/obite\/public\/logs","ip":"::1"},"php":{"version":"7.1.33","interface":"apache2handler"},"messages":{"count":0,"messages":[]},"time":{"start":1633444441.294,"end":1633444441.591141,"duration":0.29714107513427734,"duration_str":"297.14ms","measures":[{"label":"Booting","start":1633444441.294,"relative_start":0,"end":1633444441.448907,"relative_end":1633444441.448907,"duration":0.1549069881439209,"duration_str":"154.91ms","params":[],"collector":null},{"label":"Application","start":1633444441.452835,"relative_start":0.15883517265319824,"end":1633444441.591143,"relative_end":1.9073486328125e-6,"duration":0.13830780982971191,"duration_str":"138.31ms","params":[],"collector":null}]},"memory":{"peak_usage":17048728,"peak_usage_str":"16.26MB"},"exceptions":{"count":0,"exceptions":[]},"views":{"nb_templates":4,"templates":[{"name":"log::log (\\app\\FaveoLog\\views\\log.blade.php)","param_count":3,"params":["logs","files","current_file"],"type":"blade"},{"name":"themes.default1.admin.layout.admin (\\resources\\views\\themes\\default1\\admin\\layout\\admin.blade.php)","param_count":32,"params":["obLevel","__env","app","errors","logs","files","current_file","__currentLoopData","file","loop","log","key","company","notifications","myticket","unassigned","followup_ticket","deleted","tickets","department","overdues","due_today","is_mail_conigured","dummy_installation","auth_user_role","auth_user_id","auth_user_profile_pic","auth_name","auth_user_active","auth_user_primary_dept","auth_user_assign_group","langs"],"type":"blade"},{"name":"themes.default1.update.notification (\\resources\\views\\themes\\default1\\update\\notification.blade.php)","param_count":35,"params":["obLevel","__env","app","errors","logs","files","current_file","__currentLoopData","file","loop","log","key","company","notifications","myticket","unassigned","followup_ticket","deleted","tickets","department","overdues","due_today","is_mail_conigured","dummy_installation","auth_user_role","auth_user_id","auth_user_profile_pic","auth_name","auth_user_active","auth_user_primary_dept","auth_user_assign_group","langs","replacetop","replaceside","notification"],"type":"blade"},{"name":"_partials.breadcrumbs (\\resources\\views\\_partials\\breadcrumbs.blade.php)","param_count":1,"params":["breadcrumbs"],"type":"blade"}]},"route":{"uri":"GET logs","middleware":"web, auth, roles","as":"logs","controller":"App\\FaveoLog\\controllers\\LogViewerController@index","namespace":null,"prefix":null,"where":[],"file":"\\app\\FaveoLog\\controllers\\LogViewerController.php:15-37"},"queries":{"nb_statements":42,"nb_failed_statements":0,"accumulated_duration":0.02443,"accumulated_duration_str":"24.43ms","statements":[{"sql":"select * from `users` where `id` = '1' limit 1","type":"query","params":[],"bindings":["1"],"hints":["Use <code>SELECT *<\/code> only if you need all columns from table","<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"],"backtrace":[],"duration":0.0010400000000000001,"duration_str":"1.04ms","stmt_id":"","connection":"obite"},{"sql":"select * from `settings_system` where `id` = '1' limit 1","type":"query","params":[],"bindings":["1"],"hints":["Use <code>SELECT *<\/code> only if you need all columns from table","<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"],"backtrace":[],"duration":0.00074,"duration_str":"740\u03bcs","stmt_id":"","connection":"obite"},{"sql":"select * from `timezone` where `id` = '32' limit 1","type":"query","params":[],"bindings":["32"],"hints":["Use <code>SELECT *<\/code> only if you need all columns from table","<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"],"backtrace":[],"duration":0.0006,"duration_str":"600\u03bcs","stmt_id":"","connection":"obite"},{"sql":"select * from `date_time_format` where `id` = '1' limit 1","type":"query","params":[],"bindings":["1"],"hints":["Use <code>SELECT *<\/code> only if you need all columns from table","<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"],"backtrace":[],"duration":0.0005600000000000001,"duration_str":"560\u03bcs","stmt_id":"","connection":"obite"},{"sql":"select * from `settings_system` where `id` = '1' limit 1","type":"query","params":[],"bindings":["1"],"hints":["Use <code>SELECT *<\/code> only if you need all columns from table","<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"],"backtrace":[],"duration":0.00062,"duration_str":"620\u03bcs","stmt_id":"","connection":"obite"},{"sql":"select * from `timezone` where `id` = '32' limit 1","type":"query","params":[],"bindings":["32"],"hints":["Use <code>SELECT *<\/code> only if you need all columns from table","<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"],"backtrace":[],"duration":0.00053,"duration_str":"530\u03bcs","stmt_id":"","connection":"obite"},{"sql":"select * from `date_time_format` where `id` = '1' limit 1","type":"query","params":[],"bindings":["1"],"hints":["Use <code>SELECT *<\/code> only if you need all columns from table","<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"],"backtrace":[],"duration":0.00053,"duration_str":"530\u03bcs","stmt_id":"","connection":"obite"},{"sql":"select * from `settings_system` where `id` = '1' limit 1","type":"query","params":[],"bindings":["1"],"hints":["Use <code>SELECT *<\/code> only if you need all columns from table","<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"],"backtrace":[],"duration":0.00061,"duration_str":"610\u03bcs","stmt_id":"","connection":"obite"},{"sql":"select * from `timezone` where `id` = '32' limit 1","type":"query","params":[],"bindings":["32"],"hints":["Use <code>SELECT *<\/code> only if you need all columns from table","<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"],"backtrace":[],"duration":0.0005,"duration_str":"500\u03bcs","stmt_id":"","connection":"obite"},{"sql":"select * from `date_time_format` where `id` = '1' limit 1","type":"query","params":[],"bindings":["1"],"hints":["Use <code>SELECT *<\/code> only if you need all columns from table","<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"],"backtrace":[],"duration":0.00045,"duration_str":"450\u03bcs","stmt_id":"","connection":"obite"},{"sql":"select * from `settings_system` where `id` = '1' limit 1","type":"query","params":[],"bindings":["1"],"hints":["Use <code>SELECT *<\/code> only if you need all columns from table","<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"],"backtrace":[],"duration":0.00065,"duration_str":"650\u03bcs","stmt_id":"","connection":"obite"},{"sql":"select * from `timezone` where `id` = '32' limit 1","type":"query","params":[],"bindings":["32"],"hints":["Use <code>SELECT *<\/code> only if you need all columns from table","<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"],"backtrace":[],"duration":0.00051,"duration_str":"510\u03bcs","stmt_id":"","connection":"obite"},{"sql":"select * from `date_time_format` where `id` = '1' limit 1","type":"query","params":[],"bindings":["1"],"hints":["Use <code>SELECT *<\/code> only if you need all columns from table","<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"],"backtrace":[],"duration":0.00054,"duration_str":"540\u03bcs","stmt_id":"","connection":"obite"},{"sql":"select * from `settings_system` where `id` = '1' limit 1","type":"query","params":[],"bindings":["1"],"hints":["Use <code>SELECT *<\/code> only if you need all columns from table","<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"],"backtrace":[],"duration":0.0009599999999999999,"duration_str":"960\u03bcs","stmt_id":"","connection":"obite"},{"sql":"select * from `timezone` where `id` = '32' limit 1","type":"query","params":[],"bindings":["32"],"hints":["Use <code>SELECT *<\/code> only if you need all columns from table","<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"],"backtrace":[],"duration":0.00061,"duration_str":"610\u03bcs","stmt_id":"","connection":"obite"},{"sql":"select * from `date_time_format` where `id` = '1' limit 1","type":"query","params":[],"bindings":["1"],"hints":["Use <code>SELECT *<\/code> only if you need all columns from table","<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"],"backtrace":[],"duration":0.00064,"duration_str":"640\u03bcs","stmt_id":"","connection":"obite"},{"sql":"select `dep`.`name` as `name`, `ticket_status`.`name` as `status`, COUNT(ticket_status.name) as count from `tickets` left join `department` as `dep` on `tickets`.`dept_id` = `dep`.`id` left join `ticket_status` on `tickets`.`status` = `ticket_status`.`id` group by `dep`.`name`, `ticket_status`.`name`","type":"query","params":[],"bindings":[],"hints":["The <code>SELECT<\/code> statement has no <code>WHERE<\/code> clause and could examine many more rows than intended"],"backtrace":[],"duration":0.00082,"duration_str":"820\u03bcs","stmt_id":"","connection":"obite"},{"sql":"select count(*) as aggregate from `emails` where `sending_status` = '1' and `fetching_status` = '1'","type":"query","params":[],"bindings":["1","1"],"hints":[],"backtrace":[],"duration":0.00054,"duration_str":"540\u03bcs","stmt_id":"","connection":"obite"},{"sql":"select `status` from `common_settings` where `option_name` = 'dummy_data_installation' limit 1","type":"query","params":[],"bindings":["dummy_data_installation"],"hints":["<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"],"backtrace":[],"duration":0.00055,"duration_str":"550\u03bcs","stmt_id":"","connection":"obite"},{"sql":"select `value` from `user_additional_infos` where `user_additional_infos`.`owner` = '1' and `user_additional_infos`.`owner` is not null and `key` = 'avatar' limit 1","type":"query","params":[],"bindings":["1","avatar"],"hints":["<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"],"backtrace":[],"duration":0.00061,"duration_str":"610\u03bcs","stmt_id":"","connection":"obite"},{"sql":"select * from `bar_notifications` where `value` != ''","type":"query","params":[],"bindings":[""],"hints":["Use <code>SELECT *<\/code> only if you need all columns from table","The <code>!=<\/code> operator is not standard. Use the <code>&lt;&gt;<\/code> operator to test for inequality instead."],"backtrace":[],"duration":0.00078,"duration_str":"780\u03bcs","stmt_id":"","connection":"obite"},{"sql":"select `value` from `bar_notifications` where `value` != ''","type":"query","params":[],"bindings":[""],"hints":["The <code>!=<\/code> operator is not standard. Use the <code>&lt;&gt;<\/code> operator to test for inequality instead."],"backtrace":[],"duration":0.0005899999999999999,"duration_str":"590\u03bcs","stmt_id":"","connection":"obite"},{"sql":"select count(*) as aggregate from `user_notification` where `user_id` = '1'","type":"query","params":[],"bindings":["1"],"hints":[],"backtrace":[],"duration":0.00057,"duration_str":"570\u03bcs","stmt_id":"","connection":"obite"},{"sql":"select count(*) as aggregate from `user_notification` where `user_id` = '1'","type":"query","params":[],"bindings":["1"],"hints":[],"backtrace":[],"duration":0.00049,"duration_str":"490\u03bcs","stmt_id":"","connection":"obite"},{"sql":"select count(*) as aggregate from `user_notification` where `user_id` = '1'","type":"query","params":[],"bindings":["1"],"hints":[],"backtrace":[],"duration":0.00047,"duration_str":"470\u03bcs","stmt_id":"","connection":"obite"},{"sql":"select * from `user_notification` where `user_id` = '1' order by `created_at` desc","type":"query","params":[],"bindings":["1"],"hints":["Use <code>SELECT *<\/code> only if you need all columns from table"],"backtrace":[],"duration":0.00061,"duration_str":"610\u03bcs","stmt_id":"","connection":"obite"},{"sql":"select * from `notifications` where `notifications`.`id` in ('1', '2', '3', '4', '5', '6', '7', '8', '9')","type":"query","params":[],"bindings":["1","2","3","4","5","6","7","8","9"],"hints":["Use <code>SELECT *<\/code> only if you need all columns from table"],"backtrace":[],"duration":0.0008,"duration_str":"800\u03bcs","stmt_id":"","connection":"obite"},{"sql":"select `id`, `message`, `type` from `notification_types` where `notification_types`.`id` in ('2', '3')","type":"query","params":[],"bindings":["2","3"],"hints":[],"backtrace":[],"duration":0.00067,"duration_str":"670\u03bcs","stmt_id":"","connection":"obite"},{"sql":"select `id`, `ticket_number` from `tickets` where `tickets`.`id` in ('1', '2', '3', '4', '5', '6')","type":"query","params":[],"bindings":["1","2","3","4","5","6"],"hints":[],"backtrace":[],"duration":0.00058,"duration_str":"580\u03bcs","stmt_id":"","connection":"obite"},{"sql":"select `id`, `email`, `profile_pic` from `users` where `users`.`id` in ('1')","type":"query","params":[],"bindings":["1"],"hints":[],"backtrace":[],"duration":0.00073,"duration_str":"730\u03bcs","stmt_id":"","connection":"obite"},{"sql":"select `value` from `user_additional_infos` where `user_additional_infos`.`owner` = '1' and `user_additional_infos`.`owner` is not null and `key` = 'avatar' limit 1","type":"query","params":[],"bindings":["1","avatar"],"hints":["<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"],"backtrace":[],"duration":0.00058,"duration_str":"580\u03bcs","stmt_id":"","connection":"obite"},{"sql":"select `value` from `user_additional_infos` where `user_additional_infos`.`owner` = '1' and `user_additional_infos`.`owner` is not null and `key` = 'avatar' limit 1","type":"query","params":[],"bindings":["1","avatar"],"hints":["<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"],"backtrace":[],"duration":0.00045,"duration_str":"450\u03bcs","stmt_id":"","connection":"obite"},{"sql":"select `value` from `user_additional_infos` where `user_additional_infos`.`owner` = '1' and `user_additional_infos`.`owner` is not null and `key` = 'avatar' limit 1","type":"query","params":[],"bindings":["1","avatar"],"hints":["<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"],"backtrace":[],"duration":0.00045,"duration_str":"450\u03bcs","stmt_id":"","connection":"obite"},{"sql":"select `value` from `user_additional_infos` where `user_additional_infos`.`owner` = '1' and `user_additional_infos`.`owner` is not null and `key` = 'avatar' limit 1","type":"query","params":[],"bindings":["1","avatar"],"hints":["<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"],"backtrace":[],"duration":0.00041999999999999996,"duration_str":"420\u03bcs","stmt_id":"","connection":"obite"},{"sql":"select `value` from `user_additional_infos` where `user_additional_infos`.`owner` = '1' and `user_additional_infos`.`owner` is not null and `key` = 'avatar' limit 1","type":"query","params":[],"bindings":["1","avatar"],"hints":["<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"],"backtrace":[],"duration":0.0004,"duration_str":"400\u03bcs","stmt_id":"","connection":"obite"},{"sql":"select `value` from `user_additional_infos` where `user_additional_infos`.`owner` = '1' and `user_additional_infos`.`owner` is not null and `key` = 'avatar' limit 1","type":"query","params":[],"bindings":["1","avatar"],"hints":["<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"],"backtrace":[],"duration":0.00032,"duration_str":"320\u03bcs","stmt_id":"","connection":"obite"},{"sql":"select `value` from `user_additional_infos` where `user_additional_infos`.`owner` = '1' and `user_additional_infos`.`owner` is not null and `key` = 'avatar' limit 1","type":"query","params":[],"bindings":["1","avatar"],"hints":["<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"],"backtrace":[],"duration":0.00035,"duration_str":"350\u03bcs","stmt_id":"","connection":"obite"},{"sql":"select `value` from `user_additional_infos` where `user_additional_infos`.`owner` = '1' and `user_additional_infos`.`owner` is not null and `key` = 'avatar' limit 1","type":"query","params":[],"bindings":["1","avatar"],"hints":["<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"],"backtrace":[],"duration":0.00032,"duration_str":"320\u03bcs","stmt_id":"","connection":"obite"},{"sql":"select `value` from `user_additional_infos` where `user_additional_infos`.`owner` = '1' and `user_additional_infos`.`owner` is not null and `key` = 'avatar' limit 1","type":"query","params":[],"bindings":["1","avatar"],"hints":["<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"],"backtrace":[],"duration":0.00044,"duration_str":"440\u03bcs","stmt_id":"","connection":"obite"},{"sql":"select `value` from `user_additional_infos` where `user_additional_infos`.`owner` = '1' and `user_additional_infos`.`owner` is not null and `key` = 'avatar' limit 1","type":"query","params":[],"bindings":["1","avatar"],"hints":["<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"],"backtrace":[],"duration":0.0005899999999999999,"duration_str":"590\u03bcs","stmt_id":"","connection":"obite"},{"sql":"select `value` from `user_additional_infos` where `user_additional_infos`.`owner` = '1' and `user_additional_infos`.`owner` is not null and `key` = 'avatar' limit 1","type":"query","params":[],"bindings":["1","avatar"],"hints":["<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"],"backtrace":[],"duration":0.00054,"duration_str":"540\u03bcs","stmt_id":"","connection":"obite"},{"sql":"select `value` from `user_additional_infos` where `user_additional_infos`.`owner` = '1' and `user_additional_infos`.`owner` is not null and `key` = 'avatar' limit 1","type":"query","params":[],"bindings":["1","avatar"],"hints":["<code>LIMIT<\/code> without <code>ORDER BY<\/code> causes non-deterministic results, depending on the query execution plan"],"backtrace":[],"duration":0.00067,"duration_str":"670\u03bcs","stmt_id":"","connection":"obite"}]},"swiftmailer_mails":{"count":0,"mails":[]},"session":{"_previous":"array:1 [\n  \"url\" => \"http:\/\/localhost\/obite\/public\/logs\"\n]","_flash":"array:2 [\n  \"old\" => []\n  \"new\" => []\n]","_token":"iuG3pPxD6QtApG8jPDrPNUrtVm8RHIZdQE56gDeP","loginAttempts":"2","loginAttemptTime":"1633441225","login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d":"1","PHPDEBUGBAR_STACK_DATA":"[]"},"request":{"format":"html","content_type":"text\/html; charset=UTF-8","status_text":"OK","status_code":"200","request_query":"[]","request_request":"[]","request_headers":"array:16 [\n  \"host\" => array:1 [\n    0 => \"localhost\"\n  ]\n  \"connection\" => array:1 [\n    0 => \"keep-alive\"\n  ]\n  \"sec-ch-ua\" => array:1 [\n    0 => \"\"Chromium\";v=\"94\", \"Google Chrome\";v=\"94\", \";Not A Brand\";v=\"99\"\"\n  ]\n  \"sec-ch-ua-mobile\" => array:1 [\n    0 => \"?0\"\n  ]\n  \"sec-ch-ua-platform\" => array:1 [\n    0 => \"\"Windows\"\"\n  ]\n  \"upgrade-insecure-requests\" => array:1 [\n    0 => \"1\"\n  ]\n  \"user-agent\" => array:1 [\n    0 => \"Mozilla\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/94.0.4606.61 Safari\/537.36\"\n  ]\n  \"accept\" => array:1 [\n    0 => \"text\/html,application\/xhtml+xml,application\/xml;q=0.9,image\/avif,image\/webp,image\/apng,*\/*;q=0.8,application\/signed-exchange;v=b3;q=0.9\"\n  ]\n  \"sec-fetch-site\" => array:1 [\n    0 => \"same-origin\"\n  ]\n  \"sec-fetch-mode\" => array:1 [\n    0 => \"navigate\"\n  ]\n  \"sec-fetch-user\" => array:1 [\n    0 => \"?1\"\n  ]\n  \"sec-fetch-dest\" => array:1 [\n    0 => \"document\"\n  ]\n  \"referer\" => array:1 [\n    0 => \"http:\/\/localhost\/obite\/public\/graduate_attributes\"\n  ]\n  \"accept-encoding\" => array:1 [\n    0 => \"gzip, deflate, br\"\n  ]\n  \"accept-language\" => array:1 [\n    0 => \"en-US,en;q=0.9\"\n  ]\n  \"cookie\" => array:1 [\n    0 => \"username-localhost-8888=\"2|1:0|10:1631771968|23:username-localhost-8888|44:YWJiOGRlOGExZmJmNDYwMDg2NDg3ZTUzOTE4ZTJiNjk=|1c352d4d3d1ab532f0c4a7ee78e6df12214c6c52d6b37a33d3491f6b2492b849\"; _xsrf=2|e7adfe3a|c3000ed0c399d643ca042d3f916d46bb|1631771968; XSRF-TOKEN=eyJpdiI6ImNhREh5Q2Z4bHRjXC90QXp5RnZZb3l3PT0iLCJ2YWx1ZSI6ImJZTVV2MTVyaXpYaTVMRjg4c3Q0dFwvMUhUbzk2Rk9cL0xlakJHNFdrUHQ4ZTdUeHIxQlJSMWZZVEdydEFSUGJoRCIsIm1hYyI6Ijg2MWQzYjYxNGRkNjRkOWU1ZTJkMWM2ODk3ZTM3YzgyMWMwMTFkYTI2MzI1ODdhZDdjYjBlYzVkNDg5YWQ4ZGQifQ%3D%3D; laravel_session=eyJpdiI6IjlyQ3NhQWx3emtaNkFjQWVYWFBPMGc9PSIsInZhbHVlIjoiNUdrbk5EQXUxUExQOXRvdlNGeE04NW5ITjF5QTZvTFpCSkpZZk9DS3JUT3pjRmFreW1LMlk2dG1RT2ZpaXRmSiIsIm1hYyI6ImU0M2EyNzRhNDZmNzk3YWVhNjQ3YzQ3ZjYwMWE4ZGRmYzZmMzBiYWQxNjhiMmY2NjcxZWM2ZmFjMzE5M2ExOGYifQ%3D%3D\"\n  ]\n]","request_server":"array:57 [\n  \"REDIRECT_MIBDIRS\" => \"C:\/xampp\/php\/extras\/mibs\"\n  \"REDIRECT_MYSQL_HOME\" => \"\\xampp\\mysql\\bin\"\n  \"REDIRECT_OPENSSL_CONF\" => \"C:\/xampp\/apache\/bin\/openssl.cnf\"\n  \"REDIRECT_PHP_PEAR_SYSCONF_DIR\" => \"\\xampp\\php\"\n  \"REDIRECT_PHPRC\" => \"\\xampp\\php\"\n  \"REDIRECT_TMP\" => \"\\xampp\\tmp\"\n  \"REDIRECT_STATUS\" => \"200\"\n  \"MIBDIRS\" => \"C:\/xampp\/php\/extras\/mibs\"\n  \"MYSQL_HOME\" => \"\\xampp\\mysql\\bin\"\n  \"OPENSSL_CONF\" => \"C:\/xampp\/apache\/bin\/openssl.cnf\"\n  \"PHP_PEAR_SYSCONF_DIR\" => \"\\xampp\\php\"\n  \"PHPRC\" => \"\\xampp\\php\"\n  \"TMP\" => \"\\xampp\\tmp\"\n  \"HTTP_HOST\" => \"localhost\"\n  \"HTTP_CONNECTION\" => \"keep-alive\"\n  \"HTTP_SEC_CH_UA\" => \"\"Chromium\";v=\"94\", \"Google Chrome\";v=\"94\", \";Not A Brand\";v=\"99\"\"\n  \"HTTP_SEC_CH_UA_MOBILE\" => \"?0\"\n  \"HTTP_SEC_CH_UA_PLATFORM\" => \"\"Windows\"\"\n  \"HTTP_UPGRADE_INSECURE_REQUESTS\" => \"1\"\n  \"HTTP_USER_AGENT\" => \"Mozilla\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/94.0.4606.61 Safari\/537.36\"\n  \"HTTP_ACCEPT\" => \"text\/html,application\/xhtml+xml,application\/xml;q=0.9,image\/avif,image\/webp,image\/apng,*\/*;q=0.8,application\/signed-exchange;v=b3;q=0.9\"\n  \"HTTP_SEC_FETCH_SITE\" => \"same-origin\"\n  \"HTTP_SEC_FETCH_MODE\" => \"navigate\"\n  \"HTTP_SEC_FETCH_USER\" => \"?1\"\n  \"HTTP_SEC_FETCH_DEST\" => \"document\"\n  \"HTTP_REFERER\" => \"http:\/\/localhost\/obite\/public\/graduate_attributes\"\n  \"HTTP_ACCEPT_ENCODING\" => \"gzip, deflate, br\"\n  \"HTTP_ACCEPT_LANGUAGE\" => \"en-US,en;q=0.9\"\n  \"HTTP_COOKIE\" => \"username-localhost-8888=\"2|1:0|10:1631771968|23:username-localhost-8888|44:YWJiOGRlOGExZmJmNDYwMDg2NDg3ZTUzOTE4ZTJiNjk=|1c352d4d3d1ab532f0c4a7ee78e6df12214c6c52d6b37a33d3491f6b2492b849\"; _xsrf=2|e7adfe3a|c3000ed0c399d643ca042d3f916d46bb|1631771968; XSRF-TOKEN=eyJpdiI6ImNhREh5Q2Z4bHRjXC90QXp5RnZZb3l3PT0iLCJ2YWx1ZSI6ImJZTVV2MTVyaXpYaTVMRjg4c3Q0dFwvMUhUbzk2Rk9cL0xlakJHNFdrUHQ4ZTdUeHIxQlJSMWZZVEdydEFSUGJoRCIsIm1hYyI6Ijg2MWQzYjYxNGRkNjRkOWU1ZTJkMWM2ODk3ZTM3YzgyMWMwMTFkYTI2MzI1ODdhZDdjYjBlYzVkNDg5YWQ4ZGQifQ%3D%3D; laravel_session=eyJpdiI6IjlyQ3NhQWx3emtaNkFjQWVYWFBPMGc9PSIsInZhbHVlIjoiNUdrbk5EQXUxUExQOXRvdlNGeE04NW5ITjF5QTZvTFpCSkpZZk9DS3JUT3pjRmFreW1LMlk2dG1RT2ZpaXRmSiIsIm1hYyI6ImU0M2EyNzRhNDZmNzk3YWVhNjQ3YzQ3ZjYwMWE4ZGRmYzZmMzBiYWQxNjhiMmY2NjcxZWM2ZmFjMzE5M2ExOGYifQ%3D%3D\"\n  \"PATH\" => \"C:\\Windows\\system32;C:\\Windows;C:\\Windows\\System32\\Wbem;C:\\Windows\\System32\\WindowsPowerShell\\v1.0\\;C:\\Program Files\\Intel\\WiFi\\bin\\;C:\\Program Files\\Common Files\\Intel\\WirelessCommon\\;C:\\Windows\\System32\\OpenSSH\\;C:\\xampp\\php;C:\\ProgramData\\ComposerSetup\\bin;C:\\Program Files (x86)\\Intel\\Intel(R) Management Engine Components\\DAL;C:\\Program Files\\Intel\\Intel(R) Management Engine Components\\DAL;C:\\Users\\e.on\\AppData\\Local\\Microsoft\\WindowsApps;C:\\Users\\e.on\\AppData\\Roaming\\Composer\\vendor\\bin\"\n  \"SystemRoot\" => \"C:\\Windows\"\n  \"COMSPEC\" => \"C:\\Windows\\system32\\cmd.exe\"\n  \"PATHEXT\" => \".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC\"\n  \"WINDIR\" => \"C:\\Windows\"\n  \"SERVER_SIGNATURE\" => \"<address>Apache\/2.4.41 (Win64) OpenSSL\/1.0.2s PHP\/7.1.33 Server at localhost Port 80<\/address>\\n\"\n  \"SERVER_SOFTWARE\" => \"Apache\/2.4.41 (Win64) OpenSSL\/1.0.2s PHP\/7.1.33\"\n  \"SERVER_NAME\" => \"localhost\"\n  \"SERVER_ADDR\" => \"::1\"\n  \"SERVER_PORT\" => \"80\"\n  \"REMOTE_ADDR\" => \"::1\"\n  \"DOCUMENT_ROOT\" => \"C:\/xampp\/htdocs\"\n  \"REQUEST_SCHEME\" => \"http\"\n  \"CONTEXT_PREFIX\" => \"\"\n  \"CONTEXT_DOCUMENT_ROOT\" => \"C:\/xampp\/htdocs\"\n  \"SERVER_ADMIN\" => \"postmaster@localhost\"\n  \"SCRIPT_FILENAME\" => \"C:\/xampp\/htdocs\/obite\/public\/index.php\"\n  \"REMOTE_PORT\" => \"55105\"\n  \"REDIRECT_URL\" => \"\/obite\/public\/logs\"\n  \"GATEWAY_INTERFACE\" => \"CGI\/1.1\"\n  \"SERVER_PROTOCOL\" => \"HTTP\/1.1\"\n  \"REQUEST_METHOD\" => \"GET\"\n  \"QUERY_STRING\" => \"\"\n  \"REQUEST_URI\" => \"\/obite\/public\/logs\"\n  \"SCRIPT_NAME\" => \"\/obite\/public\/index.php\"\n  \"PHP_SELF\" => \"\/obite\/public\/index.php\"\n  \"REQUEST_TIME_FLOAT\" => 1633444441.294\n  \"REQUEST_TIME\" => 1633444441\n]","request_cookies":"array:4 [\n  \"username-localhost-8888\" => null\n  \"_xsrf\" => null\n  \"XSRF-TOKEN\" => \"iuG3pPxD6QtApG8jPDrPNUrtVm8RHIZdQE56gDeP\"\n  \"laravel_session\" => \"h3WRyyNJsf2TuQ3aZEpGvTtDBYAs1R5aWA4o2rm5\"\n]","response_headers":"array:5 [\n  \"cache-control\" => array:1 [\n    0 => \"no-cache, private\"\n  ]\n  \"date\" => array:1 [\n    0 => \"Tue, 05 Oct 2021 14:34:01 GMT\"\n  ]\n  \"content-type\" => array:1 [\n    0 => \"text\/html; charset=UTF-8\"\n  ]\n  \"set-cookie\" => array:2 [\n    0 => \"XSRF-TOKEN=eyJpdiI6IkZDOXIrVFlhOHRtUDFuVnpMQXhMd2c9PSIsInZhbHVlIjoic0xlNVdpRWRxRVVZR2Yrd09CRFZER21nY3dCT091aTQ2MnFBQ2o4SFkyVWFhRm5sbStxUUhyQStnSytDeFBVbCIsIm1hYyI6IjE5ZmZhNzQzMzhlNTJkMzA1Y2I3NTg1ZTdiYTExMjYxZDY2N2Y4OTM5MGY2MGNmYWVjNzcxNGE1NjYxYmEyN2UifQ%3D%3D; expires=Tue, 05-Oct-2021 16:34:01 GMT; Max-Age=7200; path=\/\"\n    1 => \"laravel_session=eyJpdiI6ImNPenFsT3Q1aWhadVJ6QUUyc2tYWHc9PSIsInZhbHVlIjoiXC9CbWdMZk5wRnR4cUw2NzhnVjBHRWt3KytKbXRmbWJCVFk3b2FHcVhlSHJUWlJiWldSNXBGWll6TmxLcHR0NXMiLCJtYWMiOiJhNjI4MWQ4ODEzYTM1NGRkYzRhY2U5NmM3ZTM0OWU4OWU2NzQ2ZTFjZGQwYTk4YmJiNTdjYmRhOWNkNGVhYWMyIn0%3D; expires=Tue, 05-Oct-2021 16:34:01 GMT; Max-Age=7200; path=\/; httponly\"\n  ]\n  \"Set-Cookie\" => array:2 [\n    0 => \"XSRF-TOKEN=eyJpdiI6IkZDOXIrVFlhOHRtUDFuVnpMQXhMd2c9PSIsInZhbHVlIjoic0xlNVdpRWRxRVVZR2Yrd09CRFZER21nY3dCT091aTQ2MnFBQ2o4SFkyVWFhRm5sbStxUUhyQStnSytDeFBVbCIsIm1hYyI6IjE5ZmZhNzQzMzhlNTJkMzA1Y2I3NTg1ZTdiYTExMjYxZDY2N2Y4OTM5MGY2MGNmYWVjNzcxNGE1NjYxYmEyN2UifQ%3D%3D; expires=Tue, 05-Oct-2021 16:34:01 GMT; path=\/\"\n    1 => \"laravel_session=eyJpdiI6ImNPenFsT3Q1aWhadVJ6QUUyc2tYWHc9PSIsInZhbHVlIjoiXC9CbWdMZk5wRnR4cUw2NzhnVjBHRWt3KytKbXRmbWJCVFk3b2FHcVhlSHJUWlJiWldSNXBGWll6TmxLcHR0NXMiLCJtYWMiOiJhNjI4MWQ4ODEzYTM1NGRkYzRhY2U5NmM3ZTM0OWU4OWU2NzQ2ZTFjZGQwYTk4YmJiNTdjYmRhOWNkNGVhYWMyIn0%3D; expires=Tue, 05-Oct-2021 16:34:01 GMT; path=\/; httponly\"\n  ]\n]","path_info":"\/logs","session_attributes":"array:7 [\n  \"_previous\" => array:1 [\n    \"url\" => \"http:\/\/localhost\/obite\/public\/logs\"\n  ]\n  \"_flash\" => array:2 [\n    \"old\" => []\n    \"new\" => []\n  ]\n  \"_token\" => \"iuG3pPxD6QtApG8jPDrPNUrtVm8RHIZdQE56gDeP\"\n  \"loginAttempts\" => 2\n  \"loginAttemptTime\" => 1633441225\n  \"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\" => 1\n  \"PHPDEBUGBAR_STACK_DATA\" => []\n]"}}, "X7dd8ce7a9545c364059995b440fa7337");

</script>
</body>
</html>

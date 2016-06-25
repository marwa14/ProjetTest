<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link href="http://localhost/CodeIgniter-3.0.6/admin_css/css/bootstrap-cerulean.min.css" rel="stylesheet">
    <link href="../admin_css/css/charisma-app.css" rel="stylesheet">
    <link href='../admin_css/bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='../admin_css/bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='../admin_css/bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='../admin_css/bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='../admin_css/bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='../admin_css/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='../admin_css/css/jquery.noty.css' rel='stylesheet'>
    <link href='../admin_css/css/noty_theme_default.css' rel='stylesheet'>
    <link href='../admin_css/css/elfinder.min.css' rel='stylesheet'>
    <link href='../admin_css/css/elfinder.theme.css' rel='stylesheet'>
    <link href='../admin_css/css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='../admin_css/css/uploadify.css' rel='stylesheet'>
    <link href='../admin_css/css/animate.min.css' rel='stylesheet'>
    <link href='../admin_css/popup/jquery-confirm.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="http://localhost/CodeIgniter-3.0.6/admin_css/bower_components/jquery/jquery.min.js"></script>
    <script src="http://localhost/CodeIgniter-3.0.6/admin_css/popup/jquery-confirm.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="../admin_css/img/favicon.ico">

</head>

<body>
<script>
    $(document).ready(function()
    {

        $.fn.myFunctionDelete = function(ID){
            $.confirm({
                title: 'Confirm!',
                content: 'Voulez vous vraiment supprimer cette categorie!!',
                confirm: function(){
                    $.post("<?php echo site_url('/categorie/delete'); ?>",     //"./client/create"
                        {
                            ID: ID
                        });
                    window.location.href = "<?php echo site_url('categorie'); ?>";
                },
                cancel: function(){
                    $.alert('Canceled!')
                }
            });

        }




    });
</script>
<script>
    $(document).ready(function()
    {
        $("#submit").click(function()
        {
            var nom=$("#nom").val();
            var carte = $("#id_carte").val();
            if ((nom =="")|| (carte == null))  {

                $( "#alert" ).addClass( "alert alert-danger" );
                $("#alert")
                    .text("rempliez tout les champs")


            } else {
                

                $.post("<?php echo site_url('/categorie/create'); ?>",   
                    {
                        nom: nom, carte: carte
                    }
                );
                window.location.href = "<?php echo site_url('categorie'); ?>";



            }

        });


    });
</script>
<!-- topbar starts -->
<div class="navbar navbar-default" role="navigation">
    <div class="navbar-inner">
        <button type="button" class="navbar-toggle pull-left animated flip">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>


        <!-- user dropdown starts -->
        <div class="btn-group pull-right">
            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> admin</span>
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="#">Profile</a></li>
                <li class="divider"></li>
                <li><a href="login.html">Logout</a></li>
            </ul>
        </div>
        <!-- user dropdown ends -->

        <!-- theme selector starts -->
        <div class="btn-group pull-right theme-container animated tada">
            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <i class="glyphicon glyphicon-tint"></i><span
                    class="hidden-sm hidden-xs"> Change Theme / Skin</span>
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" id="themes">
                <li><a data-value="classic" href="#"><i class="whitespace"></i> Classic</a></li>
                <li><a data-value="cerulean" href="#"><i class="whitespace"></i> Cerulean</a></li>
                <li><a data-value="cyborg" href="#"><i class="whitespace"></i> Cyborg</a></li>
                <li><a data-value="simplex" href="#"><i class="whitespace"></i> Simplex</a></li>
                <li><a data-value="darkly" href="#"><i class="whitespace"></i> Darkly</a></li>
                <li><a data-value="lumen" href="#"><i class="whitespace"></i> Lumen</a></li>
                <li><a data-value="slate" href="#"><i class="whitespace"></i> Slate</a></li>
                <li><a data-value="spacelab" href="#"><i class="whitespace"></i> Spacelab</a></li>
                <li><a data-value="united" href="#"><i class="whitespace"></i> United</a></li>
            </ul>
        </div>
        <!-- theme selector ends -->

        <ul class="collapse navbar-collapse nav navbar-nav top-menu">
            <li><a href="#"><i class="glyphicon glyphicon-globe"></i> Visit Site</a></li>
            <li class="dropdown">
                <a href="#" data-toggle="dropdown"><i class="glyphicon glyphicon-star"></i> Dropdown <span
                        class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                </ul>
            </li>
            <li>
                <form class="navbar-search pull-left">
                    <input placeholder="Search" class="search-query form-control col-md-10" name="query"
                           type="text">
                </form>
            </li>
        </ul>

    </div>
</div>
<img src="../admin_css/img/photo4.jpg" class="hidden-xs" style="width:1357px; height: 400px ;margin-left:-7px;margin-top: -20px;"/>
<!-- topbar ends -->
<br>
<br>
<div class="ch-container">
    <div class="row">

        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="http://localhost/CodeIgniter-3.0.6/index.php/restaurant"><i class="glyphicon glyphicon-home"></i><span> Restaurant</span></a>
                        </li>
                        <li><a class="ajax-link" href="http://localhost/CodeIgniter-3.0.6/index.php/gallerie_restaurant"><i class="glyphicon glyphicon-picture"></i><span> Gallerie restaurant</span></a>
                        </li>
                        <li><a class="ajax-link" href="http://localhost/CodeIgniter-3.0.6/index.php/carte"  ><i class="glyphicon glyphicon-list-alt"></i><span> Carte</span></a>
                        </li>
                        <li><a class="ajax-link" href="http://localhost/CodeIgniter-3.0.6/index.php/categorie"  ><i class="glyphicon glyphicon-star"></i><span> Catégorie</span></a>
                        </li>
                        <li><a class="ajax-link" href="http://localhost/CodeIgniter-3.0.6/index.php/repas"><i class="glyphicon glyphicon-cutlery"></i><span> Repas</span></a>
                        </li>
                        <li><a class="ajax-link" href="http://localhost/CodeIgniter-3.0.6/index.php/evenement"><i class="glyphicon glyphicon-cog"></i><span> Evènement</span></a>
                        </li>
                        <li><a class="ajax-link" href="http://localhost/CodeIgniter-3.0.6/index.php/gallerie_evenement"><i class="glyphicon glyphicon-picture"></i><span> Gallerie évènement</span></a>
                        </li>
                        <li><a class="ajax-link" href="http://localhost/CodeIgniter-3.0.6/index.php/promotion"><i
                                    class="glyphicon glyphicon-minus"></i><span> Promotion</span></a></li>
                        <li><a class="ajax-link" href="http://localhost/CodeIgniter-3.0.6/index.php/reservation"><i
                                    class="glyphicon glyphicon-tags"></i><span>  Réservation </span></a></li>
                        <li class="ajax-link">
                            <a href="http://localhost/CodeIgniter-3.0.6/index.php/commentaire"><i class="glyphicon glyphicon-comment"></i><span> Commentaire</span></a>
                        </li>
                        <li><a class="ajax-link" href="http://localhost/CodeIgniter-3.0.6/index.php/calender"><i class="glyphicon glyphicon-calendar"></i><span> Calendar</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Tables</a>
                    </li>
                </ul>
            </div>

            <div class="row">
                <div class="box col-md-12">
                    <div class="box-inner">
                        <div class="box-header well" data-original-title="">
                            <h2><i class="glyphicon glyphicon-user"></i> Datatable Catégorie</h2>

                            <div class="box-icon">
                                <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-plus"></i></a>
                                <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                        class="glyphicon glyphicon-chevron-up"></i></a>
                                <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
                            </div>
                        </div>
                        <div class="box-content">
                            <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nom</th>
                                    <th>Carte</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php  if (isset($categorie)) :foreach ($categorie as $row) : ?>
                                    <tr>
                                        <td class="center"><?php echo $row->ID; ?></td>
                                        <td class="center"><?php echo $row->NOM; ?></td>
                                        <td class="center"><?php echo $row->ID_CARTE; ?></td>
                                        <td >
                                            <?php echo anchor("/categorie/edit_page/$row->ID",'Edit','class="btn btn-info "'); ?>   <input type="button" class="btn btn-danger"  value="Delete" onclick="$.fn.myFunctionDelete(<?php echo $row->ID ?>)";/>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                                </tbody>
                            </table>
                            <?php else:  ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <!--/span-->

            </div><!--/row-->






            <!-- Ad, you can remove it -->


            <!-- Ad ends -->

            <hr>

            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">

                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="row">
                            <div class="box col-md-12">
                                <div class="box-inner">
                                    <div class="box-header well" data-original-title="">
                                        <h2><i class="glyphicon glyphicon-edit"></i> Add Catégorie</h2>
                                    </div>
                                    <div class="box-content">
                                        <div id="alert">
                                        </div>
                                        <form role="form">
                                            <div class="form-group">
                                                <label>Nom <span>(Required Field)</span></label>
                                                <input type="text" class="form-control" id="nom" />
                                            </div>
                                            <label>Carte <span>(Required Field)</span></label>
                                            <select class="form-control" id="id_carte">
                                                <?php
                                                foreach($carte as $row)
                                                { ?>
                                                    <option value="<?php echo $row->ID_CARTE; ?>"  > <?php echo $row->NOM; ?> </option>;
                                                <?php }
                                                ?>
                                            </select>
                                            <br>
                                            <br>
                                            <input type="button"  class="btn btn-primary" value="Save" id="submit" />

                                        </form>

                                    </div>
                                </div>
                            </div>
                            <!--/span-->


                        </div>
                    </div>
                </div>

                <footer class="row">
                </footer>

            </div><!--/.fluid-container-->

            <!-- external javascript -->

            <script src="../admin_css/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

            <!-- library for cookie management -->
            <script src="../admin_css/js/jquery.cookie.js"></script>
            <!-- calender plugin -->
            <script src='../admin_css/bower_components/moment/min/moment.min.js'></script>
            <script src='../admin_css/bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
            <!-- data table plugin -->
            <script src='../admin_css/js/jquery.dataTables.min.js'></script>

            <!-- select or dropdown enhancer -->
            <script src="../admin_css/bower_components/chosen/chosen.jquery.min.js"></script>
            <!-- plugin for gallery image view -->
            <script src="../admin_css/bower_components/colorbox/jquery.colorbox-min.js"></script>
            <!-- notification plugin -->
            <script src="../admin_css/js/jquery.noty.js"></script>
            <!-- library for making tables responsive -->
            <script src="../admin_css/bower_components/responsive-tables/responsive-tables.js"></script>
            <!-- tour plugin -->
            <script src="../admin_css/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
            <!-- star rating plugin -->
            <script src="../admin_css/js/jquery.raty.min.js"></script>
            <!-- for iOS style toggle switch -->
            <script src="../admin_css/js/jquery.iphone.toggle.js"></script>
            <!-- autogrowing textarea plugin -->
            <script src="../admin_css/js/jquery.autogrow-textarea.js"></script>
            <!-- multiple file upload plugin -->
            <script src="../admin_css/js/jquery.uploadify-3.1.min.js"></script>
            <!-- history.js for cross-browser state change on ajax -->
            <script src="../admin_css/js/jquery.history.js"></script>
            <!-- application script for Charisma demo -->
            <script src="../admin_css/js/charisma.js"></script>


</body>
</html>


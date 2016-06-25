<!DOCTYPE html>
<html>
<head>
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Alley Signup & Signin Form Tab Form,Login Forms,Sign up Forms,Registration Forms,News letter Forms,Elements"./>
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="http://localhost/CodeIgniter-3.0.6/admin_css/bower_components/jquery/jquery.min.js">  </script>
    <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true   // 100% fit in a container
            });
        });
    </script>

</head>
<body>
<script type="text/javascript">
    $(document).ready(function () {
        $("#sign_in").click(function()
         {
         //alert("test");
             var password=$("#password1").val();
             var username=$("#username1").val();
             if (!(isNaN(username) && isNaN(password) )) {
                 $( "#message" )
                     .text( "rempliez tout les champs" )
                     .css("font-weight","Bold")
                     .css("color", "red")
                     .css("fontSize", "26px")
                     .fadeIn( 3000, function(){
                         $( this ).fadeOut( 3000, function(){
                         });
                     });
             }
             else {


                 $.post("<?php echo site_url('/utilisateur/verif_user'); ?>",   //"./client/create"
                     {
                         username: username, password: password
                     },
                     function(data, status){
                         if (data==0)
                         {
                             $( "#message" )
                                 .text( "username or password incorrect" )
                                 .css("font-weight","Bold")
                                 .css("color", "red")
                                 .css("fontSize", "26px")
                                 .fadeIn( 3000, function(){
                                     $( this ).fadeOut( 3000, function(){
                                     });
                                 });
                         }
                         else {
                             window.location.href = "<?php echo site_url('restaurant'); ?>";
                            
                         }
                     }
                 );
                 
             }
             
         });


        $("#sign_up").click(function()
        {
            var nom=$("#nom").val();
            var prenom=$("#prenom").val();
            var email=$("#email").val();
            var password=$("#password").val();
            var username=$("#username").val();
            var confirm_password=$("#confirm_password").val();
            if (!(isNaN(nom) && isNaN(prenom) && isNaN(email) && isNaN(password) && isNaN(username) && isNaN(confirm_password))) {
                $( "#message" )
                    .text( "rempliez tout les champs" )
                    .css("font-weight","Bold")
                    .css("color", "red")
                    .css("fontSize", "26px")
                    .fadeIn( 3000, function(){
                        $( this ).fadeOut( 3000, function(){
                        });
                    });



            }
                else if (!(password==confirm_password)) {


                $( "#message" )
                    .text( "vérfiez le mot de passe" )
                    .css("font-weight","Bold")
                    .css("color", "red")
                    .css("fontSize", "30px")
                    .fadeIn( 3000, function(){
                        $( this ).fadeOut( 3000, function(){
                        });
                    });
            }

            else
            {
                $.post("<?php echo site_url('/utilisateur/create'); ?>",   //"./client/create"
                    {
                        nom: nom, prenom: prenom, email: email, password: password, username: username
                    }
                );
                window.location.href = "<?php echo site_url('restaurant'); ?>";
                

            }

        });
    });
</script>
<h1> Gestion des restaurants</h1>

<div class="main-content">

    <div class="sap_tabs">

        <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
            <div id="message" ></div>
            <ul>
                <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Sign up</span></li>
                <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Sign in</span></li>

            </ul>
            <!---->

            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                <div class="facts">
                    <!--login1-->
                    <div class="register">
                        <form method="POST">

                            <input placeholder="Nom" type="text" id="nom" >
                            <input placeholder="Prenom" type="text" required="" id="prenom">
                            <input placeholder="username" type="text" required="" id="username">
                            <input placeholder="Email Address" type="text" required="" id="email">
                            <input placeholder="Password" type="password" required="" id="password">
                            <input placeholder="Confirm Password" type="password" required="" id="confirm_password">
                            <div class="sign-up">
                                <input type="button" value="Create Account" id="sign_up"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
                <div class="facts">
                    <div class="register">
                        <form method="POST">
                            <input placeholder="username"  type="text" required="" id="username1">
                            <input placeholder="Password" class="lock" type="password" required="" id="password1">
                            <div class="sign-up">
                                <input type="button" value="Sign in" id="sign_in"/>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
</body>
</html>
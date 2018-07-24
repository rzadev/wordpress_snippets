<?php
// Struktur file: C:\wamp64\www\atw\wp-content\themes\atw\login
// Functions.php
function function_name() {
    wp_enqueue_style( 'vegasCSS', get_template_directory_uri() . '/login/css/vegas.min.css', false);
    wp_enqueue_style( 'loginCSS', get_template_directory_uri() . '/login/css/loginStyle.css', false);

    wp_enqueue_script('jquery');
    wp_enqueue_script( 'vegasJS', get_template_directory_uri() . '/login/js/vegas.min.js', array('jquery'), '2.4.0', true ); // true = append in the footer
    wp_enqueue_script( 'loginjs', get_template_directory_uri() . '/login/js/login.js', array('jquery'), '1.0.0', true ); 

    // Passing php_variable_to_javascript
    wp_localize_script( 
        // Pass the name of the file to pass the variable  
         'loginjs',
         // Name of the container of the information that you want to add
         'login_images',
         // Pass the information
         array(
             "theme_path" => get_template_directory_uri() . '/login/img'
         )
     );
}
 add_action( 'login_enqueue_scripts', 'function_name', 10 );




?>

<script>
// Pakai plugin jQuery Vegas
jQuery(function($) {
  // Use vegas
  $('body').vegas({
    slides: [
      // Ambil path dari function.php,  wp_localize_script
      { src: login_images.theme_path + "1.jpg"},
      { src: login_images.theme_path + "2.jpg"},
      { src: login_images.theme_path + "3.jpg"}
    ],
    overlay: login_images.theme_path + 'overlays/05.png',
    transition: ['fade', 'zoomOut', 'swirlLeft']    
  })
});
</script>

<!-- CSS -->
body.login {
  background: transparent;
  padding-top: 50px;
  box-sizing: border-box;
}

body.login div#login {
  background-color: rgba(0,0,0,.65);
  padding: 40px 30px;
  border-radius: 15px;
  box-shadow: -3px 7px 35px 1px rgba(0,0,0,.8);
}

@media only screen and (min-width: 768px){
  /* Position the login to the center */
  body.login div#login {
    width: 700px;
    margin: auto;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    height: 330px;
  }
} 

@media only screen and (min-width: 768px) {
/* Change logo position */
body.login div#login h1 {
  display: inline-block;
  width: 50%;
  margin-top: 100px;
}
}

/* Change the logo */
body.login div#login h1 a {
  background-image: url(../img/logo.png);
  background-size: 60%;
  height: 100px;
  width: 100%;
  margin: 0;
}

/* Login Form */
body.login div#login form#loginform {
  float: right;
}


/* Edit label style */
body.login div#login form#loginform p label {
  color: #000;
}

/* Edit Form input style */
body.login div#login form#loginform input {
  background: #fff;
  border: 1px solid #000;
}


@media only screen and (min-width: 768px) {
  /* Change Remember Me position */
  body.login div#login form#loginform p.forgetmenot {
    margin-top: 8px;
  }
}

/* Edit Log In button style */
body.login div#login form#loginform p.submit input#wp-submit {
  background-color: #000;
  border: none;
  text-transform: uppercase;
  padding: 5px 40px;
  height: auto;
  box-shadow: none;
  text-shadow: none;
}

/* Style the lost password */
body.login div#login p#nav {
  text-align: center;
}
@media only screen and (min-width: 768px) {
  body.login div#login p#nav {
    display: inline;
  }
}

body.login div#login p#nav a {
  color: #fff;
}

/* Style the <- back to */
body.login div#login p#backtoblog {
  text-align: center;
}
body.login div#login p#backtoblog a {
  color: #fff;
}

@media only screen and (min-width: 768px) {
  body.login div#login p#backtoblog {
    display: inline;
    float: right;
    margin: 0;
  }
}

/* Position the error message */
#login_error {
  width: 100%;
  top: 0;
  left: 0;
  position: absolute;
  box-sizing: border-box;
}

.group {
  margin-bottom: 20px;
}

/* Clearfix */
.group:after {
  visibility: hidden;
  display: block;
  content: "";
  clear: both;
  height: 0;
}

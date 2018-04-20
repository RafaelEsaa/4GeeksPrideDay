<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title> </title>
    <?php wp_head(); ?>
</head>
<header>
    <div class="row menu-mobile">
        <div class="col-md-4 offset-md-8 mobile-absolute">
            <div class="pos-f-t mobile-relative">
              <div class="collapse" id="navbarToggleExternalContent">
                <div class="nav-background-color-mobile p-4">
                    <!--<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                      <li class="nav-item active">
                        <a class="" href="#">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="" href="#">Link</a>
                      </li>
                    </ul>-->
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'top-menu',
                            'container' => '',
                        )
                    )
                    ?>
                </div>
              </div>
              <nav class="navbar navbar-light nav-menu-mobile">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              </nav>
            </div>
        </div>
    </div>
</header>
<body>
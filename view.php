<?php

include './view/view_navbar.php';
include './view/view_principal.php';
include './view/view_about.php';
include './view/view_contact.php';
include './view/view_location.php';

function view()
{
    ?>
    <!DOCTYPE html>
    <html>
    <?php
    view_head();
    view_body();
    ?>
    </html>
    <?php
}

function view_head()
{    
    ?>
    <head>
    <title>W3.CSS Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./lib/w3.css">
    </head>
    <?php
}

function view_body(): Void
{    
    ?>
    <body>
    <?php
    view_navbar();
    view_header();
    view_content();
    view_footer();
    ?>
    </body>
    <?php
}

function view_header()
{
    ?>
    <header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
        <img class="w3-image" src="https://www.w3schools.com/w3images/architect.jpg" alt="Architecture" width="1500" height="800">
        <div class="w3-display-middle w3-margin-top w3-center">
            <h1 class="w3-xxlarge w3-text-white">
                <span class="w3-padding w3-black w3-opacity-min"><b>BR</b></span> 
                <span class="w3-hide-small w3-text-light-grey"> Architects</span>
            </h1>
        </div>
    </header>
    <?php
}

function view_content(): Void
{
    ?>
    <div class="w3-content w3-padding" style="max-width:1564px">
    <?php
    view_principal();
    view_about();
    view_contact();
    view_location();
    ?>
    </div>
    <?php
}

function view_footer()
{
    $data = (String) $GLOBALS['data'];
    $pageFooter = (Object) json_decode($data);
    $footData = (Object) $pageFooter->{'footer'};
    $footer_message = (String) $footData->{'footer_message'};
    $footer_autor = (String) $footData->{'footer_autor'};
    $footer_class = (String) $footData->{'footer_class'};
    $footer_link_title = (String) $footData->{'footer_link_title'};
    $footer_link_target = (String) $footData->{'footer_link_target'};
    $footer_link_href = (String) $footData->{'footer_link_href'};
    ?>
    <footer class="<?php echo $footer_class; ?> ">
    <p>
        <?php echo $footer_message; ?> 
        <a href="<?php echo $footer_link_href; ?>" title="<?php echo $footer_link_title; ?>" target="<?php echo $footer_link_target; ?>" class="<?php echo $footer_class; ?>"><?php echo $footer_autor; ?></a>
    </p>
    </footer>
    <?php
}

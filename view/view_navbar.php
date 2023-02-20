<?php

function view_navbar(): Void
{
    $data = (String) $GLOBALS['data'];
    $data = (Object) json_decode($data);
    navbar_body($data);
}

function navbar_body(Object $data): Void
{
    ?>
    <div class="w3-top">
        <div class="w3-bar w3-white w3-wide w3-padding w3-card">
            <?php
            $links = (Array) $data->{'navbar_links'};
            navbar_logo();
            navbar_links($links);
            ?>
        </div>
    </div>
    <?php
}

function navbar_logo(): Void
{
    ?>
    <a href="#home" class="w3-bar-item w3-button"><b>BR</b> Architects</a>
    <?php
}

function navbar_links(Array $links): Void
{
    ?>
    <div class="w3-right w3-hide-small">
        <?php
        foreach ($links as $link) 
        {
            navbar_link($link);
        }
        ?>
    </div>
    <?php
}

function navbar_link(Object $link): Void
{
    $link_href = (String) $link->{'link_href'};
    $link_class = (String) $link->{'link_class'};
    $link_text = (String) $link->{'link_text'};
    ?>
    <a href="<?php echo $link_href; ?>" class="<?php echo $link_class; ?>"><?php echo $link_text; ?></a>
    <?php
}

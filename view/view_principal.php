<?php

function view_principal(): Void
{
    $data = (String) $GLOBALS["data"];
    $myData = (Object) json_decode($data);
    principal_body($myData);
}

function principal_body(Object $myData): Void
{
    $enArriendo = (Array) $myData->{'enArriendo'};
    $enVenta = (Array) $myData->{'enVenta'};
    section_title($myData);
    diseno_row($enArriendo);
    diseno_row($enVenta);
}

function section_title(Object $myData): Void
{
    ?>
    <div class="w3-container w3-padding-32" id="projects">
        <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16"><?php echo $myData->{'titulo'}; ?></h3>
    </div>
    <?php
}

function diseno_row(Array $items): Void
{
    ?>
    <div class="w3-row-padding">
    <?php
    foreach ($items as $item)
    {
        diseno_item($item);
    }
    ?>
    </div>
    <?php
}

function diseno_item(Object $item): Void
{
    $item_name = (String) $item->{'item_name'};
    $item_img = (String) $item->{'item_img'};
    $alt = (String) $item->{'alt'};
    ?>
    <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-display-container">
            <div class="w3-display-topleft w3-black w3-padding">
                <?php echo $item_name; ?>
            </div>
            <img src="<?php echo $item_img; ?>" alt="<?php echo $alt; ?>" style="width:100%">
        </div>
    </div>
    <?php
}

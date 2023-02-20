<?php

function view_contact()
{
    $data = (String) $GLOBALS['data'];
    $data = (Object) json_decode($data);
    section_body($data);
}

function section_body(Object $data): Void
{
    ?>
    <div class="w3-container w3-padding-32" id="contact">
    <?php
    $contact_section = (Object) $data->{'contact_section'};
    section_contact($contact_section);
    form_title($contact_section);
    form_contact($contact_section);
    ?>
    </div>
    <?php
}

function section_contact(Object $data): Void 
{
    $seccion = (Object) $data->{'section'};
    $sectionClass = (String) $seccion->{'sectionClass'};
    $sectionTytle = (String) $seccion->{'sectionName'};
    ?>
    <h3 class="<?php echo $sectionClass; ?>"><?php echo $sectionTytle; ?></h3>
    <?php
}

function form_title(Object $data): Void
{
    $title = (String) $data->{'form_title'};
    ?>
    <p><?php echo $title; ?></p>
    <?php
}

function form_contact(Object $data): Void
{
    $action = (String) $data->{'action'};
    $inputs = (Array) $data->{'inputs'};
    $send = (Object) $data->{'send'};
    ?>
    <form action="<?php echo $action; ?>" target="_blank">
        <?php
        form_inputs($inputs);
        form_send($send);
        ?>
    </form>
    <?php
}

function form_inputs(Array $inputs): Void
{
    foreach ($inputs as $input)
    {
        form_input($input);
    }
}

function form_input(Object $input): Void
{
    $inputClass = (String) $input->{'inputClass'};
    $inputType = (String) $input->{'inputType'};
    $placeholder = (String) $input->{'placeholder'};
    $name = (String) $input->{'name'};
    ?>
    <input class="<?php echo $inputClass; ?>" type="<?php echo $inputType; ?>" placeholder="<?php echo $placeholder; ?>" required name="<?php echo $name; ?>">
    <?php
}

function form_send(Object $send): Void
{
    $buttonClass = (String) $send->{'buttonClass'};
    $inputType = (String) $send->{'buttonType'};
    $iFa = (String) $send->{'buttonIFa'};
    $buttonValue = (String) $send->{'buttonValue'};
    ?>
    <button class="<?php echo $buttonClass; ?>" type="<?php echo $inputType; ?>">
    <i class="<?php echo $iFa; ?>"></i>
    <?php echo $buttonValue; ?>
    </button>
    <?php
}

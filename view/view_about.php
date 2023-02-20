<?php

function view_about()
{
    $data = (String) $GLOBALS['data'];
    $data = (Object) json_decode($data);
    about_body($data);
}

function about_body(Object $data): Void
{
    $members = (Array) $data->{'miembros'};
    expo();
    team($members);
}

function expo()
{
    ?>
    <div class="w3-container w3-padding-32" id="about">
        <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About</h3>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
            occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip ex ea commodo consequat.
        </p>
    </div>
    <?php
}

function team(Array $members): Void
{
    ?>
    <div class="w3-row-padding w3-grayscale">
      <?php
      foreach ($members as $member)
      {
        member($member);
      }
      ?>
    </div>
    <?php
}

function member(Object $member): Void
{
    $memberClass = (String) $member->{'memberClass'};
    $memberImg = (String) $member->{'memberImg'};
    $memberAlt = (String) $member->{'memberAlt'};
    $memberName = (String) $member->{'memberName'};
    $memberposition = (String) $member->{'memberposition'};
    $memberpositionClass = (String) $member->{'memberpositionClass'};
    $memberfunctions = (String) $member->{'memberfunctions'};
    ?>
    <div class="<?php echo $memberClass; ?>">
        <img src="<?php echo $memberImg; ?>" alt="<?php echo $memberAlt; ?>" style="width:100%">
        <h3><?php echo $memberName; ?></h3>
        <p class="<?php echo $memberpositionClass; ?>"><?php echo $memberposition; ?></p>
        <p><?php echo $memberfunctions; ?></p>
        <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <?php
}

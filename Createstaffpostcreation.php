<?php

$result = $_REQUEST['createnewstaff'];

?>

<div class="container pb-6">
    <main role="main">
      <?php
        if($result):?>

        <h2>A user successfully created</h2>
        <?php else:?>
            <h2>A user was not successfully created</h2>
        <?php endif; ?>
            <br>

        <div>
            <a href="Createnewstaff.php">Create new staff</a>

        </div>
    </main>
</div>


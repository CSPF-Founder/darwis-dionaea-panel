<?php

use Core\View;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Error Occurred!</title>
    <link rel="stylesheet" href="/resources/new-theme/vendor/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="/resources/new-theme/css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="/resources/new-theme/css/style.css" rel="stylesheet">

</head>

<body class="nav-md">

    <div class="bg-light min-vh-100 d-flex flex-row align-items-center dark:bg-transparent">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="clearfix">
                        <h1 class="display-3 me-4">Error Occurred !
                        </h1>

                        <?php if (isset($error_message)) : ?>
                            <h4 class="pt-3">Message: <?php View::securePrint($error_message) ?></h4>
                        <?php else : ?>
                            <h4 class="pt-3">Sorry, an unknown error has occurred - Please contact the admin </h4>
                        <?php endif; ?>
                        <h4 class="pt-3"> If the problem persists feel free to contact us</h4>


                    </div>

                </div>
            </div>
        </div>
    </div>

</body>
<script src="/resources/new-theme/vendor/@coreui/coreui-pro/js/coreui.bundle.min.js"></script>
<script src="/resources/new-theme/vendor/simplebar/js/simplebar.min.js"></script>

</html>
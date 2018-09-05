<?php include "process/classApotek.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <?php
        include "temp/header.php";
    ?>
    <body>
        <?php include "temp/topbar.php"; ?>
        <?php include "temp/menubar.php"; ?>
        <div id="site_content">
            <div class="container">
                <div class="row">
                    <?php 
                    if(isset($_GET['page']))
                    {
                        include "$_GET[page]";
                    }
                    else
                    {
                        include "page/main.php";
                    }
                    ?>
                    </div>

                </div>
            </div>
        </div>



        <?php include "temp/footer.php"; ?>
        <a style="display: none" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </body>
</html> 
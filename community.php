<!DOCTYPE html>
<html lang="en">

<?php
$title="Sponsors";
$community="active";
include("layouts/header.php");
?>

<body>

    <!-- first Section -->
    <section>
        <div class="container-fluid remove">
            <div class="row remove about">
                <div class="first-section-div">
                    <div class="first-section ">
                        <?php 
                            include("layouts/navbar.php");
                        ?>
                        <div class="col-md-12 firt-section-body">
                            <div class="col-md-12  div-1-b1">
                                Community
                            </div>
                            <div class="col-md-12 div-1-h1">
                                Home/Community
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Second Section -->
    <section>
        <div class="container-fluid remove">
            <div class="row remove">
                <!-- Tabs -->
                <div class="col-md-12 tabs-div">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 nav-pills-tab" id="nav-pills-tab">
                        <ul class="nav nav-tabs text-center ">
                            <li class="active"><a data-toggle="tab" href="#groups">Groups</a></li>
                            <li><a data-toggle="tab" href="#hubs">Hubs</a></li>
                            <li><a data-toggle="tab" href="#startups">Startups</a></li>
                            <li><a data-toggle="tab" href="#talents">Talents</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="tab-content">
                    <div id="groups" class="tab-pane fade in active ">
                        <div class="col-md-12 new-group-div" align="center">
                            <a href="" type="button" class="btn btn-event-sponsor">Register your group</a>
                        </div>
                    </div>
                    <div id="hubs" class="tab-pane fade">

                    </div>
                    <div id="startups" class="tab-pane fade">

                    </div>
                    <div id="talents" class="tab-pane fade">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ninth Section -->
    <section>
            <div class="container-fluid remove">
                <div class="row remove">
                    <div class="ninth-section-div">
                        <div class="ninth-section">
                            <div class="col-md-3"></div>
                            <div class="col-md-6 ninth-section-body">
                                <div class="col-md-12 div-9-h1">
                                    SUBSCRIBE TO NEWSLETTER
                                </div>
                                <div class="col-md-12 div-9-h2">
                                    Stay in the loop
                                </div>
                                <div class="col-md-12 div-9-b1">
                                    <div class="input-group">
                                        <input type="text" class="sign_up form-control" placeholder="your_email@domain.com">
                                        <span class="input-group-btn">
                                            <button class="btn  btn-sign_up" type="button">Sign Up!</button>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-12 div-9-b2">
                                    Thank you for visiting...
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php 
    include("layouts/footer.php");
    ?>
</body>

</html>
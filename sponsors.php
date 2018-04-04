<!DOCTYPE html>
<html lang="en">

<?php
$title="Sponsors";
$sponsors="active";
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
                                Sponsors
                            </div>
                            <div class="col-md-12 div-1-h1">
                                Home/Sponsors
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
                <div class="col-md-12 sponsor-logos-div">
                    <div class="col-md-12 sponsor-logos" align="center">
                        
                        <div ><img src="images/brands/main_logo.png" class="sponsor-logo event-special-logo"/></div>
                        <div><img src="images/brands/UNICORN.NG.png" class="sponsor-logo"/></div>
                        <div ><img src="images/brands/Nearbuy.png" class="sponsor-logo"/></div>
                        <div><img src="images/brands/bubble.png" class="sponsor-logo"/></div>
                       
                    </div>
                    <div class="col-md-12 new-sponsor-div" align="center">
                        <a href="" type="button" class="btn btn-event-sponsor">Become a Sponsor</a>
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
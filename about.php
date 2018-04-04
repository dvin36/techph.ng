<!DOCTYPE html>
<html lang="en">

<?php
$title="About";
$about="active";
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
                                About Tech Port Harcourt
                            </div>
                            <div class="col-md-12 div-1-h1">
                                Home/About
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
            <div class="row remove about">
                <div class="col-md-8 second-section-body">
                    <div class="col-md-12 div-2-h1">
                        The Tech Community of Tech Communities in Port Harcourt
                    </div>
                    <div class="col-md-12 div-2-b1">
                        Tech Port Harcourt will expose to the world all the activities going on in the tech world South of the Niger, celebrate and advertise her talents and show you why Port Harcourt is one of the best places to find tech talents and launch tech startups.
                    </div>
                    <div class="col-md-12 div-2-b2">
                        <a href="#" type="button"  class="btn btn-volunteer">Volunteer</a>
                        <a href="#" type="button"  class="btn btn-sponsor">Sponsor</a>
                    </div>
                </div>
                <div class="col-md-4 second-section-bg-image">

                </div>
            </div>
        </div>
    </section>

    <!-- Third Section -->
    <section>
        <div class="container-fluid remove">
            <div class="row remove about">
                <div class="col-md-12 third-section-div" align="center">
                    <div class="col-md-12 div-3-h1">
                        Our Volunteer Team
                    </div>
                    <div class="col-md-12 team-slide">
                        <div class="col-md-4 remove">
                            <div class="col-md-12 team-img-div">
                                <img src="images/team/precious.jpg" class="team-member-img"/>
                            </div>
                            <div class="col-md-12 team-member-name">
                                Precious Chukundah
                            </div>
                            <div class="col-md-12 team-member-position">
                                Programs
                            </div>
                        </div>
                        <div class="col-md-4 remove">
                            <div class="col-md-12 team-img-div">
                                <img src="images/team/joshua_josh.jpg" class="team-member-img"/>
                            </div>
                            <div class="col-md-12 team-member-name">
                                Joshua Joshua
                            </div>
                            <div class="col-md-12 team-member-position">
                                Sponsorship
                            </div>
                        </div>
                        <div class="col-md-4 remove">
                            <div class="col-md-12 team-img-div">
                                <img src="images/team/faith_dike.jpg" class="team-member-img"/>
                            </div>
                            <div class="col-md-12 team-member-name">
                                Faith Dike
                            </div>
                            <div class="col-md-12 team-member-position">
                                Community Manager
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fourth Section -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 fb-buttons" align="center">
                    <a href="#" type="button" class="btn btn-fb">Facebook</a>
                    <a href="#" type="button" class="btn btn-fb">Facebook</a>
                    <a href="#" type="button" class="btn btn-fb">Facebook</a>
                    <a href="#" type="button" class="btn btn-fb">Facebook</a>
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

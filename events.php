<!DOCTYPE html>
<html lang="en">

<?php
$title="Events";
$events="active";
include("layouts/header.php");
?>

<body>

    <!-- first Section -->
    <section>
        <div class="container-fluid remove">
            <div class="row remove events">
                <div class="first-section ">
                    <?php 
                        include("layouts/navbar.php");
                    ?>
                    <div class="col-md-12 events-section-body">
                        <div class="col-md-12 events-h h1">
                            Upcoming Events
                        </div>
                        <div class="col-md-12 event-body remove">
                            <div class="col-md-12 event-date event-text">
                                April 2018
                            </div>
                            <div class="col-md-5 event-pic remove-padding">
                               <img src="images/tphc3.jpg" class="event-img"/>
                            </div>
                            <div class="col-md-7 event-info">
                                <div class="col-md-12 events-h h2">
                                    IWD Women Day
                                </div>
                                <div class="col-md-12 event-text">
                                    Women Techmakers
                                </div>
                                <div class="col-md-12 event-text">
                                    Knowledge Development Centre. Port Harcourt
                                </div>
                                <div class="col-md-12 event-text">
                                    Saturday, 1st April, 2018
                                </div>
                                <div class="col-md-12 event-text">
                                    10:00AM WAT
                                </div>
                                <div class="col-md-12 event-text event-info-footer">
                                    The Women Techmakers, Port Harcourt invite you to her event celebrating Women in Tech.<br><br>
                                    <a href="#" class="event-see-more">See More . . .</a> 
                                </div>
                                <div class="col-md-12" align="left">
                                    <a href="" type="button" class="btn btn-get-tickets">Get Tickets</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 event-body remove">
                            <div class="col-md-12 event-date event-text">
                                May 2018
                            </div>
                        </div>
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
<!-- The Navbar -->
    <section>
        <!-- Large Screen Navbar -->
        <nav class="navbar  main-nav hidden-xs hidden-sm <?php if(isset($events)){ echo "events-navbar"; }?>" >
            <div class="col-md-2 col-sm-2 col-xs-12 bordered-nav">
                <div class="navbar-header ">
                    <div class="row text-left">
                        <div class="col-xs-3 col-md-0">
                            <button style="float:left" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                    <span class="icon-bar main-nav"></span>
                                    <span class="icon-bar main-nav"></span>
                                    <span class="icon-bar main-nav"></span>                      
                                </button>
                        </div>
                        <div class="col-xs-9 col-md-12">
                            <a class="navbar-brand main-nav"  href="index">TECH PH</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-7 text-center bordered-nav">
                <div class="col-md-2">

                </div>
                <div class="collapse navbar-collapse col-md-8 " id="myNavbar">
                    <ul class="nav   navbar-nav" >
                        <li class="<?php if(isset($home)){ echo $home; }?>"><a href="index">Home</a></li>
                        <li class="<?php if(isset($about)){ echo $about; }?>"><a href="about">About</a></li>
                        <li class="<?php if(isset($publications)){ echo $publications; }?>"><a href="#">Publications</a></li>
                        <li class="<?php if(isset($events)){ echo $events; }?>"><a href="events">Events</a></li>
                        <li class="<?php if(isset($sponsors)){ echo $sponsors; }?>"><a href="sponsors">Sponsors</a></li>
                        <li class="<?php if(isset($community)){ echo $community; }?>"><a href="community">Community</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                        
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 bordered-nav ">
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav main-nav navbar-nav ">
                        <li class="col-md-4 bordered-nav2"><a href="#"><i class="glyphicon glyphicon-search"></i></a></li>
                        <li class="col-md-2"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="col-md-2" ><a href="#"><i class="fa fa-twitter"></i></a></li> 
                        <li class="col-md-4"><a href="#"><i class="fa fa-medium"></i></a></li>    
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Mobile Navbar -->
        <nav class="navbar visible-sm visible-xs <?php if(isset($events)){ echo "events-navbar"; }?>">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar2">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                    </button>
                    <a class="navbar-brand main-nav"  href="index">TECH PH</a>
                </div>
                <div class="collapse navbar-collapse text-center" id="myNavbar2">
                    <ul class="nav navbar-nav">
                        <li class="<?php if(isset($home)){ echo $home; }?>"><a href="index">Home</a></li>
                        <li class="<?php if(isset($about)){ echo $about; }?>"><a href="about">About</a></li>
                        <li class="<?php if(isset($publications)){ echo $publications; }?>"><a href="#">Publications</a></li>
                        <li class="<?php if(isset($events)){ echo $events; }?>"><a href="events">Events</a></li>
                        <li class="<?php if(isset($sponsors)){ echo $sponsors; }?>"><a href="sponsors">Sponsors</a></li>
                        <li class="<?php if(isset($community)){ echo $community; }?>"><a href="community">Community</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
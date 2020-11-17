<?php 
include('includes/header.php');
include('includes/navbar.php');
?>      
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_text">
                    <h2>Contact</h2>
                    <p>Get in touch</p>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Get in Touch Area =================-->
        <section class="get_in_touch_area p_100">
            <div class="container">
                <div class="row get_touch_inner">
                    <div class="col-lg-6">
                    <p style="color:#c80000;">Required fields are marked with an asterisk (*).</p>
                        <form class="contact_us_form row" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="form-group col-lg-6">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                            </div>
                            <div class="form-group col-lg-6">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject*">
                            </div>
                            <div class="form-group col-lg-12">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit" value="submit" class="btn submit_btn form-control">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <div class="touch_details">
                            <div class="l_title">
                                <h2>Get in touch</h2>
                            </div>
                            <p>Please complete the below form and we’ll make sure the right team member gets back to you.</p>
                            <a href="tel:+27625417921"><h5>Call us now</h5></a>
                            <a href="tel:+27625417921"><h4>+27625417921</h4></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Get in Touch Area =================-->
        
       <!--================Map Area =================-->
        <section class="world_map_area p_100">
            <div class="container">
                <div class="world_map_inner">
                    <img class="img-fluid" src="img/world-map.png" alt="">
                    <div class="bd-callout">
                        <h3>Midrand Office</h3>
                        <p>Johannesburg<br />  South Africa</p>
                        <h4><a href="#">+27 6254 17921</a> <a href="#">contact@sgcholdings.co.za</a></h4>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Map Area =================-->
        
       <?php include('includes/footer.php');?>
    </body>
</html>
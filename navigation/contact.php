<!-- Start search-course Area -->
<section class="search-course-area relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-6 search-course-left">
                <h1 class="text-white">
                    Yamang Lupa <br>
                    Decision Support System
                </h1>
                <p>
                    Decision Support System (DSS) is a computer system that supports managers in nonroutine decision-making tasks.
                </p>
                <div class="row details-content">
                    <div class="col single-detials">
                        <span class="lnr lnr-location"></span>
                        <a href="#!"><h4>Location</h4></a>		
                        <p>
                            Sariaya, Quezon Province 4301
                        </p>						
                    </div>
                    <div class="col single-detials">
                        <span class="lnr lnr-map-marker"></span>
                        <a href="#!"><h4>Who we are to serve</h4></a>		
                        <p>
                            Sariaya, Quezon (2nd District)<br>
                            Total area: 24,530 hectares (43 barangays)
                            Agricultural areas: 20,062.25 hectares  (81.79%)
                        </p>						
                    </div>								
                </div>
            </div>
            <div class="col-lg-4 col-md-6 search-course-right section-gap">
                <form class="form-wrap" action="message.php" method="POST">
                    <?php if (isset($_SESSION['success'])) : ?>
                      <div class="error success" >
                        <h3>
                          <?php 
                            echo $_SESSION['success']; 
                            unset($_SESSION['success']);
                          ?>
                        </h3>
                      </div>
                    <?php endif ?>
                    <h4 class="text-white pb-20 text-center mb-30">Send Messages</h4>		
                    <input type="text" class="form-control" name="name" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" >
                    <input type="phone" class="form-control" name="phone" placeholder="Your Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Phone Number'" >
                    <input type="email" class="form-control" name="email" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'" >
                    <textarea class="common-textarea form-control" name="message" placeholder="Your Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" required=""></textarea>								
                    <button class="primary-btn text-uppercase" name="send">Send</button>
                </form>
            </div>
        </div>
    </div>	
</section>
<!-- End search-course Area -->
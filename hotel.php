<?php
include 'views/templates.php';

generateHeader('Hotel', array('type', 'hotel'));
?>
<!-- navigation ends here -->
<!-- start different pages of my parallax thing -->
<div id="hotel-banner" class="parallax-1 screen-1 banner" data-stellar-background-ratio="0.3">
    <div class="container">
        <h1 class="title">Why are you my clarity?</h1>
    </div>
</div>
<div id="edu-content" class="content screen-2 parallax-2">
    <div class="container">
        <h1>Bed and Breakfast</h1>
        <div class="col-md-12">
            <p class="lead">Designed for both business and leisure travel, Casa San Miguel Bed and Breakfast is ideally situated in Pundaquit - San Antonio; one of the city's most popular locales. From here, guests can enjoy easy access to all that the lively city has to offer. With its convenient location, the hotel offers easy access to the city's must-see destinations.
            </p>
        </div>
        <div class="col-md-12">
            <ul class="unstyled">
                <li>5 beautifully appointed guest rooms</li>
                <li>each including non smoking rooms, fan, air conditioning, internet access – LAN (complimentary), shower. </li>
                <li>The hotel offers many unique recreational opportunities such as garden. When you are looking for comfortable and convenient accommodations in Subic (Zambales), make Casa San Miguel Bed and Breakfast your home away from home.</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h2>Rates</h2>
            <table class="table">
                <thead>
                    <tr class="btn-primary">
                        <td>Room Type</td>
                        <td>Peak</td>
                        <td>Off-Peak</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Single</td>
                        <td>P900.00</td>
                        <td>P100.00</td>
                    </tr>
                    <tr>
                        <td>Double</td>
                        <td>P1800.00</td>
                        <td>P100.00</td>
                    </tr>
                    <tr>
                        <td>Triple</td>
                        <td>P1800.00</td>
                        <td>P100.00</td>
                    </tr>
                </tbody>

            </table>
        </div>
        <div class="col-md-6">
            <h2>The Fine Print</h2>
            <p>CHECK IN time is 1:00pm. CHECK OUT time is 11:00am.</p>
            <p>Extended hours of stay shall have corresponding extra charges. Bringing electronic appliances will incur additional charges.</p>
            <p>A deposit fee equivalent to half day’s rate will surface for reservation confirmation.</p>
            <p>Loren ipsum chorva loo Loren ipsum chorva loo Loren ipsum chorva loo Loren ipsum chorva loo Loren ipsum chorva loo Loren ipsum chorva loo Loren ipsum chorva loo </p>
        </div>
    </div>
</div>
<div id="edu-register" class="parallax-4 screen-4 forms">
    <div class="container">
        <div class="col-md-6">
            <h1 class="title">Inquiry</h1>
            <form action="mail.php" role="form">
                <fieldset disabled>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" value="Register for Education" class="form-control">
                    </div>
                </fieldset>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="message">Short Message</label>
                    <textarea class="form-control" id="message"></textarea>
                </div>
                <!-- <button type="submit" class="btn btn-default btn-social facebook"><i class="icon-facebook"></i>Register via Facebook</button> -->
                <button type="submit" class="btn btn-default btn-large btn-casa"><i class="icon-envelope"></i>Submit</button>
            </form>
        </div>
        <!-- <div class="overlay"></div> -->
    </div>
</div>
<div class="footer">
    <div class="container">
        <p>CASA San Miguel, Evagelista Street, Barangay San Miguel, San Antonio, Zambales, 2206 Philippines </p>
    </div>

</div>
<!-- end different pages of my parallax thing -->
</div>
</div>

<?php generateFooter(); ?>

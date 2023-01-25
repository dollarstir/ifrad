<?php
involve('functions.php');

begin2('Track');

?>
<body>

<?php topnav2(); ?>
    <!-- navbar end -->
    
    <!-- breadcrumb start -->
    <div class="breadcrumb-area bg-overlay-2" style="background-image:url('front2/assets/img/banner/breadcrumb.png')">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-inner">
                        <div class="section-title mb-0">
                            <h2 class="page-title">TRACK</h2>
                            <ul class="page-list">
                                <li><a href="home">Home</a></li>
                                <li>Track</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->  

    

    <!-- contact area start -->
    <div class="container">
        <div class="contact-area mg-top-120 mb-120">
            <div class="row g-0 justify-content-center">
                <div class="col-lg-10">
                    <!-- <form class="contact-form text-center">
                        <h3>TRACK SHIPMENT</h3>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="single-input-inner">
                                    <label><i class="fa fa-user"></i></label>
                                    <input type="text" placeholder="Track a Shipment: Enter Way Bill Number">
                                </div>
                            </div>
                            <div class="col-md-4">
                            <a class="btn btn-base" href="#"> Track
                                </a>
                                
                            </div>
                            
                            
                           
                        </div>
                    </form> -->


                    <?php
if (isset($_GET['tracking'])) {
    if ($_GET['tracking'] == '') {
        echo '';
    } else {
        if (authenticate('package', [['trackid', '=', $_GET['tracking']]]) == 'success') {
            $rev = customfetch('package', [['trackid', '=', $_GET['tracking']]]);
            $rev = $rev[0];

            $rh = customfetch('history', [['trackid', '=', $_GET['tracking']]], '', ['id' => 'DESC']);

            echo '<div style="margin: 5%" class="inner_main_agile_section">
            <div class="container">
                <h3 class="w3l_header w3_agileits_header">Shipment <span> Summary</span></h3>
                <p class="sub_para_agile two"></p>
                <div class="bs-docs-example">
        
                    <table class="table table-bordered table-hover table-striped">
                        
                        <tbody>
                        <tr>
                            <td>#</td>
                            <td>'.$rev['trackid'].'</td>
                            
                        </tr>
                        <tr>
                            <td>Item Description</td>
                            
                            <td> '.$rev['item'].'</td>
                            
                        </tr>
                        <tr>
                            <td>Origin Service Area</td>
                            <td>'.$rev['origin'].'</td>
                            
                        </tr>
                        <tr>
                            <td>Current location</td>
                            
                            <td>'.$rev['current'].'</td>
                            
                        </tr>
                        <tr>
                            <td>Destination Service Area</td>
                            <td>'.$rev['destination'].'</td>
                            
                        </tr>
                       

                        <tr>
                            <td>Weight</td>
                           
                            <td>'.$rev['weight'].'</td>
                            
                        </tr>

                        <tr>
                            <td>Payment Mode</td>
                           
                            <td>'.$rev['paymode'].'</td>
                            
                        </tr>

                        <tr>
                            <td>Shipping Mode</td>
                           
                            <td>'.$rev['shipmode'].'</td>
                            
                        </tr>

                        <tr>
                            <td>Status</td>
                           
                            <td>'.$rev['status'].'</td>
                            
                        </tr>
                        <tr>
                            <td>Pickup Date</td>
                            <td>'.$rev['pickupdate'].'</td>
                        </tr>
                        <tr>
                            <td>Expected Delivery Date</td>
                           
                            <td>'.$rev['edeliverydate'].'</td>
                            
                        </tr>

                        <tr>
                            <td>Departure Time</td>
                           
                            <td>'.$rev['departuretime'].'</td>
                            
                        </tr>

                        <tr>
                            <td>Shipper Name</td>
                           
                            <td>'.$rev['shippername'].'</td>
                            
                        </tr>

                        <tr>
                            <td>Shipper Address</td>
                           
                            <td>'.$rev['shipperaddress'].'</td>
                            
                        </tr>

                        <tr>
                            <td>Receiver Name</td>
                           
                            <td>'.$rev['recievername'].'</td>
                            
                        </tr>

                        <tr>
                            <td>Receiver Address</td>
                           
                            <td>'.$rev['recieveraddress'].'</td>
                            
                        </tr>
                        </tbody>
                    </table>

                    <h3 class="w3l_header w3_agileits_header">Shipment <span> History</span></h3></div>
                    
                    
                    <div class="table-responsive">
        
                        <table class="table table-bordered table-responsive table-hover table-striped">
                        <thead style="background-color:#fa4318">
                            <tr>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Location</th>
                                <th>Status</th>
                                <th>Updated By</th>
                                <th>Remarks</th>
                            </tr>

                            
                            </thead>
                            
                            <tbody>
                    ';

            foreach ($rh as $r) {
                echo '
                            
                                <tr>
                                    <td>'.$r['dateadded'].'</td>
                                    <td>'.$r['timeadded'].'</td>
                                    <td>'.$r['location'].'</td>
                                    <td>'.$r['status'].'</td>
                                    <td>'.app1('appname').'</td>
                                    <td>'.$r['remarks'].'</td>
                                </tr>
                           ';
            }

            echo ' 

            </tbody>
            </table>
            </div>
            </div>
        </div>';
        } else {
            echo '<div style="margin: 5%" class="inner_main_agile_section">
            <div class="container">
                <h3 class="w3l_header w3_agileits_header">Result <span> Summary</span></h3>
                <p class="sub_para_agile two"></p>
                <div class="bs-docs-example">
        
                    <table class="table table-bordered table-hover table-striped">
                        
                        <tbody>
                        <tr>
                            <td>Invalide Tracking NUmber</td>
                            
                            
                        </tr>
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
         <form class="contact-form text-center" action="track" method="get">
                        <h3>TRACK SHIPMENT</h3>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="single-input-inner">
                                    <label><i class="fa fa-map"></i></label>
                                    <input type="text" name="tracking" placeholder="Track a Shipment: Enter Way Bill Number">
                                </div>
                            </div>
                            <div class="col-md-4">
                            <button class="btn btn-base" > Track
                                </button>
                                
                            </div>
                            
                            
                           
                        </div>
                    </form> 
        '

        ;
        }
    }
} else {
    echo '<form class="contact-form text-center" action="track" method="get">
    <h3>TRACK SHIPMENT</h3>
    <div class="row">
        <div class="col-md-8">
            <div class="single-input-inner">
                <label><i class="fa fa-map"></i></label>
                <input type="text" name="tracking" placeholder="Track a Shipment: Enter Way Bill Number">
            </div>
        </div>
        <div class="col-md-4">
        <button class="btn btn-base" > Track
            </button>
            
        </div>
        
        
       
    </div>
</form> ';
}

?>
                </div>
                
            </div>
        </div>
    </div>
    <!-- contact area end -->

    <!-- <div class="contact-g-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d29208.601361499546!2d90.3598076!3d23.7803374!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1589109092857!5m2!1sen!2sbd"></iframe>
    </div> -->

    <?php foot2(); ?>
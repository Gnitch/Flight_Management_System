<?php include_once '../helpers/helper.php'; ?>

<?php subview('header.php'); ?>
<?php if(isset($_SESSION['userId'])) {   ?> 
<style>
body {
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}
div.out {
    padding: 30px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  
}
.city {
    font-size: 24px;
}
p {
    margin-bottom: 10px;
    font-family: 'Courier New', Courier, monospace;
}
.alert {
    font-family: 'Courier New', Courier, monospace;
}
.date {
    font-size: 26px;
}
.time {
    font-size: 32px;
    margin-bottom: 0px;
}
.stat {
    font-size: 17px;
}
h1 {
    font-weight: lighter !important;
    font-size: 55px !important;
    margin-bottom: 20px;  
    font-family :'product sans' !important;
    font-weight: bolder;
  }
.row {
    background-color: white;
}
@font-face {
  font-family: 'product sans';
  src: url('../assets/css/Product Sans Bold.ttf');
  }

</style>
<main>
    <div class="container">
    <h1 class="text-center text-light mt-4 mb-4">FLIGHT STATUS</h1>
    <div class="row out mb-5 ">
        <div class="col-md-4 order-lg-3 order-md-1"> 
            <div class="row">
                <div class="col-1 p-0 m-0">
                    <i class="fa fa-2x fa-fighter-jet mt-3 text-success"
                        style="float: right;"></i>
                </div>
                <div class="col-10 p-0 m-0 mt-3" style="float: right;">
                    <hr style="background-color: lightgrey;">
                </div>   
                <div class="col-1 p-0 m-0">
                    <i class="fa fa-circle mt-4"
                        style="color: lightgrey;"></i>
                </div>                             
            </div>
        </div>

        <div class="col-md-3 col-6 order-md-2 pl-0 text-center order-lg-2 card-dep">
            <p class="city">Mumbai (BOM)</p>
            <p class="stat">Scheduled Departure:</p>
            <p class="date">Sun 8 Nov</p>                
            <p class="time">04:15</p>
        </div>        
        <div class="col-md-3 col-6 order-md-4 pr-0 text-center order-lg-4 card-arr" 
            style="float: right;">
            <p class="city">Mumbai (BOM)</p>
            <p class="stat">Scheduled Arrivale:</p>
            <p class="date">Sun 8 Nov</p>              
            <p class="time">04:15</p>            
        </div>
        <div class="col-lg-2 order-md-12">
            <div class="alert alert-primary mt-5 text-center" role="alert">
                Not yet Departed
            </div>
        </div>          
    </div>      
</div>
</main>     
<?php } ?>
<?php subview('footer.php'); ?> 

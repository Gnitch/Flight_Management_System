<?php include_once '../helpers/helper.php'; ?>

<?php subview('header.php'); ?>
<?php if(isset($_SESSION['userId'])) {   ?> 
<style>
body {
  background-color: #32CDF5;
}
.row {
    background-color: white;
}
@media screen and (max-width: 768px){
    div.line-sm {
        display: block !important;
    }
    div.line-lg {
        display: none;
    }    
}
</style>
<main>
<div class="container"> 
    <div class="row">
        <div class="col-md-4 line-sm" style="display: none;">
            <hr>
        </div>        
        <div class="col card-dep">
            <p>Mumbai (BOM)</p>
            <p>Scheduled Departure:</p>
            <p>04:15</p>
            <p>Sun 8 Nov</p>                
        </div>
        <div class="col-md-4 line-lg">
            <hr>
        </div>
        <div class="col card-arr">
        <p>Mumbai (BOM)</p>
            <p>Scheduled Departure:</p>
            <p>04:15</p>
            <p>Sun 8 Nov</p>               
        </div>
        <div class="col-md-2">
            status
        </div>  
    </div>
</div>
</main>     
<?php } ?>
<?php subview('footer.php'); ?> 

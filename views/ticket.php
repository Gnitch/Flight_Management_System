<?php include_once '../helpers/helper.php'; ?>
<?php subview('header.php'); ?>
  <link rel="stylesheet" href="../assets/css/style1.css">
<style>
  body {
    background-image: url('../assets/images/2.png');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;  
}    
</style>
  <main>
  <?php if(isset($_SESSION['userId'])) {   ?>   
    <!-- <div class="container"> -->
    <section id="mainTicket">
      <section class="row1">
        <section class="row1a">
               <label class="label1">Flight</label>
               <label class="label2">Destination</label>
               <label class="label3">passenger</label>
        </section>
        <section class="row1b">
          <span class="flightBrandName">Delta Airlines DL31</span>
                <span class="destinationNames">Nyc to Sea</span>
                <span class="passengerName">Sujoy Dcunha</span>
        </section>
        </section>
        <section class="row2">
          <section class="row2a">
            <label class="a2a" for="">passenger</label> 
          </section>
          <section class="row2b">
            <span class="passenger2a">Sujoy / Dcunha</span>
           
          </section>
        </section>
        <section class="row3">
          <section class="row3a">
            <label class="a3a" for="">seat</label>
            <label class="a3b" for="">departure</label>
            <label class="a3c" for="">class</label>
          </section>
          <section class="row3b">
          <span class="s3a">a22</span>
          <span class="s3b">3:15<span class="normal">PM 30 October 2020</span></span>
          <span class="s3c">E</span>
          </section>
        </section>
        <hr class="left"> 
         <hr class="right">
        <section class="row6">
          <section class="row6a">         
          </section>
      </section>
    </section>
    <!-- </div> -->
</main>
<?php } ?>

<?php subview('footer.php'); ?> 

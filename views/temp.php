<?php include_once '../helpers/helper.php'; ?>

<?php subview('header.php'); ?>
<style>
body {
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}
@font-face {
  font-family: 'product sans';
  src: url('../assets/css/Product Sans Bold.ttf');
}
p.head {
    text-transform: uppercase;
    font-family: arial;
    font-size: 17px;
    margin-bottom: 10px ;
    color: grey;  
}
p.txt {
    text-transform: uppercase;
    font-family: arial;
    font-size: 25px;
    font-weight: bolder;
}
.out {
    background-color: white;
    padding-left: 25px;
    padding-right: 0px;
    padding-top: 20px;
}
h2 {
    font-weight: lighter !important;
    font-size: 35px !important;
    margin-bottom: 20px;  
    font-family :'product sans' !important;
    font-weight: bolder;
}
h1 {
    font-weight: lighter !important;
    font-size: 55px !important;
    margin-bottom: 20px;  
    font-family :'product sans' !important;
    font-weight: bolder;
  }
</style>
<main>
    <div class="container mb-5">
        <h1 class="text-center text-light mt-4 mb-4">E-TICKETS</h1>
        <div class="row ">                                                         
        <div class="col-9 out">
            <div class="row ">                                                     
                <div class="col">
                    <!-- brand -->
                </div>
                <div class="col">
                    <h2 class="mb-0">ECONOMY CLASS</h2>
                </div>
            </div>
            <hr>
            <div class="row mb-3">  
                <div class="col-4">
                    <p class="head">Flight</p>
                    <p class="txt">'.$row_f['airline'].'</p>
                </div>            
                <div class="col-4">
                    <p class="head">from</p>
                    <p class="txt">'.$row_f['source'].'</p>
                </div>
                <div class="col-4">
                    <p class="head">to</p>
                    <p class="txt">'.$row_f['Destination'].'</p>       
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-8">
                    <p class="head">name</p>
                    <p class=" h5 text-uppercase">
                    '.$row_p['f_name'].' '.$row_p['m_name'].' '.$row_p['l_name'].'
                    </p>                              
                </div>
                <div class="col-4">
                    <p class="head">board time</p>
                    <p class="txt">12:45</p>
                </div> 
            </div>
            <div class="row">
                <div class="col-3">
                    <p class="head">departure</p>
                    <p class="txt">'.$date_dep.'</p>
                    <p class="h1 font-weight-bold">'.$time_dep.'</p>         
                </div>            
                <div class="col-3">
                    <p class="head">arrivale</p>
                    <p class="txt">'.$row_f['arrivale'].'</p>
                </div>
                <div class="col-3">
                    <p class="head">gate</p>
                    <p class="txt">A22</p>
                </div>            
                <div class="col-3">
                    <p class="head">seat</p>
                    <p class="txt">'.$row_f['seat_no'].'</p>
                </div>                
            </div>                    
        </div>
        <div class="col-3" style="background-color: #0E4274;
            padding:20px">
            <div class="row">

            </div>
            <div class="row">
                <div class="col">
                    <h2 class="text-light text-center">
                        Thank you for Flying with us</h2>
                </div>
            </div>
        </div>          
        </div>
        <div class="row mb-5">
            <div class="text-center col  mt-4">
                <form action="">
                    <button class="btn btn-lg btn-success mr-5">
                        <i class="fa fa-print"></i> &nbsp; Print</button>
                    <button class="btn btn-lg btn-danger ml-5">
                        <i class="fa fa-trash"></i> &nbsp; Cancel Ticket</button>
                </form>
            </div>
        </div>    
        
        
        <div class="row ">                                                         
        <div class="col-9 out">
            <div class="row ">                                                     
                <div class="col">
                    <!-- brand -->
                </div>
                <div class="col">
                    <h2 class="mb-0">ECONOMY CLASS</h2>
                </div>
            </div>
            <hr>
            <div class="row mb-3">  
                <div class="col-4">
                    <p class="head">Flight</p>
                    <p class="txt">'.$row_f['airline'].'</p>
                </div>            
                <div class="col-4">
                    <p class="head">from</p>
                    <p class="txt">'.$row_f['source'].'</p>
                </div>
                <div class="col-4">
                    <p class="head">to</p>
                    <p class="txt">'.$row_f['Destination'].'</p>                
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-8">
                    <p class="head">name</p>
                    <p class=" h5 text-uppercase">
                    '.$row_p['f_name'].' '.$row_p['m_name'].' '.$row_p['l_name'].'
                    </p>                              
                </div>
                <div class="col-4">
                    <p class="head">board time</p>
                    <p class="txt">12:45</p>
                </div> 
            </div>
            <div class="row">
                <div class="col-3">
                    <p class="head">departure</p>
                    <p class="txt">'.$row_f['departure'].'</p>
                </div>            
                <div class="col-3">
                    <p class="head">arrivale</p>
                    <p class="txt">'.$row_f['arrivale'].'</p>
                </div>
                <div class="col-3">
                    <p class="head">gate</p>
                    <p class="txt">A22</p>
                </div>            
                <div class="col-3">
                    <p class="head">seat</p>
                    <p class="txt">'.$row_f['seat_no'].'</p>
                </div>                
            </div>                    
        </div>
        <div class="col-3" style="background-color: #0E4274;
            padding:20px">
            <div class="row">

            </div>
            <div class="row">
                <div class="col">
                    <h2 class="text-light text-center">
                        Thank you for Flying with us</h2>
                </div>
            </div>
        </div>          
        </div>
        <div class="row">
            <div class="text-center col mt-4">
                <form action="">
                    <button class="btn btn-lg btn-success mr-5">
                        <i class="fa fa-print"></i> &nbsp; Print</button>
                    <button class="btn btn-lg btn-danger ml-5">
                        <i class="fa fa-trash"></i> &nbsp; Cancel Ticket</button>
                </form>
            </div>
        </div> 


    </div>
</main>
<?php subview('footer.php'); ?> 

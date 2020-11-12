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
  <?php if(isset($_SESSION['userId'])) {   
    require '../helpers/init_conn_db.php';   
    
    if(isset($_POST['cancel_but'])) {
        $ticket_id = $_POST['ticket_id'];
        $stmt = mysqli_stmt_init($conn);
        $sql = 'SELECT * FROM Ticket WHERE ticket_id=?';
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)) {
            header('Location: ticket.php?error=sqlerror');
            exit();            
        } else {
            mysqli_stmt_bind_param($stmt,'i',$ticket_id);            
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {   
              $sql_pas = 'DELETE FROM Passenger_profile WHERE passenger_id=? 
                ';
              $stmt_pas = mysqli_stmt_init($conn);
              if(!mysqli_stmt_prepare($stmt_pas,$sql_pas)) {
                  header('Location: ticket.php?error=sqlerror');
                  exit();            
              } else {
                  mysqli_stmt_bind_param($stmt_pas,'i',$row['passenger_id']);            
                  mysqli_stmt_execute($stmt_pas);
                  $sql_t = 'DELETE FROM Ticket WHERE ticket_id=?';
                  $stmt_t = mysqli_stmt_init($conn);
                  if(!mysqli_stmt_prepare($stmt_t,$sql_t)) {
                      header('Location: ticket.php?error=sqlerror');
                      exit();            
                  } else {
                      mysqli_stmt_bind_param($stmt_t,'i',$row['ticket_id']);            
                      mysqli_stmt_execute($stmt_t);
                  }                  
              }              
            }
        }        
    }
    
    ?>     
    <div class="container mb-5"> 
    <h1 class="text-center text-light mt-4 mb-4">E-TICKETS</h1>

      <?php 
      $stmt = mysqli_stmt_init($conn);
      $sql = 'SELECT * FROM Ticket WHERE user_id=?';
      $stmt = mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt,$sql)) {
          header('Location: ticket.php?error=sqlerror');
          exit();            
      } else {
          mysqli_stmt_bind_param($stmt,'i',$_SESSION['userId']);            
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          while ($row = mysqli_fetch_assoc($result)) {   
            $sql_p = 'SELECT * FROM Passenger_profile WHERE passenger_id=?';
            $stmt_p = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt_p,$sql_p)) {
                header('Location: ticket.php?error=sqlerror');
                exit();            
            } else {
                mysqli_stmt_bind_param($stmt_p,'i',$row['passenger_id']);            
                mysqli_stmt_execute($stmt_p);
                $result_p = mysqli_stmt_get_result($stmt_p);
                if($row_p = mysqli_fetch_assoc($result_p)) {
                  $sql_f = 'SELECT * FROM Flight WHERE flight_id=?';
                  $stmt_f = mysqli_stmt_init($conn);
                  if(!mysqli_stmt_prepare($stmt_f,$sql_f)) {
                      header('Location: ticket.php?error=sqlerror');
                      exit();            
                  } else {
                      mysqli_stmt_bind_param($stmt_f,'i',$row['flight_id']);            
                      mysqli_stmt_execute($stmt_f);
                      $result_f = mysqli_stmt_get_result($stmt_f);
                      if($row_f = mysqli_fetch_assoc($result_f)) {
                        $date_time_dep = $row_f['departure'];
                        $date_dep = substr($date_time_dep,0,10);
                        $time_dep = substr($date_time_dep,10,6) ;    
                        $date_time_arr = $row_f['arrivale'];
                        $date_arr = substr($date_time_arr,0,10);
                        $time_arr = substr($date_time_arr,10,6) ; 
                        if($row['class'] === 'E') {
                            $class_txt = 'ECONOMY';
                        } else if($row['class'] === 'B') {
                            $class_txt = 'BUSINESS';
                        }
                        echo '
                        <div class="row mb-5">                                                         
                        <div class="col-8 out">
                            <div class="row ">                                                     
                                <div class="col">
                                    <!-- brand -->
                                </div>
                                <div class="col">
                                    <h2 class="mb-0">'.$class_txt.' CLASS</h2>
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
                                    <p class="txt mb-1">'.$date_dep.'</p>
                                    <p class="h1 font-weight-bold mb-3">'.$time_dep.'</p>  
                                </div>            
                                <div class="col-3">
                                    <p class="head">arrivale</p>
                                    <p class="txt mb-1">'.$date_arr.'</p>
                                    <p class="h1 font-weight-bold mb-3">'.$time_arr.'</p>  
                                </div>
                                <div class="col-3">
                                    <p class="head">gate</p>
                                    <p class="txt">A22</p>
                                </div>            
                                <div class="col-3">
                                    <p class="head">seat</p>
                                    <p class="txt">'.$row['seat_no'].'</p>
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
                        
                        <div class="col-1">
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle" type="button" 
                                    id="dropdownMenuButton" data-toggle="dropdown" 
                                    aria-haspopup="true" aria-expanded="false">
                                    
                                    <i class="fa fa-ellipsis-v"></i> </td>
                                </button>  
                                <div class="dropdown-menu">
                                    <form class="px-4 py-3"  action="ticket.php" 
                                        method="post">
                                        <input type="hidden" name="ticket_id" 
                                            value='.$row['ticket_id'].'>
                                        <button class="btn w-100 mb-3 btn-primary"
                                            name="print_but">
                                            <i class="fa fa-print"></i> &nbsp; Print Ticket</button>
                                        <button class="btn  btn-danger"
                                            name="cancel_but">
                                            <i class="fa fa-trash"></i> &nbsp; Cancel Ticket</button>
                                    </form>
                                </div>
                            </div>              
                        </div>                          
                        </div>                                               
                      ' ;
                      }
                  }                  
                }
            }                                    
          }
      }   
      
       ?> 


    </div>
  </main>
  <?php } ?>
  <?php subview('footer.php'); ?> 

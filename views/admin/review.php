<?php include_once 'header.php'; 
require '../../helpers/init_conn_db.php';?>

<style>
/* *{
  box-sizing: border-box;
  margin: 0;
  padding: 0;
} */
body{
  background-image: url('../../assets/images/sky.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;    
}

.rev-section{
  margin: auto;
  padding: 0 1rem;
  max-width: 1100px;
  text-align: center;
  width: 500px;
  margin: auto;
}



.title{
  font-size: 4rem;
  font-family: 'product sans';  
  margin-bottom: 0.5rem;
}
.note{
  font-size: 1.5rem;
  color: rgb(150, 150, 150);
  font-style: italic;
  color: #000080;
}

.reviews{
  margin: 2rem auto;
  display: flex;
  flex-wrap: wrap;
}
.review{
  margin: 0 1rem;
  min-width: 300px;
  flex: 1;
}

.head-review{
  margin: 1.75rem auto;
  width: 150px;
  height: 150px;
}
.name-review{
  font-size: 1.5rem;
  color: rgb(50, 50, 50);
  font-family: Algerian;
  font-weight: bold ;
}


.desc-review{
  line-height: 1.5rem;
  letter-spacing: 1px;
  color: rgb(50, 50, 50);
  font: italic  25px/30px Georgia, serif;
}

@media (max-width: 678px){
  .review{
    margin-top: 1.5rem;
  }
}

</style>
<body>

<div class="rev-section">

  <h2 class="title text-primary">CUSTOMER REVIEWS</h2>
  <p class="note">"Building a good customer experience does not happen by accident.It happens by design."</p><br><br>

    <div class="reviews">
      <div class="review">
        <div class="body-review">
          <p class="name-review"> Christina Pereira</p>
          <p class="desc-review">This is my rejdjjd hahah hhfkf bsbsbjc heheh babsd beegjjs basdjjuv bddjj.</p>
        </div>
      </div>
    </div>
</div>


</body>
<?php include_once 'footer.php'; ?>


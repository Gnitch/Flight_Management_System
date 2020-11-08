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
h1 {
    font-size: 50px !important;
    font-family :'product sans' !important;
  }
#mainTicket {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  

background-color:white;
  width:900px;
  height:400px;

  border-radius:15px;
  position:absolute;
  top:25%;
  left:5%;

  display:grid;
  grid-template-columns:100%;
  grid-template-rows:15% 25% 25% 20% 15%;
  grid-template-areas:



    "row1"

    "row2"

    "row3"

    "row4"

    "row6";
}


.row1 label {

text-transform: uppercase;
font-family: arial;
font-size:11px;
color:grey;
    align-self: center;
    text-align: center;

}


.row1 {
  border-top-left-radius: 15px;
      background-color: #F4F4F4;
      display: grid;
      grid-area: row1;
      /* border-bottom: 1px solid black; */
      grid-template-areas:
          "row1a"
          "row1b";
      grid-template-rows: auto;
      grid-template-columns: 100%;
      border-top-right-radius: 15px;


}

.row1a {
  position: relative;
  grid-area: row1a;
  display: grid;
  grid-template-columns: repeat(10,10%);
  grid-template-rows: auto;
  grid-template-areas: "label1 . . label2  . label3 . label4 . .";
  top: 10px;

}

.label1 {

  grid-area:label1;

}

.label2 {

  grid-area:label2;

}

.label3 {

  grid-area:label3;

}
.label4 {

  grid-area:label4;

}


.row1b {

  height:100%;

  grid-area:row1b;
  /* border-bottom:1px solid red; */
  display:grid;
  grid-template-columns:repeat(10,10%);
  grid-template-rows:auto;
  grid-template-areas:

    "flightName flightName . destinationNames   . passengerName passengerName  flightBrandName1 flightBrandName1 .";

}

.row1b span {
  font-weight: 600;
  align-self: center;
  margin: 0;
  font-size: 14px;
  text-align: center;
  text-transform: uppercase;
  font-family: arial


}


.flightBrandName {
  position: relative;
  right: -9px;
  grid-area: flightName;
}

.destinationNames {
position:relative;
right:-5px;
  grid-area: destinationNames;

}

.passengerName {
right:27px;
position: relative;
  grid-area: passengerName;

}

.line {

  border-left:1px dotted black;
margin:0;
  padding:0;
  height:100%;
  grid-area:line;

}


.flightBrandName1 {
position:relative;
right:-10px;
  grid-area: flightBrandName1;

}

.row2 {
  grid-area:row2;

  display: grid;

  /* border-bottom: 1px solid black; */
  grid-template-areas:
      "row2a"
      "row2b";
  grid-template-rows: auto;
  grid-template-columns: 100%;

}


.row2a {
  display: grid;
  grid-template-columns: repeat(10,10%);
  grid-template-rows: auto;
  grid-template-areas: "a2a a2a . . . . . a2aa a2aa .";
grid-area:row2a;


}

.row2a label {

  text-transform: uppercase;
  font-family: arial;
  font-size:11px;
  color:grey;
      align-self: center;
      text-align: center;
      right: 38px;
position: relative;

}

.row2b span {

text-transform: uppercase;

}


.a2a {

grid-area:a2a;

}

.a2aa {

grid-area:a2aa;

}


.row2b {
  display: grid;
  grid-template-columns: repeat(10,10%);
  grid-template-rows: auto;
  grid-template-areas: "passenger2a passenger2a . . . . . passenger2aa passenger2aa .";
grid-area:row2b;

}


.passenger2a {

  grid-area: passenger2a;
  left: 21px;
  position: relative;
  grid-area:passenger2a;
}

.passenger2aa {
  grid-area: passenger2aa;
  left: 18px;
  position: relative;


}


.row3 {
  grid-area:row3;


  display: grid;

  /* border-bottom: 1px solid black; */
  grid-template-areas:
      "row3a"
      "row3b";
  grid-template-rows: auto;
  grid-template-columns: 100%;


}



.row3a {
  display: grid;
  grid-template-columns: repeat(10,10%);
  grid-template-rows: auto;
  grid-template-areas: "a3a a3b a3b a3b . a3c a3c a3d a3e";
  grid-area: row3a;

}

.row3a label {
  text-transform: uppercase;
  font-family: arial;
  font-size: 11px;
  color: grey;
  align-self: center;


}



.a3a {
  left: 17px;
      grid-area: a3a;
      position: relative;

}
.a3b {    left: 66px;
    grid-area: a3b;
    position: relative;}
.a3c {grid-area:a3c;}
.a3d {left: 19px;
    grid-area: a3d;
    position: relative;}
.a3e {grid-area:a3e;
left:24px;
position: relative;
}

.row3b {

  display: grid;
  grid-template-columns: repeat(10,10%);
  grid-template-rows: auto;
  grid-template-areas: "s3a s3b s3b s3b . s3c  . s3d s3e";
  grid-area:row3b;

}


.row3b span {

text-transform: uppercase;
font-family: arial;

}

.s3b .normal {

  margin-left: 10px;
  font-size: 15px;


}

.s3a {grid-area:s3a;
font-size:42px;
text-transform: uppercase;
font-family: arial;
left: 10px;
position: relative;

}
.s3b {grid-area:s3b;
  grid-area: s3b;
  font-size: 42px;
  left: 64px;
  position: relative;

font-size:42px;}
.s3c {grid-area:s3c;
font-size:42px;}
.s3d {left: 17px;
    grid-area: s3d;
    font-size: 42px;
    position: relative;
    display: inline-block;
}
.s3e {
grid-area: s3e;
font-size: 42px;
left: 23px;
position: relative;}

.row4 {
  grid-area:row4;
  border-bottom:1px solid black;
  display: grid;


  grid-template-areas:
      "row4a"
      "row4b";
  grid-template-rows: auto;
  grid-template-columns: 100%;


}


.row4a label {

  text-transform: uppercase;
  font-family: arial;
  font-size:11px;
  color:grey;
      align-self: center;



}



.row4a {
  display: grid;
  grid-template-columns: repeat(10,10%);
  grid-template-rows: auto;
  grid-template-areas: "a4a a4a a4b a4c . . . a4d a4f a4f";
grid-area:row4a;

}

.a4a {
  left: 13px;
  /* left: -49px; */
  grid-area: a4a;
  position: relative;


}
.a4b {grid-area:a4b;}
.a4c {grid-area:a4c;}
.a4d {

  left: 15px;
  grid-area: a4d;
  position: relative;
}


.row4b {

  display: grid;
  grid-template-columns: repeat(10,10%);
  grid-template-rows: auto;
  grid-template-areas: "s4a s4a s4b s4c . s4d s4d s4e s4f s4f";
  grid-area: row4b;
  font-size: 12px;
  text-transform: uppercase;


}

.s4a {

    left: 15px;
    grid-area: s4a;
    font-family: arial;
    font-size: 12px;
    position: relative;

}

.s4b {grid-area:s4b;}
.s4c {grid-area:s4c;}
.s4d {grid-area:s4d;

  width: 170px;
  height: 55px;
}

.s4e {

  left: 15px;
      grid-area: s4e;
      position: relative;


}
.s4f {    grid-area: s4f;
    width: 170px;
    height: 55px;

}

.row6 {
  background-color: #0E4274;
  grid-area:row6;
  border-bottom-right-radius: 15px;
    border-bottom-left-radius: 15px;
    display: grid;

    /* border-bottom: 1px solid black; */
    grid-template-areas:
        "row6a";

    grid-template-rows: auto;
    grid-template-columns: 100%;

}


.row6a {
  position: relative;
  grid-area: row6a;
  display: grid;
  grid-template-columns: repeat(10,10%);
  grid-template-rows: auto;
  grid-template-areas: "img1 . . . . . . img2 . .";
margin-left: 20px;
  align-self: center;

}

.img1 {
width:140px;
grid-area:img1;

}

.img2 {
width:140px;
grid-area:img2;

}

hr{
  margin: 0;
      -webkit-transform: rotate(90deg);
      transform: rotate(90deg);
      position: absolute;
      top: 10px;
      left: 430px;
      border: 1px dashed black;
      width: 394px;
      top: 198px;
      position: absolute;
      padding: 0;

}

hr.left {

  border: 1px solid #80808024;
  width: 573px;
  transform: rotate(0deg);
  /* width: 80%; */
  /* background-color: grey; */
  top: 250px;
  left: 26px;


}

hr.right {

  border: 1px solid #80808024;
      width: 215px;
      transform: rotate(0deg);
      /* width: 80%; */
      /* background-color: grey; */
      top: 250px;
      left: 658px;
      position: absolute;

}
#text{
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 800%;
    position: relative;
    margin-left: 1100px;
    margin-top: 300px;
    color: #0E4274;
}
</style>
<main>
  <?php if(isset($_SESSION['userId'])) {   ?>  
    <div class="container"> 
      <h1 class="text-light mt-4 text-center mr-5">FLIGHT &nbsp; TICKETS</h1>
      <div class="row mt-4">
        <div class="col">
    <section id="mainTicket">
      <section class="row1">
       <section class="row1a">
               <label class="label1">Flight</label>
               <label class="label2">Destination</label>
               <label class="label3">passenger</label>

               <label class="label4">flight</label>
        </section>

        <section class="row1b">
          <span class="flightBrandName">Delta Airlines DL31</span>
                <span class="destinationNames">Nyc to Sea</span>
                <span class="passengerName">Sujoy Dcunha</span>

                <span class="flightBrandName1">Delta airlines dl31</span>
        </section>
       </section>
        <section class="row2">
  <section class="row2a">
<label class="a2a" for="">passenger</label> <label class="a2aa" for="">passenger</label>
  </section>
  <section class="row2b">
    <span class="passenger2a">Sujoy / Dcunha</span>
    <span class="passenger2aa">Sujoy / Dcunha</span>
  </section>
      </section>
        <section class="row3">
<section class="row3a">
<label class="a3a" for="">Gate</label>
<label class="a3c" for="">class</label>
<label class="a3d" for="">seat</label>
<label class="a3e" for="">departure</label>
</section>
<section class="row3b">
<span class="s3a">a22</span>
<span class="s3b">3:15<span class="normal">PM 30 October 2020</span></span>
<span class="s3c">E</span>
<span class="s3d">24c</span>
<span class="s3e">3:15</span>
</section>
      </section>
      <hr class="left">
      <hr class="right">
      <hr>
       <section class="row6">
                  <section class="row6a">
          <img class="img1" src="https://lemonecit.github.io/airplaneticket/images/delta.png" alt="">
                    <img class="img2" src="https://lemonecit.github.io/airplaneticket/images/delta.png" alt="">
      </section>
      </section>
    </section>
    </div>
    </div>
    </div>
  </main>
  <?php } ?>
  <?php subview('footer.php'); ?> 

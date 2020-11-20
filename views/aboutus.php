<?php include_once '../helpers/helper.php'; ?>
<?php subview('header.php');                     ?> 	
  
<style>

a,
a:hover,
a:focus,
a:active {
  text-decoration: none;
  outline: none;
}

a,
a:active,
a:focus {
  color: #333;
  text-decoration: none;
  transition-timing-function: ease-in-out;
  -ms-transition-timing-function: ease-in-out;
  -moz-transition-timing-function: ease-in-out;
  -webkit-transition-timing-function: ease-in-out;
  -o-transition-timing-function: ease-in-out;
  transition-duration: 0.2s;
  -ms-transition-duration: 0.2s;
  -moz-transition-duration: 0.2s;
  -webkit-transition-duration: 0.2s;
  -o-transition-duration: 0.2s;
}

.rnd {
  color: #f91942;
}

ul {
  margin: 0;
  padding: 0;
  list-style: none;
}
img {
  max-width: 100%;
  height: auto;
}
span,
a,
a:hover {
  display: inline-block;
  text-decoration: none;
  color: inherit;
}
.section-head {
  margin-bottom: 60px;
}
.section-head h4 {
  position: relative;
  padding: 0;
  color: blue;
  line-height: 1;
  letter-spacing: 0.3px;
  font-size: 34px;
  font-weight: 700;
  text-align: center;
  text-transform: none;
  margin-bottom: 30px;
}
.section-head h4:before {
  content: "";
  width: 60px;
  height: 3px;
  background: #f91942;
  position: absolute;
  left: 0px;
  bottom: -10px;
  right: 0;
  margin: 0 auto;
}
.section-head h4 span {
  font-weight: 700;
  padding-bottom: 5px;
  color: #2f2f2f;
}
p.service_text {
  color: #cccccc !important;
  font-size: 16px;
  line-height: 28px;
  text-align: center;
}
.section-head p,
p.awesome_line {
  color: #818181;
  font-size: 16px;
  line-height: 28px;
  text-align: center;
}

.extra-text {
  font-size: 34px;
  font-weight: 700;
  color: #2f2f2f;
  margin-bottom: 25px;
  position: relative;
  text-transform: none;
}
.extra-text::before {
  content: "";
  width: 60px;
  height: 3px;
  background: #f91942;
  position: absolute;
  left: 0px;
  bottom: -10px;
  right: 0;
  margin: 0 auto;
}
.extra-text span {
  font-weight: 700;
  color: #f91942;
}
.item {
  background: #fff;
  text-align: center;
  padding: 30px 25px;
  -webkit-box-shadow: 0 0px 25px rgba(0, 0, 0, 0.07);
  box-shadow: 0 0px 25px rgba(0, 0, 0, 0.07);
  border-radius: 20px;
  border: 5px solid rgba(0, 0, 0, 0.07);
  margin-bottom: 30px;
  -webkit-transition: all 0.5s ease 0;
  transition: all 0.5s ease 0;
  transition: all 0.5s ease 0s;
}
.item:hover {
  /* background: hsl(231, 95%, 54%); */
  background-color: cornflowerblue;
  box-shadow: 0 8px 20px 0px rgba(0, 0, 0, 0.2);
  -webkit-transition: all 0.5s ease 0;
  transition: all 0.5s ease 0;
  transition: all 0.5s ease 0s;
}
.item:hover .item,
.item:hover span.icon {
  border-radius: 10px;
  -webkit-transition: all 0.5s ease 0;
  transition: all 0.5s ease 0;
  transition: all 0.5s ease 0s;
}
.item:hover h6,
.item:hover p {
  color: #fff;
  -webkit-transition: all 0.5s ease 0;
  transition: all 0.5s ease 0;
  transition: all 0.5s ease 0s;
}
.item .icon {
  font-size: 40px;
  margin-bottom: 25px;
  color: #f91942;
  width: 90px;
  height: 90px;
  line-height: 96px;
  border-radius: 50px;
}
.item .feature_box_col_one {
  background-image:url(../assets/images/sujoy.jpg);
  background-size:90px 90px;
  color: #f91942;
}
.item .feature_box_col_two {
   background-image: url(../assets/images/original.jpg);
   background-size:100px 100px; 
  color: #f91942;
  

}
.item .feature_box_col_three {
  background-image: url(../assets/images/mark.jpg);
  background-size:90px 90px;
  color: #f91942;
}

.item p {
  font-size: 15px;
  line-height: 26px;
}
.item h6 {
  margin-bottom: 20px;
  color: #2f2f2f;
}
.mission p {
  margin-bottom: 10px;
  font-size: 15px;
  line-height: 28px;
  font-weight: 500;
}
.mission i {
  display: inline-block;
  width: 50px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  background:blue;
  border-radius: 50%;
  color: #fff;
  font-size: 25px;
}
.mission .small-text {
  margin-left: 10px;
  font-size: 13px;
  color: #666;
}
.skills {
  padding-top: 0px;
}
.skills .prog-item {
  margin-bottom: 25px;
}
.skills .prog-item:last-child {
  margin-bottom: 0;
}
.skills .prog-item p {
  font-weight: 500;
  font-size: 15px;
  margin-bottom: 10px;
}
.skills .prog-item .skills-progress {
  width: 100%;
  height: 10px;
  background: #e0e0e0;
  border-radius: 20px;
  position: relative;
}
.skills .prog-item .skills-progress span {
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  background: blue;
  width: 10%;
  border-radius: 10px;
  -webkit-transition: all 1s;
  transition: all 1s;
}
.skills .prog-item .skills-progress span:after {
  content: attr(data-value);
  position: absolute;
  top: -5px;
  right: 0;
  font-size: 10px;
  font-weight: 600;
  color: #fff;
  background: rgba(0, 0, 0, 0.9);
  padding: 3px 7px;
  border-radius: 30px;
}
body{
  background-color: lightskyblue;
}


.fa:hover {
    opacity: 0.7;
}
@font-face {
  font-family: 'product sans';
  src: url('../assets/css/Product Sans Bold.ttf');
}
h1{
  font-style: italic;
  font-family :'product sans' !important;
	color:white;
	font-size:50px;
	margin-top:50px;
	text-align:center;
}
h5.text-light {
 /* margin-bottom: 60px; */
 margin-top: 0px !important;
}
h1:hover {
  color: cornflowerblue;
  -webkit-transition: all 0.5s ease 0;
  transition: all 0.5s ease 0;
  transition: all 0.5s ease 0s;
}
/* .fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
} */

</style>

  <!--FONTS package01-->
  <link href="https://fonts.googleapis.com/css2?family=Abel&family=Allerta&family=Allerta+Stencil&family=Amatic+SC&family=Arimo&family=Cabin&family=Crimson+Text&family=Didact+Gothic&family=Dosis:wght@200&family=Flamenco:wght@300&family=Fredericka+the+Great&family=Imprima&family=Inconsolata:wght@200&family=Josefin+Sans:wght@100&family=Josefin+Slab:wght@100&family=Karla&family=Merriweather:wght@300&family=Montserrat+Alternates:wght@100&family=Montserrat:wght@100&family=Muli:wght@200&family=Old+Standard+TT&family=Oswald:wght@200&family=Quicksand:wght@300&family=Space+Mono&family=Squada+One&family=Work+Sans:wght@100&display=swap" rel="stylesheet">
   
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<main>

	<div class="feat bg-gray pt-4 pb-5">
    <div class="container">
      <div class="row">

        <div class="section-head col-sm-12">
          <h1 class="brand mt-2">
            <img src="../assets/images/logo.png" 
                    height="120px" width="130px" alt="">	
          SHIFT Airways</h1>          
          <p>Light is Faster, but We are Safer.<br></p>

        <div class="col-lg-12 col-sm-12">
          <div class="item"> 
              <!-- <span class="icon feature_box_col_one ">
                <svg width="1.6em" height="1.6em" viewBox="0 0 16 16" class="bi pb-2 bi-award" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M9.669.864L8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193l-1.51-.229L8 1.126l-1.355.702-1.51.229-.684 1.365-1.086 1.072L3.614 6l-.25 1.506 1.087 1.072.684 1.365 1.51.229L8 10.874l1.356-.702 1.509-.229.684-1.365 1.086-1.072L12.387 6l.248-1.506-1.086-1.072-.684-1.365z"/>
                  <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
              </svg>
            </span> -->
            <h2>About Us</h2>
            <p></p>
            <p>Shift Airlines is India’s largest passenger airline with a market share of 59.4% as of August, 2020. We primarily operate in India’s domestic air travel market as a low-cost carrier with focus on our three pillars – offering low fares, being on-time and delivering a courteous and hassle-free experience. SHIFT has become synonymous with being on-time. A uniform fleet for each type of operation, high operational reliability and an award winning service make us one of the most reliable airlines in the world</p>
            <p>Shift Airlines is not only the most efficient low fare operator domestically but is also comparable with global low cost airlines. We are constantly enhancing our engagement with our passengers to augment their travel experience. From multichannel direct sales (including online flight booking, call centers and airport counters), to online flight status checking, an exclusive Shift Airlines app for Android, we have transformed air travel in India. Today, we are India’s most preferred airline. At Shift, low fares come with high quality.</p>
          </div>
        </div>
        <br><center><h2> TEAM MEMBERS</h2></center><br>
        <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="item"> 
              <span class="icon feature_box_col_one ">
                <!-- <img src="mark.jpg" alt="logo"> -->
                <!-- <svg width="1.6em" height="1.6em" viewBox="0 0 16 16" class="bi pb-2 bi-award" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M9.669.864L8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193l-1.51-.229L8 1.126l-1.355.702-1.51.229-.684 1.365-1.086 1.072L3.614 6l-.25 1.506 1.087 1.072.684 1.365 1.51.229L8 10.874l1.356-.702 1.509-.229.684-1.365 1.086-1.072L12.387 6l.248-1.506-1.086-1.072-.684-1.365z"/>
                  <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
              </svg> -->
            </span><br>
            <a href="https://github.com/Gnitch" target="_blank"><h6>Sujoy D'Cunha</h6></a>
            <p>TE-CMPN-A ROLL-NO:15</p>
            <p>PID:182023</p>
           <!--Twitter-->
<a href="https://mobile.twitter.com/Gnitch1" target="_blank" class="btn-floating btn-lg btn-tw" type="button" role="button"><i class="fab fa-twitter"></i></a>
<!--Google +-->
<a href="https://github.com/Gnitch" target="_blank" class="btn-floating btn-lg btn-git" type="button" role="button"><i class="fab fa-github"></i></a>
<!--Linkedin-->
<a href="https://www.linkedin.com/in/sujoy-dcunha-206433190/" target="_blank"class="btn-floating btn-lg btn-li" type="button" role="button"><i class="fab fa-linkedin-in"></i></a>
<!--Instagram-->
<a href="https://www.instagram.com/sujoy_gnitch/" target="_blank"class="btn-floating btn-lg btn-ins" type="button" role="button"><i class="fab fa-instagram"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6">
          <div class="item"> 
            <span class="icon feature_box_col_two">
  
              <!-- <svg width="1.6em" height="1.6em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                <path d="M12.168 6.352c.184.105.332.197.445.275.114.074.229.174.346.299.11.117.193.24.252.369s.1.295.123.498h-.281c-.243 0-.432.06-.569.182-.14.117-.21.29-.21.521 0 .164.062.318.187.463.121.14.289.21.504.21.336 0 .576-.108.72-.327.145-.223.217-.514.217-.873 0-.254-.054-.485-.164-.692a2.436 2.436 0 0 0-.398-.562c-.16-.168-.33-.31-.51-.428-.18-.117-.33-.213-.451-.287l-.211.352zm-2.168 0c.184.105.332.197.445.275.114.074.229.174.346.299.113.12.2.246.258.375.055.125.094.289.117.492h-.281c-.242 0-.432.06-.569.182-.14.117-.21.29-.21.521 0 .164.062.318.187.463.121.14.289.21.504.21.336 0 .576-.108.72-.327.145-.223.217-.514.217-.873 0-.254-.054-.485-.164-.692a2.438 2.438 0 0 0-.398-.562c-.16-.168-.33-.31-.51-.428-.18-.117-.33-.213-.451-.287L10 6.352z"/>
              </svg>   -->
            </span><br>
            <a href="https://github.com/Christina2611" target="_blank"><h6>Christina Pereira</h6></a>
            <p>TE-CMPN-A ROLL-NO:11</p>
            <p>PID:182084</p>

            <!--Twitter-->
<a href="https://twitter.com/Christi_2611" target="_blank"class="btn-floating btn-lg btn-tw" type="button" role="button"><i class="fab fa-twitter"></i></a>
<!--Google +-->
<a href="https://github.com/Christina2611" target="_blank" class="btn-floating btn-lg btn-git" type="button" role="button"><i class="fab fa-github"></i></a>
<!--Linkedin-->
<a href="https://www.linkedin.com/in/christina-pereira-9491401b6/"target="_blank" class="btn-floating btn-lg btn-li" type="button" role="button"><i class="fab fa-linkedin-in"></i></a>
<!--Instagram-->
<a href="https://www.instagram.com/_christina.pereira_/" target="_blank"class="btn-floating btn-lg btn-ins" type="button" role="button"><i class="fab fa-instagram"></i></a>
          </div>
          
        </div>
       
        <div class="col-lg-4 col-sm-6">
          <div class="item"> 
            <span class="icon feature_box_col_three">
              <!-- <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi pb-2 bi-book-half" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8.5 2.687v9.746c.935-.53 2.12-.603 3.213-.493 1.18.12 2.37.461 3.287.811V2.828c-.885-.37-2.154-.769-3.388-.893-1.33-.134-2.458.063-3.112.752zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
              </svg> -->
            </span><br>
            <a href="https://github.com/markcoutinho" target="_blank"><h6>Mark Coutinho</h6></a>
            <p>TE-CMPN-A ROLL-NO:13</p>
            <p>PID:182004</p>
            <!--Twitter-->
<a href="https://twitter.com/M4RKCoutinhO" target="_blank"class="btn-floating btn-lg btn-tw" type="button" role="button"><i class="fab fa-twitter"></i></a>
<!--Google +-->
<a   href="https://github.com/markcoutinho" target="_blank" class="btn-floating btn-lg btn-git" type="button" role="button"><i class="fab fa-github"></i></a>
<!--Linkedin-->
<a  href="https://www.linkedin.com/in/mark-coutinho-3557b31b4/" target="_blank"class="btn-floating btn-lg btn-li" type="button" role="button"><i class="fab fa-linkedin-in"></i></a>
<!--Instagram-->
<a href="https://www.instagram.com/mark.exec/" target="_blank"class="btn-floating btn-lg btn-ins" type="button" role="button"><i class="fab fa-instagram"></i></a>
          </div>
        </div>

       
      </div>
    </div>
  </div>
</div>

</main>
<?php subview('footer.php'); ?> 

<footer>
	<em><h5 class="text-light text-center p-0 brand mt-2">
				<img src="../assets/images/logo.png" 
					height="40px" width="40px" alt="">				
			SHIFT Airways</h5></em>
	<p class="text-light text-center">&copy; Copyright 2020</p>
</footer>
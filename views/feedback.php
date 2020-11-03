<?php include_once '../helpers/helper.php'; ?>
<?php subview('header.php'); ?>
<link rel="stylesheet" href="../assets/css/feed.css">

    <div class="container">
        <div class="row">
        <div class="col-md-6">
            <div>
                <img src="../assets/images/feedback.PNG" class="flight d-none d-md-block" width="100%" height="850px">
                <div class="carousel-caption">  
                <h3>"A True Feedback is the KEY to improvement."</h3>
            </div>
        </div>
    </div>
<div class="col-md-6">
    <img src="../assets/images/image1.png" width="280px" class="d-md-none">
    <img src="../assets/images/image1.png" width="300px" class="d-none d-md-block">
    <div class="row">
        <form>
            <div class="col-md-6 form-group">

            </div>
                
            <div class="col-md-12 form-group">
            <label>First Name</label>
                <input type="text" name="fname" placeholder="First Name*" class="form-control form-group" required >                
                <label>Last Name</label>
                <input type="text" name="lname"placeholder="Last Name*"   class=" form-control form-group" required>
            </div>
    </div>
            <label>Email</label>
            <input type="email" name="email" placeholder="Username*"   class="form-control form-group" required=""  >
            <br>

    <div class="form-group">
        <label for="quetsion1">1.What was your first impression when you entered
        the website?</label>
        <textarea class="form-control" id="quetsion1" rows="3"></textarea>
    </div>

    <label>2. How did you first hear about us?*</label>

    <select class="form-control" >
        <option  selected disabled>*choose from below*</option>
        <option >Search Engine</option>
        <option >Social Media</option>
        <option >Friend/Relative</option>
        <option >Word of Mouth</option>
        <option >Television</option>
        <option>Other</option>
    </select>
    <br>
        <label >3. Is there anything missing on this page?</label>
        <input type="text" name="decr" class="form-control" style="height: 60px;" required>
        <br> 
    <label>4. Overall Rating For Our Website .</label><br>
    <div class="rating">  
  <label>
    <input type="radio" name="stars" value="1" />
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="stars" value="2" />
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="stars" value="3" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="stars" value="4" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="stars" value="5" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
</div>

<button class="btn btn-success btn-block mb-4">Submit</button>

</form>

</div>
</div>
</div>
</div>
<?php subview('footer.php'); ?> 


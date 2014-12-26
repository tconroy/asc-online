<!-- sidebar map -->
<div class="col-md-5 col-md-push-7">
  <a id="gmap-link" href="http://maps.rit.edu/embed.php?zoom=21&lat=43.084790235380794&lng=-77.67410930290224&open=p-24&start=0&rows=10">
    <img class="img-responsive" src="<?=get_template_directory_uri();?>/assets/img/content/contact/static-gmap.png">
  </a>
  <p>
    <ul class="unstyled-list text-center">
      <li>Located in Monroe Hall (BLDG. 15)</li>
      <li>above Artesano's Bakery</li>
      <li>Phone: <a href="tel:585-475-6682">585-475-6682</a></li>
    </ul>
  </p>

</div>
<!-- message form -->
<div class="col-md-7 col-md-pull-5">
<form role="form" id="contact-form" class='col-md-11' method='post' action='<?=bloginfo('template_directory');?>/mailer.php'>
<input type="hidden" name="formName" value="contact">
  <div class="form-group">
    <input required type="text" class="form-control" name="name" placeholder="your name">
  </div>
  <div class="form-group">
    <input required type="email" class="form-control" name="email" placeholder="email address">
  </div>
  <div class="form-group">
    <select name="subject" class="form-control" required>
      <option value="null">SELECT SUBJECT</option>
      <option value="Option 1">Option 1</option>
      <option value="Option 2">Option 2</option>
      <option value="Option 3">Option 3</option>
      <option value="Option 4">Option 4</option>
    </select>
  </div>
  <div class="form-group">
    <textarea required name="message" class="form-control" placeholder="your message" cols="30" rows="10"></textarea>
  </div>
  <hr>
  <div class="form-group">
    <input disabled="disabled" type="submit" class="btn btn-holo-orange submit-btn pull-right" value="Submit">
  </div>
</form>
</div>

<div class="col-xs-12">
  <div class="header text-center" style="margin-top: 8em; margin-bottom: 4em;">
    <h1>ACADEMIC COACHING APPOINTMENT REQUEST FORM</h1>
  </div>
  <form role="form" id="appointment-form" method="post" action="<?=bloginfo('template_directory');?>/mailer.php">
    <input type="hidden" name="formName" value="appointmentRequest">
    <div class="form-group col-md-3">
      <label for="appt-fn">First Name</label>
      <input type="text" class="form-control" placeholder="" name="" id="appt-fn">
    </div>
    <div class="form-group col-md-2 col-md-3">
      <label for="appt-ln">Last Name</label>
      <input type="text" class="form-control" placeholder="" name="" id="appt-ln">
    </div>
    <div class="form-group col-md-6">
      <label for="appt-uid">Student UID (only numbers, no dashes)</label>
      <input type="number" class="form-control" placeholder="" name="" id="appt-uid" required="required">
    </div>
    <div class="form-group col-md-3">
      <label for="appt-email">RIT Email</label>
      <input type="text" class="form-control" placeholder="" name="" id="appt-email">
    </div>
    <div class="form-group col-md-9">
      <label for="">Year at RIT</label>
      <div class="form-control" style="border: none; outline: none; box-shadow: none;">
        <label class="radio-inline"><input type="radio" name="inlineRadioOptions" value="1st"> 1st</label>
        <label class="radio-inline"><input type="radio" name="inlineRadioOptions" value="2nd"> 2nd</label>
        <label class="radio-inline"><input type="radio" name="inlineRadioOptions" value="3rd"> 3rd</label>
        <label class="radio-inline"><input type="radio" name="inlineRadioOptions" value="4th"> 4th</label>
        <label class="radio-inline"><input type="radio" name="inlineRadioOptions" value="5th"> 5th</label>
        <label class="radio-inline"><input type="radio" name="inlineRadioOptions" value="6+ / Grad"> 6+ / Grad</label>
      </div>
    </div>
    <div class="form-group col-md-6">
      <label for="appt-college">College</label>
      <select class="form-control" id="appt-college">
        <option value="">SELECT COLLEGE</option>
        <option>College of Applied Science and Technology</option>
        <option>Saunders College of Business</option>
        <option>B. Thomas Golisano College of Computing and Information Sciences</option>
        <option>Kate Gleason College of Engineering</option>
        <option>College of Health Sciences and Technology</option>
        <option>College of Imaging Arts and Sciences</option>
        <option>College of Liberal Arts</option>
        <option>National Technical Institute for the Deaf</option>
        <option>College of Science</option>
    </select>
    </div>
    <div class="form-group col-md-12">
      <label for="appt-reason">What is your primary reason for making this appointment?</label>
      <textarea name="" id="appt-reason" class="form-control" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group col-md-12">
      <label for="">When are you typically available on the following days?</label>
      <ul class="checkbox-grid">
        <li class="gh"><label>Day</label></li>
        <li><label>9am</label></li>
        <li><label>10am</label></li>
        <li><label>11am</label></li>
        <li><label>12pm</label></li>
        <li><label>1pm</label></li>
        <li><label>2pm</label></li>
        <li><label>3pm</label></li>
        <li><label>4pm</label></li>
        <li class="gh"><label>Tuesday</label></li>
        <li><input type="checkbox" name="available['Tuesday']" value="9am"></li>
        <li><input type="checkbox" name="available['Tuesday']" value="10am"></li>
        <li><input type="checkbox" name="available['Tuesday']" value="11am"></li>
        <li><input type="checkbox" name="available['Tuesday']" value="12pm"></li>
        <li><input type="checkbox" name="available['Tuesday']" value="1pm"></li>
        <li><input type="checkbox" name="available['Tuesday']" value="2pm"></li>
        <li><input type="checkbox" name="available['Tuesday']" value="3pm"></li>
        <li><input type="checkbox" name="available['Tuesday']" value="4pm"></li>
        <li class="gh"><label>Wednesday</label></li>
        <li><input type="checkbox" name="available['Wednesday']" value="9am"></li>
        <li><input type="checkbox" name="available['Wednesday']" value="10am"></li>
        <li><input type="checkbox" name="available['Wednesday']" value="11am"></li>
        <li><input type="checkbox" name="available['Wednesday']" value="12pm"></li>
        <li><input type="checkbox" name="available['Wednesday']" value="1pm"></li>
        <li><input type="checkbox" name="available['Wednesday']" value="2pm"></li>
        <li><input type="checkbox" name="available['Wednesday']" value="3pm"></li>
        <li><input type="checkbox" name="available['Wednesday']" value="4pm"></li>
        <li class="gh"><label>Thursday</label></li>
        <li><input type="checkbox" name="available['Thursday']" value="9am"></li>
        <li><input type="checkbox" name="available['Thursday']" value="10am"></li>
        <li><input type="checkbox" name="available['Thursday']" value="11am"></li>
        <li><input type="checkbox" name="available['Thursday']" value="12pm"></li>
        <li><input type="checkbox" name="available['Thursday']" value="1pm"></li>
        <li><input type="checkbox" name="available['Thursday']" value="2pm"></li>
        <li><input type="checkbox" name="available['Thursday']" value="3pm"></li>
        <li><input type="checkbox" name="available['Thursday']" value="4pm"></li>
        <li class="gh"><label>Friday</label></li>
        <li><input type="checkbox" name="available['Friday']" value="9am"></li>
        <li><input type="checkbox" name="available['Friday']" value="10am"></li>
        <li><input type="checkbox" name="available['Friday']" value="11am"></li>
        <li><input type="checkbox" name="available['Friday']" value="12pm"></li>
        <li><input type="checkbox" name="available['Friday']" value="1pm"></li>
        <li><input type="checkbox" name="available['Friday']" value="2pm"></li>
        <li><input type="checkbox" name="available['Friday']" value="3pm"></li>
        <li><input type="checkbox" name="available['Friday']" value="4pm"></li>
      </ul>
    </div>
    <div class="form-group">
      <div class="col-sm-12">
        <hr>
        <input type="submit" value="Submit" disabled="disabled" class="btn btn-holo-orange pull-right">
      </div>
    </div>
  </form>
</div>
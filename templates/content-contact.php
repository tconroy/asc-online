<!-- sidebar map -->
<div class="col-md-5 col-md-push-7">
  <a id="gmap-link" href="http://maps.rit.edu/embed.php?zoom=21&lat=43.084790235380794&lng=-77.67410930290224&open=p-24&start=0&rows=10">
    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/content/contact/static-gmap.png">
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
<form role="form" id="contact-form" class='col-md-11' method='post' action='<?php echo bloginfo('template_directory'); ?>/mailer.php'>
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
      <option value="Question">Question</option>
      <option value="Comment">Comment</option>
      <option value="Suggestion">Suggestion</option>
      <option value="Help">Help</option>
      <option value="General">General</option>
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
  <form role="form" id="appointment-form" method="post" action="<?php echo bloginfo('template_directory'); ?>/mailer.php">
    <input type="hidden" name="formName" value="appointmentRequest">
    <div class="form-group col-md-3">
      <label for="appt-fn">First Name</label>
      <input type="text" class="form-control" name="fname" id="appt-fn">
    </div>
    <div class="form-group col-md-2 col-md-3">
      <label for="appt-ln">Last Name</label>
      <input type="text" class="form-control" name="lname" id="appt-ln">
    </div>
    <div class="form-group col-md-6">
      <label for="appt-uid">Student UID (only numbers, no dashes)</label>
      <input type="number" class="form-control" name="uid" id="appt-uid" required="required">
    </div>
    <div class="form-group col-md-3">
      <label for="appt-email">RIT Email</label>
      <input type="text" class="form-control" name="appt-email" id="appt-email">
    </div>
    <div class="form-group col-md-9">
      <label for="">Year at RIT</label>
      <div class="form-control" style="border: none; outline: none; box-shadow: none;">
        <label class="radio-inline"><input type="radio" name="yrlvl" value="1st"> 1st</label>
        <label class="radio-inline"><input type="radio" name="yrlvl" value="2nd"> 2nd</label>
        <label class="radio-inline"><input type="radio" name="yrlvl" value="3rd"> 3rd</label>
        <label class="radio-inline"><input type="radio" name="yrlvl" value="4th"> 4th</label>
        <label class="radio-inline"><input type="radio" name="yrlvl" value="5th"> 5th</label>
        <label class="radio-inline"><input type="radio" name="yrlvl" value="6+ / Grad"> 6+ / Grad</label>
      </div>
    </div>
    <div class="form-group col-md-6">
      <label for="appt-college">College</label>
      <select class="form-control" id="appt-college" name="college">
        <option value="null">SELECT COLLEGE</option>
        <option value="CAST">College of Applied Science and Technology</option>
        <option value="COB">Saunders College of Business</option>
        <option value="GCCIS">B. Thomas Golisano College of Computing and Information Sciences</option>
        <option value="KGCOE">Kate Gleason College of Engineering</option>
        <option value="COHSAT">College of Health Sciences and Technology</option>
        <option value="COIAS">College of Imaging Arts and Sciences</option>
        <option value="COLA">College of Liberal Arts</option>
        <option value="NTID">National Technical Institute for the Deaf</option>
        <option value="COS">College of Science</option>
    </select>
    </div>
    <div class="form-group col-md-12">
      <label for="appt-reason">What is your primary reason for making this appointment?</label>
      <textarea name="primaryreason" id="appt-reason" class="form-control" cols="30" rows="10"></textarea>
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
        <li><input type="checkbox" name="availTuesday[]" value="9am"></li>
        <li><input type="checkbox" name="availTuesday[]" value="10am"></li>
        <li><input type="checkbox" name="availTuesday[]" value="11am"></li>
        <li><input type="checkbox" name="availTuesday[]" value="12pm"></li>
        <li><input type="checkbox" name="availTuesday[]" value="1pm"></li>
        <li><input type="checkbox" name="availTuesday[]" value="2pm"></li>
        <li><input type="checkbox" name="availTuesday[]" value="3pm"></li>
        <li><input type="checkbox" name="availTuesday[]" value="4pm"></li>
        <li class="gh"><label>Wednesday</label></li>
        <li><input type="checkbox" name="availWednesday[]" value="9am"></li>
        <li><input type="checkbox" name="availWednesday[]" value="10am"></li>
        <li><input type="checkbox" name="availWednesday[]" value="11am"></li>
        <li><input type="checkbox" name="availWednesday[]" value="12pm"></li>
        <li><input type="checkbox" name="availWednesday[]" value="1pm"></li>
        <li><input type="checkbox" name="availWednesday[]" value="2pm"></li>
        <li><input type="checkbox" name="availWednesday[]" value="3pm"></li>
        <li><input type="checkbox" name="availWednesday[]" value="4pm"></li>
        <li class="gh"><label>Thursday</label></li>
        <li><input type="checkbox" name="availThursday[]" value="9am"></li>
        <li><input type="checkbox" name="availThursday[]" value="10am"></li>
        <li><input type="checkbox" name="availThursday[]" value="11am"></li>
        <li><input type="checkbox" name="availThursday[]" value="12pm"></li>
        <li><input type="checkbox" name="availThursday[]" value="1pm"></li>
        <li><input type="checkbox" name="availThursday[]" value="2pm"></li>
        <li><input type="checkbox" name="availThursday[]" value="3pm"></li>
        <li><input type="checkbox" name="availThursday[]" value="4pm"></li>
        <li class="gh"><label>Friday</label></li>
        <li><input type="checkbox" name="availFriday[]" value="9am"></li>
        <li><input type="checkbox" name="availFriday[]" value="10am"></li>
        <li><input type="checkbox" name="availFriday[]" value="11am"></li>
        <li><input type="checkbox" name="availFriday[]" value="12pm"></li>
        <li><input type="checkbox" name="availFriday[]" value="1pm"></li>
        <li><input type="checkbox" name="availFriday[]" value="2pm"></li>
        <li><input type="checkbox" name="availFriday[]" value="3pm"></li>
        <li><input type="checkbox" name="availFriday[]" value="4pm"></li>
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

<div id="successAlert" class="hidden alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert">
      <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
  </button>
  <strong class="msgbody"></strong>
</div>
<div id="errorAlert" class="hidden alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert">
      <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
  </button>
  <strong class="msgbody"></strong>
</div>
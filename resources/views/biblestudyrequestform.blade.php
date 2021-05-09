<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bible Study Request Form</title>
    </head>
    <body class="antialiased">
            <div class="bible-study-request-form">
                <h1>Members Church of God International<br>
                Bible Study Request Form</h1>

                    <div class="body1">

                      <div id="ourmanna-verse">Loading new verse of the day!...
                          <script src="http://www.ourmanna.com/verses/api/js/?order=random" type="text/javascript"></script>
                      </div>
                        
                      <br>
                        <p class="please">Kindly fill-in this form to request a BIBLE STUDY SESSION.</p>

                          <form action="/bible-study-form-create" method="POST" >
                          @csrf
                          
                          <input type="hidden" value="{{ $biblestudyrequests->id }}" name="id">

                            <label for="fullname"><b>Complete Name</b></label>
                            <input type="text" value="{{ $biblestudyrequests->fullname }}" placeholder="First Name, Middle Name, Last Name" name="fullname" id="name" required>

                            <label for="email"><b>Email Address</b></label>
                            <input type="text" value="{{ $biblestudyrequests->email }}" placeholder="Enter Email Address" name="email" id="email" required>

                            <label for="contact"><b>Contact Number</b></label>
                            <input type="text" value="{{ $biblestudyrequests->contact }}" placeholder="Enter Your Number" name="contact" id="contact" required>

                            <label for="birthdate"><b>Birthdate:</b></label><br>
                            <input type="date" value="{{ $biblestudyrequests->birthdate }}" name="birthdate" id="birhtdate" required>

                            <label for="religion"><b>Religious Affiliation</b></label>
                            <input type="text" value="{{ $biblestudyrequests->religion }}" placeholder="Enter Religious Affiliation" name="religion" id="religious affiliation" required>

                            <label for="date"><b>Bible Study Date:</b></label>
                            <input type="date" value="{{ $biblestudyrequests->date }}" name="date" id="bible study date" required>

                            <label for="time"><b>Bible Study Time:</b></label>
                            <input type="time" value="{{ $biblestudyrequests->time }}" name="time" id="bible study time" required>

                            <label for="location"><b>Bible Study Location or Complete Address</b></label>
                            <input type="text" value="{{ $biblestudyrequests->location }}" placeholder="Enter Bible Study Location / Address" name="location" id="bible study location or complete address" required>  

                            <button type="submit" class="submitbtn">Submit</button>
                           
                          </form>

                            
                    </div>                  
            </div>
    </body>
</html>



<style>
    * {
      box-sizing: border-box;
      }
form{
  padding-top: 20px;
  margin-left: 100px;
  margin-right: 100px;
  border-radius: 20px;
  background-color: #fbc531;
}

h1{
  font-size: 40px;
    left: 0px;
    width: 100%;
    text-align: center;
    background-color: #ffa502;
    padding-top: 15px;
    padding-bottom: 15px;
    color: white;
    text-shadow: 1px 1px #353b48;
    margin-top: 0%;
}

#ourmanna-verse{
  text-align: center;
  width: 100%;
  font-size: 20px;
  margin-left: 20px;
  margin-right: 20px;
}

.please{
  width: 100%;
  font-size: 20px;
  font-weight: bold;
  background: 200px white;
  margin: 0px;
  margin-left: 100px;
  padding-bottom: 30px;
  margin-top: 0px;
}

/* Full-width input fields */
input[type=text], input[type=date], input[type=time] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: 30px;
  background: #f1f1f1;
  padding-top: 15px;
}

label{
  padding: 15px;
  font-size: 20px;
}


/* Set a style for the submit/register button */
.submitbtn {
  background-color: #2d3436;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  opacity: 0.9;
  font-size: 25px;
  width: 40%;
  margin-left: 30%;
  margin-right: 30%;
}

.submitbtn:hover {
  opacity:1;
}


</style>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  background: rgba(255, 255, 255, 0.5) url(items.jpg) no-repeat 0 50%;
  background-size: 1500px 680px;
}
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #FFA500;
  padding: 20px;
  opacity:0.8;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}


/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
.col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }

}
</style>
</head>
<body>

<h2>FILL YOUR DETAILS BELOW</h2>
<p>you can collect your item directly from your nearby area but before submit your details below</p>

<div class="container">
  <form action="/action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="fname"><b>First Name</b></label>
      </div>
      <div class="col-75">
        <b><input type="text" id="fname" name="firstname" placeholder="Your name.."></b>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname"><b>Last Name</b></label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="type"><b>organisation type</b></label>
      </div>
      <div class="col-75">
        <select id="type" name="type">
          <option value="student">Student</option>
          <option value="orphanage">orphanage</option>
          <option value="school">school</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="address">address</label>
      </div>
      <div class="col-75">
        <textarea id="address" name="address" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>

</body>
</html>

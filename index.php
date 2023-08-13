<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact form</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>
  <div class="container-fluid ">
    <div class="row mt-sm-5 ">
      <div class="col-sm-4"></div>
      <div class="col-sm-4">
      <div class="box border justify-content-center">
      <center><h1>Contact Form</h1></center> <br><br>
      <form action="submiting.php" method="post">

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="fullname">Full Name:</label> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="fullname" name="fullname" ><br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <label for="phone">Phone Number:</label> &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="tel" id="phone"  pattern="[0-9]{10}" name="phone" maxlength="10" ><br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <label for="email">Email:</label> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" id="email" name="email" ><br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <label for="subject">Subject:</label> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="subject" name="subject" ><br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <label for="message" >Message:</label> <br> <br> &nbsp;&nbsp;&nbsp;&nbsp; 
            <textarea id="message" name="message" rows="4" cols="50" ></textarea><br><br>
            <center>
            <input type="submit" value="Submit" style="background-color: #4CAF50; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;"> <br>
            </center>
          </form>
          <br>
        <div class="col-sm-4"></div>
      </div>
      </div>
    </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>

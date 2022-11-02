<!DOCTYPE html>
<html>
<head>
<style>
.grid-container {
  display: grid;

  grid-template-columns: auto auto ;
  padding: 10px;
}
.grid-item {

  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 20px;
  text-align: left;
  margin-right: 100px;
}

input{
    width: 80%;
}

input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=email]{
    width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
.grid-image{
    /* margin-left: 50px; */
     padding-left: 100px; 
}



</style>
</head>
<body>
<div class="grid-container">

  <div class="grid-image">
  	<img src="img1.jpg" alt="image" height="400px" width="550px">
      <p>
        <h1>Having Queries Regarding</h1>
        <h1>Hackathon</h1>
    </p>
        <div class="heading1">
            
            <p>Drop us your query by filling this form and one of our experts will get in touch with you.</p>
            <p>"Innovation is the unrelenting drive to break the status quo and develop anew where few have dared to go."</p>
        </div>
      
  </div>

  <form action="test.php" method="post">
    <div class="grid-item">
        <label for="name" class="nameL">Name</label><br>
        <input type="text" name="myname"><br>
        <label for="email" class="emailL">Email</label><br>
        <input type="email" name="myemail"><br>
        <label for="subject">subject</label><br>
        <input type="text" name="mysubject"><br>
        <!-- <label for="message">message [optional]</message></label><br>
        <input type="text" name="message"><br> -->
        <p>
            Message<br><textarea name="mymessage" id="mymessage" cols="40" rows="10" ></textarea>
        </p>

        <div class="button-container">
            <button type="submit">Submit</button>
        </div>
    </div>
</form>
  
</div>

</body>
</html>
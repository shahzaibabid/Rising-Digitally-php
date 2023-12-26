<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <style>
    body{
      background-color:#000;
    }
    button {
      padding: 10px 20px;
      margin: 0 10px;
      font-size: 16px;
      cursor: pointer;
      border: none;
      border-radius: 5px;
      background-color: #FFBD10; /* Blue color */
      color: #000; /* White color for text */
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #000; /* Darker blue on hover */
      color: white;
    }
    input,
 select,
 textarea {
   width: 100%;
   padding: 10px;
   box-sizing: border-box;
   border: 1px solid #ccc;
   border-radius: 4px;
 }
 form {
   display: grid;
   gap: 15px;
 }
    /* Style for the active button */
    button.active {
      background-color: blue; /* Darker blue for active button */
    }

    .form-group {
      display: none;
    }
    .form-group.active {
      display: block;
    }
  </style>
</head>
<body>
  <div>
    <button id="brandButton" class="active">For Brand/Agency</button>
    <button id="influencerButton">For Influencer</button>
  </div>
  <div class="col-sm-12 col-lg-12"  style="background-color: #58BDB3; border-radius: 20px; border-color: black;">

  <form id="brandForm" class="form-group active">
    
  <h2 style="color: #000;"><center>We'd Love To Hear From You!</center></h2>
  <input type="text" placeholder="Enter full name" name="name" id="name"> <br><br>
  <input type="email" placeholder="Enter email" name="email" id="email"> <br><br>
  <select name="representative" id="representative"> 
    <option value="brand">i am a brand</option>
    <option value="agency">i am a agency</option>
    <option value="influencer">i am a influencer</option>
  </select><br><br>
  <input type="text" placeholder="What are u looking for?" name="look" id="look"><br><br>
  <textarea name="message" placeholder="Enter mesage" id="message" cols="30" rows="6"></textarea>
    <input type="submit" value="Submit">
  </form>
  </div>
  <div class="col-sm-12 col-lg-12"  style="background-color: #58BDB3; border-radius: 20px; border-color: black;">
  <form id="influencerForm" class="form-group">
  <h2 style="color: #000;"><center>We'd Love To Hear From Influencers!</center></h2>
  <label for="influencerName">Influencer Name:</label>
    <input type="text" id="influencerName" name="influencerName"><br>
    <label for="influencerEmail">Email:</label>
    <input type="email" id="influencerEmail" name="influencerEmail"><br>
    <label for="influencerPhone">Phone:</label>
    <input type="text" id="influencerPhone" name="influencerPhone"><br>
    <label for="influencerCountry">Country:</label>
    <input type="text" id="influencerCountry" name="influencerCountry"><br>
    <label for="influencerNiche">Niche:</label>
    <input type="text" id="influencerNiche" name="influencerNiche"><br>
    <label for="influencerSocialMedia">Social Media URLs:</label>
    <input type="text" id="influencerSocialMedia" name="influencerSocialMedia"><br>
    <input type="submit" value="Submit">  </form>
  </div>
  <script>
    const brandButton = document.getElementById('brandButton');
    const influencerButton = document.getElementById('influencerButton');
    const brandForm = document.getElementById('brandForm');
    const influencerForm = document.getElementById('influencerForm');

    brandButton.addEventListener('click', () => {
      brandForm.classList.add('active');
      influencerForm.classList.remove('active');
    });

    influencerButton.addEventListener('click', () => {
      influencerForm.classList.add('active');
      brandForm.classList.remove('active');
    });
  </script>
</body>
</html>

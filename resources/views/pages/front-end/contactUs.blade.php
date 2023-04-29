<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/public/asset/css/contactus.css">
  </head>
  <body>
    <div class="container">
        <form action="action_page.php">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your name..">
            
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Your email">

            <label for="phone number">Phone Number</label>
            <input type="text" id="phone number" name="phone number" placeholder="Your phone number">

            <label for="Keluhan">Keluhan</label>
            <select id="Keluhan" name="Keluhan">
            <option value="bipolar">Stress</option>
            <option value="mental health">Mental Health</option>
            <option value="stress">Masalah Keluarga</option>
            </select>

            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

            <button type="button" class="btn btn-primary btn-submit">Submit</button>
        </form>
    </div>
   </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Info Card</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
  <div class="form-container">
    <form action="process.php" method="POST" class="glass-card">
      <h2>Personal Info Card</h2>
      <label for="username">Name</label>
      <input type="text" placeholder="Enter your name" name="userName" id="userName" >
      <label for="age">Age</label>
      <input type="number" placeholder="Enter your age" name="age" id="age" required>
      <label for="favColor">Favorite Color</label>
      <input type="text" placeholder="Enter your favorite color" name="favColor" id="favColor" required>
      <button type="submit" value="submit">Submit</button>
    </form>
  </div>
</body>
</html>
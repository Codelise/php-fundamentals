<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="calculator.php" method="POST">
    <h2>Calculator</h2>
    <label for="inputOne">Enter Number</label>
    <input type="number" id="inputOne" name="inputOne" >
    <br>
    <label for="inputTwo">Enter Number</label>
    <input type="number" id="inputTwo" name="inputTwo">
    <br>
    <select name="operations" id="operations">
        <option value="">Select Operation</option>
        <option value="addition">+</option>
        <option value="subtraction">-</option>
        <option value="multiplication">x</option>
        <option value="division">÷</option>
    </select>
    <br>
    <button type="submit" value="submit">Calculate</button>
</form>
</body>
</html>
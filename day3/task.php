 <?php
//  like a localStorage in JS to prevent forgetting current tasks
session_start(); 
require_once 'functions.php';

// isset() checks if a variable is declared or not null

// calls initializeTask() from functions.php
initializeTask(); 

//  Delete task function
if(isset($_GET['delete'])){
    // selects the task index that will be deleted
    $index = $_GET['delete'];
    // deletes the selected task
    unset($_SESSION['tasks'][$index]);
    // array_values() return values and indexes 
    // reindexing tasks array
    $_SESSION['tasks'] = array_values($_SESSION['tasks']);
}
// currently no edit task
$editTask = ''; 
// -1 so it doesn't select first task(0) by default
$editIndex = -1;

// Edit task function
if(isset($_GET['edit'])){
    $editIndex = $_GET['edit'];
    // gets the selected task and put it into input field
    $editTask = $_SESSION['tasks'][$editIndex];
}



//  only runs if the add task btn is click and taskInput has a value
 if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["taskInput"])){
    // gets the value from task input
    $newTask = trim(htmlspecialchars($_POST["taskInput"]));

    // calls the addTask() with $newTask as parameter
    if(addTask($newTask)){
        header("Location: task.php");
        exit;
    }
    // $indexToUpdate = $_POST["editIndex"];

    // if(!empty($newTask)){
    //     if($indexToUpdate != -1){
    //         // edits tasks
    //         $_SESSION['tasks'][$indexToUpdate] = $newTask;
    //     } else {
    //         // adds tasks
    //         $_SESSION['tasks'][] = $newTask;
    //     }

    // // to prevent duplication of tasks on every reload/refresh
    // header("Location: task.php");
    // exit;
    }
   
addTask($task);
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List Manager</title>
</head>
<body>
    <h1>Task List Manager</h1>

    <form action="task.php" method="POST">
        <input type="hidden" name="editIndex" value="<?php echo $editIndex; ?>">
        <label for="task">New Task:</label>
        <input type="text" id="taskInput" name="taskInput" placeholder="Enter a task" value="<?php echo $editTask; ?>" required>
        <button type="submit"><?php echo ($editIndex != -1) ? 'Save Changes' : 'Add Task'; ?></button>
    </form>

    <hr>

    <h2>My Tasks</h2>
    <ul>
      <?php foreach (getAllTasks() as $index => $task): ?>
        <li>
            <?php echo $task; ?>
            <a href="task.php?edit=<?php echo $index; ?>">Edit</a>
            <a href="task.php?delete=<?php echo $index; ?>" onclick="return confirm('Delete a task?')">Delete</a>
        </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>

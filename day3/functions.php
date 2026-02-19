<?php

// load saved tasks from SESSION
function initializeTask(){
     if(!isset($_SESSION['tasks'])){
    $_SESSION['tasks'] = [];
 }

}

// get all tasks array ['tasks']
function getAllTasks(){
    return $_SESSION['tasks'];
}

// add task to SESSION
function addTask($task){
        if(!empty(trim($task))){
            $_SESSION['tasks'][] = $task;
            return true;
        }
        return false;
};
?>
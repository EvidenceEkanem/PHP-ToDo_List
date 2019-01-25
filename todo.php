<?php
session_start();
// unset($_SESSION['todo']);
$todo = $_POST['todo_input'];
$submit = $_POST['submit'];
$done_todo = $_GET['to'];
$delete_todo = $_GET['delete'];

$_SESSION['todo'][] = [
    
    "todo_item" => $todo,
    "done" => $done_todo,
    "delete" => $delete_todo
];

if (isset($todo)) {
    header("location:index.php");
}
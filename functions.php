<?php

// this is for add new task

require_once 'connectsql.php';

if(ISSET($_POST['add'])){
    $todotasksname =  $_POST['todotasksname'];
    $statustask = $_POST['statustask'];
    $startdate = $_POST['startdate'];
    $completeddate = $_POST['completeddate'];
    
    $query = "INSERT INTO todolists (todotasksname, statustask, startdate, completeddate) VALUES (:todotasksname, :statustask, :startdate, :completeddate)"; // add data to todolists table on database
    
    $stmt = $connectsql->prepare($query);

    $stmt->bindParam(':todotasksname', $todotasksname);
    $stmt->bindParam(':statustask', $statustask);
    $stmt->bindParam(':startdate', $startdate);
    $stmt->bindParam(':completeddate', $completeddate);
    $stmt->execute();
    header('location: index.php'); // go back to index
    
    $connectsql = null;
}

// this is for delete 

require_once'connectsql.php';
	if(ISSET($_POST['delete'])){
		if(ISSET($_POST['check'])){
			$checked = $_POST['check'];
			for($i=0; $i < count($checked); $i++){
				$todotasksid = $checked[$i];
				$connectsql->query("DELETE FROM `todolists` WHERE `todotasksid`='$todotasksid'") or die("Failed to delete a row!");
			}
			
			header('location:index.php');
		}else{
			echo "<script>alert('Please select an item first!')</script>";
			echo "<script>window.location='index.php'</script>";
		}
	}

// this function is for complete task 

function completetask($connectsql) {
    $completasks = 'Complete';
    $sql = "SELECT * FROM todolists where statustask='$completasks'";
	$stmt = $connectsql->prepare($sql);
	$stmt->execute();
	$row = $stmt->fetch();
	do {
            echo"<tr>";
            echo "<td>". $row['todotasksname']. "</td>";
            echo "<td>". $row['startdate']."</td>";
            echo "<td>".  $row['statustask'] ."</td>";
            echo "<td>". $row['completeddate'] ."</td></tr>";
		} 
    while ($row = $stmt->fetch());
}

// this function for count task

function countTasksComplete($connectsql) {
    $completasks = 'Complete';
    $sql = "SELECT COUNT(*) FROM todolists where statustask='$completasks'";
    $counter = $connectsql->query($sql);
    $count = $counter->fetchColumn();
    echo "There are " .  $count . " complete task.";
}
    
    


// this function is for view task 

function viewTask($connectsql) {
        $query = "SELECT * FROM `todolists` ORDER BY `completeddate` asc";
        $stmt = $connectsql->prepare($query);
        $stmt->execute();
        $row = $stmt->fetch();
        do {
                echo"<tr>";
                echo "<td>". $row['todotasksname']. "</td>";
                echo "<td>". $row['startdate']."</td>";
                echo "<td>".  $row['statustask'] ."</td>";
                echo "<td>". $row['completeddate'] ."</td></tr>";
    
            } 
            
        while ($row = $stmt->fetch());
        }


?>
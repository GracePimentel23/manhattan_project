<?php
// Pimentel,Grace
// Spring 2024
// ISTE 240
//blog.php - PHP/ HTML

require "../../../dbConnect.inc";


if ($mysqli) {
    if (!empty($_POST['name']) && !empty($_POST['message'])) {
        $stmt = $mysqli->prepare("INSERT INTO comments (name, message) VALUES (?, ?)");
        $stmt->bind_param("ss", $_POST['name'], $_POST['message']);
        $stmt->execute();
        $stmt->close();
    }

    $sql = 'SELECT name, message FROM comments';
    $res = $mysqli->query($sql);
    if ($res) {
        while ($rowholder = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
            $records[] = $rowholder;
        }
        //var_dump($records);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blog</title> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "stylesheet" type="text/css" href="manhattan.css">
    <link rel="stylesheet" href="ex07.css">
</head>
<body>

  <div class="topnav">
            <a href="landmarks.php">Landmarks</a>
            <a href="transportation.php">Transportation</a>
            <a href="food.php">Food</a>
            <div class="logo">        
          	  <a  href="index.php">
            	<img id ="logoImage" src="logostill.png" alt="Home">
           	 </a>
            </div>
            <a href="activities.php">Activities </a>
            <a class="active-nav" href="other.php">Other</a>
            <a href="feedback.php">Feedback</a>
            <a href="blog.php"> blog</a>
        </div>

<h3>THE LIST</h3>

<div id="list">
    <ul>
        <?php
        foreach ($records as $this_row) {
            echo '<li>' . $this_row['name'] . ": " . $this_row['message'] . '</li>';
        }
        ?>
    </ul>
</div>

<hr />
<h3>Add to the list</h3>
<div id="formheader">
<form action="index.php" method="POST">
    Name: <input type="text" id="name" name="name" width="40" placeholder="Enter your name" />
    <p>&nbsp;</p>
    Comments: <br /> <textarea id="message" name="message" cols="90" rows="10"></textarea>
    <p><input type="submit" value="Add to the list"/></p>
</form>
</div>

<!--
<div id="commentbox">
    <div class="formheader">
        <h3>Comments</h3>
    </div>
    <?php
    if(mysqli_num_rows($res) > 0){
        echo "<table>
            <tr>
                <th>Name</th>
                <th>Comment</th>
            </tr>";
        
        while ($row = $res->fetch_assoc()){
            echo "<tr>
                <td>".$row["name"]."</td>
                <td>".$row["message"]."</td>
            </tr>";
        }
        echo "</table>";
    }
    ?>
</div>
-->

<!-- DATE -->
<?php
$filename = 'index.php';
if (file_exists($filename)) {
    echo "Last modified: " . date("l, F d Y h:ia", filemtime($filename));
}
?>
<a href="https://validator.w3.org/nu/#textarea" target="_blank">
        <img src="https://www.w3.org/html/logo/badge/html5-badge-h-solo.png" width="64" height="64" alt="HTML5 Powered" title="Valid HTML5" style="border:0;">
    </a>
    
<a href="https://jigsaw.w3.org/css-validator/#validate_by_input" target="_blank">
        <img src="https://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" width="88" height="31">
    </a>
</body>
</html>

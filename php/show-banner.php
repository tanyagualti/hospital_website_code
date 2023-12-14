<?php
include 'database.php';



$sql = "SELECT * FROM banner ORDER BY id DESC;
";
$result = mysqli_query($conn, $sql);

if ($result) {
    // Check if any rows were returned
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $lastUpload = $row['url'];

        ?>

<img style="width: 100vw;height:100vh;"src="../upload-images/<?php echo $lastUpload;?>">
        <?php
    } else {
        echo "No uploads found";
    }
} else {
    echo "Error querying the database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

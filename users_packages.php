<?php 
session_start();
include('STRUCTURES/header.php');
?>

<h1 class="danger">Packages</h1>
<?php
//link with database 
    $link = new mysqli("127.0.0.1","root","","packtrack");
    if ($link -> connect_error) {
        echo "Failed connection";
        exit();
    } else {
        $query = "SELECT * FROM package";
        $result = mysqli_query($link, $query);
        ?>

        <div class="recent-updates">
        <h2 style="margin: 2rem 0;">Package Information</h2>
        <table>
        <thead><tr><th>Package Name</th><th>PID</th><th>Destination</th><th>Source</th><th>Status</th></tr></thead>
        
        <?php 
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td style='padding:0 4rem;'>".$row['package_name']."</td>";
            echo "<td style='padding:0 4rem;'>".$row['package_ID']."</td>";
            echo "<td style='padding:0 4rem;'>".$row['package_destination']."</td>";
            echo "<td style='padding:0 4rem;'>".$row['package_source']."</td>";
            echo "<td style='padding:0 4rem;'>".$row['package_status']."</td>";
            echo "<td><a href='delete.php'>Delete</a></td>";
            echo "</tr>";
        }
    } 
?>
        </table>
        </div>


<?php 
include('STRUCTURES/footer.php');
?>
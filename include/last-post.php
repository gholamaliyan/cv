<?php
include('config.php');
$select = "SELECT * FROM `post` ORDER BY `id` DESC;";
$query=mysqli_query($con,$select);
$fetch=mysqli_fetch_assoc($query);
?>
        <div class="marquee">
            <li>آخرین مطلب سایت</li>
            <div class="text"><a href=""><p style="text-align:right">" <?php echo $fetch["title"] ?> "</p></a></div>
        </div>
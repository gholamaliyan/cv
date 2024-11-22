<?php
include('config.php');
include('func/function.php');
$select = "SELECT * FROM `post` ORDER BY `id` DESC;";
$query=mysqli_query($con,$select);
while ($fetch=mysqli_fetch_assoc($query)) 
{
?>
        <div class="content">
        <div class="content-title">
            <a href=<?php echo "readmore.php?postid=".$fetch['id'].""; ?>><?php echo $fetch["title"]; ?></a>
            </div>
            <img src=<?php echo $fetch["img"]; ?>>
            <div class="textc">
        <p><?php echo post_comment($fetch['content']); ?></p>
            </div>
                    <div class="readmore-main">
                    <div class="readmore"><a href=<?php echo "readmore.php?postid=".$fetch['id'].""; ?>>...ادامه ی مطلب</a></div>
                    </div>
        </div>
        <?php 
    }
    ?>
        
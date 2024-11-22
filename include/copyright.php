
        <div class="copyright">
        	                <?php 
                include('config.php');
$sql="SELECT * FROM `all-right`;";
$query=mysqli_query($con,$sql);
$fetch=mysqli_fetch_assoc($query);
                ?>
        <p><?php echo $fetch['text']; ?></p>
        <h1>طراحی شده با <img src="../school/img/like.png">با <img src="../school/img/html5.png"> و <img src="../school/img/css-3.png"> توسط محمدمهدی غلامعلیان</h1>
        </div>
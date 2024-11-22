        <div class="sidebar">
            <!--start sidebar sal-->
        <div class="sidebar-sal">
            <div class="sidebar-title-main">
            <div class="sidebar-title">
                <p>شعار سال 97 </p>
            </div>
                </div>
                <?php 
                include('config.php');
$sqls="SELECT * FROM `shoar-sal`;";
$querys=mysqli_query($con,$sqls);
$fetchs=mysqli_fetch_assoc($querys);
                ?>
            <img src=<?php echo $fetchs['img']; ?> title="<?php echo $fetchs['title']; ?>">
        </div>
            <!--end sidebar sal-->
            <!--start sidebar monasebat-->
        <div class="sidebar-monasebat">
            <div class="sidebar-title-main">
            <div class="sidebar-title">
                <p>مناسبت روز</p>
            </div>
                </div>
                                <?php 
                include('config.php');
$sqlm="SELECT * FROM `monasebat`;";
$querym=mysqli_query($con,$sqlm);
$fetchm=mysqli_fetch_assoc($querym);
                ?>
            <img src=<?php echo $fetchm['img']; ?> title="<?php echo $fetchm['title']; ?>">
            </div>
            <!--end sidebar monasebat-->
            <!--start sidebar shora-->
        <div class="sidebar-bazdid">
            <div class="sidebar-title-main">
            <div class="sidebar-title">
                <p>بازدید کنندگان سایت</p>
            </div>
                </div>
            <h1>
<?php
//اختلاف زمانی سرور
$time_zone = '12600';
//تاریخ امروز
$today = date("Y-m-d", time()+$time_zone);
//تاریخ دیروز
$yesterday = date("Y-m-d", time()-86400+$time_zone);
//آدرس فایل
$file_src = 'visit-stats.txt';
chmod($file_src, 0755);
//خواندن فایل
$read_file = file_get_contents($file_src);
//اگر فایل خالی نبود
if (filesize($file_src) > 0 || $read_file != ''){
    $split_file = explode('|', $read_file);
    //print_r($split_file);
    $modify = $split_file[3];
    //اگر تاریخ آخرین ویرایش برابر تاریخ امروز نبود
    if($modify != $today){
        $today_visit = 1;
        if($modify == $yesterday){
            $yesterday_visit = $split_file[0];
        }
        else{
            $yesterday_visit = 0;
        }        
        $total_visit = $split_file[2] + 1;
        $last_modify = $today;
    }
    //اگر تاریخ آخرین ویرایش برابر امروز بود
    else{
        $today_visit = $split_file[0] + 1;
        $yesterday_visit = $split_file[1];
        $total_visit = $split_file[2] + 1;
        $last_modify = $today;
    }
}
//اگر فایل خالی بود
else{
    $today_visit = 1;
    $yesterday_visit = 0;
    $total_visit = 1;
    $last_modify = $today; 
}
//نوشتن آمار جدید در فایل
$file_src_handle = fopen($file_src, 'w+');
$visit_data = $today_visit.'|'.$yesterday_visit.'|'.$total_visit.'|'.$last_modify;
fwrite($file_src_handle, $visit_data);
fclose($file_src_handle);
//محاسبه تعداد کاربران آنلاین
$config_array = array(
'user_time' => date("YmdHis", time()+$time_zone), 
'user_ip' => $_SERVER['REMOTE_ADDR'], 
'file_name' => 'visit-online.txt'
);
chmod($config_array['file_name'], 0755);
//خواندن اطلاعات فایل
$online_file = file_get_contents($config_array['file_name']);
//تجزیه به آرایه
$online_file = explode("\r\n", $online_file);
//حذف مقادیر خالی
foreach($online_file as $key=> $value){
    if(is_null($value) || $value == ''){
        unset($online_file[$key]);
    }
}
//حذف آی پی های قدیمی و آی پی فعلی
foreach($online_file as $key=> $value){
    $user_ip_time = explode("|", $value);
    if($user_ip_time[1] <= date("YmdHis", time()+$time_zone - 300)){
        unset($online_file[$key]);
    }
    if($user_ip_time[0] == $config_array['user_ip']){
        unset($online_file[$key]);
    }
}
//محاسبه تعداد افراد آنلاین
$online =1;
foreach($online_file as $online_users){
    $user_ip_time = explode("|", $online_users);
    if($user_ip_time[1] >= date("YmdHis", time()+$time_zone - 300)){
        $online++;
    }
}
//آمار کاربرانی که آنلاین هستند به اضافه کاربر فعلی
$new_online = $config_array['user_ip'] . "|" . $config_array['user_time'] . "\r\n";;
foreach($online_file as $key=> $value){
    $new_online .= $value . "\r\n";
}
//نوشتن آمار جدید در فایل
$file_src_handle = fopen($config_array['file_name'], 'w+');
fwrite($file_src_handle, $new_online);
fclose($file_src_handle);
////////////////* https://webgoo.ir *///////////////
//گرفتن خروجی
echo "<div class=\"stats\">
&raquo; بازدید امروز: $today_visit <br />
&raquo; بازدید دیروز: $yesterday_visit <br />
&raquo; افراد آنلاین: $online <br />
&raquo; بازدید کل: $total_visit
</div>";
?>
        </h1>
            </div>
            <!--end sidebar shora-->
                        <!--start sidebar top student-->
        <div class="time">
            <div class="sidebar-title-main">
            <div class="sidebar-title">
                <p>
<?php
include ('../school/jdf.php');
$day_number = jdate('j');
$month_number = jdate('n');
$year_number = jdate('y');
$day_name = jdate('l');
$month_name = jdate('F');
echo "امروز $day_name ، $year_number/$month_number/$day_number";
?>
        </p>
            </div>
                </div>
                <h2>
                <?php 
                $G=date("G");
                $i=date("i");
                $s=date("s");
 echo "ساعت برابر است با ". date("$G:$i");
 echo "&nbsp;&nbsp";
                 if ($G > 12) {
                    echo "شب";
                }
                else{
                    echo "روز";
                }
                 ?>
             </h2>
             <a href="" onclick="window.refresh()">بروزرسانی زمان     <img src="../school/img/refresh.png"></a>
            </div>
            <!--end sidebar top student-->
            </div>
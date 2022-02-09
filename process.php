<?php
    session_start();
    include 'connectDB.php';

    //จุดพักข้อมูล
    if(isset($_POST['dt']) && isset($_POST['people']) && isset($_POST['annotation'])){
        if($_POST['isFood'] !='เลือก' && $_POST['isFoodMusalim'] != 'เลือก'){
                $dt = $_POST['dt'];
                $people = $_POST['people'];
                $annotation = $_POST['annotation'];
                $food = ($_POST['isFood'] == 'มี')?True:False;
                $foodMusalim = ($_POST['isFoodMusalim'] == 'มี')?True:False;

                $sql = "INSERT INTO trip (amount_people, dt_trip, comments, food ,foodMusalim) VALUES ('{$people}', STR_TO_DATE('{$dt}', '%Y-%m-%d'), '{$annotation}', {$food}, {$foodMusalim});";
                if ($connect->multi_query($sql) === TRUE) {
                    echo "New records created successfully";
                    $_SESSION['isCheck'] = '1';
                }else {
                    $_SESSION['isCheck'] = '0';
                }
            }else{
                $_SESSION['isCheck'] = '0';
            }
        }else {
            $_SESSION['isCheck'] = '0';
        }
        header("refresh: 3; url=trip.php");
?>
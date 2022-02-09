<?php
session_start();
$session_value = (isset($_SESSION['isCheck']))?True:False;
$temp = ($session_value)?$_SESSION['isCheck']:'';
session_destroy();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="./calendar/styleCal.css">
    <link rel="stylesheet" href="./calendar/cal.css">
    <script src="axiosTrip.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="./img/logo.png" />
</head>
<body id="body">

<?php
    if($session_value){
        echo <<<HTML
        <input type="hidden" id="isCheck" name="isCheck" value="{$temp}">
        HTML;
    }else{
        echo <<<HTML
        <input type="hidden" id="isCheck" name="isCheck" value="3">
        HTML;
    }
?>

<section class="header about">
    <nav>
        <a href="index.html">
            <img src="./img/logo.png">
        </a>
        <span>ศูนย์การเรียนรู้เกษตรผสมผสาน มหาวิทยาลัยราชภัฏวิทยาเขตโป่งสลอด</span>
        
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
                <li><a href="./index.html">หน้าหลัก</a></li>
                <li><a href="./about.html">เกี่ยวกับเรา</a></li>
                <li><a href="#footer">ติดต่อ</a></li>
                <li class="hero-btn"><a href="./จองทริป.html">จองทริป</a></li>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>

</section>
<div style="width: 80%;transform: translateX(15%);">

<section class="carlendarTrip">
    <form action="./process.php"  method="POST">
    <div>
        <h1>เลือกวันจองทริป</h1>
    </div>
    <div class="input-group mb-3 h6">
        <span class="input-group-text" id="inputGroup-sizing-default">วันที่จอง</span>
        <input style="width: 100%;" name="dt"  type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3 h6">
        <span class="input-group-text" id="inputGroup-sizing-default">จำนวนคนที่มา</span>
        <input style="width: 100%;"  name="people" type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="5" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3  h6">
        <span class="input-group-text" id="inputGroup-sizing-default">ให้มีอาหารไหม</span>
        <select style="width: 100%;" name="isFood" class="form-control" aria-label="Default select example">
            <option selected>เลือก</option>
            <option>มี</option>
            <option>ไม่มี</option>
        </select>
    </div>
    <div class="input-group mb-3  h6">
        <span class="input-group-text" id="inputGroup-sizing-default">มีอาหารมุสลิมไหม</span>
        <select style="width: 100%;" name="isFoodMusalim" class="form-control" aria-label="Default select example">
            <option selected>เลือก</option>
            <option>มี</option>
            <option>ไม่มี</option>
        </select>
    </div>
    <div class="input-group mb-3  h6">
        <span class="input-group-text" id="inputGroup-sizing-default">หมายเหตุ (ให้เจ้าหน้าที่)</span>
        <textarea style="width: 100%;" name="annotation" class="form-control"  name="" id="" cols="30" rows="10"></textarea>
    </div>
    <div style="text-align: right;">
    <button type="submit" class="btn btn-success">Success</button>
    </div>


    

    </form>
</section>

</div>

<div style="width: 80%;transform: translateX(15%);" class="topTrip"><h1>วันที่มีคนจองแล้ว(ยังใช้งานไม่ได้)</h1></div>
<div style="width: 80%;transform: translateX(15%);">

    <section class="calendarSection">
 
        <div class="box">
            <div class="container">
                <div id="calendar">
    
                </div>
    
            </div>
        </div>
    
    </section>
    
    <script src="./calendar/calendar.js"></script>
        <script>
            dycalendar.draw({
                target:'#calendar',
                type:'month',
                dayformat:'full',
                monthformat:'full',
                highlighttargetdate:true,
                prevnextbutton:'show'
    
            })
        </script>
</div>


<!-- Footer -->

<section id="footer" class="footer aboutFooter">
    <div style="width: 80%;transform: translateX(15%);">
            <h4>ติดต่อเรา</h4>
            <p id="CONTACT">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore animi illo consequatur a laudantium necessitatibus esse veritatis ab adipisci reprehenderit incidunt architecto, ullam iusto amet! Cumque cupiditate earum iusto deserunt.
            </p>
        <div class="icons">
            <i class="fab fa-facebook"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-linkedin"></i>
        </div>
        <p>COPY RIGHT <i class="far fa-heart"></i> 2021</p>
    </div>
</section>


<!-- Javascript Menu Troggle -->
 <script>
    var navLinks = document.getElementById("navLinks")

    function showMenu() {
        navLinks.style.right = "0px";
    }
    function hideMenu() {
        navLinks.style.right = "-200px";
    }


    function validate(evt) {
        var theEvent = evt || window.event;

        // Handle paste
        if (theEvent.type === 'paste') {
            key = event.clipboardData.getData('text/plain');
        } else {
        // Handle key press
            var key = theEvent.keyCode || theEvent.which;
            key = String.fromCharCode(key);
        }
        var regex = /[0-9]|\./;
        if( !regex.test(key) ) {
            theEvent.returnValue = false;
            if(theEvent.preventDefault) theEvent.preventDefault();
        }
    }




    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  
    ga('create', 'UA-46156385-1', 'cssscript.com');
    ga('send', 'pageview');
  
</script>




</body>
</html>
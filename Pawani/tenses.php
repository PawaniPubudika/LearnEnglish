<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="css/tensespage_style.css" rel="stylesheet">
<!--    <meta name="viewport" content="width=device-width,user-scalable=no">-->

</head>
<!--<body onload="retrive_func()">-->
<?php
include('conn.php');
session_start();

$user1 = $_SESSION['user'];

$query=mysqli_query($conn,"select * from `loginform` where User='$user1' ");
if(mysqli_num_rows($query)==0){
    header('location: index.php');
}

?>


<header>
    <a href="speech.php" style=""> <img id="header_img" src="images/logo.png" alt=""></a>
    <a href="speech.php" style=""> <h1 id="headerh1">It's Time to Learn English</h1></a>
    <h1 id="logout" onclick="logout_func()">Log out</h1>
<!--    <h1 id="userdetails" onclick="userdetails()">user details</h1>-->

</header>

<!--main background-->
<main>

    <div id="topicdiv">
        <h1 id="topic">Tenses</h1>
    </div>

<!--    <img alt="" id="img" src="images/mainpic.png">-->
    <div id="maindiv">
        <img alt="" id="back2" src="images/back2.jpg">
        <ul id="mainlist">
            <a href="#selected_div1" style="text-decoration: none"><li id="li_past">1.Past Tense</li></a><br>
            <a href="#selected_div2" style="text-decoration: none"><li id="li_present">2.Present Tense</li></a><br>
            <a href="#selected_div3" style="text-decoration: none"><li id="li_future">3.Future Tense</li></a>
        </ul>
    </div>

</main>

<!--    other  contents-->
<section>
    <div id="selected_div1">
        <h1 class="selected_h1"><u>Past Tense</u></h1>
        <table style="width:100%">
            <tr>
                <th>Simple Past Tense</th>
                <th>Past Continuous Tense</th>
                <th>Past Perfect Tense</th>
                <th>Past Perfect Continuous Tense</th>
            </tr>
            <tr>
                <td>The action is simply mentioned and understood to have taken place in the past.</td>
                <td>The action was ongoing till a certain time in the past.</td>
                <td>It is used to express something that happened before another action in the past.</td>
                <td>It is used to express something that started in the past and continued until another time in the
                    past.
                </td>
            </tr>
            <tr class="selected_examples">

                <td><br>I went</td>
                <td><br>I was going</td>
                <td><br>I had gone</td>
                <td><br>I had been going</td>
            </tr>
        </table>
    </div>

    <div id="selected_div2">
        <h1 class="selected_h1"><u>Present Tense</u></h1>
        <table style="width:100%">
            <tr>
                <th>Simple Present Tense</th>
                <th>Present Continuous Tense</th>
                <th>Present Perfect Tense</th>
                <th>Present Perfect Continuous Tense</th>
            </tr>
            <tr>
                <td>The action is simply mentioned and there is nothing being said about its completeness.</td>
                <td>The action is ongoing/still going on and hence continuos</td>
                <td>The action is complete or has ended and hence terned perfect.</td>
                <td>The action has been taking place for some time and is still ongoing.</td>
            </tr>
            <tr class="selected_examples">
                <td><br>I go</td>
                <td><br>I am going</td>
                <td><br>I have gone</td>
                <td><br>I have been going</td>
            </tr>
        </table>
    </div>

    <div id="selected_div3">
        <h1 class="selected_h1"><u>Future Tense</u></h1>
        <table style="width:100%">
            <tr>
                <th>Simple Future Tense</th>
                <th>Future Continuous Tense</th>
                <th>Future Perfect Tense</th>
                <th>Future Perfect Continuous Tense</th>
            </tr>
            <tr>
                <td>Simple Future is used when we plan or make a decision to do something.
                    Nothing is said about the time in the future.
                </td>
                <td>The future continuos tense is ussed to express action at a particular moment in the future.</td>
                <td>Future Perfect expresses an action that will occur in the future before another action in the
                    future.
                </td>
                <td>It is used to talk about an on-going action before some point in the future.</td>
            </tr>
            <tr class="selected_examples">
                <td><br>I will go</td>
                <td><br>I will be going</td>
                <td><br>I will have gone</td>
                <td><br>I will have been going</td>
            </tr>
        </table>
    </div>
</section>
<div  id="background">
    <img class="img" src="images/Simple+Future+Tense+Illustration.png" alt="" style="display:block ">
    <img class="img" src="images/Simple+Past+Tense+Illustration.png" alt="" style="display:block ">
    <img class="img"src="images/Simple+Present+Repeated+Actions.png" alt="" style="display:block ">
</div>

<footer>
    <a href="tenses.php"><h3 id="footermain">Top</h3></a>
    <a href="mailto:pubudikalwp@gmail.com"><h3 id="footercontent" style="font-family: cursive">contact me:pubudikalwp@gmail.com</h3></a>
</footer>


<script src="js/script.js"></script>

</body>
</html>

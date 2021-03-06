<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quiz</title>
    <link rel="stylesheet" href="css/quizpage_style.css">
</head>

<?php
include('conn.php');
session_start();

$user1 = $_SESSION['user'];

$query=mysqli_query($conn,"select * from `loginform` where User='$user1' ");
if(mysqli_num_rows($query)==0){
    header('location: index.php');
}

?>

<!--<body onload="retrive_func()">-->
<header>
    <img src="images/logo.png" alt="">
    <a href="speech.php" style=""> <h1 id="headerh1">It's Time to Learn English</h1></a>
    <h1 id="logout" onclick="logout_func()">Log out</h1>
    <h1 id="userdetails" onclick="userdetails()">user details</h1>


</header>

    <div id="quiz_back">
        <img src="images/quiz_back.jpg" alt="">
        <h1 id="quiz_maintopic"><u>Ready For A Quiz?</u></h1>
        <ol id="quiz_list">
            <a href="#quiz1_div" style="text-decoration: none; color: white"><li>Eight Parts of Speech</li></a>
            <a href="#quiz2_div" style="text-decoration: none; color: white"><li>Tenses</li></a>
        </ol>
    </div>
    <div id="quiz1_div">
        <form id="quiz1form" name="quiz1form">
        <h1>10 Questions-Eight Parts of Speech</h1>
        <p class="que">1.I bought a <b>beautiful</b> dress at the mall.</p>
        <input type="radio"  name="que1" value="preposition">preposition<br>
        <input type="radio"  name="que1" value="adjective"><span id="nadj">adjective</span><br>
        <input type="radio"  name="que1" value="noun">noun<br>

            <p class="que">2.What did <b>she</b> ask you to do?</p>
        <input type="radio" name="que2" value="conjunction">conjunction<br>
        <input type="radio" name="que2" value="preposition">preposition<br>
        <input type="radio" name="que2" value="pronoun"><span id="npro">pronoun</span> <br>

            <p class="que">3.I left my shoes <b>under</b> the kitchen table.</p>
        <input type="radio" name="que3" value="adjective">adjective<br>
        <input type="radio" name="que3" value="preposition"><span id="npre">preposition</span> <br>
        <input type="radio" name="que3" value="pronoun">pronoun<br>


            <p class="que">4.If we finish our work <b>quickly</b> we can go to the movies.</p>
        <input type="radio" name="que4" value="adverb"><span id="nadv">adverb</span> <br>
        <input type="radio" name="que4" value="conjunction">conjunction<br>
        <input type="radio" name="que4" value="verb">verb<br>

            <p class="que">5.On Saturdays I <b>work</b> from nine to five.</p>
        <input type="radio" name="que5" value="verb"><span id="nverb">verb</span> <br>
        <input type="radio" name="que5" value="preposition">preposition<br>
        <input type="radio" name="que5" value="adverb">adverb<br>

            <p class="que">6.I want to go to a <b>university</b> in the United States.</p>
        <input type="radio" name="que6" value="adjective">adjective<br>
        <input type="radio" name="que6" value="preposition">preposition<br>
        <input type="radio" name="que6" value="noun"><span id="nnoun">noun</span><br>

            <p class="que">7.I'm sure I've <b>met</b> your girlfriend before.</p>
        <input type="radio" name="que7" value="verb"><span id="nver">verb</span><br>
        <input type="radio" name="que7" value="preposition">preposition<br>
        <input type="radio" name="que7" value="interjection">interjection<br>

        <p class="que">8.<b>Well,</b> I don't think I'll be home before.</p>
        <input type="radio" name="que8" value="interjection"><span id="ninter">interjection</span> <br>
        <input type="radio" name="que8" value="preposition">preposition<br>
        <input type="radio" name="que8" value="pronoun">pronoun<br>

            <p class="que">9.Andy knocked on the door <b>but</b> nobody answered.</p>
        <input type="radio" name="que9" value="adverb">adverb<br>
        <input type="radio" name="que9" value="adjective">adjective<br>
        <input type="radio" name="que9" value="conjunction"><span id="nconj">conjunction</span><br>

            <p class="que">10.<b>After</b> lunch let's go out for a coffee.</p>
        <input type="radio" name="que10" value="pronoun">pronoun<br>
        <input type="radio" name="que10" value="preposition"><span id="nprep">preposition</span><br>
        <input type="radio" name="que10" value="verb">verb<br><br><br>


        <div id="after_submit">
            <p id="result"></p>
        </div>
            <p id="msg"></p>
<!--            <img id="win_gif1">-->
            <input class="button" type="button" name="quiz1submit" value="Finished" onclick="check();">
            <input class="button" type="button" name="quiz1answers" value="View Answers" onclick="highlight();">

        </form>
    </div>
    <div id="quiz2_div">
        <form id="quiz2form" name="quiz2form">
            <h1>10 Questions-Tenses</h1>
            <p class="que">1.Abdul ___________ to be a doctor</p>
            <input type="radio"  name="que1" value="wants"><span id="t1">wants</span><br>
            <input type="radio"  name="que1" value="wanting">wanting<br>
            <input type="radio"  name="que1" value="is_wanting">is wanting<br>

            <p class="que">2.The Soup ________ good.</p>
            <input type="radio" name="que2" value="taste">taste<br>
            <input type="radio" name="que2" value="tastes"><span id="t2">tastes</span><br>
            <input type="radio" name="que2" value="is_tasting">is tasting<br>

            <p class="que">3.He ______ TV most evening.</p>
            <input type="radio" name="que3" value="watches"><span id="t3">watches </span><br>
            <input type="radio" name="que3" value="is_watch">is watch<br>
            <input type="radio" name="que3" value="is_watching">is watching<br>


            <p class="que">4.He _______ out five minutes ago.</p>
            <input type="radio" name="que4" value="has gone">has gone<br>
            <input type="radio" name="que4" value="had gone">had gone<br>
            <input type="radio" name="que4" value="went"><span id="t4">went</span><br>

            <p class="que">5.When he lived in Hyderabad, he _______ to the cinema once a week.</p>
            <input type="radio" name="que5" value="goes ">goes <br>
            <input type="radio" name="que5" value="went"><span id="t5">went</span><br>
            <input type="radio" name="que5" value="was_going">was going<br>

            <p class="que">6.The baby _______ all morning.</p>
            <input type="radio" name="que6" value="cries">cries<br>
            <input type="radio" name="que6" value="has_been_crying"><span id="t6">has been crying</span><br>

            <p class="que">7.I _______ Rahim at the zoo.</p>
            <input type="radio" name="que7" value="saw"><span id="t7">saw</span><br>
            <input type="radio" name="que7" value="have_seen">have seen<br>
            <input type="radio" name="que7" value="had_seen">had seen<br>

            <p class="que">8.I ______ Kumar this week.</p>
            <input type="radio" name="que8" value="haven't_seen"><span id="t8">haven't seen</span><br>
            <input type="radio" name="que8" value="didn't_see">did't see<br>
            <input type="radio" name="que8" value="am_not_seeing">am not seeing<br>

            <p class="que">9.This paper _____ twice weekly.</p>
            <input type="radio" name="que9" value="is_appearing">is appearing<br>
            <input type="radio" name="que9" value="appearing ">appearing<br>
            <input type="radio" name="que9" value="appears"><span id="t9">appears</span><br>


            <p class="que">10.Ashok fell off the ladder when he ________ the roof.</p>
            <input type="radio" name="que10" value="is_mending">is mending<br>
            <input type="radio" name="que10" value="was_mending"><span id="t10">was mending</span><br>
            <input type="radio" name="que10" value="mended">mended<br><br><br>

            <div id="after_tenses_submit">
                <p id="tenses_result"></p>
            </div>
                <p id="tenses_msg"></p>
<!--                <img id="win_gif2">-->


            <input class="button" type="button" name="quiz2submit" value="Finished" onclick="tenses_check();">
            <input class="button" type="button" name="quiz1answers" value="View Answers" onclick="tenses_highlight();">




        </form>
    </div>

<footer>
    <a href="quiz.php"><h3 id="footermain">Top</h3></a>
    <a href="mailto:pubudikalwp@gmail.com"><h3 id="footercontent" style="font-family: cursive">contact me :pubudikalwp@gmail.com</h3></a>
</footer>


<script src="js/quiz_script.js"></script>

</body>
</html>
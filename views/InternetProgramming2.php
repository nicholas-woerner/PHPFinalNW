<!DOCTYPE html>
<?php 
require_once '../models/session.php';
?>
<html>
<head>
    <title>Internet Programming 2</title>
    <link rel="stylesheet" type="text/css" href="../css/external.css">
</head>
<body>
    <header>
        <nav>
            <?php include 'navigation.php'; ?>
        </nav>
    </header>
    <main>
        <h1>Internet Programming 2</h1>
        <div class="code-block">
            <p>The focus of this class was JavaScript. The semester prior we had learned HTML and CSS, so we were well prepared.
                The class was 50% lecture/lab, with Andy being available for help during the lab. We were taught in great detail the in's and out's 
                of JavaScript throughout the semester, while occasionally submitting assignments and projects. This class, while being difficult,
                was my favorite class from my second semester of college. 
            </p>
        </div>
        <div class="button-container">
    <form action="scavenger.php" method="post">
        <button type="submit" name="item1" class="hidden-button">Click Me</button>
    </form>
</div> 

        <!--ss-->
        <div class="code-block">
            <center><img src="../Images/InternetProgrammingPicture.png" alt="Code Screenshot 1"></center>
           <center> <p>This is from assignment 5-1.</center> <br>
               We were given JavaScript code with a couple of errors. Our task was to find and fix the errors using the inspect element.
               After inspecting the code given, I noticed the first error was in "$("#join_list").addEventListener("click", () => {}".
               I noticed that "L" in "#join_List" should be lowercase. After fixing that, the first error went away and it was time to move on.
               I then discovered that the error message only had one "=", which would not cause it to check if the value is already an empty string before it makes one.
               Adding a second "=" fixed that error and allowed everything to work.  </p>
        </div>
    </main>
</body>
</html>
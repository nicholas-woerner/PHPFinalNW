<!DOCTYPE html>
<?php 
require_once '../models/session.php';
?>
<html>
<head>
    <title>C# Programming 2</title>
    <link rel="stylesheet" type="text/css" href="../css/external.css">
</head>
<body>
    <header>
        <nav>
            <?php include 'navigation.php'; ?>
        </nav>
    </header>
    <main>
       <center> <h1>C# Programming 2</h1><br> </center>
       <p> The focus of this course was digging deeper into C# on Microsoft Visual Studio. In the semester prior,
           we learned some basic C# in MVS. As we got deeper and deeper into the course, we learned a lot about creating different 
           forms and linking them to eachother, kind of like different web pages in a website. The project displayed below is my 
           final project for the semester. The project allows you to you insert your name and select a class for your character: 
           Warrior, Mage, or Rogue. After submitting your input, you are taken to another form were the character name and class are 
           kept along with any other inputs. On that form you can leave the application, add another character (which takes you to the first form),
           or remove a character.
        </p>
        
        <!--ss-->
        <div class="code-block">
            <img src="../Images/CSharpForm1.png" alt="Code Screenshot 1">
         <center><p>This is one of the two forms used in the project.</center><br>
                    This form allows you to input a name and select a class for your character.
                    The submit button will send the data to the second form. The exit button closes the 
                    application.
                </p>
        </div>
        
        <!--ss-->
        <div class="code-block">
            <img src="../Images/CSharpForm2.png" alt="Code Screenshot 2">
           <center> <p>This is the second form used in the project.</center><br>
                       This form shows you your inputted characters, along with allowing you to 
                       remove a character, exit the application, or add a new character.
                       Clicking "Add" will take you back to the first form. 
                    </p>
        </div>

        <!--ss-->
        <div class="code-block">
            <img src="../Images/CsharpCodeForForm.png" alt="Code screenshot 3">
            <center><p>This is code for the character creation form.<form action="" method="post"></form>.</center><br>
                       The code starts off by making sure the text is a string and the classname is empty.
                       After that, it checks which radio button is selected: Warrior, Mage, or Rogue. 
                       Then, a new instance of the character is created using the prior input. After that,
                       the code for the submit button is there. This will take all of the data submitted and send it
                       to the other form. 
                    </p>
           </div>

        <!--ss-->
        <div class="code-block">
            <img src="../Images/CSharpCharacter.png" alt="Code Screenshot 4">
            <center><p>This code defines a character class.</center><br>
                       This will take all of the information and create it into objects that represent characters.
                       The class's constructor takes the "name" and "class name" paramaters.
                       After this, it combines the character's name and class. It then returns it as a string in the listbox.
                    </p>
           </div>
    </main>
</body>
</html>
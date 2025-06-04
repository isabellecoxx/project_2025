
<?php 
    include("include/init.php");

    $posts = getPosts();
    $questions = getQuestions();

    if(isset($_REQUEST['userName']) && isset($_REQUEST['userQuestion'])){
        insertQuestion($_REQUEST['userName'], $_REQUEST['userQuestion']);

        // header() to control what page submit
        header("Location: index.php#moreQuestions");
        exit;
    }
    
?>

<!DOCTYPE html>

    <!-- Title and Stylesheet -->
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width">
        <title>Isabelle's Webpage</title>
        <link rel="stylesheet" href="mainPageStyle.css">
    </head>

    <!-- Headers, Paragraphs, Links -->
    <body style="background-color:pink;">

        <h1 class="titleText">
            Isabelle's Webpage
        </h1>

        <p></p>
        <p class="cuteFlower">°❀⋆.ೃ࿔*</p>

        <!-- Introduction Information -->
        <img src="flowers.jpg" alt="flowers" width="250" height="200" class="flowerImg">
        <span>
            <p class="introParagraph">Hello, this is my personal webpage!</p>
        </span>
        <span>
            <p class="introParagraph">I am a rising junior at Saint Louis University.</p>
        </span>
        <span>
            <p class="introParagraph">I've included some links with more information about me.</p>
        </span>
        <p></p>

        <?php foreach($posts as $post): ?>

            <h3 class="headerText">
                <div>
                    <?php echo $post['title']; ?>
                </div>
            </h3>

            <a href="<?php echo $post['href']; ?>" target="_self" class="titleAndLinks">
                Click here to view <?php echo strtolower($post['title']); ?>.
            </a>

            <p></p>
        
        <?php endforeach; ?>

        <br>
        <span>
            <p class="introParagraph">Got any questions for me?</p>
        </span>


        <div class="row">
            <form action="" method="POST" style="text-align: center;">
                Name:
                <input type="text" name = "userName"> 
                <br>
                <br>
            Question:
                <input type="text" name = "userQuestion"> 
                <br>
                <br>
                <input type="submit">
            </form>
        </div>
        <br>
        <br>
        <a href="display_questions.php" target="_self" class="titleAndLinks" id="moreQuestions">
                Click here to view previously asked questions.
        </a>




        <!-- Past Classes Information/Link -->
        <!--<h3 class="headerText">
            <div>Past Classes</div>
        </h3>
        <a href="classes.php" target="_blank" class="titleAndLinks">Click here to view past classes I've taken.</a>
        <p></p>-->

        <!-- Past Projects Information/Link -->
        <!--<h3 class="headerText">
            <div>Past Projects</div>
        </h3>
        <a href="projects.php" target="_blank" class="titleAndLinks">Click here to view past projects I've worked on.</a>
        <p></p>-->

        <!-- Personal Information/Link -->
        <!--<h3 class="headerText">
            <div>More Information</div>
        </h3>
        <a href="me.php" target="_blank" class="titleAndLinks">Click here to view more personal information about me.</a>

        <br>-->

        <div class="row">
            <a href="https://github.com/isabellecoxx" target="_blank">
                <img src="github.png" alt="git" width="50" height="50" class="socialImg">
            </a>
            <a href="https://www.linkedin.com/in/isabellegcox/" target="_blank">
                <img src="linkedin.png" alt="linkedin" width="90" height="90" class="socialImg">
            </a>
            <a href="https://www.instagram.com/iz0ble/" target="_blank">
                <img src="insta.png" alt="intsa" width="50" height="50" class="socialgImg">
            </a>
        </div>
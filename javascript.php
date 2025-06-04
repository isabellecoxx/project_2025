<html>

    <head>
        <!--blah-->
        <link rel="stylesheet" href="linkPageStyle.css">
    </head>

    <body>

        <h1>LACRM</h1>
        <script type = "text/javascript">
            for(let index =0; index < 3; index++){
                const colors = ['red', 'green', 'blue'];
                console.log("current color: " + colors[index]);
            }
            function ShowHiddenButton(){
                const element = document.getElementById("secretButton");
                console.log(element);
                element.classList.add('visibleJsButton');

            }
        </script>

        <p>JavaScript</p>
        <a onclick=ShowHiddenButton()>Click me</a>
        <p id = "secretButton" class = "hiddenJsButton">this is a javascrpit demo</p>

        <div></div>

    </body>
    
</html>
<html>
    <head>
        <title>Social Eyes</title>
        <style type="text/css">
            body{
                font-family: Georgia, 'Times New Roman', Times, serif;
                font-size: small;
                background-color: lightblue;
            }

            div#header{
                text-align: center;
                background-color: wheat;
                margin-bottom: 25px;
                padding: 10px;
                border-radius: 10px;
            }

            div#menu{
                margin-top: 0px;
                margin-right: 10px;
                margin-bottom: 10px;
                margin-left: 10px;
                width: 280px;
                float: right;
                background-color: wheat;
                border-radius: 10px;
            }

            div#main{
                margin-right: 330px;
                border-radius: 10px;
            }

            div.content{
                margin-top: 0px;
                margin-right: 10px;
                margin-bottom: 10px;
                margin-left: 10px;
                padding: 15px;
                background-color: wheat;
                border-radius: 10px;
            }
        
        </style>
    </head>
    <body>
        <div id="header">
            <h1>Social Eyes <img src="eyes.png"/></h1>
        </div>

        <div id="menu">
            <ul>
                <li><a href="index.php">Main Page</a> </li>
                <li><a href="submitpost.php">New Post</a> </li>
            </ul>
        </div>

        <div id="main">
            <div class="content">
                <h2>POST #1</h2>
                <p>This is the first post. Information will appear here later</p>
            </div>

            <div class="content">
                <h2>POST #2</h2>
                <p>This is the second post. Information will appear here later</p>
            </div>
        </div>

    </body>
</html>
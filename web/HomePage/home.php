<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Personal Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="style/medium.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="style/large.css" />
    <script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
    <script src="scipt/main.js"></script>
</head>

<body>
    <!--Header-->
    <header>
        <h1>
            Welcome to Freddy Kouakou's Personal Home Page
        </h1>
    </header>

    <!--Navigation bar-->
    <nav class="clearfix">
        <ul class="dropdownMenu">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="/team.html">Team Activity</a>
                <ul>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                </ul>
            </li>
            <li><a href="project.html">Project</a>
                <ul>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                </ul>
            </li>
            <li><a href="assignment.html">Prove Assignments</a>
                <ul>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                </ul>
            </li>
            <li><a href="group.html">Group Work</a>
                <ul>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                </ul>
            </li>
        </ul>
    </nav>
        <!--Display something-->
        <?php 
        echo "Submit";
        echo "<h1>Thanks for doing something</h1>";
        echo date('h:i:s a l F jS y e');
        ?>
        
    </body>
    </html>
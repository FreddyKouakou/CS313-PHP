<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Personal Home Page</title>
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
        <ul  class="dropdownMenu">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="/team.html">Team Activity</a></li>
            <li><a href="project.html">Project</a>
                <ul>
                    <li>Jam</li>
                    <li>Pie</li>
                    <li>Cider</li>
                </ul>
            </li>
            <li><a href="assignment.html">Prove Assignments</a></li>
            <li><a href="group.html">Group Work</a></li>
        </ul>
    </nav>
    
        <!--Display something-->
        <?php 
        echo "<h1>Thank for doing something</h1>";
        ?>
    </body>
    </html>
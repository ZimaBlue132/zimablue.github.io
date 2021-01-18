<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="utf-8">
        <title>Welcome Back</title>
    </head>
    <body>

        <header>
        <ul>
            <img src="logo.png" alt="logo" height="41px" width="41px">

            <a id="phpmyadmin" href="/phpmyadmin">phpMyAdmin</a>

            <div class="dropdown">
            <button class="dropbtn">My Projects</button>
                <div class="dropdown-content">

            <?php
                $handle=opendir(".");
                $count=0;
                while ($file = readdir($handle)) 
                {
                    if ($file=="." || $file=="..") continue;
                    if (is_dir($file))
                    {		
                        $count++;
                        echo "<a class='afolder' href='/$file'>$file</a>";
                    }
                }
                closedir($handle);
                if ($count==0)
                {
                    echo "<a class='afolder' href='#'>No project found</a>";
                }
            ?>
                </div>
            </div>
        </ul>
        </header>

        <div id="projects">
                <ul>
                    <li><a href="https://www.youtube.com/user/TheMorpheus407"><img src="newthemorpheus.jpg" alt="Project"></a></li>
                    <li><a href="https://www.youtube.com/playlist?list=PLNmsVeXQZj7rZMP1lj32Qyp4bkarvzCGm"><img src="php.jpg" alt="Project"></a></li>
                    <li><a href="https://www.youtube.com/playlist?list=PLNmsVeXQZj7qIbKPeroqn3-BkUTWzYBT4"><img src="html.jpg" alt="Project"></a></li>
                    <li><a href="https://www.youtube.com/playlist?list=PLNmsVeXQZj7qQz698kYRkkBXJDeXJY_I7"><img src="css.png" alt="Project"></a></li>
                    <li><a href="https://www.youtube.com/playlist?list=PLNmsVeXQZj7qOfMI2ZNk-LXUAiXKrwDIi"><img src="javascript.png" alt="Project"></a></li>
                </ul>
            </div><hr>      
    <div id="xampp">
        <div class="text">
        <h2>Was ist XAMPP?</h2>
        <h3>XAMPP ist die beliebteste PHP-Entwicklungsumgebung</h3>
        <p>XAMPP ist eine vollständig kostenlose, leicht zu installierende <br>Apache-Distribution, die MariaDB, PHP und Perl enthält.<br> Das XAMPP Open-Source-Paket wurde für eine extrem einfache <br>Installation und Nutzung eingerichtet.</p>
        <a id="links" href="https://www.apachefriends.org/de/index.html">Homepage von XAMPP</a>
        </div>

        <div class="video">
            <iframe class="video" width="480" height="270" src="//www.youtube.com/embed/h6DEDm7C37A?rel=0&amp;showinfo=0&amp;color=white&amp;controls=2&amp;autohide=1" frameborder="0" allowfullscreen=""></iframe>
        </div>
    </div><hr>
    
    </body>
</html>


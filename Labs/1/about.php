<!DOCTYPE html>
<html>
<!--

First Website
and comment
in html
(comments can span multiple lines)

-->

<!-- This is the head -->
<!-- All styles and javascript go inside the head -->
    <head>
        <meta charset="uft-8" />
        <title>John Economides: Portfolio Website</title>
        <style>
            @import url("css/styles.css");
        </style> 
        <link href="https://fonts.googleapis.com/css?family=Rammetto+One" rel="stylesheet"> 
    </head>
<!-- closing head -->
    
    <!-- This is the body -->
    <!-- This is where we place the content of our website -->
    <body>
        <header>
            <h1> John Economides </h1>
        </header>
        <nav>
            <hr width="50%" />
            <a href="index.php">Home<a/>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
        </nav>
        
        <br /><br />
        <div id ="content">
            <!-- Create table to hold experince data -->
            <table>
                <tr id="table-header">
                    <td><strong>Programming Language</strong></td>
                    <td><strong>Years Experience</strong></td>
                </tr>
                <tr class="table-row">
                    <td>Java</td>
                    <td>2</td>
                </tr>
                <tr class="table-row">
                    <td>C++</td>
                    <td>1</td>
                </tr>
                <tr class="table-row">
                    <td>Python</td>
                    <td>1</td>
                </tr>
            </table>
        </div>
        <div>
        <ul>
            <li><span class ="hobby">Video Games</span>: I'm not much into current games but I can kill it on Street Fighter II.</li>
            <li><span class ="hobby">Skateboarding</span>: I've been skating for 20+ years, and I still skate today (just not a hard).</li>
            <li><span class ="hobby">Music</span>: I was a vinyl DJ in my 20's, and enjoy using a music program called Logic to create music.</li>
            <li><span class ="hobby">Programming</span>: I'd say I'm an average programmer, but I'm always willing to improve</li>
        </ul>
        </div>
        <!-- This is the footer -->
        <!-- The footer goes inside the body but not always -->
        <footer>
            <hr>
            <figure id="csumb">
                <img src="img\csumb.jpg" alt="Picture of John Economides" />
            </figure>
            CST 336 Internet Programming. 2018&copy: Economides <br />
            <strong>Disclaimer:</strong>The information on this website is fictitous.  <br />
            it is used for acadimc purposes only.
        </footer>
        <!-- closing footer -->
        
    </body>
    <!-- closing body -->

</html>
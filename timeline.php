<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Profile | fakebuk</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!-- Top Bar -->
        <div id="top_bar">
            <div style="width: 800px;margin: auto; font-size: 30px;">
            fakebuk &nbsp;<input type="text" id="search_box" placeholder="Search">
            <img src="img/Naomi.jpg" alt="Selfi of Naomi" style="height: 50px; float: right;">
            </div>
        </div>
       

        <div id="user_area" style="display: flex;">
        <!--Profile Area-->
            <div style="flex: 1;">
                <div id="profile_bar">
                    <img id="profile_pic_tl" src="img/Naomi.jpg"><br>
                    Naomi Hightower
                </div>
            </div> 


            <!--Timeline Area-->
            <div id="timeline" style="flex: 2.5; padding: 20px; padding-right: 0px;">
                <div style="border: solid thin #aaa; padding: 10px; background-color: whitesmoke;">
                    <textarea id="textarea1" placeholder="What's on your mind?"></textarea>
                    <input id="post_button" type="submit" value="Post">
                    <br>
                </div>
                
                <div id="posts_bar">
                    <div id="post">
                        <div>
                            <img src="img/Naomi.jpg" style="width: 75px; margin-right: 4px;">
                        </div>
                        <div>
                            <div style="font-weight: bold; color: #405d9b;">Naomi</div>
                            This is some text and it's really interesting stuff. blah blah blahblah blah blahblah blah blahblah blah blahblah blah blahblah blah blahblah blah blahblah blah blahblah blah blahblah blah blahblah blah blahblah blah blah
                            <br><br>
                            <a href="">Like</a> . <a href="">Comment</a> . <span style="color:gray;">April 4th 2024</span>
                        </div>
                    </div>
                    <div id="post">
                        <div>
                            <img src="img/Duncan.jpg" style="width: 75px; margin-right: 4px;">
                        </div>
                        <div>
                            <div style="font-weight: bold; color: #405d9b;">Duncan</div>
                            This is some text and it's really interesting stuff. blah blah blahblah blah blahblah blah blahblah blah blahblah blah blahblah blah blahblah blah blahblah blah blahblah blah blahblah blah blahblah blah blahblah blah blah
                            <br><br>
                            <a href="">Like</a> . <a href="">Comment</a> . <span style="color:gray;">April 4th 2024</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="" async defer></script>
    </body>
</html>
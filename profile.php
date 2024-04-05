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
       
        <!--Top Content-->
        <div id="content_area">
            <div id="cover_image">
                <img src="img/city.jpg" style="width: 100%;">
                <img id="profile_pic" src="img/Naomi.jpg">
                <br>
            <div>
                Naomi Hightower
            </div>
                <div id="menu_button">Timeline</div>
                <div id="menu_button">About</div>
                <div id="menu_button">Friends</div>
                <div id="menu_button">Photos</div>
                <div id="menu_button">Settings</div>
            </div>
        </div>
        <div id="user_area" style="display: flex;">
        <!--Friends Area-->
            <div style="flex: 1;">

                <div id="friends_bar">
                    Friends <br>
                    <div id="friends">
                        <img id="friends_img"  src="img/Andrea.jpg" alt="portrait of Andrea">
                        <br>
                        Andrea Marks
                    </div>
                    <div id="friends">
                        <img id="friends_img"  src="img/Brandy.jpg" alt="portrait of Brandy">
                        <br>
                        Brandy Greer
                    </div>
                    <div id="friends">
                        <img id="friends_img"  src="img/Duncan.jpg" alt="portrait of Duncan">
                        <br>
                        Duncan Rogers
                    </div>
                    <div id="friends">
                        <img id="friends_img"  src="img/Mathew.jpg" alt="portrait of Mathew">
                        <br>
                        Mathew Smith
                    </div>
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
        </div>

        <script src="" async defer></script>
    </body>
</html>
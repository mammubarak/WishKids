<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="icon" href="4.png" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/profilePage.css')}}" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

    <div class="container">

        <!----------------option menu------------------------------------->
        <div class="options-menu">
            <div class="options-center">
                <div class="logo">
                   <a href="#"><img src="4.png"></img></a>
                </div>
                <div class="option">
                    <div><a href="#prefer"><i class="fa fa-home"></i></a></div>
                    <div><a href=""><i class="fa fa-hashtag"></i></a></div>
                    <div><a href=""><i class="fa fa-bell"></i></a></div>
                    <div><a href=""><i class="fa fa-envelope-o"></i></a></div>
                    <div><a href="profile.html"><i class="fa fa-user-o"></i></a></div>
                    <div><button>Post</button></div>
                </div>
            </div>
        </div>
        <!----------------end option menu------------------------------------->

        <!----------------Content menu---------------------------------------->
        <div class="content-menu">
            <div class="prefer" id="prefer">
                <span>
                    <a href="#prefer">Home</a>
                </span>
                <span>
                    <i class="fa fa-star-o"></i>
                </span>
            </div>
            <div class="you-tweet-other-tweet" id="tweet">
            <form action="" method="post" enctype="multipart/form-data"><div class="your-tweet">
                    <div class="profile-message">
                        <span><img src="profile.jpg" alt="profile"></span>
                        <span><input type="text" name="description" placeholder="What's on your mind"></span>
                    </div>
                    <div class="add-extra">
                        <div class="images-more">
                            <span><a href="#"><i class="fa fa-picture-o"></i><input type="file" name="post_pic" class="uploadFile" accept="image/*"></a></span>
                            <span><a href="#"><i class="fa fa-bars"></i><input type="file" name="post_file" class="uploadFile"></span>
                        </div>
                        <span><button type="submit">Post</button></span>
                    </div></form>
                </div>
                <!------------------------other tweet----------------------------------->
                    <!------------------------each person------------------------------------->
                <div class="others-tweet">
                    <div class="profile-msg">
                        <div class="others-profile">
                            <img src="Community2.png" alt="community2">
                        </div>
                        <div class="name-msg">
                            <span>The Earth<b><i class="fa fa-check-circle-o"><b>@theerth .</b>  <small>Yesterday</small></i></b></span>
                            <div class="msg">
                                <p>Lorem ipsum dolor sit.</p>
                            </div>
                        </div>
                        <div class="more-option">
                            <i class="fa fa-ellipsis-h"></i>
                        </div>
                    </div>
                    <div class="image-video">
                        <img src="community3.jpg" alt="community3">
                    </div>
                    <div class="your-reaction">
                        <div class="like"><i class="fa fa-heart-o"></i><p>12</p></div>
                        <div class="comment"><i class="fa fa-comment-o"></i><p>12</p></div>
                        <div class="share"><i class="fa fa-share"></i><p>12</p></div>
                    </div>
                </div>
                    <!------------------------end of each person---------------------------------------->
                    <!------------------------each person------------------------------------->
                <div class="others-tweet">
                    <div class="profile-msg">
                        <div class="others-profile">
                            <img src="community4.jpg" alt="community4">
                        </div>
                        <div class="name-msg">
                            <span>The Earth<b><i class="fa fa-check-circle-o">@theerth.<small>Yesterday</small></i></b></span>
                            <div class="msg">
                                <p>Lorem ipsum dolor sit.</p>
                            </div>
                        </div>
                        <div class="more-option">
                            <i class="fa fa-ellipsis-h"></i>
                        </div>
                    </div>
                    <div class="image-video">
                        <img src="community5.jpg" alt="community5">
                    </div>
                    <div class="your-reaction">
                        <div class="like"><i class="fa fa-heart-o"></i><p>12</p></div>
                        <div class="comment"><i class="fa fa-comment-o"></i><p>12</p></div>
                        <div class="share"><i class="fa fa-share"></i><p>12</p></div>
                    </div>
                </div>
                    <!------------------------end of each person---------------------------------------->
                    <!------------------------each person------------------------------------->
                <div class="others-tweet">
                    <div class="profile-msg">
                        <div class="others-profile">
                            <img src="Community1.jpg" alt="community1">
                        </div>
                        <div class="name-msg">
                            <span>The Earth<b><i class="fa fa-check-circle-o">@theerth.<small>Yesterday</small></i></b></span>
                            <div class="msg">
                                <p>Lorem ipsum dolor sit. </p>
                            </div>
                        </div>
                        <div class="more-option">
                            <i class="fa fa-ellipsis-h"></i>
                        </div>
                    </div>
                    <div class="image-video">
                        <img src="community3.jpg" alt="community3">
                    </div>
                    <div class="your-reaction">
                        <div class="like"><i class="fa fa-heart-o"></i><p>12</p></div>
                        <div class="comment"><i class="fa fa-comment-o"></i><p>12</p></div>
                        <div class="share"><i class="fa fa-share"></i><p>12</p></div>
                    </div>
                </div>
                    <!------------------------end of each person---------------------------------------->
                    <!--------------------------end of other tweet---------------------------------------->
            </div>
        </div>
        <!---------------end content menu------------------------------------->

        <!--------------------------Trending menu--------------------------------------->
        <div class="trending-menu">
            <div class="trending-center">
                <div class="search">
                    <input type="search" placeholder="Search post">
                    <span><i class="fa fa-search"></i></span>
                </div>
                <div class="trending">
                    <div class="header">
                        <p>What's happening</p>
                    </div>
                    <div class="trends">
                        <!------------------each trend------------------------->
                        <div class="trend">
                            <div class="trend-msg">
                                <div class="trend-name">
                                    <p>Environment Day</p>
                                </div>
                                <div class="subject">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                </div>
                                <div class="trend-with">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi, earum?</p>
                                </div>
                            </div>
                            <div class="trend-picture">
                                <img src="freepic.jpg" alt="environment">
                            </div>
                        </div>
                        <!--------------------end each trend-------------------------->
                        <!------------------each trend------------------------->
                        <div class="trend">
                            <div class="trend-msg">
                                <div class="trend-name">
                                    <p>Water day</p>
                                </div>
                                <div class="subject">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                </div>
                                <div class="trend-with">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi, earum?</p>
                                </div>
                            </div>
                            <div class="trend-picture">
                                <img src="freepic.jpg" alt="environment">
                            </div>
                        </div>
                        <!--------------------end each trend-------------------------->
                        <!------------------each trend------------------------->
                        <div class="trend">
                            <div class="trend-msg">
                                <div class="trend-name">
                                    <p>environment Day</p>
                                </div>
                                <div class="subject">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                </div>
                                <div class="trend-with">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi, earum?</p>
                                </div>
                            </div>
                            <div class="trend-picture">
                                <img src="freepic.jpg" alt="environment">
                            </div>
                        </div>
                        <!--------------------end each trend-------------------------->
                       <div class="show-more">
                            <a href="#">Show More</a>
                        </div>
                    </div>
                </div>
                <!-----------------------------Follow----------------->
                <div class="follow">
                    <div class="header">
                        <p>Who to follow</p>
                    </div>
                    <div class="persons">
                        <!-----------------Each person---------------->
                        <div class="person">
                            <div class="person-profile">
                                <img src="profile.jpg" alt="">
                            </div>
                            <div class="name">
                                <div class="main-name">
                                    <h3>Anne</h3>
                                </div>
                                <div class="username">
                                    <p>@anne</p>
                                </div>
                            </div>
                            <div class="send-follow-request">
                                <button>Follow</button>
                            </div>
                        </div>
                        <!----------End each person------------------>
                        <!-----------------Each person---------------->
                        <div class="person">
                            <div class="person-profile">
                                <img src="profile.jpg" alt="">
                            </div>
                            <div class="name">
                                <div class="main-name">
                                    <h3>Smith</h3>
                                </div>
                                <div class="username">
                                    <p>@smith</p>
                                </div>
                            </div>
                            <div class="send-follow-request">
                                <button>Follow</button>
                            </div>
                        </div>
                        <!----------End each person------------------>
                        <!-----------------Each person---------------->
                        <div class="person">
                            <div class="person-profile">
                                <img src="profile.jpg" alt="">
                            </div>
                            <div class="name">
                                <div class="main-name">
                                    <h3>John</h3>
                                </div>
                                <div class="username">
                                    <p>@john</p>
                                </div>
                            </div>
                            <div class="send-follow-request">
                                <button>Follow</button>
                            </div>
                        </div>
                        <!----------End each person------------------>

                    </div>
                    <div class="show-more">
                        <a href="#">Show More</a>
                    </div>
                </div>
                <!-----------------------------end Follow----------------->
            </div>
        </div>
        <!---------End of trending---------------------->
    </div>





</body>
</html>

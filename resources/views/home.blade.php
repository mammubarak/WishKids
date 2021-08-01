<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
            crossorigin="anonymous"
        />-->

        <!--Boxicon css-->

        <link
            href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
            rel="stylesheet"
        />


        <link rel="stylesheet" href="{{asset('css/welcome.css')}}" />



        <title>WishKids</title>
        <!-- add icon link -->

        <link rel="icon" href="css/images/welcome/4.png" type="image/icon type" />
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $(".menu-toggle").click(function () {
                    $(".menu-toggle").toggleClass("active");
                    $("nav").toggleClass("active");
                });
            });
        </script>
        <script type="text/javascript" src="cover.js"></script>
    </head>
    <body>

        <section class="showcase" id="">
            <header>
                <div class="logo">
                    <a href="index.html"
                        ><img
                            src="css/images/welcome/4.png"
                            alt="logo"
                            height="70px"
                            class="shadowfilter logoc"
                    /></a>
                </div>

                <div class="menu-toggle shadowfilter">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <nav>
                    <ul>
                        <li><a href="#" class="shadowfilter">Home</a></li>
                        <li><a href="#" class="shadowfilter">Video</a></li>
                        <li><a href="#" class="shadowfilter">About</a></li>
                        <li><a href="#" class="shadowfilter">logout</a></li>
                        <!-- <li><a href="{{route('profilepage')}}" class="shadowfilter">Myprofile</a></li> -->
                        <li>
                                <a id="navbarDropdown"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div  aria-labelledby="navbarDropdown">
                                    <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                        @csrf
                                    </form>
                                </div>
                            </li>
                    </ul>
                </nav>
            </header>


            <video  src="css/videos/welcome/intro.mp4" autoplay loop muted class="parallax"></video>

            <div class="text">
                <h2>WishKids</h2>
                <br />
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Pariatur quas a tenetur nobis maiores nam laudantium culpa
                    doloremque architecto assumenda eveniet fuga, nisi magni
                    omnis hic earum modi, harum doloribus esse. Dolor dicta
                    voluptatem saepe nostrum facilis possimus, omnis perferendis
                    amet, eum maxime in officia doloremque illo harum mollitia
                    eveniet!
            </p>




                <a href="#footer" class="a3 shadowfilter loginbtn">Contact Us</a>

            </div>
        </div>

            <ul class="social">
                <li>
                    <a
                        href="https://www.facebook.com/WishKids-106150198355636"
                        target="_blank"
                        ><img
                            src="facebook .png"
                            class="shadowfilter"
                            alt="facebook"
                    /></a>
                </li>
                <li>
                    <a
                        href="https://www.instagram.com/mr.mubarak_one/"
                        target="_blank"
                        ><img
                            src="instagram.png"
                            class="shadowfilter"
                            alt="instagram"
                    /></a>
                </li>
            </ul>

        </section>
       <section class="formsec">

                 <!--==============================form start=================================================-->
                 <div class="full-page" id="full-page">

                    <div id="login-form" class="login-page">
                        <div class="form-box">
                            <div class="button-box">
                                <div id="btn"></div>

                                <button type="button" onclick="login()" class="toggle-btn shadowfilter ">Register</button>
                                 <button type="button" onclick="register()" class="toggle-btn  shadowfilter">Log In</button>
                            </div>
                            <div class="log"><form id="login" class=" input-group-register">

                                <input type="text" class="input-field" placeholder="First Name" required>
                                <input type="text" class="input-field" placeholder="Last Name" required>
                                <input type="email" class="input-field" placeholder="Email Id" required>
                                <input type="password" class="input-field" placeholder="Enter Password" required>
                                <input type="password" class="input-field" placeholder="Confirm Password" required>
                                <input type="checkbox" class="check-box"><span>I agree to the terms and conditions</span>
                                <button type="submit" class="submit-btn shadowfilter">Register</button>

                            </form></div>

                            <div class="reg"><form id="register" class="input-group-login">
                                <input type="text" class="input-field" placeholder="Email Id" required>
                                <input type="password" class="input-field" placeholder="Enter Password" required>
                                <input type="checkbox" class="check-box"><span>Remember Password</span>
                                <button type="submit" class="submit-btn shadowfilter">Log In</button>
                            </form></div>
                        </div>
                    </div>
                </div>
                <script>
                     var x=document.getElementById('login');
                    var y=document.getElementById('register');
                    var z=document.getElementById('btn');
                    function register(){
                        x.style.left='-400px';
                        y.style.left='50px';
                        z.style.left='110px';
                    }
                    function login(){
                        x.style.left='50px';
                        y.style.left='450px';
                        z.style.left='0px';
                    }
                </script>
                <script>
                    var modal = document.getElementById('login-form');
                    window.onclick = function(event){
                        if(event.target == modal){
                            modal.style.display = "none";
                        }
                    }
                </script>

                 <!--==============================form end===================================================-->
       </section>
       <div class="footer" id="footer">

        <div class="foot-container">
            <div class="sec aboutus">
                <h2>
                    About us
                </h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem corrupti temporibus repellendus amet ipsa harum nobis sit hic, fugiat vero. Magnam accusamus iure ducimus repudiandae est ad autem cumque! Facilis consequatur excepturi nobis id,  </p>
                <ul class="sci">
                    <li><a href="#" class="shadowfilter"><i class='bx bxl-facebook'></i></a></li>
                    <li><a href="#" class="shadowfilter"><i class='bx bxl-twitter'></i></a></li>
                    <li><a href="#" class="shadowfilter"><i class='bx bxl-instagram'></i></a></li>
                    <li><a href="#" class="shadowfilter"><i class='bx bxl-youtube'></i></a></li>

                </ul>
            </div>
            <div class="sec quickLinks">
                <h2>
                    Quick Links
                </h2>
                <ul>
                    <li><a href="#" class="shadowfilter">About</a></li>
                    <li><a href="#" class="shadowfilter">FAQ</a></li>
                    <li><a href="#" class="shadowfilter">Privacy Policy</a></li>
                    <li><a href="#" class="shadowfilter">Help</a></li>
                    <li><a href="#" class="shadowfilter">Terms & Conditions</a></li>
                    <li><a href="#" class="shadowfilter">Contact</a></li>

                </ul>

            </div>
            <div class="sec contact">
                <h2>Contact Info</h2>
                <ul class="info">
                    <li>
                        <span><i class='bx bx-map' ></i></span>
                        <span>NSBM Green University <br>Pitipana - Thalagala Rd, Homagama<br>Sri Lanka <br><img class="srilanka" src="srilanka.gif"/></span>

                    </li>
                    <li>
                        <span><i class='bx bx-phone'></i></span>
                        <p><a href="tel:+123456789" class="shadowfilter">+94 123 456 789</a><br><a href="tel:+123456789" class="shadowfilter">+94 123 456 789</a></p>

                    </li>
                    <li>
                        <span><i class='bx bx-envelope'></i></span>
                        <p><a href="mailto:wishkids.org@gmai.com " class="shadowfilter">wishkids.org@gmail.com</a></p>


                    </li>
                </ul>



            </div>

           <!-- <div id="top"><a href="#showcase">Home</a></div>-->
        </div>


    <div class="copyrightText">
        <p>Copyright© 2021 by EcoWish®.<br> All Rights Reserved.</p>
    </div>


        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <!--<script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous"
        ></script>-->

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
        <script type="text/javascript" src="cover.js"></script>
    </body>
</html>

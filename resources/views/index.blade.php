
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/baffle@0.3.6/dist/baffle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet"type="text/css" href="css/main.css">
  <link rel="stylesheet" href="https://use.typekit.net/zki7ypa.css">
  
  <title>Mission SP-247</title>
</head>
<body>
    <section class="hero bg">
      <nav class="navbar navbar-expand-xl">
        <div class="container-fluid mx-lg-4">
            <a class="navbar-brand ms-3" href="#">
                <img src="images/Jaxa_logo.png" alt="jaxa logo" class="pe-3 align-middle img-fluid">
                <img src="images/SP-247_logo.png" alt="sp-247 logo" class="ps-3 align-middle img-fluid">
            </a>
            <div class="navbar-nav ms-auto d-flex flex-row">
                <a class="nav-link me-3" href="#about">Mission</a>
                <a class="nav-link me-3" href="#missionlog">Timeline</a>
                <a class="nav-link" href="#emblem">Emblem</a>
                @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('products.index')}}">Admin</a>
                            </li>
                        @endauth
                    </ul>
    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
              </div>
      
        </div>
    </nav>
    <div class="hero_slogan text-center mt-5 shining-text">
      <p class="BigTxT">Saturn</p>
  </div>
  <div class="hero_content container d-flex mt-5 ">
      <div class="container col-lg-4 ">
          <div class="row d-flex justify-content-between ">
              <div class="col-lg-3 col-xs-3">
                  <h2 class="show js-count" data-target="9">0</h2>
                  <h5 class="hidden">years</h5>
              </div>
              <div class="col-lg-3 col-xs-3">
                  <h2 class="show js-count" data-target="1.2">0</h2>
                  <h5 class="hidden">billion kms</h5>
              </div>
              <div class="col-lg-3 col-xs-3">
                  <h2 class="show js-count" data-target="1">0</h2>
                  <h5 class="hidden">spacecraft</h5>
              </div>
              <div class="col-lg-3 col-xs-3">
                  <h2 class="show js-count" data-target="3.2">0</h2>
                  <h5 class="hidden">billion dollars</h5>
              </div>
          </div>
      </div>
      <div class="hero_content_right contain col-lg-6  text-center">
          <h3 class="data shooting-star-text">Mission SP-247</h3>
      </div>
  </div>
  <div class="hero_footer text-center hero_top_buffer">
      <h2 class="mt-5 reveal fade-bottom">2035</h2>
  </div>
    </section>

    <section id="about" class="about ">
      <div class="about_title text-center about_top_buffer ">
          <h1>about mission</h1>
      </div>
      <div class="about_content container d-flex justify-content-between about_top_buffer reveal fade-bottom ">
          <div class="container p-2 ">
              <div class="row text-center">
                  <div class="col-lg-4 col-xs-8">
                      <h1>01</h1>
                      <h5 class="mt-5">Objective</h5>
                      <p class="mt-3">The primary objective of Mission SP-247 is to collect the planet's data and put an end to the age old question ,,Is it made out of just gas?".. The mission is carried out by Japan's space organisation JAXA.
                      </p>
                  </div>
                  <div class="col-lg-4 col-xs-8">
                      <h1>02</h1>
                      <h5 class="mt-5">Description</h5>
                      <p class="mt-3">Mission SP-247 is an ambitious endeavor to send a spacecraft to Saturn. It is a multiyear mission, spacecraft will stay in Saturn's atmosphere for atleast 4 earth years. 
                      </p>
                  </div>
                  <div class="col-lg-4 col-xs-8">
                      <h1>03</h1>
                      <h5 class="mt-5">Transmission</h5>
                      <p class="mt-3">The spacecraft will be equipped with a powerful communication system to relay data back to Earth. It establishes a direct link with Earth-based antennas and transmits scientific findings back to us.
                  </div>
              </div>
          </div>
      </div>
  </section>
    <section id="missionlog" class="missionlog"> <!-- fix background image-->
        <div class="mission launch  " id="launch">
            
            <div class="mission_year reveal left-right me-3 "><h4>2035</h4></div>
            <div class="container mx-auto about_top_buffer d-flex justify-content-between ">
                <div class="mission_left reveal fade-left">
                    
                    <div class="mission_title">
                        
                        <p class="MissionTitle">launch</p>
                    </div>
                    <div class="mission_content">
                        <p>The rocket launch for mission SP-247 is a critical and exhilarating event that signifies the beginning of an extraordinary voyage to explore the mysteries of Saturn. It represents the culmination of years of planning, and scientific expertise of JAXA.
                        </p>
                    </div>
                    <div class="mission_footer mt-5">
                        <a href="views/detail/launch_detail.html">Learn more</a>
                    </div>
                  </div>  
                <div class="mission_right align-self-start">
                    <p class="MissionNumber">01</p>
                </div>  
            </div>
        </div>    
        <div class="mission mars ">
            <div class="mission_year reveal left-right me-3 "><h4>2036</h4></div>
            <div class="container mx-auto about_top_buffer d-flex justify-content-between">
                <div class="mission_left reveal fade-left">
                    <div class="mission_title">
                        <p class="MissionTitle">mars</p>
                    </div>
                    <div class="mission_content">
                        <p>As part of mission SP-247, the project plan is modified to include a flyby of Mars before proceeding. While Mars may not be the primary focus of the mission, the red planet represents invaluable scientific and navigational opportunities.
                        </p>
                    </div>
                    <div class="mission_footer mt-5">
                        <a href="views/detail/mars_detail.html">Learn more</a>
                    </div>
                  </div>  
                <div class="mission_right align-self-start">
                    <p class="MissionNumber">02</p>
                </div>  
            </div>
        </div>   
        <div class="mission jupiter ">
            <div class="mission_year reveal left-right me-3 "><h4>2037</h4></div>
            <div class="container mx-auto about_top_buffer d-flex justify-content-between">
                <div class="mission_left reveal fade-left">
                    <div class="mission_title">
                        <p class="MissionTitle">jupiter</p>
                    </div>
                    <div class="mission_content">
                        <p>The next planet we encounter on the way to Saturn is Jupiter. The primary purpose of the Jupiter flyby is to utilize the planet's immense gravitational pull for a gravity assist maneuvur. During the flyby, we'll gather valuable data about Jupiter aswell. 
                        </p>
                    </div>
                    <div class="mission_footer mt-5">
                        <a href="views/detail/jupiter_detail.html">Learn more</a>
                    </div>
                  </div>  
                <div class="mission_right align-self-start">
                    <p class="MissionNumber">03</p>
                </div>  
            </div>
        </div>
        <div class="mission saturn ">
            <div class="mission_year reveal left-right me-3 "><h4>2039</h4></div>
            <div class="container mx-auto about_top_buffer d-flex justify-content-between">
                <div class="mission_left reveal fade-left">
                    <div class="mission_title">
                        <p class="MissionTitle">saturn</p>
                    </div>
                    <div class="mission_content">
                        <p>After the successful flyby of Jupiter, the spacecraft of mission SP-247, enters a remarkable phase of its mission - a four-year exploration in Saturn's atmosphere. This extended stay in Saturn's vicinity allows for in-depth scientific observations and comprehensive data collection. 
                        </p>
                    </div>
                    <div class="mission_footer mt-5">
                        <a href="views/detail/saturn_detail.html">Learn more</a>
                    </div>
                  </div>  
                <div class="mission_right align-self-start">
                    <p class="MissionNumber">04</p>
                </div>  
            </div>
        </div>
        <div class="mission return ">
            <div class="mission_year reveal left-right me-3 "><h4>2043</h4></div>
            <div class="container mx-auto about_top_buffer d-flex justify-content-between ">
                <div class="mission_left reveal fade-left">
                    <div class="mission_title">
                        <p class="MissionTitle">return</p>
                    </div>
                    <div class="mission_content">
                        <p >After spending four years in Saturn's atmosphere, the spacecraft completes its scientific exploration and begins its return journey back to Earth as part of the final phase of mission SP-247 and the safe retrieval of valuable data and samples gathered during the mission. 
                        </p>
                    </div>
                    <div class="mission_footer mt-5">
                        <a href="views/detail/return_detail.html">Learn more</a>
                    </div>
                  </div>  
                <div class="mission_right align-self-start">
                    <p class="MissionNumber">05</p>
                </div>          
            </div>
            <div style="display: none;" class="mission_right_mobi">
                <p class="MissionNumber">05</p>
            </div>
        </div>
        
    </section>
    <section id="emblem" class="emblem">
        <div class="emblem_info pt-5 ">
            <div class="container d-flex justify-content-between">
                <div class="mission_left reveal fade-left">
                    <div class="mission_title">
                        <p class="MissionTitle">emblem</p>
                    </div>
                    <div class="mission_content">
                        <p >This patch represents the mission SP-247 and is worn by everyone affiliated with said mission. Design consists of an illustration of planet Saturn, the mission's destination, space organization JAXA, the project's name, Mission SP-247, and the year when the mission will take place.
                        </p>
                    </div>
                  </div>  
                <div class="mission_right align-self-start">
                    <div class="emblem_photo reveal fade-bottom"><img src="images/emblem.png" alt=""></div>
                    
                </div>  
            </div>
        </div>
        <div class="emblem_mockup container d-flex">
            <img class="img-fluid" src="images/emblem_mockup.png" alt="">
        </div>
        <section class="footer">
            <!-- Remove the container if you want to extend the Footer to full width. -->
    <div class="container mt-5">
    
        <footer >
          <!-- Grid container -->
          <div class="container p-4">
            <!--Grid row-->
            <div class="row d-flex justify-content-between">
              <!--Grid column-->
              <div class="col-xl col-md-6 p-3 d-flex justify-content-between" >
                <div class="d-flex justify-content-between mb-4 " style=" height: 150px;">
                    <img src="images/SP-247_logo.png" height="70" alt=""
                    loading="lazy" />
                    <img src="images/Jaxa_logo.png" height="70" alt=""
                    loading="lazy" />    
                </div>
                <div class="ps-3">
                    <p>"Mission SP-247: Journey to Saturn, unraveling cosmic mysteries. Inspiring exploration, expanding knowledge, and igniting the wonder of the universe."</p>
                  </div>
              </div>

              <!--Grid column-->
              <div class="footer_right col-lg-3 col-md-3 mb-md-0 d-flex justify-content-between">
                <!--Grid column-->
                    <div class="">
                        <h5 class="text-uppercase mb-4">Office</h5>
            
                        <ul class="list-unstyled">
                        <li>
                            <p><i class="fas fa-map-marker-alt pe-2"></i>Tokyo, 57 Street </p>
                        </li>
                        <li>
                            <p><i class="fas fa-phone pe-2"></i>Japan</p>
                        </li>
                        </ul>
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="">
                        <h5 class="text-uppercase mb-4">Contact</h5>
            
                        <ul class="list-unstyled">
                        <li>
                            <p><i class="fas fa-phone pe-2"></i>+ 01 234 567 89</p>
                        </li>
                        <li>
                            <p><i class="fas fa-envelope pe-2 mb-0"></i>jaxa@gmail.com</p>
                        </li>
                        </ul>
                    </div>
              <!--Grid column-->
              </div>
            </div>
            <!--Grid row-->
          </div>
          <!-- Grid container -->
      
          <!-- Copyright -->
          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); font-weight: 600;">
            © 2023 Copyright:
            <a class="text-white" href="">All rights reserved</a>
          </div>
          <!-- Copyright -->
        </footer>
      
      </div>
      <!-- End of .container -->
        </section>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  
    <script type="text/javascript" src="js/index.js"></script>

</body>
</html>
@extends('layouts.app')
@section('content')
<body>



        <!-- NAVBAR
        ================================================== -->
        <div class="navbar-wrapper">
          <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
          <div class="container">

            <div class="navbar navbar-inverse">
              <div class="navbar-inner">
                <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="brand" href="#">Project name</a>
                <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
                <div class="nav-collapse collapse">
                  <ul class="nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li class="nav-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                      </ul>
                    </li>
                  </ul>
                </div><!--/.nav-collapse -->
              </div><!-- /.navbar-inner -->
            </div><!-- /.navbar -->

          </div> <!-- /.container -->
        </div><!-- /.navbar-wrapper -->



        <!-- Carousel
        ================================================== -->
        <div id="myCarousel" class="carousel slide">
          <div class="carousel-inner">
            <div class="item">
              <img src="../assets/img/examples/slide-01.jpg" alt="">
              <div class="container">
                <div class="carousel-caption">
                  <h1>Example headline.</h1>
                  <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  <a class="btn btn-large btn-primary" href="#">Sign up today</a>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="../assets/img/examples/slide-02.jpg" alt="">
              <div class="container">
                <div class
                ="carousel-caption">
                  <h1>Another example headline.</h1>
                  <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  <a class="btn btn-large btn-primary" href="#">Learn more</a>
                </div>
              </div>
            </div>
            <div class="item active">
              <img src="../assets/img/examples/slide-03.jpg" alt="">
              <div class="container">
                <div class="carousel-caption">
                  <h1>One more for good measure.</h1>
                  <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  <a class="btn btn-large btn-primary" href="#">Browse gallery</a>
                </div>
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
        </div><!-- /.carousel -->



        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

          <!-- Three columns of text below the carousel -->
          <div class="row">
            <div class="span4">
              <img class="img-circle" data-src="holder.js/140x140" alt="140x140" style="width: 140px; height: 140px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAACMCAYAAACuwEE+AAAE+0lEQVR4Xu3XS0scURDF8RtEEPEFPtCNKLpQ3Al+/w8g6EJEF4KiC0VU8IkiknAbbnMdO2bOgZCZ1H9WiVM1Tp36ebv7x93d3c/EiwT6TOAHYPpMirImAcAAQUoAMFJcFAMGA1ICgJHiohgwGJASAIwUF8WAwYCUAGCkuCgGDAakBAAjxUUxYDAgJQAYKS6KAYMBKQHASHFRDBgMSAkARoqLYsBgQEoAMFJcFAMGA1ICgJHiohgwGJASAIwUF8WAwYCUAGCkuCgGDAakBAAjxUUxYDAgJQAYKS6KAYMBKQHASHFRDBgMSAkARoqLYsBgQEoAMFJcFAMGA1ICgJHiohgwGJASAIwUF8WAwYCUAGCkuCgGDAakBAAjxUUxYDAgJQAYKS6KAYMBKQHASHFRDBgMSAkARoqLYsBgQEoAMFJcFAMGA1ICgJHiohgwGJASAIwUF8WAwYCUAGCkuCgGDAakBAAjxUUxYDAgJQAYKS6KAYMBKQHASHFR/F+AeXx8THt7e2l8fDzt7Ox82urV1VU6OjpKExMT7XtnZ2fp5OSkqcs929vbaWxsrC8Nh4eH6fr6Om1ubqbFxcVPPfm9y8vLtL6+nlZWVpr3ys/yv6enp798v75+6QAVDT2YAuLj46NzIbu7u+n+/r59r+Cam5tLy8vLv4XWtaPyWSMjI1/AlM99f39vwZTvtrq62oDMcBcWFtLW1tYAEdC+ylCDqbF0/QXXJ0n56y4/K6dARvDy8tKcMufn5+0JMTs722AaHR1t3js4OGjg5VcXmIIpv18+uz6NZmZmms/LL+VE09b596uHHky+BCwtLX257JS/+KmpqfTw8NBernovKV1LzadEhvL29taeJPv7+83vubi4SE9PT59OmIzw9PQ0ZWT5ctWFcXJyMtU48/+H8TXUYErgXfcpGcLNzU3a2NhIx8fHfYHJ9yRdp1K92Lz0Gszr62t7Es3Pzzf3RoAZ8D+FXjD1vUO5tJQb4u9OmAymAKhPl+/AFJj5MnN7ewuYAbfSfL1eMPWTSf39833Mn06BurfrCao+Ycp9Sb4H6n3lU+b5+bl9ouIeZoAkdV2SytfrfeSun5LW1tbay0l+HK8/J2Mp90f1U03vJamOofeGuuuky09nPCX9YzwKmPpEyo/i9SnSdXrkG+B8uSk3qQqY/Lv+dE/0j6OTf/1/cdMrT02DnQBg7OhiNgIm5t7tqQFjRxezETAx925PDRg7upiNgIm5d3tqwNjRxWwETMy921MDxo4uZiNgYu7dnhowdnQxGwETc+/21ICxo4vZCJiYe7enBowdXcxGwMTcuz01YOzoYjYCJube7akBY0cXsxEwMfduTw0YO7qYjYCJuXd7asDY0cVsBEzMvdtTA8aOLmYjYGLu3Z4aMHZ0MRsBE3Pv9tSAsaOL2QiYmHu3pwaMHV3MRsDE3Ls9NWDs6GI2Aibm3u2pAWNHF7MRMDH3bk8NGDu6mI2Aibl3e2rA2NHFbARMzL3bUwPGji5mI2Bi7t2eGjB2dDEbARNz7/bUgLGji9kImJh7t6cGjB1dzEbAxNy7PTVg7OhiNgIm5t7tqQFjRxezETAx925PDRg7upiNgIm5d3tqwNjRxWwETMy921MDxo4uZiNgYu7dnhowdnQxGwETc+/21ICxo4vZCJiYe7enBowdXcxGwMTcuz01YOzoYjYCJube7al/ARv8+KZIW+ghAAAAAElFTkSuQmCC">
              <h2>Heading</h2>
              <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
              <p><a class="btn" href="#">View details »</a></p>
            </div><!-- /.span4 -->
            <div class="span4">
              <img class="img-circle" data-src="holder.js/140x140" alt="140x140" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAACMCAYAAACuwEE+AAAE+0lEQVR4Xu3XS0scURDF8RtEEPEFPtCNKLpQ3Al+/w8g6EJEF4KiC0VU8IkiknAbbnMdO2bOgZCZ1H9WiVM1Tp36ebv7x93d3c/EiwT6TOAHYPpMirImAcAAQUoAMFJcFAMGA1ICgJHiohgwGJASAIwUF8WAwYCUAGCkuCgGDAakBAAjxUUxYDAgJQAYKS6KAYMBKQHASHFRDBgMSAkARoqLYsBgQEoAMFJcFAMGA1ICgJHiohgwGJASAIwUF8WAwYCUAGCkuCgGDAakBAAjxUUxYDAgJQAYKS6KAYMBKQHASHFRDBgMSAkARoqLYsBgQEoAMFJcFAMGA1ICgJHiohgwGJASAIwUF8WAwYCUAGCkuCgGDAakBAAjxUUxYDAgJQAYKS6KAYMBKQHASHFRDBgMSAkARoqLYsBgQEoAMFJcFAMGA1ICgJHiohgwGJASAIwUF8WAwYCUAGCkuCgGDAakBAAjxUUxYDAgJQAYKS6KAYMBKQHASHFR/F+AeXx8THt7e2l8fDzt7Ox82urV1VU6OjpKExMT7XtnZ2fp5OSkqcs929vbaWxsrC8Nh4eH6fr6Om1ubqbFxcVPPfm9y8vLtL6+nlZWVpr3ys/yv6enp798v75+6QAVDT2YAuLj46NzIbu7u+n+/r59r+Cam5tLy8vLv4XWtaPyWSMjI1/AlM99f39vwZTvtrq62oDMcBcWFtLW1tYAEdC+ylCDqbF0/QXXJ0n56y4/K6dARvDy8tKcMufn5+0JMTs722AaHR1t3js4OGjg5VcXmIIpv18+uz6NZmZmms/LL+VE09b596uHHky+BCwtLX257JS/+KmpqfTw8NBernovKV1LzadEhvL29taeJPv7+83vubi4SE9PT59OmIzw9PQ0ZWT5ctWFcXJyMtU48/+H8TXUYErgXfcpGcLNzU3a2NhIx8fHfYHJ9yRdp1K92Lz0Gszr62t7Es3Pzzf3RoAZ8D+FXjD1vUO5tJQb4u9OmAymAKhPl+/AFJj5MnN7ewuYAbfSfL1eMPWTSf39833Mn06BurfrCao+Ycp9Sb4H6n3lU+b5+bl9ouIeZoAkdV2SytfrfeSun5LW1tbay0l+HK8/J2Mp90f1U03vJamOofeGuuuky09nPCX9YzwKmPpEyo/i9SnSdXrkG+B8uSk3qQqY/Lv+dE/0j6OTf/1/cdMrT02DnQBg7OhiNgIm5t7tqQFjRxezETAx925PDRg7upiNgIm5d3tqwNjRxWwETMy921MDxo4uZiNgYu7dnhowdnQxGwETc+/21ICxo4vZCJiYe7enBowdXcxGwMTcuz01YOzoYjYCJube7akBY0cXsxEwMfduTw0YO7qYjYCJuXd7asDY0cVsBEzMvdtTA8aOLmYjYGLu3Z4aMHZ0MRsBE3Pv9tSAsaOL2QiYmHu3pwaMHV3MRsDE3Ls9NWDs6GI2Aibm3u2pAWNHF7MRMDH3bk8NGDu6mI2Aibl3e2rA2NHFbARMzL3bUwPGji5mI2Bi7t2eGjB2dDEbARNz7/bUgLGji9kImJh7t6cGjB1dzEbAxNy7PTVg7OhiNgIm5t7tqQFjRxezETAx925PDRg7upiNgIm5d3tqwNjRxWwETMy921MDxo4uZiNgYu7dnhowdnQxGwETc+/21ICxo4vZCJiYe7enBowdXcxGwMTcuz01YOzoYjYCJube7al/ARv8+KZIW+ghAAAAAElFTkSuQmCC" style="width: 140px; height: 140px;">
              <h2>Heading</h2>
              <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
              <p><a class="btn" href="#">View details »</a></p>
            </div><!-- /.span4 -->
            <div class="span4">
              <img class="img-circle" data-src="holder.js/140x140" alt="140x140" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAACMCAYAAACuwEE+AAAE+0lEQVR4Xu3XS0scURDF8RtEEPEFPtCNKLpQ3Al+/w8g6EJEF4KiC0VU8IkiknAbbnMdO2bOgZCZ1H9WiVM1Tp36ebv7x93d3c/EiwT6TOAHYPpMirImAcAAQUoAMFJcFAMGA1ICgJHiohgwGJASAIwUF8WAwYCUAGCkuCgGDAakBAAjxUUxYDAgJQAYKS6KAYMBKQHASHFRDBgMSAkARoqLYsBgQEoAMFJcFAMGA1ICgJHiohgwGJASAIwUF8WAwYCUAGCkuCgGDAakBAAjxUUxYDAgJQAYKS6KAYMBKQHASHFRDBgMSAkARoqLYsBgQEoAMFJcFAMGA1ICgJHiohgwGJASAIwUF8WAwYCUAGCkuCgGDAakBAAjxUUxYDAgJQAYKS6KAYMBKQHASHFRDBgMSAkARoqLYsBgQEoAMFJcFAMGA1ICgJHiohgwGJASAIwUF8WAwYCUAGCkuCgGDAakBAAjxUUxYDAgJQAYKS6KAYMBKQHASHFR/F+AeXx8THt7e2l8fDzt7Ox82urV1VU6OjpKExMT7XtnZ2fp5OSkqcs929vbaWxsrC8Nh4eH6fr6Om1ubqbFxcVPPfm9y8vLtL6+nlZWVpr3ys/yv6enp798v75+6QAVDT2YAuLj46NzIbu7u+n+/r59r+Cam5tLy8vLv4XWtaPyWSMjI1/AlM99f39vwZTvtrq62oDMcBcWFtLW1tYAEdC+ylCDqbF0/QXXJ0n56y4/K6dARvDy8tKcMufn5+0JMTs722AaHR1t3js4OGjg5VcXmIIpv18+uz6NZmZmms/LL+VE09b596uHHky+BCwtLX257JS/+KmpqfTw8NBernovKV1LzadEhvL29taeJPv7+83vubi4SE9PT59OmIzw9PQ0ZWT5ctWFcXJyMtU48/+H8TXUYErgXfcpGcLNzU3a2NhIx8fHfYHJ9yRdp1K92Lz0Gszr62t7Es3Pzzf3RoAZ8D+FXjD1vUO5tJQb4u9OmAymAKhPl+/AFJj5MnN7ewuYAbfSfL1eMPWTSf39833Mn06BurfrCao+Ycp9Sb4H6n3lU+b5+bl9ouIeZoAkdV2SytfrfeSun5LW1tbay0l+HK8/J2Mp90f1U03vJamOofeGuuuky09nPCX9YzwKmPpEyo/i9SnSdXrkG+B8uSk3qQqY/Lv+dE/0j6OTf/1/cdMrT02DnQBg7OhiNgIm5t7tqQFjRxezETAx925PDRg7upiNgIm5d3tqwNjRxWwETMy921MDxo4uZiNgYu7dnhowdnQxGwETc+/21ICxo4vZCJiYe7enBowdXcxGwMTcuz01YOzoYjYCJube7akBY0cXsxEwMfduTw0YO7qYjYCJuXd7asDY0cVsBEzMvdtTA8aOLmYjYGLu3Z4aMHZ0MRsBE3Pv9tSAsaOL2QiYmHu3pwaMHV3MRsDE3Ls9NWDs6GI2Aibm3u2pAWNHF7MRMDH3bk8NGDu6mI2Aibl3e2rA2NHFbARMzL3bUwPGji5mI2Bi7t2eGjB2dDEbARNz7/bUgLGji9kImJh7t6cGjB1dzEbAxNy7PTVg7OhiNgIm5t7tqQFjRxezETAx925PDRg7upiNgIm5d3tqwNjRxWwETMy921MDxo4uZiNgYu7dnhowdnQxGwETc+/21ICxo4vZCJiYe7enBowdXcxGwMTcuz01YOzoYjYCJube7al/ARv8+KZIW+ghAAAAAElFTkSuQmCC" style="width: 140px; height: 140px;">
              <h2>Heading</h2>
              <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
              <p><a class="btn" href="#">View details »</a></p>
            </div><!-- /.span4 -->
          </div><!-- /.row -->


          <!-- START THE FEATURETTES -->

          <hr class="featurette-divider">

          <div class="featurette">
            <img class="featurette-image pull-right" src="../assets/img/examples/browser-icon-chrome.png">
            <h2 class="featurette-heading">First featurette headling. <span class="muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>

          <hr class="featurette-divider">

          <div class="featurette">
            <img class="featurette-image pull-left" src="../assets/img/examples/browser-icon-firefox.png">
            <h2 class="featurette-heading">Oh yeah, it's that good. <span class="muted">See for yourself.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>

          <hr class="featurette-divider">

          <div class="featurette">
            <img class="featurette-image pull-right" src="../assets/img/examples/browser-icon-safari.png">
            <h2 class="featurette-heading">And lastly, this one. <span class="muted">Checkmate.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>

          <hr class="featurette-divider">

          <!-- /END THE FEATURETTES -->


          <!-- FOOTER -->
          <footer>
            <p class="pull-right"><a href="#">Back to top</a></p>
            <p>© 2013 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
          </footer>

        </div><!-- /.container -->



        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src=" ../assets/js/jquery.js"></script>
        <script src="../assets/js/bootstrap-transition.js"></script>
        <script src="../assets/js/bootstrap-alert.js"></script>
        <script src="../assets/js/bootstrap-modal.js"></script>
        <script src="../assets/js/bootstrap-dropdown.js"></script>
        <script src="../assets/js/bootstrap-scrollspy.js"></script>
        <script src="../assets/js/bootstrap-tab.js"></script>
        <script src="../assets/js/bootstrap-tooltip.js"></script>
        <script src="../assets/js/bootstrap-popover.js"></script>
        <script src="../assets/js/bootstrap-button.js"></script>
        <script src="../assets/js/bootstrap-collapse.js"></script>
        <script src="../assets/js/bootstrap-carousel.js"></script>
        <script src="../assets/js/bootstrap-typeahead.js"></script>
        <script>
          !function ($) {
            $(function(){
              // carousel demo
              $('#myCarousel').carousel()
            })
          }(window.jQuery)
        </script>
        <script src="../assets/js/holder/holder.js"></script>


    </body>
@stop

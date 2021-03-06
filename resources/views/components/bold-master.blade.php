


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>
      
        Evento &middot; 
      
    </title>

    
      <link href="http://fonts.googleapis.com/css?family=Lora:400,400italic|Roboto:100,300,400,700" rel="stylesheet">
      <link href="{{asset('css/libs.css')}}" rel="stylesheet">
      {{-- <link href="{{asset('css/application-bold.css')}}" rel="stylesheet"> --}}
    

    

    <style>
      /* note: this is a hack for ios iframe for bootstrap themes shopify page */
      /* this chunk of css is not part of the toolkit :) */
      /* …curses ios, etc… */
      @media (max-width: 768px) and (-webkit-min-device-pixel-ratio: 2) {
        body {
          width: 1px;
          min-width: 100%;
          *width: 100%;
        }
        #stage {
          height: 1px;
          overflow: auto;
          min-height: 100vh;
          -webkit-overflow-scrolling: touch;
        }
      }
    </style>
  </head>


<body>
  



<div class="stage-shelf hidden" id="sidebar">
  <ul class="nav nav-bordered nav-stacked flex-column">
    <li class="nav-header"><small>Evento</small></li>
    <li class="nav-item">
      <a class="nav-link active" href="../bold/index.html">Upcoming events</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../index.html">Event gallery</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../minimal/index.html">Artist merch</a>
    </li>

    <li class="nav-divider"></li>

    <li class="nav-header"><small>Featured this month</small></li>

    <li class="nav-item">
      <a class="nav-link" href="#grid" data-target="#stage" data-toggle="stage">Joe boy</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#chainz" data-target="#stage" data-toggle="stage">Ssaru</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#pricing" data-target="#stage" data-toggle="stage">Rema</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#footer" data-target="#stage" data-toggle="stage">Breeder LW</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#footer" data-target="#stage" data-toggle="stage">Tems</a>
    </li>

    <li class="nav-divider"></li>

    <li class="nav-header"><small>Attend events near you</small></li>

    <li class="nav-item">
      <a class="nav-link" href="../docs/index.html">Browse events</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="http://getbootstrap.com">Buy tickets</a>
    </li>

  </ul>
</div>


<div class="stage" id="stage">

  <div class="block block-fill-height app-block-wayne"
       style="background-image: url(img/boutross.jpg)">

    <button class="btn btn-link stage-toggle" data-target="#stage" data-toggle="stage">
      <span class="icon icon-menu stage-toggle-icon"></span>
      Menu
    </button>

    <div class="block-sm-middle block-xs-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <h1 class="block-title mb-4">
              <span class="text-ribbon text-ribbon-primary">
                <span>Keep your finger on the pulse</span>
              </span>
            </h1>
            <p class="lead mt-1">
              <span class="text-ribbon text-ribbon-primary">
                <span>
                  Make memories. Meet fun people.
                </span>
              </span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="block block-inverse block-transparent py-0 app-block-grid">

    <div class="block-bg-clip">
      <div class="block-bg">
        <div class="block-bg-img"></div>
      </div>
    </div>

    <div class="container" id="grid">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="row mb-3 mb-md-5">
            <div class="col-lg-12">
              <div class="card card-bold card-danger mb-0 app-box-shadow">
                <img src="img/tems.jpg">
                <div class="card-block pb-5">
                  <h4 class="mb-0">Tems</h4>
                  <p class="text-serif"><em>Released on Drop 6 weeks early</em></p>
                  <hr>
                  <p class="text-serif"><em>Ms. Tems was the first artist to reach out to Evento to coordinate her leak. We knew it was going to be the largest unofficial album drop in history. We doubled server capacity and made a lot ton of coffee.</em></p>
                </div>
              </div>
            </div>
          </div>
          <div class="row hidden-md-down">
            <div class="col-lg-12">
              <img src="img/ssaru.jpg">
           </div>
          </div>
        </div>
        <div class="col-lg-8 col-md-6">
          <div class="row">
            <div class="col-lg-6 mb-3 mb-md-5">
              <div class="app-box-shadow">
                <img src="img/breeder_lw.jpg">
              </div>
            </div>
            <div class="col-lg-6 mb-3 mb-md-5">
              <div class="app-box-shadow">
                <img src="img/beyt.jpg">
              </div>
            </div>
          </div>
          <div class="row hidden-md-down">
            <div class="col-lg-12">
              <img src="img/rema.jpg">
           </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="block block-fill-height block-transparent block-angle app-block-chainz" id="chainz">

    <div class="block-bg-clip">
      <div class="block-bg">
        <div class="block-bg-img block-bg-img-top"
             style="background-image: url(img/Joeboy.jpg)">
        </div>
      </div>
    </div>

    <div class="block-sm-middle block-xs-top">
      <div class="container">
        <div class="row">
          <div class="col-md-5 offset-sm-7">
            <h1 class="block-title mb-4">
              <span class="text-ribbon text-ribbon-primary">
                <span>Hand Picked.</span>
              </span>
            </h1>
            <p class="lead">
              <span class="text-ribbon text-ribbon-primary">
                <span>
                  Every album, song, and video we leak is the very best in class.
                </span>
              </span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="block block-fill-height block-transparent block-inverse block-angle app-block-kanye">
    <div class="block-bg-clip">
      <div class="block-bg">
        <div class="block-bg-img block-bg-img-top"
             style="background-image: url(img/kanye.jpg)">
        </div>
      </div>
    </div>

    <div class="block-xs-middle">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <h1 class="block-title mb-4">
              <span class="text-ribbon">
                <span>Music Videos.</span>
              </span>
            </h1>
            <p class="lead">
              <span class="text-ribbon">
                <span>
                  We stream all leaks alongside music videos cause we don't play games.
                </span>
              </span>
            </p>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-8">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe width="682" height="384" src="https://www.youtube.com/embed/Bm5iA4Zupek?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="block block-transparent block-fill-height block-angle block-app-mosdef">
    <div class="block-bg-clip">
      <div class="block-bg">
        <div class="block-bg-img block-bg-img-top"
             style="background-image: url(img/mosdef.jpg)">
        </div>
      </div>
    </div>

    <div class="block-xs-middle">
      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-6">
            <h1 class="block-title mb-4">
              <span class="text-ribbon text-ribbon-primary">
                <span>Sign up now.</span>
              </span>
            </h1>

            <div class="text-ribbon-inputs-split">
              <input type="text" class="h4 text-ribbon-input text-ribbon-primary" placeholder="Name">
              <input type="text" class="h4 text-ribbon-input text-ribbon-primary" placeholder="Email">
            </div>
            <input type="text" class="h4 text-ribbon-input text-ribbon-input-half text-ribbon-primary" placeholder="Promo code">
            <button type="button" class="btn btn-square btn-primary btn-lg btn-block">
              Get the beta early
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="block block-fill-height block-inverse app-block-nicki"
       style="background-image: url(img/nicki.jpg)"
       id="pricing">
    <div class="block-xs-middle">
      <div class="container">
        <div class="row mb-4">
          <div class="col-lg-5">
            <h1 class="block-title mb-4">
              <span class="text-ribbon">
                <span>Easy Pricing.</span>
              </span></h1>
            <p class="lead">
              <span class="text-ribbon text-muted">
                <span>
                  One yearly payment of $99 and get unlimited leaked tracks.
                </span>
              </span>
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="card">
              <div class="card-block">
                <h3 class="card-title">Basic Trial</h3>
                <h4 class="text-muted text-serif mt-0 mb-3">
                  <em>$0/yr</em>
                </h4>
                <p class="text-serif mb-1">
                  <em>
                    Endless stations based on artists, genres, and moods, including You FM, your own personalized station.
                  </em>
                </p>
                <hr>
                <ul class="iconlist text-serif mb-4">
                  <li class="active">
                    <span class="icon icon-check"></span>
                    <em>Unlimited streaming</em>
                  </li>
                  <li>
                    <span class="icon icon-cross"></span>
                    <em>Day of leak access</em>
                  </li>
                  <li>
                    <span class="icon icon-cross"></span>
                    <em>Offline sync</em>
                  </li>
                </ul>
                <button class="btn btn-secondary btn-square btn-block btn-lg">Start a basic trial</button>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card accent-primary">
              <div class="card-block">
                <h3 class="card-title">Anual Access</h3>
                <h4 class="text-primary text-serif mt-0 mb-3">
                  <em>$99/yr</em>
                </h4>
                <p class="text-serif mb-1">
                  <em>
                    Endless stations based on artists, genres, and moods, including You FM, your own personalized station.
                  </em>
                </p>
                <hr>
                <ul class="iconlist text-serif mb-4">
                  <li class="active">
                    <span class="icon icon-check"></span>
                    <em>Unlimited streaming</em>
                  </li>
                  <li class="active">
                    <span class="icon icon-check"></span>
                    <em>Day of leak access</em>
                  </li>
                  <li>
                    <span class="icon icon-cross"></span>
                    <em>Offline sync</em>
                  </li>
                </ul>
                <button class="btn btn-primary btn-square btn-block btn-lg">Start a basic trial</button>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card">
              <div class="card-block">
                <h3 class="card-title">Celebrity Look</h3>
                <h4 class="text-muted text-serif mt-0 mb-2">
                  <em>$299/yr</em>
                </h4>
                <p class="text-serif mb-1">
                  <em>
                    Endless stations based on artists, genres, and moods, including You FM, your own personalized station.
                  </em>
                <hr>
                <ul class="iconlist text-serif mb-4">
                  <li class="active">
                    <span class="icon icon-check"></span>
                    <em>Unlimited streaming</em>
                  </li>
                  <li class="active">
                    <span class="icon icon-check"></span>
                    <em>Day of leak access</em>
                  </li>
                  <li class="active">
                    <span class="icon icon-check"></span>
                    <em>Offline sync</em>
                  </li>
                </ul>
                <button class="btn btn-secondary btn-square btn-block btn-lg">Start a basic trial</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="block block-inverse accent-primary" id="footer">
    <div class="container">
      <div class="row text-serif">
        <div class="col-md-2 mb-4">
          <ul class="list-unstyled list-spaced">
            <li><h4>Tech</h4></li>
            <li class="text-muted"><em>Overview</em></li>
            <li class="text-muted"><em>Design</em></li>
            <li class="text-muted"><em>Display</em></li>
            <li class="text-muted"><em>Technology</em></li>
          </ul>
        </div>
        <div class="col-md-2 mb-4">
          <ul class="list-unstyled list-spaced">
            <li><h4>Press</h4></li>
            <li class="text-muted"><em>Overview</em></li>
            <li class="text-muted"><em>Design</em></li>
            <li class="text-muted"><em>Display</em></li>
            <li class="text-muted"><em>Technology</em></li>
          </ul>
        </div>
        <div class="col-md-2 mb-4">
          <ul class="list-unstyled list-spaced">
            <li><h4>Other</h4></li>
            <li class="text-muted"><em>Overview</em></li>
            <li class="text-muted"><em>Design</em></li>
            <li class="text-muted"><em>Display</em></li>
            <li class="text-muted"><em>Technology</em></li>
          </ul>
        </div>
        <div class="col-md-6 mb-4">
          <ul class="list-unstyled list-spaced">
            <li><h4>Photography</h4></li>
            <li class="text-muted">
              <em>Background photos: <a href="https://www.flickr.com/photos/demxx/8702542709/">2 Chainz by demxx</a> and <a href="https://www.flickr.com/photos/carnivalridexx/6048218344/">Nicki Minaj by Jennifer</a> are shared under the <a href="https://creativecommons.org/licenses/by/2.0/">CC BY 2.0 license</a>. <a href="https://www.flickr.com/photos/ddalledo/2204168450/">Kanye West by Daniele Dalledonne</a> is shared under the <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC BY-SA 2.0 license<a>. <a href="https://commons.wikimedia.org/wiki/Category:Lil_Wayne#/media/File:Lil_Wayne.jpg">Lil Wayne by RJ Shaughnessy</a>, and <a href="https://www.flickr.com/photos/didy_b/8150029917">Mos Def by Eddy BERTHIER</a> are public domain works. Concert portraits: <a href="https://www.flickr.com/photos/histrionicss/13951485730">Iggy Azalea by Laura Murray</a>, <a href="https://www.flickr.com/photos/32999928@N05/7213700394/">Childish Gambino by Eli Watson</a>, and <a href="https://www.flickr.com/photos/scissorfighter/5169715083/">Kid Cudi by Dana Beveridge</a> are shared under the <a href="https://creativecommons.org/licenses/by/2.0/">CC BY 2.0 license</a>.<a href="https://www.flickr.com/photos/jasonpersse/5710284405/"> Kanye West by Jason Persse</a> and <a href="https://www.flickr.com/photos/tamtam7683/5990345195">Nicki Minaj by tamtam7683</a> are shared under the <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC BY-SA 2.0 license</a>.</em>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

</div>


    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/tether.min.js')}}"></script>
    <script src="{{asset('js/libs.js')}}"></script>
    
  </body>
</html>


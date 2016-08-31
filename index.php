<html>
    <head>
       <?php include('analyticstracking.php'); ?>
         <meta name="description" content="Check out my portfolio! It's got at least 2 games.">

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="bonald.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
        <title>Elliot Fiske's Portfolio!</title>
        <style>
          @import url(http://fonts.googleapis.com/css?family=Roboto:400,700,300);
:root {
  -webkit-transition: all 300ms;
  transition: all 300ms;
}
:root.bg--big {
  background-color: #00BCD4;
}
:root.bg--medium {
  background-color: #E53935;
}
:root.bg--small {
  background-color: #4527A0;
}
body {
  /*height: 100vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;*/
  -webkit-box-align: center;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
  font-family: 'Roboto', sans-serif;
  -webkit-transform: translateZ(0);
          transform: translateZ(0);
  font-weight: 400;
}
button {
  border: none;
  background: transparent;
}
.controller-container {
  margin-bottom: 5%;
  text-align: center;
}
.controller {
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  display: inline-block;
  margin: 0 20px;
  font-size: 22px;
  padding: 10px 0;
  color: #FFF;
  position: relative;
  -webkit-transition: all 100ms cubic-bezier(0.165, 0.84, 0.44, 1);
  transition: all 100ms cubic-bezier(0.165, 0.84, 0.44, 1);
}
.controller:after {
  content: "";
  height: 3px;
  display: block;
  position: absolute;
  bottom: 0;
  width: 0;
  -webkit-transition: all 300ms cubic-bezier(0.165, 0.84, 0.44, 1);
  transition: all 300ms cubic-bezier(0.165, 0.84, 0.44, 1);
  background-color: #FFF;
}
.controller.is_current:after {
  width: 100%;
}
.controller:hover,
.controller.is_current {
  -webkit-transform: translate3d(0, -5px, 0);
          transform: translate3d(0, -5px, 0);
  cursor: pointer;
}
.card {
  /*will-change: transform;*/
  /*margin: 8px;*/
  position: relative;
  border-radius: 2px;
  overflow: hidden;
  background-color: #fafafa;
  height: 35%;
  /*width: 344px;*/
  /*-webkit-transition: all 400ms cubic-bezier(0.165, 0.84, 0.44, 1);
  transition: all 400ms cubic-bezier(0.165, 0.84, 0.44, 1);*/
  box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.37);
}
.card:hover {
  cursor: pointer;
}
.card__image {
  position: absolute;
  background-size: cover;
  background-position: center bottom;
  background-repeat: no-repat;
  width: 100%;
  height: 100%;
  overflow: hidden;
  display: block;
  opacity: 0;
  -webkit-transition: all 200ms cubic-bezier(0.075, 0.82, 0.165, 1);
  transition: all 200ms cubic-bezier(0.075, 0.82, 0.165, 1);
}
.card__image:after {
  content: "";
  display: block;
  position: absolute;
  /*background-color: rgba(0, 0, 0, 0.1);*/
  top: 0;
  left: 0;
  right: 0;
  -webkit-transition: all 500ms;
  transition: all 500ms;
  bottom: 0;
}
.card__title {
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  font-size: 24px;
  color: #FFF;
  margin: 0;
  position: absolute;
  left: 0;
  right: 0;
  padding: 0 16px;
  font-weight: 400;
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
  -webkit-transition: all 200ms cubic-bezier(0.075, 0.82, 0.165, 1);
  transition: all 200ms cubic-bezier(0.075, 0.82, 0.165, 1);
}
.card__subtitle {
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  font-size: 14px;
  display: block;
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
  color: #000;
  left: 88px;
  right: 0;
  top: 45px;
  position: absolute;
  padding: 0 16px;
  opacity: 0;
  -webkit-transition: all 200ms cubic-bezier(0.075, 0.82, 0.165, 1);
  transition: all 200ms cubic-bezier(0.075, 0.82, 0.165, 1);
}
.card__text {
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  font-size: 14px;
  display: block;
  left: 0;
  right: 0;
  top: 100px;
  padding: 16px;
  margin: 0;
  line-height: 1.6;
  position: absolute;
  color: #000;
  overflow: hidden;
  -webkit-transition: width 200ms cubic-bezier(0.075, 0.82, 0.165, 1);
  transition: width 200ms cubic-bezier(0.075, 0.82, 0.165, 1);
  -webkit-transition: delay 0.1s;
  transition: delay 0.1s;
}
.card__action-bar {
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  position: absolute;
  bottom: 0;
  top: auto;
  left: 0;
  right: 0;
  padding: 0 8px;
  border-top: 1px solid #E0E0E0;
  boz-sizing: border-box;
  height: 52px;
  -webkit-transition: left 200ms cubic-bezier(0.075, 0.82, 0.165, 1);
  transition: left 200ms cubic-bezier(0.075, 0.82, 0.165, 1);
}
.card__button {
  outline: none;
  position: relative;
  display: inline-block;
  line-height: 52px;
  padding: 0 16px;
  color: #ff1744;
}
.card--big {
  box-shadow: 0 27px 55px 0 rgba(0, 0, 0, 0.3), 0 17px 17px 0 rgba(0, 0, 0, 0.15);
  height: 325px;
  min-height: 325px;
}
.card--big .card__image {
  border-radius: 1px 1px 0 0;
  left: 0;
  right: 0;
  top: 0;
  opacity: 1;
  max-height: 176px;
}
.card--big .card__title {
  top: 135px;
}
.card--big .card__text {
  top: 176px;
}
.card--big .card__action-bar {
  left: 0;
}
.card--medium {
  box-shadow: 0 13px 25px 0 rgba(0, 0, 0, 0.3), 0 11px 7px 0 rgba(0, 0, 0, 0.19);
  height: 208px;
  min-height: 208px;
}
.card--medium .card__image {
  border-radius: 1px 1px 0 0;
  left: -100%;
  right: 0;
  top: 0;
  max-height: 0;
  opacity: 0;
}
.card--medium .card__title {
  color: #ff1744;
  top: 16px;
}
.card--medium .card__text {
  font-size: 16px;
  top: 50px;
}
.card--medium .card__action-bar {
  left: 0;
}
.card--small {
  box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.3), 0 2px 2px 0 rgba(0, 0, 0, 0.2);
  height: 136px;
  min-height: 136px;
}
.card--small .card__image {
  border-radius: 1px 0 0 1px;
  left: 0;
  top: 0;
  /*width: 88px;*/
  opacity: 1;
  max-height: 136px;
}
.card--small .card__image:after {
  opacity: 0;
}
.card--small .card__title {
  color: #000;
  left: 88px;
  top: 8px;
}
.card--small .card__subtitle {
  opacity: 1;
  left: 88px;
}
.card--small .card__text {
  top: 30px;
  opacity: 0;
}
.card--small .card__action-bar {
  left: 88px;
}
a {
  display: block;
}

.col-sm-6, .col-xs-12 {
  margin-bottom: 35px;
}
        </style>
    </head>

    <body>
        <p style="display: none">Check out my portfolio! It's got at least 2 games.</p>
        <div class="container-fluid">

          <div class="row" style="text-align: center; margin-bottom:20px;">
            <h1>Elliot Fiske</h1>
            <h2 style="color:#5D5D5D;margin-top:-5px;">Portfolio</h2>
          </div>

          <div class="row">

            <a class="col-sm-6 col-xs-12" href="https://itunes.apple.com/us/app/monsterme-by-monstercreate/id1016620501?mt=8" target="_blank">
              <div class="card card--big">
                <div style="background-image: url(portfolio/monster.jpg)" class="card__image"></div>
                <h2 class="card__title">Monster Me</h2><span class="card__subtitle">By Elliot Fiske</span>
                <p class="card__text">Released a children's app after co-founding a company to create educational apps. Featured in <i>Best New Apps</i> for the Kid's Apps section.</p>
                <div class="card__action-bar">
                  <button class="card__button">iOS</button>
                  <button class="card__button">RELEASED APP</button>
                </div>
              </div>
            </a>

            <a class="col-sm-6 col-xs-12" href="http://elliotfiske.itch.io/ritual" target="_blank">
              <div class="card card--big">
                <div style="background-image: url(portfolio/ritual-screen.png)" class="card__image"></div>
                <h2 class="card__title">RITUAL</h2><span class="card__subtitle">By Elliot Fiske</span>
                <p class="card__text">One of my favorite games I've made so far. Completed in 72 hours for Ludum Dare 34. Earned 6th best 'mood' out of 1638 entries.</p>
                <div class="card__action-bar">
                  <button class="card__button">UNITY 2D</button>
                  <button class="card__button">GAME JAM</button>
                </div>
              </div>
            </a>
          </div>


          <div class="row">

            <a class="col-sm-6 col-xs-12" href="http://ludumdare.com/compo/ludum-dare-36/?action=preview&uid=15847" target="_blank">
              <div class="card card--big">
                <div style="background-image: url(portfolio/ludum_boulder1.gif)" class="card__image"></div>
                <h2 class="card__title">The Temple of Sharaab</h2><span class="card__subtitle">By Elliot Fiske</span>
                <p class="card__text">Delve into the Temple of Sharaab, dodging deadly traps and solving devious puzzles! Made for Ludum Dare 36.</p>
                <div class="card__action-bar">
                  <button class="card__button">UNREAL 4</button>
                  <button class="card__button">GAME JAM</button>
                </div>
              </div>
            </a>

            <a class="col-sm-6 col-xs-12" href="http://elliotfiske.com/shift/index.php" target="_blank">
              <div class="card card--big">
                <div style="background-image: url(portfolio/shapes.png)" class="card__image"></div>
                <h2 class="card__title" style="color: black;"></h2><span class="card__subtitle">By Elliot Fiske</span>
                <p class="card__text">You have to shift the shapes!!! Completed in 72 hours for Ludum Dare 35. Earned 32nd best 'fun' out of 1638 entries.</p>
                <div class="card__action-bar">
                  <button class="card__button">UNITY 2D</button>
                  <button class="card__button">GAME JAM</button>
                </div>
              </div>
            </a>
          </div>


          <div class="row">

            <a class="col-sm-6 col-xs-12" href="http://elliotfiske.com/slumber" target="_blank">
              <div class="card card--big">
                <div style="background-image: url(portfolio/slumber.png)" class="card__image"></div>
                <h2 class="card__title">SLUMBER</h2><span class="card__subtitle">By Elliot Fiske</span>
                <p class="card__text">3D networked multiplayer horror game created for an Advanced Graphics course. Led a team of 5 programmers to complete this quarter-long project.</p>
                <div class="card__action-bar">
                  <button class="card__button">C++</button>
                  <button class="card__button" style="padding-left:7px;">OPENGL</button>
                  <button class="card__button" style="padding-left:7px;padding-right:0;">SOCKET PROGRAMMING</button>
                </div>
              </div>
            </a>

            <a class="col-sm-6 col-xs-12" href="http://elliotfiske.com/gdc/www" target="_blank">
              <div class="card card--big">
                <div style="background-image: url(portfolio/juicy-2.png)" class="card__image"></div>
                <h2 class="card__title">Juicy Pong</h2><span class="card__subtitle">By Elliot Fiske and Thomas Steinke</span>
                <p class="card__text">Pong, but with powerups, particles and excitement! HTML5 game created for the Intel XDK Jam. Won first place and earned me free tickets to GDC!</p>
                <div class="card__action-bar">
                  <button class="card__button">HTML5 CANVAS</button>
                  <button class="card__button">GAME JAM</button>
                </div>
              </div>
            </a>
          </div>



          <div class="row">
            <a class="col-sm-6 col-xs-12" href="http://gamejolt.com/games/spellbound/80361" target="_blank">
              <div class="card card--big">
                <div style="background-image: url(portfolio/spellbound.png)" class="card__image"></div>
                <h2 class="card__title">Spellbound</h2><span class="card__subtitle">By Elliot Fiske, Thomas Steinke and Max Linsenbard</span>
                <p class="card__text">Platformer RPG game where you play a wizard jumping around throwing books at slimes. Created for the 2nd annual Indies vs. Gamers game jam!</p>
                <div class="card__action-bar">
                  <button class="card__button">HTML5 CANVAS</button>
                  <button class="card__button">GAME JAM</button>
                </div>
              </div>
            </a>

            <a class="col-sm-6 col-xs-12" href="http://gamejolt.com/games/quicksilver/85076" target="_blank">
              <div class="card card--big">
                <div style="background-image: url(https://fat.gfycat.com/WeightySoupyAmericanwarmblood.gif)" class="card__image"></div>
                <h2 class="card__title">Quicksilver</h2><span class="card__subtitle">By Elliot Fiske and Thomas Steinke</span>
                <p class="card__text">Game Boy compatible game where you play as a saw carving its way through a destructible environment! Created for GBJam 4.</p>
                <div class="card__action-bar">
                  <button class="card__button">HTML5 CANVAS</button>
                  <button class="card__button">GAME JAM</button>
                </div>
              </div>
            </a>
          </div>


          <div class="row">
            <a class="col-sm-6 col-xs-12" href="http://ludumdare.com/compo/ludum-dare-27/?action=preview&uid=25549" target="_blank">
              <div class="card card--big">
                <div style="background-image: url(portfolio/kickbox.png)" class="card__image"></div>
                <h2 class="card__title">Kickbox</h2><span class="card__subtitle">By Elliot Fiske and Thomas Steinke</span>
                <p class="card__text">A fun physics-based soccer game for 2 players! Every 10 seconds, a random event happens that completely changes the playing field!</p>
                <div class="card__action-bar">
                  <button class="card__button">PYTHON (PYGAME)</button>
                  <button class="card__button">GAME JAM</button>
                </div>
              </div>
            </a>


            <a class="col-sm-6 col-xs-12" href="http://globalgamejam.org/2014/games/flux" target="_blank">
              <div class="card card--big">
                <div style="background-image: url(portfolio/flux.png)" class="card__image"></div>
                <h2 class="card__title">FLUX</h2><span class="card__subtitle">By Elliot Fiske and Thomas Steinke</span>
                <p class="card__text">A puzzle game where one player blocks dangerous lasers, while the other player presses switches. Created for Global Game Jam 2014.</p>
                <div class="card__action-bar">
                  <button class="card__button">JAVA (LIBGDX)</button>
                  <button class="card__button">GAME JAM</button>
                </div>
              </div>
            </a>
          </div>


          <div class="row">
            <a class="col-sm-6 col-xs-12" href="http://ludumdare.com/compo/ludum-dare-24/comment-page-2/?action=preview&uid=15847" target="_blank">
              <div class="card card--big">
                <div style="background-image: url(portfolio/gungarden.png)" class="card__image"></div>
                <h2 class="card__title">Gun Garden</h2><span class="card__subtitle">By Elliot Fiske</span>
                <p class="card__text">An intense tower-defense style FPS! Upgrade your gun with seeds you plant in your garden, and defend against an onslaught of cubic enemies.</p>
                <div class="card__action-bar">
                  <button class="card__button">UNITY</button>
                  <button class="card__button">GAME JAM</button>
                </div>
              </div>
            </a>


            <a class="col-sm-6 col-xs-12" href="http://globalgamejam.org/2015/games/sabotage-0" target="_blank">
              <div class="card card--big">
                <div style="background-image: url(portfolio/sabotage.png)" class="card__image"></div>
                <h2 class="card__title"></h2><span class="card__subtitle">By Elliot Fiske, Thomas Steinke, Max Linsenbard and Aaron Jacobs</span>
                <p class="card__text">A party game where everyone holds a controller. When your controller vibrates, you secretly sabotage the rest of your teammates in a minigame!</p>
                <div class="card__action-bar">
                  <button class="card__button">UNITY</button>
                  <button class="card__button">GAME JAM</button>
                </div>
              </div>
            </a>
          </div>



          <div class="row">
            <a class="col-sm-6 col-xs-12" href="http://gamejolt.com/games/knights-with-guns/31979" target="_blank">
              <div class="card card--big">
                <div style="background-image: url(portfolio/kwg.png)" class="card__image"></div>
                <h2 class="card__title">Knights With Guns</h2><span class="card__subtitle">By Elliot Fiske and Thomas Steinke</span>
                <p class="card__text">A jump'n'shoot platformer with a randomly generated level, 3 weapons to choose from, and a fearsome dragon boss!</p>
                <div class="card__action-bar">
                  <button class="card__button">JAVA (LIBGDX)</button>
                  <button class="card__button">GAME JAM</button>
                </div>
              </div>
            </a>
          </div>            
        </div>

    </body>
</html>

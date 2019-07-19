<?php include './scripts/signature.php';?>
<html>
  <head>
    <?php include './scripts/main.php';?>
  </head>
  <body>
    <div class="header">
      <?php include './scripts/menu.php';?>
    </div>
    <div class="content">
      <div class="page_title"><b>Kevin Billeaud</b></div>
      <div class="link"><a href="images/Resume.pdf" target="_blank" style="color:#55ddff;text-decoration:underline!important;">Resume</a></div>
      <div class="control-panel">
        <div class="row">
          <a href="#myCarousel"><div class="control">Portfolio</div></a>
          <a href="#history"><div class="control">History</div></a>
        </div>
        <div class="row">
          <a href="#lead_form"><div class="control">Contact</div></a>
          <a href="#link_section"><div class="control">Links</div></a>
        </div>
        <p class="easter_egg_text">This site has Easter Eggs hidden. First one is free, click on my name 5 times.</p>
      </div>
      <div class="section">
        <div class="intro" id="intro">
          <div class="profile">
            <!-- <img src="images/kev.jpeg" /> -->
            <div class="profile_title" onclick="clickCount(1)"><b>Kevin</b></div>
            <p class="intro_text">INTJ</p>
            <p class="intro_text">29 years old</p>
            <!-- <p class="intro_text">Sales Engineer - SaaS</p> -->
            <p class="intro_text">Project focused individual with love for taking something from concept to production</p>
            <p class="intro_text">Work ethic and communication skills learned in the service industry, plus sofware development abilities, combine to make a highly effective team member</p>
          </div>
        </div>
        <div>
        <a class="scroll_button" href="#myCarousel">
          <svg class="svg-icon" viewBox="0 0 20 20">
						<path fill="none" d="M14.989,9.491L6.071,0.537C5.78,0.246,5.308,0.244,5.017,0.535c-0.294,0.29-0.294,0.763-0.003,1.054l8.394,8.428L5.014,18.41c-0.291,0.291-0.291,0.763,0,1.054c0.146,0.146,0.335,0.218,0.527,0.218c0.19,0,0.382-0.073,0.527-0.218l8.918-8.919C15.277,10.254,15.277,9.784,14.989,9.491z"></path>
					</svg>
        </a></div>
      </div>
      <div class="section">
        <div class="carousel slide" data-ride="carousel" id="myCarousel" name="myCauousel">
          <div class="carousel_title">Here is some work:</div>
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <!-- <li data-target="#myCarousel" data-slide-to="4"></li> -->
            <!-- <li data-target="#myCarousel" data-slide-to="5"></li> -->
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="images/resources_page.png" />
              <div class="carousel-caption">
                <h3>Restaurant.OpenTable.com/Resources</h3>
                <p>While working for OpenTable, I redesigned this Resources Page.</p>
              </div>
            </div>
            <!-- <div class="item">
              <img src="http://i281.photobucket.com/albums/kk237/k12t08b/Screen%20Shot%202018-09-22%20at%209.02.19%20PM_zpsuiksatcu.png" />
              <div class="carousel-caption">
                <h3>TV-Host</h3>
                <p>This was  GUI built for Customer Service at OpenTable as a prototype for an alert system.</p>
              </div>
            </div> -->
            <div class="item">
              <img src="images/dropr.png" style="max-width:250px;"/>
              <div class="carousel-caption">
                <h3>Moments (AKA Dropr)</h3>
                <p>Geocaching application built on the Android platform.</p>
              </div>
            </div>
            <div class="item">
              <img src="https://beta-static.photobucket.com/images/kk237/k12t08b/2/56774d14-0302-4c82-b20b-b4f994760108-original.png?width=1920&height=1080&fit=bounds" />
              <div class="carousel-caption">
                <h3></h3>
                <p>A Survey designed with pure JavaScript for OpenTable.</p>
              </div>
            </div>
            <!-- <div class="item">
              <img src="http://i281.photobucket.com/albums/kk237/k12t08b/Screen%20Shot%202018-08-26%20at%207.20.36%20PM_zpsyczfknny.png" />
              <div class="carousel-caption">
                <h3>TV-Host</h3>
                <p>This was  GUI built for Customer Service at OpenTable.</p>
              </div>
            </div> -->
            <div class="item">
              <img src="images/screenshot-sample.png" />
              <div class="carousel-caption">
                <h3>Image Manipulation</h3>
                <p>Built with Gimp2.0</p>
              </div>
            <!-- </div>
            //place for logo
            <div class="item">
              <img src="images/screenshot-sample.png" />
              <div class="carousel-caption">
                <h3>Image Manipulation</h3>
                <p>Built with Gimp2.0</p>
              </div>
            </div> -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
      <div class="section">
        <div class="item_row">
          <div class="item_row_title">Some technologies worked with:</div>
          <div class="item_row_set">
            <img class="item_row_logo" src="images/statamic_logo.png" />
            <img class="item_row_logo" src="images/a_studio_logo.png" />
            <img class="item_row_logo" onclick="clickCount(2)" src="images/google_logo.png" />
            <img class="item_row_logo" src="images/github_logo.png" />
            <img class="item_row_logo" src="images/react_logo.png" style="margin:10px 7.5px;width:75px;" />
            <img class="item_row_logo" src="images/apache-logo.png" />
            <img class="item_row_logo" src="images/wp_logo.png" />
            <img class="item_row_logo" src="images/ss_logo.svg" />
            <img class="item_row_logo" src="images/java_logo.png" style="height:50px;"/>
            <img class="item_row_logo" src="images/maps_logo.png" />
          </div>
        </div>
      </div>
      <div class="section" id="history">
        <div class="section_title">History</div>
        <div class="timeline hideContent">
          <div class="timeline_container container_left">
            <div class="timeline_content">
              <div class="list_item_title">FareHarbor --  February 2019 - Current</div>
              <div class="page_text">I recently started an Onboarding position with FareHarbor, working as a Client Dashboard Specialist. My job is to know the FareHarbor Dashboard in and out, building the best configurations to help small tourism-based businesses thrive in an online world. <br><br> I've also initiated efforts to improve corporate security and automate services within the product.</div>
            </div>
          </div>
          <div class="timeline_container container_right">
            <div class="timeline_content">
              <div class="list_item_title">OpenTable -- September 2017 - February 2019</div>
              <div class="page_text">In this role with OpenTable, I learned to quickly troubleshoot and repair network mis-configurations, while maintaining helpful conversation with the customer. I also created 301 Redirects for the Engineering department and built and hosted the GUI for a reporting tool used by Customer Support with multiple APIs, HTML5, CSS3, and JavaScript. Assistance was also provided to our T2 techs with advanced troubleshooting.</div>
            </div>
          </div>
          <div class="timeline_container container_left">
            <div class="timeline_content">
              <div class="list_item_title">Move to Denver -- May 2016</div>
              <div class="page_text">The decision was made to move to the mountains to pursue a career in tech, while having the opportunity to snowboard and hike the Rockies.</div>
            </div>
          </div>
          <div class="timeline_container container_right">
            <div class="timeline_content">
              <div class="list_item_title">Centennial Arts -- October 2015 - February 2016</div>
              <div class="page_text">In this position,responsibilities included using jQuery and JSON to minimize the network bandwidth a web-app would need, thus speeding up load time. Also wireframing the future styling of an existing web application, thoughtfully redesigning each function.</div>
            </div>
          </div>
        </div>
      </div>
      <div class="section" id="link_section">
        <div class="section_title">Links</div>
        <div style="text-align: center;margin-right:60px;">
          <a href="https://github.com/coffeeAdd1ct">
            <div class="row_50 left">
              <img class="row_50_image" src="images/logo.png" />
            </div>
            <div class="row_50 right row_50_text">
              Check out my Github!
              <p>The biggest project is codenamed Drop. A geocaching application built for Android, implementing Google Maps API and a 3rd party API.</p>
            </div>
          </a>
        </div>
        <div style="text-align: center;margin-right:60px;">
          <a href="https://theteacherdownthehall.com">
            <div class="row_50 left">
              <img class="row_50_image" src="images/logo0.png" />
            </div>
            <div class="row_50 right row_50_text">
              A custom website built for a client
            </div>
          </a>
        </div>
        <div>
          <div class="row_50 row_100_link"><a href="hobby.html">A loose collection of hobbies.</a></div>
        </div>
      </div>
      <div class="section" id="lead_form">
        <div class="lead_form_container">
          <div class="form_text">
            <p>If interested in services, please fill out the form below:</p>
          </div>
          <form action="form.php" method="post">
            <input id="name_input" placeholder="name" name="name"></input><br>
            <input id="busi_name_input" placeholder="business name" name="busi_name"></input><br>
            <input id="email_input" placeholder="email" name="email"></input><br>
            <input id="phone_input" placeholder="phone" name="phone"></input><br>
            <input id="website_input" placeholder="website" name="website"></input><br>
            <input id="comment_input" placeholder="comments" name="comments"></input><br>
            <button class="input" id="submit_button" type="submit"><b>SUBMIT</b></button>
          </form>
        </div>
      </div>
      <div class="contact_icons">
        <a href="mailto:billeaudk@gmail.com?Subject=Hello%20I%20am%20interested%20in%20your%20services" target="_top">
          <img class="icon" src="images/gmail_logo.png" />
        </a>
        <a href="https://www.linkedin.com/">
          <img class="icon" src="images/li_logo.png" />
        </a>
        <a href="https://www.facebook.com/kbilleaud">
          <img class="icon" src="images/fb_logo.png" />
        </a>
        <a href="https://www.instagram.com/b_kevn/">
          <img class="icon" src="images/ig_logo.png" />
        </a>
      </div>
    </div>
    <div class="footer">
    </div>
  </body>
<html>

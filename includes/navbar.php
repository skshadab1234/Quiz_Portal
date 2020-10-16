
                        <div class="profile_dropdown">
                          <div class="top_profile">
                                <div class="row">
                                  <div class="col-2 col-sm-2 col-lg-2 col-md-2 col-xl-2">
                                    <div class="avatar" id="profile_dropdown_picture">
                                      <img src="<?= $user['picture_link'] ?>" alt="Kobe Bryant">
                                    </div> 
                                  </div>
                                  <div class="col-10 col-sm-10 col-lg-10 col-md-10 col-xl-10 profile_details">
                                    <h5 class="my_name"><?= $user['Name'] ?></h5>
                                    <p class="my_email"><?= $user['google_email'] ?></p>
                                    <a href="https://myaccount.google.com" target="_blank">Manage your Google Account</a>
                                  </div>
                                </div>
                          </div>

                          <div class="bottom_profile">
                            <div class="container" style="position: relative;top: 12px;">
                                 <a href="myprj.php">
                                    <div class="row list_item_profile">
                                         <div class="col-2 col-sm-2">
                                            <i class="fa fa-address-book-o"></i>
                                         </div>
                                         <div class="col-10 col-sm-10">
                                           <h5>Your Projects</h5>
                                         </div>
                                     </div>
                                 </a>

                                 <a href="javascript:void(0)"  onclick="logout()">
                                  <div class="row list_item_profile">
                                       <div class="col-2 col-sm-2">
                                          <i class="fa fa-sign-out"></i>
                                       </div>
                                       <div class="col-10 col-sm-10">
                                         <h5>Signout</h5>
                                       </div>
                                   </div>
                               </a>

                                 <a href="#">
                                  <div class="row list_item_profile">
                                       <div class="col-2 col-sm-2">
                                          <i class="fa fa-cog"></i>
                                       </div>
                                       <div class="col-8 col-sm-8">
                                         <h5>Settings</h5>
                                       </div>
                                       <div class="col-2 col-sm-2">
                                         <i class="fa fa-angle-right"></i>
                                       </div>
                                   </div>
                                 </a>
                            </div>
                          </div>
                        </div>
 <header class="header">
    <section class="header-start">
      <div class="icon" id="menu_icon" title="SHADABZONE Home" style="width: 15%;">
        <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="" style="pointer-events: none; display: block; width: 100%; height: 100%;">
          <g>
            <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
          </g>
        </svg>
      </div>
      <div class="logo" style="width: 100%;">
        <h4><a href="index<?= SITE_FILE_EXTENSION ?>"><?= FRONT_SITE_NAME ?></a></h4>
      </div>
    </section>
    <section class="header-center">
        <div class="input-search-box">
          <div class="input-wrap">
        <form action="#">
              <input class="input-search" type="search" placeholder="Search for Projects">
          </div>
          <button type="submit" class="input-search-button">
            <div class="icon">
              <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;">
                <g class="style-scope yt-icon">
                  <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" class="style-scope yt-icon"></path>
                </g>
              </svg>
            </div>
          </button>
      </form>
        </div>

    </section>
    <section class="header-end">

      <div class="icon" title="Search" id="search_mobile_nav">
        <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;color: red">
          <g class="style-scope yt-icon">
            <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" class="style-scope yt-icon"></path>
          </g>
        </svg>
      </div>

     
        <?php
                if(isset($_SESSION['USER_ID'])){
                        ?>
                          <div class="icon" title="Notification">
                          <i class="fa fa-bell-o"></i>
                        </div>
                          <a href="upload_project<?= SITE_FILE_EXTENSION ?>">
                         <div class="icon" title="Upload" style="padding-right: 10px;">
                              <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;">
                                  <g class="style-scope yt-icon">
                                    <path d="M17 10.5V7c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1v-3.5l4 4v-11l-4 4zM14 13h-3v3H9v-3H6v-2h3V8h2v3h3v2z" class="style-scope yt-icon"></path>
                                  </g>
                            </svg>
                        </div>
                          </a>

                        <div class="avatar" id="open_dropdown">
                          <img src="<?= $user['picture_link'] ?>" alt="Kobe Bryant">
                        </div> 

                        <?php
                }else{
                        ?>
                        <div class="g-signin2" data-onsuccess="gmailLogIn" id="gmaillogin_hide_on_300px_less_than"></div>
                        <?php
                }
                ?>
    </section>
  </header>

<!-- search bar on mobile view -->
 <header class="header1">
    <section class="header-start">
      <div class="icon" id="hide_search_bar" title="SHADABZONE Home">
        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M2.117 12l7.527 6.235-.644.765-9-7.521 9-7.479.645.764-7.529 6.236h21.884v1h-21.883z"/></svg>
      </div>
    </section>
    <section class="header-center1">
        <div class="input-search-box">
          <div class="input-wrap">
        <form action="#">
              <input class="input-search" type="search" placeholder="Search for Projects">
          </div>
          <button type="submit" class="input-search-button">
            <div class="icon">
              <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;">
                <g class="style-scope yt-icon">
                  <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" class="style-scope yt-icon"></path>
                </g>
              </svg>
            </div>
          </button>
      </form>
        </div>
    </section>
  </header>

  <nav class="wide-nav">
    <section class="nav-section">
      <ul class="wide-nav-list">
       <a href="index<= SITE_FILE_EXTENSION ?>">
          <li class="wide-nav-item selected">
            <div class="icon">
              <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;">
                <g class="style-scope yt-icon">
                  <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8" class="style-scope yt-icon"></path>
                </g>
              </svg>
            </div>
            <span class="wide-nav-label">Home</span>
          </li>
       </a>
       <a href="trending_projects<?= SITE_FILE_EXTENSION ?>">
          <li class="wide-nav-item">
            <div class="icon">
             <i class="fa fa-line-chart"  class="style-scope yt-icon"></i>
            </div>
            <span class="wide-nav-label">Trending Project</span>
          </li>
       </a>

       <a href="inbox<?= SITE_FILE_EXTENSION ?>">
        <li class="wide-nav-item">
          <div class="icon">
            <i class="fa fa-bell-o"></i>
          </div>
          <span class="wide-nav-label">Notifications</span>
        </li>
       </a>
      </ul>
    </section>
    <section class="nav-section">
      <ul class="wide-nav-list">
        <li class="wide-nav-item">
          <div class="icon">
            <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="pointer-events: none; display: block; width: 100%; height: 100%;">
              <g class="style-scope yt-icon">
                <path d="M11.9 3.75c-4.55 0-8.23 3.7-8.23 8.25H.92l3.57 3.57.04.13 3.7-3.7H5.5c0-3.54 2.87-6.42 6.42-6.42 3.54 0 6.4 2.88 6.4 6.42s-2.86 6.42-6.4 6.42c-1.78 0-3.38-.73-4.54-1.9l-1.3 1.3c1.5 1.5 3.55 2.43 5.83 2.43 4.58 0 8.28-3.7 8.28-8.25 0-4.56-3.7-8.25-8.26-8.25zM11 8.33v4.6l3.92 2.3.66-1.1-3.2-1.9v-3.9H11z" class="style-scope yt-icon"></path>
              </g>
            </svg>
          </div>
          <span class="wide-nav-label">History</span>
        </li>
        <li class="wide-nav-item">
          <div class="icon">
            <i class="fa fa-code"></i>
          </div>
          <span class="wide-nav-label">Your Projects</span>
        </li>
        <li class="wide-nav-item">
          <div class="icon">
            <i class="fa fa-heart-o"></i>
          </div>
          <span class="wide-nav-label">Wishlist</span>
        </li>
      </ul>
    </section>

    <!-- 
    <section class="nav-section">
      <h3 class="nav-section-header">Subscriptions</h3>
      <li class="wide-nav-item">
        <div class="avatar">
          <img src="https://yt3.ggpht.com/a/AATXAJxuvwdB2H7bQQyQk8Aqu28rYXWmz_WJWjbwgcBD=s88-c-k-c0xffffffff-no-rj-mo" alt="Kobe Bryant">
        </div>
        <span class="wide-nav-label">Marques Brownlee</span>
        <div class="notification-icon">
          <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="pointer-events: none; display: block; width: 100%; height: 100%;">
            <g class="style-scope yt-icon">
              <path d="M16.94 6.91l-1.41 1.45c.9.94 1.46 2.22 1.46 3.64s-.56 2.71-1.46 3.64l1.41 1.45c1.27-1.31 2.05-3.11 2.05-5.09s-.78-3.79-2.05-5.09zM19.77 4l-1.41 1.45C19.98 7.13 21 9.44 21 12.01c0 2.57-1.01 4.88-2.64 6.54l1.4 1.45c2.01-2.04 3.24-4.87 3.24-7.99 0-3.13-1.23-5.96-3.23-8.01zM7.06 6.91c-1.27 1.3-2.05 3.1-2.05 5.09s.78 3.79 2.05 5.09l1.41-1.45c-.9-.94-1.46-2.22-1.46-3.64s.56-2.71 1.46-3.64L7.06 6.91zM5.64 5.45L4.24 4C2.23 6.04 1 8.87 1 11.99c0 3.13 1.23 5.96 3.23 8.01l1.41-1.45C4.02 16.87 3 14.56 3 11.99s1.01-4.88 2.64-6.54z" class="style-scope yt-icon"></path>
              <circle cx="12" cy="12" r="3" class="style-scope yt-icon"></circle>
            </g>
          </svg>
        </div>
      </li>
      <li class="wide-nav-item">
        <div class="avatar">
          <img src="https://yt3.ggpht.com/a/AATXAJyYwNvq47qkz_a1oWUKU4tnyP84T8UelpRf8jqGcA=s88-c-k-c0xffffffff-no-rj-mo" alt="Netflix UI Engineering">
        </div>
        <span class="wide-nav-label">Netflix UI Engineering</span>
        <div class="news-dot"></div>
      </li>
      <li class="wide-nav-item">
        <div class="avatar">
          <img src="https://yt3.ggpht.com/a/AATXAJzMvsKB7s_HIEoAvhxTnv5uwK5eyl74eXVTDTib=s88-c-k-c0xffffffff-no-rj-mo" alt="Bill Gates">
        </div>
        <span class="wide-nav-label">Bill Gates</span>
        <div class="news-dot"></div>
      </li>
      <li class="wide-nav-item">
        <div class="avatar">
          <img src="https://yt3.ggpht.com/a/AATXAJxblS7Fn0EJ03e1zdvNd6XaayIKRSbNQJr_OffQwQ=s88-c-k-c0xffffffff-no-rj-mo" alt="Chess.com">
        </div>
        <span class="wide-nav-label">Chess.com</span>
      </li>
      <li class="wide-nav-item">
        <div class="avatar">
          <img src="https://yt3.ggpht.com/a/AATXAJy-zMKFgGrEl0gb5DqtTTMxB62kyGmz9Atb_vb__g=s88-c-k-c0xffffffff-no-rj-mo" alt="KEXP">
        </div>
        <span class="wide-nav-label">KEXP</span>
        <div class="news-dot"></div>

      </li>
      <li class="wide-nav-item">
        <div class="avatar">
          <img src="https://yt3.ggpht.com/a/AATXAJyXCEtzW9oCxl80Tpp_9a27o5YLCu3wdCoSY_yxs3o=s88-c-k-c0xffffffff-no-rj-mo" alt="Google Developers">
        </div>
        <span class="wide-nav-label">Google Developers</span>
        <div class="news-dot"></div>

      </li>
      <li class="wide-nav-item">
        <div class="avatar">
          <img src="https://yt3.ggpht.com/a/AATXAJx70Y57iE1UhGn64LzdI4Rf5Aw5jNrl1vK6SULWuA=s88-c-k-c0xffffffff-no-rj-mo" alt="NBA">
        </div>
        <span class="wide-nav-label">NBA</span>
      </li>
      <li class="wide-nav-item">
        <div class="icon">
          <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="pointer-events: none; display: block; width: 100%; height: 100%;">
            <g class="style-scope yt-icon">

              <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z" class="style-scope yt-icon"></path>
            </g>
          </svg>

        </div>
        <span class="wide-nav-label">Show more</span>
      </li>
    </section>
    <section class="nav-section">
      <h3 class="nav-section-header">More from youtube</h3>
      <li class="wide-nav-item">
        <div class="icon">
          <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="pointer-events: none; display: block; width: 100%; height: 100%;">
            <g class="style-scope yt-icon">

              <path fill-rule="nonzero" d="M21.78 8s-.2-1.37-.8-1.97c-.75-.8-1.6-.8-2-.85C16.2 4.98 12 5 12 5s-4.18-.02-6.97.18c-.4.05-1.24.05-2 .85-.6.6-.8 1.97-.8 1.97s-.2 1.63-.23 3.23v1.7c.03 1.6.23 3.2.23 3.2s.2 1.4.8 2c.76.8 1.75.76 2.2.85 1.57.15 6.6.18 6.77.18 0 0 4.2 0 7-.2.38-.04 1.23-.04 2-.84.6-.6.8-1.98.8-1.98s.2-1.6.2-3.22v-1.7c-.02-1.6-.22-3.22-.22-3.22zm-11.8 7V9.16l5.35 3.03L9.97 15z" class="style-scope yt-icon"></path>
            </g>
          </svg>
        </div>
        <span class="wide-nav-label">YouTube Premium</span>
      </li>
      <li class="wide-nav-item">
        <div class="icon">
          <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="pointer-events: none; display: block; width: 100%; height: 100%;">
            <g fill-rule="evenodd" class="style-scope yt-icon">
              <path d="M22,13V8l-5-3l-5,3l0,0L7,5L2,8v5l10,6L22,13z M9,11H7v2H6v-2H4v-1h2V8h1v2h2V11z M15,13 c-0.55,0-1-0.45-1-1s0.45-1,1-1s1,0.45,1,1S15.55,13,15,13z M18,11c-0.55,0-1-0.45-1-1s0.45-1,1-1s1,0.45,1,1S18.55,11,18,11z" class="style-scope yt-icon"></path>
            </g>
          </svg>

        </div>
        <span class="wide-nav-label">Gaming</span>
      </li>
      <li class="wide-nav-item">
        <div class="icon">
          <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="pointer-events: none; display: block; width: 100%; height: 100%;">
            <g class="style-scope yt-icon">
              <path d="M16.94 6.91l-1.41 1.45c.9.94 1.46 2.22 1.46 3.64s-.56 2.71-1.46 3.64l1.41 1.45c1.27-1.31 2.05-3.11 2.05-5.09s-.78-3.79-2.05-5.09zM19.77 4l-1.41 1.45C19.98 7.13 21 9.44 21 12.01c0 2.57-1.01 4.88-2.64 6.54l1.4 1.45c2.01-2.04 3.24-4.87 3.24-7.99 0-3.13-1.23-5.96-3.23-8.01zM7.06 6.91c-1.27 1.3-2.05 3.1-2.05 5.09s.78 3.79 2.05 5.09l1.41-1.45c-.9-.94-1.46-2.22-1.46-3.64s.56-2.71 1.46-3.64L7.06 6.91zM5.64 5.45L4.24 4C2.23 6.04 1 8.87 1 11.99c0 3.13 1.23 5.96 3.23 8.01l1.41-1.45C4.02 16.87 3 14.56 3 11.99s1.01-4.88 2.64-6.54z" class="style-scope yt-icon"></path>
              <circle cx="12" cy="12" r="3" class="style-scope yt-icon"></circle>
            </g>
          </svg>

        </div>
        <span class="wide-nav-label">Live</span>
      </li>
    </section> -->


    <section class="nav-section">
      <ul class="wide-nav-list">
        <li class="wide-nav-item">
          <div class="icon">
            <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="pointer-events: none; display: block; width: 100%; height: 100%;">
              <g class="style-scope yt-icon">

                <path d="M19.43 12.98c.04-.32.07-.64.07-.98s-.03-.66-.07-.98l2.1-1.65c.2-.15.25-.42.13-.64l-2-3.46c-.12-.22-.4-.3-.6-.22l-2.5 1c-.52-.4-1.08-.73-1.7-.98l-.37-2.65c-.06-.24-.27-.42-.5-.42h-4c-.27 0-.48.18-.5.42l-.4 2.65c-.6.25-1.17.6-1.7.98l-2.48-1c-.23-.1-.5 0-.6.22l-2 3.46c-.14.22-.08.5.1.64l2.12 1.65c-.04.32-.07.65-.07.98s.02.66.06.98l-2.1 1.65c-.2.15-.25.42-.13.64l2 3.46c.12.22.4.3.6.22l2.5-1c.52.4 1.08.73 1.7.98l.37 2.65c.04.24.25.42.5.42h4c.25 0 .46-.18.5-.42l.37-2.65c.6-.25 1.17-.6 1.7-.98l2.48 1c.23.1.5 0 .6-.22l2-3.46c.13-.22.08-.5-.1-.64l-2.12-1.65zM12 15.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5 3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5z" class="style-scope yt-icon"></path>
              </g>
            </svg>
          </div>
          <span class="wide-nav-label">Settings</span>
        </li>
        <li class="wide-nav-item">

          <div class="icon">
            <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="pointer-events: none; display: block; width: 100%; height: 100%;">
              <g class="style-scope yt-icon">
                <path d="M14.4 6L14 4H5v17h2v-7h5.6l.4 2h7V6z" class="style-scope yt-icon"></path>
              </g>
            </svg>
          </div>
          <span class="wide-nav-label">Report history</span>

        </li>
        <li class="wide-nav-item">
          <div class="icon">
            <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="pointer-events: none; display: block; width: 100%; height: 100%;">
              <g class="style-scope yt-icon">
                <path d="M0 0h24v24H0z" fill="none" class="style-scope yt-icon"></path>
                <path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-7 12h-2v-2h2v2zm0-4h-2V6h2v4z" class="style-scope yt-icon"></path>
              </g>
            </svg>
          </div>
          <span class="wide-nav-label">Send feedback</span>
        </li>
      </ul>
    </section>
    <footer>
      <section class="footer-section">
        <a class="footer-item">About</a>
        <a class="footer-item">Copyright</a>
        <a class="footer-item">Contact us</a>
        <a class="footer-item">Creators</a>
        <a class="footer-item">Developers</a>
      </section>
      <section class="footer-section">
        <a class="footer-item">Terms</a>
        <a class="footer-item">Privacy</a>
        <a class="footer-item">Policy & Safety</a>
        <a class="footer-item">How SHADABZONE works</a>
        <a class="footer-item">Test new features</a>
      </section>
      <section class="footer-section copyright">© 2020 SHADABZONE LLC</section>
    </footer>
  </nav>


  <!-- for laptop view -->

    <nav class="narrow-nav">
    <ul class="narrow-nav-list">
      <a href="#">
        <li class="narrow-nav-item selected">
          <div class="icon">
            <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;">
              <g class="style-scope yt-icon">
                <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8" class="style-scope yt-icon"></path>
              </g>
            </svg>
          </div>
          <span class="narrow-nav-label">Home</span>
        </li>
      </a>

      <a href="#">
        <li class="narrow-nav-item">
          <div class="icon">
            <i class="fa fa-line-chart"></i>
          </div>
          <span class="narrow-nav-label">Projects</span>
        </li>
      </a>

      <a href="#">
         <li class="narrow-nav-item">
          <div class="icon">
            <i class="fa fa-heart-o"></i>
          </div>
          <span class="narrow-nav-label">Wishlist</span>
        </li>
      </a>
    </ul>
  </nav>

<!-- for mobile view -->
<div class="overlay_nav">
  <nav class="mobile-wide-nav">
    <section class="header-start" style="position: relative;left: 11%;top: 3px;">
      <div class="icon" id="hamburger_slide" title="SHADABZONE Home">
        <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="" style="pointer-events: none; display: block; width: 100%; height: 100%;">
          <g>
            <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
          </g>
        </svg>
      </div>
      <div class="logo">
        <h4><a href="index<?= SITE_FILE_EXTENSION ?>"><?= FRONT_SITE_NAME ?></a></h4>
      </div>
    </section>

    <section class="nav-section">
      <ul class="wide-nav-list">
        <li class="wide-nav-item selected">
          <div class="icon">
            <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" style="pointer-events: none; display: block; width: 100%; height: 100%;">
              <g class="style-scope yt-icon">
                <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8" class="style-scope yt-icon"></path>
              </g>
            </svg>
          </div>
          <span class="wide-nav-label">Home</span>
        </li>
        <li class="wide-nav-item">
          <div class="icon">
           <i class="fa fa-line-chart"  class="style-scope yt-icon"></i>
          </div>
          <span class="wide-nav-label">Trending Project</span>

        </li>
        <li class="wide-nav-item">
          <div class="icon">
            <i class="fa fa-bell-o"></i>
          </div>
          <span class="wide-nav-label">Notifications</span>
        </li>
      </ul>
    </section>
    <section class="nav-section">
      <ul class="wide-nav-list">
        <li class="wide-nav-item">
          <div class="icon">
            <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="pointer-events: none; display: block; width: 100%; height: 100%;">
              <g class="style-scope yt-icon">
                <path d="M11.9 3.75c-4.55 0-8.23 3.7-8.23 8.25H.92l3.57 3.57.04.13 3.7-3.7H5.5c0-3.54 2.87-6.42 6.42-6.42 3.54 0 6.4 2.88 6.4 6.42s-2.86 6.42-6.4 6.42c-1.78 0-3.38-.73-4.54-1.9l-1.3 1.3c1.5 1.5 3.55 2.43 5.83 2.43 4.58 0 8.28-3.7 8.28-8.25 0-4.56-3.7-8.25-8.26-8.25zM11 8.33v4.6l3.92 2.3.66-1.1-3.2-1.9v-3.9H11z" class="style-scope yt-icon"></path>
              </g>
            </svg>
          </div>
          <span class="wide-nav-label">History</span>
        </li>
        <li class="wide-nav-item">
          <div class="icon">
            <i class="fa fa-code"></i>
          </div>
          <span class="wide-nav-label">Your Projects</span>
        </li>
        <li class="wide-nav-item">
          <div class="icon">
            <i class="fa fa-heart-o"></i>
          </div>
          <span class="wide-nav-label">Wishlist</span>
        </li>
      </ul>
    </section>

    <section class="nav-section">
      <ul class="wide-nav-list">
        <li class="wide-nav-item">
          <div class="icon">
            <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="pointer-events: none; display: block; width: 100%; height: 100%;">
              <g class="style-scope yt-icon">

                <path d="M19.43 12.98c.04-.32.07-.64.07-.98s-.03-.66-.07-.98l2.1-1.65c.2-.15.25-.42.13-.64l-2-3.46c-.12-.22-.4-.3-.6-.22l-2.5 1c-.52-.4-1.08-.73-1.7-.98l-.37-2.65c-.06-.24-.27-.42-.5-.42h-4c-.27 0-.48.18-.5.42l-.4 2.65c-.6.25-1.17.6-1.7.98l-2.48-1c-.23-.1-.5 0-.6.22l-2 3.46c-.14.22-.08.5.1.64l2.12 1.65c-.04.32-.07.65-.07.98s.02.66.06.98l-2.1 1.65c-.2.15-.25.42-.13.64l2 3.46c.12.22.4.3.6.22l2.5-1c.52.4 1.08.73 1.7.98l.37 2.65c.04.24.25.42.5.42h4c.25 0 .46-.18.5-.42l.37-2.65c.6-.25 1.17-.6 1.7-.98l2.48 1c.23.1.5 0 .6-.22l2-3.46c.13-.22.08-.5-.1-.64l-2.12-1.65zM12 15.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5 3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5z" class="style-scope yt-icon"></path>
              </g>
            </svg>
          </div>
          <span class="wide-nav-label">Settings</span>
        </li>
        <li class="wide-nav-item">

          <div class="icon">
            <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="pointer-events: none; display: block; width: 100%; height: 100%;">
              <g class="style-scope yt-icon">
                <path d="M14.4 6L14 4H5v17h2v-7h5.6l.4 2h7V6z" class="style-scope yt-icon"></path>
              </g>
            </svg>
          </div>
          <span class="wide-nav-label">Report history</span>

        </li>
        <li class="wide-nav-item">
          <div class="icon">
            <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="pointer-events: none; display: block; width: 100%; height: 100%;">
              <g class="style-scope yt-icon">
                <path d="M0 0h24v24H0z" fill="none" class="style-scope yt-icon"></path>
                <path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-7 12h-2v-2h2v2zm0-4h-2V6h2v4z" class="style-scope yt-icon"></path>
              </g>
            </svg>
          </div>
          <span class="wide-nav-label">Send feedback</span>
        </li>
      </ul>
    </section>
    <footer>
      <section class="footer-section">
        <a class="footer-item">About</a>
        <a class="footer-item">Copyright</a>
        <a class="footer-item">Contact us</a>
        <a class="footer-item">Creators</a>
        <a class="footer-item">Developers</a>
      </section>
      <section class="footer-section">
        <a class="footer-item">Terms</a>
        <a class="footer-item">Privacy</a>
        <a class="footer-item">Policy & Safety</a>
        <a class="footer-item">How SHADABZONE works</a>
        <a class="footer-item">Test new features</a>
      </section>
      <section class="footer-section copyright">© 2020 SHADABZONE LLC</section>
    </footer>
  </nav>
</div>
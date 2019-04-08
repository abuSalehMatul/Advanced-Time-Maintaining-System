<!DOCTYPE html>

<!-- Mirrored from clockify.me/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Apr 2019 07:12:48 GMT -->
<head>
 
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>The TimeREC</title>
 
 
     <link rel="shortcut icon" href="{{asset('image/REC-Icon2.png')}}" type="image/x-icon">

  <link rel='stylesheet' href={{asset('css/main-012.css')}}>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
  <link rel="mask-icon" href="assets/images/favicon.svg" color="#03A9F4">
    @include('partials.frontCSS')
 
</head>
<body>
<style>
html {
    position: relative;
    min-height: 100%;
}
.carousel-fade .carousel-inner .item {
    opacity: 0;
    transition-property: opacity;
}
.carousel-fade .carousel-inner .active {
    opacity: 1;
}
.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
    left: 0;
    opacity: 0;
    z-index: 1;
}
.carousel-fade .carousel-inner .next.left,
.carousel-fade .carousel-inner .prev.right {
    opacity: 1;
}
.carousel-fade .carousel-control {
    z-index: 2;
}
@media all and (transform-3d),
(-webkit-transform-3d) {
    .carousel-fade .carousel-inner > .item.next,
    .carousel-fade .carousel-inner > .item.active.right {
        opacity: 0;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.prev,
    .carousel-fade .carousel-inner > .item.active.left {
        opacity: 0;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.next.left,
    .carousel-fade .carousel-inner > .item.prev.right,
    .carousel-fade .carousel-inner > .item.active {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
    }
}
.item:nth-child(1) {
    background: url('{{asset('image/Times Rec.final-01.png')}}') no-repeat center center fixed;
   
}
.item:nth-child(2) {
    background: url('{{asset('image/Times Rec.final-02.png')}}') no-repeat center center fixed;
 
}
.item:nth-child(3) {
    background:url('{{asset('image/Times Rec.final-01.png')}}') no-repeat center center fixed;
   
}
.carousel {
    z-index: -99;
}
.carousel .item {
    position: relative;
    width: 100%;
    height: 100%;
}
.title {
  text-align: center;
  margin-top: 10px;
  padding: 10px;
  text-shadow: 2px 2px #000;
  color: #FFF;
}
</style>

@include('Front.header')

<div class="carousel slide carousel-fade" data-ride="carousel">
     <div class="carousel-inner" role="listbox">
<section id="hero" class="hero item active">
    <div class="hero__content awesome">
        <h1 class="hero__content__header awesome">The only truly free time tracker for teams</h1>
        <p class="hero__content__text_about awesome">The TimeREC is the only 100% free time tracking software. It's a simple time tracker and timesheet app that lets you and your team track work hours on projects. Unlimited users, free forever.</p>
        <a href="signup.html">
        <button class="hero__button">Get started</button>
        </a>
       
    </div>
    
 
</section>
 </div>
</div>
  <section class="testimonials">
    <div class="testimonials-overlay"><a target="_blank" href="customers.html">See what else people say &rarr;</a></div>
    <div>
      <p class="testimonials__star">★★★★★</p>
      <p class="testimonials__rating">Excellent timekeeper</p>
      <p class="testimonials__text">“Simple, great user interface, works with our company's payroll system, and great support.”</p>
      <p class="testimonials__review">— Capterra review</p>
    </div>
    <div>
      <p class="testimonials__star">★★★★★</p>
      <p class="testimonials__rating">Gets the job done</p>
      <p class="testimonials__text">“It's pretty full featured. You can categorize by project and the interface is easy to use.”</p>
      <p class="testimonials__review">— GetApp review</p>
    </div>
    <div>
      <p class="testimonials__star">★★★★★</p>
      <p class="testimonials__rating">Perfect time tracker</p>
      <p class="testimonials__text">“We needed to start tracking time and this happened to be a perfect tool for our team. Works well.”</p>
      <p class="testimonials__review">— App Store review</p>
    </div>
    <div>
      <p class="testimonials__star">★★★★★</p>
      <p class="testimonials__rating">Great time tracking app</p>
      <p class="testimonials__text">“The TimeREC exceeded my expectations so much that I am canceling my current premium time tracker.”</p>
      <p class="testimonials__review">— Facebook review</p>
    </div>
    <div class="testimonials__last">
      <p class="testimonials__star">★★★★★</p>
      <p class="testimonials__rating">Truly great</p>
      <p class="testimonials__text">A truly great product, filling a market gap with an unbeatable strategy!”</p>
      <p class="testimonials__review">— Product Hunt review</p>
    </div>
  </section>
  <section class="features">
    <h2 class="features__header">Time management features</h2>
    <p class="features__text_about">The TimeREC is a simple time tracker and timesheet app for tracking productivity, attendance, billable hours, and payroll.</p>
    <span class="features__row">
      <div class="features__row__text_content">
        <a href="timekeeper-software.html"><h3 class="features__row__header">Timekeeping &rarr;</h3></a>
        <ul class="checked-list">
          <li><span>✓</span><span>Track hours using a timer</span></li>
          <li><span>✓</span><span>Log time manually in <a href="timesheet-app.html">timesheet</a></span></li>
          <li><span>✓</span><span>Categorize time by project and activity</span></li>
          <li><span>✓</span><span>Edit and review time entries</span></li>
          <li><span>✓</span><span>Invite team to track time together</span></li>
        </ul>
      </div>
      <img class="features__row__img"
           src="{{asset('image/REC-Icon2.png')}}" height="190px" width="150px">
    </span>
    <span class="features__row">
      <img class="features__row__img"
           src="{{asset('image/Times Rec.final-03.png')}}"  height="190px" width="350px">
      <div class="features__row__text_content">
        <a href="time-reporting.html"><h3 class="features__row__header">Time reporting &rarr;</h3></a>
        <ul class="checked-list">
          <li><span>✓</span><span>Visual breakdown of all tracked time</span></li>
          <li><span>✓</span><span>Billable hours calculated automatically</span></li>
          <li><span>✓</span><span>Share reports with others via a link</span></li>
          <li><span>✓</span><span>Export time in PDF, CSV, and Excel</span></li>
        </ul>
      </div>
    </span>
    <a href="feature-list.html"><button class="features__button">See all features &rarr;</button></a>
  </section>
 
  <section class="advantages">
    <div class="advantages__content">
    <h2 class="advantages__header">Why track time with The TimeREC</h2>
    <div class="advantages__row">
      <a class="advantages__row__box" href="why-use.html#productivity">
        <div class="advantages__row__box__content">
          <span id="img-productivity"></span>
          <h3 class="advantages__row__box__header">Get an accurate look at your workweek</h3>
          <p class="advantages__row__box__text_about">Track time you spend working on activities, see exactly where the time goes, and improve your productivity.</p>
          <p class="advantages__row__box__text_learn">Learn how &rarr;</p>
        </div>
      </a>
      <a class="advantages__row__box" href="why-use.html#profitability">
        <div class="advantages__row__box__content">
          <span id="img-profitability"></span>
          <h3 class="advantages__row__box__header">Improve project profitability</h3>
          <p class="advantages__row__box__text_about">Track time on projects so you can see how much time projects really take and see if you charge enough.</p>
          <p class="advantages__row__box__text_learn">Learn how &rarr;</p>
        </div>
      </a>
    </div>
    <div class="advantages__row">
      <a class="advantages__row__box" href="why-use.html#transparency">
        <div class="advantages__row__box__content">
          <span id="img-transparency"></span>
          <h3 class="advantages__row__box__header">Show clients how much you've worked</h3>
          <p class="advantages__row__box__text_about">Mark time records as billable and The TimeREC will apply your hourly rates, so you can send reports to clients for review.</p>
          <p class="advantages__row__box__text_learn">Learn how &rarr;</p>
        </div>
      </a>
      <a class="advantages__row__box" href="why-use.html#team-management">
        <div class="advantages__row__box__content">
          <span id="img-team_management"></span>
          <h3 class="advantages__row__box__header">See where your team spends time</h3>
          <p class="advantages__row__box__text_about">Everyone on your team can log their time so you can track attendance and see who worked on what and how much at a glance.</p>
          <p class="advantages__row__box__text_learn">Learn how &rarr;</p>
        </div>
      </a>
    </div>
  </div>
  </section>
  <section class="uniqueness">
    <div class="uniqueness__content">
      <h2 class="uniqueness__header">What makes The TimeREC unique?</h2>
      <div class="uniqueness__content__text">
        <div class="uniqueness__text">
          <p class="uniqueness__text__header">The TimeREC is the only 100% free time tracker and timesheet app for teams of all size.</p>
          <p>The TimeREC, unlike all the other time trackers, lets you have an unlimited number of users and projects for free.</p><br>
          <p>Other time tracking apps have free plans that limit you to 1 user (or 5 max). The TimeREC, on the other hand, lets you have as many people as you want.</p><br>
          <p>The TimeREC doesn't have any ads, sneaky upsells, limited trial periods, or anything like that. What you get when you sign up, that's free, forever.</p><br>
          <p class="uniqueness__text__header">Why is The TimeREC free?</p>
          <p>We created The TimeREC because our team needed a time tracker, but all the timekeeping apps were either too expensive or too complicated.</p><br>
          <p>We believe that every team should have access to a simple time tracker without having to pay hundreds of dollars each month. That's why we offer The TimeREC for free to teams of all sizes.</p><br>
        </div>
        <div class="uniqueness__text">
          <p class="uniqueness__text__header">How we keep The TimeREC profitable</p>
          <p>All the core time tracking features are free. If you want to extend The TimeREC with <a href="extra-features.html">extra functionality</a>, you can subscribe to one of our monthly plans. This helps us pay for infrastructure, support, and further development.</p><br>
          <p>We also offer self-hosting and development services to big teams and enterprises. This way, big companies get a great time tracking system that they can actually use, while others get to track time for free and in return help us improve The TimeREC.</p><br>
          <p class="uniqueness__text__header">Why choose self-hosting</p>
          <ul class="checked-list">
            <li><span>✓</span><span>Complete control over data, privacy, and security</span></li>
            <li><span>✓</span><span>Priority support and SLA</span></li>
            <li><span>✓</span><span>Custom development and branding</span></li>
            <li><span>✓</span><span>Integration with internal systems and SSO</span></li>
          </ul><br>
          <p class="uniqueness__link"><a href="self-hosted-time-tracking-software.html">Learn more about self-hosting &rarr;
             </a>
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="quote">
      <div class="quote__content">
        <div class="quote__image--quotes">
          <img src="assets/images/quote.svg" alt="quote image">
        </div>
        <div class="quote__text">
          <h2 class="quote__header">We got tired of paying hundreds of dollars for a time tracker</h2>
          <p class="quote__text--quote">I own a software development company and we were spending $500 each month on a time tracking tool so all employees could log time. That's too much money for a simple time tracker. So we created The TimeREC. It has everything teams and companies really need, without costing a fortune.</p>
          <div class="quote__image--owner">
            <img src="assets/images/nenad-sean-milanovic.png"
                srcset="/assets/images/nenad-sean-milanovic@2x.png 2x"
                alt="Photo of Nenad Milanovic, CEO at COING">
            <p class="quote__signature">Nenad Milanovic, CEO at <a target="_blank" href="#">COING Inc</a></p>
          </div>
        </div>
      </div>
  </section>
    <section class="sign_up margin-top-2 get-started">
    <div class="sign_up__content">
      <h2 class="sign_up__header">Start tracking time with The TimeREC</h2>
      <div class="sign_up__bulleted_row">
        <p>Unlimited users</p><p>&bull;</p><p>Cancel anytime</p><p>&bull;</p><p>Free forever</p>
      </div>
      <a href=""><button class="sign_up__button">Get started</button></a>
     
    </div>
  </section>

<span id="hero-extra-include"><header id="header-extra" class="header-loggedin">
  <nav class="header__row">
    <ul class="header__row__item_left">
      <li><a href="index.html"><img src="assets/images/The TimeREC-logo-white.svg" alt="The TimeREC logo"></a></li>
      <li><a href="feature-list.html">Features</a></li>
      <li><a href="apps.html">Apps</a></li>
    </ul>
    <ul class="header__row__item_right">
      <li><a href="help/index.html">Help</a></li>
      <li><a href="resources.html">Resources</a></li>
      <li><a href="extra-features.html">Extras</a></li>
      <li><a href="tracker.html"><button class="header-loggedin__white-btn">Go to tracker</button></a></li>
    </ul>
  </nav>
</header>
<main role="main">
  <section id="hero-extra" class="hero">
    <div class="hero__content">
      <div class="hero__content__item-content">
        <h1 class="hero__content__header">Save time and energy with extra features</h1>
        <p class="hero__content__text_about">Extend The TimeREC with extra features so you can spend less time on managing your team's timesheets, and more on getting things done.</p>
        <p class="hero__content__list_extra_features">
          <a href="extra-features-productivity.html#lock-timesheets">Lock&nbsp;timesheets</a> • 
          <a href="extra-features-productivity.html#private-time">Private&nbsp;entries</a> • 
          <a href="extra-features-productivity.html#targets-reminders">Targets&nbsp;and&nbsp;&nbsp;eminders</a> • 
          <a href="extra-features-productivity.html#required-fields">Required&nbsp;fields</a> • 
          <a href="extra-features-productivity.html#add-time-others">Add&nbsp;time&nbsp;for&nbsp;others</a> • 
          <a href="extra-features-productivity.html#project-templates">Project&nbsp;templates</a> • 
          <a href="extra-features-productivity.html#automatic-lock">Automatic&nbsp;lock</a> •  
          <a href="extra-features-productivity.html#bulk-edit">Bulk&nbsp;edit</a> • 
          <a href="extra-features-productivity.html#hide-pages">Hide&nbsp;pages</a> • 
          <a href="extra-features-productivity.html#time-audit">Time&nbsp;audit</a> • 
          <a href="extra-features-productivity.html#alerts">Alerts</a> • 
          <a href="extra-features-productivity.html#time-rounding">Rounding</a> • 
          <a href="extra-features-productivity.html#branded-reports">Branded&nbsp;reports</a>
        </p><br>

        <a href="extra-features-productivity.html">
          <button class="hero__button">Learn more &nbsp; &rarr;</button>
        </a>
        <a class="customer-link-white" target="_blank" href="customers.html"><p class="hero__text--signed-up"><img class="hero__text--signed-up-icon" src="assets/images/love-icon.svg" alt="Number of people that started tracking time with The TimeREC in the last 7 days"><span class="NumberOfUsers"></span></p></a>
      </div>
      <div class="hero__content__item-gap"></div>
      <div class="hero__content__item-image">
        <img class="hero__extra-img animate-relaxation" src="assets/images/extra-features-work-illustration.svg" alt="Extra features for productivity illustration">
      </div>
    </div>
<div class="ocean">
  <div class="wave"></div>
  <div class="wave"></div>
</div>
   
    <div class="testimonials dark-bg-extra">
      <div class="testimonials-overlay"><a target="_blank" href="customers.html">See what else people say &rarr;</a></div>
      <div>
        <p class="testimonials__star">★★★★★</p>
        <p class="testimonials__rating">Great timekeeping software</p>
        <p class="testimonials__text">“Simple, great user interface, works with our company's payroll system, and great support.”</p>
        <p class="testimonials__review">— Capterra review</p>
      </div>
      <div>
        <p class="testimonials__star">★★★★★</p>
        <p class="testimonials__rating">Gets the job done</p>
        <p class="testimonials__text">“It's pretty full featured. You can categorize by project and the interface is easy to use.”</p>
        <p class="testimonials__review">— GetApp review</p>
      </div>
      <div>
        <p class="testimonials__star">★★★★★</p>
        <p class="testimonials__rating">Good time tracker</p>
        <p class="testimonials__text">“We needed to start tracking time and this happened to be a perfect tool for our team. Works well.”</p>
        <p class="testimonials__review">— App Store review</p>
      </div>
      <div>
        <p class="testimonials__star">★★★★★</p>
        <p class="testimonials__rating">Great time tracking app</p>
        <p class="testimonials__text">“The TimeREC exceeded my expectations so much that I am canceling my current premium time tracker.”</p>
        <p class="testimonials__review">— Facebook review</p>
      </div>
      <div class="testimonials__last">
        <p class="testimonials__star">★★★★★</p>
        <p class="testimonials__rating">Excellent software</p>
        <p class="testimonials__text">A truly great product, filling a market gap with an unbeatable strategy!”</p>
        <p class="testimonials__review">— Product Hunt review</p>
      </div>
    </div>
    <div class="leave-review">
      <p><span class="love-The TimeREC">❤</span> Love using The TimeREC? <a rel="nofollow" target="_blank" href="#">Leave us a review &rarr;</a></p>
    </div>
  </section>
  <section class="features">
    <h2 class="features__header">Time management features</h2>
    <p class="features__text_about">The TimeREC is a simple time tracker and timesheet app for tracking productivity, attendance, billable hours, and payroll.</p>
    <span class="features__row">
      <div class="features__row__text_content">
        <a href="timekeeper-software.html"><h3 class="features__row__header">Timekeeping &rarr;</h3></a>
        <ul class="checked-list">
          <li><span>✓</span><span>Track hours using a timer</span></li>
          <li><span>✓</span><span>Log time manually in <a href="timesheet-app.html">timesheet</a></span></li>
          <li><span>✓</span><span>Categorize time by project and activity</span></li>
          <li><span>✓</span><span>Edit and review time entries</span></li>
          <li><span>✓</span><span>Invite team to track time together</span></li>
        </ul>
      </div>
      <img class="features__row__img"
           src="assets/images/time-tracking-illustration.png"
           srcset="/assets/images/time-tracking-illustration@2x.png 2x"
           alt="Illustration of time tracking software and time tracker">
    </span>
    <span class="features__row">
      <img class="features__row__img"
           src="assets/images/time-reporting-illustration.png"
           srcset="/assets/images/time-reporting-illustration@2x.png 2x"
           alt="Illustration of time reports based on data from time tracker">
      <div class="features__row__text_content">
        <a href="time-reporting.html"><h3 class="features__row__header">Time reporting &rarr;</h3></a>
        <ul class="checked-list">
          <li><span>✓</span><span>Visual breakdown of all tracked time</span></li>
          <li><span>✓</span><span>Billable hours calculated automatically</span></li>
          <li><span>✓</span><span>Share reports with others via a link</span></li>
          <li><span>✓</span><span>Export time in PDF, CSV, and Excel</span></li>
        </ul>
      </div>
    </span>
    <a href="feature-list.html"><button class="features__button">See all features &rarr;</button></a>
  </section>
  <section class="features">
    <h2 class="features__header">Time tracking apps</h2>
    <p class="features__text_about">The TimeREC works across devices. Track time from your phone or desktop computer and continue online from any browser.</p>
    <div class="features__grid">
      <div>
        <img src="assets/images/time-tracker-app-web.png" alt="Online time tracking app and time tracker">
        <h3>Web app</h3>
        <a class="get-started" href="signup.html"><button class="features__app-link-signup">Sign up</button></a> <a class="get-started" href="login.html"><button class="features__app-link">Log in</button></a> <a href="chrome-time-tracking.html"><button class="features__app-link">Chrome</button></a> <a href="firefox-time-tracking.html"><button class="features__app-link">Firefox</button></a>
      </div>
      <div>
        <img src="assets/images/time-tracker-app-desktop.png" alt="Desktop time tracking app and time tracker for Mac and Windows">
        <h3>Desktop app</h3>
        <a href="mac-time-tracking.html"><button class="features__app-link">Mac</button></a> <a href="windows-time-tracking.html"><button class="features__app-link">Windows</button></a> <a href="linux-time-tracking.html"><button class="features__app-link">Linux</button></a>
      </div>
      <div>
        <img src="assets/images/time-tracker-app-mobile.png" alt="Mobile time tracking app and time tracker for Android and iPhone iPad">
        <h3>Mobile app</h3>
        <a href="iphone-time-tracking.html"><button class="features__app-link">iOS</button></a> <a href="android-time-tracking.html"><button class="features__app-link">Android</button></a>
      </div>
    </div>
  </section>
  <section class="advantages">
    <div class="advantages__content">
    <h2 class="advantages__header">Why track time with The TimeREC</h2>
    <div class="advantages__row">
      <a class="advantages__row__box" href="why-use.html#productivity">
        <div class="advantages__row__box__content">
          <span id="img-productivity"></span>
          <h3 class="advantages__row__box__header">Get an accurate look at your workweek</h3>
          <p class="advantages__row__box__text_about">Track time you spend working on activities, see exactly where the time goes, and improve your productivity.</p>
          <p class="advantages__row__box__text_learn">Learn how &rarr;</p>
        </div>
      </a>
      <a class="advantages__row__box" href="why-use.html#profitability">
        <div class="advantages__row__box__content">
          <span id="img-profitability"></span>
          <h3 class="advantages__row__box__header">Improve project profitability</h3>
          <p class="advantages__row__box__text_about">Track time on projects so you can see how much time projects really take and see if you charge enough.</p>
          <p class="advantages__row__box__text_learn">Learn how &rarr;</p>
        </div>
      </a>
    </div>
    <div class="advantages__row">
      <a class="advantages__row__box" href="why-use.html#transparency">
        <div class="advantages__row__box__content">
          <span id="img-transparency"></span>
          <h3 class="advantages__row__box__header">Show clients how much you've worked</h3>
          <p class="advantages__row__box__text_about">Mark time records as billable and The TimeREC will apply your hourly rates, so you can send reports to clients for review.</p>
          <p class="advantages__row__box__text_learn">Learn how &rarr;</p>
        </div>
      </a>
      <a class="advantages__row__box" href="why-use.html#team-management">
        <div class="advantages__row__box__content">
          <span id="img-team_management"></span>
          <h3 class="advantages__row__box__header">See where your team spends time</h3>
          <p class="advantages__row__box__text_about">Everyone on your team can log their time so you can track attendance and see who worked on what and how much at a glance.</p>
          <p class="advantages__row__box__text_learn">Learn how &rarr;</p>
        </div>
      </a>
    </div>
  </div>
  </section>
  <section class="uniqueness">
    <div class="uniqueness__content">
      <h2 class="uniqueness__header">What makes The TimeREC unique?</h2>
      <div class="uniqueness__content__text">
        <div class="uniqueness__text">
          <p class="uniqueness__text__header">The TimeREC is the only 100% free time tracker and timesheet app for teams of all size.</p>
          <p>The TimeREC, unlike all the other time trackers, lets you have an unlimited number of users and projects for free.</p><br>
          <p>Other time tracking apps have free plans that limit you to 1 user (or 5 max). The TimeREC, on the other hand, lets you have as many people as you want.</p><br>
          <p>The TimeREC doesn't have any ads, sneaky upsells, limited trial periods, or anything like that. What you get when you sign up, that's free, forever.</p><br>
          <p class="uniqueness__text__header">Why is The TimeREC free?</p>
          <p>We created The TimeREC because our team needed a time tracker, but all the timekeeping apps were either too expensive or too complicated.</p><br>
          <p>We believe that every team should have access to a simple time tracker without having to pay hundreds of dollars each month. That's why we offer The TimeREC for free to teams of all sizes.</p><br>
        </div>
        <div class="uniqueness__text">
          <p class="uniqueness__text__header">How we keep The TimeREC profitable</p>
          <p>All the core time tracking features are free. If you want to extend The TimeREC with <a href="extra-features.html">extra functionality</a>, you can subscribe to one of our monthly plans. This helps us pay for infrastructure, support, and further development.</p><br>
          <p>We also offer self-hosting and development services to big teams and enterprises. This way, big companies get a great time tracking system that they can actually use, while others get to track time for free and in return help us improve The TimeREC.</p><br>
          <p class="uniqueness__text__header">Why choose self-hosting</p>
          <ul class="checked-list">
            <li><span>✓</span><span>Complete control over data, privacy, and security</span></li>
            <li><span>✓</span><span>Priority support and SLA</span></li>
            <li><span>✓</span><span>Custom development and branding</span></li>
            <li><span>✓</span><span>Integration with internal systems and SSO</span></li>
          </ul><br>
          <p class="uniqueness__link"><a href="self-hosted-time-tracking-software.html">Learn more about self-hosting &rarr;
             </a>
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="quote">
      <div class="quote__content">
        <div class="quote__image--quotes">
          <img src="assets/images/quote.svg" alt="quote image">
        </div>
        <div class="quote__text">
          <h2 class="quote__header">We got tired of paying hundreds of dollars for a time tracker</h2>
          <p class="quote__text--quote">I own a software development company and we were spending $500 each month on a time tracking tool so all employees could log time. That's too much money for a simple time tracker. So we created The TimeREC. It has everything teams and companies really need, without costing a fortune.</p>
          <div class="quote__image--owner">
            <img src="assets/images/nenad-sean-milanovic.png"
                srcset="/assets/images/nenad-sean-milanovic@2x.png 2x"
                alt="Photo of Nenad Milanovic, CEO at COING">
            <p class="quote__signature">Nenad Milanovic, CEO at <a target="_blank" href="#">COING Inc</a></p>
          </div>
        </div>
      </div>
  </section>
    <section class="sign_up margin-top-2 get-started">
    <div class="sign_up__content">
      <h2 class="sign_up__header">Start tracking time with The TimeREC</h2>
      <div class="sign_up__bulleted_row">
        <p>Unlimited users</p><p>&bull;</p><p>Cancel anytime</p><p>&bull;</p><p>Free forever</p>
      </div>
      <a href="signup.html"><button class="sign_up__button">Get started</button></a>
      <a class="customer-link" target="_blank" href="customers.html"><p class="hero__text--signed-up-get-started"><img class="hero__text--signed-up-icon" src="assets/images/signed-up-icon.svg" alt="Number of people that started tracking time with The TimeREC in the last 7 days"><span class="NumberOfUsers"></span></p></a>
    </div>
  </section>
</main></span>

<script>

    playBtn.addEventListener('mouseover', function() {
      _showHideText(true);
    });

    playBtn.addEventListener('mouseout', function() {
      _showHideText(false);
    });

  
  }
</script>
<footer class="footer">
  <div class="footer__site_links">
    <div class="footer__site_links--left_items">
      <ul class="footer__site_links--left_items__box">
         <span itemscope  >
           <a itemprop="url" href="index.html" class="footer__site_links--left_items__box__logo">
             <img itemprop="logo" src="{{asset('image/Times Rec.final-01.png')}}" width="156px" height="130px">
          </a>
        </span>
        <a href="login.html"><li>Log in</li></a>
        <a href="signup.html"><li>Sign up</li></a>
      </ul>
    </div>
    <div class="footer__site_links--right_items">
      <div class="footer__site_links--right_items__boxes footer__site_links--right_items__boxes__margin_bottom">
        <ul class="footer__site_links--right_items__box">
          <span class="footer__site_links--right_items__box__title">Product</span>
          <a href="feature-list.html"><li>Features</li></a>
          <a href="why-use.html"><li>Why use</li></a>
          <a href="integrations.html"><li>Integrations</li></a>          
          <a href="extra-features.html"><li>Extras</li></a>
          <a href="apps.html"><li>Apps</li></a>
        </ul>
        <ul class="footer__site_links--right_items__box">
          <span class="footer__site_links--right_items__box__title">Solution</span>
          <a href="time-tracker.html"><li>Time&nbsp;tracker</li></a>
          <a href="timesheet-app.html"><li>Timesheet</li></a>
          <a href="attendance-tracker.html"><li>Attendance&nbsp;tracker</li></a>
          <a href="time-card-calculator.html"><li>Time&nbsp;card&nbsp;calculator</li></a>          
          <a href="self-hosted-time-tracking-software.html"><li>Self-hosting</li></a>
        </ul>
      </div>
      <div class="footer__site_links--right_items__boxes">
        <ul class="footer__site_links--right_items__box">
          <span class="footer__site_links--right_items__box__title">Company</span>
          <a href="about-us.html"><li>About us</li></a>
          <a href="customers.html"><li>Customers</li></a>
          <a href="roadmap.html"><li>Roadmap</li></a>
          <a href="careers/index.html"><li>Careers</li></a>
          <a href="The TimeREC-ico.html"><li>ICO</li></a>
          <a href="blog/index.html"><li>Blog</li></a>
        </ul>
        <ul class="footer__site_links--right_items__box">
          <span class="footer__site_links--right_items__box__title">Support</span>
          <a href="help/index.html"><li>Help</li></a>
          <a href="help/video-tutorials.html"><li>Tutorials</li></a>
          <a href="resources.html"><li>Resources</li></a>
          <a href="" target="_blank"><li>API</li></a>
          <a href="mailto:support@clockify.me"><li class="footer__contact_email">support@The TimeREC.me</li></a>
          <div class="footer__social_networks__logo">
            <a target="_blank"
                rel="nofollow noopener noreferrer"
                href="">
                <span id="logo-twitter"></span>
            </a>
            <a target="_blank"
                rel="nofollow noopener noreferrer"
                href="">
                <span id="logo-facebook"></span>
            </a>
            <a target="_blank"
                rel="nofollow noopener noreferrer"
                href="">
                <span id="logo-instagram"></span>
            </a>
            <a target="_blank"
                rel="nofollow noopener noreferrer"
                href="#"">
                <span id="logo-youtube"></span>
            </a>
            <a target="_blank"
                rel="nofollow noopener noreferrer"
                href="#">
                <span id="logo-linkedin"></span>
            </a>
          </div>
        </ul>
      </div>
    </div>
  </div>

 @include('Front.footer')
</footer>
@include('partials.JS')

<script>
$('.carousel').carousel();
</script>
</body>

<!-- Mirrored from The TimeREC.me/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Apr 2019 07:13:17 GMT -->
</html>

---
title: Curriculum Vitae
---
@extends('_layouts.master')

@section('body')
<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
      <h1>Johannes Berdin</h1>
      <img class="cv-photo img-responsive" src="{{ $page->baseUrl }}/img/ich.jpeg" alt="Johannes Berdin" />
      <ul class="list-inline social-list">
        <li><a href="https://www.linkedin.com/in/johannesberdin/"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="https://github.com/johannesberdin"><i class="fa fa-github"></i></a></li>
        <li><a href="https://www.xing.com/profile/Johannes_Berdin"><i class="fa fa-xing"></i></a></li>
        <li><a href="https://www.instagram.com/johannesberdin/"><i class="fa fa-instagram"></i></a></li>
      </ul>
      <hr>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <h2>Introduction</h2>
      <p class "cv-info">Hey, my name is Johannes Berdin. I am thrilled to build awesome products which help people on their daily lives<br /> As a highly creative thinker and an organized do-er, I love to battle the transformation of high-tech ideas into brilliant
        user experiences and the challenge of working in a dynamic and progressive environment.</p>

      <hr class="cv-hr">

      <h2>Basics</h2>

      <h3>Address</h3>
      <p class="cv-info">Am Schäferberg<br /> 66740 Saarlouis<br /> Germany
      </p>

      <h3>Birthday</h3>
      <p class="cv-info">10/29/1988</p>

      <hr class="cv-hr">

      <h2>Education</h2>

      <h3>Graduated Bachelor Science</h3>
      <p class "cv-info">Computer Science / Mathematics<br />
        <a href="https://uni-saarland.de">Universität des Saarlandes</a><br />
        <span class="cv-dates">2013 - 2017</span>
      </p>

      <h3>Studies of Teaching profession</h3>
      <p class="cv-info">High school teacher<br /> Computer Science / Mathematics<br />
        <a href="https://uni-saarland.de">Universität des Saarlandes</a><br />
        <span class="cv-dates">2008 - 2013</span>
      </p>

      <hr class="cv-hr">

      <h2>Considerable</h2>
      <h3>Y Combinator</h3>
      <p><a href="https://ycombinator.com">YC</a> is the most famous incubator program in the world, backing companies like Dropbox, Airbnb, Coinbase, Stripe, Reddit, Heroku or Instacart. I had the chance to be part of the summer batch 2013 (YCS13)
        by co-founding the US startup MeasurePhone. We built a bluetooth-connected laser-distance meter for your smartphone. We did run the business from a beautiful house we rent in <a href="https://www.google.de/maps/place/Menlo+Park,+CA,+USA">Menlo Park</a> for almost a year before I went back to Germany to finish school.<br /><span class="cv-dates">2013</span></p>

      <h3>Member Wirtschaftsjunioren JCI</h3>
      <p><a href="http://wjd-saarland.de">Wirtschaftsjunioren</a> are a voluntary association of young executives and entrepreneurs from all areas of the Saarland economy shaping the future of the region. I like it to help others, share ideas and
        experiences and the Wirtschaftsjunioren provide a excellent platform for that.<br />
        <span class="cv-dates">2017 - present</span>
      </p>
    </div>
    <div class="col-md-6">
      <h2>Experience</h2>
      <h3>CEO / Urban Timetravel</h3>
      <p class "cv-info"><a href="https://urbantimetravel.com">Urban Timetravel</a> enables people to travel in time with on-demand location-based Timetravel experiences. We offer tourists a new way to discover their cultural heritage due to AR/VR applications.
        In the end of 2018 we successfully launched "Timetravel Luxembourg 1867" where tourists are being chauffered with a bus through the narrow streets of Pfaffenthal while wearing VR glasses and experience the City of Luxembourg in the
        19th century. Check it out! I'd love to get feedback how you liked the experience.<br />
        <span class="cv-dates">2019 - present</span>
      </p>

      <h3>Project Manager, Software Engineer / ZREALITY</h3>
      <p class "cv-info"><a href="https://zreality.com">ZREALITY</a> develops tailored solutions for virtual, mixed and augmented reality applications and advises companies on the conception, implementation and technical realization of corresponding projects.
        Their platform ZREALITY Sphere enables you to create a truly immersive virtual reality company and product presentation in minutes. As part of the "Smart City" concept of the City of Luxembourg, the VR Timetravel project gives you
        a hyper-realistic journey to the past. In the pilot project tourists wearing VR glasses are being chauffered with a bus through the narrow streets of Pfaffenthal of the 19th century. ZREALITY re-created that scenery based on historical
        photos, maps and other records with latest VR technology. I'm responsible for emerging the VR Timetravel pilot to a comprehensive user experience consisting of different AR/VR applications.<br />
        <span class="cv-dates">2018 - 2019</span>
      </p>

      <h3>Project Manager, Software Engineer / Eyeled</h3>
      <p class "cv-info"><a href="https://eyeled.de">Eyeled</a> has established as a flexible and highly innovative enterprise for mobile IT solutions operating since 2000. I'm responsible for overall projects' success including planing and coordinating team members
        by motivating and communicating the project mission and managing the work that needs to be done. I pitch deliverables to clients and negotiate features to match into the project's roadmap. I also do support the dev teams with programming,
        prototyping and proof-of-concept work and I love to create tricky code challenges for juniors and assist them in writing better code.<br />
        <span class="cv-dates">2017 - 2018</span>
      </p>

      <h3>Software Developer / Eyeled</h3>
      <p class "cv-info">I implemented a wide range of mobile and web applictions using native and cross-platform techniques.<br />
        <span class="cv-dates">2014 - 2017</span>
      </p>

      <h3>CEO, Founder / apptimists</h3>
      <p class "cv-info">The <a href="https://apptimists.com">apptimists</a> are a small team of makers, thinkers, explorers and the creators of StauMobil, Germany's most-used traffic information system. Beside my role as CEO running the business I'm listening
        and reaching out to our customers to give them the best experience using our apps. I collect ideas from users and the entire team to shape an effective product strategy and improve the business model. I also started writing about my
        experiences and learnings of building products, managing projects and running a business beside university.<br />
        <span class="cv-dates">2012 - present</span>
      </p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 text-center">
      <a href="javascript: window.print();" class="btn btn-sm btn-print">Printable version</a>
      <hr>
      <p>Johannes Berdin / Am Schäferberg 4 / 66740 Saarlouis / Germany / <a href="mailto:ich@johannesberdin.de">ich@johannesberdin.de</a></p>
    </div>
  </div>
  @endsection
<?php include_once 'includes/header.php'; ?>
<style type="text/css">
section.video-first-gallery {
  width: 100%;
  float: left;
  margin: 0;
  padding: 0;
}
h1.video-gallery-details-heading {
  font-size: 24px;
  margin: 10px 0;
  padding: 0;
  font-family: Faustina, serif;
}
.inpictures-item-two2 {
  position: relative;
  margin: 0 0 20px 0;
}
a.btnShare {
  display: none;
}
.video-gallery-content h2 {
  color: #fff;
}
.video-gallery-content p {
  font-size: 20px;
  margin: 0 0 25px 0;
  display: inline-block;
  width: 100%;
  font-family: Faustina, serif;
  font-weight: 400;
  padding: 0;
  line-height: 30px;
}
.video-gallery-content p i {
  margin-right: 10px;
}
.bd-video-gallery-footer {
  display: inline-block;
  width: 100%;
  border-bottom: 1px solid #4c4e4e;
  padding: 10px 0 10px 0;
}
.bd-video-gallery-footer ul {
  margin: 0;
  padding: 0;
}
.bd-video-gallery-footer ul li {
  list-style-type: none;
  float: left;
}
.bd-video-gallery-footer ul li a {
  text-decoration: none;
  display: block;
  width: 30px;
  height: 30px;
  line-height: 25px;
  text-align: center;
  border: solid 1.5px #bd8b8b;
  border-radius: 50%;
  color: #9e7777;
  font-size: 15px;
}
.bd-video-gallery-footer ul li {
  list-style-type: none;
  float: left;
  margin-right: 6px;
}
.video-gallery img {
  width: 100%;
  height: auto;
  object-fit: cover;
}
.video-gallery-content {
  margin: 0;
  padding: 0;
  border-bottom: 1px solid #4c4e4e;
}
.video-gallery-content h1 {
  font-size: 40px;
  font-weight: 600;
  color: #fff;
  margin: 10px 0;
}
.video-gallery-content h3 {
  font-size: 24px;
  line-height: 30px;
  margin: 10px 0;
}
.video-gallery-content ul {
  margin: 0;
  padding: 0;
}
.video-gallery-content ul li {
  color: #fff;
  list-style-type: none;
  line-height: 40px;
  font-size: 17px;
}
.video-gallery-content ul li a {
  color: #fff;
}
.video-gallery-content ul li i {
  margin-right: 10px;
  font-size: 19px;
}
i.fas.fa-map-marker-alt.map {
  color: #9b9c9c;
}
i.far.fa-clock.clock {
  color: #9b9c9c;
}
.video-gallery-content ul li:first-child {
  position: relative;
  margin-left: 23px;
  font-size: 20px;
  line-height: 26px;
}
.video-gallery-content ul li:first-child:before {
  content: "";
  top: 8px;
  left: -19px;
  margin-right: 9px;
  background-color: #fff;
  position: absolute;
  width: 10px;
  height: 10px;
  border-radius: 50%;
}
.video-gallery {
    position: relative;
    padding-bottom: 9px;
}
.video-gallery-sub {
  position: relative;
  padding: 10px 10px 10px 116px;
  background: #333;
  border-top: 3px solid #bd0000;
  display: inline-block;
  width: 100%;
  margin-bottom: 10px;
}
.video-gallery-sub-img {
  width: 96px;
  height: 54px;
  position: absolute;
  left: 10px;
  top: 10px;
}
.video-gallery-sub-img img {
  width: 96px;
  height: 54px;
}
.video-gallery-sub-img span {
  position: absolute;
  left: 2px;
  bottom: 2px;
  color: #fff;
  background-color: red;
  font-size: 13px;
  border-radius: 50%;
}
.video-gallery-sub-img span i {
  width: 21px;
  height: 10px;
  text-align: center;
  padding: 6px 0 5px 3px;
}
.video-gallery-sub ul {
  margin: 0;
  padding: 0;
  height: 54px;
  overflow: hidden;
  line-height: 17px;
}
.video-gallery-sub ul li {
  list-style-type: none;
  display: inline;
  position: relative;
}
.video-gallery-sub ul li a {
  text-decoration: none;
  display: inline;
  color: #fff;
  text-transform: capitalize;
  font-size: 14px;
}
.video-gallery-sub ul li:first-child {
  margin-right: 20px;
}
.video-gallery-sub ul li:first-child a {
  color: #f4b01b;
}
.video-gallery-sub ul li:first-child:before {
  content: "/";
  color: #fff;
  font-size: 12px;
  position: absolute;
  right: -14px;
  bottom: -1px;
}
.video-gallery-cat i {
  color: #020202;
  background: red;
  border-radius: 24px;
  padding: 7px;
  font-size: 17px;
  margin: 5px 7px 1px 2px;
  width: 30px;
  height: 30px;
  text-align: center;
}
span.video-gallery-cat {
  color: red;
  font-size: 20px;
  font-weight: 600;
}
.video-gallery-cat-one i {
  color: #020202;
  background: #aeadad;
  border-radius: 24px;
  padding: 7px;
  font-size: 17px;
  margin: 5px 7px 1px 2px;
  width: 30px;
  height: 30px;
  text-align: center;
}
span.video-gallery-cat-one {
  color: #aeadad;
  font-size: 20px;
  font-weight: 600;
}
.video-gallery1-cat-one i {
  color: #aeadad;
  font-size: 22px;
  margin: 6px 7px 1px 2px;
}
span.video-gallery1-cat-one {
  color: #aeadad;
  font-size: 20px;
  font-weight: 600;
}
.video-gallery1-cat i {
  color: #aeadad;
  font-size: 22px;
  margin: 6px 7px 1px 2px;
}
span.video-gallery1-cat {
  color: #aeadad;
  font-size: 20px;
  font-weight: 600;
  float: right;
}
</style>
<!--======================= MEGA MENU =========================-->

<div class="otv-300-250-ad">
  <!-- /370089190/Below_Header_Article_Mobile_300x250 --><div id="div-gpt-ad-22339525376-0" style="width: 300px; height: 250px;"><script>
    googletag.cmd.push(function() { googletag.display("div-gpt-ad-22339525376-0"); }); </script></div></div>

<!--============= VIDEO-DETAILS ============-->
<section class="video-first-gallery">
<div class="container">
    <div class="row">
      <div class="col-xs-12 sticky">
        <div class="row">
          <div class="col-lg-12 col-video-details">
           <h1 class="video-gallery-details-heading">Republic Day 2022: Watch R-Day Parade Rehearsals At Gandhi Maidan</h1>
            <div class="video-gallery-custom">                
                <div class="video-gallery-content">
                    <p>By: <a href="https://odishatv.in/author/diptiranjita-patra-16358">Diptiranjita Patra</a></p>
                    <p><i class="far fa-clock"></i>Last updated: <span>20 January 2022, 10:56 AM IST</span></p>
                </div>
                <!--<div class="video-gallery-footer">
                                    </div>-->

<!--================== TESTING ===================-->
<a href="someurl.com/some-article" data-image="article-1.jpg" data-title="Article Title" data-desc="Some description for this article" class="btnShare">Share</a>


<div class="bd-video-gallery-footer">
    <ul>
          <li>
                <a title="Share on facebook" href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('https://odishatv.in/videos/national/republic-day-2022-watch-r-day-parade-rehearsals-at-gandhi-maidan-168798') +'&t='+encodeURIComponent('Republic Day 2022: Watch R-Day Parade Rehearsals At Gandhi Maidan'),'_blank'); return false;" ><i class="fab fa-facebook-f"></i>
                </a>
          </li>
          <li><a title="Share on twitter" href="#" onclick="window.open('https://twitter.com/share?url='+encodeURIComponent('https://odishatv.in/videos/national/republic-day-2022-watch-r-day-parade-rehearsals-at-gandhi-maidan-168798')+'&text='+encodeURIComponent('Republic Day 2022: Watch R-Day Parade Rehearsals At Gandhi Maidan')+'&hashtags=otv','_blank'); return false;"><i class="fab fa-whatsapp"></i></a>
          </li>     
            <!--<li>
            <a href="http://instagram.com/sharer.php?u=&description=" title="" target="_blank">
            <i class="fab fa-instagram"></i>
            </a>
            </li>-->
            <!-- <li><a title="Share on whatsapp" href="whatsapp://send?text=https://odishatv.in/videos/national/republic-day-2022-watch-r-day-parade-rehearsals-at-gandhi-maidan-168798 is the best website to Get latest news and updates" title="Republic Day 2022: Watch R-Day Parade Rehearsals At Gandhi Maidan" data-link="https://odishatv.in/videos/national/republic-day-2022-watch-r-day-parade-rehearsals-at-gandhi-maidan-168798" data-action="share/whatsapp/share" target="_blank" class="hidden-md hidden-lg hvr-wobble-vertical"><i class="fab fa-whatsapp"></i></a></li> -->
    </ul>
</div>



<!--================== //TESTING ===================-->

            </div>
          </div>
           <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-12 col-video-details">
            <div class="video-gallery">
                                             <iframe src="https://www.dailymotion.com/embed/video/x877msu?autoplay=1&cc_load_policy=1" width='100%' height="250" frameborder='0' allow='fullscreen' allowfullscreen mozAllowFullScreen webkitAllowFullScreen scrolling='no'></iframe>
              <div class="otv-300-250-ad" style="margin-top: 20px;"><div id="div-gpt-ad-22346280561-0" style="width: 300px; height: 250px;"><script>googletag.cmd.push(function() { googletag.display("div-gpt-ad-22346280561-0"); }); </script></div></div>

                <div class="video-gallery-content">
                    <p>Rehearsal for the Republic Day 2022 parade is underway in full swing. These visuals are from Gandhi Maidan in Patna.</p>                   
                   
                        <!--<p><i class="fas fa-map-marker-alt"></i>By: <a href="https://odishatv.in/author/diptiranjita-patra-16358">Diptiranjita Patra</a></p>
                    <p><i class="far fa-clock"></i>Last updated: <span>20 January 2022, 10:56 AM IST</span></p>-->
                </div>
            </div>
          </div>
          
        </div>
        </div>
    </div>
</div>
</div>
</div>  
</section>  
<!--============== PHOTOS ================-->
 <div class="container video-gallery-sec"><h3 class="heading-style-two">Related Videos</h3>  <div class="video-gallery-sub">
      <div class="video-gallery-sub-img">
      <a href="https://odishatv.in/news/national/-reservation-is-not-at-odds-with-merit-sc-upholds-obc-quota-in-medical-courses-168817"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1639122007.jpg" alt="Supreme Court" title="Supreme Court"></a>
      <span><i class="fas fa-play"></i></span>
      </div>
      <ul>
         <li><a href="https://odishatv.in/tag/medical-courses">Medical Courses</a></li>
              <li><a href="https://odishatv.in/news/national/-reservation-is-not-at-odds-with-merit-sc-upholds-obc-quota-in-medical-courses-168817">'Reservation Is Not At Odds With Merit': SC Upholds OBC Quota In Medical Courses</a></li>
      </ul>
      <!--<span class="video-gallery1-cat-one"><i class="fas fa-clock"></i>7:34</span>-->
  </div>  <div class="video-gallery-sub">
      <div class="video-gallery-sub-img">
      <a href="https://odishatv.in/news/national/no-place-for-discrimination-in-india-says-pm-modi-168815"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/PM_Modi_1642671822.jpg" alt="PM Modi" title="PM Modi"></a>
      <span><i class="fas fa-play"></i></span>
      </div>
      <ul>
         <li><a href="https://odishatv.in/tag/azadi-ka-amrit-mahotsav">Azadi Ka Amrit Mahotsav</a></li>
              <li><a href="https://odishatv.in/news/national/no-place-for-discrimination-in-india-says-pm-modi-168815">No Place For Discrimination In India, Says PM Modi</a></li>
      </ul>
      <!--<span class="video-gallery1-cat-one"><i class="fas fa-clock"></i>7:34</span>-->
  </div>  <div class="video-gallery-sub">
      <div class="video-gallery-sub-img">
      <a href="https://odishatv.in/news/national/bjp-releases-first-list-of-34-candidates-for-goa-polls-168812"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/BJP_1642667972.jpg" alt="BJP" title="BJP"></a>
      <span><i class="fas fa-play"></i></span>
      </div>
      <ul>
         <li><a href="https://odishatv.in/tag/goa-assembly-polls">Goa Assembly Polls</a></li>
              <li><a href="https://odishatv.in/news/national/bjp-releases-first-list-of-34-candidates-for-goa-polls-168812">BJP Releases First List Of 34 Candidates For Goa Polls</a></li>
      </ul>
      <!--<span class="video-gallery1-cat-one"><i class="fas fa-clock"></i>7:34</span>-->
  </div>  <div class="video-gallery-sub">
      <div class="video-gallery-sub-img">
      <a href="https://odishatv.in/news/national/rahul-slams-centre-on-abduction-of-indian-by-chinese-forces-in-arunachal-168799"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/IMAGE_1642657212.JPG" alt="Abduction Of Indian By Chinese Forces In Arunachal" title="Abduction Of Indian By Chinese Forces In Arunachal"></a>
      <span><i class="fas fa-play"></i></span>
      </div>
      <ul>
         <li><a href="https://odishatv.in/tag/abduction-by-chinese-forces">Abduction By Chinese Forces</a></li>
              <li><a href="https://odishatv.in/news/national/rahul-slams-centre-on-abduction-of-indian-by-chinese-forces-in-arunachal-168799">Rahul Slams Centre On Abduction Of Indian By Chinese Forces In Arunachal</a></li>
      </ul>
      <!--<span class="video-gallery1-cat-one"><i class="fas fa-clock"></i>7:34</span>-->
  </div>  <div class="video-gallery-sub">
      <div class="video-gallery-sub-img">
      <a href="https://odishatv.in/news/national/call-from-telangana-about-planting-bomb-at-crpf-hq-turns-hoax-168797"><img src="https://images.odishatv.in/uploadimage/library/16_9/16_9_4/default.svg" data-src="https://images.odishatv.in/uploadimage/library/16_9/16_9_3/CRPF_1636444054.jpg" alt="CRPF" title="CRPF"></a>
      <span><i class="fas fa-play"></i></span>
      </div>
      <ul>
         <li><a href="https://odishatv.in/tag/bomb-threat-call">Bomb Threat Call</a></li>
              <li><a href="https://odishatv.in/news/national/call-from-telangana-about-planting-bomb-at-crpf-hq-turns-hoax-168797">Call From Telangana About Planting Bomb At CRPF HQ Turns Hoax</a></li>
      </ul>
      <!--<span class="video-gallery1-cat-one"><i class="fas fa-clock"></i>7:34</span>-->
  </div></div> <div id="taboola-below-article-thumbnails"></div>
<script>
  window._taboola = window._taboola || [];
  _taboola.push({
    mode: 'alternating-thumbnails-a',
    container: 'taboola-below-article-thumbnails',
    placement: 'Below Article Thumbnails',
    target_type: 'mix'
  });
</script><!--============= //VIDEO-DETAILS ============-->
<?php include_once 'includes/footer.php'; ?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="js/jquery-1.11.3.min.js"></script>  
  <script src="js/validate.min.js"></script> 

  <script type="text/javascript" src="js/action.js"></script>

 </head>
  <body>
 

<div class="feedback-height-align hidden-xs">
        <button type="button" class="btn btn-primary custom_font"  id="small-model" data-toggle="modal" data-target=".bs-example-modal-sm">Enquire Tour</button>
      </div> 
        <section class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
         <section class="modal-dialog ">
          <section class="modal-content oza-modal-content">
            <form id="small_model_form" class="form-inline" name="small-model-form" method="post" action="mail.php">
              
               <h3 class="oza-modal-head-title col-xs-12 col-sm-12 coll-md-12 col-lg-12">Enquire tour</h3><code class="close_btn cancel_btn"> </code>
               <h4 class="oza-modal-title col-xs-12 col-sm-12 coll-md-12 col-lg-12">Basic Details</h4>
          
                <article class="form-group col-xs-12 col-sm-12 coll-md-12 col-lg-12">
                  <label class="sr-only" for="">Planning destination<sup>*</sup></label>
                  <select class="form-control" id="select_destination" name="Planningdestination" value="" >
                    <option value="">Planning destination*</option>
                    <option id="inbound" value="inbound">Inbound</option>
                    <option id="outbound" value="outbound">Outbound</option>                
                  </select>
                  <!-- <input type="hidden" name="planning_destination_hidden"  id="planning_destination_hidden" value=""> -->
                </article>
                <article class="form-group col-xs-12 col-sm-12 coll-md-6 col-lg-6">
                   <label class="sr-only" for="oza-modal-name">Name<sup>*</sup></label>
                   <input text="email" class="form-control" id="oza-modal-name" name="Name" placeholder="Name*" >
                </article>
                <article class="form-group col-xs-12 col-sm-12 coll-md-6 col-lg-6">
                  <label class="sr-only" for="oza-modal-city">City</label>
                  <select class="form-control oza-text-placeholder city_list" id="City" name="City" >
                    <option value="">City*</option>
                    <option class="inbound_city" value="Bandipur">Bandipur</option>
                    <option class="inbound_city" value="Bangalore">Bangalore</option>
                    <option class="inbound_city" value="Cochin">Cochin</option>
                    <option class="inbound_city" value="Coorg">Coorg</option>
                    <option class="inbound_city" value="Hyderabad">Hyderabad</option>
                    <option class="inbound_city" value="Jawadhu Hills">Jawadhu Hills</option>
                    <option class="inbound_city" value="Jog Falls">Jog Falls</option>
                    <option class="inbound_city" value="Kabini">Kabini</option>
                    <option class="inbound_city" value="Karaikal">Karaikal</option>
                    <option class="inbound_city" value="Kodaikanal">Kodaikanal</option>
                    <option class="inbound_city" value="Kothagiri">Kothagiri</option>
                    <option class="inbound_city" value="Madurai">Madurai</option>
                    <option class="inbound_city" value="Munnar">Munnar</option>
                    <option class="inbound_city" value="Mysore">Mysore</option>
                    <option class="inbound_city" value="Ooty">Ooty</option>
                    <option class="inbound_city" value="Pollachi">Pollachi</option>
                    <option class="inbound_city" value="Pondicherry">Pondicherry</option>
                    <option class="inbound_city" value="Shimoga">Shimoga</option>
                    <option class="inbound_city" value="Thekady">Thekady</option>
                    <option class="inbound_city" value="Thiruthani">Thiruthani</option>
                    <option class="inbound_city" value="Thirupathi">Thirupathi</option>
                    <option class="inbound_city" value="Valpaarai">Valpaarai</option>
                    <option class="inbound_city" value="Velankanni">Velankanni</option>
                    <option class="inbound_city" value="Yelagiri">Yelagiri</option>
                    <option class="inbound_city" value="Yercaud">Yercaud</option>         

                    <option class="outbound_city" value="Austalia">Austalia</option>
                    <option class="outbound_city" value="Bali">Bali</option>
                    <option class="outbound_city" value="Barcelona">Barcelona</option>
                    <option class="outbound_city" value="Budapest">Budapest</option>                  
                    <option class="outbound_city" value="Cairns">Cairns</option>
                    <option class="outbound_city" value="Canada">Canada</option>
                    <option class="outbound_city" value="China">China</option>
                    <option class="outbound_city" value="Fiji islands">Fiji islands</option>
                    <option class="outbound_city" value="France">France</option>
                    <option class="outbound_city" value="Gold coast">Gold coast</option>
                    <option class="outbound_city" value="Halong bay">Halong bay</option>
                    <option class="outbound_city" value="Hungary">Hungary</option>
                    <option class="outbound_city" value="Hongkong">Hongkong</option>
                    <option class="outbound_city" value="Indonesia">Indonesia</option>
                    <option class="outbound_city" value="Italy">Italy</option>
                    <option class="outbound_city" value="Japanbeijing">Japanbeijing</option>
                    <option class="outbound_city" value="Las vegas">Las vegas</option>
                    <option class="outbound_city" value="Orlando">Orlando</option>
                    <option class="outbound_city" value="Oslo">Oslo</option>
                    <option class="outbound_city" value="Newyork">Newyork</option>
                    <option class="outbound_city" value="Newzealand">Newzealand</option>
                    <option class="outbound_city" value="Norway">Norway</option>
                    <option class="outbound_city" value="Paris">Paris</option>
                    <option class="outbound_city" value="Queenstown">Queenstown</option>
                    <option class="outbound_city" value="Rio de Janerio">Rio de Janerio</option>
                    <option class="outbound_city" value="South pacific">South pacific</option>
                    <option class="outbound_city" value="Spain">Spain</option>
                    <option class="outbound_city" value="Sydney">Sydney</option>
                    <option class="outbound_city" value="Tokyo">Tokyo</option>         
                    <option class="outbound_city" value="Toronto">Toronto</option>
                    <option class="outbound_city" value="USA">USA</option>
                    <option class="outbound_city" value="Vietnam">Vietnam</option>
                    <option class="outbound_city" value="Venice">Venice</option>                
                  </select>
                   <!-- <input type="hidden" name="City_hidden" id="City_hidden" value=""> -->
                </article>
                <article class="form-group col-xs-12 col-sm-12 coll-md-6 col-lg-6">
                   <label class="sr-only" for="oza-modal-mobile">Mobile<sup>*</sup></label>
                   <input type="text" class="form-control" id="oza-modal-mobile" name="Mobile" value="" placeholder="Mobile*" >
                </article>
                <article class="form-group col-xs-12 col-sm-12 coll-md-6 col-lg-6">
                   <label class="sr-only" for="oza-modal-email">Email<sup>*</sup></label>
                   <input type="email" class="form-control" id="oza-modal-email" name="Email" value="" placeholder="Email*" >
                </article>
                <h4 class="oza-modal-title col-xs-12 col-sm-12 coll-md-12 col-lg-12">Number of People</h4>
                <article class="form-group col-xs-12 col-sm-12 coll-md-4 col-lg-4">
                  <label class="sr-only" for="oza-modal-adult">Adult</label>
                  <select class="form-control" id="Adult" name="Adult" value="" >
                    <option value="">Adult*</option>
                    <!-- <option value="0">0</option> -->
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="1">3</option>
                    <option value="2">4</option>
                  </select>
                   <!-- <input type="hidden" name="Adult_hidden" id="Adult_hidden" value=""> -->
                 <p class="oza-people">12+ years</p>
              </article>
              <article class="form-group col-xs-12 col-sm-12 coll-md-4 col-lg-4">
                 <label class="sr-only" for="oza-modal-child">Child</label>
                 <select class="form-control" id="Child" name="Child" value="" >
                    <option value="">Child*</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="1">3</option>
                    <option value="2">4</option>
                 </select>
                 <!-- <input type="hidden" name="Child_hidden" id="Child_hidden" value="">  -->
                 <p class="oza-people">5-12+ years</p>
              </article>
              <article class="form-group col-xs-12 col-sm-12 coll-md-4 col-lg-4">
                <label class="sr-only" for="oza-modal-infant">Infant</label>
                <select class="form-control" name="Infant" value="" >
                  <option value="">Infant*</option>
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="1">3</option>
                  <option value="2">4</option>
                </select>
                <!-- <input type="hidden" name="Infant_hidden" value="">  -->
                <p class="oza-people">0-5+ years</p>
              </article>
              <h4 class="oza-modal-title col-xs-12 col-sm-12 coll-md-12 col-lg-12">When are you planning?</h4>

              <article class="form-group col-xs-12 col-sm-12 coll-md-12 col-lg-12">
                <label class="sr-only" for="oza-modal-name">Janauary 2016</label>
                <input type="text" class="form-control" name="Date_of_travel" id="datepicker" value="" placeholder="Date of travel">
                <!--          <select class="form-control" id="datepicker">
                            <option>Janauary 2016</option>
                            <option>March 2016</option>
                            <option>September 2016</option>
                            <option>May 2016</option>
                         </select> -->
              </article>
              <article class="form-group col-xs-12 col-sm-12 coll-md-12 col-lg-12">
                 <label class="sr-only" for="exampleInputEmail3">Any Other Requirement</label>
                 <input type="text" name="other-requirements" class="form-control" id="exampleInputEmail3" placeholder="Any Other Requirement">
              </article>
              <article class="form-group col-xs-12 col-sm-12 coll-md-12 col-lg-12 text-center">
                 <button type="submit" class="btn btn-oza-green btn-lg text-uppercase">Send Enquire</button>
              </article>
            </form>
          </section>
        </section>
      </section>    <!-- Enquirey Overlay End -->  
        <!-- Enquirey Overlay start -->

      <div class="feedback-height-align1 hidden-xs">
      <button type="button" class="btn btn-primary custom_font" id="feedback" data-toggle="modal" data-target=".feadback">feedback</button>
      </div>
      <section class="modal fade feadback" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
         <section class="modal-dialog">
            <section class="modal-content oza-modal-feedback-content">
               <form id="feedback_form" class="form-inline" name="feedback-form" method="post" action="feedback_send_email.php">
                
                <h3 class="oza-modal-head-title col-xs-12 col-sm-12 coll-md-12 col-lg-12">Feedback</h3><code class="close_btn cancel_btn"> </code>
                <h4 class="oza-modal-title col-xs-12 col-sm-12 coll-md-12 col-lg-12">We would love to hear from you!</h4>          
                <article class="form-group col-xs-12 col-sm-12 coll-md-12 col-lg-12">
                   <label class="sr-only" for="">Country Visited<sup>*</sup></label>
                   <select class="form-control" name="Countryvisited" >
                      <option value="">Country Visited*</option>
                      <option value="Austalia">Austalia</option>
                      <option value="Bali">Bali</option>
                      <option value="Barcelona">Barcelona</option>
                      <option value="Budapest">Budapest</option>
                      <option value="Canada">Canada</option>
                      <option value="Cairns">Cairns</option>
                      <option value="China">China</option>
                      <option value="Fiji islands">Fiji islands</option>
                      <option value="France">France</option>                  
                      <option value="Gold coast">Gold coast</option>
                      <option value="Halong bay">Halong bay</option>
                      <option value="Hongkong">Hongkong</option>
                      <option value="Hungary">Hungary</option>
                      <option value="India">India</option>
                      <option value="Indonesia">Indonesia</option>
                      <option value="Italy">Italy</option>
                      <option value="Japanbeijing">Japanbeijing</option>
                      <option value="Las vegas">Las vegas</option>
                      <option value="Newyork">Newyork</option>
                      <option value="Newzealand">Newzealand</option>
                      <option value="Norway">Norway</option>
                      <option value="Orlando">Orlando</option>
                      <option value="Oslo">Oslo</option>
                      <option value="Paris">Paris</option>
                      <option value="Queenstown">Queenstown</option>
                      <option value="Rio de Janerio">Rio de Janerio</option>
                      <option value="Spain">Spain</option>
                      <option value="South pacific">South pacific</option>
                      <option value="Sydney">Sydney</option>
                      <option value="Tokyo">Tokyo</option>        
                      <option value="Toronto">Toronto</option>
                      <option value="USA">USA</option>                 
                      <option value="Venice">Venice</option>                
                      <option value="Vietnam">Vietnam</option>        
                  </select>
                </article>
                <article class="form-group col-xs-12 col-sm-12 coll-md-6 col-lg-6">
                   <label class="sr-only" for="oza-modal-name">Name<sup>*</sup></label>
                   <input type="text" class="form-control" id="oza-modal-name" name="Name" placeholder="Name*" >
                </article>
                <article class="form-group col-xs-12 col-sm-12 coll-md-6 col-lg-6">
                   <label class="sr-only" for="oza-modal-city">City</label>
                   <select class="form-control oza-text-placeholder" name="City" >
                      <option value="">City*</option>
                      <option class="city" value="Bandipur">Bandipur</option>
                      <option class="city" value="Bangalore">Bangalore</option>
                      <option class="city" value="Cochin">Cochin</option>
                      <option class="city" value="Coorg">Coorg</option>
                      <option class="city" value="Hyderabad">Hyderabad</option>
                      <option class="city" value="Jawadhu Hills">Jawadhu Hills</option>
                      <option class="city" value="Jog Falls">Jog Falls</option>
                      <option class="city" value="Kabini">Kabini</option>
                      <option class="city" value="Karaikal">Karaikal</option>
                      <option class="city" value="Kodaikanal">Kodaikanal</option>
                      <option class="city" value="Kothagiri">Kothagiri</option>
                      <option class="city" value="Madurai">Madurai</option>
                      <option class="city" value="Munnar">Munnar</option>
                      <option class="city" value="Mysore">Mysore</option>
                      <option class="city" value="Ooty">Ooty</option>
                      <option class="city" value="Pollachi">Pollachi</option>
                      <option class="city" value="Pondicherry">Pondicherry</option>
                      <option class="city" value="Shimoga">Shimoga</option>
                      <option class="city" value="Thekady">Thekady</option>
                      <option class="city" value="Thiruthani">Thiruthani</option>
                      <option class="city" value="Thirupathi">Thirupathi</option>
                      <option class="city" value="Valpaarai">Valpaarai</option>
                      <option class="city" value="Velankanni">Velankanni</option>
                      <option class="city" value="Yelagiri">Yelagiri</option>
                      <option class="city" value="Yercaud">Yercaud</option> 
                   </select>
                </article>
                <article class="form-group col-xs-12 col-sm-12 coll-md-6 col-lg-6">
                   <label class="sr-only" for="oza-modal-mobile" min="0" max="9">Mobile<sup>*</sup></label>
                   <input type="tel" class="form-control" id="oza-modal-mobile" name="Mobile" placeholder="Mobile*" >
                </article>
                <article class="form-group col-xs-12 col-sm-12 coll-md-6 col-lg-6">
                   <label class="sr-only" for="oza-modal-email">Email<sup>*</sup></label>
                   <input type="email" class="form-control" id="oza-modal-email" name="Email" placeholder="Email*" >
                </article>
                <article class="form-group col-xs-12 col-sm-12 coll-md-12 col-lg-12">
                   <label class="sr-only" for="oza-modal-name">Departure Date*</label>
                    <input type="text" class="form-control" name="Date_of_depature" id="datepicker_depature" value="" placeholder="Date of depature">
                  <!--  <select class="form-control">
                      <option>Departure Date*</option>
                      <option>26-jan-2016</option>
                      <option>28-mar-2016</option>
                      <option>11-sep-2016</option>
                   </select> -->
                </article>      
                <article class="form-group col-xs-12 col-sm-12 coll-md-12 col-lg-12">
                   <label class="sr-only" for="oza-textarea">Say as your experience</label>
                   <textarea class="form-control" rows="3" id="oza-textarea" name="textarea_feedback" placeholder="Say as your experience"></textarea>
                </article>        
                <article class="text-center col-xs-12 col-sm-12 coll-md-12 col-lg-12"> 
                <h4 class="oza-modal-title col-xs-12 col-sm-12 coll-md-12 col-lg-12">Rate us!</h4>
                <em class="glyphicon glyphicon-star oza-rating text-success"></em>
                <em class="glyphicon glyphicon-star oza-rating text-success"></em>
                <em class="glyphicon glyphicon-star oza-rating text-success"></em>
                <em class="glyphicon glyphicon-star-empty oza-rating text-success"></em>
                <em class="glyphicon glyphicon-star-empty oza-rating text-success"></em>
                </article>            
                <article class="form-group col-xs-12 col-sm-12 coll-md-12 col-lg-12 text-center">
                   <button type="submit" class="btn btn-oza-green btn-lg text-uppercase">Submit</button>
                </article>
              </form>
            </section>
         </section>
      </section>    <!-- Enquirey Overlay End -->


<!-- <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <!-- Carousel items -->
   <!-- <div class="carousel-inner">
        <div class="active item">
            <p>hii</p></div>   <img class="client-test" src="images/client-testimonial.png" alt="Cocktails" />
        <div class="item"><h1> welcome</h1><img class="client-test" src="images/client-testimonial.png" alt="Cocktails" /></div>
        <div class="item"><img class="client-test" src="images/client-testimonial.png" alt="Cocktails" /></div>
    </div>
    <!-- Carousel nav -->
 <!--   <a class="carousel-control left" href="#carousel" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#carousel" data-slide="next">&rsaquo;</a>
</div> -->




      <section class="visible-xs">
        <section class="container">
          <section class="col-xs-6">
            <div class="feedback-height-align1">
              <button type="button" class="btn btn-primary custom_font" id="feedback" data-toggle="modal" data-target=".feadback">feedback</button>
            </div>
          </section>
          <section class="col-xs-6">
            <div class="feedback-height-align">
              <button type="button" class="btn btn-primary custom_font"  id="small-model" data-toggle="modal" data-target=".bs-example-modal-sm">Enquire Tour</button>
            </div> 
          </section>
        </section>
      </section>

</body>
</html>

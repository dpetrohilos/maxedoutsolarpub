<?php /* Template Name: Front Page Option 4 */ get_header(); ?>
<div class="wrapper-full hero-part">   
<div class="wrapper">
    <section class="row">
    <div class="hero-container col-lg-12 col-md-12 col-sm-12 col-xs-12 around">
        <h1>Your clean <br/><span class="hero-second"> energy future.</span></h1>
        
    </div>    
    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-2"><p class="top-text">Starts today with zero money upfront. Solar adds about $15,000 in equity to your home’s value, and average rooftop solar customers save $26,000 on electricity costs over 20 years.</p>   
<p class="btn-wrap">
    
    <!-- Calendly link widget begin -->

<a title="Free Consultation Link" class="btn-alpha" href="https://maxedoutsolar.com/sign-up/">Get Started </a>
            <!-- Calendly link widget end --> <span>Set up a free consultation today</span>
        </p> 
        </div>
    </section>
    </div></div>
<div class="wrapper process">
    <section class="row">
        
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
            
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/timeline.svg" alt="Our three step process" class="process-img">
            
            <p class="btn-wrap text-center">
    
    <!-- Calendly link widget begin -->

<a title="Free Consultation Link" class="btn-alpha" href="https://maxedoutsolar.com/sign-up/">Get Started </a>
            <!-- Calendly link widget end --> <span>Set up a free consultation today</span>
        </p> 
            
            
        </div>
        
    </section>
    
</div>    
<?php get_template_part( 'templateparts/rts/three' ); ?>
<div class="wrapper faq">

    
<section class="row content">
    
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 main-content">
<dt class="description-title">How Much Does It Cost To Get Solar Panels Installed?
 <span style="color:#ffffff" class="expand-collapse">&#10133;</span></dt>
            <dd class="description">
            <p> Every home’s roof is different. Some people work from home and run screens all day, some people have an electric vehicle to charge. Some people take extra care to conserve electricity! Your free quote will reflect your home’s unique needs.

</p></dd>
    
    <dt class="description-title">How Long Does It Take To Get Solar Panels Installed? <span style="color:#ffffff" class="expand-collapse">&#10133;</span></dt>
            <dd class="description">
            <p> As a general rule, between 1-3 months.* Of course, we want to move fast, but we don’t want to be pushy. It’s important to us to do a good job and make sure we get everything right the first time.

*ongoing supply chain disruptions in the Pacific could negatively impact install time.

</p></dd>
    
    <dt class="description-title">Do You Offer An Extended Warranty To Cover My Investment?
 <span style="color:#ffffff" class="expand-collapse">&#10133;</span></dt>
            <dd class="description"><p>One of the best available! Our extended warranty lasts for 30 years and covers solar panels, inverters, mounting systems, all labor costs, and includes gap coverage. The warranty is transferable to new homeowners in the event you sell your home.

</p></dd>
    
    <dt class="description-title">What Is Net Metering And How Does Net Metering Work?
 <span style="color:#ffffff" class="expand-collapse">&#10133;</span></dt>
            <dd class="description"><p>Net metering is a policy that credits you for every kilowatt-hour your system overproduces and puts extra power back into the grid. When your system overproduces, you can bank extra credits to use on a cloudy day, or at night.

</p></dd>    

</div>
    

    
</section>



</div>
<div class="wrapper footer-top">
    <section class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
            <h3>
            Refer a friend and you will get $1,000 if they put solar on their rooftop 
            </h3>
            
                       
<p class="btn-wrap">
    
    <!-- Calendly link widget begin -->

<a title="Talk With Us" class="btn" href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/max-neely/free-roof-check'});return false;">Lets Talk</a>
<!-- Calendly link widget end -->
    
        </p> 
        </div>
    </section>
    
</div>
<script>

if (document.readyState !== 'loading') {
    console.log("ready!");
    ready();
} else {
    document.addEventListener('DOMContentLoaded', ready);
}

function ready() {
    var accordion = document.getElementsByTagName("dt");

    for (var i = 0; i<accordion.length; i++){
        accordion[i].addEventListener('click', function(){
            accordionClick(event);
        
        });
    }
}

var accordionClick = (eventHappened) => {
    console.log(eventHappened);
    var targetClicked =event.target;
    console.log(targetClicked);
    var classClicked = targetClicked.classList;
    console.log("target clicked: " + targetClicked);
    console.log(classClicked[0]);
    while ((classClicked[0] !="description-title")){
        console.log("parent element: " + targetClicked.parentElement);
        targetClicked = targetClicked.parentElement;
        classClicked = targetClicked.classList;
        console.log("target clicked while in loop:" + targetClicked);
        console.log("class clicked while in loop: " + classClicked);
    }
    var description = targetClicked.nextElementSibling;
    console.log(description);
    var expander = targetClicked.children[0];
    if (description.style.maxHeight){
        description.style.maxHeight = null;
        expander.innerHTML = "&#10133;"
        
    }
    else {
        var allDescriptions = document.getElementsByTagName("dd");
        for (var i = 0; i < allDescriptions.length; i++){
            console.log("current description: " + allDescriptions[i]);
            if (allDescriptions[i].style.maxHeight){
                console.log("there is a description already open");
                allDescriptions[i].style.maxHeight = null;
                allDescriptions[i].previousElementSibling.children[0].innerHTML = "&#10133;"
            }
        }
        description.style.maxHeight = description.scrollHeight + "px";
        expander.innerHTML = "&#10134;";
        
    }
}
</script>

<?php get_footer('eco'); ?>

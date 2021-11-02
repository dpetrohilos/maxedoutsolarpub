<?php /* Template Name: CS splash page */ get_header(); ?>
<div class="wrapper-full hero-part">   
<div class="wrapper">
    <section class="row">
    <div class="hero-container col-lg-12 col-md-12 col-sm-12 col-xs-12 around">
        <h1>Save With<br/><span class="hero-second">Community Solar</span></h1>
        
    </div>    
    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-2"><p class="top-text">Switching to community solar is easy, free, and simple, and only takes five minutes. Read on below to learn more about why you need to make sure you take advantage of this revolutionary new technology. Save money, save the planet.</p>   
<p class="btn-wrap">
    
    <!-- Calendly link widget begin -->

<a title="Free Consultation Link" class="btn-alpha" href="https://maxedoutsolar.com/sign-up/">Find a Project Near You</a>
            <!-- Calendly link widget end --> <span>No cost. No risk. No hassle.</span>
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
<?php get_template_part( 'templateparts/css/three' ); ?>
<?php get_template_part( 'templateparts/css/two' ); ?>
<?php get_template_part( 'templateparts/css/line-middle' ); ?>
<div class="wrapper faq">
<section class="row content">
    
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 main-content">
    
<dt class="description-title">
    How Much Does It Cost To Enroll In Community Solar?
 <span style="color:#ffffff" class="expand-collapse">&#10133;</span>
    </dt>
            <dd class="description">
            <p> Nothing. Zero. Zilch. Zip. Nada. You’ll still be receiving a power bill, but you’ll be billed at a contractually guaranteed lower amount. The savings range from 10% to 30%, depending on the legislation passed by the state you live in.



</p></dd>
    
<dt class="description-title">How Long Does It Take To Enroll In Community Solar?<span style="color:#ffffff" class="expand-collapse">&#10133;</span></dt>
            <dd class="description">
            <p>Only a few minutes to complete the signup process.  Once the signup process is complete, there may be a lag time of a few months before the community solar farm project goes live and becomes turned on. It’s that easy!



</p></dd>
    
<dt class="description-title">So Once The Community Solar Project Goes Live, Then What?<span style="color:#ffffff" class="expand-collapse">&#10133;</span></dt><dd class="description"><p>You’ll start receiving renewable energy savings credits on your utility bill. You will only be invoiced for between 70% and 90% of the value of those credits, depending on the state you live in and what savings are being offered.</p></dd>
    
<dt class="description-title">There Has To Be A Catch. What’s The Catch Here?
 <span style="color:#ffffff" class="expand-collapse">&#10133;</span></dt>
            <dd class="description"><p>The catch is simple. We have an environmental crisis to address, and it costs the government less money to subsidize part of your bill to incentivize you to switch, than it does to pay for the costs of climate change.



</p></dd> 
    
    
    
   
<dt class="description-title">Can I Receive The Benefits Of Solar If I Rent?

 <span style="color:#ffffff" class="expand-collapse">&#10133;</span></dt>
            <dd class="description"><p>Yes, that’s one reason why community solar programs have been developed. Relying on homeowners to go solar may leave us short of reaching our climate goals. Since no construction occurs on your property, we can bypass the need for homeownership.
</p></dd>
    
<dt class="description-title">What Does It Cost To Cancel My Community Solar Subscription?


 <span style="color:#ffffff" class="expand-collapse">&#10133;</span></dt>
            <dd class="description"><p>Nothing. We have no costs, no hidden fees, and no gimmicks.  The goal of community solar is to make it easy for as many people as possible to switch, as quickly as possible. This is how we can do it.

</p></dd>     
    

<dt class="description-title">Will My Bills Increase If I Switch To Community Solar?
<span style="color:#ffffff" class="expand-collapse">&#10133;</span></dt>
            <dd class="description"><p>No, although energy costs have been slowly increasing over time for years. If your electricity usage increases, your bills will reflect that, but no matter what, community solar programs will never be the reason for paying a higher energy bill.
</p></dd>       
    
 
<dt class="description-title">How Does This Affect My Rate Or My Energy Supplier?

<span style="color:#ffffff" class="expand-collapse">&#10133;</span></dt>
            <dd class="description"><p>Community solar has nothing to do with your energy supplier or the rates you pay for electricity. It’s a free opt-in program that enables you to receive a renewable energy savings credit on your bill, guaranteeing a lower bill.


</p></dd>
    
<dt class="description-title">What States Do You Offer Community Solar Subscription Enrollments In?
<span style="color:#ffffff" class="expand-collapse">&#10133;</span></dt>
            <dd class="description"><p>At present, we offer coverage to the following states: Illinois, Maine, Maryland, Massachusetts, New Jersey, New York, and Rhode Island. Coverage zones within each state may vary by zip code. We are always adding more, so check back for updates!
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
<a title="Free Consultation Link" class="btn-alpha" href="https://maxedoutsolar.com/sign-up/">Lets Go 
            </a>        </p> 
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

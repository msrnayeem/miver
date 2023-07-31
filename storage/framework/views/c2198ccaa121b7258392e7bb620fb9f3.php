<?php $__env->startSection('title', 'Miverr - Home'); ?>
<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/css/single.css')); ?>">
<?php $__env->startSection('content'); ?>


<div class="container">
  <div class="product-column">
    <div class="scrollable-content">
      <h2>Name of Product</h2>
      <div class="seller-info">
        <img src="<?php echo e(asset('image.png')); ?>" alt="Seller Icon" class="seller-icon">
        <span class="seller-name">Seller Name</span>
      </div>
      <img src="<?php echo e(asset('image.png')); ?>" alt="Product Image" class="product-image">
      <div class="about-gig">
        <h3>About this gig</h3>
        <p>
          We offer groundbreaking mascot logo designs for your business, sports team, or esports clan.
          Elevate your marketing by owning an incredible logo and mascot design. We create perfect,
          engaging, and eye-catching mascot logos for our clients. Let your audience recognize you from miles away.
          Let's get started and let the world know you.
        </p>
        <div class="design-approach">
          <h3>We Approach Design Strategically:</h3>
          <ul>
            <li>Exceptional attraction</li>
            <li>Unique logo designs</li>
            <li>Unlimited Revisions</li>
            <li>Industry Experienced Designers</li>
            <li>Royalty-free logos</li>
            <li>100% Money Back Guarantee</li>
          </ul>
        </div>
        <div class="client-satisfaction">
          <h3>WE DELIVER 100% CLIENT SATISFACTION</h3>
          <p>
            We have extensive experience in Mascot Logo Design. GeeksDigital is focused on delivering 100% client
            satisfaction to its customers.
          </p>
        </div>
        <div class="get-started">
          <h3>Ready to Get Started?</h3>
          <p>
            Our pricing plans are affordable and budget-friendly for everyone. Reach out to a manager to discuss
            your specific mascot logo design needs or any query.
          </p>
          <p>Thanks,</p>
          <p>Team GeeksDigital.</p>
        </div>
      </div>
      <hr>
      <div class="about-seller">
        <div class="title">
          <h3>About the seller</h3>
        </div>
        <div class="seller-info">
          <div class="seller-column">
            <img src="<?php echo e(asset('image.png')); ?>" alt="Seller Icon" class="seller-icon">
          </div>
          <div class="seller-column">
            <p class="seller-name">geeksdigital</p>
            <a href="#" class="contact-link">Contact me</a>
          </div>
        </div>
        <div class="seller-details">
          <div class="info">
            <p>From: United States</p>
            <p>Member since: Sep 2019</p>
            <p>Languages: English</p>
            <p>Last delivery: about 2 hours</p>
          </div>
          <div class="about">
            <hr>
            <p>
              I am a Freelance designer with over 15 years of experience in the advertising industry and a
              diploma in graphic design. I design to live, but I also live to design. I specialize in logos,
              branding, web design, illustration, infographics, websites, and PowerPoint.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="sidebar-column">
    <div class="scrollable-content">
      <div class="card">
        <div class="tab-container">
          <div class="tab active" data-tab="basic-tab">Basic</div>
          <div class="tab" data-tab="standard-tab">Standard</div>
          <div class="tab" data-tab="premium-tab">Premium</div>
        </div>
        <div class="info-container">
          <div class="info active" id="basic-tab-info">
            <h2>Basic Package</h2>
            <p>Package details for Basic.</p>
          </div>
          <div class="info" id="standard-tab-info">
            <h2>Standard Package</h2>
            <p>Package details for Standard.</p>
          </div>
          <div class="info" id="premium-tab-info">
            <h2>Premium Package</h2>
            <p>Package details for Premium.</p>
          </div>
        </div>
        <div> <a href="">contact now </a></div>
      </div>
    </div>
  </div>
</div>



<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Get the tabs and info elements
    const tabs = document.querySelectorAll('.tab');
    const infoElements = document.querySelectorAll('.info');

    // Function to show the selected tab and corresponding info
    function showTab(tabId) {
      // Remove active class from all tabs and info elements
      tabs.forEach(tab => tab.classList.remove('active'));
      infoElements.forEach(info => info.classList.remove('active'));

      // Add active class to the selected tab
      const selectedTab = document.querySelector(`[data-tab="${tabId}"]`);
      selectedTab.classList.add('active');

      // Find the corresponding info element and add active class to display it
      const infoElement = document.getElementById(`${tabId}-info`);
      infoElement.classList.add('active');
    }

    // Add click event listener to each tab
    tabs.forEach(tab => {
      tab.addEventListener('click', () => {
        // Get the data-tab value of the clicked tab
        const tabId = tab.dataset.tab;
        showTab(tabId);
      });
    });

    // Show the default tab (Basic) on page load
    showTab('basic-tab');
  });


  const productColumn = document.getElementById('product-column');

productColumn.addEventListener('scroll', function () {
  const scrollHeight = productColumn.scrollHeight;
  const clientHeight = productColumn.clientHeight;
  const scrollTop = productColumn.scrollTop;

  if (scrollTop + clientHeight >= scrollHeight) {
    // Reached the end of the product column, enable scrolling for the entire page
    document.body.style.overflow = 'auto';
  } else {
    // Still scrolling within the product column, disable scrolling for the entire page
    document.body.style.overflow = 'hidden';
  }
});

</script>






</div>
<script>
  // Get the tabs and info elements
  const tabs = document.querySelectorAll('.tab');
  const infoElements = document.querySelectorAll('.info');

  // Add click event listener to each tab
  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      // Remove active class from all tabs and info elements
      tabs.forEach(tab => tab.classList.remove('active'));
      infoElements.forEach(info => info.classList.remove('active'));

      // Add active class to the clicked tab
      tab.classList.add('active');

      // Get the data-tab value of the clicked tab
      const tabId = tab.dataset.tab;

      // Find the corresponding info element and add active class to display it
      const infoElement = document.getElementById(tabId);
      infoElement.classList.add('active');
    });
  });
</script>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\miver\resources\views/pages/gigs/single-gig.blade.php ENDPATH**/ ?>
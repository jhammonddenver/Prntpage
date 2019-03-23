<?php
include_once 'includes/header.php';

?>

<section class="page-tab">
    <div class="container">
      <h2 class="page-tab-header animated-fadeIn">Account Management</h2>
      <ul class="page-tab-list d-flex jc-c">
        <li class="active animated-fadeInUp"><a href="payment-method.php">Payment</a></li>
        <li class="animated-fadeInUp"><a href="messages-am.php">Messages</a></li>
       <li class="animated-fadeInUp"><a href="email-am.php">Email</a></li>
        <li class="animated-fadeInUp"><a href="purchases-am.php">Purchases</a></li>
        <li class="animated-fadeInUp"><a href="friends-am.php">Friends</a></li>
        <li class="animated-fadeInUp"><a href="mydetails-am.php">My Details</a></li>
      </ul>
    </div>
  </section>
  <section class="page-content page-content-payment">
    <div class="container">
      <div class="d-flex">
        <aside class="page-content-nav payment-page-content-nav animated-fadeInLeft">
          <ul class="vertical-tab">
            <li><a href="payment-method.php">Payment Method</a></li>
            <li><a href="payment-history.php">Payment History</a></li>
             <li ><a href="payout-method.php">Payout Method</a></li>
            <li  class="active"><a href="payout.php">Payouts</a></li>
          </ul>
        </aside>
        <div class="page-content-view payment-page-content-view has-header animated-fadeIn ">
          <h4 class="page-content-header">Payouts</h4>
          <div class="content-view">
           
           
           
           
           
           
           
           
           
           
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
include_once 'includes/footer.php';

?>
<?php
include_once 'includes/header.php';

?>

<section class="page-tab">
    <div class="container">
      <h2 class="page-tab-header animated-fadeIn">Account Management</h2>
      <ul class="page-tab-list d-flex jc-c">
        <li class="animated-fadeInUp"><a href="payment-history.php">Payment</a></li>
        <li class="animated-fadeInUp"><a href="messages-am.php">Messages</a></li>
       <li class="animated-fadeInUp"><a href="email-am.php">Email</a></li>
        <li class="active animated-fadeInUp"><a href="purchases-am.php">Purchases</a></li>
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
            <li><a href="#">Payment method</a></li>
            <li class="active"><a href="#">Payment history</a></li>
            <li><a href="#">Payouts</a></li>
          </ul>
        </aside>
        <div class="page-content-view payment-page-content-view has-header animated-fadeIn ">
          <h4 class="page-content-header">Payment history</h4>
          <div class="content-view">
            <table class="table payment-page-table">
              <thead>
                <tr>
                  <th width="5%">FILE</th>
                  <th width="65%">NAME</th>
                  <th width="15%">AMOUNT</th>
                  <th width="15%">DATE</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><img src="images/icons/pdf.png" alt="#"></td>
                  <td>Payment history 123</td>
                  <td class="text-center">$1,200,000</td>
                  <td class="text-center">17/12/18</td>
                </tr>
                <tr>
                  <td><img src="images/icons/pdf.png" alt="#"></td>
                  <td>Payment history 123432</td>
                  <td class="text-center">$1,200,599</td>
                  <td class="text-center">18/12/18</td>
                </tr>
                <tr>
                  <td><img src="images/icons/pdf.png" alt="#"></td>
                  <td>Payment history 123</td>
                  <td class="text-center">$1,200,000</td>
                  <td class="text-center">17/12/18</td>
                </tr>
                <tr>
                  <td><img src="images/icons/pdf.png" alt="#"></td>
                  <td>Payment history 123432</td>
                  <td class="text-center">$1,200,599</td>
                  <td class="text-center">18/12/18</td>
                </tr>
                <tr>
                  <td><img src="images/icons/pdf.png" alt="#"></td>
                  <td>Payment history 123</td>
                  <td class="text-center">$1,200,000</td>
                  <td class="text-center">17/12/18</td>
                </tr>
                <tr>
                  <td><img src="images/icons/pdf.png" alt="#"></td>
                  <td>Payment history 123432</td>
                  <td class="text-center">$1,200,599</td>
                  <td class="text-center">18/12/18</td>
                </tr>
                <tr>
                  <td><img src="images/icons/pdf.png" alt="#"></td>
                  <td>Payment history 123</td>
                  <td class="text-center">$1,200,000</td>
                  <td class="text-center">17/12/18</td>
                </tr>
                <tr>
                  <td><img src="images/icons/pdf.png" alt="#"></td>
                  <td>Payment history 123432</td>
                  <td class="text-center">$1,200,599</td>
                  <td class="text-center">18/12/18</td>
                </tr>
                <tr>
                  <td><img src="images/icons/pdf.png" alt="#"></td>
                  <td>Payment history 123</td>
                  <td class="text-center">$1,200,000</td>
                  <td class="text-center">17/12/18</td>
                </tr>
                <tr>
                  <td><img src="images/icons/pdf.png" alt="#"></td>
                  <td>Payment history 123432</td>
                  <td class="text-center">$1,200,599</td>
                  <td class="text-center">18/12/18</td>
                </tr>
              </tbody>
            </table>
            <ul class="pagination">
              <li><a href="#">Previous</a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li class="active"><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">...</a></li>
              <li><a href="#">35</a></li>
              <li><a href="#">next</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
include_once 'includes/footer.php';

?>
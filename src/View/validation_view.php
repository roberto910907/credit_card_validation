<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="assets/css/style.css">

<?php include 'components/flashbagComponent.php' ?>

<form class="credit-card" action="/index.php" method="POST">
    <div class="form-header">
    <h4 class="title">Credit Card Detail</h4>
  </div>
  <div class="form-body">
    <!-- Card Number -->
    <input type="text" id="cardNumber" name="cardNumber" class="card-number" placeholder="Card Number">

    <!-- Date Field -->
    <div class="date-field">
      <div class="month">
        <select name="month" title="Month">
          <option value="january">January</option>
          <option value="february">February</option>
          <option value="march">March</option>
          <option value="april">April</option>
          <option value="may">May</option>
          <option value="june">June</option>
          <option value="july">July</option>
          <option value="august">August</option>
          <option value="september">September</option>
          <option value="october">October</option>
          <option value="november">November</option>
          <option value="december">December</option>
        </select>
      </div>
      <div class="year">
        <select name="year" title="Year">
          <option value="2016">2016</option>
          <option value="2017">2017</option>
          <option value="2018">2018</option>
          <option value="2019">2019</option>
        </select>
      </div>
    </div>

    <!-- Card Verification Field -->
    <div class="card-verification">
      <div class="cvv-input">
        <input type="text" name="cvv" placeholder="CVV">
      </div>
      <div class="cvv-details">
        <p>3 or 4 digits usually found <br> on the signature strip</p>
      </div>
    </div>

    <!-- Buttons -->
    <button type="submit" class="proceed-btn">Validate Credit Card</button>
  </div>
</form>
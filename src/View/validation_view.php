<link href='assets/css/fonts.css?family=Roboto:400,300,100' rel='stylesheet' type='text/css'>
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="assets/css/style.css">

<?php include 'components/flashbagComponent.php'; ?>

<form id="credit-card-form" class="credit-card" action="/index.php" method="POST">
    <div class="form-header">
        <h4 class="title">Credit Card Detail</h4>
    </div>
    <div class="form-body">
        <!-- Card Number -->
        <div class="card-js">
            <input type="text" id="cardNumber" name="cardNumber" class="card-number" placeholder="Card Number">
            <div class="icon">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="3px" width="24px" height="17px"
                     viewBox="0 0 216 146" enable-background="new 0 0 216 146" xml:space="preserve"><g>
                        <path class="svg"
                              d="M182.385,14.258c-2.553-2.553-5.621-3.829-9.205-3.829H42.821c-3.585,0-6.653,1.276-9.207,3.829c-2.553,2.553-3.829,5.621-3.829,9.206v99.071c0,3.585,1.276,6.654,3.829,9.207c2.554,2.553,5.622,3.829,9.207,3.829H173.18c3.584,0,6.652-1.276,9.205-3.829s3.83-5.622,3.83-9.207V23.464C186.215,19.879,184.938,16.811,182.385,14.258z M175.785,122.536c0,0.707-0.258,1.317-0.773,1.834c-0.516,0.515-1.127,0.772-1.832,0.772H42.821c-0.706,0-1.317-0.258-1.833-0.773c-0.516-0.518-0.774-1.127-0.774-1.834V73h135.571V122.536z M175.785,41.713H40.214v-18.25c0-0.706,0.257-1.316,0.774-1.833c0.516-0.515,1.127-0.773,1.833-0.773H173.18c0.705,0,1.316,0.257,1.832,0.773c0.516,0.517,0.773,1.127,0.773,1.833V41.713z"
                              style="fill: rgb(21, 140, 186);"></path>
                        <rect class="svg" x="50.643" y="104.285" width="20.857" height="10.429"
                              style="fill: rgb(21, 140, 186);"></rect>
                        <rect class="svg" x="81.929" y="104.285" width="31.286" height="10.429"
                              style="fill: rgb(21, 140, 186);"></rect>
                    </g></svg>
            </div>
        </div>

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
                </select>
            </div>
        </div>

        <!-- Card Verification Field -->
        <div class="card-verification">
            <div class="cvv-input card-js">
                <input type="text" name="cvv" placeholder="CVV">
                <div class="icon-lock">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="3px" width="24px" height="17px"
                         viewBox="0 0 216 146" enable-background="new 0 0 216 146" xml:space="preserve"><path
                                class="svg"
                                d="M152.646,70.067c-1.521-1.521-3.367-2.281-5.541-2.281H144.5V52.142c0-9.994-3.585-18.575-10.754-25.745c-7.17-7.17-15.751-10.755-25.746-10.755s-18.577,3.585-25.746,10.755C75.084,33.567,71.5,42.148,71.5,52.142v15.644h-2.607c-2.172,0-4.019,0.76-5.54,2.281c-1.521,1.52-2.281,3.367-2.281,5.541v46.929c0,2.172,0.76,4.019,2.281,5.54c1.521,1.52,3.368,2.281,5.54,2.281h78.214c2.174,0,4.02-0.76,5.541-2.281c1.52-1.521,2.281-3.368,2.281-5.54V75.607C154.93,73.435,154.168,71.588,152.646,70.067z M128.857,67.786H87.143V52.142c0-5.757,2.037-10.673,6.111-14.746c4.074-4.074,8.989-6.11,14.747-6.11s10.673,2.036,14.746,6.11c4.073,4.073,6.11,8.989,6.11,14.746V67.786z"
                                style="fill: rgb(21, 140, 186);"></path>
                    </svg>
                </div>
            </div>
            <div class="cvv-details">
                <p>3 or 4 digits usually found <br> on the signature strip</p>
            </div>
        </div>

        <!-- Buttons -->
        <button type="submit" class="proceed-btn">Validate Credit Card</button>
    </div>
</form>

<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $('#credit-card-form').validate({
        rules: {
            cardNumber: {
                required: true,
                minlength: 16,
                maxlength: 16,
                digits: true
            }
        }
    });
</script>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pricing Page</title>
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <style type="text/css">
        .container {
            margin-top: 100px;
        }

        .card {
            width: 300px;
        }

        .card:hover {
            -webkit-transform: scale(1.05);
            -moz-transform: scale(1.05);
            -ms-transform: scale(1.05);
            -o-transform: scale(1.05);
            transform: scale(1.05);
            -webkit-transition: all .3s ease-in-out;
            -moz-transition: all .3s ease-in-out;
            -ms-transition: all .3s ease-in-out;
            -o-transition: all .3s ease-in-out;
            transition: all .3s ease-in-out;
        }

        .list-group-item {
            border: 0px;
            padding: 5px;
        }

        .price {
            font-size: 72px;
        }

        .currency {
            position: relative;
            font-size: 25px;
            top: -31px;
        }
    </style>
</head>
<body>
<div class="container">
    <?php
        require_once "config.php";
    
        foreach ($products as $productID => $attributes) {
                        echo '
                            <br>
                            <form action="stripeIPN.php?id='.$productID.'" method="POST">
                              <script 
                                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                data-key="'.$stripeDetails['publishableKey'].'"
                                data-amount="5000"
                                data-currency="inr"
                                data-name="Agriculture Payment Portal"
                                data-description="Payment"
                                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                data-label="Buy Now"
                                data-locale="auto">
                              </script>
                            </form>
            ';
        }
    ?>
</div>
</body>
</html>
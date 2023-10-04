<?php
include('../connect/connection.php');
include 'header.php';

if (isset($_POST['submit'])) {
    // Retrieve user information from the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $telno = $_POST['telno'];
    $address = $_POST['address'];

    // Assuming you have the purchase details in session variables, retrieve them here.
    $cartData = $_SESSION['cartData']; // Assuming you have cart data in a session variable

    // Initialize total price to zero
    $totalPrice = 0;

    foreach ($cartData as $item) {
        // Retrieve product details from the cart
        $noID = $item['noID'];
        $category = $item['category'];
        $size = $item['size'];
        $color = $item['color'];
        $quantity = $item['quantity'];
        $price = $item['price'];

        // Calculate total price for each product
        $itemTotalPrice = $price * $quantity;
        $totalPrice += $itemTotalPrice;

        // Insert purchase information into the purchaseinfo table for each product
        $insertPurchaseInfo = "INSERT INTO purchaseinfo (noID, category, email, size, color, quantity, totalprice)
        VALUES (?, ?, ?, ?, ?, ?, ?)";

        $stmt = $connect->prepare($insertPurchaseInfo);
        $stmt->bind_param('sssssid', $noID, $category, $email, $size, $color, $quantity, $itemTotalPrice);

        if ($stmt->execute()) {
            // Insertion for this product was successful
        } else {
            // Handle insertion failure for this product
            echo "Failed to insert purchase information for product: $category";
        }
    }

    // Continue with payment processing and redirection code
    // ...

    // Redirect to the payment gateway
    $harga = $totalPrice;
    $rmx100 = ($harga * 100);
    $some_data = array(
        'userSecretKey' => 'o6qobouo-r8tf-svi1-efyx-bia1qiljh5y3',
        'categoryCode' => 'v3o9eqvg',
        'billName' => 'Make Payment',
        'billDescription' => 'Item Payment to Wanniz Shoppe',
        'billPriceSetting' => 1,
        'billPayorInfo' => 1,
        'billAmount' => $rmx100,
        'billReturnUrl' => 'http://bizapp.my',
        'billCallbackUrl' => '',
        'billExternalReferenceNo' => '',
        'billTo' => $name,
        'billEmail' => $email,
        'billPhone' => $telno,
        'billAddress' => $address,
        'billSplitPayment' => 0,
        'billSplitPaymentArgs' => '',
        'billPaymentChannel' => '0',
    );

    // Continue with payment processing and redirection code
    // ...

    // Redirect to the payment gateway
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_URL, 'https://toyyibpay.com/index.php/api/createBill');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $some_data);

    $result = curl_exec($curl);
    $info = curl_getinfo($curl);
    curl_close($curl);
    $obj = json_decode($result, true);
    $billcode = $obj[0]['BillCode'];

    echo '<script type="text/javascript">';
    echo 'window.location.href="https://toyyibpay.com/' . $billcode . '";';
    echo '</script>';
} else {
    echo "<p class='error-message'>No form submission found.</p>";
}

include 'footer.php';
?>

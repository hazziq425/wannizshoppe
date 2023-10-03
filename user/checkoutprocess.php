<?php
if (isset($_POST['submit'])) {
    include('../connect/connection.php');

    $harga = $_GET['totalPrice'];

    // Retrieve user information from the database based on user session or other criteria
    session_start();
    if (isset($_SESSION['nama'])) {
        $username = $_SESSION['nama'];

        // Fetch user information from the database based on the username
        $fetchUserInfo = "SELECT nama, email, phone FROM signupacc WHERE nama='$username'";
        $userInfoResult = $connect->query($fetchUserInfo);

        if (!$userInfoResult) {
            // Handle query errors here
            echo "Query Error: " . $connect->error;
            exit;
        }

        // Check if user information was found
        if ($userInfoResult->num_rows > 0) {
            $userInfo = $userInfoResult->fetch_assoc();
            $name = $userInfo['nama'];
            $email = $userInfo['email'];
            $telno = $userInfo['phone'];

            // Process the payment information using retrieved user data
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
                'billSplitPayment' => 0,
                'billSplitPaymentArgs' => '',
                'billPaymentChannel' => '0',
            );

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

            // Redirect to the payment gateway
            echo '<script type="text/javascript">';
            echo 'window.location.href="https://toyyibpay.com/' . $billcode . '";';
            echo '</script>';
        } else {
            // Handle the case where user information was not found in the database
            echo "User information not found.";
        }
    } else {
        // Handle the case where the user is not logged in
        echo "User not logged in.";
    }
}
?>

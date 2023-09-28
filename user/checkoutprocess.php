<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $telno = $_POST['telno'];
    $harga = $_GET['totalPrice'];

    // You can process and store this information as needed, e.g., in a database
    $rmx100=($harga*100);
    $some_data = array(
      'userSecretKey'=>'o6qobouo-r8tf-svi1-efyx-bia1qiljh5y3',
      'categoryCode'=>'v3o9eqvg',
      'billName'=>'Make Payment',
      'billDescription'=>'Item Payment to Wanniz Shoppe',
      'billPriceSetting'=>1,
      'billPayorInfo'=>1,
      'billAmount'=>$rmx100,
      'billReturnUrl'=>'http://bizapp.my',
      'billCallbackUrl'=>'',
      'billExternalReferenceNo' => '',
      'billTo'=>$name,
      'billEmail'=>$email,
      'billPhone'=>$telno,
      'billSplitPayment'=>0,
      'billSplitPaymentArgs'=>'',
      'billPaymentChannel'=>'0',
    );  
  
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_URL, 'https://toyyibpay.com/index.php/api/createBill');  
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $some_data);
  
    $result = curl_exec($curl);
    $info = curl_getinfo($curl);  
    curl_close($curl);
    $obj = json_decode($result,true);
    $billcode=$obj[0]['BillCode'];
}
?>

<script type="text/javascript">
    //redirect to payment gateway
    window.location.href="https://toyyibpay.com/<?php echo $billcode;?>";
</script>

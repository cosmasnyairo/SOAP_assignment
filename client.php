<html>

<head>
    <link rel="stylesheet" type="text/css" href="register_student/style.css">
</head>

<body style="margin: 50 ;">
    <form method="post">
        <div class="input-group" , style="width: fit-content;">
            <label>Student number</label>
            <input type="number" name="admissionumber" , value="">
        </div>



        <div class="input-group">
            <button type="submit" class="btn">Fetch</button>
        </div>

        <form>
            <br>

            <?php
            require 'lib/nusoap.php';
            #pass wsdl file address
            $client = new nusoap_client("https://localhost/soapexercise/server.php?wsdl",);

            $admission_no = $_POST['admissionumber'];
            $client->call('fetchstudent', array("admission_no" => $admission_no));
            $name = $client->response;
            echo 'Response:<br>';
            echo '<br>';
            echo $name;
            ?>

</body>

</html>
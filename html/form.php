<html>
<head>
	<title>Registration Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

    <?php if (isset($_POST['form_submitted'])): ?>

        <?php if (!isset($_POST['agree'])): ?>
<!--
            <p>You have not accepted our terms of service</p>
        -->
            <?php else: ?>

                <h2>Thank You <?php echo $_POST['firstname']; ?></h2>

                <h3><i><p>Message Sent!
                    <?php echo $_POST['firstname'] . ' ' . $_POST['lastname']; ?>
                </p></i></h3>

                <p>  If i am unable to reply please mail me at <a href="mailto:samuraisam82@gmail.com">samuraisam82@gmail.com</a> </p>

            <?php endif; ?>

            <?php else: ?>

	<?php endif; ?>
</body>
</html>
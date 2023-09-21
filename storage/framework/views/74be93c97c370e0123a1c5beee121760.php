<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Form Submission</title>
</head>

<body>
    <p>Name: <?php echo e($data['firstName']); ?> <?php echo e($data['lastName']); ?></p>
    <p>Email: <?php echo e($data['email']); ?></p>
    <p>Subject: <?php echo e($data['subject']); ?></p>
    <p>Message: <?php echo e($data['message']); ?></p>
</body>
</html>
<?php /**PATH C:\Users\user\PhpstormProjects\noci-portofolio\resources\views/email/contact.blade.php ENDPATH**/ ?>
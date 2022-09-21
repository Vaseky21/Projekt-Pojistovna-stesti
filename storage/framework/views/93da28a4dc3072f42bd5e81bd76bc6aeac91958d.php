<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document PDF</title>
</head>
<body>
    <h1>
      Název Pojištení štestí:  <?php echo e($customer ->name); ?>

    </h1>
    <h2>
        Jméno pojištence: <?php echo e($customer ->customer->name); ?>

    </h2>
    <h3>
        Datum zacatku platnosti pojišteni: <?php echo e($customer ->date); ?>

    </h3>
    <p>
        Adresa klienta: <?php echo e($customer ->customer->adress); ?>

    </p>
    <br/>
    <p>
        PSC: <?php echo e($customer->customer->zip); ?>

    </p>

</body>
</html><?php /**PATH D:\Pojisteni\resources\views/Pdf.blade.php ENDPATH**/ ?>
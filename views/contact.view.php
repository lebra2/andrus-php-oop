<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    <h1>Contact</h1>
    <div style="display: flex; justify-content: center; align-items: center; gap: 1rem;">
        <?php foreach ($contacts as $contact): ?>
            <div style="border: solid black 2px; padding: 6px;">
                <p style="margin: 0; font-size: 18px; font-weight: bold;"><?= $contact->nimi; ?></p>
                <p style="margin: 0;"><?= $contact->email; ?></p>
                <p style="margin: 0;"><?= $contact->number; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
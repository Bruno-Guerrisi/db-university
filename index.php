<?php
    require_once __DIR__ . '/scripts/get-database.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css' integrity='sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==' crossorigin='anonymous'/>
    <title>Document</title>
</head>
<body>

    <main class="container">

        <table class="table table-">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Website</th>
                    <th>Head of Department</th>
                    <th>Other</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($departments as $department) { ?>
                    <tr>
                        <th><?php echo $department['id']; ?></th>
                        <th><?php echo $department['name']; ?></th>
                        <th><?php echo $department['address']; ?></th>
                        <th><?php echo $department['phone']; ?></th>
                        <th><?php echo $department['email']; ?></th>
                        <th><?php echo $department['website']; ?></th>
                        <th><?php echo $department['head_of_department']; ?></th>
                        <th>
                            <a href="<?php echo "./show.php?id={$department['head_of_department']}"; ?>">open website</a>
                        </th>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
    
</body>
</html>
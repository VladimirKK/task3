<?php

 $data = file_get_contents(__DIR__ . '/countries.json');
$contries = json_decode($data, true);

?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Справочник</title>
  </head>
  <body>
    <table>
      <tr>
        <td>NAME</td>
        <td>FAMILY</td>
        <td>ADRESS</td>
        <td>PHONE</td>
      </tr>

        <?php foreach ($contries as $country) {  ?>
      <tr>
          <td><?php echo $country['name'] ?></td>
            <td><?php echo $country['family'] ?></td>
              <td><?php echo $country['adress'] ?></td>
              <td><?php echo $country['phoneNumber'] ?></td>
        </tr>
      <?php  } ?>

    </table>
  </body>
</html>

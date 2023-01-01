<?php @include '/Applications/XAMPP/xamppfiles/htdocs/poke_api/getInfo.php'; ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>PokeDex</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Pokemon Dex</h2>
  <!-- <p>The .table-striped class adds zebra-stripes to a table:</p>             -->
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th class="center">Image</th>
        <th>Type</th>
        <th>Ability</th>
        <th>Stats</th>
        <th>Dex-Order</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    for($id = 1; $id<=151; $id++){?>
      <tr>
        <td><?php echo getData($id)->id; ?></td>
        <td><?php echo getData($id)->name; ?></td>
        <td>
            <img src="<?php echo getData($id)->sprites->front_default; ?>" alt="">
            <img src="<?php echo getData($id)->sprites->back_default; ?>" alt="">
        </td>
        <td><?php getTypes($id); ?></td>
        <td><?php getAbility($id) ?></td>
        <td><?php getStats($id) ?></td>
        <td><?php echo getData($id)->order; ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>

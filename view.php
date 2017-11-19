
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <?php  foreach ($select as $v) {
                foreach ($v as $v2 => $k) { ?>
            <th><?php print_r($v2);?></th>
            <?php  } break; } ?>
        </tr>
        </thead>
        <tbody>
        <?php  foreach ($select as $v) {?>
        <tr>
                <?php foreach ($v as $v2 => $k) { ?>
                    <td><?php print_r($k);?></td>
                <?php  }?>
        </tr>
        <?php  } ?>
        </tbody>
    </table>


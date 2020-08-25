<table class="table table-hover">
    <thead>
        <tr>
            <th></th>
            <th>Type of berth</th>
            <th>Dimensions</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($berths as $row): ?>
        <tr id="<?php echo $row->id; ?>">
            <td>Berth <?php echo $row->berth_num; ?></td>
            <td><?php echo $row->type_berth ?></td>
            <td><?php echo $row->width_berth.' x '.$row->length_berth; ?></td>
            <td><a href="#" onclick="del_berth(this)">Remove</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
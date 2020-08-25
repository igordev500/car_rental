    
<thead>
    <tr>
        <th>photo</th>
        <th>campers_name</th>
        <th>status</th>
    </tr>
</thead>
<tbody>
    <?php foreach($ads as $row): ?>
    <tr id="<?php echo $row->id ;?>" v_type="<?php echo $row->chassis_brand;?>" onclick="get_ads_id(this)">
        <td><img src="/uploads/ads_photos/<?php echo $row->img_name ;?>" width="200px" height="180px" alt=""></td>
        <td><?php echo $row->chassis_brand.'&nbsp&nbsp'.$row->chassis_model ;?></td>
        <td><?php if($row->status==1){echo "<span style='color:blue'>verified</span>";}else{echo "<span style='color:red'>pending</span>";} ;?></td>
    </tr>
    <?php endforeach;?>
</tbody>



    
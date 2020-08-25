

<?php foreach($photos as $row): ?>
    <div class="col-md-3" ads_id="<?php echo $row->ads_id; ?>" style="text-align:center;padding:20px;">
        <img title="<?php echo $row->photo_num; ?>" style="width:300px;height:200px;" src="/uploads/ads_photos/<?php echo $row->img_name; ?>" alt="">
    </div>
<?php endforeach;?>

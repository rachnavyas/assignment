<?php
foreach($res_state as $h)
{
    ?>
    <option value="<?php echo $h->sid;?>">
    <?php echo $h->sname;?>
</option>
<?php
}
?>

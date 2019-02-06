<option value="0">Subcategoria</option>
<?php
foreach ($data as $key => $value) {
?>
    <option value="<?php echo $key; ?>"><?php echo ucfirst($value); ?></option>
<?php
}
?>

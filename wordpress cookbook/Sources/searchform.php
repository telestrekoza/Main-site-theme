<form method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>" style="margin: 0;">

<p><input style="width: 97%; " type="text" value="введите запрос" name="s" id="s" onfocus="if (this.value == 'введите запрос') {this.value = '';}" onblur="if (this.value == '') {this.value = 'введите запрос';}" /></p>

<input type="submit" id="searchsubmit" style="display: none;" value="Search" />
</form>
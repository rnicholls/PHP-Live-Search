<?php
require_once("./ProConfig/class.mysql.php");
$db = new DB();
if($_POST){
    $search_key_word = mysql_real_escape_string($_POST['search']);
    $sql             = "SELECT * FROM search WHERE function LIKE '%$search_key_word%' OR name LIKE '%$search_key_word%'";
    $rst             = DB::dbQuery($sql);
    while($row = DB::dbFetchArray($rst)){
        $function = $row['function'];
        $name     = $row['name'];
?>
        <div class="show" align="left">
            <img src="./no_img.gif" style="width:50px; height:50px; float:left; margin-right:6px;" />
            <span class="name"><?php echo $name; ?></span><br/>
            <?php echo $function; ?><br/>
        </div>
<?php
    }
}
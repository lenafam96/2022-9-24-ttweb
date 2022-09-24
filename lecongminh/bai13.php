<?php
$canh1 = $_POST["canh1"]??"";
$canh2 = $_POST["canh2"]??"";
$canh3 = $_POST["canh3"]??"";
$canh4 = $_POST["canh4"]??"";
$canh5 = $_POST["canh5"]??"";
$loaitamgiac = "";
if($canh1!=="" && $canh2!=="" && $canh3!=="" && $canh4!=="" && $canh5!==""){
    $loaitamgiac = max($canh1,$canh2,$canh3,$canh4,$canh5);
}
?>
<form action="?action=bai13" method="post">
    <table class="bai11">
        <tr>
            <th colspan="2" class="bai11">TÌM SỐ LỚN NHẤT</th>
        </tr>
        <tr>
            <td class="title">Số thứ 1:</td>
            <td><input type="number" name="canh1" id="canh1" min="0" step="0.01" required value="<?php echo $canh1 ?>"></td>
        </tr>
        <tr>
            <td class="title">Số thứ 2:</td>
            <td><input type="number" name="canh2" id="canh2" min="0" step="0.01" required value="<?php echo $canh2 ?>"></td>
        </tr>
        <tr>
            <td class="title">Số thứ 3:</td>
            <td><input type="number" name="canh3" id="canh3" min="0" step="0.01" required value="<?php echo $canh3 ?>"></td>
        </tr>
        <tr>
            <td class="title">Số thứ 4:</td>
            <td><input type="number" name="canh4" id="canh4" min="0" step="0.01" required value="<?php echo $canh4 ?>"></td>
        </tr>
        <tr>
            <td class="title">Số thứ 5:</td>
            <td><input type="number" name="canh5" id="canh5" min="0" step="0.01" required value="<?php echo $canh5 ?>"></td>
        </tr>
        <tr>
            <td class="title">Số lớn nhất:</td>
            <td><input type="number" name="loaitamgiac" id="loaitamgiac" disabled value="<?php echo $loaitamgiac ?>"></td>
        </tr>
        <tr>
            <td colspan="2" class="button">
                <button type="submit" name="sbm">Tìm số lớn nhất</button>
            </td>
        </tr>
    </table>
    <a href="index.php">Trang chủ</a>
</form>
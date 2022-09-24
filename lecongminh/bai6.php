<?php
$h = $_POST["gio"]??"";
$message = "";
if($h!==""){
    if($h>=0 && $h<13)
        $message = "Chào buổi sáng!";
    else if($h<=18)
        $message = "Chào buổi chiều!";
    else
        $message = "Chào buổi tối!";
}
?>
<form action="?action=bai6" method="post">
    <table class="bai6">
        <tr>
            <th colspan="2" class="bai6">CHÀO THEO GIỜ</th>
        </tr>
        <tr>
            <td class="title">Nhập giờ:</td>
            <td class="input"><input type="number" name="gio" id="gio" min="0" max="23" step="0.1" required value="<?php echo $h ?>"></td>
        </tr>
        <tr>
            <td colspan="2">
                <p class="message"><?php echo $message; ?></p>
            </td>
        </tr>
        <tr>
            <th colspan="2"  class="bai6">
                <button type="submit" name="sbm">Chào</button>
            </th>
        </tr>
    </table>
    <a href="index.php">Trang chủ</a>
</form>
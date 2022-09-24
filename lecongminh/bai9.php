<?php
$a = $_POST["a"]??"";
$b = $_POST["b"]??"";
$nghiem = "";
if($a!=="" && $b!==""){
    if($a==0)
        if($b==0)
            $nghiem = "Phương trình có vô số nghiệm";
        else
            $nghiem = "Phương trình vô nghiệm";
    else
        $nghiem = "x = ".(-$b/$a);
}
?>
<form action="?action=bai9" method="post">
    <table class="bai9">
        <tr>
            <th colspan="2" class="bai9">GIẢI PHƯƠNG TRÌNH BẬC NHẤT</th>
        </tr>
        <tr>
            <td class="title">Phương trình</td>
            <td>
                <input type="number" name="a" class="input-bai9" required value="<?php echo $a; ?>">
                <span>x + </span>
                <input type="number" name="b" class="input-bai9" required value="<?php echo $b; ?>">
                <span> = 0</span>
            </td>
        </tr>
        <tr>
            <td class="title">Nghiệm:</td>
            <td><input type="text" name="nghiem" id="diemtb" disabled value="<?php echo $nghiem; ?>"></td>
        </tr>
        <tr>
            <td colspan="2" class="button">
                <button type="submit" name="sbm">Giải phương trình</button>
            </td>
        </tr>
    </table>
    <a href="index.php">Trang chủ</a>
</form>
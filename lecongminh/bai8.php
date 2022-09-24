<?php
$toan = $_POST["toan"]??"";
$ly = $_POST["ly"]??"";
$hoa = $_POST["hoa"]??"";
$diemchuan = $_POST["diemchuan"]??"";
$tongdiem = "";
$ketquathi = "";
if($toan !== "" && $ly !== "" && $hoa !== "" && $diemchuan !== ""){
    $tongdiem = ($toan + $ly + $hoa);
    if($toan>0 && $ly>0 && $hoa>0 && $tongdiem>$diemchuan) $ketquathi = "Đậu";
    else $ketquathi = "Rớt";
}

?>
<form action="?action=bai8" method="post">
    <table class="bai8">
        <tr>
            <th colspan="2" class="bai8">KẾT QUẢ THI ĐẠI HỌC</th>
        </tr>
        <tr>
            <td class="title">Toán:</td>
            <td class="input"><input type="number" name="toan" id="toan" min="0" max="10" step="0.1" required value="<?php echo $toan; ?>"></td>
        </tr>
        <tr>
            <td class="title">Lý:</td>
            <td class="input"><input type="number" name="ly" id="ly" min="0" max="10" step="0.1" required value="<?php echo $ly; ?>"></td>
        </tr>
        <tr>
            <td class="title">Hoá:</td>
            <td class="input"><input type="number" name="hoa" id="hoa" min="0" max="10" step="0.1" value="<?php echo $hoa; ?>"></td>
        </tr>
        <tr>
            <td class="title">Điểm chuẩn:</td>
            <td class="input"><input type="number" name="diemchuan" id="diemchuan" disable value="<?php echo $diemchuan; ?>"></td>
        </tr>
        <tr>
            <td class="title">Tổng điểm:</td>
            <td class="input"><input type="number" name="tongdiem" id="diemtb" disable value="<?php echo $tongdiem; ?>"></td>
        </tr>
        <tr>
            <td class="title">Kết quả thi</td>
            <td class="input"><input type="text" name="ketquathi" id="diemtb" disable value="<?php echo $ketquathi; ?>"></td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" name="sbm">Xem kết quả</button>
            </td>
        </tr>
    </table>
    <a href="index.php">Trang chủ</a>
</form>
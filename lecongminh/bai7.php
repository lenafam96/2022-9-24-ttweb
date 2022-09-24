<?php
$diemhk1 = $_POST["diemhk1"]??"";
$diemhk2 = $_POST["diemhk2"]??"";
$diemtb = "";
$ketqua = "";
$xeploaihocluc = "";
if($diemhk1 !== "" && $diemhk2 !== ""){
    $diemtb = ($diemhk1 + $diemhk2*2)/3;
    $ketqua = $diemtb>=5?"Được lên lớp":"Ở lại lớp";
    if($diemtb>=8) $xeploaihocluc = "Giỏi";
    else if($diemtb>6.5) $xeploaihocluc = "Khá";
    else if($diemtb>=5) $xeploaihocluc = "Trung bình";
    else $xeploaihocluc = "Yếu";
}

?>
<form action="?action=bai7" method="post">
    <table class="bai7">
        <tr>
            <th colspan="2" class="bai7">KẾT QUẢ HỌC TẬP</th>
        </tr>
        <tr>
            <td class="title">Điểm HK1:</td>
            <td class="input"><input type="number" name="diemhk1" id="diemhk1" min="0" max="10" step="0.1" required value="<?php echo $diemhk1; ?>"></td>
        </tr>
        <tr>
            <td class="title">Điểm HK2:</td>
            <td class="input"><input type="number" name="diemhk2" id="diemhk2" min="0" max="10" step="0.1" required value="<?php echo $diemhk2; ?>"></td>
        </tr>
        <tr>
            <td class="title">Điểm trung bình:</td>
            <td class="input"><input type="number" name="diemtb" id="diemtb" min="0" max="10" step="0.1" disable value="<?php echo $diemtb; ?>"></td>
        </tr>
        <tr>
            <td class="title">Kết quả:</td>
            <td class="input"><input type="text" name="ketqua" id="diemtb" disable value="<?php echo $ketqua; ?>"></td>
        </tr>
        <tr>
            <td class="title">Xếp loại học lực:</td>
            <td class="input"><input type="text" name="xeploaihocluc" id="diemtb" disable value="<?php echo $xeploaihocluc; ?>"></td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" name="sbm">Xem kết quả</button>
            </td>
        </tr>
    </table>
    <a href="index.php">Trang chủ</a>
</form>
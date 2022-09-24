<?php
$giobatdau = $_POST["giobatdau"]??"";
$gioketthuc = $_POST["gioketthuc"]??"";
$tienthanhtoan = "";
if($giobatdau!=="" && $gioketthuc!==""){
    if($giobatdau<$gioketthuc){
        if($giobatdau>17)
            $tienthanhtoan = ($gioketthuc-$giobatdau)*45000;
        else if($gioketthuc<17)
            $tienthanhtoan = ($gioketthuc-$giobatdau)*20000;
        else
            $tienthanhtoan = ($gioketthuc-17)*45000 + (17-$giobatdau)*20000;
    }
    else
        $tienthanhtoan = "Giờ kết thúc phải > giờ bắt đầu";
}
?>
<form action="?action=bai10" method="post">
    <table class="bai10">
        <tr>
            <th colspan="2" class="bai10">TÍNH TIỀN KARAOKE</th>
        </tr>
        <tr>
            <td class="title">Giờ bắt đầu:</td>
            <td><input type="number" name="giobatdau" id="giobatdau" min="10" max="24" step="1" required value="<?php echo $giobatdau; ?>"><span> (h)</span></td>
        </tr>
        <tr>
            <td class="title">Giờ kết thúc:</td>
            <td><input type="number" name="gioketthuc" id="gioketthuc" min="10" max="24" step="1" required value="<?php echo $gioketthuc; ?>"><span> (h)</span></td>
        </tr>
        <tr>
            <td class="title">Tiền thanh toán:</td>
            <td><input type="text" name="tienthanhtoan" id="diemtb" disabled value="<?php echo $tienthanhtoan; ?>"><span> (VNĐ)</span></td>
        </tr>
        <tr>
            <td colspan="2" class="button">
                <button type="submit" name="sbm">Tính tiền</button>
            </td>
        </tr>
    </table>
    <a href="index.php">Trang chủ</a>
</form>
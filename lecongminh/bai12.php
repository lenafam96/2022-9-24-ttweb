<?php
$a = $_POST["a"]??"";
$b = $_POST["b"]??"";
$c = $_POST["c"]??"";
$nghiem = "";
if($a!=="" && $b!=="" && $c!==""){
    if($a!=0){
        $delta = $b*$b - 4*$a*$c;
        if($delta<0){
            $nghiem = "Phương trình vô nghiệm thực";
        }
        else if($delta === 0) 
            $nghiem = "Phương trình có nghiệm kép x = ".(-$b/(2*$a));
        else
            $nghiem = "x1 = ".((-$b+sqrt($delta))/(2*$a))."; x2 = ".((-$b-sqrt($delta))/(2*$a));
    }
    else
        $nghiem = "Không phải phương trình bậc 2";
}
?>
<form action="?action=bai12" method="post">
    <table class="bai9">
        <tr>
            <th colspan="2" class="bai9">GIẢI PHƯƠNG TRÌNH BẬC HAI</th>
        </tr>
        <tr>
            <td class="title">Phương trình</td>
            <td>
                <input type="number" name="a" class="input-bai9" required value="<?php echo $a; ?>">
                <span>x<sup>2</sup> + </span>
                <input type="number" name="b" class="input-bai9" required value="<?php echo $b; ?>">
                <span>x + </span>
                <input type="number" name="c" class="input-bai9" required value="<?php echo $c; ?>">
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
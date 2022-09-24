<?php
$canh1 = $_POST["canh1"]??"";
$canh2 = $_POST["canh2"]??"";
$canh3 = $_POST["canh3"]??"";
$loaitamgiac = "";
if($canh1!=="" && $canh2!=="" && $canh3!==""){
    if($canh1+$canh2>$canh3 && $canh3+$canh2>$canh1 && $canh1+$canh3>$canh2){
        if($canh1 === $canh2 && $canh3 === $canh2 && $canh1 === $canh3)
            $loaitamgiac = "Tam giác đều";
        else if(($canh1 === $canh2 || $canh3 === $canh2 || $canh1 === $canh3) && (($canh1*$canh1 + $canh2*$canh2) === $canh3*$canh3 || ($canh3*$canh3 + $canh2*$canh2) === $canh1*$canh1 || ($canh1*$canh1 + $canh3*$canh3) === $canh1*$canh1))
            $loaitamgiac = "Tam giác vuông cân";
        else if($canh1 === $canh2 || $canh3 === $canh2 || $canh1 === $canh3)
            $loaitamgiac = "Tam giác cân";
        else if(($canh1*$canh1 + $canh2*$canh2) === $canh3*$canh3 || ($canh3*$canh3 + $canh2*$canh2) === $canh1*$canh1 || ($canh1*$canh1 + $canh3*$canh3) === $canh1*$canh1)
            $loaitamgiac = "Tam giác vuông";
        else
            $loaitamgiac = "Tam giác thường";
    }
    else
        $loaitamgiac = "Không là tam giác";
}
?>
<form action="?action=bai11" method="post">
    <table class="bai11">
        <tr>
            <th colspan="2" class="bai11">NHẬN DẠNG TAM GIÁC</th>
        </tr>
        <tr>
            <td class="title">Cạnh 1:</td>
            <td><input type="number" name="canh1" id="canh1" min="0" step="0.01" required value="<?php echo $canh1 ?>"> (cm)</td>
        </tr>
        <tr>
            <td class="title">Cạnh 2:</td>
            <td><input type="number" name="canh2" id="canh2" min="0" step="0.01" required value="<?php echo $canh2 ?>"> (cm)</td>
        </tr>
        <tr>
            <td class="title">Cạnh 3:</td>
            <td><input type="number" name="canh3" id="canh3" min="0" step="0.01" required value="<?php echo $canh3 ?>"> (cm)</td>
        </tr>
        <tr>
            <td class="title">Loại tam giác:</td>
            <td><input type="text" name="loaitamgiac" id="loaitamgiac" disabled value="<?php echo $loaitamgiac ?>"></td>
        </tr>
        <tr>
            <td colspan="2" class="button">
                <button type="submit" name="sbm">Nhận dạng</button>
            </td>
        </tr>
    </table>
    <a href="index.php">Trang chủ</a>
</form>
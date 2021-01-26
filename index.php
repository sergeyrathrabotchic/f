<!DOCTYPE html>
<html>

<head>

</head>
<body>
<?php
$o = 1;
$vid=1;
$id = 0;
$date = 0;

$vr =0;
$vdate = 0;
$dop = "";








$host = 'localhost';
$database = 'host1825783';
$user = 'host1825783';
$password = 'ncKb82EDpe';



$conn = mysqli_connect($host,$user,$password,$database);
$sql = 'SELECT * FROM `r`';
$result = mysqli_query($conn, $sql);


$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);







if(isset($_POST["start"])) {
    $id = htmlspecialchars($_POST["hello"]);

    $sql5 = 'SELECT region FROM `r` WHERE ID = ' . $id;
    $result5 = mysqli_query($conn, $sql5);
    $region = mysqli_fetch_all($result5, MYSQLI_ASSOC);




    $vr = 1;
    //echo "<pre>"; print_r( $id); echo "</pre>";
}









if(isset($_POST["start2"])) {
    $date= htmlspecialchars($_POST["date"]);
    $datеd= $date;
    $id = htmlspecialchars($_POST["r"]);
    //echo "<pre>"; print_r( $id); echo "</pre>";
    $sql2 = 'SELECT * FROM `rz`';
    $result2 = mysqli_query($conn, $sql2);
    $rows2 = mysqli_fetch_all($result2, MYSQLI_ASSOC);

    $sql4 = 'SELECT vrm FROM `r` WHERE ID = ' . $id;
    $result4 = mysqli_query($conn, $sql4);
    $vrm = mysqli_fetch_all($result4, MYSQLI_ASSOC);
    $sql9 = 'SELECT region FROM `r` WHERE ID = ' . $id;
    $result9 = mysqli_query($conn, $sql9);
    $region = mysqli_fetch_all($result9, MYSQLI_ASSOC);
    //echo "<pre>"; print_r( $vrm); echo "</pre>";
    //echo "<pre>"; print_r( $vrm[0]["vrm"]); echo "</pre>";

    //echo 'До модификации: ' . $date;
    $date = date('Y-m-d ', strtotime($date . " + " . $vrm[0]["vrm"] . "day"));
    //echo 'После: ' . $date;
    $vdate=1;











    $rows5 = $rows2;
    for($i = 0;$i<count($rows2);$i++){
        if ( ($rows2[$i]['datev'] < $date && $rows2[$i]['datep'] > $date)  || ($rows2[$i]['datev'] == $date) || ($rows2[$i]['datep'] == $date)){
            unset($rows5[$i]);
        }
    }
    $rows2=$rows5;
    $rows2 = array_values($rows2);
    //echo "<pre>"; print_r( $rows2); echo "</pre>";
   // {$rows2[$i]["id"]}
    $rows4=[];
    for($i = 0;$i<count($rows2);$i++){
        $sql3 = 'SELECT * FROM `k` WHERE ID = ' . $rows2[$i]["kID"] ;
        $result3 = mysqli_query($conn, $sql3);
        $rows3 = mysqli_fetch_all($result3, MYSQLI_ASSOC);
        array_push($rows4, $rows3);
    }




    //echo "<pre>"; print_r( $rows2); echo "</pre>";


    //echo "<pre>"; print_r( $rows4); echo "</pre>";

    if(count($rows4)>0){
        $vid = 0;
    }



}
if(isset($_POST["start3"])){
    $a= htmlspecialchars($_POST["k"]);
    $b= htmlspecialchars($_POST["r"]);
    $c= htmlspecialchars($_POST["r1"]);
    $d= htmlspecialchars($_POST["r2"]);
    $a = (int)$a;
    $c = (int)$c;


    $sql7 = 'INSERT INTO `rz`(`rID`, `kID`, `datev`,`datep`) VALUE( '.$c.','.$a.'   , "'. $d .'","' .$b .'");';





}







?>


<table  border="1" style="
border-collapse: collapse;
text-align:  center;
">
    <caption>Форма 2</caption>
    <tr height="90">
        <td width="300" >


            <form action="" method="post">

            <select  name="hello" >
                <option selected>Выберите регион</option>
                <?php
                for($c=0;$c<count($rows);$c++): ?>
                    <option name="name" value =<?php echo $rows[$c]['id'];?>><?php echo $rows[$c]['region'];?></option>
                <?php endfor;?>
            </select >
                <input type="submit" name="start" />
            </form>
            <?php
            if ($vr == 1 ): ?>
                <p>Регион: <?php echo $region[0]['region']; ?></p>
            <?php endif; ?>
            <?php
            if ($vdate == 1 ): ?>
                <p>Регион: <?php echo $region[0]['region']; ?></p>
            <?php endif; ?>
        </td>


        <td width="300" id="1">
            <form action="" method="post">
                <input  style="display: none;" type="text" name="r" value=<?php echo $id; ?>   />
            <input name="date" type="date">
                <input type="submit" name="start2" />
            </form>
            <?php
            if ($vdate == 1): ?>
                <p>Дата отъезда: <?php echo $datеd; ?></p>
            <?php endif; ?>

        </td>

        <td width="300" id="1">

            <form action="" method="post">

            <input  style="display: none;" type="text" name="r" value=<?php echo $date; ?> />
            <input  style="display: none;" type="text" name="r1" value=<?php echo $id; ?>   />
            <input  style="display: none;" type="text" name="r2" value=<?php echo $datеd; ?>   />



            <select  name="k"  <?php
            if ($vid == 1): ?> disabled<?php endif; ?>>
                <option selected>Выберите курьера и отправте форму: </option>
                <?php
                if ($vid == 0):for($c1=0;$c1<count($rows4);$c1++): ?>
                    <option name="name" value =<?php echo $rows4[$c1][0]['id'];?>><?php echo $rows4[$c1][0]['fio'];?></option>
                <?php endfor; endif; ?>

            </select >
                <?php
                if ($vid == 0): ?>
                    <input type="submit" name="start3" />
                <?php endif; ?>

            </form>


        </td>
        <td width="300" id="1">
            <input  style="display: none;" type="text" name="r1" value=<?php echo $date; ?> />
            <?php
            if ($vdate == 1): ?>
                <p>Дата приезда: <?php echo $date; ?></p>
            <?php endif; ?>

        </td>
    </tr>
</table>

</body>
</html>
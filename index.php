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
$pr =1;

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


    $date = date('Y-m-d ', strtotime($date . " + " . $vrm[0]["vrm"] . "day"));

    $vdate=1;

    //echo "<pre>"; print_r( $datеd); echo "</pre>";
   $d1=strtotime($datеd);
    $d2=strtotime($date);










    $rows5 = [];
    for($d=0;$d<count($rows2);$d++){
        $datev=strtotime($rows2[$d]['datev']);
        $datep=strtotime($rows2[$d]['datep']);


        //"<pre>"; print_r( ($datev < $d1 && $d1 < $datep) ||($datev == $d1)  || ($datep == $d1) ); echo "</pre>";
        if( (($datev > $d1 && $d2 > $datev) || ($datev == $d1) || ($datev == $d2))||
            (($datep > $d1 && $d2 > $datep) || ($datep == $d1) || ($datep == $d2))
        )
        {
            array_push($rows5, $rows2[$d]['kID']);
        }

    }

    //echo "<pre>"; print_r( $rows2); echo "</pre>";
    //echo "<pre>"; print_r( $rows5); echo "</pre>";

    // "<pre>"; print_r( $rows5[0]); echo "</pre>";
    $rows4=[];
    for($i = 1;$i<=10;$i++){
        $k=0;
        for ($i2 = 0;$i2<count($rows5);$i2++){
            if($i == $rows5[$i2]){
                $k=1;
            }
        }

        if ( $k==0){
        $sql3 = 'SELECT * FROM `k` WHERE ID = ' . $i;
           //echo "<pre>"; print_r( $sql3); echo "</pre>";
        $result3 = mysqli_query($conn, $sql3);
        $rows3 = mysqli_fetch_all($result3, MYSQLI_ASSOC);
        array_push($rows4, $rows3);
        }
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
    $b = "'". $b. "'";
    $d = "'". $d. "'";
    $a = (int)$a;
    $c = (int)$c;
    //echo "<pre>"; print_r( $a); echo "</pre>";
    //echo "<pre>"; print_r( $c); echo "</pre>";
    //echo "<pre>"; print_r( $b); echo "</pre>";
    $sql7 = 'INSERT INTO `rz`(`rID`, `kID`, `datev`,`datep`) VALUE( ' . $a . ',' . $c . ','  . $d. ',' . $b . ')';
    //echo "<pre>"; print_r( $sql7); echo "</pre>";
    $result7 = mysqli_query($conn, $sql7);




}

if(isset($_POST["start4"])){


    $d1= htmlspecialchars($_POST["d1"]);
    $d2= htmlspecialchars($_POST["d2"]);
    $d1=strtotime($d1);
    $d2=strtotime($d2);
    $sql9 = 'SELECT * FROM `rz`';

    $result9 = mysqli_query($conn, $sql9);
    $rows9 = mysqli_fetch_all($result9, MYSQLI_ASSOC);
    $rows10 = $rows9;
    //echo "<pre>"; print_r( $rows9); echo "</pre>";
    for($d=0;$d<count($rows10);$d++){
        $datev=strtotime($rows9[$d]['datev']);
        $datep=strtotime($rows9[$d]['datep']);


    //"<pre>"; print_r( ($datev < $d1 && $d1 < $datep) ||($datev == $d1)  || ($datep == $d1) ); echo "</pre>";
        if( (($datev > $d1 && $d2 > $datev) || ($datev == $d1) || ($datev == $d2))||
            (($datep > $d1 && $d2 > $datep) || ($datep == $d1) || ($datep == $d2))
        )
        {

        } else {
            unset($rows9[$d]);
        }

   }
    //strtotime($date2)
    $rows9 = array_values($rows9);
    //echo "<pre>"; print_r( $rows9); echo "</pre>";
    //echo "<pre>"; print_r( $d1); echo "</pre>";
    //echo "<pre>"; print_r( $d2); echo "</pre>";
    $pr = 0;

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
                <option selected>Выберите курьера и отправьте форму: </option>
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




<br>
<br>
<br>
<table  border="1" style="
border-collapse: collapse;
text-align:  center;
">
    <caption>Форма 1</caption>
    <form action="" method="post">
    <tr height="90">
        <td width="300" >
            <input name="d1" type="date">

        </td>
        <td width="300" >

            <input name="d2" type="date">
            <input type="submit" name="start4" />
        </td>
    </tr>

    </form>
</table>

<br>

    <?php
    if ($pr == 0): ?>
        <table  border="1" style="
border-collapse: collapse;
text-align:  center;
">
            <caption>Вывод</caption>
            <tr height="90">
                <td width="300" >
                    <p>id</p>

                </td>
                <td width="300" >

                    <p>id региона</p>
                </td>
                <td width="300" >
                    <p>id курьера</p>
                </td>
                <td width="300" >

                    <p>дата отъезда</p>
                </td>
                <td width="300" >

                    <p>дата приезда</p>
                </td>
            </tr>
           <?php for($i2=0;$i2<count($rows9);$i2++): ?>
            <tr height="90">

                <td width="300" >
                    <?php echo $rows9[$i2]['id']; ?></p>

                </td>
                <td width="300" >

                    <?php echo $rows9[$i2]['rID']; ?></p>
                </td>
                <td width="300" >
                    <?php echo $rows9[$i2]['kID']; ?></p>

                </td>
                <td width="300" >
                    <?php echo $rows9[$i2]['datev']; ?></p>

                </td>
                <td width="300" >
                    <?php echo $rows9[$i2]['datep']; ?></p>

                </td>
            </tr>
            <?php endfor;  ?>

        </table>
    <?php  endif; ?>

</body>
</html>
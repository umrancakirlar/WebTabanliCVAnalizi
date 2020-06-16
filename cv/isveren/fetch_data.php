<?php

//fetch_data.php

include('../database_connection.php');

if(isset($_POST["action"]))
{
    $query = "select  * from cvs where yayinla=1";

    if(isset($_POST["sehir"]))
    {
        $sehir = implode("','", $_POST["sehir"]);
        $query .= "
		 AND sehir IN('".$sehir."')
		";
    }

    if(isset($_POST["ortalama"]))
    {
        $ortalama = implode("','", $_POST["ortalama"]);
        $query .= "
		 AND ortalama IN('".$ortalama."')
		";
    }

    if(isset($_POST["php"]))
    {
        $php = implode("','", $_POST["php"]);
        $query .= "
		 AND php IN('".$php."')
		";
    }

    if(isset($_POST["java"]))
    {
        $java = implode("','", $_POST["java"]);
        $query .= "
		 AND java IN('".$java."')
		";
    }
    if(isset($_POST["asp"]))
    {
        $asp = implode("','", $_POST["asp"]);
        $query .= "
		 AND asp IN('".$asp."')
		";
    }

    if(isset($_POST["csharp"]))
    {
        $csharp = implode("','", $_POST["csharp"]);
        $query .= "
		 AND csharp IN('".$csharp."')
		";
    }

    if(isset($_POST["mysql"]))
    {
        $mysql = implode("','", $_POST["mysql"]);
        $query .= "
		 AND mysql IN('".$mysql."')
		";
    }


    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $total_row = $statement->rowCount();
    $output = '';
    if($total_row > 0)
    {
        foreach($result as $row)
        {
            $output .= '
           
			<div class="col-sm-4 col-lg-3 col-md-3">
				<div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:450px;">
					
					<h2 align="center"><strong><a href="single.php?id='. $row['id'].'">'. $row['ad'] .'</a></strong></h2>
					<h4 style="text-align:center;" class="text-danger" >'. $row['soyad'] .'</h4>
					<p> '. $row['sehir'].' <br />
				     '. $row['uni_ad'] .' <br />
					 '. $row['uni_bolum'] .' <br />
					 '. $row['ortalama'] .'  </p>
				</div>

			</div>
			
			';
        }
    }
    else
    {
        $output = '<h3>No Data Found</h3>';
    }
    echo $output;
}

?>
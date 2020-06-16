<?php
/* * * * * * * * * * * * * * *
* Returns all published posts
* * * * * * * * * * * * * * */

function getcategoriesmenu($table)
{
    require("../database/db_connect.php");
    $sql="SELECT * FROM $table ";
    if ($result=mysqli_query($con,$sql))
    {
        //count number of rows in query result
        $rowcount=mysqli_num_rows($result);
        //if no rows returned show no categories alert
        if ($rowcount==0) {
            # code...
            echo 'No Categories';
        }
        //if there are rows available display all the results
        foreach ($result as $blog_categories => $category) {
            # code...
            echo '<a style="margin-top:35px; margin-bottom:35px;" class="dropdown-item" href="category.php?id='.$category['id'].'">'.$category['name'].'</a>
			<div class="dropdown-divider"></div>';
        }
    }

    mysqli_close($con);
}

function getcategoryblogs($table,$id){
    require("../database/db_connect.php");
    $sql="SELECT * FROM $table WHERE category='$id'";
    if ($result=mysqli_query($con,$sql))
    {
        //count number of rows in query result
        $rowcount=mysqli_num_rows($result);
        //if no rows returned show no news alert
        if ($rowcount==0) {
            # code...
            echo 'Çekilcek veri yok';
        }
        //if there are rows available display all the results
        foreach ($result as $categories => $cdata) {
            # code...
            echo '
 
                  
        <div class="col-12">
              <div class="card mt-3 tab-card">
                <div class="card-header tab-card-header">
                   
                   <h5 >'.$cdata['ad'].' '.$cdata['soyad'].'</h5>
                    <h5 >'.$cdata['email'].'</h5>
                    <h5 >'.$cdata['uni_ad'].'</h5>
                    <h5 >'.$cdata['uni_bolum'].'</h5>
                    <h5 >'.$cdata['ortalama'].'</h5>
                    <a style="margin-top: 15px; margin-bottom:15px;" href="single.php?id='.$cdata['id'].'" class="btn btn-primary">Cv Gör</a>
                
                </div>
              </div>
            </div>
            
          ';
        }
    }

    mysqli_close($con);
}

function countcategories(){
    require("../database/db_connect.php");
    $sql="SELECT * FROM topics LIMIT 10";
    if ($result=mysqli_query($con,$sql))
    {
        //count number of rows in query result
        $rowcount=mysqli_num_rows($result);
        //if no rows returned show no news alert
        if ($rowcount==0) {
            # code...
            echo 'No Categories!!';
        }
        //if there are rows available display all the results
        foreach ($result as $categoriescount => $categorydata) {
            #count how many times each category appears in blogs
            $categoryid=$categorydata['id'];
            $sql="SELECT * FROM cvs WHERE category='$categoryid'";
            if ($result=mysqli_query($con,$sql)) {
                # code...
                $rowcountcategory=mysqli_num_rows($result);
                $getcatcount=$rowcountcategory;
            }
            # code...show data
            echo '<a href="category.php?id='.$categorydata['id'].'"><li class="list-group-item d-flex justify-content-between align-items-center">
			'.$categorydata['name'].'
			<span class="badge badge-success badge-pill">'.$rowcountcategory.'</span></a>
			</li>';
        }
    }

    mysqli_close($con);
}
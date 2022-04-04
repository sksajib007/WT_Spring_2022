<?php

include ("../Model/Model.php");


if(isset($_POST["seedata"]))
{
        $dbobj = new db();
        $conobj = $dbobj->opencon();
        $fetchedData = $dbobj->fetchRow($conobj,"person");

        if( $fetchedData !==false && $fetchedData->num_rows>0)
        {
            echo("<h2><u>User datas:</u></h2>");
            echo("<table border='1'>");
            echo("<tr>
            <th>fname</th>
            <th>lname</th>
            <th>age</th>
            <th>salary</th>
            <th>address</th>
            </tr>");
            while($row=$fetchedData->fetch_assoc())
            {
               echo("<tr>");
                echo "<td>".$row["fname"]."</td>";
                echo "<td>".$row["lname"]."</td>";
                echo "<td>".$row["age"]."</td>";
                echo "<td>".$row["salary"]."</td>";
                echo "<td>".$row["address"]."</td>";
                echo("</tr>");
            }
            echo("</table>");
        }
else{
    echo("<br/> No user data found. </br>");
}

        $dbobj->closecon($conobj);
}

$search_row = "";
//search
if(isset($_POST["search"]))
{
        $search_row = $_POST["searchtext"];
        $dbobj = new db();
        $conobj = $dbobj->opencon();
        $searchData = $dbobj->searchRow($conobj,"person",$_POST["searchtext"]);
        if( $searchData !==false && $searchData->num_rows>0)
        {
            $search_row = $_POST["searchtext"];
            echo("<h2><u>Search</u></h2>");
            echo("<table border='1'>");
            echo("<tr>
            <th>fname</th>
            <th>lname</th>
            <th>age</th>
            <th>salary</th>
            <th>address</th>
            </tr>");
            while($row=$searchData->fetch_assoc())
            {
                
               echo("<tr>");
               echo "<td>".$row["fname"]."</td>";
                echo "<td>".$row["lname"]."</td>";
                echo "<td>".$row["age"]."</td>";
                echo "<td><input type='number' min=0 name='salaryedit' id='salaryeditid'"."value='".$row["salary"]."'/></td>";
                echo "<td>".$row["address"]."</td>";
                echo("</tr>");
            }
            
            echo("</table>");
            echo("<button type='submit' name='saveedit'>Save</button>");
        }
else{
    echo("<br/> No such user found. </br>");
}

        $dbobj->closecon($conobj);
}

// save change

if(isset($_POST["saveedit"]))
{
        $dbobj = new db();
        $conobj = $dbobj->opencon();
        $searchData = $dbobj->updateRow($conobj,"person",$search_row,$_POST["salaryedit"]);

        if( $searchData )
        {

            echo("<br/>$search_row data updated: ".$_POST["salaryedit"]."<br/>");
        }
else{
    echo("<br/> Nothing updated. </br>");
}

        $dbobj->closecon($conobj);
}

?>
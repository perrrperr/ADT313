<h1>Hands-on Activity</h1>

<?php
   

   $table = array(
   "header" => array(
        "StudentID",
        "Lastname",
        "Middlename",
        "Firstname",
        "Course",
        "Section"
       
    ),
    "body"=> array(
        array(
            "lastname"=>"Lastname",
            "middlename"=>"Middlename",
            "firstname"=>"Firstname",
            "course"=>"BSCS/BSIT",
            "section"=>"3A/3C"
        ),
        array(
            "lastname"=>"Lastname",
            "middlename"=>"Middlename",
            "firstname"=>"Firstname",
            "course"=>"BSCS/BSIT",
            "section"=>"3A/3C"
        ),
        array(
            "lastname"=>"Lastname",
            "middlename"=>"Middlename",
            "firstname"=>"Firstname",
            "course"=>"BSCS/BSIT",
            "section"=>"3A/3C"
        ),
        array(
            "lastname"=>"Lastname",
            "middlename"=>"Middlename",
            "firstname"=>"Firstname",
            "course"=>"BSCS/BSIT",
            "section"=>"3A/3C"
        ),
        array(
            "lastname"=>"Lastname",
            "middlename"=>"Middlename",
            "firstname"=>"Firstname",
            "course"=>"BSCS/BSIT",
            "section"=>"3A/3C"
        ),
        array(
            "lastname"=>"Lastname",
            "middlename"=>"Middlename",
            "firstname"=>"Firstname",
            "course"=>"BSCS/BSIT",
            "section"=>"3A/3C"
        ),
        array(
            "lastname"=>"Lastname",
            "middlename"=>"Middlename",
            "firstname"=>"Firstname",
            "course"=>"BSCS/BSIT",
            "section"=>"3A/3C"
        ),
        array(
            "lastname"=>"Lastname",
            "middlename"=>"Middlename",
            "firstname"=>"Firstname",
            "course"=>"BSCS/BSIT",
            "section"=>"3A/3C"
        ),
        array(
            "lastname"=>"Lastname",
            "middlename"=>"Middlename",
            "firstname"=>"Firstname",
            "course"=>"BSCS/BSIT",
            "section"=>"3A/3C"
        ),
        array(
            "lastname"=>"Lastname",
            "middlename"=>"Middlename",
            "firstname"=>"Firstname",
            "course"=>"BSCS/BSIT",
            "section"=>"3A/3C"
        ),
    )
    )
    ?>
    <table border="1"> 
    <thead> 
       <?php
            foreach($table["header"] as $header) {
                echo "<th>".$header."</th>";
            }
        ?>
    </thead>
    <tbody> 
        <?php
        foreach ($table["body"] as $index => $row) {
            echo "<tr>";
            echo "<td>".$index."</td>";
            echo "<td>".$row["lastname"]."</td>";
            echo "<td>".$row["middlename"]."</td>";
            echo "<td>".$row["firstname"]."</td>";
            echo "<td>".$row["section"]."</td>";
            echo "<td>".$row["course"]."</td>";
            echo "</tr>";
        }
       ?>
    </tbody>
</table>
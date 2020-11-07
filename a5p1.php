<?php
    $columns = $_POST['columns'];
    $rows = $_POST['rows'];

if ($columns >= 3 && rows >= 3 && rows <= 12 && $columns <= 12)
{
    for ($i = 1; $i <= $columns; $i++)
    {
        echo "<table border = '2'><tr><td width = '50px'>". $i. "</td>";
        for ($a = 2, $b = 1; $b < $rows; $b++, $a++)
            {
                echo "<td width = '50px'>".$a * $i."</td>";
            }
        echo "</tr></table>";
    }
}
else
{
    echo "Please enter a value between 3 and 12."
}
?>
<?php
// Verify that program was called from Landing Page and LOGON
	require('landing.php');
?>

<div style='<?php echo $flex_container; ?> justify-content: center;'> 
    <table style='width: 50%;'>
        <tr>
            <td style='text-align:center;'>
                RecipeWorks is a work in progress for Farmingdale State College's BCS430W Senior Project class.
            </td>
        </tr>
        <tr></tr>
        <tr>
            <td style='text-align:center;text-decoration:underline'>Meet the development team! </td>
        </tr>
    </table>
</div>
<br>
<div style='<?php echo $flex_container; ?>margin-bottom:10px;justify-content:center;'>
    <table style='width:50%;background-color:#F57F17;<?php echo $round_border; ?>'>
        
            <?php
            foreach($developers as $dev)
            echo    "<tr>
                        <td style='text-align:center;'> ". $dev['name'] ."</td>      
                        <td style='text-align:center;'>-</td>  
                        <td style='text-align:center;'><a class='light-hover' href='mailto:" . $dev['email'] . "'>" . $dev['email'] . "</a></td>
                    </tr>";
            ?>
        
    </table>
</div>

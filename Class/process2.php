<html> 
<head> 
<meta charset="utf-8"> 
</head> 
<body> 
    <ul>  
        <li>선택과목 :    
            <?php    
                $num = count($_GET["lecture"]);			
                for ($i = 0; $i < $num; $i++) {			
                    echo $_GET["lecture"][$i]; 			
                    if ($i != $num - 1) 				
                        echo ", "; } 				
            ?>
        </li> 
    </ul> 
</body> 
</html>    

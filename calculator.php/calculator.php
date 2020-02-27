<?php


function calculate($x, $y, $op) { 
    
    switch($op) {
        case '+':
            $prod = $x + $y;
            break;
        case '-':
            $prod = $x - $y;
            break;
        case '*':
            $prod = $x * $y;
            break;
        case '/':
            if ($y == 0) {$prod = "&#8734";}
            else {$prod = $x / $y;}
    }

    
    return $prod;
}


$x = 0;
$y = 0;
$prod = 0;
$op = '';


extract($_GET);

?>

<html>
    <head>
       <title>PHP Calculator Example: Version 2</title>
    </head>
    <body>
        <h3>PHP Calculator (Version 2)</h3>
        <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        x = <input type="text" name="x" size="5" value="<?php print $x; ?>"/>
        op = 
            <select name="op">
                <option value="+" <?php if ($op=='+') echo 'selected"slected"';?>>+</option>
                <option value="-" <?php if ($op=='-') echo 'selected=elected"';?>>-</option>
                <option value="*" <?php if ($op=='*') echo 'selected="selected"';?>>*</option>
                <option value="/" <?php if ($op=='/') echo 'selected="selected"';?>>/</option>
            </select>
        y =  <input type="text" name="y" size="5" value="<?php  print $y; ?>"/>
        <input type="submit" name="calc" value="Calculate"/>
        </form>

    <?php
        if(isset($calc)) {
            
            
            if (is_numeric($x) && is_numeric($y)) {	
             
                $prod = calculate($x, $y, $op);
				
                 
                echo "<p>$x $op $y = $prod</p>";
            }
            else {
               
                echo "<p>x and y values are required to be numeric ... 
                         please re-enter values</p>";
            }
        }
    ?>
          <hr height="2px" align="left" width="340px" />
         <p>See code: <a href="calculator_v2.phps">calculator_v2.phps</a></p>
         <p>Notes:<br/>
              i) codes a drop down selection box to list operations<br/>
        ii) makes use of the select (case) statement.<br/>
       iii) traps non-numeric entires<br/>
          iv) catches devide by zero error<p>
         </body>
             </html>
<?php
/**
 * PHP version 7.1.7
 *
 * @category
 * @package
 * @author   n.le-dantec
 */
session_start();
if (isset($_POST['valeur']))
{
	$_SESSION['touslesprenoms'][]=$_POST['valeur'];
}

//var_dump($_POST);
$liste_chiffre=array("valeur");
//echo @$_POST["valeur"];

?>
<!DOCTYPE html>
    <lang="fr">
<head>
    <meta charset"utf-8">
</head>

<body>
	<form method="post" style="display:block; background-color:rgb(220,220,250); width:100%;float:left;">
   		 <div style=" position: relative; width: 230px; height: 60px">
   		 	<p>⚠:veillez entrer un chiffre</p>
       		 <label>
            	<input name="valeur">
        	</label>
       <button>rentrer</button>
       <br><br>
    </div>
</form>

   <!-- 
        <div>
            <label>
                <br>
                 <input>
                    sortir
            </label>
        </div>
<div>
   <table style border="black" ; type="solid ">
    <tr>
        <td>chiffre 1</td>
        <td><?php echo $_POST["valeur"]; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    </tr>
        <tr>
            <td>chiffre 2</td>
            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <tr>
            <td>chiffre 3</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>
        <tr>
            <td>chiffre 4</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <tr>
            <td>chiffre 5</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>
        <tr>
            <td>chiffre 6</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>



            <repeat n="1">
        <tr>
            <td>chiffre 7</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr></repeat>
    </table>
-->

<br><br>

        <table border="black" width="50%">

<?php
$n=0;
foreach ($_SESSION['touslesprenoms'] as $value_du_tableau)
{
	if($n!=0)
	{
 		echo '<tr>
            <td align="center">'.$n.'</td>
            <td>'.$value_du_tableau.'</td>
        <tr>';
 	}
 	$n=$n+1; //$n++
}
?>

		</table>
    </body>
</html>


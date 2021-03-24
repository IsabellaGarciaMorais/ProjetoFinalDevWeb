"INSERT INTO rapper VALUES (DEFAULT, 'Emicida', 0)";
"INSERT INTO rapper VALUES (DEFAULT, 'Baco Exu do Blues', 0)";
"INSERT INTO rapper VALUES (DEFAULT, 'Mano Brown', 0)";
"INSERT INTO rapper VALUES (DEFAULT, 'Sabotage', 0)";
"INSERT INTO rapper VALUES (DEFAULT, 'Mariana Mello', 0)";
"INSERT INTO rapper VALUES (DEFAULT, 'Djonga', 0)";


INSERT INTO rapper VALUES (DEFAULT, 'Emicida', 0);
INSERT INTO rapper VALUES (DEFAULT, 'Baco Exu do Blues', 0);
INSERT INTO rapper VALUES (DEFAULT, 'Mano Brown', 0);
INSERT INTO rapper VALUES (DEFAULT, 'Sabotage', 0);
INSERT INTO rapper VALUES (DEFAULT, 'Mariana Mello', 0);
INSERT INTO rapper VALUES (DEFAULT, 'Djonga', 0);



<button type="submit" name="bEmicida" value="Emicida">Votar</button>
<button type="submit" name="bBaco" value="Baco">Votar</button>
<button type="submit" name="bMano" value="Mano">Votar</button>
<button type="submit" name="bSabotage" value="Sabotage">Votar</button>
<button type="submit" name="bMariana" value="Mariana">Votar</button>
<button type="submit" name="bDjonga" value="Djonga">Votar</button>


if(isset($_POST['bEmicida']))
	$id = 1;
if(isset($_POST['bBaco']))
	$id = 2;
if(isset($_POST['bMano']))
	$id = 3;
if(isset($_POST['bSabotage']))
	$id = 4;
if(isset($_POST['bMariana']))
	$id = 5;
if(isset($_POST['bDjonga']))
	$id = 6;
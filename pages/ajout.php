<!DOCTYPE html>
<html>

<head>
    <title>Ajout actus</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
</head>

<body>
    <section id="one">
        <div class="container">
            <h1>Ajout Rechauffement</h1>
            <form action="ajout-nouveau-rechauffement.php" method="post">
                <label>Facteur</label>
                <input type="text" name="facteur" ><br><br>
                <label>Url</label>
                <textarea name="url" ></textarea><br>
                <label>Resume</label>
                <textarea name="description" ></textarea><br>
                <input type="submit" value="Enregsitrer"/>
            </form>
        </div>
    </section>
</body>

</html>
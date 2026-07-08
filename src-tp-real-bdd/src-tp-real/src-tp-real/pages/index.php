<?php
    include('../inc/functions.php');
    $departments = get_all_departments();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste des départements</title>
    <link rel="stylesheet" href="../design/theme-corporate/style.css">
</head>
<body>
    <nav class="navbar">
        <ul>
            <li class="brand">Employés DB</li>
            <li><a href="index.php" class="active">Départements</a></li>
            <li><a href="search.php">Rechercher</a></li>
            <li><a href="stats.php">Statistiques</a></li>
            <li><a href="emp_form.php">Ajouter un employé</a></li>
        </ul>
    </nav>

    <div class="container">
        <h1>Liste des départements</h1>

        <ul class="list">
            <li><a href="search.php">🔍 Rechercher un employé</a></li>
            <li><a href="stats.php">📊 Statistiques par emploi</a></li>
            <li><a href="dept_form.php">➕ Ajouter un département</a></li>
            <li><a href="emp_form.php">➕ Ajouter un employé</a></li>
        </ul>

        <table class="table">
            <thead>
                <tr>
                    <th>Department Number</th>
                    <th>Department Name</th>
                    <th>Manager actuel</th>
                    <th>Nombre d'employés</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($departments as $line) {?>
                    <tr>
                        <td><a href="employees.php?dept_no=<?= urlencode($line['dept_no']) ?>"><?= $line['dept_no']?></a></td>
                        <td><?=$line['dept_name']?></td>
                        <td><?= $line['manager_name'] ?? '—' ?></td>
                        <td><?= $line['nb_employees'] ?></td>
                        <td><a href="dept_form.php?dept_no=<?= urlencode($line['dept_no']) ?>">Éditer</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>

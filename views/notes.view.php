<!doctype html>
<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <title>Dynamic</title>
    <script src="<?= $config['tailwindcss']; ?>"></script>
</head>

<body class="h-full">
    <div class="min-h-full">

        <?php require ("partials/nav.php"); ?>

        <?php require ("partials/banner.php"); ?>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <p>NOTES</p>

                <ul>
                    <?php foreach ($notes as $note) : ?>
                        <li>
                            <a href="/note?id=<?= $note['id'] ?>">
                                <?= htmlspecialchars($note['body']) ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <p class="margin-top-6">
                    <a href="/notes/create" class="text-blue-500 hover:underline">Create new note</a>
                </p>
            </div>
        </main>
    </div>
</body>

</html>
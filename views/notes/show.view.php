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
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
</head>

<body class="h-full">
    <div class="min-h-full">

        <?php require base_path("views/partials/nav.php"); ?>

        <?php require base_path("views/partials/banner.php"); ?>
        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <p class="mb-6">
                    <a href="/notes" class="text-blue-500 underline">go back...</a>
                </p>

                <p><?= htmlspecialchars($note['body']) ?></p>

                <form class="mt-6" method="POST">
                    <input type="hidden" name="id" value="<?= $note['id'] ?>">
                    <button class="text-sm text-red-500">Delete</button>
                </form>
            </div>
        </main>
    </div>
</body>

</html>
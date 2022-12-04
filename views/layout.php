<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/css/output.css">
  <title><?= $title ?></title>
</head>

<body>
  <div class='mx-auto grid max-w-[1200px] grid-cols-[200px_auto] gap-4 p-5'>
    <nav>
      <aside class='mt-24'>
        <ul class='grid rounded-md bg-slate-100 p-4 text-lg'>

          <?php
          $navItems = ['Articles', 'Categories', 'Authors'];
          foreach ($navItems as $navItem) :
          ?>
          <li>
            <a class="<?= $active === strtolower($navItem) ? 'bg-slate-200' : 'hover:bg-slate-200' ?> block w-full rounded-md py-2 px-4"
              href="/admin/<?= strtolower($navItem) ?>">
              <?= $navItem ?>
            </a>
          </li>
          <?php endforeach; ?>

        </ul>
      </aside>
    </nav>

    <main>
      <section class="mb-40 h-full p-5">
        <header class="mb-10 flex items-center gap-10">
          <h1 class="px-5 text-3xl font-semibold text-slate-800"><?= $title; ?></h1>

          <?php
          $titleSingular = ["Categories" => "Category", "Authors" => "Author", "Articles" => "Article"];
          if ($showAddBtn) {
          ?>
          <a href="<?= "/admin/" . strtolower($title) . "/add.php"; ?>"
            class="flex items-center gap-2 rounded-md bg-slate-800 px-4 py-2 font-semibold text-slate-100 transition hover:bg-slate-600">
            <aioutlineplus class="text-xl" />
            <span><?= "Add " . $titleSingular[$title] ?></span>
          </a>
          <?php } ?>

        </header>
        <?= $output ?>
      </section>
    </main>
  </div>

</body>

</html>
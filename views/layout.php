<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/output.css">
  <title><?= $title ?></title>
  <style>
  html {
    font-family: 'Nunito', sans-serif;
  }
  </style>
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
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" t="1551322312294" viewBox="0 0 1024 1024"
              version="1.1" class="text-xl" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
              <defs></defs>
              <path d="M474 152m8 0l60 0q8 0 8 8l0 704q0 8-8 8l-60 0q-8 0-8-8l0-704q0-8 8-8Z"></path>
              <path d="M168 474m8 0l672 0q8 0 8 8l0 60q0 8-8 8l-672 0q-8 0-8-8l0-60q0-8 8-8Z"></path>
            </svg>
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
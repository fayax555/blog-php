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
              href="/admin/<?= strtolower($navItem) ?>.php">
              <?= $navItem ?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </aside>
    </nav>

    <main>
      <?= $output ?>
    </main>
  </div>

</body>

</html>
<form method="post" class='pt-2 px-4 max-w-[480px] grid grid-cols-[320px_auto] gap-4 items-center'>
  <input required type='text' placeholder="category name" id='name' name='name'
    class='block w-[min(100%,60ch)] rounded-md border-2 border-slate-500 px-4 py-1 text-lg' />
  <button type='submit' name="add"
    class='flex items-center gap-2 rounded-md bg-slate-800 px-4 h-full text-lg font-semibold text-slate-200 transition hover:bg-slate-600'>
    <svg stroke="currentColor" fill="currentColor" stroke-width="0" t="1551322312294" viewBox="0 0 1024 1024"
      version="1.1" class="text-xl" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
      <defs></defs>
      <path d="M474 152m8 0l60 0q8 0 8 8l0 704q0 8-8 8l-60 0q-8 0-8-8l0-704q0-8 8-8Z"></path>
      <path d="M168 474m8 0l672 0q8 0 8 8l0 60q0 8-8 8l-672 0q-8 0-8-8l0-60q0-8 8-8Z"></path>
    </svg>
    <span>Add</span>
  </button>
</form>

<form method="post" class="mt-8">
  <table>
    <thead class='border-b-[1px] text-sm text-slate-600'>
      <tr class='[&>*]:px-5 [&>*]:text-left [&>*]:font-light'>
        <th class='py-2'>ID</th>
        <th class="w-[240px]">Name</th>
        <th class="translate-x-2"></th>
      </tr>
    </thead>

    <tbody class='translate-y-4 text-slate-700'>
      <?php foreach ($categories as $category) : ?>
      <tr class='rounded-md pt-5 hover:bg-slate-100 [&>*]:px-5'>
        <td class='rounded-l-md py-4 font-semibold'><?= $category['id'] ?></td>
        <td class='py-4 font-semibold'>
          <?php if ((int)($_GET['id'] ?? null) === $category['id']) : ?>
          <input required autofocus type="text" name="name" value="<?= $category['name'] ?>"
            class="bg-slate-200 border-slate-800 border-2 rounded-md py-1 px-4 block">
          <?php else : ?>
          <?= $category['name'] ?>
          <?php endif ?>
        </td>

        <td class='rounded-r-md'>
          <div class='flex items-center gap-2'>

            <?php if ((int)($_GET['id'] ?? null) === $category['id']) : ?>
            <button type="submit" name="edit"
              class="bg-slate-800 text-slate-100 rounded-md px-6 py-2 hover:bg-slate-600 transition">Save</button>
            <?php else : ?>
            <a href="?id=<?= $category['id'] ?>" name="edit" title='edit category'
              class="hover:bg-slate-300 p-2.5 transition [&:hover_svg]:text-blue-700 rounded-full">
              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024"
                class="text-xl text-slate-600 transitio" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M880 836H144c-17.7 0-32 14.3-32 32v36c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-36c0-17.7-14.3-32-32-32zm-622.3-84c2 0 4-.2 6-.5L431.9 722c2-.4 3.9-1.3 5.3-2.8l423.9-423.9a9.96 9.96 0 0 0 0-14.1L694.9 114.9c-1.9-1.9-4.4-2.9-7.1-2.9s-5.2 1-7.1 2.9L256.8 538.8c-1.5 1.5-2.4 3.3-2.8 5.3l-29.5 168.2a33.5 33.5 0 0 0 9.4 29.8c6.6 6.4 14.9 9.9 23.8 9.9z">
                </path>
              </svg>
            </a>

            <input type="hidden" name="category_id" value="<?= $category['id'] ?>">
            <button type='submit' name="delete" title='delete category'
              class="hover:bg-slate-300 p-2.5 transition [&:hover_svg]:text-red-700 rounded-full">
              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024"
                class="text-xl text-slate-600 transition hover:text-red-600" height="1em" width="1em"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M864 256H736v-80c0-35.3-28.7-64-64-64H352c-35.3 0-64 28.7-64 64v80H160c-17.7 0-32 14.3-32 32v32c0 4.4 3.6 8 8 8h60.4l24.7 523c1.6 34.1 29.8 61 63.9 61h454c34.2 0 62.3-26.8 63.9-61l24.7-523H888c4.4 0 8-3.6 8-8v-32c0-17.7-14.3-32-32-32zm-200 0H360v-72h304v72z">
                </path>
              </svg>
            </button>
            <?php endif ?>

          </div>
        </td>
      </tr>
      <?php endforeach; ?>

    </tbody>
  </table>
</form>
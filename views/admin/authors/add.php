<form class='px-5' method="post">
  <label for='name' class='mb-2 mt-10 block'>
    Name
  </label>
  <input required type='text' id='name' name='name' value="<?= $authorName ?>"
    class='block w-[min(100%,60ch)] rounded-md border-2 border-slate-500 px-4 py-2 text-lg' />

  <label for='email' class='mb-2 mt-6 block'>
    Email
  </label>
  <input required type='email' id='email' name='email' value="<?= $authorEmail ?>"
    class='block w-[min(100%,60ch)] rounded-md border-2 border-slate-500 px-4 py-2 text-lg' />

  <button type='submit' name="<?= $editing ? 'edit' : 'add' ?>"
    class='mt-8 block w-[200px] rounded-md bg-slate-800 px-4 py-2 text-lg font-semibold text-slate-200 transition hover:bg-slate-600'>
    <?= $editing ? 'Edit' : 'Add' ?> Author
  </button>
</form>
<form class='px-5' method="post">
  <div class='mb-6 flex items-center gap-4'>
    <label for='status' class='block w-24'>
      Status
    </label>
    <select required id='status' name='status'
      class='w-[200px] cursor-pointer rounded-md border-r-[12px] bg-slate-200 px-4 py-2 font-semibold'>
      <?php
      foreach ($statuses as $status) :
      ?>
      <option <?= $status === $articleStatus ? 'selected' : '' ?> value="<?= $status ?>"><?= $status ?></option>
      <?php endforeach;
      ?>
    </select>
  </div>

  <div class='mb-6 flex items-center gap-4'>
    <label for='author' class='block w-24'>
      Author
    </label>
    <select required id='author' name='author'
      class='w-[200px] cursor-pointer rounded-md border-r-[12px] bg-slate-200 px-4 py-2 font-semibold'>
      <?php foreach ($authors as $author) : ?>
      <option <?= $author['id'] === $articleAuthor ? 'selected' : '' ?> value="<?= $author['id'] ?>">
        <?= $author['name'] ?></option>
      <?php endforeach ?>
    </select>
  </div>

  <div class='mb-6 flex items-center gap-4'>
    <label for='category' class='block w-24'>
      Category
    </label>
    <select required id='category' name='category'
      class='w-[200px] cursor-pointer rounded-md border-r-[12px] bg-slate-200 px-4 py-2 font-semibold'>
      <?php foreach ($categories as $category) : ?>
      <option <?= $category['id'] === $articleCategory ? 'selected' : '' ?> value="<?= $category['id'] ?>">
        <?= $category['name'] ?>
      </option>
      <?php endforeach ?>
    </select>
  </div>

  <div>
    <label for='title' class='mb-2 mt-10 block'>
      Title
    </label>
    <input required type='text' id='title' name='title' value="<?= $articleTitle ?>"
      class='block  rounded-md border-2 w-[min(100%,60ch)] border-slate-500 px-4 py-2 text-lg' />
  </div>

  <label for='content' class='mb-2 mt-8 block'>
    Content
  </label>
  <textarea required id='content' name='content'
    class='block min-h-[300px] w-[min(100%,60ch)] rounded-md border-2 border-slate-500 p-4 text-lg'><?= $articleContent ?></textarea>

  <button type='submit' name="<?= $editing ? 'edit' : 'add' ?>"
    class='mt-8 block w-[200px] rounded-md bg-slate-800 px-4 py-2 text-lg font-semibold text-slate-200 transition hover:bg-slate-600'>
    <?= $editing ? 'Edit' : 'Add' ?> Article
  </button>
</form>
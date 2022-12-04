<form class='px-5'>
  <div class='mb-6 flex items-center gap-4'>
    <label for='status' class='block w-24'>
      Status
    </label>
    <select id='status' name='status'
      class='w-[200px] cursor-pointer rounded-md border-r-[12px] bg-slate-200 px-4 py-2 font-semibold'>
      <?php
      if (isset($statuses)) :
        foreach ($statuses as $status) :
      ?>
      <option value="<?= $status ?>"><?= $status ?></option>
      <?php endforeach;
      endif;
      ?>
    </select>
  </div>

  <div class='mb-6 flex items-center gap-4'>
    <label for='author' class='block w-24'>
      Author
    </label>
    <select id='author' name='author'
      class='w-[200px] cursor-pointer rounded-md border-r-[12px] bg-slate-200 px-4 py-2 font-semibold'>
      <?php
      if (isset($authors)) :
        foreach ($authors as $author) :
      ?>
      <option value="<?= $author['id'] ?>"><?= $author['name'] ?></option>
      <?php endforeach;
      endif;
      ?>
    </select>
  </div>

  <div class='mb-6 flex items-center gap-4'>
    <label for='category' class='block w-24'>
      Category
    </label>
    <select id='category' name='category'
      class='w-[200px] cursor-pointer rounded-md border-r-[12px] bg-slate-200 px-4 py-2 font-semibold'>
      <?php
      if (isset($categories)) :
        foreach ($categories as $category) :
      ?>
      <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
      <?php endforeach;
      endif;
      ?>
    </select>
  </div>

  <label for='title' class='mb-2 mt-10 block'>
    Title
  </label>
  <input type='text' id='title' name='title'
    class='block w-full rounded-md border-2 border-slate-500 px-4 py-2 text-lg' />

  <label for='content' class='mb-2 mt-8 block'>
    Content
  </label>
  <textarea id='content' name='content'
    class='block min-h-[300px] w-full rounded-md border-2 border-slate-500 p-4 text-lg'></textarea>

  <button type='submit'
    class='mt-8 block w-[200px] rounded-md bg-slate-800 px-4 py-2 text-lg font-semibold text-slate-200 transition hover:bg-slate-600'>
    Add Article
  </button>
</form>
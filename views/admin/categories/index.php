<table>
  <thead class='border-b-[1px] text-sm text-slate-600'>
    <tr class='[&>*]:px-5 [&>*]:text-left [&>*]:font-light'>
      <th class='py-2'>ID</th>
      <th>Name</th>
      <th>Action</th>
    </tr>
  </thead>

  <tbody class='translate-y-4 text-slate-700'>

    <?php foreach ($categories as $category) : ?>
    <tr class='rounded-md pt-5 hover:bg-slate-100 [&>*]:px-5'>
      <td class='rounded-l-md py-4 font-semibold'><?= $category['id'] ?></td>
      <td class='py-4 font-semibold'><?= $category['name'] ?></td>
      <td><?= $category['name'] ?></td>

      <td class='rounded-r-md'>
        <div class='flex items-center gap-4'>
          <button type='button' title='edit category'>
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024"
              class="text-xl text-slate-600 transition hover:text-blue-600" height="1em" width="1em"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M880 836H144c-17.7 0-32 14.3-32 32v36c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-36c0-17.7-14.3-32-32-32zm-622.3-84c2 0 4-.2 6-.5L431.9 722c2-.4 3.9-1.3 5.3-2.8l423.9-423.9a9.96 9.96 0 0 0 0-14.1L694.9 114.9c-1.9-1.9-4.4-2.9-7.1-2.9s-5.2 1-7.1 2.9L256.8 538.8c-1.5 1.5-2.4 3.3-2.8 5.3l-29.5 168.2a33.5 33.5 0 0 0 9.4 29.8c6.6 6.4 14.9 9.9 23.8 9.9z">
              </path>
            </svg>
          </button>
          <button type='button' title='delete category'>
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024"
              class="text-xl text-slate-600 transition hover:text-red-600" height="1em" width="1em"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M864 256H736v-80c0-35.3-28.7-64-64-64H352c-35.3 0-64 28.7-64 64v80H160c-17.7 0-32 14.3-32 32v32c0 4.4 3.6 8 8 8h60.4l24.7 523c1.6 34.1 29.8 61 63.9 61h454c34.2 0 62.3-26.8 63.9-61l24.7-523H888c4.4 0 8-3.6 8-8v-32c0-17.7-14.3-32-32-32zm-200 0H360v-72h304v72z">
              </path>
            </svg>
          </button>
        </div>
      </td>
    </tr>
    <?php endforeach; ?>

  </tbody>
</table>
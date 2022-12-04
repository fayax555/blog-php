<table>
  <thead class='border-b-[1px] text-sm text-slate-600'>
    <tr class='[&>*]:px-5 [&>*]:text-left [&>*]:font-light'>
      <th class='py-2'>ID</th>
      <th>Title</th>
      <th>Author</th>
      <th>Category</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
  </thead>

  <tbody class='translate-y-4 text-slate-700'>
    <tr class='rounded-md pt-5 hover:bg-slate-100 [&>*]:px-5'>
      <td class='rounded-l-md py-4 font-semibold'>1</td>
      <td class='py-4 font-semibold'>Learn TypeScript in 5 minutes</td>
      <td>Ali Adam</td>
      <td>Programming</td>
      <td>
        <div title='Published' class='h-3 w-3 rounded-full bg-slate-300'></div>
      </td>
      <td class='rounded-r-md'>
        <div class='flex items-center gap-4'>
          <button type='button' title='edit article'>
            <AiFillEdit class='text-xl text-slate-600 transition hover:text-blue-600' />
          </button>
          <button type='button' title='delete article'>
            <AiFillDelete class='text-xl text-slate-600 transition hover:text-red-600' />
          </button>
        </div>
      </td>
    </tr>
  </tbody>
</table>
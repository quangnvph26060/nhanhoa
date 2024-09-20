
$(document).ready(function() {
   fetchservers(1);

   function fetchservers(page) {
       $.ajax({
            url: getServerListUrl(page),
           method: 'GET',
           success: function(data) {
               let html = '';
               console.log(data);

               $.each(data.data, function(index, item) {
                   html += `
                       <tr>
                           <td>${item.name}</td>
                           <td>${item.phone}</td>
                           <td>${item.email}</td>
                           <td>${item.package_name}</td>
                           <td align="center">
                               <button class="btn btn-danger btn-delete" data-id="${item.id}" onclick="deleteConfirmation(${item.id})"><i class="fa-solid fa-trash"></i></button>
                               <form id="delete-form-${item.id}" action="" method="POST" style="display: none;">
                                   @csrf
                               </form>
                           </td>
                       </tr>
                   `;
               });

               $('#server-data').html(html);

               // Cập nhật phân trang
               let pagination = createPagination(data.current_page, data.last_page);
               $('#pagination').html(pagination);
           },
           error: function(xhr, status, error) {
               console.error('Lỗi khi lấy danh sách server:', error);
           }
       });
   }


   function createPagination(current, last) {
       if (last <= 1) {
           return '';
       }

       let pagination = '';

       // Previous Button
       if (current > 1) {
           pagination += `<li class="page-item">
               <a class="page-link" href="#" data-page="${current - 1}"><i class="fas fa-backward"></i></a>
           </li>`;
       }

       // First Page
       pagination += `<li class="page-item ${current === 1 ? 'active' : ''}">
           <a class="page-link" href="#" data-page="1">1</a>
       </li>`;

       // Ellipsis and Middle Pages
       if (current > 3) {
           pagination += `<li class="page-item disabled">
               <span class="page-link">...</span>
           </li>`;
       }

       let start = Math.max(2, current - 1);
       let end = Math.min(current + 1, last - 1);

       for (let i = start; i <= end; i++) {
           pagination += `<li class="page-item ${i === current ? 'active' : ''}">
               <a class="page-link" href="#" data-page="${i}">${i}</a>
           </li>`;
       }

       if (current < last - 2) {
           pagination += `<li class="page-item disabled">
               <span class="page-link">...</span>
           </li>`;
       }

       // Last Page
       pagination += `<li class="page-item ${current === last ? 'active' : ''}">
           <a class="page-link" href="#" data-page="${last}">${last}</a>
       </li>`;

       // Next Button
       if (current < last) {
           pagination += `<li class="page-item">
               <a class="page-link" href="#" data-page="${current + 1}"><i class="fas fa-forward"></i></a>
           </li>`;
       }

       return pagination;
   }

   $(document).on('click', '#pagination a', function(event) {
       event.preventDefault();
       let page = $(this).data('page');
       fetchservers(page);
   });
});


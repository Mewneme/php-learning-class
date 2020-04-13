<?php
require __DIR__ . '/__connect_db.php';
$page_name = 'data-list2';

?>
<?php include __DIR__ . '/parts/html-head.php'; ?>
<?php include __DIR__ . '/parts/navbar.php'; ?>
    <style>
        tbody tr i.fa-trash-alt {
            color: red;
        }


    </style>
<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    
                </ul>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Email</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">Address</th>
                </tr>
                </thead>
                <tbody class= "data-tbody">
                
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include __DIR__ . '/parts/scripts.php'; ?>
<script>
   const pagination = $('.pagination') ,
         tbody = $('.data-tbody');

   const paginationTpl = o =>{
       //{active:true,page:2}
       return`
        <li class = "page-item${o.active ? 'active' : ''}">
            <a class = "page-link" href =javascript:getDataByPage(${o.page})">${o.page}</a>
        </li>
       `;
   };

   const escapeTag = str =>{
    /*
        '&': '&amp;',
        '<': '&lt;',
        '>': '&gt;'
    */
    return str
           .split('&').join('&amp;')
           .split('<').join('&lt;')
           .split('>').join('&gt;');
   };

   const itemTpl = o => {
       return`
       <tr>
        <td>${o.sid}</td>
        <td>${escapeTag(o.name)}</td>
        <td>${escapeTag(o.mobile)}</td>
        <td>${escapeTag(o.email)}</td>
        <td>${escapeTag(o.birthday)}</td>
        <td>${escapeTag(o.address)}</td>
       </tr>
       `;
   };

   //1.取得資料
   function getDataByPage(page=1){
       $.get('data-list2-api.php',{page:page},function(data){
         console.log(data);
         //2.生成頁碼列按鈕
         let pSTr='';
         for(let i=1;i<+data.totalPages;i++){
             pSTr += paginationTpl({
                 active: page===i,
                 page: i
             })
         }
         pagination.html(pStr);

         //3.生成資料表格
         let tStr = '';
         for(let i = 0; i<data.rows.length;i++){
            let item = data.rows[i];
            tStr += itemTpl(item);
         }
         tbody.html(tStr);

       },'json');
   }

   function whenHashChange(){
       let hashStr = location.hash.slice(1);
       let page = parseInt(hashStr);
       if(page){
           getDataByPage(page);
       }else{
           getDataByPage(1);
       }
   }

   window.addEventListener('hashchange',whenHashChange);

   getDataByPage();

</script>
<?php include __DIR__ . '/parts/html-foot.php'; ?>
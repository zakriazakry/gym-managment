<x-dashborad-bounder :title="'المعاملات'" :css="'assets/css/home/tabs/Payment.css'" :js="'assets/js/home/dialog.js'">
    <div class="content">
<br>
        <form action="#" method="get">
         <input type="search" name="search" id="search">
         <input class="button" type="submit" value="بحث">
     </form>
    </div>

     <div class="tableSection">
         <table>
             <thead>
                 <tr>
                     <th>ID</th>
                     <th>المستخدم</th>
                     <th>العنوان</th>
                     <th>الوصف</th>
                     <th>تاريخ الإنشاء</th>
                     <th>إعدادات</th>
                 </tr>
             </thead>
             <tbody>
                 @for ($i = 1 ; $i <=1 ; $i++)
                  <tr>
                     <td>#{{$i}}</td>
                     <td>زكريا</td>
                     <td>عملية حجز</td>
                     <td>قام المستخدم بدفع 120 دينار ثمن حجز شهري رصيد الخزينة الان هوا 120 دينار</td>
                     <td>2024 - 2 - 21 10:12:23 ص</td>
                     <td>
                        <i class="fa-solid fa-circle-info"></i>
                        <i class="fa-solid fa-barcode"></i>
                     </td>
                 </tr>    
                 @endfor
                
               
             </tbody>
         </table>
     </div>
  
 </x-dashborad-bounder>
 
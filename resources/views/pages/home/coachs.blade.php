<x-dashborad-bounder :title="'المدربين'" :css="'assets/css/home/tabs/coachs.css'" :js="''">
    <div class="content">
     <a href="/add" >
         مدرب جديد <i class="fa-solid fa-plus"></i>  
     </a>
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
                     <th>صورة</th>
                     <th>اسم المدرب</th>
                     <th>رقم الهاتف</th>
                     <th>البريد الإلكروني</th>
                     <th>مجال اللعب</th>
                     <th>تاريخ التسجيل</th>
                     <th>تاريخ الإنتهاء</th>
                     <th>إعدادات</th>
                 </tr>
             </thead>
             <tbody>
                 @for ($i = 1 ; $i <=1 ; $i++)
                  <tr>
                     <td>#{{$i}}</td>
                     <td>
                        <img width="100px" src="https://www.winwin.com/sites/default/files/styles/medium_640x360/public/2021-08/%D9%86%D8%A7%D8%B5%D8%B1%20%D8%A7%D9%84%D8%AE%D8%B6%D9%8A%D8%B1%D9%8A_0.jpg" alt="">
                     </td>
                     <td>رجب</td>
                     <td>0944444444</td>
                     <td>rgb@gmail.com</td>
                     <td>سويدي</td>
                     <td>2024 - 2 - 21</td>
                     <td>2024 - 3 - 20</td>
                     <td>
                         <i class="fa-regular fa-pen-to-square"></i>
                         <i class="fa-solid fa-user-minus"></i>
                     </td>
                 </tr>    
                 @endfor
                
               
             </tbody>
         </table>
     </div>
  
 </x-dashborad-bounder>
 
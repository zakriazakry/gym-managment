<x-dashborad-bounder :title="'المدربين'" :css="'assets/css/home/tabs/coachs.css'" :js="''">
    <div class="content">
     <a href="{{route('dashboradCoachsNew')}}" >
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
                        <img width="100px" src="https://attic.sh/6w3cufd5r762815njt1306orab15" alt="">
                     </td>
                     <td>رجب</td>
                     <td>0944444444</td>
                     <td>rgb@gmail.com</td>
                     <td>سويدي</td>
                     <td>2024 - 2 - 21</td>
                     <td>2024 - 3 - 20</td>
                     <td>
                        <a href="{{route('dashboradCoachsEdit')}}">
                            <i class="fa-regular fa-pen-to-square"></i>
                        </a>
                         <i data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                class="fa-solid fa-user-minus"></i>
                     </td>
                 </tr>    
                 @endfor
                
               
             </tbody>
         </table>
     </div>
  

      {{-- delete --}}
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">حذف المدرب</h5>
                {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
            </div>
            <div class="modal-body">
                هل انت متأكد من حذف المدرب ,لا يمكنك التراجع عن ذالك بعد الحذف!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                <button type="button" class="btn btn-danger">حذف</button>
            </div>
        </div>
    </div>
</div>
 </x-dashborad-bounder>
 
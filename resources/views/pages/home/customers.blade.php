<x-dashborad-bounder :title="'الأعضاء'" :css="'assets/css/home/tabs/customers.css'" :js="''">
   <div class="content">
    <a href="{{route('dashboradCustomersNew')}}" >
        عضو جديد <i class="fa-solid fa-plus"></i>  
    </a>
     <form action="#" method="get">
        <input type="search" name="search" id="search">
        <input class="button" type="submit" value="بحث">
    </form>
   
   </div>
   
    
    {{-- <h4>عدد المستخدمين 500</h4><br> --}}
    <div class="tableSection">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>اسم المستخدم</th>
                    <th>رقم الهاتف</th>
                    <th>البريد الإلكروني</th>
                    <th>مجال اللعب</th>
                    <th>المدرب</th>
                    <th>تاريخ التسجيل</th>
                    <th>تاريخ الإنتهاء</th>
                    <th>إعدادات</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 1 ; $i <=4 ; $i++)
                 <tr>
                    <td>#{{$i}}</td>
                    <td>زكريا ناصر زكري</td>
                    <td>0942667816</td>
                    <td>zakria@gmail.com</td>
                    <td>سويدي</td>
                    <td>رجب</td>
                    <td>2024 - 2 - 21</td>
                    <td>2024 - 3 - 20</td>
                    <td>
                        <i class="fa-regular fa-pen-to-square"></i>
                        <i class="fa-solid fa-user-minus"></i>
                        <i class="fa-solid fa-retweet"></i>
                    </td>
                </tr>    
                @endfor
               
              
            </tbody>
        </table>
    </div>
 
</x-dashborad-bounder>

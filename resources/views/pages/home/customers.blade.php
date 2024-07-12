<x-dashborad-bounder :title="'الأعضاء'" :css="'assets/css/home/tabs/customers.css'" :js="''">
    <div class="content">
        <a href="{{ route('dashboradCustomersNew') }}">
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
                    <th>الحضور</th>
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
                @for ($i = 1; $i <= 4; $i++)
                    <tr>
                        <td>#{{ $i }}</td>
                        <td>زكريا زكري</td>
                        <td>18/20</td>
                        <td>0942667816</td>
                        <td>zakria@gmail.com</td>
                        <td>سويدي</td>
                        <td>رجب</td>
                        <td>2024 - 2 - 21</td>
                        <td>2024 - 3 - 20</td>
                        <td>
                            <a href="{{ route('dashboradCustomersEdit') }}">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                            <i data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                class="fa-solid fa-user-minus"></i>
                            <i class="fa-solid fa-retweet" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                data-bs-whatever="@mdo"></i>
                        </td>
                    </tr>
                @endfor


            </tbody>
        </table>
    </div>
    {{-- 
 dailogs
 --}}

    {{-- delete --}}
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">حذف العضو</h5>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body">
                    هل انت متأكد من حذف العضو ,لا يمكنك التراجع عن ذالك بعد الحذف!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                    <button type="button" class="btn btn-danger">حذف</button>
                </div>
            </div>
        </div>
    </div>


    {{-- renew --}}






    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">تجديد العضو</h5>
                </div>
                <div class="p-3">
                    <div class="mb-3">
                        <label for="field" class="form-label">المجال</label>
                        <select id="field" name="field" class="form-select" selected="كارديو" >
                            <option value="action">سويدي</option>
                            <option value="another" selected>كارديو</option>
                            <option value="something">حديد</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="trainer" class="form-label">المدرب</label>
                        <select id="trainer" name="trainer" class="form-select" value="بدون">
                            <option value="action">بدون</option>
                            <option value="action" >رجب عون</option>
                            <option value="action" selected>انس السويسي</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="trainer" class="form-label">الإشتراك</label>
                        <select id="trainer" name="trainer" class="form-select" value="بدون">
                            <option value="action">شهري - 150 د.ل</option>
                            <option value="action">3شهور - 400 د.ل</option>
                            <option value="action">6شهور - 750 د.ل</option>
                        </select>
                    </div>

                    <label for="recipient-name" class="col-form-label">خصم:</label>
                    <input type="number" class="form-control" id="recipient-name">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                    <button type="button" class="btn btn-primary">تجديد</button>
                </div>
            </div>
        </div>
    </div>
</x-dashborad-bounder>

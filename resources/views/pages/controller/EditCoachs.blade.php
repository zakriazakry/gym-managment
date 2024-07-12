<x-dashborad-bounder :title="'المدربين / تعديل'" :css="'assets/css/home/controll/newCustomer.css'" :js="''">
    <div class="cardShap">
        <form action="{{route("dashboradCustomers")}}" method="get" class="form-container">
           
            <div class="mb-3">
                <label for="firstName" class="form-label">الإسم الاول</label>
                <input type="text" id="firstName" name="firstName" value="رجب" class="form-control" placeholder="Ali">
            </div>
            <div class="mb-3">
                <label for="lastName" class="form-label">الإسم التاني</label>
                <input type="text" id="lastName" name="lastName" value="عون"  class="form-control" placeholder="Mohammed">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">رقم الهاتف</label>
                <input type="text" id="phone" name="phone" value="0942667816"  class="form-control" placeholder="09xxxxxxxx">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">البريد الإلكتروني</label>
                <input type="email" id="email" name="email" value="rgb@gmail.com"  class="form-control" placeholder="user@gmail.com">
            </div>

            <div class="mb-3">
                <label for="field" class="form-label">المجال</label>
                <select id="field" name="field" class="form-select" selected="كارديو" >
                    <option value="action">سويدي</option>
                    <option value="another" selected>كارديو</option>
                    <option value="something">حديد</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="expiryDate" class="form-label">تاريخ الإنتهاء</label>
                <input type="date" id="expiryDate" value="2024-3-1" name="expiryDate" class="form-control">
            </div>
           
            <center>
                <button class="btn btn-primary w-50 " type="submit">حفظ المدرب</button>
            </center>
           
        </form>

        {{-- profile Image --}}
        <div class="image">
            <h3>صورة المدرب</h3>
            <p>صورة افتراضية لكل الأعضاء</p>
            <img src="https://attic.sh/6w3cufd5r762815njt1306orab15"
                alt="">
        </div>
    </div>
</x-dashborad-bounder>

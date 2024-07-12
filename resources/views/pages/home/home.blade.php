<x-dashborad-bounder :title="'الرئيسية'" :css="'assets/css/home/tabs/home.css'" :js="'assets/js/home/home.js'">
    <div class="cards">
        @for ($i = 1; $i <= 12; $i++)
            <div class="card">
                <div class="title">
                    <i class="fa-solid fa-tag"></i>
                    <p>المبيعات الشهرية</p>
                </div>
                <h2>999 د.ل</h2>
            </div>
        @endfor
    </div>
    {{-- charts --}}

    <div class="flex">
        <canvas class="cardShap" id="myChart"></canvas>
        <canvas class="cardShap" style="height: 230px" id="myChart2"></canvas>
    </div>
    {{-- transaction --}}
    <div class="flex">
        <div class="cardShap last-customrs" style="width: 65%">
            @for ($i = 0; $i <= 6; $i++)
            <div class="usercard">
                <div class="us">
                  <h5 class="mx-3">#{{$i}}</h5>
                    {{-- <img src="https://www.pngitem.com/pimgs/m/645-6452863_profile-image-memoji-brown-hair-man-with-glasses.png" alt=""> --}}
                    <p> عملية اشتراك 3 شهور لعضو </p>
                </div>
                <div class="bg-success rounded-3 text-white py-1 px-2" role="alert">
                    مكتمل
                  </div>
                <p>01-27</p>
            </div>
            @endfor
        </div>

        <div class="cardShap last-customrs" style="width: 33%">
            <h4> اخر الزبائن (6)</h4>
            <p>اخر الزبائن المشتركين في النادي</p>
            @for ($i = 0; $i <= 5; $i++)
            <div class="usercard">
                <div class="us">
                    <img src="https://www.pngitem.com/pimgs/m/645-6452863_profile-image-memoji-brown-hair-man-with-glasses.png" alt="">
                    <p>زكريا ناصر زكري</p>
                </div>
                <p>01-27</p>
            </div>
            @endfor
        </div>          
    </div>
    {{-- charts --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</x-dashborad-bounder>

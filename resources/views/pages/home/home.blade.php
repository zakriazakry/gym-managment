<x-dashborad-bounder :title="'الرئيسية'" :css="'assets/css/home/tabs/home.css'" :js="'assets/js/home/home.js'">
    <div class="cards">
        @for ($i = 1; $i <= 6; $i++)
            <div class="card">
                <div class="title">
                    <i class="fa-solid fa-tag"></i>
                    <p>المبيعات الشهرية</p>
                </div>
                <h2>999 د.ل</h2>
            </div>
        @endfor
    </div>
    <div class="charts">
        <canvas class="cardShap" id="myChart"></canvas>
        <div class="cardShap last-customrs" style="width: 33%">
            <h3> اخر الزبائن (6)</h3>
            <p>اخر الزبائن المشتركين في النادي</p>
            @for ($i = 0; $i <= 5; $i++)
            <div class="usercard">
                <div class="us">
                    <img src="https://www.pngitem.com/pimgs/m/645-6452863_profile-image-memoji-brown-hair-man-with-glasses.png" alt="">
                    <p>حمادي الشرقاوي</p>
                </div>
                <p>01-27</p>
            </div>
            @endfor
        </div>
    </div>

    {{-- charts --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</x-dashborad-bounder>

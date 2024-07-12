<x-app :css="'assets/css/home/dasborad.css'">
    {{-- head --}}
    <link rel="stylesheet" href="{{asset($css)}}">
    {{-- Body --}}
    <div class="system">
        <div class="slider">
           <div class="headSlider">
            <img src="{{ url('/assets/images/logo.png') }}"  alt="">
            <h1 >UNO FITNESS CLUB</h1>
           </div>
        <ul>
             <a href="{{ route('dashboardHome') }}">
                <li class="{{ Route::currentRouteName() === 'dashboardHome' ? 'active' : '' }}">
                    <i class="fa-solid fa-chart-pie"></i>
                    <p>الرئيسية</p>
                </li>
             </a>
             <a href="{{ route('dashboradCustomers') }}">
                <li class="{{ Route::currentRouteName() === 'dashboradCustomers' ? 'active' : '' }}">
                    <i class="fa-solid fa-users"></i>
                    <p>الأعضاء</p>
                </li>
             </a>
             <a href="{{ route('dashboradCoachs') }}">
                <li class="{{ Route::currentRouteName() === 'dashboradCoachs' ? 'active' : '' }}">
                    <i class="fa-solid fa-dumbbell"></i>
                    <p>المدربين</p>
                </li>
             </a>
             <a href="{{ route('dashboradPayment') }}">
                <li class="{{ Route::currentRouteName() === 'dashboradPayment' ? 'active' : '' }}">
                    <i class="fa-regular fa-credit-card"></i>
                    <p>المدفوعات</p>
                </li>
             </a>
    
        </ul>
        <a href="{{route('login')}}" class="logout">
            <div class="logout">
            <div class="profile">
                <img src="https://www.pngitem.com/pimgs/m/645-6452863_profile-image-memoji-brown-hair-man-with-glasses.png" alt="">
                <p>تسجيل الخروج</p>
            </div>
            <i class="fa-solid fa-circle-arrow-left"></i>
        </div>
        </a>
        
        </div>
        <div class="slot">
            <h2>لوحة التحكم</h2>
            <p>لوحة التحكم / {{$title}}</p>
            {{$slot}}
            <script src="{{asset($js)}}"></script>
        </div>
    </div>
</x-app>

<x-app :css="'assets/css/auth/login.css'">
    <div class="login">
        <div class="content">
            <img src="{{ url('/assets/images/logo.png') }}" width="100px" alt="">
            <br>
            <h2>تسجيل الدخول</h2>
            <p>قم بإدخال بياناتك للدخول لحسابكم</p>
            <br>
            <form action="/login" method="post">
                @csrf
                <div class="input">
                    <p>اسم المستخدم</p>
                    <input type="name" name="username">
                </div>
                <div class="input">
                    <p>كلمة السر</p>
                    <input type="password" name="password">
                </div>
                @if ($errors->has('error'))
                    <div class="error">
                        {{ $errors->first() }}
                    </div>
                @endif
                <br>
                <input class="button" type="submit" value="تسجيل الدخول">
            </form>
            <div class="or">
                <div class="divider"></div>
                <p>او</p>
                <div class="divider"></div>
            </div>
            <div class="anthorLogin">
                <div class="LoginItem">
                    <img width="30px" src="https://cdn1.iconfinder.com/data/icons/google-s-logo/150/Google_Icons-09-512.png" alt="">
                    <p>تسجيل عبر قوقل</p>
                </div>
            </div>
        </div>
        <div class="image">
            <div class="imgcontnet">
                <h1 style="font-family: 'perfect'">UNO FITNESS CLUB</h1>
                <br>
                <p style="font-family: 'perfect'">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit
                    laboriosam aliquam cupiditate. Unde quisquam temporibus qui optio, eveniet iusto quia dolores! Minus
                    voluptates incidunt similique quisquam, aliquam exercitationem architecto praesentium?</p>
            </div>
            <img id="login" src="{{ url('/assets/images/login.jpg') }}" alt="">
        </div>
    </div>
</x-app>

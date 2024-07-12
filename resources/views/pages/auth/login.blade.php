<x-app :css="'assets/css/auth/login.css'">
    <div class="login">
        <div class="content">
            <!-- Blade template syntax for image URL -->
            <img src="{{ url('/assets/images/logo.png') }}" width="100px" alt="">
            <br>
            <h2>تسجيل الدخول</h2>
            <p>قم بإدخال بياناتك للدخول لحسابكم</p>
            <form action="/login" method="post">
                @csrf
                <div class="input">
                    <p>اسم المستخدم</p>
                    <input type="text" name="username" class="form-control" placeholder="admin" aria-label="admin" aria-describedby="basic-addon1">
                </div>
                <div class="input">
                    <p>كلمة السر</p>
                    <input type="password"  name="password" class="form-control" placeholder="admin" aria-label="password" aria-describedby="basic-addon1">
                </div>
                @if ($errors->has('error'))
                    <div class="error">
                        {{ $errors->first() }}
                    </div>
                @endif
                <div class="form-check rem">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        تذكرني في المرة القادمة
                    </label>
                </div>
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
                    <!-- Replace with correct image URL -->
                    <img width="30px" src="https://cdn1.iconfinder.com/data/icons/google-s-logo/150/Google_Icons-09-512.png" alt="">
                    تسجيل عبر قوقل
                </div>
            </div>
            <a class="my-3" href="https://zekostore.ly">Power By Zakria zekri</a>
        </div>
    </div>
</x-app>

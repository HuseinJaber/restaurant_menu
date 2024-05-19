<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/alpinejs" defer></script>
    @vite('resources/scss/app.scss')
    @vite('resources/js/app.js')
    <title>Menu</title>
</head>
<body>
    <div class="page-container">
        <div class="background-image">
            <img src="/images/background.jpg" alt="">
        </div>
        <div class="logo-container">
            <div class="logo">
                <div class="asp asp-1-1 cover">
                    <img src="/images/logo.png" alt="">
                </div>
            </div>
        </div>
        <div class="categories">
{{--            <div class="menu-background">--}}
{{--                <img src="/images/menu-background.jpg" alt="">--}}
{{--            </div>--}}
            <div class="category" >
{{--            <div class="category" x-data="{expanded:false}" @click="expanded=!expanded">--}}
                <h1>Plates</h1>
                <div class="category-background">
                    <div class="asp asp-3-1 cover">
                        <img src="/images/platesBackground.jpg" alt="">
                        <div class="overlay"></div>
                    </div>
                </div>
{{--                <div class="items-container">--}}
{{--                    <div class="item">--}}
{{--                        <h2>Shwarama</h2>--}}
{{--                        <p>3.00$</p>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <h2>Shwarama</h2>--}}
{{--                        <p>3.00$</p>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <h2>Shwarama</h2>--}}
{{--                        <p>3.00$</p>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <h2>Shwarama</h2>--}}
{{--                        <p>3.00$</p>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <h2>Shwarama</h2>--}}
{{--                        <p>3.00$</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
            <a class="category" href="">
                <h1>Pizza</h1>
                <div class="category-background">
                    <div class="asp asp-3-1 cover">
                        <img src="/images/pizzaBackground.jpg" alt="">
                        <div class="overlay"></div>
                    </div>
                </div>
            </a>
            <div class="category">
                <h1>Grill</h1>
                <div class="category-background">
                    <div class="asp asp-3-1 cover">
                        <img src="/images/grillBackground.jpg" alt="">
                        <div class="overlay"></div>
                    </div>
                </div>
            </div>
            <div class="category">
                <h1>Shawarma</h1>
                <div class="category-background">
                    <div class="asp asp-3-1 cover">
                        <img src="/images/shawarmaBackground.jpg" alt="">
                        <div class="overlay"></div>
                    </div>
                </div>
            </div>
            <div class="category">
                <h1>Manakish</h1>
                <div class="category-background">
                    <div class="asp asp-3-1 cover">
                        <img src="/images/mana2eshBackground.jpg" alt="">
                        <div class="overlay"></div>
                    </div>
                </div>
            </div>
            <div class="category">
                <h1>Appetizers</h1>
                <div class="category-background">
                    <div class="asp asp-3-1 cover">
                        <img src="/images/AppitizersBackground.jpg" alt="">
                        <div class="overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

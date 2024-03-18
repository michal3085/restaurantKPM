<section id="menu" class="menu section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Menu</h2>
            <p>{{__('Enjoy your meal!')}}</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="menu-flters">
                    <li data-filter=".filter-main">{{ __('Main dishes') }}</li>
                    <li data-filter=".filter-steaks">{{ __('Steaks') }}</li>
                    <li data-filter=".filter-pasta">{{ __('Pasta') }}</li>
                    <li data-filter=".filter-dessert">{{ __('Dessert') }}</li>
                    <li data-filter=".filter-starters">{{ __('Starters') }}</li>
                    <li data-filter=".filter-soups">{{ __('Soups') }}</li>
                    <li data-filter=".filter-salads">{{ __('Salads') }}</li>
                    <li data-filter=".filter-kids">{{ __('For kids') }}</li>
                    <li data-filter=".filter-korean-special">{{ __('KOREAN SPECIAL MENU') }}</li>
                    <li data-filter="*">{{ __('All dishes') }}</li>
                </ul>
            </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-6 menu-item filter-main">
{{--                <img src="assets/img/menu/REVEMENU1S.jpg" class="menu-img" alt="">--}}
                <div class="menu-content">
                    <a href="#">{{ __('Spinach lasagne') }}</a><span>24 PLN</span>
                </div>
                <div class="menu-ingredients">
                    {{ __('tomato sauce/arugula salad') }} <p>250g/150g/80g</p>
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-main">
{{--                <img src="assets/img/menu/REVEMENU1S.jpg" class="menu-img" alt="">--}}
                <div class="menu-content">
                    <a href="#">{{ __('Corn-fed chicken fillet on the bone') }}</a><span>36 PLN</span>
                </div>
                <div class="menu-ingredients">
                    {{ __('tarragon butter/potato gratin/tomato salad') }} <p>250g/100g/200g</p>
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-main">
{{--                <img src="assets/img/menu/porkTenderloin.jpg" class="menu-img" alt="">--}}
                <div class="menu-content">
                    <a href="#">{{ __('Pork tenderloin in puff pastry with dijon mustard') }}</a><span>42 PLN</span>
                </div>
                <div class="menu-ingredients">
                    {{ __('boletus sauce/mixed salad') }}
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-main">
{{--                <img src="assets/img/menu/whiteFishFilet.jpg" class="menu-img" alt="">--}}
                <div class="menu-content">
                    <a href="#">{{ __('White fish fillet in a butter and leek sauce with sesame') }}</a><span>45 PLN</span>
                </div>
                <div class="menu-ingredients">
                    <p>200g/100g</p>
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-main">
{{--                <img src="assets/img/menu/REVEMENU1S.jpg" class="menu-img" alt="">--}}
                <div class="menu-content">
                    <a href="#">{{ __('Duck leg confit') }}</a><span>48 PLN</span>
                </div>
                <div class="menu-ingredients">
                    {{ __('orange peel/red cabbage with cranberry/thyme mashed potatoes') }} <p>150g/150g/200g</p>
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-main">
{{--                <img src="assets/img/menu/REVEMENU1S.jpg" class="menu-img" alt="">--}}
                <div class="menu-content">
                    <a href="#">{{ __('Traditional pork chop') }}</a><span>49,90 PLN</span>
                </div>
                <div class="menu-ingredients">
                    {{ __('pan fried potatoes/sauerkraut') }} <p>260g/200g/150g<p>
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-soups">
{{--                <img src="assets/img/menu/TOMATOSOUP.jpg" class="menu-img" alt="">--}}
                <div class="menu-content">
                    <a href="#">{{ __('Beef and duck broth') }}</a><span>18,90 PLN</span>
                </div>
                <div class="menu-ingredients">
                    {{ __('homemade noodles') }} <p>300g</p>
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-soups">
{{--                <img src="assets/img/menu/TOMATOSOUP.jpg" class="menu-img" alt="">--}}
                <div class="menu-content">
                    <a href="#">{{ __('Creamed toasted tomato') }}</a><span>22,90 PLN</span>
                </div>
                <div class="menu-ingredients">
                    {{ __('ricotta/herbal ciabatta') }} <p>300g</p>
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-soups">
{{--                <img src="assets/img/menu/TOMATOSOUP.jpg" class="menu-img" alt="">--}}
                <div class="menu-content">
                    <a href="#">{{ __('Old Polish horseradish borscht') }}</a><span>22,90 PLN</span>
                </div>
                <div class="menu-ingredients">
                    {{ __('smoked meat/baked white sausage') }} <p>300g</p>
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-steaks">
{{--                <img src="assets/img/menu/STEAK400.jpg" class="menu-img" alt="">--}}
                <div class="menu-content">
                    <a href="#">{{ __('Rib Eye') }}</a><span>90 PLN</span>
                </div>
                <div class="menu-ingredients">
                    {{ __('All steaks are served with the addition of Murray River Salt from Australia, French fries, mixed salad and chimichurri') }} <p>350g</p>
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-steaks">
{{--                <img src="assets/img/menu/STEAK400.jpg" class="menu-img" alt="">--}}
                <div class="menu-content">
                    <a href="#">{{ __('PorterHause') }}</a><span>110 PLN</span>
                </div>
                <div class="menu-ingredients">
                    {{ __('All steaks are served with the addition of Murray River Salt from Australia, French fries, mixed salad and chimichurri') }} <p>500g</p>
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-steaks">
{{--                <img src="assets/img/menu/STEAK400.jpg" class="menu-img" alt="">--}}
                <div class="menu-content">
                    <a href="#">{{ __('Côte de boeuf') }}</a><span>120 PLN</span>
                </div>
                <div class="menu-ingredients">
                    {{ __('All steaks are served with the addition of Murray River Salt from Australia, French fries, mixed salad and chimichurri') }} <p>450g</p>
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-salads">
{{--                <img src="assets/img/menu/romaineLettuee.jpg" class="menu-img" alt="">--}}
                <div class="menu-content">
                    <a href="#">{{ __('Romaine lettuee') }}</a><span>34 PLN</span>
                </div>
                <div class="menu-ingredients">
                    {{ __('chilli-mango dressing/grilled halloumi cheese/avocado/pickled cucumber/coriander/roasted cashew nuts') }} <p>80g/20g/100g/30g</p>
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-salads">
{{--                <img src="assets/img/menu/romaineLettuee.jpg" class="menu-img" alt="">--}}
                <div class="menu-content">
                    <a href="#">{{ __('Seasonal salad mix') }}</a><span>31,90 PLN</span>
                </div>
                <div class="menu-ingredients">
                    {{ __('yoghurt dressing/fresh cucumber/cherry tomatoes/fried egg/grilled chicken/toast') }} <p>80g/20g/100g/30g</p>
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-salads">
{{--                <img src="assets/img/menu/romaineLettuee.jpg" class="menu-img" alt="">--}}
                <div class="menu-content">
                    <a href="#">{{ __('Salad mix') }}</a><span>24,90 PLN</span>
                </div>
                <div class="menu-ingredients">
                    {{ __('lemon dressing/smoked salmon/brine cheese/pickled beetroot/cucumber/pickled Takuan radish/quinoa') }} <p>80g/15g/95g/25g/10g</p>
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-starters">
{{--                <img src="assets/img/menu/beefTartare.jpg" class="menu-img" alt="">--}}
                <div class="menu-content">
                    <a href="#">{{ __('Traditional beef tartare') }}</a><span>39,90 PLN</span>
                </div>
                <div class="menu-ingredients">
                    {{ __('dijon mustard/egg yolk/pickles/apers/bread') }}<p>100g/60g/100g</p>
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-starters">
{{--                <img src="assets/img/menu/beefTartare.jpg" class="menu-img" alt="">--}}
                <div class="menu-content">
                    <a href="#">{{ __('Beetroot carpaccio') }}</a><span>22,90 PLN</span>
                </div>
                <div class="menu-ingredients">
                    {{ __('arugula/lambs lettuee/roasted sunflower seeds/walnut/parmesan/honey vinaigrette') }}<p>200g/10g/30g/10g</p>
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-starters">
{{--                <img src="assets/img/menu/beefTartare.jpg" class="menu-img" alt="">--}}
                <div class="menu-content">
                    <a href="#">{{ __('Herring matjas') }}</a><span>22,90 PLN</span>
                </div>
                <div class="menu-ingredients">
                    {{ __('cottage cheese with black cumin/marinated onion/dill/potato grilled with herbs/smoked bacon') }}<p>130g/50g/50g</p>
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-starters">
{{--                <img src="assets/img/menu/beefTartare.jpg" class="menu-img" alt="">--}}
                <div class="menu-content">
                    <a href="#">{{ __('Pagnotta') }}</a><span>22,90 PLN</span>
                </div>
                <div class="menu-ingredients">
                    {{ __('marinated eggplant/mascarpone/garlic oil/rosemary/basil') }}<p>130g/50g/50g</p>
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-dessert">
{{--                <img src="assets/img/menu/lava.jpg" class="menu-img" alt="">--}}
                <div class="menu-content">
                    <a href="#">{{ __('Lava') }}</a><span>18 PLN</span>
                </div>
                <div class="menu-ingredients">
                    {{ __('chocolate cake with hot chocolate/fruit and a scoop of ice cream') }}
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-dessert">
{{--                <img src="assets/img/menu/lava.jpg" class="menu-img" alt="">--}}
                <div class="menu-content">
                    <a href="#">{{ __('Ice cream cup with whipped cream') }}</a><span>20 PLN</span>
                </div>
                <div class="menu-ingredients">
                    {{ __('seasonal fruit and topping') }}
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-pasta">
{{--                <img src="assets/img/menu/Udon.jpg" class="menu-img" alt="">--}}
                <div class="menu-content">
                    <a href="#">{{ __('Udon') }}</a><span>35,90 PLN</span>
                </div>
                <div class="menu-ingredients">
                    {{ __('oyster mushrooms/sugar peas/sweet chilli/sesame/choose from: shrimps, smoked tofu, chicken') }} <p>150g/40g/100g/20g/110g</p>
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-kids">
{{--                <img src="assets/img/menu/TOMATOSOUP.jpg" class="menu-img" alt="">--}}
                <div class="menu-content">
                    <a href="#">{{ __('Tomato soup with noodles') }}</a><span>10 PLN</span>
                </div>
                <div class="menu-ingredients"></div>
            </div>

            <div class="col-lg-6 menu-item filter-kids">
{{--                <img src="assets/img/menu/REVEMENU1S.jpg" class="menu-img" alt="">--}}
                <div class="menu-content">
                    <a href="#">{{ __('Pancakes with sweet cheese') }}</a><span>15 PLN</span>
                </div>
                <div class="menu-ingredients">
                    {{ __('seasonal fruit and chocolate glaze') }}
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-kids">
{{--                <img src="assets/img/menu/REVEMENU1S.jpg" class="menu-img" alt="">--}}
                <div class="menu-content">
                    <a href="#">{{ __('Chicken strips with fries and ketchup') }}</a><span>20 PLN</span>
                </div>
                <div class="menu-ingredients"></div>
            </div>

            <div class="col-lg-6 menu-item filter-kids">
{{--                <img src="assets/img/menu/REVEMENU1S.jpg" class="menu-img" alt="">--}}
                <div class="menu-content">
                    <a href="#">{{ __('Homemade fish fingers with french fries and yoghurt sauce') }}</a><span>20 PLN</span>
                </div>
                <div class="menu-ingredients"></div>
            </div>

{{--            KOREAN SPECIAL MENU  --}}
            <div class="col-lg-6 menu-item filter-korean-special">
                <img src="assets/img/menu/korean/MAKARON STRI-FRY.jpg" class="menu-img" alt="">
                <div class="menu-content">
                    <a href="#">{{ __('STIR-FRY NOODLES') }}</a><span>38/48* PLN</span>
                </div>
                <div class="menu-ingredients">
                    {{ __('Noodles, peppers, carrots, onion, pak choi, oyster mushrooms, duck breast*') }}
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-korean-special">
                <img src="assets/img/menu/korean/KURCZAK DAKGANGJEONG.jpg" class="menu-img" alt="">
                <div class="menu-content">
                    <a href="#">{{ __('DAKGANGJEONG CHICKEN') }}</a><span>54 PLN</span>
                </div>
                <div class="menu-ingredients">
                    {{ __('Breaded chicken leg, shimeji mushrooms, kimchi') }}
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-korean-special">
                <img src="assets/img/menu/korean/ANTRYKOT GALBI.jpg" class="menu-img" alt="">
                <div class="menu-content">
                    <a href="#">{{ __('GALBI ANTICOT') }}</a><span>99 PLN</span>
                </div>
                <div class="menu-ingredients">
                    {{ __('Antrikote, ginger, pear, cherry tomatoes, coriander, kimchi') }}
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-korean-special">
                {{--                <img src="assets/img/menu/REVEMENU1S.jpg" class="menu-img" alt="">--}}

            </div>
            <div class="col-lg-6 menu-item filter-korean-special">
                {{--                <img src="assets/img/menu/REVEMENU1S.jpg" class="menu-img" alt="">--}}

            </div>
            <div class="col-lg-6 menu-item filter-korean-special">
                <p>Napoje</p>
            </div>

            <div class="col-lg-6 menu-item filter-korean-special">
                {{--                <img src="assets/img/menu/REVEMENU1S.jpg" class="menu-img" alt="">--}}
                <div class="menu-content">
                    <a href="#">{{ __('KOREAN TEA') }}</a><span>15 PLN</span>
                </div>
                <div class="menu-ingredients">
                    {{ __('Aloe Vera / Jujube') }}
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-korean-special">
                {{--                <img src="assets/img/menu/REVEMENU1S.jpg" class="menu-img" alt="">--}}
                <div class="menu-content">
                    <a href="#">{{ __('BUTTERFLY ICE TEA') }}</a><span>18 PLN</span>
                </div>
                <div class="menu-ingredients">
                    {{ __('Clitoria ternatensis flower, lime, rosemary') }}
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-korean-special">
                {{--                <img src="assets/img/menu/REVEMENU1S.jpg" class="menu-img" alt="">--}}
                <div class="menu-content">
                    <a href="#">{{ __('SOMAEK') }}</a><span>36 PLN</span>
                </div>
                <div class="menu-ingredients">
                    {{ __('Beer, Soju') }}
                </div>
            </div>

        </div>

    </div>
</section>

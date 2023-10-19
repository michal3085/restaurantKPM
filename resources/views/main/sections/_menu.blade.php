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
                    <li data-filter="*">{{ __('All dishes') }}</li>
                </ul>
            </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-6 menu-item filter-main">
                <img src="assets/img/menu/REVEMENU1S.jpg" class="menu-img" alt="">
                <div class="menu-content">
                    <a href="#">{{ __('Spinach lasagne') }}</a>
                </div>
                <div class="menu-ingredients">
                    {{ __('tomato sauce/arugula salad') }} <p>250g/150g/80g</p>
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-main">
                <img src="assets/img/menu/REVEMENU1S.jpg" class="menu-img" alt="">
                <div class="menu-content">
                    <a href="#">{{ __('Corn-fed chicken fillet on the bone') }}</a>
                </div>
                <div class="menu-ingredients">
                    {{ __('tarragon butter/potato gratin/tomato salad') }} <p>250g/100g/200g</p>
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-main">
                <img src="assets/img/menu/porkTenderloin.jpg" class="menu-img" alt="">
                <div class="menu-content">
                    <a href="#">{{ __('Pork tenderloin in puff pastry with dijon mustard') }}</a>
                </div>
                <div class="menu-ingredients">
                    {{ __('boletus sauce/mixed salad') }}
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-main">
                <img src="assets/img/menu/whiteFishFilet.jpg" class="menu-img" alt="">
                <div class="menu-content">
                    <a href="#">{{ __('White fish fillet in a butter and leek sauce with sesame') }}</a>
                </div>
                <div class="menu-ingredients">
                    <p>200g/100g</p>
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-main">
                <img src="assets/img/menu/REVEMENU1S.jpg" class="menu-img" alt="">
                <div class="menu-content">
                    <a href="#">{{ __('Duck leg confit') }}</a>
                </div>
                <div class="menu-ingredients">
                    {{ __('orange peel/red cabbage with cranberry/thyme mashed potatoes') }} <p>150g/150g/200g</p>
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-main">
                <img src="assets/img/menu/REVEMENU1S.jpg" class="menu-img" alt="">
                <div class="menu-content">
                    <a href="#">{{ __('Traditional pork chop') }}</a>
                </div>
                <div class="menu-ingredients">
                    {{ __('pan fried potatoes/sauerkraut') }} <p>260g/200g/150g<p>
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-soups">
                <img src="assets/img/menu/TOMATOSOUP.jpg" class="menu-img" alt="">
                <div class="menu-content">
                    <a href="#">{{ __('Creamed toasted tomato') }}</a>
                </div>
                <div class="menu-ingredients">
                    {{ __('ricotta/herbal ciabatta') }} <p>300g</p>
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-soups">
                <img src="assets/img/menu/TOMATOSOUP.jpg" class="menu-img" alt="">
                <div class="menu-content">
                    <a href="#">{{ __('Creamed toasted tomato') }}</a>
                </div>
                <div class="menu-ingredients">
                    {{ __('ricotta/herbal ciabatta') }} <p>300g</p>
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-soups">
                <img src="assets/img/menu/TOMATOSOUP.jpg" class="menu-img" alt="">
                <div class="menu-content">
                    <a href="#">{{ __('Old Polish horseradish borscht') }}</a>
                </div>
                <div class="menu-ingredients">
                    {{ __('smoked meat/baked white sausage') }} <p>300g</p>
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-steaks">
                <img src="assets/img/menu/STEAK400.jpg" class="menu-img" alt="">
                <div class="menu-content">
                    <a href="#">{{ __('Rib Eye') }}</a>
                </div>
                <div class="menu-ingredients">
                    {{ __('All steaks are served with the addition of Murray River Salt from Australia, French fries, mixed salad and chimichurri') }} <p>350g</p>
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-steaks">
                <img src="assets/img/menu/STEAK400.jpg" class="menu-img" alt="">
                <div class="menu-content">
                    <a href="#">{{ __('PorterHause') }}</a>
                </div>
                <div class="menu-ingredients">
                    {{ __('All steaks are served with the addition of Murray River Salt from Australia, French fries, mixed salad and chimichurri') }} <p>500g</p>
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-steaks">
                <img src="assets/img/menu/STEAK400.jpg" class="menu-img" alt="">
                <div class="menu-content">
                    <a href="#">{{ __('Côte de boeuf') }}</a>
                </div>
                <div class="menu-ingredients">
                    {{ __('All steaks are served with the addition of Murray River Salt from Australia, French fries, mixed salad and chimichurri') }} <p>450g</p>
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-specialty">
                <img src="assets/img/menu/cake.jpg" class="menu-img" alt="">
                <div class="menu-content">
                    <a href="#">Crab Cake</a><span>$7.95</span>
                </div>
                <div class="menu-ingredients">
                    A delicate crab cake served on a toasted roll with lettuce and tartar sauce
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-salads">
                <img src="assets/img/menu/romaineLettuee.jpg" class="menu-img" alt="">
                <div class="menu-content">
                    <a href="#">{{ __('Romaine lettuee') }}</a>
                </div>
                <div class="menu-ingredients">
                    {{ __('chilli-mango dressing/grilled halloumi cheese/avocado/pickled cucumber/coriander/roasted cashew nuts') }} <p>80g/20g/100g/30g</p>
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-salads">
                <img src="assets/img/menu/romaineLettuee.jpg" class="menu-img" alt="">
                <div class="menu-content">
                    <a href="#">{{ __('Seasonal salad mix') }}</a>
                </div>
                <div class="menu-ingredients">
                    {{ __('yoghurt dressing/fresh cucumber/cherry tomatoes/fried egg/grilled chicken/toast') }} <p>80g/20g/100g/30g</p>
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-salads">
                <img src="assets/img/menu/romaineLettuee.jpg" class="menu-img" alt="">
                <div class="menu-content">
                    <a href="#">{{ __('Salad mix') }}</a>
                </div>
                <div class="menu-ingredients">
                    {{ __('lemon dressing/smoked salmon/brine cheese/pickled beetroot/cucumber/pickled Takuan radish/quinoa') }} <p>80g/15g/95g/25g/10g</p>
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-specialty">
                <img src="assets/img/menu/tuscan-grilled.jpg" class="menu-img" alt="">
                <div class="menu-content">
                    <a href="#">Tuscan Grilled</a><span>$9.95</span>
                </div>
                <div class="menu-ingredients">
                    Grilled chicken with provolone, artichoke hearts, and roasted red pesto
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-starters">
                <img src="assets/img/menu/beefTartare.jpg" class="menu-img" alt="">
                <div class="menu-content">
                    <a href="#">{{ __('Traditional beef tartare') }}</a>
                </div>
                <div class="menu-ingredients">
                    {{ __('dijon mustard/egg yolk/pickles/apers/bread') }}<p>100g/60g/100g</p>
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-starters">
                <img src="assets/img/menu/beefTartare.jpg" class="menu-img" alt="">
                <div class="menu-content">
                    <a href="#">{{ __('Beetroot carpaccio') }}</a>
                </div>
                <div class="menu-ingredients">
                    {{ __('arugula/lambs lettuee/roasted sunflower seeds/walnut/parmesan/honey vinaigrette') }}<p>200g/10g/30g/10g</p>
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-starters">
                <img src="assets/img/menu/beefTartare.jpg" class="menu-img" alt="">
                <div class="menu-content">
                    <a href="#">{{ __('Herring matjas') }}</a>
                </div>
                <div class="menu-ingredients">
                    {{ __('cottage cheese with black cumin/marinated onion/dill/potato grilled with herbs/smoked bacon') }}<p>130g/50g/50g</p>
                </div>
            </div>

            <div class="col-lg-6 menu-item filter-specialty">
                <img src="assets/img/menu/lobster-roll.jpg" class="menu-img" alt="">
                <div class="menu-content">
                    <a href="#">Lobster Roll</a><span>$12.95</span>
                </div>
                <div class="menu-ingredients">
                    Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
                </div>
            </div>

        </div>

    </div>
</section>
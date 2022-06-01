<!DOCTYPE html>
<html lang="en">
  <head>
    @include('frontend.includes.metatags')
  </head>

  <body>

    @include('frontend.includes.modal')

    <header class="header-area header-style-1 header-height-2">
       @include('frontend.includes.headtop')
       @include('frontend.includes.headmiddle')
       @include('frontend.includes.headbottom')
   </header>

   @include('frontend.includes.mobileheader')

    <!--  START: MAIN PANEL -->
    <main class="main">
    
    @include('frontend.pages.slider.slider')
    @include('frontend.pages.popularCategories.popularCategories')
    @include('frontend.pages.banners.banner')
    @include('frontend.pages.productTabs.productTabs')
    @include('frontend.pages.bestSales.bestSales')
    @include('frontend.pages.deals.deals')
    @include('frontend.pages.footerCarousel.footerCarousel')
    </main>
    @include('frontend.includes.footer')

    @include('frontend.includes.scripts')
  </body>
</html>

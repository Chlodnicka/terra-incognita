@extends('layouts.layout')

@section('title', 'Terra Incognita')

@section('content')
    <div class="contentexpedition">

        <div class="row"><!-- row -->
            <!-- col -->
            <div class="col-md-12">
                <h1 class="animfadeInUpBig" data-time="1500">TERRA INCOGNITA PROJECT</h1>
                <!--     <div class="devider-center animfadeInUpBig" data-time="1700"></div>
                   <div id="slidertext" class="animfadeInUpBig" data-time="1800">
                        <div class="main-text">wild experience</div>
                        <div class="main-text">awesome life</div>
                        <div class="main-text">challenge your life</div>
                    </div>-->

                <div class="btn-home animfadeInLeft" data-time="2100"><a class="link-class" href="/wyprawy">WYPRAWY</a>
                </div>
                <div class="btn-home animfadeInLeft" data-time="2100"><a class="link-class" href="/o-nas">O NAS</a>
                </div>
                <div class="btn-home animfadeInRight" data-time="2400"><a class="link-class" href="/aktualnosci">AKTUALNOŚCI</a>
                </div>

            </div>
            <!-- col end -->

            <!-- Subscribe start -->
            <div id="subwrap" class="white-popup-block mfp-hide animbouncefall" data-time="0">
                <h5>Please fill your email below</h5>
                <form id="subscribe" action="subscribe.php" method="post" name="subscribe">
                    <input class="subscribfield subscribeemail" id="subscribeemail" name="subscribeemail" type="text">
                    <button id="submit-2" class="btn-form" type="submit">Subscribe</button>
                </form>
                <div class="subscribesuccess">Thank you for fill your email</div>
            </div>
            <!-- Subscribe end -->

        </div><!-- row end -->

    </div>
@endsection
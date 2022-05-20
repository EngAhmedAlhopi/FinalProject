@extends('layouts.dashbord')
@section('content')
<!-- SECTION -->
<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <span>Hottest Giveaways</span>
        <span class="custom-badge text-uppercase">See More</span>

    </div>



    <div class="row">

        <div class="col-md-4">

            <div class="card">

                <div class="d-flex justify-content-between align-items-center">

                    <div class="d-flex flex-row align-items-center time">

                        <i class="fa fa-clock-o"></i>
                        <small class="ml-1">3 Days</small>


                    </div>

                    <img src="test4/1.jpg" width="20">

                </div>


                <div class="text-center">

                    <img src="test4/1.jpg" width="250">
                </div>

                <div class="text-center">

                    <h5>Amazon Echo</h5>
                    <span class="text-success">$200 value</span>


                </div>

            </div>

        </div>



        <div class="col-md-4">

            <div class="card">

                <div class="d-flex justify-content-between align-items-center">

                    <div class="d-flex flex-row align-items-center time">

                        <i class="fa fa-clock-o"></i>
                        <small class="ml-1 text-primary">00:02:13</small>


                    </div>

                    <img src="test4/2.jpg" width="20">

                </div>


                <div class="text-center">

                    <img src="test4/2.jpg" width="250">
                </div>

                <div class="text-center">

                    <h5>

                        Kruve Coffee Filters
                    </h5>
                    <span class="text-success">$80 value</span>


                </div>

            </div>

        </div>




        <div class="col-md-4">

            <div class="card">

                <div class="d-flex justify-content-between align-items-center">

                    <div class="d-flex flex-row align-items-center time">

                        <i class="fa fa-clock-o"></i>
                        <small class="ml-1">2 Days</small>


                    </div>

                    <img src="test4/3.jpg" width="20">

                </div>




                <div class="text-center">

                    <img src="test4/3.jpg" width="250">
                </div>

                <div class="text-center">

                    <h5>Apple watch 2.0</h5>
                    <span class="text-success">$360 value</span>
                    <div>
                        <i class="fa-light fa-heart"></i>
                    </div>
                    <!-- <span class="icons"><i class="bi bi-heart"></i></span> -->
                    <!-- <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                </svg>
                            </button> -->
                    <!-- <span class="icons"></span> -->


                </div>

            </div>

        </div>

    </div>


</div>
<!-- /SECTION -->
<script src="test4/bootstrap.bundle.min.js"></script>
<script src="test4/jquery.min.js"></script>
<script>
    $(".star.glyphicon").click(function() {
                $(this).toggleClass("glyphicon-star glyphicon-star-empty");
            });

            $(".heart.fa").click(function() {
                $(this).toggleClass("fa-heart fa-heart-o");
            });
</script>
@endsection
@section('style')
<style>
    body {
        background-color: #f6f7f9;
    }

    .custom-badge {
        background-color: #343a40 !important;
        color: #fff;
        font-size: 11px;
        padding: 5px;
        padding-left: 11px;
        padding-right: 11px;
        border-radius: 7px;
    }

    .card {
        border: none;
        padding: 15px;
        cursor: pointer;
    }

    .time i {
        color: #cacacaa3;
    }

    .heart {
        font-size: 25px;
        color: red;
    }

    /* button {
        background-color: white;
        border: none;
    }

    button:active svg {
        color: red;
    } */
</style>
@endsection

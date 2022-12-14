<!DOCTYPE html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- Other CSS -->
    <link rel="stylesheet" href="../resources/css/index.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <!--Review CSS -->
    <link rel="stylesheet" href="../resources/css/review.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Abril Fatface' rel='stylesheet'>
    <!-- Font awesome symbols -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <title>Fly High</title>
</head>

<body>

    @include('header')

    <div id="outerWrap"><img src="../resources/images/Hero (1).png" alt="" width="100%" height="500px"></div>
    <div id="layer1">
        <div>
            <i class="fa fa-plane" aria-hidden="true" style="margin-left: 20px;"></i>
            <select class="home_type" id="trip_type" onchange="myfunction()" style="margin-top: 12px;border: 0px;">
                <option selected value="1">Round Trip</option>
                <option value="2">Single Trip</option>
            </select>
            <i class="fa fa-tags" aria-hidden="true" style="margin-left: 20px;"></i>
            <select class="home_class" style="margin-top: 12px;border: 0px;">
                <option value="1">Economy</option>
                <option selected value="2">Business Class</option>
            </select>
            <div style="--bs-gutter-y: -1rem;--bs-gutter-x: 0rem;margin-left: 1rem;margin-top: 16px;">

                <form class="row row-cols-lg-auto g-3 align-items-center form">
                    <div class="col-12">
                        <label class="visually-hidden" for="inlineFormInputGroupUsername">From</label>
                        <div>
                            <i class="fa fa-plane-departure form_icon"></i>
                            <input type="text" class="form-input" placeholder="From where?">
                        </div>
                    </div>
                    <div class="col-12">
                        <div>
                            <i class="fa-solid fa-plane-arrival form_icon"></i>
                            <input type="text" class="form-input" placeholder="Where to?">
                        </div>
                    </div>
                    <div class="col-12">
                        <div>
                            <input type="date" id="datefield" class="form-input" placeholder="Departure: &nbsp">
                        </div>
                    </div>
                    <div class="col-12" id="optional-field">
                        <div>
                            <input type="date" class="form-input" id="datefield" placeholder="Return: &nbsp">
                        </div>
                    </div>
                    <div class="col-12">
                        <div>
                            <i class="fa fa-minus" aria-hidden="true" onclick="passengerSub()"></i>
                            <input type="number" id="pnum" class="form-input" placeholder="No of Adults" disabled>
                            <i class="fa fa-plus" aria-hidden="true" onclick="passengerAdd()"></i>
                        </div>
                    </div>
                    <div class="col-12">
                        <a href="public/flights"><button type="submit" class="home_search_button">Search</button></a>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <div class="home_flight_deals">
        <p>Find your next adventure with these <span class="bold">flight deals</span><span class="all">All <i class='fa fa-arrow-right' style="color:#6E7491;"></i></span></p>
    </div>
    <div class="home_places">
        <div class="card-group">
            <div class="card home_card">
                <img src="../resources/images/image1.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">The Bund, <span class="bold">Shanghai</span></span><span class="price">$598</span></h5>
                    </h5>
                    <p class="card-text">China's most international city</p>
                    <p class="card-text"><small class="text-muted"></small></p>
                </div>
            </div>
            <div class="card home_card">
                <img src="../resources/images/image2.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sydney Opera House, <span class="bold">Sydney</span><span class="price">$981</span></h5>
                    <p class="card-text">Take a stroll along the famous harbor</p>
                </div>
            </div>
            <div class="card home_card">
                <img src="../resources/images/image3.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">K??daiji Temple, <span class="bold">Kyoto</span><span class="price">$633</span></h5>
                    <p class="card-text">Step back in time in the Gion district</p>
                </div>
            </div>
        </div>
        <div class="card-group">

            <div class="card mb-3 home_card">
                <img src="../resources/images/image4.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Tsavo East National Park, <span class="bold">Kenya</span><span class="price">$1,248</span></h5>
                    <p class="card-text">Named after the Tsavo River, and opened in April 1984, Tsavo East National Park
                        is one of the oldest parks in Kenya. It
                        is located in the semi-arid Taru Desert.</p>
                </div>
            </div>
        </div>
    </div>
    <div style="color: #6E7491; padding: 0px 15px;">
        <p>Explore unique <span class="bold">places to stay</span><span class="all">All <i class='fa fa-arrow-right'></i></span></p>
    </div>


    <div class="home_places">
        <div class="card-group">
            <div class="card home_card">
                <img src="../resources/images/image5.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Stay among the atolls in <span class="bold">Maldives</span></span>
                    </h5>
                    </h5>
                    <p class="card-text">From the 2nd century AD, the islands were known as the 'Money Isles' due to the
                        abundance of cowry shells, a currency of
                        the early ages.</p>
                </div>
            </div>
            <div class="card home_card">
                <img src="../resources/images/image6.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Experience the Ourika Valley in <span class="bold">Morocco</span>
                    </h5>
                    <p class="card-text">Morocco???s Hispano-Moorish architecture blends influences from Berber culture,
                        Spain, and contemporary artistic currents
                        in the Middle East.</p>
                </div>
            </div>
            <div class="card home_card">
                <img src="../resources/images/image7.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Live traditionally in <span class="bold">Mongolia</span></h5>
                    <p class="card-text">Traditional Mongolian yurts consists of an angled latticework of wood or bamboo
                        for walls, ribs, and a wheel.</p>
                </div>
            </div>
        </div>
        <div class="card-group" id="hide" style="display:none ;">
            <div class="card home_card">
                <img src="../resources/images/Ooty.jpeg" class="card-img-top" alt="..." height="300px">
                <div class="card-body">
                    <h5 class="card-title">Sprawling along the slopes of the Doddabetta mountain in <span class="bold">Ooty</span></span>
                    </h5>
                    </h5>
                    <p class="card-text"> Housed here are lush, manicured lawns, exotic and rare species of flora and a vast variety of flowering bushes and plants in myriad hues.</p>
                </div>
            </div>
            <div class="card home_card">
                <img src="../resources/images/China.jpg" class="card-img-top" alt="..." height="300px">
                <div class="card-body">
                    <h5 class="card-title">Experience the Great Wall in <span class="bold">China</span>
                    </h5>
                    <p class="card-text">The Great Wall of China was built over centuries by China's emperors to protect their territory. Today, it stretches for thousands of miles along China's historic northern border.</p>
                </div>
            </div>
            <div class="card home_card">
                <img src="../resources/images/Versailles.jpg" class="card-img-top" alt="..." height="300px">
                <div class="card-body">
                    <h5 class="card-title">Explore the palaces in <span class="bold">Versailles</span></h5>
                    <p class="card-text">The Palace of Versailles has been listed as a World Heritage Site for 40 years and is one of the greatest achievements in French 17th century art.</p>
                </div>
            </div>
        </div>
    </div>
    <div style="display: grid;justify-content: center;align-items: center;padding: 10px;">
        <button class="btn btn-primary mx-auto" type="submit" id="explore-btn" style="background-color:#1DB4FF ;
        " onclick="showmore()">Explore more stays</button>
    </div>
    <div style="display: grid;justify-content: center;align-items: center;color: #6E7491;" class="home_reviews">
        <p>What <span class="bold" style="color:#1DB4FF ;">FlyHigh</span> users are saying</p>
    </div>
    @include('review')
    <!-- Footer -->
    @include('footer')
    <!--Date field JS-->
    <script src="../resources/js/date.js"></script>
    <!-- Review Js-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="../resources/js/review.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="../resources/js/homepage.js">

    </script>
</body>

</html>
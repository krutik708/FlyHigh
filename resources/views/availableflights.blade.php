<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Data table css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

    <!-- Custom Css -->
    <link rel="stylesheet" href="../resources/css/availableflights.css">
    <link rel="stylesheet" href="../resources/css/footer.css">
    <link rel="stylesheet" href="../resources/css/header.css">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Abril Fatface' rel='stylesheet'>
    <!-- Font awesome symbols -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">



    <title>Fly High</title>
</head>

<body>
    @include('header')

    <div class="container">
        <!--container div contains everything other than footer and nav bar -->

        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn" style="border: 2px solid grey;">Max price</button>
            <div id="myDropdown" class="dropdown-content">
                <!-- <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()"> -->
                <a href="#about">About</a>
                <a href="#base">Base</a>
                <a href="#blog">Blog</a>
                <a href="#contact">Contact</a>
                <a href="#custom">Custom</a>
                <a href="#support">Support</a>
                <a href="#tools">Tools</a>
            </div>

            <button onclick="myFunction()" class="dropbtn" style="border: 2px solid grey;">Shops</button>
            <div id="myDropdown" class="dropdown-content">
                <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                <a href="#about">About</a>
                <a href="#base">Base</a>
                <a href="#blog">Blog</a>
                <a href="#contact">Contact</a>
                <a href="#custom">Custom</a>
                <a href="#support">Support</a>
                <a href="#tools">Tools</a>
            </div>

            <button onclick="myFunction()" class="dropbtn" style="border: 2px solid grey;">Times</button>
            <div id="myDropdown" class="dropdown-content">
                <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                <a href="#about">About</a>
                <a href="#base">Base</a>
                <a href="#blog">Blog</a>
                <a href="#contact">Contact</a>
                <a href="#custom">Custom</a>
                <a href="#support">Support</a>
                <a href="#tools">Tools</a>
            </div>

            <button onclick="myFunction()" class="dropbtn" style="border: 2px solid grey;">Airlines</button>
            <div id="myDropdown" class="dropdown-content">
                <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                <a href="#about">About</a>
                <a href="#base">Base</a>
                <a href="#blog">Blog</a>
                <a href="#contact">Contact</a>
                <a href="#custom">Custom</a>
                <a href="#support">Support</a>
                <a href="#tools">Tools</a>
            </div>

            <button onclick="myFunction()" class="dropbtn" style="border: 2px solid grey;">Seat Class</button>
            <div id="myDropdown" class="dropdown-content">
                <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                <a href="#about">About</a>
                <a href="#base">Base</a>
                <a href="#blog">Blog</a>
                <a href="#contact">Contact</a>
                <a href="#custom">Custom</a>
                <a href="#support">Support</a>
                <a href="#tools">Tools</a>
            </div>

        </div>


        <span style="position: absolute; top:17.1em; right:290px;"><b>Price Grids(Flexible Dates)</b></span>
        <div class="selectedflightdetails">

            <table>
                <tr>
                    <th></th>
                    <th>2/12</th>
                    <th>2/13</th>
                    <th>2/14</th>
                    <th>2/15</th>
                    <th>2/16</th>
                </tr>
                <tr>
                    <th>3/7</th>
                    <td>$837</td>
                    <td>$592</td>
                    <td>$592</td>
                    <td>$1308</td>
                    <td>$837</td>
                </tr>
                <tr>
                    <th>3/8</th>
                    <td>$837</td>
                    <td>$592</td>
                    <td>$592</td>
                    <td>$1308</td>
                    <td>$837</td>
                </tr>
                <tr>
                    <th>3/9</th>
                    <td>$837</td>
                    <td>$592</td>
                    <td>$592</td>
                    <td>$1308</td>
                    <td>$837</td>
                </tr>
                <tr>
                    <th>3/10</th>
                    <td>$837</td>
                    <td>$592</td>
                    <td>$592</td>
                    <td>$1308</td>
                    <td>$837</td>
                </tr>
                <tr>
                    <th>3/11</th>
                    <td>$837</td>
                    <td>$592</td>
                    <td>$592</td>
                    <td>$1308</td>
                    <td>$837</td>
                </tr>

            </table>

        </div>


        <div style="position:absolute; top: 300px; width: 50%; border: solid 1px wheat; border-radius: 10px; padding: 5px;">
            <div style="position: relative; bottom:2em">
                <b>Choose a departing flight</b>
            </div>
            <table id="flighttable" class="display">
                <thead>
                    <tr>
                        <th>AirLines</th>
                        <th>Duration</th>
                        <th>Departure</th>
                        <th>Arrival</th>
                        <th>Halts</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="../resources/images/Air-India-logo.png" style="width: 50px; height: 50px; margin-right: 10px;">Air India</td>
                        <td>16h 45m</td>
                        <td>7:00 AM</td>
                        <td>4:15PM</td>
                        <td>Non Stop</td>
                        <td>$624</td>
                    </tr>
                    <tr>
                        <td><img src="../resources/images/indigo-logo.png" style="width: 50px; height: 40px; margin-right: 10px;">IndiGO</td>
                        <td>16h 45m</td>
                        <td>7:00 AM</td>
                        <td>4:15PM</td>
                        <td>Non Stop</td>
                        <td>$624</td>
                    </tr>
                    <tr>
                        <td><img src="data:image/png;base64,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" style="width: 50px; height: 50px; margin-right: 10px;">Akasa Air</td>
                        <td>16h 45m</td>
                        <td>7:00 AM</td>
                        <td>4:15PM</td>
                        <td>Non Stop</td>
                        <td>$624</td>
                    </tr>
                    <tr>
                        <td><img src="../resources/images/gofirst.png" style="width: 50px; height: 40px; margin-right: 10px;">Go First</td>
                        <td>16h 45m</td>
                        <td>7:00 AM</td>
                        <td>4:15PM</td>
                        <td>Non Stop</td>
                        <td>$624</td>
                    </tr>
                    <tr>
                        <td><img src="../resources/images/Air-India-logo.png" style="width: 50px; height: 40px; margin-right: 10px;">Air India</td>
                        <td>16h 45m</td>
                        <td>7:00 AM</td>
                        <td>4:15PM</td>
                        <td>Non Stop</td>
                        <td>$624</td>
                    </tr>
                    <tr>
                        <td><img src="../resources/images/indigo-logo.png" style="width: 50px; height: 40px; margin-right: 10px;">IndiGO</td>
                        <td>16h 45m</td>
                        <td>7:00 AM</td>
                        <td>4:15PM</td>
                        <td>Non Stop</td>
                        <td>$624</td>
                    </tr>
                    <tr>
                        <td><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAzFBMVEX///9cD9n/YgBYANj/XwBbANn69/6IVeL49P317/z/XQBUANibcudaCtny6/zg0fjUwPWVZuW+oe+YbOb9/P//ZwD//fvf0Peke+ro3flyM96ogur/9Ozq4Pr/7uP/6Nvl2PnRvPTYxfWDTOL/3sr/vZX/1b3/rHvNtvNmFtuzkO3GrfGOW+SSYeV7PeC8n+9+ROD/nGL/fS3/x6X/bxL/lFb/hTz/3Mf/wJv/eib/jEf/tov/oWu1lu1qJNyti+v/iEP/qnb/za//lVzq6cS1AAANF0lEQVR4nO1ca2PauBLFCNnYxiaAeRlMDLQpb2iaps0D2Gb//3+6tjSyJVvpNrlsYEHnw24aYXt0mMeZkdtCQUFBQUFBQUFBQUFBQeFfR6s/uAYMjm3LaWDw8uXxrlm0CL4e25pTQP/pPqKjVCQo3X06tj0ngOvHEvBBOPl8bHtOANf3VpGj5Falk0L/kaekaD0d26ATwBeBkmLz5dgGHR+fmiWeEpVhI1nyt0BJlE6uj23S0fHSLIqc3F98iu3/ZWU4UWXnmxg5EScPlx47/dscJ3c/jm3UkfG5mMeF1+JcNlGarXDTzLuJ9b1/bLOOim95N4kSymUn2Z8STorWt2ObdVTcSCgplr4f26yjon+vgicHWS0uFr8c26yjIq/Zihfc8rQ+teL/vciybOnnsa07Dn42SYT0v0tIse4vUqIMbq0HMjy6aUqi5yLLcevJKlpf4uhpPcsyyu0FOko8cCw1Sc39dCchpXh5TU/rMebBojX3i0yjXN4E8hsfIdcPsoxCAuuCMAD52qSp9KesHDcvbHz/BNECh+WyKUrxwg7Sr1lWZVkjO7unjnJzZDM/EvyJDt13Syrc/r6gesx5hQWvEPyQCbfi5Qg3/sjceqbVpfV82Qqfn60l2/4krceX8iLKgJetpTvmCl8ksXMxx1+ZKGGTkoHMUUqXMVy6EbubUuIJsnH1Zbx3kR2XlJJNZ95Wgozy9QIUfvbIPOVEKtyYgDln9LNZg+Ok9V2WUR7P3lFyY4ESN42+TOH2Izs+KjU5Wdb6JRVu5z3Db33NuYkwY7yWTdzOXLi95Dcs1pUnWUY561NByflWxgkGshMw6/lI9n4EZF6QKbXSidsZv8wlafNy7zhemHCTjQNKubCQvnxxtsJNsltJVORLU+wof53nIKUledPE+p4PCvkJ2HmeqcteNGnKkqe0Hp/lu9Wycy3rlyx3StNs6QyPSluS80/rlSlargEonqdwk7R3pVf/7pJMpFi/PtTeD0BLFg+v9jGyXrAkzT3/ZXyTZIjfnJH3JQW5JKlR/2UM7nN/+aL429cGZKSc118TbD1ld2g1P//+W+8/W1kaz0u4ZWVYyXr4R7Hef2rmiDyjiVv2gNy6e/4TBXZzX8pQ+XA+wu1F9JHi1z/s6AZPD2IAnc8J2OCvEkfI3fOPP68fg88PzVLKy/mcgJHzvVLJsqzm7d+f3+j+/Zfn+7v4HwAp0XcCz6MeR6reitzj9vHXz5t36fP+j5en58fbu2bzlQbpP4g++Ydv+v3/Zzutfn8wGFxfn1M1VlBQUFBQUFBQUFBQUFD4ALjrSmdS/rjnmd2wqn/c496D9gojjBfBRz1vsphiu/pRT3sXzLGtaZpjN7wD3tRrzzoU3exSXbMd5zQ4Sa3MmDPBjhaTsjugmWZHwwRoF2aWQh9FTzsJTjgrM+bUYzeJOJleHexhescmPEd732e9b4u0E+FE7zErUSWzNEfAyehgTxtieJiGGplk6nXsU+FklFppZL456swaGpsHe9oCwcMipjP5RK+cCidezX7VysIM2w6yd5ODPa26Y19ARPVMXDsdTsJpaiXeZxa9+cL3G4eLnMIscZOIk5UYPKfDyQxzVo7d7LIZuAfUUO6YcOJIU/fJcFIeQx6l/zlcgZFihGlth6+gIyyeDCdXNHSmNM7t3r8qrHWoLJ0apsEjCOQcJ2bYpmAfM9vbhjE2GtsqtBtmUG2nrq0H884yWl926qGZKRfRWmUxHi97Vy5d0d2w3ZVqUa9H7EBLaq2zy8n4+LGs4YnvE0b38dzJbD/Jxdk/IqDM4+GIOicSkneWk8CwbRsh2wYpYM7HGFFgYxibMTSwba/ZVq4abDnCaibUi3ZlatMF29/Ghnc7U9teSju5wCdWoiH1ag3VxXXyWAwRFcb3ieqyud3Ftq7Ct3Kypu6xCcwVLfIL3qgMJ2YNiJtS5qpLnCZoW9uXC/OoFdAwWOxGxqXVQov2nhJenu3SNWQbYSEYR7+wa1JO5tRN/ACyHxqL7hQ/1nEoJ8Emug8yym4N0UBrvJESjz4Ddwrenrol5nOHyEm5wwQj3fTQ50pWfGnHJb8BTtwlcjQBKFGaQWYN+eEsfhSScqIbVE73PKiSGcna3aEk89IwQ0YA31/E3xs5GZHcRR5BfxSzrMCJt6f7cPCWXrsTKImtWk61hBPQwHSBbR2+M3eRuTTy1A16lZO2Rq0cxg+lVvb4dVKogROTfC1osXdYK2C8kZM9dcVNlMdN+mU4PqeQBU7W8BREs36wYnt2nCgpOOnmKSdtKJxRqiFJxUk58fapdI5XnORSOSc9GuCxdvcMsJjPshWUcuLSu/kkA0UB5WRK6T/C3VCnJF/8llZlbS7nZAJKElXKqSFkV1N/M17tnGSflJMO3K4yCtxgtF76GDmY3jvpXZCzW403/jS5VMoJWEnl65p+FvO1oMFzglOvxLvdborfqG+HEJ2kIHSh+FfS4s9xcgWRgmq0uEGoxZseRr/xwvWG7YxyAhtJBj3BemwbZMdlAzwMjevxk91JIyFJxsmEsjsNyW2mkDm5D0o5cfCi3u52R/O3aRm9QbcMhtAgd7ghSspJlZYlzR5Tp/XSfMue2TUQx4lHL8Bc4AdrmquvWBA2WACUZ7+JHUhMyCAP0mkzKDSCMk4cbfauNrlLOQePLkxg22nxTzgJwAkQq/YBrTmOwymFLnyI5wRt2rnvqQIiY5nKKa+DX+UEJJQtWsm3qzJOoBC8GXuaBX2g3IWcvknsAk7QcEm9He3asHIFv1jwQmGOudiBDgXtKvWRoCXLK/DHNvdLF1SZhJM6aFewMoDLV+knJZyIOuvPodPvlRVI5qSOk2Ql4MTZYAiUIVvZAidCNxasnJSTHnSyjo12m9o2dRcYTiBRS9FYlHCiU3LTNNeDpjXNshJO8DuHKcOpI250SAMdJ9YCJ0nXnJQkD8jyxcZjiVJOwlSWxPVY8/ehxz1W00R9PrFf4YS2fxwFcD03gsxz4vjh+zjpwb6qQTcg+YjNDZKdMk4ouHypL6ETEPNYheOESbyEF3tKs94cyohYI6uvcQI13R8xK8sbsDLZdp4TyYjljwCNlTb1I6yWsbf0+ISQ48QZJ17B1HZD5IReD5eXK1gU8A5axh+vAyfiACLEck4gfYCVi7jRhCmYnXithBPjfbPZSapDYyUaB0Yb3JJ1p2LscBToCwj/33BS0NebKJlwtDhEdjE/aQuXhnQvOU7mWLAyjrgQ0qjBPnswTrxMz4HixA7Bw75D4ATXwDDUgzKj16A/FV1U5CRWY71x1LgnvKA4Kud0i1MxC77CCUio1MpIuYGTpu3qwTipTgXHjk93kuMjdtDD9MmoBwoNw2gEhjzZEXqWk0I87LnaGzuNjQ4nycwMi/PwVzjpahkr4+5vDkWPdTIH46SHtczTVjpTzqwRTDSby+ahrEgx8uqSe+LsxEd352PQqev4OAZcXxBzr3CyzTXQUScId3B897CcwAxJS+dgNh4mrgrlndP2MCtBPnVYGHg5KyF4eE4mdX7PcBYRd5sem4rP+UvlnJQ3eSsnkRIApuaH5WQCTceikiA+m4aUhhYZTpKeD7r0ROzXGCnBlcdzUt1hY5husLxLOGEeinasGutXwSucsGbcSK2sxFZCLajph+QEZtOJ+zEw5UzPqflZQR0aCVpQC2wEgsaTrlk2u5MxbvOcROoE4fE8pLaVt/TTTvzNthm9023VLZvBqBMpHzknjYxgAriClYfihA0GOtk5Obgl2mY5YW0aFJ/k+BAh31gafuTWM46TMumQkL0zOvvttmfQVEnqTlpLHHs6Xi42mm0bZlfGSZcmDlzLmg9dOR38HIoTyJEoN3BhyplUWWHOZi6E4pOezMGYLaoIKSfQ0sfyFWFssykCPdWsJlNLh07goqdJOYE3BvAwa2Ubwm9lHo4TaKzQJieBoWvVyHhKnFEzSUmlRXkpKof4GISLnTrOFNH4PszSeWbRbngyTsqL/DiUwmTpbHQ4TiBj2rP80gyqbCfHSTKVRn6sQTNzeXtj8pzovYyyj4JsydKCt3b4Gou0oTSfgGDNvxZTKKzBzxuH46RDjpts2VssIYY1l3BCfmYyvK7RYyqbHBeasx3MprU4n4ZxV0mWSWzpk80U5s8kRhx/m+7Xu9pgWIvbiroHjxXPvOjtbNlEtU0PzGwyFKyRn+mZl4vIfd7xLsrMIOhIZpU6rBmxJXXy05ipVa++gEWa3MLeeIdt28Y7gxzlTegihL8+7Bn+FMVHh9NVbS2GqVlf+hpd6hCvq5EnzXiLtmClZH/MysUwsdIg3lwm9zF6bx8peSaB9EJYM/X059R3dVhkZrrt4WQyGbbhz+mV8OdwRNZHknNgPRyRpYC/s2DR76wscFYWeCsl91FQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQODX8D9poH9/9siY6AAAAAElFTkSuQmCC" style="width: 50px; height: 40px; margin-right: 10px;">Akasa Air</td>
                        <td>16h 45m</td>
                        <td>7:00 AM</td>
                        <td>4:15PM</td>
                        <td>Non Stop</td>
                        <td>$624</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>

            <p><span style="position: relative; top:50em;">Find Places to stay in Bengaluru</span></p>
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="https://r1imghtlak.mmtcdn.com/ae6346d84fc111e98fb80242ac110002.jpg?&output-quality=75&downsize=520:350&crop=520:350;0,10&output-format=jpg" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">The Park Bangalore</h4>
                        <p class="card-text">
                            Located at Ulsoor, an uber-chic property in downtown, offering a host of leisure services, luxurious rooms and suites, and premium dining options.
                        </p>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img-top" src="https://r2imghtlak.mmtcdn.com/r2-mmt-htl-image/htl-imgs/201409221814048475-f7d1561a9dee11eca7a60a58a9feac02.jpg?&output-quality=75&downsize=520:350&crop=520:350;2,0&output-format=jpg">
                    <div class="card-block">
                        <h4 class="card-title">Octave Himalaya Monarch</h4>
                        <p class="card-text">
                            Located in Gandhi Nagar,Bangalore with impeccable rooms, conference facilities and close proximity to transits and landmarks, Hotel Himalaya by Monarch ensures a pocket-friendly accommodation.
                        </p>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img-top" src="https://r2imghtlak.mmtcdn.com/r2-mmt-htl-image/htl-imgs/201306271508561947-bdd039ba1df811e8832b02755708f0b3.jpg?&output-quality=75&downsize=520:350&crop=520:350;81,0&output-format=jpg">
                    <div class="card-block">
                        <h4 class="card-title">The Signature Inn</h4>
                        <p class="card-text">
                            Experience a truly unique stay in an authentic hotel.Enjoy comfort & luxury at pocket friendly prices in Electronic City of India at Signature Inn.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <br><br><br><br><br>
        <div>

            <p><span style="position: relative; top:50em;">Places To Visit In Bengaluru</span></p>
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="https://i.ytimg.com/vi/Ih3Qo0bmmC0/maxresdefault.jpg" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Wonderla Amusement Park</h4>
                        <p class="card-text">
                            A fun place for all age groups in Bengaluru
                        </p>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img-top" src="https://images-acme.mmtcdn.com/prod-acme-image/system/product_media/c/53514/media6B2GA8XSQ8G4A.jpg?imwidth=520&quality=70">
                    <div class="card-block">
                        <h4 class="card-title">Guhantara - The Underground Cave Resort</h4>
                        <p class="card-text">
                            Dubbed the Safari Capital of the World
                        </p>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img-top" src="https://www.explorebees.com/uploads/kokrebellur%20bird%20sanctuary.jpg">
                    <div class="card-block">
                        <h4 class="card-title">Kokkare Bellur Bird Sanc.</h4>
                        <p class="card-text">
                            Escape from the hustle-bustle of life and immerse yourself in nature
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <!-- footer of page -->

        @include('footer')
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
        <script src="../resources/js/availableflights.js"></script>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>


        <script>
            $(document).ready(function() {
                $('#flighttable').DataTable();
            });
        </script>
</body>

</html>
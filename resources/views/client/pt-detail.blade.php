@extends('client.layout.master')
@section('content')

    <div class="container">

        <div id="demo" class="carousel slide vert" data-ride="carousel" data-interval="3000">

            <div class="row no-gutters">

                <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                    <div class="carousel-indicators">
                        <div data-target="#demo" data-slide-to="0" class="item active"><img
                                    width="100px" height="50px"
                                    src="https://huonganhyoga.vn/Data/upload/images/Banner/fitness/ngoc-dung.png"
                                    alt=""></div>
                        <div data-target="#demo" data-slide-to="1" class="item"><img
                                    width="100px" height="50px"
                                    src="https://huonganhyoga.vn/Data/upload/images/Banner/fitness/ngoc-dung.png"
                                    alt=""></div>
                        <div data-target="#demo" data-slide-to="2" class="item"><img
                                    width="100px" height="50px"
                                    src="https://huonganhyoga.vn/Data/upload/images/Banner/fitness/ngoc-dung.png"
                                    alt=""></div>
                        <div data-target="#demo" data-slide-to="3" class="item"><img
                                    width="100px" height="50px"
                                    src="https://huonganhyoga.vn/Data/upload/images/Banner/fitness/ngoc-dung.png"
                                    alt=""></div>
                        <div data-target="#demo" data-slide-to="4" class="item"><img
                                    width="100px" height="50px"
                                    src="https://huonganhyoga.vn/Data/upload/images/Banner/fitness/ngoc-dung.png"
                                    alt=""></div>
                        <div data-target="#demo" data-slide-to="5" class="item"><img
                                    width="100px" height="50px"
                                    src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMSEhUQEhMVFRIXGBYRFRUXGBYSGBYYGBcWFhcYFxcaHCghGBolHhcVITEiJSkrLi4uGB8zODMuNygtLisBCgoKDg0OGxAQGy8lHyItLy0tLTU3NzAtLS0tLi8tNS0tLTUtMC0tLS0tLS0tLS0tLS0tKy0tLS0tLS0tLS0tLf/AABEIAJMBVgMBIgACEQEDEQH/xAAaAAEAAwEBAQAAAAAAAAAAAAAAAgMEAQUH/8QAPBAAAQMCBAMHAwIFAwMFAAAAAQACEQMhBBIxQSJRYQUTMnGBkaGxwdFCUgYUI4LwFWJyM5LxNENjwuH/xAAXAQEBAQEAAAAAAAAAAAAAAAAAAQID/8QAHxEBAQEAAgIDAQEAAAAAAAAAAAERAhIxYSFBUQMi/9oADAMBAAIRAxEAPwD5bhgwu4yQ2Dpz2TFBubg0gc7HlJ180wzmh0vBIg6c9l3FuYXSwENjQ7f5b5QVs38vuFFSZv5fcKKC9jGRxOIMTYTeYDTysJnr0VdYNDiGkluxIgn0UwW3zAzlGWOcDXotOGNDu+Oc+tp57bafT3ceO3yzbjAi25qEjhcRaZnk6Yvvw+V1XiDSluQOH7s09L2PnpC1ePs7emZF6wqYXMZa4t/qxGZhMvBpk3Is0uEQLgTZZ6z6PegsaRSjR3FeDsSZvG6lmQ30wotlJ9H9TTMN0JFwOLe8ny1VTXU5dY5T4eY4geesSLys6uqEVzyzMYBLYMC4vltvMZuui0ZqE+F0eZPKJ06z8JprCi113Uj4WkExrtrJj6BZXa209klHERFVEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREFuGqNa6XNzCCI6m03F1GtUzGQBoBoBoLm3MypYavkdmgGxF53EbKWMxHeOzRFo1lBUzfy+4UV1p18vuElBaHtEy2SWgAzEG1+qtZWpinGQF8nWeTouDcXbadlSysBIygggNvqNJI5FQqvkk6TtyGwHQCyS5Us1qdWpXAYQ23Uizwb5uZaeuVRfWp3ApxbhMmR4tb/APH2Kyotdk6tbK9PIGuZcBwkbkmQTcGwt69L2DEUb/0jEz6ZSI8XO8fOywIufVcamVqUXp/tgydhxE8W5n6W1UDVZmc7JwkmBpALgdj+2QqEVwxqr1KRHC1zTz9DsSYkxubfOVESRRERUEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERB1jCTAEn8CSu1KZaYcCD1VuELwSWahpJ08O+vou43Pm/qeKBG9v8AJQZwEUmb+X3C5J/z4QaqGIe3KcmaG5RIJ4Q4ukeROqvOPfMGkwluvDsI9vDH/hZauKcWhlsobl8wS11/VrfZXUcbVLuASZLoDZvFzztE+p5laziz/pM417TLqTBGU3ZEWt9yFnGCqOGYNMG4gGLmLW5kBWO77IWlrg3hmxGjbHramP8AtW7Ddp4ik2zXgAUxOVwAFOcvpd2tjJWuM4s8+8nxHnns2rGbIYuJg/p8W22/JP8ATathlIJkCQRMAE6jkQfVep/rtfIBfK5r2CBBLZaXSQZgGL9D1XDj6wdJp53Co6pMZ+NwBIlpjQAx0Ws4OV5/0jzafZdV0QwmS0AwYl1m3iLwYXHdmVRqw3BIsTIBykgxcTaV6A7RqhzP6dx3JbLf2yaRmb+Ii50MbCLcL2liGiabDlgmWi2XvSNjcZ3OEdTM7XrwO/8AR4tTCPbYtI8XTwtD3WN7Ag+qOwlQGDTfNrZXTcZhtuLrfj8XXzd7VpkSXiXsc0EvptpuGw8LB8lSw2MxTAGsa8XDRDHXLWCncaOOWmAZ0ybXXLJrtLceWKTpDYMmwERMmLetl19BwMFrgZy6HXkOa9B1DEuIr926WmQcuW+Z9WYOt82g2jkp9/iwP+m8CHye6POXOJjUGZOxJUwvK/WPOdhKgOXI6eUE6DNt0uod06C6DAy3/wCU5T5GDdb6uLrElpAILv2jKSWloE8i1x91Gu6sWhpbLctMSwB3CMzmCWzEl0x5Ik5X7xhdTIAcRZ05dLwYNvOR6FRWnEiplZnaQGtIBIM5c7jB6B2blr5KqtQcwkOBEOdTJ2zNjMAdCRI9xzUdNVoiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIguwrXF3DGYAkSJP9tjxeV1zFOcXcZkwDPQgOH1UsGxxdDTBgx16LmLaQ6HEkw3WQQIsCDpCCtm/l9wuQf8APhdbv5fcKKC2tSIDHHR4MRP6SWkG2tpjk5vNVteRMbgg+REFde8mAdGjKOgkuj3c4+qig0HHVCcxdJMSSGnQOA1HJzvOSouxTzJLtbHS9nD6Od7qlE1dqzv3QGyYEwP+USOosLflWt7QqjR51zaDWMsi3JZkRmyXytGIcIgxGXSB4YyzGsQNeQU246oIggRIENYIlwfrE+IAg7EWWdE0yNVftKq8Q58jitDY4muYbRyc7ymReFYO2K4MipB1s1g/drw38Tp55isKK7TI20u1qzSS2oQTE2btpt0Ck/trEEOBqmHSHCG3nXZYETadZ+LXYlxmTrNtrjLYaC1lNmNqAQHGOE7WLYykWsRAuOQWdFDJVj67iIJ5gwAJBJJBjUSTbS6Vq5dOaCS59QmACXPy5pPLhsNBJ5lVoiiIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiIAP4XS4nW6sw1MOJBMWJBkAT1J2TE0w0gAzYE3BgnUSEFQKKTRr5fcKMINNPBFwaQ5vFNp0gtABiYJzBXHsp37mbg3IggkRp0+ehXcF2cyoJNdjDlzEOGnG5gE5teGTawc3WbaafYlItJ/maY8JHh0LXEjKHE5hwzsBuTYTtBkPZb7CWXMam1wL2sL6m3NZ8ThjTgGDM6X0MLTSwLC4NzyM9BhIgACo17nnUyGQBNt7aLNhqIc2o46tYHADcl7GmbaAOPXTaYopREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERBdhWtJOewg35Haw18lzEtaCMhkQL9YumGyyc+kHnY8xGp6G3VMSW5uCwgWuQDvBIBPsggzfy+4UVJm/l9wuIOvH0H0ClSDZOYmIcbWJIHCJvElRf9h9Ajd/L7hBtdh6MkCof0w42F2vmwB3DPLN0UKlKjxQ9xIHCdieLaLaNH93RZFppmllMh2eBE2E6HTa+b+3qrq3ln0rqNbkYQeKX5unhy25RvzJ5Kleg5mGvxv1ebAwRm4GiW2lsX2M2UMEKGUGoTmzOBHEBl7s5XSGnR8c7bc2MTlv0xIvSYzDAhri6CKL3OHEWkh3eMaQItmZsfC7exrq9xJyZ9HCXxHiEZYE+HNqNYsmLrCi9N1PDEkAugF7s0wXNDWOaAHACSQ9nOSDECF2i3CkAvc5rjkkNzAAd20PPhMnPnOuhbG8MTt6eWi20KdGeN5Ilmgc2G5nB/6TLg0MI0HEbyIV1RuFg5S8uh8TMB2bhIhoJEDfWb5dmLrzEXr93g8xGd5ZmbeHB0ZDm1ZEZ46x7qhww4LcpcbUpzWAPEasgNvEMAAO5uVcTt6YAJspd31Hz+FM5Zblza3mOdoW/B4qiGgVKZdAcLGLkgh0gi8CI0EdSpFeb3fUfP4Tu+o+fwva/n8OHSKHBmccpFy1zA2M2eRBBPrNtDxmNw4Ay0SHRSkniu2o1zyJdAlojS8/p3ue07X8eN3fUfP4Tu+o+fwt2ExFNufOyZnLYGOF7YuQQOMGR+weY0V8Vh/wBFEzxHiJi4OXR2gJFv9upkqYtvp5Pd9R8/hO76j5/C9F1ahnDgx0DLLDZp4TP6p8WXfSVezF4aGzQMwzOQXC4u/Lx6G3kLdVL8K8fu+o+fwnd9R8/hexjMbh3SWUIcc2sgSXgtMB8CGSI581FuJw+ZxLHlpqF4GVrYYWvGWz9i5sbcPopo8nu+o+fwnd9R8/hetRx1IRNMH/08tyNg93arxF08WvXQ8yfisN3RaKJ7wsLQ+SIcZh0Zz0MRbS+qaPJ7vqPn8J3fUfP4XqOxdKXHJq6sQC0EBr2xT/Vq0wY6m6tqYvCnSgRxNMyTDQW5mkZ72zDbXZaxN9PG7vqPn8J3fUfP4Xo9mYqmxr21aefMad7S0NLi4A6jNLRaFp/nsMA/LQMua5t4IBnhyySWcyRJG3NXPaW38eL3fUfP4Tu+o+fwvaOMwucf0Xd0HZotmINNrYLs37g4x/u2iDhr1mFsBsOim2f+LXB+h34djOWbbyxZdY+76j5/Cd31Hz+F6uFxlJrMjmyeIl3d0y4E5YAJNwCCbgzmiBErgxlLO94pxmaWhpa17af/AE4y8TSdKgk3u03JKYm15fd9R8/hO76j5/C9ehjMPY1KRe7hn9ItTawgZXD9QLpi+bpeT8bhZltA/p1JOkkzxXnh20kK9fZ2v48VzIUVfi3AkltmlziBEQLRaTHuqFloREQW4ao0HiEiCNAfaTY9b+SnXqsLw5rYbaRA58vL3UcLVDSSRIILY0167eiYuuHuzAAWA8+vz7AILMbUpucTTaWsyixiZkTcASsy6zfy+4UZQSf9h9Ajd/L7hH/YfQI06+X3CCKlU1UZUn6oO0nNBu2dYvodj18ltOKoOMupGc08MNGXLAADSADmvp6rHTOpLQRp5E6H4OoK2/6k0vLn08zc5qBs2ggty3n/AG+yMc4zd5TzsJbwDJnaJEwAHxxbwbyNfU3vrUC10MghjwzxSXGo7IXHMQYY68gXYBcGFH+bZaWRBpG2UDgBa6bXnXzXKmKYQQ1kS1zZ4SZLw5pkjWARPXaL1Pn8X1MVhrnuHFxc9x4jTaA4ktDQ0wA2QIjabTAjQxNAQX0y4gsttlDQ14IzCTMuGnUrAKbv2nlodYmPa6imtdXoMrUBlBYS0tYakSTmFRpcGlxlgLGkSDq86gBcxFXDmMjHtgvMTIdcZGmXkgRmBIvprqsCJq49V2KwojJRfOYyXkPlhaQeEuy5gTItsLgqOGr4UDjovccrBq4cQHGSRU3MnTcWbEnzEhNTq9KvXoGO6puZIIIJLpOdhaQS4xADveL6rRg+xn1KQqNeJMw25MNmTaT+k2AOy8imLjzH1V7WPyyA7JMTByyRBvpMGPVN1ZMeoP4frSG5qcuOUcTr+K/h8MNJlYcdg3UmB7nNM2hpcSCCQQZAEgggxPysuS0xbSYtOv4QhFXtwtQnKImSLkt0aHyZHI+ai+g9rgwxJEjiAHqXQAq2YYkFzWEtb4iGkhszEkC2h15LjKfIbE2GwuT6IN2E7Pc8ubnaCGl44mvBjaWEwVZjOx6lIPLnsOSCQHOJvOnDGx328l5pC66mQSCIIsREQeRQeniOxqjHBpeyDnh0uAhmpu3e2k9YVg7AqZ8heyRlzQXugOcWgxlvo7yiTAuvGhIQbu0Ozn0fGWm+XhLnQYBuYA3tzg7XWOVwBEHZSVxEHZSVxEHZSVxEHZSVxEHZSVxEHKpsPM/ZVK2o0wLbn6A/Y+yqUBERBowLyHHK0u4SCBe1iTppa/QnRd7Qquc+XNyEADKQQeY16G3SF3s/EPpuLmAE5SDMxllrr3Fpa22h0Mgwq8USSJaG8LGgNkghrQxpuTs0b7IK2b+X3C57LrN/L7hclBJ/poPoEbvpp9wjz9B9AjTr5fcII+yk/XZRlWNplx4QTOluoH1I90HW+B2mrf8A7Kr2WjunAFuV0mHCBNgL2/uCoI0N4OhjXayJr1h22BlijTDmik1pnTu6hqGBltmkt5wTcqit2iDTa0Uaej253DO4k5TYwAHCZ/v0Fgu0O26rGlodaKYEgy0UwGty8VtAfO4iVZW/iCs5rmHLDg8Gx/XExxW0FhbUkE3W92eWZMvhW3EujP3bsrnYgzt/VpNa8NOXVoEzyMHmq8Bj20xemx5nNJIFjktdp/bY7Znc0d2o8kuPiJquLpfJ71oY8E5/DDWxGmULVU/iSuQQHBswbN3EXAJI+N9lN+1y+Mdo9sFhpuZRY1wDcpABLspIkHLNzrc3B5qdXt1pkfy1IG7TPFYwIu2RAAHosDO03iYNzlJdcGWuc5ps4DV5sRGlpAKjise6oAHRAc94idXnM7Vxm/P7mb29p1m+EsfjhVJIY1kuzQ3LA4Q2LNHKf8lcoVy25BdORusCGua9ojKZPCI6E2VdbFvcIc6RM6DWI+im3tB4tP7NZvkjL+roNFLl8rNnh1uJk5YsQWRm2NQVBts73HLVelQxWIZS7loAHFeRPFOhmxGYkELy/wCcmJa2BpYyJe15gl2to8ifNe8f4vfyPiLp3MuzQeK428rLN+PDW2+Vb+0MVMuYy8kAi3FlBIGb/Z9ekZq78S4guElsuE5T4wwEw6ReGnzcTutz/wCMHn9MXzSNZ/7v/G0KgfxKJnJchjSeKTkLS0nj14G3U+RDBPxTCXMYDMPPC2Ipze0QBJn5Vp7SxYNwAeKx2zSDYuvqbGRuQTBHKn8TZplkyHjeB3hkwM1t/fdX0/4yeJgGS7OTvJAB/V0/wWT5GR3bmImDll2SGwdA5xbl4pvmI9ovBWel25VaXkObxufUPR1SMxF+m8jztFH+rvBkQDmpvtmF6VmTDriIBBkWtBuqa+NL2hjgCGhwb4iRme15IJdM8MSZs4jlGk+V3aGKfUdnqBoIllhlFrka7TP93kqGUy7S9w31MkDzMH2WtnbtUFxGXiL3EcZANTJmiX2uwHznYkKGL7YqVHB78pcCx2h/9vvMn6v/AJHfCvwm1lAnlzXPUe6jTrFumtrxyMxrzg+gUXukkk3NzYD6LLSz1HunqPdVIgt9R7p6j3VSILfUe6eo91UiC31HunqPdVIgt9R7p6j3VSINlLFZGgQDxipr+1r2gaaHP8dVjhEQIREQX4HPmPd6wSd7SNvPKo4rNIzRcNIiwiLW2su4NjiTkMGJ1jcCB1kiOqYym9rgH6wD5A7IKmb+X3C5frt/+LrN/L7hRhBJ8/A+gU6TC4kDXK91/wDa0vd6w0rteiQ1j9ngkdC1xYR8A+qrY8i4tYt9HAtI9QSPVAe0gwdYB12IBb8EKYxLrX0ywdxlMgTyBi3QKFWoXGXGTDW7CzWhrRbkAB6KKDUztGoJggE5ySAATnLS646tb7BQxOMfUnM6ZgmAGiwgWA/ySqERmcZPmQRERoREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQda4i4JG1rLk/hEQSbv5fcKKIg655MSSYGUdBJMDkJJPqVxEQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREH/2Q=="
                                    alt=""></div>
                    </div>
                </div><!-- col-sm-4 Indicators -->


                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img width="100%" height="auto"
                                 src="https://huonganhyoga.vn/Data/upload/images/Banner/fitness/ngoc-dung.png" alt="">
                            <div class="content">
                                <h4>Heading</h4>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img width="100%" height="auto"
                                 src="https://huonganhyoga.vn/Data/upload/images/Banner/fitness/ngoc-dung.png" alt="">
                            <div class="content">
                                <h4>Heading</h4>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <img width="100%" height="auto"
                                 src="https://huonganhyoga.vn/Data/upload/images/Banner/fitness/ngoc-dung.png" alt="">
                            <div class="content">
                                <h4>Heading</h4>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <img width="100%" height="auto"
                                 src="https://huonganhyoga.vn/Data/upload/images/Banner/fitness/ngoc-dung.png" alt="">
                            <div class="content">
                                <h4>Heading</h4>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <img width="100%" height="auto"
                                 src="https://huonganhyoga.vn/Data/upload/images/Banner/fitness/ngoc-dung.png" alt="">
                            <div class="content">
                                <h4>Heading</h4>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <img width="100%" height="auto"
                                 src="https://huonganhyoga.vn/Data/upload/images/Banner/fitness/ngoc-dung.png" alt="">
                            <div class="content">
                                <h4>Heading</h4>

                            </div>
                        </div>
                    </div><!--inner-->
                </div><!-- col-sm-6  -->
                <div style="margin-left: 5%">
                    <div>
                        <h3><span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </h3>
                    </div>
                    <div><h2 style="color: #3e70ff">HLV-Yoga</h2></div>
                    <div class="mt-5"><h3>Heart Bag</h3></div>
                    <div class="row mt-5">
                        <div class="col-sm-7 mt-3">
                            <span style="  color: #f33c3c;  font-size: 24px; line-height: 24px;">250.000đ / Tháng</span>
                        </div>
                        <div class="col-sm-5" style="width: 190px; height: 50px">
                            <button style="width: 100%;height: 100%;background: #4a9bbf;color: white;border-radius: 3px;font-size: 16px">
                                Trải nghiệm ngay
                            </button>
                        </div>

                    </div>
                    <div class="mt-5">
                        <div>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Email</th>
                                    <th>Lastname</th>
                                    <th>Email</th>
                                    <th>Lastname</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="mt-5">
                            <table class="table" border="1" style="text-align: center">
                                <tbody>
                                <tr>
                                    <td>John</td>
                                    <td>Doe</td>
                                    <td>john@example.com</td>
                                    <td>john@example.com</td>
                                </tr>
                                <tr>
                                    <td>Mary</td>
                                    <td>Moe</td>
                                    <td>mary@example.com</td>
                                    <td>mary@example.com</td>
                                </tr>
                                <tr>
                                    <td>July</td>
                                    <td>Dooley</td>
                                    <td>july@example.com</td>
                                    <td>july@example.com</td>
                                </tr>
                                <tr>
                                    <td>July</td>
                                    <td>Dooley</td>
                                    <td>july@example.com</td>
                                    <td>july@example.com</td>
                                </tr>
                                <tr>
                                    <td>July</td>
                                    <td>Dooley</td>
                                    <td>july@example.com</td>
                                    <td>july@example.com</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!--row-->
        </div><!--container-->
    </div>

    <div class="container">
        <div id="cont">
            <div id="slider-container">


                <div class="item-container">
                    <div class="item-image-wrapper">
                        <img src="https://thumbs.dreamstime.com/x/afro-american-woman-juggling-objects-beautiful-multiple-over-air-60663715.jpg"
                             alt=""/>
                    </div>
                    <h2 class="item-title"><a href="#">First Item</a></h2>
                    <p class="item-desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                    <div class="item-stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <a href="#" class="item-link">Submit</a>
                </div>

                <div class="item-container">
                    <div class="item-image-wrapper">
                        <img src="https://images.pexels.com/photos/272228/pexels-photo-272228.jpeg" alt=""/>
                    </div>
                    <h2 class="item-title"><a href="#">Second Item</a></h2>
                    <p class="item-desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                    <div class="item-stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <a href="#" class="item-link">Submit</a>
                </div>

                <div class="item-container">
                    <div class="item-image-wrapper">
                        <img src="https://thumbs.dreamstime.com/x/business-communications-technology-people-hand-digital-tablet-smartphone-papers-various-office-objects-table-flat-70058937.jpg"
                             alt=""/>
                    </div>
                    <h2 class="item-title"><a href="#">Third Item</a></h2>
                    <p class="item-desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                    <div class="item-stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <a href="#" class="item-link">Submit</a>
                </div>

                <div class="item-container">
                    <div class="item-image-wrapper">
                        <img src="https://thumbs.dreamstime.com/x/morning-meditation-28835030.jpg" alt=""/>
                    </div>
                    <h2 class="item-title"><a href="#">Fourth Item</a></h2>
                    <p class="item-desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                    <div class="item-stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <a href="#" class="item-link">Submit</a>
                </div>

                <div class="item-container">
                    <div class="item-image-wrapper">
                        <img src="https://cdn.pixabay.com/photo/2017/01/11/18/09/toddler-1972493_960_720.jpg" alt=""/>
                    </div>
                    <h2 class="item-title"><a href="#">fifth Item</a></h2>
                    <p class="item-desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                    <div class="item-stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <a href="#" class="item-link">Submit</a>
                </div>

                <div class="item-container">
                    <div class="item-image-wrapper">
                        <img src="https://thumbs.dreamstime.com/x/happiness-free-happy-woman-enjoying-sunset-beautiful-white-dress-embracing-golden-sunshine-glow-arms-54515131.jpg"
                             alt=""/>
                    </div>
                    <h2 class="item-title"><a href="#">sixth Item</a></h2>
                    <p class="item-desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                    <div class="item-stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <a href="#" class="item-link">Submit</a>
                </div>

                <div class="item-container">
                    <div class="item-image-wrapper">
                        <img src="http://www.freeimageslive.com/galleries/workplace/education/preview/maths_school.jpg"
                             alt=""/>
                    </div>
                    <h2 class="item-title"><a href="#">Seventh Item</a></h2>
                    <p class="item-desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                    <div class="item-stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <a href="#" class="item-link">Submit</a>
                </div>

                <div class="item-container">
                    <div class="item-image-wrapper">
                        <img src="http://www.freeimageslive.com/galleries/workplace/education/preview/computer_learning.jpg"
                             alt=""/>
                    </div>
                    <h2 class="item-title"><a href="#">Eighth Item</a></h2>
                    <p class="item-desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                    <div class="item-stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <a href="#" class="item-link">Submit</a>
                </div>

                <div class="item-container">
                    <div class="item-image-wrapper">
                        <img src="http://www.freeimageslive.com/galleries/workplace/education/preview/university_certificate.jpg"
                             alt=""/>
                    </div>
                    <h2 class="item-title"><a href="#">Ninth Item</a></h2>
                    <p class="item-desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                    <div class="item-stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <a href="#" class="item-link">Submit</a>
                </div>
                <span id="right-btn" class="fa fa-arrow-circle-right" aria-hidden="true"></span>
                <span id="left-btn" class="fa fa-arrow-circle-left" aria-hidden="true"></span>

            </div>
        </div>

    </div>

@endsection
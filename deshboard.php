<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="AP.css">
    <script src="include.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Checkout</title>
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
                <div class="container-fluid border-bottom border-light">
                    <div class="row" style="margin-top:-1%;">
                      <div class="col-md-5 mt-3">
                        <a href="index.html"><img src="BUYSTYLE.png" alt="" onmouseover="removeL()"  style="width:65px;height:62px;border-radius: 50%;"/></a>
         
                      </div>
                      <div class="col-md-5 mt-3 pt-3">
                       <a href="#" class=" border-bottom border-success"style="text-decoration:none;color:green;font-weight:bold" id="bag" onclick="bag()" >BAG</a>------<a href="#" style="text-decoration:none;color:black"  id="address" onclick="address()">ADDRESS</a>------<a href="#" style="text-decoration:none;color:black" id="payment" onclick="payment()" >PAYMENT</a> 
                      </div>
                      <div class="col-md-2 mt-3"><img src = "https://constant.myntassets.com/checkout/assets/img/sprite-secure.png">
                        100% SECURE
                      </div>
                    </div>
                  </div>
            <!-- <--nav--> 
            <div id="Aamir_body" style='display:block'>
    <div class="container" style="margin-top:-5%;">
        <div class="row border-left">
          <div class="col-md-7">
            <div class="row mt-4 border-bottom">
                <div class="col-md-8"><b>Check delivery time & services</b></div>
                <div class="col-md-4"><button style="color: rgb(255, 255, 255); border-color:rgb(234, 66, 66);background-color: rgb(243,66,66);margin-left:30%">ENTER PIN CODE</button></div>
            </div>
            <div class="row mt-4 ">
                <div class="col">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" class="offersV2-base-discountIcon"><g fill="#000" fill-rule="evenodd"><path d="M15.292 10.687v.001c-.198.742.076 1.454.296 2.026l.045.12-.137.021c-.602.094-1.352.211-1.892.75-.538.54-.655 1.288-.748 1.89l-.022.138a22.096 22.096 0 0 1-.12-.045c-.443-.171-.946-.364-1.49-.364-.185 0-.366.023-.536.068-.728.194-1.198.78-1.577 1.249-.032.04-.07.088-.111.137l-.112-.138c-.378-.47-.848-1.054-1.575-1.248a2.092 2.092 0 0 0-.537-.068c-.543 0-1.046.193-1.49.364l-.12.045-.022-.138c-.093-.602-.21-1.35-.749-1.89-.539-.539-1.289-.656-1.891-.75l-.137-.022a15 15 0 0 1 .045-.118c.22-.573.494-1.286.296-2.027-.194-.728-.78-1.199-1.25-1.577L1.323 9l.137-.11c.47-.38 1.055-.85 1.249-1.577.198-.742-.076-1.455-.296-2.028l-.045-.118.137-.022c.602-.094 1.352-.211 1.891-.75.54-.539.656-1.289.75-1.891l.022-.137.119.045c.443.171.947.365 1.49.365.186 0 .367-.024.537-.07.727-.193 1.198-.778 1.576-1.248L9 1.322l.111.137c.379.47.85 1.055 1.576 1.249.17.045.352.069.537.069.544 0 1.047-.194 1.491-.365l.119-.045.022.137c.094.602.21 1.353.75 1.891.538.539 1.288.656 1.89.75l.138.022-.046.119c-.22.572-.494 1.285-.295 2.026.194.728.778 1.199 1.248 1.577.04.033.088.07.137.111l-.137.11c-.47.38-1.054.85-1.249 1.577M18 9c0-.744-1.459-1.286-1.642-1.972-.19-.71.797-1.907.437-2.529-.364-.63-1.898-.372-2.41-.884-.511-.511-.253-2.045-.883-2.41a.647.647 0 0 0-.33-.08c-.585 0-1.403.542-1.998.542a.778.778 0 0 1-.201-.025C10.286 1.46 9.743 0 9 0c-.744 0-1.286 1.459-1.972 1.642a.78.78 0 0 1-.2.025c-.596 0-1.414-.542-2-.542a.647.647 0 0 0-.33.08c-.63.365-.37 1.898-.883 2.41-.512.512-2.046.254-2.41.884-.36.62.627 1.819.437 2.529C1.46 7.714 0 8.256 0 9s1.459 1.286 1.642 1.972c.19.71-.797 1.908-.437 2.53.364.63 1.898.371 2.41.883.511.512.253 2.045.884 2.41.097.056.208.08.33.08.585 0 1.403-.542 1.998-.542a.78.78 0 0 1 .201.025C7.714 16.54 8.256 18 9 18s1.286-1.46 1.973-1.642a.774.774 0 0 1 .2-.025c.595 0 1.413.542 1.998.542a.647.647 0 0 0 .33-.08c.631-.365.373-1.898.884-2.41.512-.512 2.046-.254 2.41-.884.36-.62-.627-1.819-.437-2.529C16.54 10.286 18 9.744 18 9"></path><path d="M10.897 6.34l-4.553 4.562a.536.536 0 0 0 .76.758l4.552-4.562a.536.536 0 0 0-.76-.758M6.75 7.875a1.126 1.126 0 0 0 0-2.25 1.126 1.126 0 0 0 0 2.25M11.25 10.125a1.126 1.126 0 0 0 0 2.25 1.126 1.126 0 0 0 0-2.25"></path></g></svg>
                    <b>Available Offers</b>
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                              
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                10% Instant Discount on SBI Credit Card on a min spend of Rs 3,000. TCA<br>
                            <span>10% Instant Discount on Bank of Baroda Credit Cards on a min spend of Rs 3,000. TCA</span><br>
                        <span>5% Unlimited Cashback on Flipkart Axis Bank Credit Card. TCA</span><br>
                    <span>10% Cashback upto Rs 150 on Ola Money Postpaid or wallet transaction on a min spend of Rs 1000 . TCA</span><br>
                         <span>Upto Rs 500 Cashback on Mobikwik Wallet Transactions on a min spend of Rs 999.Use code MBK500 on Mobikwik.TCA</span> </div>
                        </div>
                        
                      </div>
                </div>
            </div>
            <div class="row mt-4 border" id="checkoutdata">
            <div class="row mt-4 border">
        <div class = "col-md-3">
            <img style = "width:100%"src=" ${Product_data[i].product_img}">
        </div>
        <div class="col-md-8"><a href="#" style="text-decoration:none;color:black">product_name</a><br>
            <span><a href="#" style="text-decoration:none;color:black">product_description.substr(0,30)</a></span><br>
            <span style="color:lightslategray">Sold by: Truenet Commerce</span><br>
            <span><a href="#" style="text-decoration:none;color:black"><b></b></a></span>
            <span><a href="#" style="text-decoration:none;color:black"><b>Qty:1</b></a><svg xmlns="http://www.w3.org/2000/svg" width="6" height="3" viewBox="0 0 6 3" class="itemComponents-base-dropDown"><path fill-rule="evenodd" d="M0 0h6L3 3z"></path></svg></span>
            <br><a href="#" style="text-decoration:none;color:black">Rs ${Product_data[i].product_discount_price}</a><a href="#" style="text-decoration:none;color:black"> <del>Rs ${Product_data[i].product_price}</del></a>  <span style="color:red"><a href="#" style="text-decoration:none;color:black">${Product_data[i].product_discount_percenteage}% OFF </a></span> 
        </div>
        <div class="col-md-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" class="itemContainer-base-closeIcon"><path fill="#000" fill-rule="evenodd" d="M9.031 8l6.756-6.756a.731.731 0 0 0 0-1.031.732.732 0 0 0-1.031 0L8 6.969 1.244.213a.732.732 0 0 0-1.031 0 .731.731 0 0 0 0 1.03L6.969 8 .213 14.756a.731.731 0 0 0 0 1.031.732.732 0 0 0 1.031 0L8 9.031l6.756 6.756a.732.732 0 0 0 1.031 0 .731.731 0 0 0 0-1.03L9.031 8z"></path></svg></div>
    </div>
            </div>
                <!-- <div class="col"><img src="https://constant.myntassets.com/checkout/assets/img/ship-free.png" class="image-base-imgResponsive" alt="image" >Yay!<b>No convenience fee</b>on this order</div>
            </div>
            <div class="row mt-4 border">
                <div class="col-md-6"><b> 0/2 ITEMS SELECTED</b></div>
                    <div class ="col-md-6"> Remove | Move to WishList</div>
            </div>
            
            <div class="row mt-4 border">
                <div class = "col-md-3">
                    <img style = "width:100%"src=" https://assets.myntassets.com/f_webp,dpr_1.5,q_60,w_210,c_limit,fl_progressive/assets/images/1996781/2018/1/9/11515489592906-Roadster-Men-Olive-Green-Solid-Round-Neck-T-shirt-1551515489592784-1.jpg">
                
                </div>
                <div class="col-md-8">Roadster<br>
                    <span>Men Olive Green Solid Round Neck Pure Cotton T-shirt</span><br>
                    <span style="color:lightslategray">Sold by: Truenet Commerce</span><br>
                    <span><b>Size:M</b><svg xmlns="http://www.w3.org/2000/svg" width="6" height="3" viewBox="0 0 6 3" class="itemComponents-base-dropDown"><path fill-rule="evenodd" d="M0 0h6L3 3z"></path></svg></span>
                    <span><b>Qty:1</b><svg xmlns="http://www.w3.org/2000/svg" width="6" height="3" viewBox="0 0 6 3" class="itemComponents-base-dropDown"><path fill-rule="evenodd" d="M0 0h6L3 3z"></path></svg></span>
                    <br>Rs 219 <del>Rs 399</del>  <span style="color:red">45% OFF </span> 
                </div>
                <div class="col-md-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" class="itemContainer-base-closeIcon"><path fill="#000" fill-rule="evenodd" d="M9.031 8l6.756-6.756a.731.731 0 0 0 0-1.031.732.732 0 0 0-1.031 0L8 6.969 1.244.213a.732.732 0 0 0-1.031 0 .731.731 0 0 0 0 1.03L6.969 8 .213 14.756a.731.731 0 0 0 0 1.031.732.732 0 0 0 1.031 0L8 9.031l6.756 6.756a.732.732 0 0 0 1.031 0 .731.731 0 0 0 0-1.03L9.031 8z"></path></svg></div>
            </div>
            
            <div class="row mt-4 border">
                <div class = "col-md-3">
                    <img style = "width:100%"src=" https://assets.myntassets.com/f_webp,dpr_1.5,q_60,w_210,c_limit,fl_progressive/assets/images/1996781/2018/1/9/11515489592906-Roadster-Men-Olive-Green-Solid-Round-Neck-T-shirt-1551515489592784-1.jpg">
                
                </div>
                <div class="col-md-8">Roadster<br>
                    <span>Men Olive Green Solid Round Neck Pure Cotton T-shirt</span><br>
                    <span style="color:lightslategray">Sold by: Truenet Commerce</span><br>
                    <span><b>Size:L</b><svg xmlns="http://www.w3.org/2000/svg" width="6" height="3" viewBox="0 0 6 3" class="itemComponents-base-dropDown"><path fill-rule="evenodd" d="M0 0h6L3 3z"></path></svg></span>
                    <span><b>Qty:1</b><svg xmlns="http://www.w3.org/2000/svg" width="6" height="3" viewBox="0 0 6 3" class="itemComponents-base-dropDown"><path fill-rule="evenodd" d="M0 0h6L3 3z"></path></svg></span>
                     <br>Rs 219 <del>Rs 399</del>  <span style="color:red">45% OFF </span>
                </div>
                <div class="col-md-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" class="itemContainer-base-closeIcon"><path fill="#000" fill-rule="evenodd" d="M9.031 8l6.756-6.756a.731.731 0 0 0 0-1.031.732.732 0 0 0-1.031 0L8 6.969 1.244.213a.732.732 0 0 0-1.031 0 .731.731 0 0 0 0 1.03L6.969 8 .213 14.756a.731.731 0 0 0 0 1.031.732.732 0 0 0 1.031 0L8 9.031l6.756 6.756a.732.732 0 0 0 1.031 0 .731.731 0 0 0 0-1.03L9.031 8z"></path></svg></div>
            </div>
             -->
           
            <div class="row mt-4 border">
                <div class="col-md-2"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="16" viewBox="0 0 12 16"><path fill="#000" fill-rule="evenodd" d="M10.993 14.62a.067.067 0 0 1-.103.058l-4.571-2.77a.638.638 0 0 0-.64 0l-4.57 2.77a.067.067 0 0 1-.102-.058V1.133A.13.13 0 0 1 1.139 1H3.5V3.5c0 .298.18.543.486.543s.515-.245.515-.543V1h6.36a.13.13 0 0 1 .133.133V14.62zM11.307 0H.693A.687.687 0 0 0 0 .68v14.719A.61.61 0 0 0 .617 16a.63.63 0 0 0 .315-.086l4.996-3.026a.14.14 0 0 1 .144 0l4.996 3.026a.628.628 0 0 0 .315.086.61.61 0 0 0 .617-.602V.679C12 .306 11.69 0 11.307 0z"></path></svg></div>
                    <div class ="col-md-9"><b>ADD MORE FROM WISHLIST</b></div>
                <div class= "col-md-1"><svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" class="addToWishlist-base-wishlistChevron"><path fill-rule="evenodd" d="M6.797 5.529a.824.824 0 0 0-.042-.036L1.19.193a.724.724 0 0 0-.986 0 .643.643 0 0 0 0 .94L5.316 6 .203 10.868a.643.643 0 0 0 0 .938.724.724 0 0 0 .986 0l5.566-5.299a.644.644 0 0 0 .041-.978"></path></svg></div>
          </div></div>
</div>
          <div class="col-md-5 " style="line-height:200%">
            <div class="row mt-4 border-bottom">
                <div class="col ">DONATE FOR COVID-19 RELIEF<br>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" class="donationStrip-base-icon"><path fill-rule="nonzero" d="M14.85 2.14v11.71a1 1 0 0 1-1 1H2.14a1 1 0 0 1-1-1V2.14a1 1 0 0 1 1-1h11.71a1 1 0 0 1 1 1zM14.222 0H1.778C.8 0 0 .8 0 1.778v12.444C0 15.2.8 16 1.778 16h12.444C15.2 16 16 15.2 16 14.222V1.778C16 .8 15.2 0 14.222 0z"></path></svg>
                   
                   <!-- <div>
                    <input type="checkbox"> -->
                    Help India fight COVID-19</div>
                    
            </div>
            <div class="row mt-4 border-bottom">
                <div class="col" style="justify-content:center;">
                    <button class = "borderChange"><span style="padding:10px"></span>Rs10</button>
                    <button class = "borderChange"><span style="padding:10px">Rs50</span> </button>
                    <button class = "borderChange"><span style="padding:10px"></span>Rs100</button>
                    <button class = "borderChange"><span style="padding:10px"></span>other</button><br>
                <span style="color: rgb(226, 32, 32); " style="text-align:center">Know more</span></div>
            </div>
            <div class="row mt-4 border-bottom ">
                <div class="col">COUPONS<br></div>
                </div>
                <div class="row mt-4 ">
                   <div class="col-md-2"> <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" class="coupons-base-couponIcon"><g fill="none" fill-rule="evenodd" transform="rotate(45 6.086 5.293)"><path stroke="#000" d="M17.5 10V1a1 1 0 0 0-1-1H5.495a1 1 0 0 0-.737.323l-4.136 4.5a1 1 0 0 0 0 1.354l4.136 4.5a1 1 0 0 0 .737.323H16.5a1 1 0 0 0 1-1z"></path><circle cx="5.35" cy="5.35" r="1.35" fill="#000" fill-rule="nonzero"></circle></g></svg></div>
                    <div class="col-md-7">Apply Coupons</div>
                    <div class="col-md-3"><button style="color: rgb(255, 255, 255); border-color:rgb(234, 66, 66);background-color: rgb(243,66,66);margin-left:30%"> Apply</button></div>
            </div>
            <hr>
            
            <div class="row mt-4 border-bottom border-top">
                <div class="col">Gifting & Personalisation</div>
            </div>
            
            <div class="row mt-4 mb-4 border-bottom" style="background:rgb(243, 198, 172)">
                <div class="col-md-3"><img src="https://constant.myntassets.com/checkout/assets/img/gift-big.webp"></div>
                <div class="col-md-9  mt-5"><b>Buying for a Loved One?</b><br>
                <span>Gift wrap and Personalised message on card,Only for Rs25<br></span>
                <span style="color: red;">ADD GIFT WRAP</span>
            </div>
            </div>

            
            <div class="row mt-4 border-bottom">
                <div class="col">PRICE DETAILS(2 items)
                    <!-- <span class = "col-md-8 col-lg-8 col-sm-8"></span> -->
                </div>
            </div>

            
            <div class="row mt-4 ">
                <div class="col-md-8">Total MRP<br>
                    <span>Discounted MRP</span><br>
                    <span>Coupon Discount</span><br>
                    <span>convenience Fee  Know more</span>
                </div>
                <div class="col-md-4" >
                    <span id="totalamount_price">Rs798</span>
                    <br>
                <span id="price_afterdiscount">Rs360</span><br>
                <span>Apply Coupon</span><br>
                <span>Rs99 Free</span><br></div>
            </div>
            <hr>
            <div class="row mt-4">
                <div class="col-md-8"><b>Total Amount</b></div>
                <div class="col-md-4" id="finalprice"><b>Rs438</b></div>
            </div>
            <div class="row mt-4  justify-content-center" onclick="Address()">
                <div class="col "><button style="width:100%;border:none;background: rgb(245, 33, 33);color:white;padding-top:10px;padding-bottom:10px"> PLACE ORDER</button></div>
            </div>
            
            
            
            
          </div>
          
        </div>
      </div>
    </div>
    
    
    
    
    
    
    
    <!-- ANMOL WORK START HERE -->
    <div id="Anmol_body" style="display:none">
    <div class="container">
        <form action="#">
            <div class="row">
                <div class="col-xs-8 col-md-8 col-lg-8 col-sm-8 border"
                    style="width:35%;margin-left:23%;padding:10px">
                    <div class="col-xs-4 col-xs-offset-4">
                        <div style="text-align:left;margin-top:2%;margin-left:1%;margin-bottom:-6%">
                            <label style="font-weight:500">Contact Detail </label> <br> <br>
                        </div>
                        <div class="floating-label-group">
                            <input type="text" id="username" class="form-control" autocomplete="off"  required
                                onclick="remove()" />
                            <label class="floating-label">Name*</label>
                        </div>

                        <div class="floating-label-group">
                            <input type="password" id="password" class="form-control" autocomplete="off" required
                                onclick="remove()" />
                            <label class="floating-label">Password*</label>
                        </div>

                        <div style="text-align:left;margin-top:2%;margin-left:1%;margin-bottom:-6%">
                            <label style="font-weight:500">Address </label> <br> <br>
                        </div>

                        <div class="floating-label-group">
                            <input type="text" id="usernamea" class="form-control" autocomplete="off"  required
                                onclick="remove()" />
                            <label class="floating-label">Pin Code*</label>
                        </div>

                        <div class="floating-label-group">
                            <input type="text" id="usernameb" class="form-control" autocomplete="off" required
                                onclick="remove()" />
                            <label class="floating-label">Address*</label>
                        </div>


                        <div class="floating-label-group">
                            <input type="text" id="usernamec" class="form-control" autocomplete="off" required
                                onclick="remove()" />
                            <label class="floating-label">Locality / Town*</label>
                        </div>

                        <div style="text-align:left;margin-top:2%;margin-left:1%;margin-bottom:-6%">
                            <label style="font-weight:500">Save Address As </label> <br> <br>
                        </div>
                        <p></p>
                        <div>
                            <span style=" width: 15%; border: 1px solid black;" class="borderChange" onclick="Home()" id="Home">
                                <span style="padding:10px" ><a href="#" style="text-decoration:none;color:black" id="Home1"> Home
                                    </a></span>
                            </span>
                            <span>&nbsp;&nbsp;</span>
                            <span style=" width: 15%; border: 1px solid black;" class="borderChange" onclick="Work()" id="Work">
                                <span style="padding:10px" ><a href="#" style="text-decoration:none;color:black" id="Work1"> Work
                                    </a></span>
                            </span>
                        </div>
                        <div id="Working_time" style="display:none ; line-height: -13%;margin-top:3%; margin-left:1%">
                            <input type="checkbox"> <span style="font-size:small;">&nbsp;Open on Saturday </span> <br>
                            <input type="checkbox"> <span style="font-size:small;">&nbsp;Open on Sunday </span> <br>

                        </div>
                        <br>

                        <div style="line-height: -13%;margin-top:3%; margin-left:1%">
                            <input type="checkbox" ><span style="font-size:small;">&nbsp;Make this my default address  </span>
                        </div>
                        <hr>
                        <p></p>
                        <!-- place order -->
                        <div class="shadow-sm bg-white rounded">
                            <div style="background: rgb(188, 182, 182);">
                                <input type="submit" class="submitting" onclick = "formComplete()"
                                    style="width:100%;border:none;background: rgb(245, 33, 33);color:white;padding-top:10px;padding-bottom:10px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4 col-md-4 col-lg-4 col-sm-4 " style="margin-left:7%">
                    <div class="border-bottom">
                        <div>
                        <span style="font-weight:600;font-size:small"> Price Details <a href="#" style="text-decoration:none;color:rgb(186, 184, 184)">( Item 1 )</a></span>
                    </div>
                    <div>
                   <div class="row" style="margin-top:3%">
                    <div class="col-9" style="justify-content:left;line-height: 158%;">
                        <span style="font-weight:350;font-size:90%"> Total MRP </span>
                        <br>
                        <span style="font-weight:350;font-size:90%"> Discount on MRP </span>
                        <br>
                        <span style="font-weight:350;font-size:90%"> Convenience Fee <span style="font-weight:bold;font-size:100%;color:rgb(222, 41, 71)">Know More</span> </span>

                    </div>
                    <div class="col-3" style="justify-content:right;line-height: 158%;" >
                        <span style="font-weight:350;font-size:90%" >
                            <a href="#" style="text-decoration:none;color:black"> 
                                <i class="fa fa-dollar-sign"></i> 
                              <span id="addtotalamount_price" > Rs 798</span>
                            </a> </span>
                           
                        <br>
                        <span style="font-weight:350;font-size:90%"><a href="#" style="text-decoration:none;color:rgb(29, 153, 56)" id="addprice_afterdiscount"><i class="fa fa-dollar-sign"></i>-Rs 360</a> </span>
                        <br>
                        <span style="font-weight:350;font-size:90%"><a href="#" style="text-decoration:none;color:rgb(29, 153, 56)"id="addfinalprice"> <del id="delivery"><i class="fa fa-dollar-sign"></i> 99</del> FREE</a>  </span>
                        

                    </div> <br> <br>
                    <p></p>
                </div>
                    </div>
                    <br>
                    <div class="row" style="margin-top:-5%">
                    <div class="col-9" style="justify-content:left;line-height: 158%;">
                        <span style="font-weight:350;font-size:90%"> Total Amount </span>
                    
                    </div>
                    <div class="col-3" style="justify-content:right;line-height: 158%;">
                        <span style="font-weight:350;font-size:90%"><a href="#" style="text-decoration:none;color:black"> <i class="fa fa-dollar-sign"></i> 494</a> </span>    
                    
                    </div>
                    <div class="shadow-sm bg-white rounded">
                    
                            <!-- <button type="submit" class="submitting"
                                style="width:100%;border:none;background: rgb(245, 33, 33);margin-top: 0%;color:white;padding-top:10px;padding-bottom:10px">PLACE ORDER</button> -->
                                <div class="down">
                                    <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_JvC29GUPhAMqE0" async> </script> </form>   
    
                            </div>
                    </div>
                   
                   </div>
                    
                 </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
 

    var b = localStorage.getItem("product_array");
    if(b!=null){
        var arr = b.split(",")
        console.log(arr)
    
// var count=arr[0];
 
var totalprice=0;
var totaldiscountprice = 0;
for(var i=0;i<Product_data.length;i++){
    
if(arr.includes(Product_data[i].product_id)){

    totalprice=parseInt(totalprice)+ parseInt(Product_data[i].product_price);
    totaldiscountprice=totaldiscountprice + parseInt(Product_data[i].product_discount_price )

    $('#checkoutdata').append(`<div class="row mt-4 border">
        <div class = "col-md-3">
            <img style = "width:100%"src=" ${Product_data[i].product_img}">
        
        </div>
        <div class="col-md-8"><a href="#" style="text-decoration:none;color:black">${Product_data[i].product_name}</a><br>
            <span><a href="#" style="text-decoration:none;color:black">${Product_data[i].product_description.substr(0,30)}</a></span><br>
            <span style="color:lightslategray">Sold by: Truenet Commerce</span><br>
            <span><a href="#" style="text-decoration:none;color:black"><b></b></a></span>
            <span><a href="#" style="text-decoration:none;color:black"><b>Qty:1</b></a><svg xmlns="http://www.w3.org/2000/svg" width="6" height="3" viewBox="0 0 6 3" class="itemComponents-base-dropDown"><path fill-rule="evenodd" d="M0 0h6L3 3z"></path></svg></span>
            <br><a href="#" style="text-decoration:none;color:black">Rs ${Product_data[i].product_discount_price}</a><a href="#" style="text-decoration:none;color:black"> <del>Rs ${Product_data[i].product_price}</del></a>  <span style="color:red"><a href="#" style="text-decoration:none;color:black">${Product_data[i].product_discount_percenteage}% OFF </a></span> 
        </div>
        <div class="col-md-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" class="itemContainer-base-closeIcon"><path fill="#000" fill-rule="evenodd" d="M9.031 8l6.756-6.756a.731.731 0 0 0 0-1.031.732.732 0 0 0-1.031 0L8 6.969 1.244.213a.732.732 0 0 0-1.031 0 .731.731 0 0 0 0 1.03L6.969 8 .213 14.756a.731.731 0 0 0 0 1.031.732.732 0 0 0 1.031 0L8 9.031l6.756 6.756a.732.732 0 0 0 1.031 0 .731.731 0 0 0 0-1.03L9.031 8z"></path></svg></div>
    </div>`)
    
       
}

}
var amir=document.getElementById("totalamount_price").innerHTML=totalprice;
var amir=document.getElementById("price_afterdiscount").innerHTML=totaldiscountprice;
var amir=document.getElementById("finalprice").innerHTML=totaldiscountprice;
var addressamount=document.getElementById("addtotalamount_price").innerHTML=totalprice;
var addressamount=document.getElementById("addprice_afterdiscount").innerHTML=totaldiscountprice;
var addressamount=document.getElementById("addfinalprice").innerHTML=totaldiscountprice;
console.log(amir)
    }
</script>
</body>

</html>
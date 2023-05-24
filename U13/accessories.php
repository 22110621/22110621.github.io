<div class="banner__accessories">
                <div class="banner__image">
                    <img src="/assets/accessories_banner.png" alt="">
                </div>
                <div class="banner__title">
                    <h1>Accessories</h1>
                </div>
            </div>
                <div class="products-list">   
                    <h2>Accessories</h2>
                    <div class="search-box">
                    <form action="/index.html" method="post">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" name="query" placeholder="Search here..." id="search-query">
                    </form>
                    </div>
                    <div class="filters">
                        <h3>Filters</h3>
                        <form action="/accessories" method="post">
                            <div class="form-group">
                                <label for="price-filter">Filter by price</label>
                                <p class="price-scale">£10 - £100 /mo</p>
                                <input id="price-filter" type="range" name="price" min="10" max="100" value="10">                        
                                <p class="price-scale" id="price-range">£10 /mo</p>
                            </div>
                            <div class="form-group">
                                <label for="price-filter">Filter by type</label>
                                <label class="rad-label">
                                <input type="radio" class="rad-input" name="type">
                                    <div class="rad-design"></div>
                                    <div class="rad-text">Chargers</div>
                                </label>                        
                                <label class="rad-label">
                                <input type="radio" class="rad-input" name="type">
                                    <div class="rad-design"></div>
                                    <div class="rad-text">Ipad Covers</div>
                                </label>                        
                                <label class="rad-label">
                                <input type="radio" class="rad-input" name="type">
                                    <div class="rad-design"></div>
                                    <div class="rad-text">Iphone Covers</div>
                                </label>                        
                                <label class="rad-label">
                                <input type="radio" class="rad-input" name="type">
                                    <div class="rad-design"></div>
                                    <div class="rad-text">Pencils</div>
                                </label>                        
                            </div>
                            <div class="form-group">
                                <label for="price-filter">Filter by Store</label>
                                <label class="rad-label">
                                <input type="radio" class="rad-input" name="store">
                                    <div class="rad-design"></div>
                                    <div class="rad-text">O2</div>
                                </label>                        
                                <label class="rad-label">
                                <input type="radio" class="rad-input" name="store">
                                    <div class="rad-design"></div>
                                    <div class="rad-text">EE</div>
                                </label>                        
                            </div>
                            <div class="form-group">
                                <div class="actions">
                                    <button type="submit" class="btn-primary">Search</button>
                                </div> 
                            </div>
                        </form>
                    </div>    
                    <div class="grid">
                            <div class="product-1 product">
                                <div class="product-title">
                                    <h5>Ipad Cover / Accessories</h5>
                                </div>
                                <div class="product-image">
                                    <img src="./assets/accessories/ipad-cover.png" alt="Heavy duty Ipad Cover" width="320" height="240">
                                </div>
                                <div class="description">
                                    Protect your device from damage with a heavy duty cover, best for all sernios.
                                </div>
                            </div>
                            <div class="product-2 product">
                                <div class="product-title">
                                    <h5>Iphone charger one pack/ Accessories</h5>
                                </div>
                                <div class="product-image">
                                    <img src="/assets/accessories/charger.png" alt="stuff" width="320" height="240">
                                </div>
                                <div class="description">
                                    Charge your devices with stock apple charging plugs.
                                </div>
                            </div>
                            <div class="product-3 product">
                                <div class="product-title">
                                    <h5>Apple Pen/ Accessories</h5>
                                </div>
                                <div class="product-image">
                                    <img src="/assets/accessories/apple-pencil.png" alt="stuff" width="320" height="240">
                                </div>
                                <div class="description">
                                    Boost your productivity using the apple pen with your ipad.
                                </div>
                            </div>
                        </div>  
                            
                        <div class="pagination">
                            <button><<</button>
                            <label class="rad-label">
                                <input type="radio" class="rad-input" name="rad">
                                <div class="rad-design"></div>
                                <div class="rad-text">1</div>
                            </label>
                            
                            <label class="rad-label">
                                <input type="radio" class="rad-input" name="rad">
                                <div class="rad-design"></div>
                                <div class="rad-text">2</div>
                            </label>
                            
                            <label class="rad-label">
                                <input type="radio" class="rad-input" name="rad">
                                <div class="rad-design"></div>
                                <div class="rad-text">3</div>
                            </label>
                            
                            <label class="rad-label">
                                <input type="radio" class="rad-input" name="rad">
                                <div class="rad-design"></div>
                                <div class="rad-text">4</div>
                            </label>
                            <button>>></button>
                            
                        </div>
                    </div>            
                 <script>
                    var slider = document.getElementById("price-filter");
                    var priceFilter = document.getElementById("price-range")
    
                    slider.addEventListener("change" , (e) => {
                        const tempSliderValue = e.target.value; 
                        priceFilter.textContent = `£${tempSliderValue}/mo`;
                    })
            </script>
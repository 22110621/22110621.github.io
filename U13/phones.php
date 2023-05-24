<div class="product-page">
            <div class="products-list">   
                <h2>Phones</h2>
                <div class="search-box">
                <form action="/index.html" method="post">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" name="query" placeholder="Search here..." id="search-query">
                </form>
                </div>
                <div class="filters">
                    <h3>Filters</h3>
                    <form action="/index.html" method="post">
                        <div class="form-group">
                            <label for="price-filter">Filter by price</label>
                            <p class="price-scale">£10 - £100 /mo</p>
                            <input id="price-filter" type="range" name="price" min="10" max="100" value="10">                        
                            <p class="price-scale" id="price-range">£10 /mo</p>
                        </div>
                        <div class="form-group">
                            <label for="price-filter">Filter by type</label>
                            <label class="rad-label">
                            <input type="radio" class="rad-input" name="rad">
                                <div class="rad-design"></div>
                                <div class="rad-text">Android</div>
                            </label>                        
                            <label class="rad-label">
                            <input type="radio" class="rad-input" name="rad">
                                <div class="rad-design"></div>
                                <div class="rad-text">Apple</div>
                            </label>                        
                        </div>
                        <div class="form-group">
                            <label for="price-filter">Include Deals</label>
                            <label class="rad-label">
                            <input type="radio" class="rad-input" name="deals">
                                <div class="rad-design"></div>
                                <div class="rad-text">Yes</div>
                            </label>                        
                            <label class="rad-label">
                            <input type="radio" class="rad-input" name="deals">
                                <div class="rad-design"></div>
                                <div class="rad-text">No</div>
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
                                <h5>This is a phone / Apple Phones</h5>
                            </div>
                            <div class="product-image">
                                <img src="https://placeimg.com/320/240/tech" alt="stuff" width="320" height="240">
                            </div>
                            <div class="description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </div>
                        </div>
                        <div class="product-2 product">
                            <div class="product-title">
                                <h5>This is a phone</h5>
                            </div>
                            <div class="product-image">
                                <img src="https://placeimg.com/320/240/tech" alt="stuff" width="320" height="240">
                            </div>
                            <div class="description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </div>
                        </div>
                        <div class="product-3 product">
                            <div class="product-title">
                                <h5>This is a phone</h5>
                            </div>
                            <div class="product-image">
                                <img src="https://placeimg.com/320/240/tech" alt="stuff" width="320" height="240">
                            </div>
                            <div class="description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </div>
                        </div>
                        <div class="product-4 product">
                            <div class="product-title">
                                <h5>This is a phone</h5>
                            </div>
                            <div class="product-image">
                                <img src="https://placeimg.com/320/240/tech" alt="stuff" width="320" height="240">
                            </div>
                            <div class="description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </div>
                        </div>
                        <div class="product-5 product">
                            <div class="product-title">
                                <h5>This is a phone</h5>
                            </div>
                            <div class="product-image">
                                <img src="https://placeimg.com/320/240/tech" alt="stuff" width="320" height="240">
                            </div>
                            <div class="description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
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
             </div>
             <script>
                var slider = document.getElementById("price-filter");
                var priceFilter = document.getElementById("price-range")

                slider.addEventListener("change" , (e) => {
                    const tempSliderValue = e.target.value; 
                    priceFilter.textContent = `£${tempSliderValue}/mo`;
                })
        </script>
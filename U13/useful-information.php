<div class="banner__search">
                <div class="banner__title">
                    <h2>Useful information</h2>
                </div>
                <form action="/useful-information" method="post" class="form">
                    <input type="text" class="primary-input">
                </form>
            </div>
            <div class="manufacturers">
                <img src="/assets/logo/lenovo.png" alt="Lenovo Logo">
                <img src="/assets/logo/Huawei.png" alt="Huawei Logo">
                <img src="/assets/logo/apple.png" alt="Apple Logo">
            </div>
            <div class="manufacturer-filter">
                <form action="/useful-information" method="post">
                    <h2>Search device</h2>
                    <div class="form-group">
                        <label for="models">Model:</label>
                        <select id="models" name="modal" class="select-group">
                            <option value="iphone-4">Iphone 4</option>
                            <option value="iphone-7">Iphone 7</option>
                            <option value="iphone-10">Iphone 10</option>
                            <option value="iphone-11">Iphone 11</option>
                            <option value="iphone-12">Iphone 12</option>
                            <option value="iphone-12">Iphone 13</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="rows">
                <div class="row-template col-2 w-20">
                    <div class="devices">
                        <div class="card">
                            <div class="card-title">
                               <h3>Iphone 14 pro </h3>
                            </div>
                            <div class="card-image">
                                <img src="/assets/phones/apple/iphone-14.png" alt="">
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-title">
                               <h3>Iphone 13 pro </h3>
                            </div>
                            <div class="card-image">
                                <img src="/assets/phones/apple/iphone-13.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-template col-12">
                    <div class="useful-information">
                        <div class="title">Iphone 13 pro</div>
                        <div class="content">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis deleniti temporibus ex! Veniam repellat sint, esse amet eveniet molestias culpa quos alias deserunt, aut libero magnam. Eligendi iure exercitationem quidem.</p>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati adipisci itaque quis, praesentium quibusdam eius vero exercitationem voluptate at libero labore voluptatem quo maiores. In officia expedita eius impedit commodi.</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos eius distinctio soluta quam temporibus delectus quia ratione, velit, commodi magni voluptas amet, fuga corporis ipsam accusantium repudiandae tempora! Officiis, vitae.</p>
                            <div class="section">
                                <div class="content-divider"></div>
                                <h1>Device information</h1>
                                <div class="content-divider"></div>
                            </div>
                            <p>This iphone is covered by warranty by many service providers such as: O2, EE and t-mobile, we have attached some extra information below to help with finding the best contracts and other information below</p>
                            <br><br>
                            <p>Store locater: <a class="link" href="https://www.o2.co.uk/storelocator">https://www.o2.co.uk/storelocator</a></p>
                            <br>
                            <p>Network Status: <a class="link" href="https://status.o2.co.uk/">https://status.o2.co.uk/</a></p>
                            <br>
                            <p>EE Carrier Coverage: <a class="link" href="https://coverage.ee.co.uk/coverage/ee">https://coverage.ee.co.uk/coverage/ee</a></p>

                            <br><br>
                            <p>Most providers offer international coverage for those looking to use their devices abroad, but some do not.</p>
                            <p>See: <a href="https://ee.co.uk/help/add-ons-benefits-and-plans/call-or-going-abroad/calling-abroad-from-the-uk" class="link">https://ee.co.uk/help/add-ons-benefits-and-plans/call-or-going-abroad/calling-abroad-from-the-uk</a> for more information</p>
                            <div class="section">
                                <div class="content-divider"></div>
                                <h1>Faq</h1>
                                <div class="content-divider"></div>
                            </div>
                            <div class="accordians">
                                <div class="accordian">
                                    <div class="accordian-title">
                                        <h2>Can I get deals for buisnesses or personal use? </h2>
                                    </div>
                                    <div class="accordian-content">
                                        <p>Yes you can, many companies offer exclusive contracts through buisness use, which can be found here for further information: <a href="https://www.o2.co.uk/business" class="link">https://www.o2.co.uk/business</a> You can also find links to external sources from this to find out more</p>
                                    </div>
                                </div>
                                <div class="accordian">
                                    <div class="accordian-title">
                                        <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit?</h2>
                                    </div>
                                    <div class="accordian-content">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia repellendus eum non fugit a consequatur hic laborum id, animi pariatur aut, aspernatur tempora rem doloribus veritatis aperiam magnam iure nesciunt.</p>
                                    </div>
                                </div>
                                <div class="accordian">
                                    <div class="accordian-title">
                                        <h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit?</h2>
                                    </div>
                                    <div class="accordian-content">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur dolorem asperiores pariatur id voluptatum, incidunt voluptate tenetur cumque ea soluta sapiente, autem ipsa odio fugiat officiis ullam eius, velit fuga.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                  // Get all the accordion items
                    const accordions = document.querySelectorAll('.accordian');

                    // Add click event listeners to each accordion item
                    accordions.forEach((accordion) => {
                    const title = accordion.querySelector('.accordian-title');
                    const content = accordion.querySelector('.accordian-content');

                    // Add click event listener to the accordion title
                    title.addEventListener('click', () => {
                        // Toggle the visibility of the accordion content
                        if (content.style.display === 'block') {
                        content.style.display = 'none';
                        accordion.classList.remove('opened');
                        content.setAttribute('aria-expanded', false)
                        } else {
                        // Close other accordions when one is opened
                        accordions.forEach((item) => {
                            const itemContent = item.querySelector('.accordian-content');
                            const itemTitle = item.querySelector('.accordian-title');
                            if (item !== accordion) {
                            itemContent.style.display = 'none';
                            itemContent.setAttribute('aria-expanded', false)
                            accordion.classList.remove('opened');
                            }
                        });

                        content.style.display = 'block';
                        content.setAttribute('aria-expanded', true)
                        accordion.classList.add('opened');
                        }
                    });
                    });
                </script>
            </div>
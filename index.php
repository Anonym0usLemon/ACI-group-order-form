<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Underclass Group Order Form</title>
    <link rel="stylesheet" href="./styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <form method="post" action="post.php" class="container">

        <div class="form-group policy form-active">
            <div class="row">
                <h2 class="form-title">Studio Information</h2>
                <h3 class="form-step">Step 1 - 4</h3>
            </div>

            <div class="form-control">
                <label for="customer-number">Customer Number</label>
                <input type="text" id="customer-number" name="aci_customer_number">
            </div>
            <div class="form-control">
                <label for="studio-name">Studio Name</label>
                <input type="text" id="studio-name" name="studio_name">
            </div>
            <div class="form-control">
                <label for="studio-phone">Studio Phone</label>
                <input type="text" id="studio-phone" name="studio_phone">
            </div>
            <div class="form-control">
                <label for="contact-person">Contact Person</label>
                <input type="text" id="contact-person" name="contact_person">
            </div>
            <div class="form-control">
                <label for="contact-phone">Contact Phone</label>
                <input type="tel" id="contact-phone" name="contact_phone">
            </div>
            <div class="form-control">
                <label for="email">Email</label>
                <input type="email" id="email" name="email">
            </div>
            <div class="form-control">
                <label for="addr_line_1">Address Line 1</label>
                <input type="text" id="addr_line_1" name="addr_line_1">
            </div>
            <div class="form-control">
                <label for="addr_line_2">Address Line 2</label>
                <input type="text" id="addr_line_2" name="addr_line_2">
            </div>
            <div class="form-control">
                <label for="city">City</label>
                <input type="text" id="city" name="city">
            </div>
            <div class="form-control">
                <label for="state">Studio Name</label>
                <input type="text" id="studio-name" name="studio_name">
            </div>

            <div class="form-control">
                <select id="stateSelect">
                    <option value="">Select a State</option>
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District Of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                </select>
            </div>
            <div class="form-control">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip">
            </div>
            <div class="form-control-checkbox">
                <label for="different_address">
                    <input type="checkbox" id="different_address" name="different_address">    
                    <span>Drop Ship to Another Address</span>
                </label>
            </div>

            <div class="drop-ship-group hidden">
            <div class="row">
                <h2 class="form-title">Drop Ship Address</h2>
            </div>
            <div class="form-control">
                <label for="name">Name</label>
                <input type="text" id="name" name="name">
            </div>
            <div class="form-control">
                <label for="drop_ship_addr_line_1">Address Line 1</label>
                <input type="text" id="drop_ship_addr_line_1" name="drop_ship_addr_line_1">
            </div>
            <div class="form-control">
                <label for="drop_ship_addr_line_2">Address Line 2</label>
                <input type="text" id="drop_ship_addr_line_2" name="drop_ship_addr_line_2">
            </div>
            <div class="form-control">
                <label for="drop_ship_city">city</label>
                <input type="text" id="drop_ship_city" name="drop_ship_city">
            </div>
            <div class="form-control">
                <select id="stateSelect">
                    <option value="">Select a State</option>
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District Of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                </select>
            </div>
            <div class="form-control">
                <label for="drop_ship_zip">Zip</label>
                <input type="text" id="drop_ship_zip" name="drop_ship_zip">
            </div>
            </div>

            <div class="button-cont"><a class="button next">Next</a></div>
        </div>

        <div class="form-group">
            <div class="row">
                <h2 class="form-title">Order Information</h2>
                <h3 class="form-step">Step 2 - 4</h3>
            </div>

            <div class="form-control">
                <label for="reference_name">Reference Name on Underclass Package Order</label>
                <input type="text" id="reference_name" name="reference_name">
            </div>
            <div class="radio-buttons">
                <label class="radio-title" for="">Order Type:</label>
                <label for="FTP" class="cont">FTP
                    <input type="radio" checked="checked" id="FTP" name="order_type" value="FTP">
                    <span class="checkmark"></span>
                </label>
                <label for="cd" class="cont">CD Enclosed
                    <input type="radio" name="order_type" value="cd-enclosed" id="cd">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="form-control cd-count hidden">
                <label class="radio-title" for="cd_count">Number of CDs</label>
                <input type="text" id="cd_count" name="cd_count">
            </div>
            <div class="form-control">
                <label for="image_count">Number of images</label>
                <input type="text" id="image_count" name="image_count">
            </div>
            <div class="radio-buttons">
                <label class="radio-title" for="">Are files already cropped?</label>
                <label for="no-crop" class="cont">No
                    <input type="radio" checked="checked" id="no-crop" name="cropped" value="no">
                    <span class="checkmark"></span>
                </label>
                <label for="cropped" class="cont">Yes
                    <input type="radio" name="cropped" value="yes" id="cropped">
                    <span class="checkmark"></span>
                </label>
            </div>

            <div class="button-cont">
                <a class="button previous">Previous</a>
                <a class="button next">Next</a>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <h2 class="form-title">Product Options</h2>
                <h3 class="form-step">Step 3 - 4</h3>
            </div>
            <div class="form-control">
            <select id="productSelection">
                    <option value="">Select a Product</option>
                    <option value="5x7_Group">5x7 Group</option>
                    <option value="6x8_Group">6x8 Group</option>
                    <option value="8x10_Group">8x10 Group</option>
                    <option value="4x10_Panoramic">4x10 Panoramic</option>
                    <option value="8x20_Panoramic">8x20 Panoramic</option>
                    <option value="8x24_Panoramic">8x24 Panoramic</option>
                    <option value="8.5x17_Panoramic">8.5x17 Panoramic</option>
                    <option value="10x20_Panoramic">10x20 Panoramic</option>
                    <option value="10x30_Panoramic">10x30 Panoramic</option>
                    <option value="5x7_Graphic_Group">5x7 Graphic Group</option>
                    <option value="6x8_Graphic_Group">6x8 Graphic Group</option>
                    <option value="8x10_Graphic_Group">8x10 Graphic Group</option>
                </select>
            </div>
            <div class="packagingInstructions" style="padding-inline: 17px">
                <div class="radio-buttons">
                    <label class="radio-title" for="">Packaging Instructions</label>
                    <label class="cont">Bulk
                    <input type="radio" checked="checked" name="packaging-instructions" value="bulk">
                    <span class="checkmark"></span>
                    </label>
                    <label class="small cont">Individual Packaging - Envelopes
                    <input type="radio" name="packaging-instructions" value="individual_envelopes">
                    <span class="checkmark"></span>
                    </label>
                    <label class="small cont">Individual Packaging - Insert Groups in Packages
                    <input type="radio" name="packaging-instructions" value="individual_group_inserts">
                    <span class="checkmark"></span>
                    </label>
                </div>
            </div>            
            <div class="panoramicLamination" style="padding-inline: 17px">
                <div class="radio-buttons">
                    <label class="radio-title" for="">Panoramic Lamination</label>
                    <label class="cont">No
                    <input type="radio" checked="checked" name="panoramic_lamination" value="no">
                    <span class="checkmark"></span>
                    </label>
                    <label class="cont">Yes
                    <input type="radio" name="panoramic_lamination" value="yes">
                    <span class="checkmark"></span>
                    </label>
                </div>
            </div>    
            <div class="borderOptions hidden" style="padding-inline: 17px">
                <div class="radio-buttons">
                    <label class="radio-title" for="">Border Options</label>
                    <label class="cont">Graphic Border Overlay
                    <input type="radio" checked="checked" name="border_option" value="graphic_border_overlay">
                    <span class="checkmark"></span>
                    </label>
                    <label class="small cont">Border Overlay
                    <input type="radio" name="border_option" value="normal_border_overlay">
                    <span class="checkmark"></span>
                    </label>
                </div>  
                <select id="borderColors">
                    <option value="blue_red">Blue / Red</option>
                    <option value="blue_silver">Blue / Silver</option>
                    <option value="blue_white">Blue / White</option>
                    <option value="drk_blue_lght_blue">Dark Blue / Light Blue</option>
                    <option value="royal_blue_orange">Royal Blue / Orange</option>
                    <option value="green_gold">Green / Gold</option>
                    <option value="green_white">Green / White</option>
                    <option value="hunter_green_gold">Hunter Green / Gold</option>
                    <option value="maroon_white">Maroon / White</option>
                    <option value="purple_gold">Purple / Gold</option>
                    <option value="red_black">Red / Black</option>
                    <option value="red_white">Red / White</option>
                    <option value="red_yellow">Red / Yellow</option>
                </select>
            </div>    
            <div class="input-group">
                <label class="input-group-title" for="">Overlay Information</label>
                <div class="form-control">
                    <label for="overlay-color">Overlay Color</label>
                    <input type="text" id="overlay-color" name="overlay_color">
                </div>
                <div class="form-control">
                    <label for="text">Text</label>
                    <input type="text" id="text" name="text" max="26" placeholder="Add a personalized message to your order (Limit 26 characters)">
                </div>
                <div class="form-control-checkbox">
                    <label for="overlay-info-sent-with-images">
                        <input type="checkbox" id="overlay-info-sent-with-images" name="overlay_info_sent_with_images">
                        <span>Overlay information sent with images</span>
                    </label>
                </div>
            </div>
            <div class="form-control-checkbox checkbox-group">
                <label style="flex-direction: column; gap: 0px; margin-bottom: 25px" for="" class="active-text">Principal Products <br> <small>Selected products will be added to print totals <br> for classrooms entered below, but not to attached lists</small></label>
                <label for="principal-set">
                    <input type="checkbox" id="principal-set" name="principal_set">    
                    <span>Principal's Set</span>
                </label>
                <label for="principal-album">
                    <input type="checkbox" id="principal-album" name="principal_album">    
                    <span>Principal's Album</span>
                </label>
            </div>
            <div class="form-control">
                <label for="">Special Instructions</label>
                <textarea name="special-instructions" id="special-instructions" cols="30" rows="10"></textarea>
            </div>

            <div class="button-cont">
                <a class="button previous">Previous</a>
                <a class="button next">Next</a>
            </div>
        </div>

        <div class="form-group">            
            <div class="row">
                <h2 class="form-title">Classroom List</h2>
                <h3 class="form-step">Step 4 - 4</h3>
            </div>

            <div class="input-type-file">
                <label for="classroom_list"><span>Attach a List</span></label>
                <input type="file" id="classroom_list" name="classroom_list">
            </div>
            <div class="table-container">
                <table id="subjects" class="classroom-list-table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Grade or Class</th>
                            <th>File or Teacher Name</th>
                            <th>Qty to Print <br><small style="font-weight: normal; font-size: 10px">(not including Principal Products)</small></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="subject-line">
                            <th><span class="subject-number">1</span> )</th>
                            <td>
                                <input type="text" class="subject-name" placeholder="Grade or Class">
                            </td>
                            <td>
                                <input type="text" class="subject-filename" placeholder="File or Teacher Name"><span class="error hidden">*</span>
                            </td>
                            <td>
                                <input type="number" class="subject-quantity" min="0" max="99" value="1">
                            </td>
                            <td style="text-align:left"><span id="remove" class="remove-row"></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="button-cont">
                <a class="button previous">Previous</a>
                <button type="submit" class="next">Submit</button>
            </div>
        </div>

        <div class="form-group finished">            
            <div class="row">
                <h2 class="form-title">You're all set!</h2>
                <h3>Thank you for contacting us, a member of our marketing team will be in touch shortly!</h3>
            </div>
        </div>
    </form>
</body>
<script>
    //  Form Controls  // 
    //  Description:
    //  Shows/Hides certain inputs depending on the user's selections
    const differentShippingAddr = document.getElementById("different_address");
    const dropShipGroup = document.querySelector('.drop-ship-group');
    differentShippingAddr.addEventListener('change', () => {
        if (differentShippingAddr.checked) {
            dropShipGroup.classList.remove('hidden');
        } else {
            dropShipGroup.classList.add('hidden'); 
        }
    })

    const cdCountInputGroup = document.querySelector('.cd-count');
    const cdRadio = document.getElementById('cd');
    const FTPradio = document.getElementById('FTP');    
    FTPradio.addEventListener('change', () => {
        if (FTPradio.checked) {
            cdCountInputGroup.classList.add('hidden');
        } else {
            cdCountInputGroup.classList.remove('hidden'); 
        }
    })

    cdRadio.addEventListener('change', () => {
        if (cdRadio.checked) {
            cdCountInputGroup.classList.remove('hidden');
        } else {
            cdCountInputGroup.classList.add('hidden');
        }
    })

    const productSelection = document.getElementById('productSelection');
    const packagingInstructions = document.querySelector('.packagingInstructions');
    const panoramicLamination = document.querySelector('.panoramicLamination');
    const borderOptions = document.querySelector('.borderOptions')
    if (productSelection) {
        if (productSelection.value === '') {
            packagingInstructions.classList.add('hidden');
            panoramicLamination.classList.add('hidden');
        }
        productSelection.addEventListener('change', () => {
            if (productSelection.value === '') {
                packagingInstructions.classList.add('hidden'); 
            } else {
                packagingInstructions.classList.remove('hidden'); 
            }

            if (productSelection.value.includes('Panoramic')) {
                panoramicLamination.classList.remove('hidden');
            } else {
                panoramicLamination.classList.add('hidden');
            }

            if (productSelection.value.includes('Graphic')) {
                borderOptions.classList.remove('hidden');
            } else {
                borderOptions.classList.add('hidden'); 
            }

            const productOptions = ['8x20_Panoramic', '8x24_Panoramic', '8.5x17_Panoramic', '10x20_Panoramic', '10x30_Panoramic'];
            const smallPackagingOptions = document.querySelectorAll('.small'); 
            if (productOptions.includes(productSelection.value)) {
                smallPackagingOptions.forEach(element => {
                    element.classList.add('hidden');
                });
            } else {
                smallPackagingOptions.forEach(element => {
                    element.classList.remove('hidden');
                });
            }
        })
    } 



    //  Form Validation  // 
    //  Description: 
    //  TODO: Checks each form-group before allowing the user to go to the next section
    const stateSelect = document.getElementById('stateSelect');
    const form = document.querySelector('form');

    if (form) {
        form.addEventListener('submit', () => {
            if (stateSelect.value === '') {
                event.preventDefault(); 
                alert("Please enter a valid state...");
            }
        })
    }


    //  Form Pagination  //
    // Description: 
    // If you need to add more sections to the form, create another .form-group and include the next/prev buttons within the element.
    // the program will automatically recognize it and include it in the descending order according to the HTML above. 
        formGroup = document.querySelectorAll(".form-group"),
        nextForm = document.querySelectorAll(".button.next"),
        submitBtn = document.querySelectorAll("button")
        prevForm = document.querySelectorAll(".previous"); 

    let formStepCount = 0; 

    // next links - allows you to go to next form step
    nextForm.forEach((button) => {
        button.addEventListener("click", () => {
            event.preventDefault(); 
            formStepCount++;
            goToNextForm(); 
        })
    })

    // previous links - allows you to go to previous form step
    prevForm.forEach((button) => {
        button.addEventListener("click", () => {
            event.preventDefault(); 
            formStepCount--;
            goToNextForm();
        })
    })

    // submit functionality - allows you to submit the form.
    submitBtn.forEach((button) => {
        button.addEventListener("click", () => {
            formStepCount++;
            goToNextForm();
        })
    })

    function goToNextForm() {
        formGroup.forEach((form) => {
            form.classList.contains("form-active") && form.classList.remove("form-active"); 
        });
        
        formGroup[formStepCount].classList.add("form-active"); 
        window.scrollTo(0, 0);
    }

</script>
</html>
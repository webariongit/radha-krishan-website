function initUserForm() {

    const pageInfoUnsubscribe = emitter.subscribe('userInfoUpdated', data => {
        console.log('userInfoUpdated event fired!', data);
      
        console.log(data);
    
        if (data.profile_image) {
            document.getElementById('user-profile-pic-preview').src = data.base_url + data.profile_image;
            document.getElementById('profilePicLabel').src = data.base_url + data.profile_image;
        }
       
        
        
        document.getElementById('name').value = data.name;
        document.getElementById('profileUserNameLabel').innerHTML = data.name;
        document.getElementById('email').value = data.email;
        document.getElementById('profileEmailLabel').innerHTML = data.email;
        document.getElementById('mobile_no').value = data.mobile_no;
    });

    initProfileForm();

    initProfilePic();


}


function initProfileForm() {
    let login_form = document.getElementById('user-profile-form');
    
    let loginBtn = document.querySelector('#user-profile-form [type="submit"]');

    var inputs = document.querySelectorAll("#user-profile-form input");

    function validateEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

    let validator = (input) => {
        let val;
        if (!input.value) {
            input.classList.add("is-invalid");
            val = false;
        } else {
            if (input.type == "email") {
            val = validateEmail(input.value);
            val
                ? input.classList.remove("is-invalid")
                : input.classList.add("is-invalid");
            } else {
            input.classList.remove("is-invalid");
            val = true;
            }
        }
        return val;
    };

    inputs.forEach((input) => {
        input.addEventListener("keyup", function () {
            validator(input);
        });

        input.addEventListener("focusout", function () {
            validator(input);
        });
    });

   


    login_form.addEventListener('submit', (e) => {
        e.preventDefault();
        console.log('submit fired');

        var flag = true;

        inputs.forEach((input) => {
            flag *= validator(input);
        });

        if (!flag) {
            showFormError('profile-success-msg');
            return false;
        } else {
            let data = {
                            name: inputs[0].value,
                            email: inputs[1].value,
                            mobile_no: inputs[2].value,
                        };

                        loginBtn.setAttribute('disabled', true)

                        let spinner = `<div class="spinner-border text-light" role="status"><span class="sr-only"></span></div>`;

                        loginBtn.innerHTML = spinner;

                        //Post request  without data
                        APIFetcher.fetchData(`${API_BASE_URL}/auth/edit-profile`, 'POST', data, localStorage.getItem(TOKEN_PREFIX+'token'))
                        .then(response => {

                                    loginBtn.innerHTML = 'Submit';
                                    loginBtn.removeAttribute("disabled");

                                    // Render HTML using the response data
                                    console.log(response);

                                    if (response.status !== 200) {
                                        for (const key in response.errors) {

                                            console.log(`${key}: ${response.errors[key]}`);
                                            inputs.forEach(i => {
                                                if ( i.id  == key) {
                                                    i.classList.add("is-invalid");
                                                }
                                            })
                                            if ('message'  == key) {
                                                document.querySelector('#message').classList.add("is-invalid");
                                            }
                                        }

                                        showFormError("profile-success-msg");
                                        return;
                                    } else {
                                       
                                
                                        showFormSuccess("profile-success-msg",response.message)

                                        // Toast.success(response.message);
                                    }

                                    

                        })
                        .catch(error => {
                        console.error('Error:', error);
                        });
        }
    })

   

}

function initProfilePic() {
    var fileInput = document.querySelector("#profile-input-field");
    const previewImage = document.getElementById('user-profile-pic-preview');

    var inputs = document.querySelectorAll("#user-profile-form input");

    fileInput.addEventListener('change', () => {
        const selectedFile = fileInput.files[0];

    if (!selectedFile) {
        console.log('No file selected.');
        return;
    }

     // Read the selected file and set the image preview
    const reader = new FileReader();
    reader.onload = (event) => {
        previewImage.src = event.target.result;
    };
    reader.readAsDataURL(selectedFile);

    let data = {
        name: inputs[0].value,
        email: inputs[1].value,
        mobile_no: inputs[2].value,
        'profile_image': selectedFile
    };

    // Make a POST request using Fetch API
    APIFetcher.fetchData(
                            `${API_BASE_URL}/auth/edit-profile`, 'POST', 
                            data, 
                            localStorage.getItem(TOKEN_PREFIX+'token')
                        )
                        .then(response => {

                            // Render HTML using the response data
                            console.log(response);

                            if (response.status !== 200) {
                                // Toast.danger(response.message);
                                return;
                            } else {
                                // Toast.success(response.message);
                            }

                        })
                        .catch(error => {
                        console.error('Error:', error);
                        });
    });
    
    
}

function showFormSuccess(className, msg) {
    document.getElementsByClassName(className)[0].innerHTML =
        '<div class="success alert-success p-2">'+msg+'</div>';
        document.querySelector('.'+className).scrollIntoView({
        behavior: "smooth",
        block: "center",
        inline: "nearest",
        });
        setTimeout(function () {
        document.getElementsByClassName(className)[0].innerHTML = "";
        }, 3000);
}

function moveToNextInput(inputIndex) {
    const input = document.getElementsByClassName('digit-input')[inputIndex - 1];

    if (inputIndex > 1 && input.value.length === 0) {
    // If the input is empty and not the first input, move to the previous input
    document.getElementsByClassName('digit-input')[inputIndex - 2].focus();
    } else if (input.value.length === 1 && inputIndex < 4) {
    // If the input has a digit and not the last input, move to the next input
    document.getElementsByClassName('digit-input')[inputIndex].focus();
    }
}


initUserForm();

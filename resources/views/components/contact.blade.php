<section class="py-5">
    <div class="container px-5">
        <!-- Contact form-->
        <div class="bg-light rounded-4 py-5 px-4 px-md-5">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i
                        class="bi bi-envelope"></i></div>
                <h1 class="fw-bolder">Get in touch</h1>
                <p class="lead fw-normal text-muted mb-0">Let's work together!</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">

                    <form id="contactForm">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text"
                                placeholder="Enter your name..." />
                            <label for="name">Full name</label>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com" />
                            <label for="email">Email address</label>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" />
                            <label for="phone">Phone number</label>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..."
                                style="height: 10rem"></textarea>
                            <label for="message">Message</label>
                        </div>
                </div>
                <div class="d-grid"><button class="btn btn-primary btn-lg" id="submitButton"
                        type="submit">Submit</button></div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>
<script src="{{ asset('assets/js/axios.js') }}"></script>
<script>
    let contactForm = document.getElementById('contactForm')

    contactForm.addEventListener('submit', async (e) => {
        e.preventDefault()
        let name = document.getElementById('name').value
        let email = document.getElementById('email').value
        let phone = document.getElementById('phone').value
        let message = document.getElementById('message').value

        const validateEmailFormat = (email)=> { 
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }
        
        if (name.length === 0) {
            alert('The name filed is must')
            if(name.length > 100) {
                alert('The name filed is max value 100')
            }
        } else if(email.length === 0) {
            alert('The email filed is must')
            if(email.length > 50) {
                alert('The email filed is max value 50')
            } else if(validateEmailFormat(email)) {
                alert('Provide Valid email')
            }
        } else if(phone.length === 0) {
            alert('The phone filed is must')
            if(phone.length > 50) {
                alert('The phone filed is max value 50')
            }
        } else if(message.length === 0) {
            alert('The phone filed is must')
        } else {
            let url = '/contactRequest';
            let formData = {
                "fullName": name,
                "email": email,
                "phone": phone,
                "message": message
            }

            document.getElementById('loading-div').classList.remove('d-none')
            document.getElementById('content-div').classList.add('d-none')
            
            let res = await axios.post(url, formData)
            
            document.getElementById('loading-div').classList.remove('d-none')
            document.getElementById('content-div').classList.add('d-none')
            if(res.status===201 && res.data.status === 201) {
                alert('Submited')
                contactForm.reset()
            } else {
                alert('Some think is worng')
            }
        }
    })

</script>
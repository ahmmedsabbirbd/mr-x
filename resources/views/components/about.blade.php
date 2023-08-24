<section class="bg-light py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                <div class="text-center my-5">
                    <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                    <p class="lead fw-light mb-4" id="title">My name is Start Bootstrap and I help brands grow.</p>
                    <p class="text-muted" id="details">Loem ipsum dolor sit amet, consectetur adipisicing elit. Fugit dolorum itaque qui unde quisquam consequatur autem. Evenriet quasi nobis aliquid cumque officiis sed rem iure ipsa! Praesentium ratione atque dolorem?</p>
                    <div class="d-flex justify-content-center fs-2 gap-4">
                        <a class="text-gradient" href="#!" id="twitter"><i class="bi bi-twitter"></i></a>
                        <a class="text-gradient" href="#!" id="linkedin"><i class="bi bi-linkedin"></i></a>
                        <a class="text-gradient" href="#!" id="github"><i class="bi bi-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    async function GetAboutData () {
        let url = '/aboutData'
        let res = await axios.get(url)
        if(res.status===200) {
            let {title, details} = res.data['data'];
            document.getElementById('title').innerText=title;
            document.getElementById('details').innerText=details;
        } else {
            console.log('data not found')
        }
    }
    GetAboutData()

    async function GetSocialsData () {
        let url = '/socialsData'
        let res = await axios.get(url)

        document.getElementById('loading-div').classList.add('d-none')
        document.getElementById('content-div').classList.remove('d-none')
        if(res.status===200) {
            let {twitterLink, linkedinLink, githubLink} = res.data['data'];
            document.getElementById('twitter').href=twitterLink;
            document.getElementById('linkedin').href=linkedinLink;
            document.getElementById('github').href=githubLink;
        } else {
            console.log('data not found')
        }
    }
    GetSocialsData()
</script>
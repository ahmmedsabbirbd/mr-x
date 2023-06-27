<section class="py-5">
    <div class="container px-5 mb-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div id="project-list" class="col-lg-11 col-xl-9 col-xxl-8">
            </div>
        </div>
    </div>
</section>
<script>
    async function getProjectsData () {
        let url = '/projectsData'

        document.getElementById('loading-div').classList.remove('d-none')
        document.getElementById('content-div').classList.add('d-none')

        let res = await axios.get(url)

        document.getElementById('loading-div').classList.add('d-none')
        document.getElementById('content-div').classList.remove('d-none')

        if(res.status===200) {
            res.data['data'].forEach(project => {
                let {title, previewLink, thumbnailLink, details} = project
                document.getElementById('project-list').innerHTML += (`
                <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center">
                            <div class="p-5">
                                <h2 class="fw-bolder">${title}</h2>
                                <p>${details}</p>
                                <a class="btn btn-primary btn-lg px-3 py-2 me-sm-3 fs-6 fw-bolder"
                            href="${previewLink}" target="_blank">View Project</a>
                            </div>
                            <img class="img-fluid" src="${thumbnailLink}" alt="${title}" />
                        </div>
                    </div>
                </div>
                `)

            });
        } else {
            console.log('data not found')
        }
    }
    getProjectsData()
</script>

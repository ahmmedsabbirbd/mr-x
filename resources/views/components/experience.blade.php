<section>
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h2 class="text-primary fw-bolder mb-0">Experience</h2>
        <a class="btn btn-primary px-4 py-3" href="#!">
            <div class="d-inline-block bi bi-download me-2"></div>
            Download Resume
        </a>
    </div>

    <!-- Experience Card 1-->
    <div id="experience-list">

    </div>

</section>
<script>
    getExperiencesData();
    async function getExperiencesData() {
        let URL = 'http://localhost:8000/experiencesData';
        try {
            document.getElementById('loading-div').classList.remove('d-none');
            document.getElementById('content-div').classList.add('d-none');
            const response = await axios.get(URL);
            response.data.data.forEach((item) => {
                document.getElementById('experience-list').innerHTML += (
                    `<div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-primary fw-bolder mb-2">${item['duration']}</div>
                                        <div class="small fw-bolder">${item['title']}</div>
                                        <div class="small text-muted">${item['designation']}</div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div>${item['details']}</div>
                                </div>
                            </div>
                        </div>
                    </div>`
                );
            });

        } catch (error) {
            alert(error)
        }
    };
</script>

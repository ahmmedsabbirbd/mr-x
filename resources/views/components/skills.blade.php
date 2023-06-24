<div class="mb-5">
    <div class="d-flex align-items-center mb-4">
        <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
            <i class="bi bi-tools"></i>
        </div>
        <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Professional
                Skills</span></h3>
    </div>
    <div class="row row-cols-1 row-cols-md-3 mb-4" id="skill-list">

    </div>
</div>
<script>
    getSkillsData();
    async function getSkillsData() {
        let URL = '/skillsData';
        try {
            const response = await axios.get(URL);
            response.data.data.forEach((item) => {
                document.getElementById('skill-list').innerHTML += (
                    `<div class="col mb-4 mb-md-0">
                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">${item['name']}
                        </div>
                    </div>`
                );
            })
        } catch (error) {
            alert(error);
        }
    }
</script>

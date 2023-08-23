<div class="modal fade" id="ProjectCreateModal" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add New Project</h4>
                <button type="button" id="educationCloseBtn" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="id" class="form-control">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" id="project_title_create" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">previewLink</label>
                    <input type="text" id="project_previewLink_create" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">thumbnailLink</label>
                    <input type="text" id="project_thumbnailLink_create" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Details</label>
                    <textarea name="" id="project_details_create" cols="10" rows="5" class="form-control"></textarea>
                </div>
            </div>
            <div class="modal-footer justify-content-end">
                <button onclick="ProjectCreateSubmitData()" type="button" class="btn btn-primary btn-sm"><i
                        class="fa fa-paper-plane"></i> Submit</button>
            </div>
        </div>
    </div>
</div>
<script>
    //store data
    async function ProjectCreateSubmitData() {
        let project_title_create = document.getElementById('project_title_create').value;
        let project_previewLink_create = document.getElementById('project_previewLink_create').value;
        let project_thumbnailLink_create = document.getElementById('project_thumbnailLink_create').value;
        let project_details_create = document.getElementById('project_details_create').value;

        const formData = {
            title: project_title_create,
            previewLink: project_previewLink_create,
            thumbnailLink: project_thumbnailLink_create,
            details: project_details_create
        }

        let URL = `/admin/projectpage/project`;
        try {
            loading()
            let res = await axios.post(URL, formData);
            loading(false)
            if (res.status === 200) {
                document.getElementById('educationCloseBtn').click();
                document.getElementById('id').value = "";
                document.getElementById('project_title_create').value = "";
                document.getElementById('project_previewLink_create').value = "";
                document.getElementById('project_thumbnailLink_create').value = "";
                document.getElementById('project_details_create').value = "";
                await getProjectList();
                message('success', 'Project created successfully');
            }
        } catch (error) {
            loading(false);
            message('error', 'Something Went Wrong!');
        }
    }
</script>

<div class="modal fade" id="ProjectUpdateModal" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Experience</h4>
                <button type="button" id="project_closeBtn" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="id" class="form-control">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" id="project_title_update" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">previewLink</label>
                    <input type="text" id="project_previewLink_update" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">thumbnailLink</label>
                    <input type="text" id="project_thumbnailLink_update" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Details</label>
                    <textarea name="" id="project_details_update" cols="10" rows="5" class="form-control"></textarea>
                </div>
            </div>
            <div class="modal-footer justify-content-end">
                <button onclick="updateEducation()" type="button" class="btn btn-primary btn-sm"><i
                        class="fa fa-paper-plane"></i> Update</button>
            </div>
        </div>
    </div>
</div>
<script>
    //get all data for edit
    async function ProjectfillExistingData(id) {
        let URL = `/admin/projectpage/showProject/` + id;
        try {
            let res = await axios.get(URL);
            if (res.status === 200) {
                console.log(res);
                let item = res.data;
                document.getElementById('id').value = item['id'];
                document.getElementById('project_title_update').value = item['title'];
                document.getElementById('project_previewLink_update').value = item['previewLink'];
                document.getElementById('project_thumbnailLink_update').value = item['thumbnailLink'];
                document.getElementById('project_details_update').value = item['details'];
            }
        } catch (error) {

        }
    }
    // update experience
    async function updateEducation() {
        let id = document.getElementById('id').value;
        let project_title_update = document.getElementById('project_title_update').value;
        let project_previewLink_update = document.getElementById('project_previewLink_update').value;
        let project_thumbnailLink_update = document.getElementById('project_thumbnailLink_update').value;
        let project_details_update = document.getElementById('project_details_update').value;

        const formData = {
            id: id,
            title: project_title_update,
            previewLink: project_previewLink_update,
            thumbnailLink: project_thumbnailLink_update,
            details: project_details_update
        }

        let URL = `/admin/projectpage/updateProject/` + id;
        try {
            loading();
            let res = await axios.put(URL, formData);
            loading(false)
            if (res.status === 200) {
                document.getElementById('project_closeBtn').click();
                document.getElementById('project-itemList').innerHTML = "";
                await getProjectList();
                message('success', 'Project updated successfully');
            }
        } catch (error) {
            message('error', 'Something went wrong');
        }
    }
</script>

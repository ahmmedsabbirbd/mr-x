<div class="modal fade" id="EducationCreateModal" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add New Education</h4>
                <button type="button" id="educationCloseBtn" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="id" class="form-control">
                <div class="form-group">
                    <label for="">Duration</label>
                    <input type="text" id="education_duration_create" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Institution Name</label>
                    <input type="text" id="education_institutionName_create" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" id="education_address_create" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Field</label>
                    <textarea name="" id="education_field_create" cols="10" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Details</label>
                    <textarea name="" id="education_details_create" cols="10" rows="5" class="form-control"></textarea>
                </div>
            </div>
            <div class="modal-footer justify-content-end">
                <button onclick="EducationCreateSubmitData()" type="button" class="btn btn-primary btn-sm"><i
                        class="fa fa-paper-plane"></i> Submit</button>
            </div>
        </div>
    </div>
</div>
<script>
    //store data
    async function EducationCreateSubmitData() {
        let education_duration_create = document.getElementById('education_duration_create').value;
        let education_institutionName_create = document.getElementById('education_institutionName_create').value;
        let education_address_create = document.getElementById('education_address_create').value;
        let education_field_create = document.getElementById('education_field_create').value;
        let education_details_create = document.getElementById('education_details_create').value;

        const formData = {
            duration: education_duration_create,
            institutionName: education_institutionName_create,
            address: education_address_create,
            field: education_field_create,
            details: education_details_create,
        }

        let URL = `/admin/resumepage/education`;
        try {
            loading()
            let res = await axios.post(URL, formData);
            loading(false)
            if (res.status === 200) {
                document.getElementById('educationCloseBtn').click();
                document.getElementById('id').value = "";
                document.getElementById('education_duration_create').value = "";
                document.getElementById('education_institutionName_create').value = "";
                document.getElementById('education_address_create').value = "";
                document.getElementById('education_field_create').value = "";
                document.getElementById('education_details_create').value = "";
                await getEducationList();
                message('success', 'Education created successfully');
            }
        } catch (error) {
            loading(false);
            message('error', 'Something Went Wrong!');
        }
    }
</script>

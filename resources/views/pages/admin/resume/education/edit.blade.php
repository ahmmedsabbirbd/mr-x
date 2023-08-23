<div class="modal fade" id="EducationUpdateModal" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Experience</h4>
                <button type="button" id="education_closeBtn" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="id" class="form-control">
                <div class="form-group">
                    <label for="">Duration</label>
                    <input type="text" id="education_duration" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Institution Name</label>
                    <input type="text" id="education_institutionName" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" id="education_address" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Field</label>
                    <textarea name="" id="education_field" cols="10" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Details</label>
                    <textarea name="" id="education_details" cols="10" rows="5" class="form-control"></textarea>
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
    async function EducationfillExistingData(id) {
        let URL = `/admin/resumepage/showEducation/` + id;
        try {
            let res = await axios.get(URL);
            if (res.status === 200) {
                console.log(res);
                let item = res.data;
                document.getElementById('id').value = item['id'];
                document.getElementById('education_duration').value = item['duration'];
                document.getElementById('education_institutionName').value = item['institutionName'];
                document.getElementById('education_address').value = item['address'];
                document.getElementById('education_field').value = item['field'];
                document.getElementById('education_details').value = item['details'];

            }
        } catch (error) {

        }
    }
    // update experience
    async function updateEducation() {
        let id = document.getElementById('id').value;
        let education_duration = document.getElementById('education_duration').value;
        let education_institutionName = document.getElementById('education_institutionName').value;
        let education_address = document.getElementById('education_address').value;
        let education_field = document.getElementById('education_field').value;
        let education_details = document.getElementById('education_details').value;

        const formData = {
            id: id,
            duration: education_duration,
            institutionName: education_institutionName,
            address: education_address,
            field: education_field,
            details: education_details,
        }

        let URL = `/admin/resumepage/updateEducation/` + id;
        try {
            loading();
            let res = await axios.put(URL, formData);
            loading(false)
            if (res.status === 200) {
                document.getElementById('education_closeBtn').click();
                document.getElementById('education-itemList').innerHTML = "";
                await getEducationList();
                message('success', 'Experience updated successfully');
            }
        } catch (error) {
            message('error', 'Something went wrong');
        }
    }
</script>

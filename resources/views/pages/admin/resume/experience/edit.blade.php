<div class="modal fade" id="updateModal" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Experience</h4>
                <button type="button" id="e_closeBtn" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="id" class="form-control">
                <div class="form-group">
                    <label for="">Duration</label>
                    <input type="text" id="e_duration" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" id="e_title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Designation</label>
                    <input type="text" id="e_designation" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Details</label>
                    <textarea name="" id="e_details" cols="10" rows="5" class="form-control"></textarea>
                </div>
            </div>
            <div class="modal-footer justify-content-end">
                <button onclick="updateExperience()" type="button" class="btn btn-primary btn-sm"><i
                        class="fa fa-paper-plane"></i> Update</button>
            </div>
        </div>
    </div>
</div>
<script>
    //get all data for edit
    async function fillExistingData(id) {
        let URL = `/admin/resumepage/showExperience/` + id;
        try {
            let res = await axios.get(URL);
            if (res.status === 200) {
                console.log(res);
                let item = res.data;
                document.getElementById('id').value = item['id'];
                document.getElementById('e_duration').value = item['duration'];
                document.getElementById('e_title').value = item['title'];
                document.getElementById('e_designation').value = item['designation'];
                document.getElementById('e_details').value = item['details'];

            }
        } catch (error) {

        }
    }
    // update experience
    async function updateExperience() {
        let id = document.getElementById('id').value;
        let duration = document.getElementById('e_duration').value;
        let title = document.getElementById('e_title').value;
        let designation = document.getElementById('e_designation').value;
        let details = document.getElementById('e_details').value;

        const formData = {
            id: id,
            duration: duration,
            title: title,
            designation: designation,
            details: details,
        }
        let URL = `/admin/resumepage/updateExperience/` + id;
        try {
            loading();
            let res = await axios.put(URL, formData);
            loading(false)
            if (res.status === 200) {
                document.getElementById('e_closeBtn').click();
                document.getElementById('itemList').innerHTML = "";
                await getExperienceList();
                message('success', 'Experience updated successfully');
            }
        } catch (error) {
            message('error', 'Something went wrong');
        }
    }
</script>

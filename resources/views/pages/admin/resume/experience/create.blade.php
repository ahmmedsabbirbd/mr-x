<div class="modal fade" id="createModal" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add New Experience</h4>
                <button type="button" id="closeBtn" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Duration</label>
                    <input type="text" id="duration" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" id="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Designation</label>
                    <input type="text" id="designation" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Details</label>
                    <textarea name="" id="details" cols="10" rows="5" class="form-control"></textarea>
                </div>
            </div>
            <div class="modal-footer justify-content-end">
                <button onclick="submitData()" type="button" class="btn btn-primary btn-sm"><i
                        class="fa fa-paper-plane"></i> Submit</button>
            </div>
        </div>
    </div>
</div>
<script>
    //store data
    async function submitData() {
        let duration = document.getElementById('duration').value;
        let title = document.getElementById('title').value;
        let designation = document.getElementById('designation').value;
        let details = document.getElementById('details').value;
        const formData = {
            duration: duration,
            title: title,
            designation: designation,
            details: details,
        }
        let URL = `/admin/resumepage/experience`;
        try {
            loading()
            let res = await axios.post(URL, formData);
            loading(false)
            if (res.status === 200) {
                document.getElementById('closeBtn').click();
                document.getElementById('duration').value = "";
                document.getElementById('title').value = "";
                document.getElementById('designation').value = "";
                document.getElementById('details').value = "";
                document.getElementById('itemList').innerHTML = "";
                await getExperienceList();
                message('success', 'Experience created successfully');
            }
        } catch (error) {
            loading(false);
            message('error', 'Something Went Wrong!');
        }
    }
</script>
